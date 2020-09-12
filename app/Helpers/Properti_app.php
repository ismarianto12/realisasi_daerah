<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;

class Properti_app
{

    public static function getTahun()
    {
        $session = (Session::get('year')) ?  Session::get('year') : '';
        return $session;
    }

    public static function load_js(array $url)
    {
        $data     = [];
        foreach ($url as $ls) {
            $js[]     =  '<script type="text/javascript" src="' . $ls . '"></script>';
            $data     = $js;
        }
        return $data;
    }


    public static function getlevel()
    {
        $user_id = Auth::user()->id;
        $query   = DB::table('user')
            ->select('user.id', 'user.username', 'tmuser_level.description', 'tmuser_level.mapping_sie', 'tmuser_level.id as level_id')
            ->join('tmuser_level', 'user.tmuser_level_id', '=', 'tmuser_level.id')
            ->where('user.id', $user_id)
            ->get();
        return $query->first()->level_id;
    }


    public static function tgl_indo($tgl)
    { 
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $split = explode('-', $tgl);
        return $split[2] . ' ' . $bulan[(int)$split[1]] . ' ' . $split[0];
    }
}
