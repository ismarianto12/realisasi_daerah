<?php

namespace App\Http\Controllers;

use App\Helpers\Properti_app;
use App\Models\Rpendapatan;
use App\Models\Setupsikd\Tmrekening_akun_kelompok;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis;
use App\Models\Tmpendapatan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->view = 'dashboard.';
    }

    public function index(Request $request)
    {
        // dd(Config::get('database.connections.mysql'));
        //print_r($request->session()->get('year'));
        $tahun = Properti_app::getTahun();
        $data = null;
        $graf_pad = $this->grafik_pad();
        $pad_months = $this->grafik_bymonth();

        if (count($graf_pad) > 0) {
            $lsgrafpad = [];
            // dd($graf_pad);
            foreach ($graf_pad as $graf_padf) {
                //get rekening first data
                $koderekenings[] = '\'' . $graf_padf['kd_rek']['nil'] . '\'';
                $namarekenings[] = '\'' . $graf_padf['nm_rek']['nil'] . '\'';
                // get value rekening data jumlah
                $jumlahpendapatans[] = $graf_padf['jumlah']['nil'];
            }
            $kode_rek = implode(',', $koderekenings);
            $namarekening = implode(',', $namarekenings);
            $jumlahpad = implode(',', $jumlahpendapatans);
        } else {
            $kode_rek = [];
            $namarekening = [];
            $jumlahpad = [];
        }
        $kelompoks = Tmrekening_akun_kelompok::get();
        $PadsPie = $this->PadsPie();

        // untuk nilai yang piee
        // $fPie = array();
        foreach ($pad_months as $rPie) {
            $nil = array();
            $fPie[] = '\'' . $rPie['nama_pad']['nil'] . '\'';
        }
        // dd($fPie);

        $frPie = implode(',', $fPie);
        return view(
            $this->view . 'home',
            compact('data', 'kelompoks', 'frPie', 'PadsPie', 'namarekening', 'kode_rek', 'jumlahpad', 'tahun', 'graf_pad', 'pad_months')
        );
    }

    private function PadsPie()
    {
        $ix = 0;
        $kelompoks = Tmrekening_akun_kelompok::get();
        $tahun = Properti_app::tahun_sekarang();

        foreach ($kelompoks as $kelompok) {
            $kpadtot = Tmpendapatan::select(\DB::raw('sum(jumlah) as total'))
                ->where(\DB::raw('LOCATE(' . $kelompok['kd_rek_kelompok'] . ',tmrekening_akun_kelompok_jenis_objek_rincian_id)'), '=', 1)
                ->GroupBy(\DB::raw('MONTH(tanggal_lapor)'))
                ->where('tahun', $tahun)
                ->first();

            $nilai = ($kpadtot['total']) ? ($kpadtot['total']) : 0;
            $r[$ix]['kd_rek']['nil'] = $kelompok['kd_rek_kelompok'];
            $r[$ix]['nm_rek']['nil'] = $kelompok['nm_rek_kelompok'];
            $r[$ix]['jumlah']['nil'] = $nilai;
            $ix++;

            $rek_jeniss = Tmrekening_akun_kelompok_jenis::select('kd_rek_jenis', 'nm_rek_jenis')
                ->where('tmrekening_akun_kelompok_id', $kelompok['kd_rek_kelompok'])
                ->groupBy('kd_rek_jenis')
                ->get();

            foreach ($rek_jeniss as $rek_jenis) {
                $rekjeniss = Tmpendapatan::select(\DB::raw('jumlah as total'))
                    ->where(\DB::raw('LOCATE(' . $rek_jenis['kd_rek_jenis'] . ',tmrekening_akun_kelompok_jenis_objek_rincian_id)'), '=', 1)
                    ->where('tahun', $tahun)
                    ->first();
                // if ($rek_jenis['total'] == '') {
                //     return abort(403, '<p>SELAMT DATANG DI TAHUN ' . Properti_app::getTahun() . 'SAAT INI BELUM ADA PANDAPATAN SILAHKAN SETTING REKENING PENDAPATAN TERLEBIH DAHULU</p>');
                // } else {
                $trekjenis = ($rekjeniss['total']) ? $rekjeniss['total'] : 0;
                $r[$ix]['kd_rek']['nil'] = $rek_jenis['kd_rek_jenis'];
                $r[$ix]['nm_rek']['nil'] = $rek_jenis['nm_rek_jenis'];
                $r[$ix]['jumlah']['nil'] = $trekjenis;
                $ix++;
                // }
            }
        }
        return $r;
    }

    private function grafik_pad()
    {
        $ix = 0;
        $kelompoks = Tmrekening_akun_kelompok::get();
        $tahun = Properti_app::tahun_sekarang();

        foreach ($kelompoks as $kelompok) {

            $kpadtot = Tmpendapatan::select(\DB::raw('sum(jumlah) as total'))
                ->where(\DB::raw('LOCATE(' . $kelompok['kd_rek_kelompok'] . ',tmrekening_akun_kelompok_jenis_objek_rincian_id)'), '=', 1)
                ->GroupBy(\DB::raw('MONTH(tanggal_lapor)'))
                ->where('tahun', $tahun)
                ->first();
            // dd($kpadtot);
            if ($kpadtot == '') {
                // return abort(403, '<p>SELAMT DATANG DI TAHUN ' . Properti_app::getTahun() . 'SAAT INI BELUM ADA PANDAPATAN SILAHKAN SETTING REKENING PENDAPATAN TERLEBIH DAHULU</p>');
            }

            $nilai = ($kpadtot['total']) ? ($kpadtot['total']) : 0;
            $r[$ix]['kd_rek']['nil'] = $kelompok['kd_rek_kelompok'];
            $r[$ix]['nm_rek']['nil'] = $kelompok['nm_rek_kelompok'];
            $r[$ix]['jumlah']['nil'] = $nilai;
            $ix++;

            $rek_jeniss = Tmrekening_akun_kelompok_jenis::select('kd_rek_jenis', 'nm_rek_jenis')
                ->where('tmrekening_akun_kelompok_id', $kelompok['kd_rek_kelompok'])
                ->groupBy('kd_rek_jenis')
                ->get();

            foreach ($rek_jeniss as $rek_jenis) {
                $rekjeniss = Tmpendapatan::select(\DB::raw('sum(jumlah) as total'))
                    ->where(\DB::raw('LOCATE(' . $rek_jenis['kd_rek_jenis'] . ',tmrekening_akun_kelompok_jenis_objek_rincian_id)'), '=', 1)
                    ->where('tahun', $tahun)
                    ->first();
                if ($rek_jeniss == '') {
                    return abort(403, '<p>SELAMT DATANG DI TAHUN ' . Properti_app::getTahun() . 'SAAT INI BELUM ADA PANDAPATAN SILAHKAN SETTING REKENING PENDAPATAN TERLEBIH DAHULU</p>');
                } else {
                    $trekjenis = ($rekjeniss['total']) ? $rekjeniss['total'] : 0;
                    $r[$ix]['kd_rek']['nil'] = $rek_jenis['kd_rek_jenis'];
                    $r[$ix]['nm_rek']['nil'] = $rek_jenis['nm_rek_jenis'];
                    $r[$ix]['jumlah']['nil'] = $trekjenis;
                    $ix++;
                }
            }
        }
        return $r;
        $result = isset($r) ? $r : 0;
        if ($result != 0) {
            return $r;
        } else {
            return abort(403, '<p>SELAMT DATANG DI TAHUN' . Properti_app::getTahun() . 'SAAT INI BELUM ADA PANDAPATAN SILAHKAN SETTING REKENING PENDAPATAN TERLEBIH DAHULU</p>');
        }
    }

    private function grafik_bymonth()
    {
        function hitung($kode_kelompok, $tahun)
        {
            for ($c = 1; $c <= 12; $c++) {
                $kpadtot = Tmpendapatan::select(\DB::raw('sum(jumlah) as total'))
                    ->where(\DB::raw('LOCATE(' . $kode_kelompok . ',tmrekening_akun_kelompok_jenis_objek_rincian_id)'), '=', 1)
                    ->where(\DB::raw('MONTH(tanggal_lapor)'), $c)
                    ->where('tahun', $tahun)
                    ->first();
                $nilai[] = ($kpadtot['total']) ? $kpadtot['total'] : 0;
            }

            return implode(',', $nilai);
        }
        $ix = 0;
        $kelompoks = Tmrekening_akun_kelompok::get();
        $tahun = Properti_app::tahun_sekarang();

        foreach ($kelompoks as $kelompok) {
            $r[$ix]['kd_pad']['nil'] = $kelompok['kd_rek_kelompok'];
            $r[$ix]['nama_pad']['nil'] = $kelompok['nm_rek_kelompok'];
            $r[$ix]['data_pad']['nil'] = hitung($kelompok['kd_rek_kelompok'], $tahun);
            $ix++;
        }
        return $r;
    }

    public function page($params)
    {
        if ($params == '') {
            abort('404', 'halaman yang anda cari tidak di temukan');
        }

        $page = $params;
        return view('layouts.iframe', compact('page'));
    }

    public function restrict()
    {
        $title = 'halaman di batasi hak akses tidak di izinkan';
        return view('restrict', compact('title'));
    }

    // 
    public function today(Tmpendapatan $tmpendapatan)
    {
        $sekarang = Carbon::now()->format('Y-m-d');
        $data     = $tmpendapatan::select(\DB::raw('SUM(jumlah) as total'))
            ->where('tanggal_lapor', $sekarang)
            ->first();
        return response()->json(['total' => number_format($data->total, 0, 0, '.')]);
    }

    public function homeAll(Rpendapatan $rpendapatan)
    {
        # code...
        $data = Rpendapatan::homeDatatable();
        return view($this->view . 'listhometable', compact('data'));
    }
}
