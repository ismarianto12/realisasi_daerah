<?php

namespace App\Http\Controllers;

use App\Helpers\Properti_app;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Setupsikd\Tmrekening_akun_kelompok;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis;
use App\Models\Tmpendapatan;

class HomeController extends Controller
{

    function __construct()
    {
        $this->view = 'dashboard.';
        //  $this->middleware('level:admin|satker');
    }

    function index(Request $request)
    {
        //print_r($request->session()->get('year'));
        $tahun    = $request->session()->get('year');
        $data     = null;
        $graf_pad = $this->grafik_pad();
        $pad_months = $this->grafik_bymonth();
        return view($this->view . 'home', compact('data', 'tahun', 'graf_pad', 'pad_months'));
    }

    private function grafik_pad()
    {
        $ix         = 0;
        $kelompoks  = Tmrekening_akun_kelompok::get();
        $tahun      = Properti_app::tahun_sekarang();

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
                $rekjeniss = Tmpendapatan::select(\DB::raw('sum(jumlah) as total'))
                    ->where(\DB::raw('LOCATE(' . $rek_jenis['kd_rek_jenis'] . ',tmrekening_akun_kelompok_jenis_objek_rincian_id)'), '=', 1)
                    ->where('tahun', $tahun)
                    ->first();
                $trekjenis   = ($rekjeniss['total']) ? $rekjeniss['total'] : 0;
                $r[$ix]['kd_rek']['nil']  = $rek_jenis['kd_rek_jenis'];
                $r[$ix]['nm_rek']['nil']  = $rek_jenis['nm_rek_jenis'];
                $r[$ix]['jumlah']['nil']  = $trekjenis;
                $ix++;
            }
        }
        return $r;
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
        $ix         = 0;
        $kelompoks  = Tmrekening_akun_kelompok::get();
        $tahun      = Properti_app::tahun_sekarang();

        foreach ($kelompoks as $kelompok) {
            $r[$ix]['kd_pad']['nil'] =  $kelompok['kd_rek_kelompok'];
            $r[$ix]['nama_pad']['nil'] = $kelompok['nm_rek_kelompok'];
            $r[$ix]['data_pad']['nil'] = hitung($kelompok['kd_rek_kelompok'], $tahun);
            $ix++;
        }
        return $r;
    }

    function page($params)
    {
        if ($params == '') abort('404', 'halaman yang anda cari tidak di temukan');
        $page = $params;
        return view('layouts.iframe', compact('page'));
    }

    function restrict()
    {
        $title = 'halaman di batasi hak akses tidak di izinkan';
        return view('restrict', compact('title'));
    }
}
