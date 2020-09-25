<?php

namespace App\Libraries;

use App\Models\Setupsikd\Tmrekening_akun_kelompok;
use Illuminate\Support\Facades\Auth;

use App\Models\Setupsikd\Tmsikd_satker;
use App\Models\Setupsikd\Tmsikd_sub_skpd;

use App\Models\Setupsikd\Tmsikd_bidang;
use App\Models\Setupsikd\Trsikd_bidang_skpd;
use App\Models\Setupsikd\Trsikd_skpkd;

use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek_rincian;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek_rincian_sub;
use App\Helpers\Properti_app;

class List_pendapatan
{
    //Skpd

    public static function detail_object()
    {
        //mengambil data kunci dari semua rekening data
        $satker_id = Auth::user()->sikd_satker_id;
        $data      = Tmrekening_akun_kelompok_jenis_objek_rincian::wheretmsikd_satkers_id($satker_id)->get();
        return $data;
    }
    // Rekening
    public static function getRekKelompokByKode($kdRek)
    {
        return Tmrekening_akun_kelompok::whereIn('kd_rek_kelompok', $kdRek)
            ->select('id', 'kd_rek_kelompok', 'nm_rek_kelompok')
            ->get();
    }

    public static function getRekJenisByKode($kdRek)
    {
        return Tmrekening_akun_kelompok_jenis::where('kd_rek_jenis', 'like', $kdRek . '%')
            ->select('id', 'kd_rek_jenis', 'nm_rek_jenis')
            ->get();
    }

    public static function getListRekObjs($jenis_id)
    {
        $data = self::detail_object();
        foreach ($data as $item) {
            $row[] = $item['id'];
        }  
        if (count($row) == 0) {
            $wherelist = [];
            return $wherelist;
        } else {
            if (count($row) == 1 && count($row) != NULL) {
                $wherelist = $row;
            } else {
                // $rlist     = '\'.$row.\'';
                $wherelist = $row; //implode(',', $row);
            }
            return Tmrekening_akun_kelompok_jenis_objek::where('tmrekening_akun_kelompok_jenis_id', $jenis_id)
                ->whereIn('tmrekening_akun_kelompok_jenis_id', $wherelist)
                ->select('id', 'kd_rek_obj', 'nm_rek_obj')
                ->get();
        }
    }

    public static function getListRekRincians($obj_id)
    {
        $objectid = count($obj_id);
        $satker_id = Auth::user()->sikd_satker_id;
        if ($objectid == 0) {
            $where = [
                'tmsikd_satkers_id' => $satker_id
            ];
        } else {
            $where = [
                'tmsikd_satkers_id' => $satker_id,
                'tmrekening_akun_kelompok_jenis_objek_id' => $obj_id
            ];
        }
        return Tmrekening_akun_kelompok_jenis_objek_rincian::where($where)
            ->select('id', 'kd_rek_rincian_obj', 'nm_rek_rincian_obj')
            ->get();
    }

    public static function getListRekRinciansSub($rincian_id)
    {
        return Tmrekening_akun_kelompok_jenis_objek_rincian_sub::wheretmrekening_akun_kelompok_jenis_objek_rincian_id($rincian_id)
            ->select('id', 'kd_rek_rincian_objek_sub', 'nm_rek_rincian_objek_sub')
            ->get();
    }
}
