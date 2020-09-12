<?php

namespace App\Http\Controllers;

use Access;
use DataTables;
use Html_number;
use Sikd_list_option;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Models\Setupsikd\Tmsikd_bidang;
use App\Models\Setupsikd\Tmsikd_satker;
use App\Models\Setupsikd\Tmsikd_sub_skpd;
use App\Models\Setupsikd\Tmsikd_sumber_anggaran;
use App\Models\Setupsikd\Tmsikd_setup_tahun_anggaran;

use App\Models\Rka\Tmrka;
use App\Models\Rka\Tmrapbd;
use App\Models\Rka\Tmrka_pendapatan;
use App\Models\Rka\Tmrka_mata_anggaran;
use App\Models\Rka\Tmrka_rincian_mata_anggaran;


class ReportController extends Controller
{

    protected $route      = 'report_penerimaan.';
    protected $view       = 'laporan_pendapatan.';
    protected $title      = 'Pendapatan SKPD';
    protected $type       = "RKAPendapatan";
    protected $jdl        = "Report Pendapatan";

    function __construct()
    {
    }

    public function index(Request $request)
    {
        // *
        $title   = 'Laporan Retribusi Per Satker (OPD)';
        $route   = $this->route;
        // $toolbar = Access::getToolbar($this->permission, ['c', 'd']);
        $toolbar = ['c', 'd'];
        //saatker tahun
        $tahuns   = Tmsikd_setup_tahun_anggaran::select('id', 'tahun')->get();
        $tahun_id = ($request->tahun == '' ? $tahuns->first()->id : $request->tahun);

        // Skpd
        $tmsikd_satkers     = Sikd_list_option::listSkpd()->whereNotIn('kode', 300202);
        $tmsikd_satker_id   =    ($request->tmsikd_satker_id == '' ? $tmsikd_satkers->first()->id : $request->tmsikd_satker_id);

        // Sub Skpd
        $tmsikd_sub_skpds   = Sikd_list_option::listSubSkpd($tmsikd_satker_id);
        $tmsikd_sub_skpd_id = ($request->tmsikd_sub_skpd_id == '' ? '0' : $request->tmsikd_sub_skpd_id);

        // Bidang Skpd
        $tmsikd_bidangs   = Sikd_list_option::listSikdBidangSkpd($tmsikd_satker_id);
        $tmsikd_bidang_id = ($request->tmsikd_bidang_id == '' ? $tmsikd_bidangs->first()->id : $request->tmsikd_bidang_id);

        // RAPBD
        $tmrapbds = Tmrapbd::select('id', 'jenis')->wheretmsikd_setup_tahun_anggaran_id($tahun_id)->get();
        if ($tmrapbds->count() == 0) return abort(403, "RAPBD tidak ditemukan.");
        $tmrapbd_id = ($request->tmrapbd_id == '' ? $tmrapbds->first()->id : $request->tmrapbd_id);


        // Validasi
        $tahun_id           = ($request->tahun_id) ? $request->tahun_id : $request->tahun;
        $tmrapbd_id         = ($request->tmrapbd_id) ? $request->tmrapbd_id : [];
        $tmsikd_satker_id   = ($request->tmsikd_satker_id) ? $request->tmsikd_satker_id : [];
        $tmsikd_sub_skpd_id = ($request->tmsikd_sub_skpd_id) ? $request->tmsikd_sub_skpd_id : [];
        $tmsikd_bidang_id   = ($request->tmsikd_bidang_id) ? $request->tmsikd_bidang_id : [];
        //if ($tmsikd_bidang_id == null || $tmsikd_bidang_id == "") return abort(403, "Terdapat data yang tidak terparsing dengan benar.");

        // 
        //$tahuns           = Tmsikd_setup_tahun_anggaran::select('id', 'tahun')->whereid($tahun_id)->first();
        $tmsikd_satkers   = Tmsikd_satker::select('id', 'nama', 'kode')->first();
        $tmsikd_sub_skpds = Tmsikd_sub_skpd::select('id', 'kode', 'nama')->first();
        $tmsikd_bidangs   = Tmsikd_bidang::select('id', 'kd_bidang', 'nm_bidang')->first();
        $tmrapbds         = Tmrapbd::select('id', 'jenis')->first();

        // Sumber Anggaran
        $tmsikd_sumber_anggarans = Tmsikd_sumber_anggaran::select('id', 'kd_sumber_anggaran', 'nm_sumber_anggaran')->wheretmtype_anggaran_id(4)->get();

        // Rekening
        $kdRek = Tmrka_mata_anggaran::getKdRekRka($this->type);

        $rekJenis   = Sikd_list_option::getRekJenisByKode($kdRek);
        $rekJeni_id = ($request->rekJeni_id == '' ? $rekJenis->first()->id : $request->rekJeni_id);

        $rekObjs    = Sikd_list_option::getListRekObjs($rekJeni_id);
        $rekObj_id  = ($request->rekObj_id == '' ? $rekObjs->first()->id : $request->rekObj_id);

        $rekRincians    = Sikd_list_option::getListRekRincians($rekObj_id);
        $rekRincian_id  = $request->rekRincian_id;

        return view($this->view . 'index', compact(
            'title',
            'route',
            'toolbar',
            'tahuns',
            'tahun_id',
            'tmsikd_satkers',
            'tmsikd_satker_id',
            'tmsikd_sub_skpds',
            'tmsikd_sub_skpd_id',
            'rekJenis',
            'rekObjs',
            'rekRincians',
            'rekJeni_id',
            'tmsikd_bidangs',
            'tmsikd_bidang_id',
            'tmrapbds',
            'tmrapbd_id'
        ));
    }

