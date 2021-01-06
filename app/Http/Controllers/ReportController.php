<?php

namespace App\Http\Controllers;

use Access;
use DataTables;
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
use Excel;

use App\Export\Exportpendapatan;
use App\Export\Exportpendapatanbulan;
use App\Libraries\Html\Html_number;

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
        $dari             = date('Y-m-d');
        $sampai           = date(date('Y-m-d'), strtotime('+1 day'));
        $tmrekening_akuns = Tmrekening_akun::select('id', 'kd_rek_akun', 'nm_rek_akun')->get();

        return view(
            $this->view . '.report_peropd', [
            'tahun_id' => $tahuns,
            'tahuns' => $tahuns,
            'tmrekening_akuns' => $tmrekening_akuns,
            'tmsikd_satkers' => $tmsikd_satkers,
            'tmsikd_satker_id' => $tmsikd_satker_id,
            'dari' => $dari,
            'sampai' => $sampai
            ]
        );
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

    //expport data perekening jenis
    function action_all(Request $request)
    {
        $tahun_id          = $request->tahun_id;
        $tmsikd_satker_id  = $request->tmsikd_satker_id;
        $dari              = $request->dari;
        $sampai            = $request->sampai;
        $jreport           = 1;
        $rekjenis_id       = $request->rekjenis_id;

        $tahun             = Properti_app::tahun_sekarang();
        //get periode lalu 
        $dperiode          = $tahun . '-01-01';
        $speriode          = date('Y-m-d', strtotime($sampai . '-1 day'));

        $par = [
            'tahun_id' => $tahun_id,
            'tmsikd_satker_id' => $tmsikd_satker_id,
            'dari' => $dari,
            'sampai' => $sampai,
            'tahun' => $tahun,
            'dperiode' => $dperiode,
            'speriode' => $speriode
        ];
        $rpendapatan = Tmpendapatan::report_pendapatan($par);
        // dd($rpendapatan);


        $opd = Sikd_satker::find($request->tmsikd_satker_id);
        //report per rekening jenis 
        $jenis    = $request->jenis;
        if ($jenis == 'xls') {
            $namaFile  = 'Laporan Perekening jenis satuan kerja' . $opd->kode . '-' . $opd->n_opd;
            //   $fnamaFile  = str_replace($namaFile,'-',''); 
            $export      = new Exportpendapatan($request);
            return Excel::download($export, $namaFile . '.xlsx');
        } else if ($jenis == 'rtf') {
            $namaFile = 'Pendapatan_daerah.rtf';
            $this->headerdownload($namaFile);
        }
        if ($jenis == 'rtf') {
            return view(
                $this->view . 'jenis_object', [
                'tahun' => $tahun,
                'dari' => $dari,
                'opd' => $opd,
                'tmsikd_satker_id' => $tmsikd_satker_id,
                'tahun_id' => $tahun_id,
                'sampai' => $sampai,
                'render' => $rpendapatan,
                ]
            );
        } else {
            $customPaper = array(0, 0, 567.00, 1200);
            $pdf = PDF::loadView(
                $this->view . 'jenis_object',
                [
                    'tahun' => $tahun,
                    'dari' => $dari,
                    'opd' => $opd,
                    'tmsikd_satker_id' => $tmsikd_satker_id,
                    'tahun_id' => $tahun_id,
                    'sampai' => $sampai,
                    'render' => $rpendapatan,
                ]
            )->setPaper('F4', 'landscape');
            return $pdf->stream('report_pad');
        }
    }



    public function perbulan(Request $request)
    {
        $tahuns           = Tmsikd_setup_tahun_anggaran::select('id', 'tahun')->get();
        $tmsikd_satkers   = Sikd_list_option::listSkpd()->whereNotIn('kode', 300202);
        $tmsikd_satker_id = ($request->tmsikd_satker_id == '' ? $tmsikd_satkers->first()->id : $request->tmsikd_satker_id);
        $dari             = $request->dari;
        $sampai           = $request->sampai;
        $tmrekening_akuns = Tmrekening_akun::select('id', 'kd_rek_akun', 'nm_rek_akun')->get();
        $tmpendapatan   = new Tmpendapatan;
        return view(
            $this->view . '.index_perbulan', [
            'tahun_id' => $tahuns,
            'tahuns' => $tahuns,
            'tmrekening_akuns' => $tmrekening_akuns,
            'tmsikd_satkers' => $tmsikd_satkers,
            'tmsikd_satker_id' => $tmsikd_satker_id,
            'dari' => $dari,
            'sampai' => $sampai
            ]
        );
    }

    public function action_bulan(Request $request)
    {
        $jenis                = $request->jenis;
        $tahun                = Properti_app::tahun_sekarang();
        $getdatayears         = $this->reportperyears($tahun);

        // return response()->json($getdatayears);
        // die();

        if ($jenis == 'xls') {
            //$namaFile  = 'Laporan Pad Tahun - ' . $tahun;
            // //   $fnamaFile  = str_replace($namaFile,'-',''); 
            // $data      = new Exportpendapatanbulan($request);
            // return Excel::download($data, $namaFile . '.xlsx');
            // $customPaper = array(0, 0, 567.00, 1200);
            header("Content-Type: application/vnd.ms-excel");
            header("Expires: 0");
            header("content-disposition: attachment;filename=Report Pendapatan tahun $tahun.xls");
            return view(
                $this->view . 'report_excel_bulan',
                ['getdatayears' => $getdatayears, 'tahun' => $tahun]
            );
        }
        if ($jenis == 'rtf') {
            $namaFile = 'Pendapatan_daerah.rtf';
            $this->headerdownload($namaFile);
        }
        if ($jenis == 'rtf' || $jenis == 'xls') {
            return view(
                $this->view . 'report_bulan', [
                'tahun' => $tahun,
                'datas' => $getdatayears
                ]
            );
        } else {
            $customPaper = array(0, 0, 567.00, 1200);
            $pdf = PDF::loadView(
                $this->view . 'report_bulan',
                ['getdatayears' => $getdatayears, 'tahun' => $tahun]
            )->setPaper($customPaper, 'landscape');
            return $pdf->stream('Report_perbulan.pdf');
          
        }
    }

    public static function reportperyears()
    {
        header('Content-type: application/json; charset=utf-8');
        $tahun = Properti_app::getTahun();
        $idx = 0;
        $rekenings = Tmrekening_akun::select(
            'kd_rek_akun',
            'nm_rek_akun'
        )->groupBy('kd_rekening')->get();

        foreach ($rekenings as $rekening) {

            $jklakuns = Tmpendapatan::select(\DB::raw('sum(jumlah) as total'))
                ->where(\DB::raw('LOCATE(' . $rekening['kd_rek_akun'] . ',tmrekening_akun_kelompok_jenis_objek_rincian_id)'), '=', 1)
                ->where('tahun', $tahun)
                ->first();
            $jklakun = ($jklakuns['total']) ? number_format($jklakuns['total'], 0, 0, '.') : 0;

            $dataset[$idx]['kd_rek']['val']        = '<td style="text-align:left" colspan=2><b>' . $rekening['kd_rek_akun'] . '<b></td>';
            $dataset[$idx]['nm_rek']['val']        = '<td colspan=3><b>' . $rekening['nm_rek_akun'] . '<b></td>';
            $dataset[$idx]['bold']['val']          = true;
            //$dataset[$idx]['rekposition']['val']   = 'rek';
            $dataset[$idx]['juraian']['val']  = '<td>' . $jklakun . '</td>';
            $dataset[$idx]['table']['val']  = '';
            for ($t = 1; $t <= 12; $t++) {
                $padtot = Tmpendapatan::select(\DB::raw('sum(jumlah) as total'))
                    ->where(\DB::raw('MONTH(tanggal_lapor)'), $t)
                    ->where(\DB::raw('LOCATE(' . $rekening['kd_rek_akun'] . ',tmrekening_akun_kelompok_jenis_objek_rincian_id)'), '=', 1)
                    ->where('tahun', $tahun)
                    ->GroupBy(\DB::raw('MONTH(tanggal_lapor)'))
                    ->first();
                $pad                    = ($padtot['total']) ? number_format($padtot['total'], 0, 0, '.') : '';
                $dataset[$idx]['bulan_' . $t]['val'] = '<td>' . $pad . '</td>';
            }

            $idx++;
            //by kelompok jenis obj     
            $kelompoks = Tmrekening_akun_kelompok::select('kd_rek_kelompok', 'nm_rek_kelompok')
                ->where('tmrekening_akun_id', $rekening['kd_rek_akun'])
                ->groupBy('kd_rek_kelompok')
                ->get();

            foreach ($kelompoks as $kelompok) {

                $jklompokurs = Tmpendapatan::select(\DB::raw('sum(jumlah) as total'))
                    ->where(\DB::raw('LOCATE(' . $kelompok['kd_rek_kelompok'] . ',tmrekening_akun_kelompok_jenis_objek_rincian_id)'), '=', 1)
                    ->where('tahun', $tahun)
                    ->first();
                $jklompokur = ($jklompokurs['total']) ? number_format($jklompokurs['total'], 0, 0, '.') : 0;


                $dataset[$idx]['kd_rek']['val']        = '<td style="text-align:left" colspan=2><b>' . $kelompok['kd_rek_kelompok'] . '<b></td>';
                $dataset[$idx]['nm_rek']['val']        = '<td colspan=2><b>' . $kelompok['nm_rek_kelompok'] . '<b></td>';
                $dataset[$idx]['bold']['val']          = true;
                $dataset[$idx]['juraian']['val']       = '<td>' . $jklompokur . '</td>';
                $dataset[$idx]['table']['val']         = '<td></td>';
                for ($y = 1; $y <= 12; $y++) {
                    $kpadtot = Tmpendapatan::select(\DB::raw('sum(jumlah) as total'))
                        ->where(\DB::raw('MONTH(tanggal_lapor)'), $y)
                        ->where(\DB::raw('LOCATE(' . $kelompok['kd_rek_kelompok'] . ',tmrekening_akun_kelompok_jenis_objek_rincian_id)'), '=', 1)
                        ->GroupBy(\DB::raw('MONTH(tanggal_lapor)'))
                        ->where('tahun', $tahun)
                        ->first();
                    $pad                    = ($kpadtot['total']) ? number_format($kpadtot['total'], 0, 0, '.') : '';
                    $dataset[$idx]['bulan_' . $y]['val'] = '<td>' . $pad . '</td>';
                }
                $idx++;

                //by kelompok jenis obj   
                $rek_jeniss = Tmrekening_akun_kelompok_jenis::select('kd_rek_jenis', 'nm_rek_jenis')
                    ->where('tmrekening_akun_kelompok_id', $kelompok['kd_rek_kelompok'])
                    ->groupBy('kd_rek_jenis')
                    ->get();

                foreach ($rek_jeniss as $rek_jenis) {
                    $rekjeniss = Tmpendapatan::select(\DB::raw('sum(jumlah) as total'))
                        ->where(\DB::raw('LOCATE(' . $rek_jenis['kd_rek_jenis'] . ',tmrekening_akun_kelompok_jenis_objek_rincian_id)'), '=', 1)
                        ->where('tahun', $tahun)
                        ->first();
                    $trekjenis   = ($rekjeniss['total']) ? number_format($rekjeniss['total'], 0, 0, '.') : 0;

                    $dataset[$idx]['kd_rek']['val']       = '<td style="text-align:left" colspan=2><b>' . $rek_jenis['kd_rek_jenis'] . '</b></td>';
                    $dataset[$idx]['nm_rek']['val']       = '<td colspan=1><b>' . $rek_jenis['nm_rek_jenis'] . '</b></td>';
                    $dataset[$idx]['bold']['val']         = true;
                    //$dataset[$idx]['rekposition']['val']   = 'rek_kelompok_jenis';
                    $dataset[$idx]['juraian']['val']  = '<td>' . $trekjenis . '</td>';
                    $dataset[$idx]['table']['val']    = '<td></td><td></td>';
                    for ($g = 1; $g <= 12; $g++) {
                        $obj_data = Tmpendapatan::select(\DB::raw('sum(jumlah) as t_obj'))
                            ->where(\DB::raw('MONTH(tanggal_lapor)'), $g)
                            ->where(\DB::raw('LOCATE(' . $rek_jenis['kd_rek_jenis'] . ',tmrekening_akun_kelompok_jenis_objek_rincian_id)'), '=', 1)
                            ->where('tahun', $tahun)
                            ->groupBy(\DB::raw('MONTH(tanggal_lapor)'))
                            ->first();
                        $obj_jumlah                    = ($obj_data['t_obj']) ? number_format($obj_data['t_obj'], 0, 0, '.') : '';
                        $dataset[$idx]['bulan_' . $g]['val'] = '<td>' . $obj_jumlah . '</td>';
                    }
                    $idx++;

                    //by kelompok jenis obj   
                    $rekobjeks = Tmrekening_akun_kelompok_jenis_objek::select('kd_rek_obj', 'nm_rek_obj')
                        ->where('tmrekening_akun_kelompok_jenis_id', $rek_jenis['kd_rek_jenis'])
                        ->groupBy('kd_rek_obj')
                        ->get();

                    foreach ($rekobjeks as $rekobjek) {

                        $jrobjeks = Tmpendapatan::select(\DB::raw('sum(jumlah) as total'))
                            ->where(\DB::raw('LOCATE(' . $rekobjek['kd_rek_obj'] . ',tmrekening_akun_kelompok_jenis_objek_rincian_id)'), '=', 1)
                            ->where('tahun', $tahun)
                            ->first();
                        $jrobjek   = ($jrobjeks['total']) ? number_format($jrobjeks['total'], 0, 0, '.') : 0;


                        $dataset[$idx]['kd_rek']['val']       = '<td style="text-align:left" colspan=2><b>' . $rekobjek['kd_rek_obj'] . '</b></td>';
                        $dataset[$idx]['nm_rek']['val']       = '<td colspan=1><b>' . $rekobjek['nm_rek_obj'] . '</b></td>';
                        $dataset[$idx]['bold']['val']         = true;
                        //$dataset[$idx]['rekposition']['val']   = 'rek_kelompok_jenis';
                        $dataset[$idx]['juraian']['val']  = '<td>' . $jrobjek . '</td>';
                        $dataset[$idx]['table']['val']    = '<td></td><td></td>';
                        for ($g = 1; $g <= 12; $g++) {
                            $obj_data = Tmpendapatan::select(\DB::raw('sum(jumlah) as t_obj'))
                                ->where(\DB::raw('MONTH(tanggal_lapor)'), $g)
                                ->where(\DB::raw('LOCATE(' . $rekobjek['kd_rek_obj'] . ',tmrekening_akun_kelompok_jenis_objek_rincian_id)'), '=', 1)
                                ->where('tahun', $tahun)
                                ->groupBy(\DB::raw('MONTH(tanggal_lapor)'))
                                ->first();
                            $obj_jumlah                    = ($obj_data['t_obj']) ? number_format($obj_data['t_obj'], 0, 0, '.') : '';
                            $dataset[$idx]['bulan_' . $g]['val'] = '<td>' . $obj_jumlah . '</td>';
                        }
                        $idx++;

                        //by kelompok jenis rincian obj   
                        $rincians = Tmrekening_akun_kelompok_jenis_objek_rincian::where('tmrekening_akun_kelompok_jenis_objek_id', $rekobjek['kd_rek_obj'])
                            ->groupBy('tmrekening_akun_kelompok_jenis_objek_rincians.kd_rek_rincian_obj')
                            ->get();
                        foreach ($rincians as $rincian) {
                            $jrincians = Tmpendapatan::select(\DB::raw('sum(jumlah) as total'))
                                ->where(\DB::raw('LOCATE(' . $rincian['kd_rek_rincian_obj'] . ',tmrekening_akun_kelompok_jenis_objek_rincian_id)'), '=', 1)
                                ->where('tahun', $tahun)
                                ->first();
                            $jrincian   = ($jrincians['total']) ? number_format($jrincians['total'], 0, 0, '.') : 0;


                            //get subrincian rek 
                            $dataset[$idx]['kd_rek']['val']        = '<td style="text-align:left" colspan=1>' . $rincian['kd_rek_rincian_obj'] . '</td>';
                            $dataset[$idx]['nm_rek']['val']        = '<td colspan=1>' . $rincian['nm_rek_rincian_obj'] . '</td>';
                            $dataset[$idx]['bold']['val']          = false;
                            $dataset[$idx]['juraian']['val']       = '<td>' . $jrincian . '</td>';
                            $dataset[$idx]['table']['val']         = '<td></td><td></td><td></td>';
                            for ($j = 1; $j <= 12; $j++) {
                                $jumlah_rinci = Tmpendapatan::select(\DB::raw('sum(jumlah) as t_rinci'))
                                    ->where(\DB::raw('MONTH(tanggal_lapor)'), $j)
                                    ->where('tmrekening_akun_kelompok_jenis_objek_rincian_id', $rincian['kd_rek_rincian_obj'])
                                    ->where('tahun', $tahun)
                                    ->groupBy(\DB::raw('MONTH(tanggal_lapor)'))
                                    ->first();
                                $rincian_jumlah                     = ($jumlah_rinci['t_rinci']) ? number_format($jumlah_rinci['t_rinci'], 0, 0, '.') : '';
                                $dataset[$idx]['bulan_' . $j]['val'] = '<td>' . $rincian_jumlah . '</td>';
                            }
                            $idx++;
                        }
                    }
                }
            }
        } 
        $rData  = array();  
        foreach ($dataset as $list) {
            $row  = array();
            $row[] = '<tr>'. $list['table']['val']; 
            $row[] = $list['kd_rek']['val']; 
            $row[] = $list['nm_rek']['val'];  
            $row[] = $list['juraian']['val'];
            
            for ($j = 1; $j <= 12; $j++){ 
                $row[]=  $list['bulan_'.$j]['val'].'</tr>'; 
            }
            $rData[] = $row;
        }
        $render = strip_tags($rData); 
        return DataTables::of($render)->toJson();
        \DB::connection()->close();
            // $result = isset($dataset) ? $dataset : 0;
            // if ($result != 0) {
            //     return $dataset;
            // } else {
            //     return abort(403, 'MAAF DATA TIDAK ADA SATUAN KERJ OPD TIDAK TERDAFTAR PADA PENCARIAN PAD YANG DI MAKSUD');
            // }
            //  DB::connection()->close();
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
                ->Where('tmrekening_akun_kelompok_jenis_objek_rincian_sub_id', '!=', null)
                ->get();
        } else {
            $data = Tmpendapatan::select(\DB::raw('SUM(jumlah) as total'))
                ->Where('tmrekening_akun_kelompok_jenis_objek_rincian_sub_id', '!=', null)
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
        if ($request->jenis == 0 || $request->jenis == null) {
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
