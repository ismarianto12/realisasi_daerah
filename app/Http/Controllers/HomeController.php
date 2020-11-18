<?php

namespace App\Http\Controllers;

use App\Helpers\Properti_app;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Setupsikd\Tmrekening_akun_kelompok;
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
        return view($this->view . 'home', compact('data', 'tahun','graf_pad'));
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
