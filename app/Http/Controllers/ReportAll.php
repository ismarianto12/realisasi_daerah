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
use Yajra\DataTables\Contracts\DataTable;

use PHPJasper\PHPJasper;

use App\Models\Rpendapatan;

class ReportAll extends Controller
{
    protected $serverDir;
    protected $tahunSekarang;
    protected $view;

    function __construct()
    {
        $this->serverDir     =  $_SERVER['DOCUMENT_ROOT'];
        $this->tahunSekarang = Properti_app::getTahun();
        $this->view          = 'laporan_pendapatan.report_bulan';
        // dd($_SERVER);
    }

    public function api(Request $request)
    {
        $level_id = Properti_app::getlevel();
        if ($level_id == 3) {
            $satker_id = Auth::user()->sikd_satker_id;
        } else {
            $satker_id = $request->tmsikd_satker_id;
        }
        $data = Rpendapatan::getAll(1);
        $tgl_lapor = ($request->tgl_lapor) ? $request->tgl_lapor : 0;
        return \DataTables::of($data)->toJson();
    }

    public function jasperRp()
    {
        $jasper = new PHPJasper;
        require  $this->serverDir . '/vendor/autoload.php';
        $input = $this->serverDir . '/public/Report/pendapatan.jasper';
        $output = $this->serverDir . '/public/Repor';
        $data_file = $this->serverDir . '/public/pendapatan.jrxml';

        $options = [
            'format' => ['pdf'],
            'locale' => 'en',
            'params' => [],
            'db_connection' => [
                'driver' => 'mysql', //mysql, ....
                'username' => 'development',
                'password' => 'Abcde!@#$%',
                'host' => '103.219.112.2',
                'database' => 'retribusi_bapenda2020',
                'port' => '3306'
            ]
        ];
        $jasper->process(
            $input,
            $output,
            $options
        )->execute();
    }


    // report pendapatan perbulan 
    public static function dataApi()
    {
        $fms   = Rpendapatan::getAll(1);
        $gg = 1;
        foreach ($fms as $fm) {
            $arr[$gg]['kd_rek'] =  $fm->kd_rek_akun;
            $arr[$gg]['nama_rek'] = $fm->nm_rek_akun;
            $arr[$gg]['ganti'] = $fm->ganti;
            $arr[$gg]['tot'] = 0;
            $gg++;
        }
        for ($j = 1; $j <= 12; $j++) {
            $m   = Rpendapatan::getAll($j);
            $i   = 1;
            $kj  = 0;
            foreach ($m as $t => $list) {
                // return $j;
                // exit; 
                // dd($j);
                // exit;

                $arr[$i]['jlbulan_' . $j] = ($list->jumlah) ? number_format($list->jumlah, 0, 0, '.') : 0;
                $arr[$i]['slbulan_' . $j] = $list->jumlah;

                if ($j == 3) {
                    $rl_1     = $arr[$i]['slbulan_1'] + $arr[$i]['slbulan_2'] + $arr[$i]['slbulan_3'];
                    $kurleb_1 = '';
                    $pr_1     = '';

                    $arr[$i]['rl_1']     = number_format($rl_1, 0, 0, '.');
                    $arr[$i]['kurleb_1'] = 0;
                    $arr[$i]['pr_1']     = 0;
                } else if ($j == 6) {
                    $rl_2     = $arr[$i]['slbulan_4'] + $arr[$i]['slbulan_5'] + $arr[$i]['slbulan_6'];
                    $kurleb_2 = '';
                    $pr_2     = '';

                    $arr[$i]['rl_2'] = number_format($rl_2, 0, 0, '.');
                    $arr[$i]['kurleb_2'] = 0;
                    $arr[$i]['pr_2'] = 0;
                } else if ($j == 9) {
                    $rl_3     = $arr[$i]['slbulan_7'] + $arr[$i]['slbulan_8'] + $arr[$i]['slbulan_9'];
                    $kurleb_3 = '';
                    $pr_3     = '';

                    $arr[$i]['rl_3'] = $rl_3;
                    $arr[$i]['kurleb_3'] = 0;
                    $arr[$i]['pr_3'] = 0;
                } else if ($j == 12) {
                    $rl_4     = $arr[$i]['slbulan_10'] + 0 + $arr[$i]['slbulan_12'];
                    $kurleb_4 = '';
                    $pr_4  =   '';

                    $arr[$i]['rl_4'] =  number_format($rl_4, 0, 0, '.');
                    $arr[$i]['kurleb_4'] = 0;
                    $arr[$i]['pr_4'] = 0;
                }
                $i++;
            }
        }
        return $arr;
    }


    public function apiPendapatan()
    {
        // header('Content-Type: application/json');
        $data = $this->dataApi();
        return DataTables::of($data)
            ->editColumn('nama_rek', function ($p) {
                if ($p['ganti'] == '' || $p['ganti'] == '--' || $p['ganti'] == '-') {
                    return '<b>' . $p['nama_rek'] . '</b>';
                } else {
                    return $p['nama_rek'];
                }
            })

            ->editColumn('kd_rek', function ($p) {
                if ($p['ganti'] == '' || $p['ganti'] == '--') {
                    return '<b>' . $p['kd_rek'] . '</b>';
                } else {
                    return $p['kd_rek'];
                }
            })
            ->rawColumns(['nama_rek', 'kd_rek'])
            ->toJson();
    }

    // report to excel with border 

    public function reportBy($par)
    {
        $data = $this->dataApi();
        // dd($data['rl_4']);

        if ($par == 'pdf') {

            // dd(Properti_app::getTahun());

            $customPaper = array(0, 0, 767.00, 2000);
            $pdf = PDF::loadView(
                $this->view,
                ['getdatayears' => $data, 'tahun' => $this->tahunSekarang, 'type' => $par]
            )->setPaper($customPaper, 'landscape');
            return $pdf->stream('Report_perbulan.pdf');
        } else {
            header("Pragma: public");
            header("Expires: 0");
            header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
            header("Content-Type: application/force-download");
            header("Content-Type: application/octet-stream");
            header("Content-Type: application/download");
            header("Content-Disposition: attachment;filename=PAD-TANGERANG-SELATAN.xls");
            header("Content-Transfer-Encoding: binary ");
            return view(
                $this->view,
                ['getdatayears' => $data, 'tahun' => $this->tahunSekarang, 'type' => $par]
            );
        }
    }
}
