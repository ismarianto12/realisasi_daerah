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

        switch($rw){
            case 'r':
                if(in_array('r', $access)) $tool = ['r'];
                break;

            case 'rw':
                $tool = $access;
                break;
        }
        return $tool;
    }

    public static function query($user_id, $name_access)
    {
        return DB::table('tmmenu_items')
                    ->select('tmmenu_item_accesses.access_type')
                    ->join('tmmenu_item_accesses', 'tmmenu_items.id', '=', 'tmmenu_item_accesses.tmmenu_item_id')
                    ->join('user_has_tmgroups', 'tmmenu_item_accesses.tmgroup_id', '=', 'user_has_tmgroups.tmgroup_id')
                    ->where('user_has_tmgroups.user_id', $user_id)
                    ->where('tmmenu_items.name_access', $name_access)
                    ->first()
                    ->access_type;
    }

    ///date format indonesian
    public static function tgl_indo($tanggal){
        $bulan = array (
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
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }
}
