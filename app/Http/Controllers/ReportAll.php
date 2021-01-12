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
        return DataTables::of($data)->toJson();
    }

    public function jasperRp()
    {
        $jasper = new PHPJasper;
        require  'C:\wamp64\www\realisasi_daerah\vendor\autoload.php';
        $input = 'C:\wamp64\www\realisasi_daerah\public\Report\pendapatan.jasper';
        $output = 'C:\wamp64\www\realisasi_daerah\public\Repor';
        $data_file = 'C:\wamp64\www\realisasi_daerah\public\pendapatan.jrxml';

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
        $i = 1;
        foreach ($fms as $fm) {
            $arr[$i]['kd_rek'] =  $fm->kd_rek_akun;
            $arr[$i]['nama_rek'] = $fm->nm_rek_akun;
            $arr[$i]['ganti'] = $fm->ganti;
            $arr[$i]['tot'] = 0;
            $i++;
        }
        for ($j = 1; $j <= 12; $j++) {
            $m   = Rpendapatan::getAll($j);
            $i = 1;
            foreach ($m as $list) {
                $arr[$i]['jlbulan_' . $j] = ($list->jumlah) ? number_format($list->jumlah, 0, 0, '.') : 0;
                if ($j == 3) {
                    $arr[$i]['rl_1'] =  0;
                    $arr[$i]['kurleb_1'] = 0;
                    $arr[$i]['pr_1'] = 0;
                } else if ($j == 6) {
                    $arr[$i]['rl_2'] =  0;
                    $arr[$i]['kurleb_2'] = 0;
                    $arr[$i]['pr_2'] = 0;
                } else if ($j == 9) {
                    $arr[$i]['rl_3'] =  0;
                    $arr[$i]['kurleb_3'] = 0;
                    $arr[$i]['pr_3'] = 0;
                } else if ($j == 12) {
                    $arr[$i]['rl_4'] =  0;
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
        $data = $this->dataApi();
        return DataTables::of($data)
            ->editColumn('nama_rek', function ($p) {
                if ($p['ganti'] == '' || $p['ganti'] == '--') {
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
}
