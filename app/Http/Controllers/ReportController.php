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

        $title   = 'Laporan | ' . $this->title;
        $route   =  $this->route;
        $toolbar =  ['r', 'save'];
        // Validasi
        $satker_id = Auth::user()->sikd_satker_id;
        $level_id  = Properti_app::getlevel();

        //jika akses satker berbeda 
        if ($satker_id == '' && $level_id != 3) {
            $satker_id = isset($request->tmsikd_satker_id) ? $request->tmsikd_satker_id : 0;
        } else {
            // if ($request->tmsikd_satker_id != $satker_id) {
            //     return abort(403, 'Akses tidak sesuai dengan satker id');
            // }
        }
        $tahun_id           = ($request->tahun_id) ? $request->tahun_id : 0;
        $tmrapbd_id         = $request->tmrapbd_id;
        $tmsikd_satker_id   = $request->tmsikd_satker_id;
        $tmsikd_sub_skpd_id = $request->tmsikd_sub_skpd_id;
        $tmsikd_bidang_id   = $request->tmsikd_bidang_id;
        $dari               = $request->dari;
        $sampai             = $request->sampai;

        // 
        $tmrekening_akuns = Tmrekening_akun::select('id', 'kd_rek_akun', 'nm_rek_akun')->get();
        $tahuns           = Tmsikd_setup_tahun_anggaran::select('id', 'tahun')->get();

        $tmsikd_satkers   =  Sikd_list_option::listSkpd()->whereNotIn('kode', 300202);
        $tmsikd_satker_id =  ($request->tmsikd_satker_id == '' ? $tmsikd_satkers->first()->id : $request->tmsikd_satker_id);

        $tmsikd_sub_skpds = Tmsikd_sub_skpd::select('id', 'kode', 'nama')->get();
        $tmsikd_bidangs   = Tmsikd_bidang::select('id', 'kd_bidang', 'nm_bidang')->get();
        $tmrapbds         = Tmrapbd::select('id', 'jenis')->get();

        // Sumber Anggaran
        $tmsikd_sumber_anggarans = Tmsikd_sumber_anggaran::select('id', 'kd_sumber_anggaran', 'nm_sumber_anggaran')->wheretmtype_anggaran_id(4)->get();
        // Rekening
        $kdRek = Tmrka_mata_anggaran::getKdRekRka($this->type);
        $rekJenis   = Sikd_list_option::getRekJenisByKode($kdRek);
        $rekJeni_id = ($request->rekJeni_id == '' ? $rekJenis->first()->id : $request->rekJeni_id);
        $rekObjs    = Sikd_list_option::getListRekObjs($rekJeni_id);
        $rekObj_id  = ($request->rekObj_id == '' ? $rekObjs->first()->id : $request->rekObj_id);

        $rekRincian_id  = $request->rekRincian_id;

        $par = [
            'tmrekening_akun_kelompok_jenis_objek_rincian_id' => $rekRincian_id,
            'tmrekening_akun_kelompok_jenis_objek_id'         => $rekObj_id,
            'tmsikd_satkers_id'                               => $request->tmsikd_satker_id,
            'rekjenis_id'                                     => $request->rekJeni_id,
            //   'tmrka_id' => $tmrka_id
        ];
        $satker          = Tmsikd_satker::find($satker_id);
        $satker_nm       = ($satker['nama']) ? $satker['nama'] : 'Kosong';
        $listRincianSubs = Tmrka_mata_anggaran::getInputListDataSetRincSub($par);


        return view($this->view . 'index', compact(
            'title',
            'route',
            'toolbar',
            'tahun_id',
            'tmrapbd_id',
            'tmsikd_satker_id',
            'tmsikd_sub_skpd_id',
            'tmsikd_bidang_id',
            'tahuns',
            'tmrekening_akuns',
            'tmsikd_satkers',
            'satker_nm',
            'tmsikd_sub_skpds',
            'tmsikd_bidangs',
            'kdRek',
            'rekJenis',
            'rekJeni_id',
            'rekObjs',
            'rekObj_id',
            'rekRincian_id',
            'listRincianSubs',
            'dari',
            'sampai',
            'tmsikd_sumber_anggarans'
        ));
    }


    function alldata(Request $request)
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
    //all data report
    function action_all(Request $request)
    {
        //report pendapatan daerah
        $namaFile = 'Pendapatan_daerah.xls';
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        //dd($request);
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
        if ($dari != '') {
            $data->where('tmpendapatan.tanggal_lapor', '>=', $dari);
        }
        if ($sampai != '') {
            $data->where('tmpendapatan.tanggal_lapor', '<=', $sampai);
        }
        if ($tmsikd_satker_id != '' || $tmsikd_satker_id == 0) {
            $data->where('tmpendapatan.tmsikd_satker_id', '=', $tmsikd_satker_id);
        } else {
            $data->where('tmpendapatan.tmsikd_satker_id', '!=', NULL);
        }
        $filldata =  $data->get();
        // dd($data);
        $tahun             = date('Y');
        $listarget         = new TmpendapatantargetModel;
        $jenisobject       = new Tmrekening_akun_kelompok_jenis;
        $objectrincian     = new Tmrekening_akun_kelompok_jenis_objek_rincian;
        $objectrinciansub  = new Tmrekening_akun_kelompok_jenis_objek_rincian_sub;
        $tmpendapatan      = new Tmpendapatan;
        if ($jreport == 1) {
            //jenis object
            $report = 'jenis_object';
        } else if ($jreport == 2) {
            //per rincian jenis object
            $report = 'rincian_object';
        }
        // dd($listarget);

        $opd = Sikd_satker::find($request->tmsikd_satker_id);
        return view($this->view . $report, [
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
    }

    public function action(Request $request)
    {

        $namaFile = 'Pendapatan_daerah.xls';
        // header("Pragma: public");
        // header("Expires: 0");
        // header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        // header("Content-Type: application/force-download");
        // header("Content-Type: application/octet-stream");
        // header("Content-Type: application/download");
        // header("Content-Disposition: attachment;filename=" . $namaFile . "");
        // header("Content-Transfer-Encoding: binary ");
        // // if ($request->tahun_id == '' || $request->jenis_id  == '' || $request->jenis_id == '') return abort('data tidak terparsing dengan baik .. ', 404);

        $tahun_id      = $request->tahun_id;
        $tahun         = Tmsikd_setup_tahun_anggaran::find($tahun_id);
        $data          = Tmpendapatan::list_report();

        $tahun_id                                = $request->tahun_id;
        $tmsikd_satker_id                        = $request->tmsikd_satker_id;
        $dari                                    = $request->dari;
        $sampai                                  = $request->sampai;
        $tmrekening_akun_id                      = $request->tmrekening_akun_id;
        $tmrekening_akun_kelompok_id             = $request->tmrekening_akun_kelompok_id;
        $tmrekening_akun_kelompok_jenis_id       = $request->tmrekening_akun_kelompok_jenis_id;
        $tmrekening_akun_kelompok_jenis_objek_id = $request->tmrekening_akun_kelompok_jenis_objek_id;

        if ($tmrekening_akun_kelompok_jenis_objek_id != 0) {
            $data->where('tmrekening_akun_kelompok_jenis_objeks.id', '=', $tmrekening_akun_kelompok_jenis_objek_id);
        }
        if ($tmrekening_akun_kelompok_jenis_id != 0) {
            $data->where('tmrekening_akun_kelompok_jenis.id', '=', $tmrekening_akun_kelompok_jenis_id);
        }
        if ($dari != '') {
            $data->where('tmrkas.tanggal_lapor', '>=', $dari);
        }
        if ($sampai != '') {
            $data->where('tmrkas.tanggal_lapor', '<=', $sampai);
        }
        if ($tmsikd_satker_id != '') {
            $data->where('tmrkas.tmsikd_satker_id', '=', $tmsikd_satker_id);
        }
        $data  = $data->get();
        //render data to view if != NULLL
        $render = $data;
        // tmrekening_akun_kelompok_jenis_objek_rincian_subs
        $objectrincian = new Tmrekening_akun_kelompok_jenis_objek_rincian;
        $jenisobject   = new Tmrekening_akun_kelompok_jenis_objek;
        $kolompokjenis = new Tmrekening_akun_kelompok_jenis;
        $akun_kelompok = new Tmrekening_akun_kelompok;

        // $rekening_akun = Tmrekening_akun_kelompok_jenis_objek_rincians::where('')->get();
        // $akun_kelompok = Tmrekening_akun_kelompok_jenis_objeks::where('')->get();
        // $rekening_akun = Tmrekening_akun_kelompok_jenis::where('')->get();
        // satu untuk report per 1 ranger watu 
        // dua untuk report minggu  

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
            'akun_kelompok'
        ));
    }

    public function api(Request $request)
    {
        $data = Tmrka::list_report();

        $tahun_id = $request->tahun_id;
        $tmsikd_satker_id = $request->tmsikd_satker_id;
        $dari = $request->dari;
        $sampai = $request->sampai;
        $tmrekening_akun_id = $request->tmrekening_akun_id;
        $tmrekening_akun_kelompok_id = $request->tmrekening_akun_kelompok_id;
        $tmrekening_akun_kelompok_jenis_id = $request->tmrekening_akun_kelompok_jenis_id;
        $tmrekening_akun_kelompok_jenis_objek_id = $request->tmrekening_akun_kelompok_jenis_objek_id;

        if ($tmrekening_akun_kelompok_jenis_objek_id != 0) {
            $data->where('tmrekening_akun_kelompok_jenis_objeks.id', '=', $tmrekening_akun_kelompok_jenis_objek_id);
        }
        if ($tmrekening_akun_kelompok_jenis_id != 0) {
            $data->where('tmrekening_akun_kelompok_jenis.id', '=', $tmrekening_akun_kelompok_jenis_id);
        }
        if ($dari != '') {
            $data->where('tmrkas.tanggal_lapor', '>=', $dari);
        }
        if ($sampai != '') {
            $data->where('tmrkas.tanggal_lapor', '<=', $sampai);
        }
        if ($tmsikd_satker_id != '') {
            $data->where('tmrkas.tmsikd_satker_id', '=', $tmsikd_satker_id);
        }
        $data = $data->get();
        return DataTables::of($data)
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
            ->editColumn('tgl_lapor', function ($p) {
                return ($p->tanggal_lapor) ?  '<b>' . Properti_app::tgl_indo($p->tanggal_lapor) . '</b>' : '<b>Kosong</b>';
            })
            ->editColumn('volume', function ($p) {
                return ($p->volume == 0 ? '' : Html_number::decimal($p->volume));
            })
            ->editColumn('jumlah', function ($p) {
                return Html_number::decimal($p->jumlah);
            })
            ->rawColumns(['kd_rek_jenis', 'kd_rek_obj', 'kd_rek_rincian_obj', 'kd_rek_rincian_objek_sub', 'tgl_lapor'])
            ->addIndexColumn()
            ->toJson();
    }
    //report get
    public function tesjasper(Request $request)
    {

        // $jns_lap        = $request->jns_lap; 
        $format_reports = Jasper_report::getArrayOutputFormats();
        // $format         = $request->format;
        $format = $request->format;

        $jasper_dir = "resources/views/jasper/";
        $reportName = $jasper_dir . 'report3.jrxml';

        $params = $request->TAHUN;
        // $params = '';
        // dd($params);
        $jasper = new Jasper_report();
        $jasper->createReport($reportName, $format, $params);
        $jasper->showReport();
        // dd($jasper);
    }
    /// json response
    function listnoentri()
    {
        $rekid       = 412; //rekening ini adalah retribusi;
        $tglsekarang = date('Y-m-d');

        $par  = [
            'tmpendapatan.tanggal_lapor' => $tglsekarang,
        ];
        $lsdata =  Tmopd::where($par)
            ->select('*')
            ->join('tmpendapatan', 'tmpendapatan.tmsikd_satker_id', '=', 'tmopds.id')
            ->get();

        $arrpendapatan = [];
        foreach ($lsdata as $ls) {
            $arrpendapatan[] = $ls['tmsikd_satker_id'];
        }
        $tmopd = Tmopd::select('kode', 'n_opd')->whereNotIn('id', $arrpendapatan)->get();
        foreach ($tmopd as $glist) {
            $datauser[] = $glist;
        }
        return response()->json($datauser);
    }

    function grafik_penerimaan(Request $request)
    {
        $tahun_sekarang = Properti_app::tahun_sekarang();
        //pajak atau retribusi 

        $rek_kelompok_id = $request->rek_kelompok_id;
        if ($rek_kelompok_id == '' || $rek_kelompok_id == 0) {
            return abort(403, 'jenis rekenin tidak di temukan');
        }

        $tsekarang      = date('Y');
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
        //dd($didrincian);
        $rekening_sub = Tmrekening_akun_kelompok_jenis_objek_rincian_sub::whereIn('tmrekening_akun_kelompok_jenis_objek_rincian_id', $didrincian)->get();

        //dd($rekening_sub);
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
