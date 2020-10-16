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
use App\Models\Setupsikd\Tmrekening_akun;

use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek_rincian;
use App\Helpers\Properti_app;
use App\Libraries\Jasper_report;
use App\Libraries\List_pendapatan;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek_rincian_sub;
use App\Models\Sikd_satker;
use App\Models\Tmpendapatan;
use App\Models\TmpendapatantargetModel;
use App\Models\Tmopd;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use function PHPSTORM_META\map;
use Barryvdh\DomPDF\Facade as PDF;


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

    function index(Request $request)
    {
        $tahuns           = Tmsikd_setup_tahun_anggaran::select('id', 'tahun')->get();
        $tmsikd_satkers   = Sikd_list_option::listSkpd()->whereNotIn('kode', 300202);
        $tmsikd_satker_id = ($request->tmsikd_satker_id == '' ? $tmsikd_satkers->first()->id : $request->tmsikd_satker_id);
        $dari             = $request->dari;
        $sampai           = $request->sampai;
        $tmrekening_akuns = Tmrekening_akun::select('id', 'kd_rek_akun', 'nm_rek_akun')->get();

        return view($this->view . '.report_all', [
            'tahun_id' => $tahuns,
            'tahuns' => $tahuns,
            'tmrekening_akuns' => $tmrekening_akuns,
            'tmsikd_satkers' => $tmsikd_satkers,
            'tmsikd_satker_id' => $tmsikd_satker_id,
            'dari' => $dari,
            'sampai' => $sampai
        ]);
    }

    //function download
    private function headerdownload($namaFile)
    {
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");
    }

    //all data report
    function action_all(Request $request)
    {
        //report per rekening jenis 
        $jenis    = $request->jenis;
        if ($jenis == 'xls') {
            $namaFile = 'Pendapatan_daerah.xls';
            $this->headerdownload($namaFile);
        }
        if ($jenis == 'rtf') {
            $namaFile = 'Pendapatan_daerah.rtf';
            $this->headerdownload($namaFile);
        }

        $tahun_id          = $request->tahun_id;
        $tmsikd_satker_id  = $request->tmsikd_satker_id;
        $dari              = $request->dari;
        $sampai            = $request->sampai;
        $jreport           = 1;
        $rekjenis_id       = $request->tmrekening_akun_kelompok_jenis_id;

        $groupby           = 'tmrekening_akun_kelompok_jenis.id';
        $data              = Tmpendapatan::report_pendapatan([], $groupby);

        if ($rekjenis_id != 0) {
            $data->where('tmrekening_akun_kelompok_jenis.id', '=', $rekjenis_id);
        }
        if ($dari != '' && $sampai != '') {
            $data->where('tmpendapatan.tanggal_lapor', '>=', $dari);
            $data->where('tmpendapatan.tanggal_lapor', '<=', $sampai);
        }
        if ($tmsikd_satker_id != '' || $tmsikd_satker_id != 0) {
            $data->where('tmpendapatan.tmsikd_satker_id', '=', $tmsikd_satker_id);
        }
        if ($tmsikd_satker_id == 0) {
            $data->where('tmpendapatan.tmsikd_satker_id', '!=', NULL);
        }
        $filldata =  $data->get();
        // dd($data);
        $tahun             = Properti_app::tahun_sekarang();
        $listarget         = new TmpendapatantargetModel;
        $jenisobject       = new Tmrekening_akun_kelompok_jenis;
        $objectrincian     = new Tmrekening_akun_kelompok_jenis_objek_rincian;
        $objectrinciansub  = new Tmrekening_akun_kelompok_jenis_objek_rincian_sub;
        $tmpendapatan      = new Tmpendapatan;
        $opd = Sikd_satker::find($request->tmsikd_satker_id);

        if ($jenis == 'rtf' || $jenis == 'xls') {
            return view($this->view . 'jenis_object', [
                'tahun' => $tahun,
                'dari' => $dari,
                'opd' => $opd,
                'tmsikd_satker_id' => $tmsikd_satker_id,
                'tahun_id' => $tahun_id,
                'sampai' => $sampai,
                'render' => $filldata,
                'listarget' => $listarget,
                'tmpendapatan' => $tmpendapatan,
                'jenisobject' => $jenisobject,
                'objectrincian' => $objectrincian,
                'objectrinciansub' => $objectrinciansub,
            ]);
        } else {
            // $pdf = PDF::loadView
            return view(
                $this->view . 'jenis_object',
                [
                    'tahun' => $tahun,
                    'dari' => $dari,
                    'opd' => $opd,
                    'tmsikd_satker_id' => $tmsikd_satker_id,
                    'tahun_id' => $tahun_id,
                    'sampai' => $sampai,
                    'render' => $filldata,
                    'listarget' => $listarget,
                    'tmpendapatan' => $tmpendapatan,
                    'jenisobject' => $jenisobject,
                    'objectrincian' => $objectrincian,
                    'objectrinciansub' => $objectrinciansub,
                ]
            );
            //     ->setPaper('A4', 'landscape');
            // return $pdf->stream('report_pad');
        }
    }

    // bulan bulan     
    public function perbulan(Request $request)
    {
        $tahuns           = Tmsikd_setup_tahun_anggaran::select('id', 'tahun')->get();
        $tmsikd_satkers   = Sikd_list_option::listSkpd()->whereNotIn('kode', 300202);
        $tmsikd_satker_id = ($request->tmsikd_satker_id == '' ? $tmsikd_satkers->first()->id : $request->tmsikd_satker_id);
        $dari             = $request->dari;
        $sampai           = $request->sampai;
        $tmrekening_akuns = Tmrekening_akun::select('id', 'kd_rek_akun', 'nm_rek_akun')->get();
        $tmpendapatan   = new Tmpendapatan;
        return view($this->view . '.index_perbulan', [
            'tahun_id' => $tahuns,
            'tahuns' => $tahuns,
            'tmrekening_akuns' => $tmrekening_akuns,
            'tmsikd_satkers' => $tmsikd_satkers,
            'tmsikd_satker_id' => $tmsikd_satker_id,
            'dari' => $dari,
            'sampai' => $sampai
        ]);
    }

    public function action_bulan(Request $request)
    {
        //report per rekening jenis 
        $jenis    = $request->jenis;
        if ($jenis == 'xls') {
            $namaFile = 'Pendapatan_daerah.xls';
            $this->headerdownload($namaFile);
        }
        if ($jenis == 'rtf') {
            $namaFile = 'Pendapatan_daerah.rtf';
            $this->headerdownload($namaFile);
        }
        $tahun_id          = $request->tahun_id;
        $tmsikd_satker_id  = $request->tmsikd_satker_id;
        $dari              = $request->dari;
        $sampai            = $request->sampai;

        $tahun             = Properti_app::tahun_sekarang();
        $listarget         = new TmpendapatantargetModel;

        $akun_kelompok        = Tmrekening_akun_kelompok::get();
        $kelompok_jenis       = new Tmrekening_akun_kelompok_jenis;
        $kelompok_object      = new Tmrekening_akun_kelompok_jenis_objek;
        $kelompok_rincian     = new Tmrekening_akun_kelompok_jenis_objek_rincian;
        $kelompok_sub_rincian = new Tmrekening_akun_kelompok_jenis_objek_rincian_sub;
        $tmpendapatan         = new Tmpendapatan;

        $opd                  = Sikd_satker::find($request->tmsikd_satker_id);
        //get jumlah data per rek obj 
        $tbyrincian     = Tmpendapatan::with('Tmrekening_akun_kelompok_jenis_objek_rincian');
        $tbyrincian_sub = Tmpendapatan::with('Tmrekening_akun_kelompok_jenis_objek_rincian_sub');

        $total_pad = Tmpendapatan::select(\DB::raw('sum(jumlah) as total_pad'))->where(['tahun' => $tahun])->first();

        if ($jenis == 'rtf' || $jenis == 'xls') {
            return view($this->view . 'report_bulan', [
                'tahun' => $tahun,
                'dari' => $dari,
                'opd' => $opd,
                'tmsikd_satker_id' => $tmsikd_satker_id,
                'tahun_id' => $tahun_id,
                'sampai' => $sampai,
                'listarget' => $listarget,
                'tmpendapatan' => $tmpendapatan,
                // 'jenisobject' => $jenisobject,
                // 'objectrincian' => $objectrincian,
                // 'objectrinciansub' => $objectrinciansub,
                // get list rekening pendapatan
                'total_pad' => $total_pad,
                'tbyrincian' => $tbyrincian,
                'tbyrincian_sub' => $tbyrincian_sub,

                'akun_kelompok' => $akun_kelompok,
                'kelompok_jenis' => $kelompok_jenis,
                'kelompok_object' => $kelompok_object,
                'kelompok_rincian' => $kelompok_rincian,
                'kelompok_sub_rincian' => $kelompok_sub_rincian,
            ]);
        } else {
            $customPaper = array(0, 0, 567.00, 1200);
            $pdf = PDF::loadView($this->view . 'report_bulan', [
                'tahun' => $tahun,
                'dari' => $dari,
                'opd' => $opd,
                'tmsikd_satker_id' => $tmsikd_satker_id,
                'tahun_id' => $tahun_id,
                'sampai' => $sampai,
                'tmpendapatan' => $tmpendapatan,
                'total_pad' => $total_pad,
                'listarget' => $listarget,
                'akun_kelompok' => $akun_kelompok,
                'kelompok_jenis' => $kelompok_jenis,
                'kelompok_object' => $kelompok_object,
                'kelompok_rincian' => $kelompok_rincian,
                'kelompok_sub_rincian' => $kelompok_sub_rincian,
            ])
                ->setPaper($customPaper, 'landscape');
            return $pdf->stream('Report_perbulan.pdf');
        }
    }


    function grafik_penerimaan(Request $request)
    {
        $tahun_sekarang = Properti_app::tahun_sekarang();
        //pajak atau retribusi 
        $rek_kelompok_id = $request->rek_kelompok_id;
        if ($rek_kelompok_id == '' || $rek_kelompok_id == 0) {
            return abort(403, 'jenis rekenin tidak di temukan');
        }

        $tsekarang      = Properti_app::tahun_sekarang();
        $par = [
            'tahun' => $tsekarang
        ];
        //get kelompok rekening terlebih dahulu 
        $kelompok           = Tmrekening_akun_kelompok_jenis::find($rek_kelompok_id);
        $jenis_obj          = Tmrekening_akun_kelompok_jenis_objek::where('tmrekening_akun_kelompok_jenis_id', $kelompok->id)->first();
        $tmrekening_rincian = Tmrekening_akun_kelompok_jenis_objek_rincian::where('tmrekening_akun_kelompok_jenis_objek_id', $jenis_obj->id)->get();

        // dd($tmrekening_rincian);
        foreach ($tmrekening_rincian as $rinci) {
            $didrincian[] = $rinci['id'];
        }
        $rekening_sub = Tmrekening_akun_kelompok_jenis_objek_rincian_sub::whereIn('tmrekening_akun_kelompok_jenis_objek_rincian_id', $didrincian)->get();
        foreach ($rekening_sub as $sub) {
            $dsubs[] = $sub['id'];
        }

        $data = Tmpendapatan::select('tahun', 'jumlah', 'tanggal_lapor')->where($par)->whereIn('tmrekening_akun_kelompok_jenis_objek_rincian_sub_id', $dsubs)
            ->groupBy('tmrekening_akun_kelompok_jenis_objek_rincian_sub_id', \DB::raw('DATE_FORMAT(tanggal_lapor,"%M")'))
            ->get();
        return response()->json($data);
    }


    //get total pad 
    function total_pad(Request $request)
    {

        $rsekarang = $request->tanggal_lapor;
        $sekarang  = Carbon::now()->format('Y-m-d');

        if ($rsekarang == 1) {
            $par = ['tanggal_lapor' => $sekarang];
            $data = Tmpendapatan::select(\DB::raw('SUM(jumlah) as total'))
                ->where($par)
                ->Where('tmrekening_akun_kelompok_jenis_objek_rincian_sub_id', '!=', NULL)
                ->get();
        } else {
            $data = Tmpendapatan::select(\DB::raw('SUM(jumlah) as total'))
                ->Where('tmrekening_akun_kelompok_jenis_objek_rincian_sub_id', '!=', NULL)
                ->get();
        }
        $result  = ($data->first()->total) ? number_format($data->first()->total, 0, 0, '.') : 0;
        return response()->json(['total' => $result]);
    }

    function jumlah_rek(Request $request)
    {
        //1 rekening object
        //2 rekening jenis 
        //3 rekening rincian_sub 
        if ($request->jenis == 0 || $request->jenis == NULL) {
            return abort('404', 'Response tidak benar');
        }
        $jenis = $request->jenis;
        if ($jenis == 1) {
            $data = Tmrekening_akun_kelompok_jenis::get();
            $jumlah = $data->count();
        } elseif ($jenis == 2) {
            $data = Tmrekening_akun_kelompok_jenis_objek::get();
            $jumlah = $data->count();
        } elseif ($jenis == 3) {
            $data = Tmrekening_akun_kelompok_jenis_objek_rincian_sub::get();
            $jumlah = $data->count();
        }
        return response()->json(['data' => $jumlah]);
    }
}