    public function action(Request $request)
    {

        if ($request->tahun_id == '' || $request->jenis_id  == '') return abort('data tidak terparsing dengan baik .. ', 404);
        $where         = [];
        $tahun_id      = $request->tahun_id;
        $tahun         = Tmsikd_setup_tahun_anggaran::find($tahun_id);
        $dari          = $request->dari;
        $sampai        = $request->sampai;

        $render_data   = Tmrka::list_report($where)->orderBy('kd_rek_rincian_obj')->get();

        // tmrekening_akun_kelompok_jenis_objek_rincian_subs
        // tmrekening_akun_kelompok_jenis_objek_rincians
        // tmrekening_akun_kelompok_jenis_objeks
        // tmrekening_akun_kelompok_jenis
        // tmrekening_akun_kelompoks

        // $rekening_akun = Tmrekening_akun_kelompok_jenis_objek_rincians::where('')->get();
        // $akun_kelompok = Tmrekening_akun_kelompok_jenis_objeks::where('')->get();
        // $rekening_akun = Tmrekening_akun_kelompok_jenis::where('')->get();
        //satu untuk report per 1 ranger watu 

        //dua untuk report minggu 
        if ($request->jenis_id == 1) {
            $render_data = '.range_waktu';
        }else if ($request->jenis_id == 2) {
            $render_data = '.range_bulan';
        }else{
            $render_data = 'range_waktu';
        }  
        return view($this->view . $render_data, compact('render_data', 'tahun', 'dari', 'sampai'));
    }

    public function api(Request $request)
    {
        $where = [
            'tmrkas.tmrapbd_id'         => $request->tmrapbd_id,
            'tmrkas.tmsikd_satker_id'   => $request->tmsikd_satker_id,
            //'tmrkas.tmsikd_sub_skpd_id' => $request->tmsikd_sub_skpd_id,
            //'tmrkas.tmsikd_bidang_id'   => $request->tmsikd_bidang_id,
            'tmrkas.rka_type'           => $this->type
        ];
        $r  = Tmrka::reportretribusi($where)->orderBy('kd_rek_rincian_obj')->get();

        return DataTables::of($r)
            ->editColumn('kd_rek_jenis', function ($p) {
                return '<td><strong>' . $p->kd_rek_jenis . '</strong></td><td>' . $p->nm_rek_jenis . '</td><td></td><td></td><td></td><td align="right">' . Html_number::decimal($p->jml_rek_jenis) . '</td>';
            })
            ->editColumn('kd_rek_obj', function ($p) {
                return '<td><strong>' . $p->kd_rek_obj . '</strong></td><td>' . $p->nm_rek_obj . '</td><td></td><td></td><td></td><td align="right">' . Html_number::decimal($p->jml_rek_obj) . '</td>';
            })
            ->editColumn('kd_rek_rincian_obj', function ($p) {
                return '<td><strong>' . $p->kd_rek_rincian_obj . '</strong></td><td>' . $p->nm_rek_rincian_obj . '</td><td></td><td></td><td></td><td align="right">' . Html_number::decimal($p->jml_rek_rincian_obj) . '</td>';
            })
            ->editColumn('kd_rek_rincian_objek_sub', function ($p) {
                return "<a href='" . route($this->route . 'show', $p->id) . "' target='_self'>" . $p->kd_rek_rincian_objek_sub . "</a>";
            })
            ->editColumn('volume', function ($p) {
                return ($p->volume == 0 ? '' : Html_number::decimal($p->volume));
            })
            ->editColumn('jumlah', function ($p) {
                return Html_number::decimal($p->jumlah);
            })
            ->addIndexColumn()
            ->rawColumns(['id', 'kd_rek_rincian_obj', 'kd_rek_obj', 'kd_rek_jenis', 'kd_rek_rincian_objek_sub'])
            ->toJson();
    }
}
