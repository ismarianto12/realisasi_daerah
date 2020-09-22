<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Access
{

    public static function getToolbar($permission, $access)
    {

        /*
            Access Toolbar:
                C = Create
                R = Read
                U = Update
                D = Delete
                Save
        */
        $tool = array();
        $rw = self::query(Auth::user()->id, $permission);

        switch ($rw) {
            case 'r':
                if (in_array('r', $access)) $tool = ['r'];
                break;

            case 'rw':
                $tool = $access;
                break;
        }
        return $tool;
    }

    ///date format indonesian
    public static function tgl_indo($tanggal)
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
        $pecahkan = explode('-', $tanggal);

        // variabel pecahkan 0 = tahun
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tanggal
        return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
    }
}
