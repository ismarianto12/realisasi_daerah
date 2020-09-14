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
use App\Models\Setupsikd\Tmrekening_akun_kelompok;

use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek_rincian;
use App\Libraries\Sikd_list_option;
use App\Helpers\Properti_app;


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
       
        $title   = 'Tambahs | ' . $this->title;
        $route   =  $this->route;
        $toolbar =  ['r', 'save'];
        // Validasi
        $satker_id = Auth::user()->sikd_satker_id;
        $level_id  = Properti_app::getlevel();

        //jika akses satker berbeda 
        if ($satker_id == '' && $level_id != 3) {
        } else {
            if ($request->tmsikd_satker_id != $satker_id) {
                return abort(403,'Akses tidak sesuai dengan satker id');
            }
        }

        $tahun_id           = $request->tahun_id;
        $tmrapbd_id         = $request->tmrapbd_id;
        $tmsikd_satker_id   = $request->tmsikd_satker_id;
        $tmsikd_sub_skpd_id = $request->tmsikd_sub_skpd_id;
        $tmsikd_bidang_id   = $request->tmsikd_bidang_id;
        if ($tmsikd_bidang_id == null || $tmsikd_bidang_id == "") return abort(403, "Terdapat data yang tidak terparsing dengan benar.");

        // 
        $tahuns           = Tmsikd_setup_tahun_anggaran::select('id', 'tahun')->whereid($tahun_id)->first();
        $tmsikd_satkers   = Tmsikd_satker::select('id', 'nama', 'kode')->whereid($tmsikd_satker_id)->first();
        $tmsikd_sub_skpds = Tmsikd_sub_skpd::select('id', 'kode', 'nama')->whereid($tmsikd_sub_skpd_id)->first();
        $tmsikd_bidangs   = Tmsikd_bidang::select('id', 'kd_bidang', 'nm_bidang')->whereid($tmsikd_bidang_id)->first();
        $tmrapbds         = Tmrapbd::select('id', 'jenis')->whereid($tmrapbd_id)->first();

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

        // List Rincian Sub
        $tmrka = Tmrka::firstOrCreate([
            'tmrapbd_id'         => ($tmrapbd_id) ? $tmrapbd_id : NULL,
            'tmsikd_satker_id'   => ($tmsikd_satker_id) ? $tmsikd_satker_id : NULL,
            'tmsikd_sub_skpd_id' => ($tmsikd_sub_skpd_id) ? $tmsikd_sub_skpd_id : 0,
            'tmsikd_bidang_id'   => ($tmsikd_bidang_id)  ? $tmsikd_bidang_id : NULL,
            'rka_type'           => ($this->type) ? $this->type : NULL,
            'tanggal_lapor'      => date('Y-m-d'),
        ]);
        $tmrka_id = $tmrka->id;
        $par = [
            'tmrekening_akun_kelompok_jenis_objek_rincian_id' => $rekRincian_id,
            'tmrekening_akun_kelompok_jenis_objek_id'         => $rekObj_id,
            'tmsikd_satkers_id'                               => $request->tmsikd_satker_id,
            'rekjenis_id'=>$request->rekJeni_id,
            //   'tmrka_id' => $tmrka_id
        ];
        $satker          = Tmsikd_satker::find($request->tmsikd_satker_id);
        $satker_nm       = ($satker->nama) ? $satker->nama : 'Kosong'; 
        $listRincianSubs = Tmrka_mata_anggaran::getInputListDataSetRincSub($par);
        return view($this->view . 'index', compact(
            'title',
            'route',
            'toolbar',
            'tahun_id',
            'tmrka_id',
            'tmrapbd_id',
            'tmsikd_satker_id',
            'tmsikd_sub_skpd_id',
            'tmsikd_bidang_id',
            'tahuns',
            'tmsikd_satkers',
            'satker_nm',
            'tmsikd_sub_skpds',
            'tmsikd_bidangs',
            'kdRek',
            'rekJenis',
            'rekJeni_id',
            'rekObjs',
            'rekObj_id',
            'rekRincians',
            'rekRincian_id',
            'listRincianSubs',
            'tmsikd_sumber_anggarans'
        ));   
          

    }

    public function action(Request $request)
    {

        $namaFile = 'Pendapatan_daerah.xls';
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");


        if ($request->tahun_id == '' || $request->jenis_id  == '') return abort('data tidak terparsing dengan baik .. ', 404);
        $where         = [];
        $tahun_id      = $request->tahun_id;
        $tahun         = Tmsikd_setup_tahun_anggaran::find($tahun_id);

        $dari              = $request->dari;
        $sampai            = $request->sampai;
        $tmsikd_satker_id  = $request->tmsikd_satker_id;

        $where         = [
            'tmsikd_satker_id' => $tmsikd_satker_id,
        ];
        $par = [
            'dari' => $request->dari,
            'sampai' => $request->sampai
        ];
        $render        = Tmrka::list_report($where, $par)->get();
        // tmrekening_akun_kelompok_jenis_objek_rincian_subs
        $objectrincian = new Tmrekening_akun_kelompok_jenis_objek_rincian;
        $jenisobject   = new Tmrekening_akun_kelompok_jenis_objek;
        $kolompokjenis = new Tmrekening_akun_kelompok_jenis;
        $akun_kelompok = new Tmrekening_akun_kelompok;

        // $rekening_akun = Tmrekening_akun_kelompok_jenis_objek_rincians::where('')->get();
        // $akun_kelompok = Tmrekening_akun_kelompok_jenis_objeks::where('')->get();
        // $rekening_akun = Tmrekening_akun_kelompok_jenis::where('')->get();
        //satu untuk report per 1 ranger watu 
        //dua untuk report minggu 
        if ($request->tmsikd_satker_id) {
            $satker_id        = $request->tmsikd_satker_id;
            $satker           = Tmsikd_satker::find($satker_id);
            $satker_name      = ($satker['nama']) ? $satker['nama'] : 'Kosong';
            $kode             = ($satker['kode']) ? $satker['kode'] : 'Kosong';
            $tmsikd_satker_id = $request->tmsikd_satker_id;
        } else {
            $satker_name      =  'Kosong';
            $kode             =  'Kosong';
            $tmsikd_satker_id =  '';
        }
        if ($request->jenis_id == 1) {
            $render_data = '.range_waktu';
        } else if ($request->jenis_id == 2) {
            $render_data = '.range_bulan';
        } else {
            $render_data = '.range_waktu';
        }
        return view($this->view . $render_data, compact(
            'render',
            'tmsikd_satker_id',
            'satker_name',
            'kode',
            'tahun',
            'dari',
            'sampai',
            'objectrincian',
            'jenisobject',
            'kolompokjenis',
            'akun_kelompok',
        ));
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
