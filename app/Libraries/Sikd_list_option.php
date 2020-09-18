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

class Sikd_list_option
{

    //Skpd
    public static function listSkpd()
    {
        $auth = Auth::user();

        $satker = Tmsikd_satker::select('id', 'kode', 'nama', 'singkatan', 'satker_pendapatan');
        if ($auth != "") {
            if ($auth->sikd_satker_id != "")
                $satker->whereid($auth->sikd_satker_id);
        }

        $_satker = $satker->orderByRaw("if(locate('SOTK-LAMA',nama)=0,1,2), kode")->get();
        return $_satker;
    }

    public static function getSkpd($id)
    {
        $auth = Auth::user()->sikd_satker_id;

        if ($auth != "") {
            if ($auth->sikd_satker_id != "") {
                if ($auth->sikd_satker_id != $id)
                    return abort(403, "Terdapat masalah pada kode skpd yang dipilih. Silahkan laporkan masalah ini pada Administrator.");
            }
        }

        return Tmsikd_satker::select('id', 'kode', 'nama', 'singkatan')
            ->whereid($id)
            ->firstOrFail();
    }

    // Sub skpd
    public static function listSubSkpd($tmsikd_satker_id)
    {
        $auth = Auth::user();

        $subSkpd = Tmsikd_sub_skpd::select('id', 'kode', 'nama', 'singkatan')->wheretmsikd_satker_id($tmsikd_satker_id);
        if ($auth != "") {
            if ($auth->sikd_satker_id != "")
                $subSkpd->wheretmsikd_satker_id($auth->sikd_satker_id);
            if ($auth->tmsikd_sub_skpd_id != "")
                $subSkpd->whereid($auth->tmsikd_sub_skpd_id);
        }

        $_subSkpd = $subSkpd->orderByRaw("if(locate('SOTK-LAMA',nama)=0,1,2), kode")->get();

        return $_subSkpd;
    }

    public static function getSubSkpd($id)
    {
        if ($id == null || $id == 0) return null;

        $auth = Auth::user();

        if ($auth != "") {
            if ($auth->tmsikd_sub_skpd_id != "") {
                if ($auth->tmsikd_sub_skpd_id != $id)
                    return abort(403, "Terdapat masalah pada kode skpd yang dipilih. Silahkan laporkan masalah ini pada Administrator.");
            }
        }

        return Tmsikd_sub_skpd::select('id', 'kode', 'nama', 'singkatan')
            ->whereid($id)
            ->firstOrFail();
    }

    public static function getSkpkd()
    {
        $auth = Auth::user();

        $skpkd = Trsikd_skpkd::select('id', 'tmsikd_satker_id', 'tmsikd_satker_skpkd_id');
        if ($auth != "") {
            if ($auth->sikd_satker_id != "")
                $skpkd->whereTmsikd_satker_id($auth->sikd_satker_id);
        }

        if ($skpkd->get()->isEmpty()) {
            return abort(403, "Terdapat masalah pada kode skpkd yang dipilih. Silahkan laporkan masalah ini pada Administrator.");
        }

        // $_satker = $satker->orderByRaw("if(locate('SOTK-LAMA',nama)=0,1,2), kode")->get();
        return $skpkd->first();
    }

    // Bidang skpd
    public static function listSikdBidangSkpd($tmsikd_satker_id = null)
    {
        $where = [];
        if ($tmsikd_satker_id != null) {
            $where = ["trsikd_bidang_skpds.tmsikd_satker_id" => $tmsikd_satker_id];
        }
        return Trsikd_bidang_skpd::select(
            'tmsikd_bidangs.id',    
            'tmsikd_bidangs.kd_bidang',
            'tmsikd_bidangs.nm_bidang'
        )
            ->join('tmsikd_bidangs', 'trsikd_bidang_skpds.tmsikd_bidang_id', '=', 'tmsikd_bidangs.id')
            ->where($where)
            ->get();
    }

    public static function getSikdBidangSkpd($tmsikd_satker_id, $id)
    {
        return Trsikd_bidang_skpd::select(
            'tmsikd_bidangs.id',
            'tmsikd_bidangs.kd_bidang',
            'tmsikd_bidangs.nm_bidang'
        )
            ->join('tmsikd_bidangs', 'trsikd_bidang_skpds.tmsikd_bidang_id', '=', 'tmsikd_bidangs.id')
            ->where('trsikd_bidang_skpds.tmsikd_satker_id', $tmsikd_satker_id)
            ->where('tmsikd_bidangs.id', $id)
            ->firstOrFail();
    }


    public static function listSkpkd()
    {
        $auth = Auth::user();

        $skpkd = Trsikd_skpkd::select('id', 'tmsikd_satker_id', 'tmsikd_satker_skpkd_id');
        if ($auth != "") {
            if ($auth->sikd_satker_id != "")
                $skpkd->whereTmsikd_satker_id($auth->sikd_satker_id);
        }

        if ($skpkd->get()->isEmpty()) {
            return abort(403, "Terdapat masalah pada kode skpkd yang dipilih. Silahkan laporkan masalah ini pada Administrator.");
        }

        // $_satker = $satker->orderByRaw("if(locate('SOTK-LAMA',nama)=0,1,2), kode")->get();
        return $skpkd->get();
    }

    public static function skpkd()
    {
        $auth = Auth::user();

        $skpkd = Trsikd_skpkd::select('id', 'tmsikd_satker_id', 'tmsikd_satker_skpkd_id');
        if ($auth != "") {
            if ($auth->sikd_satker_id != "")
                $skpkd->whereTmsikd_satker_id($auth->sikd_satker_id);
        }
        if ($skpkd->get()->isEmpty()) {
            return abort(403, "Terdapat masalah pada kode skpkd yang dipilih. Silahkan laporkan masalah ini pada Administrator.");
        }

        // $_satker = $satker->orderByRaw("if(locate('SOTK-LAMA',nama)=0,1,2), kode")->get();
        return $skpkd->pluck('tmsikd_satker_skpkd_id')->toArray();
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
        return Tmrekening_akun_kelompok_jenis_objek::wheretmrekening_akun_kelompok_jenis_id($jenis_id)
            ->select('id', 'kd_rek_obj', 'nm_rek_obj')
            ->get();
    }

    public static function getListRekRincians($obj_id)
    {
        return Tmrekening_akun_kelompok_jenis_objek_rincian::wheretmrekening_akun_kelompok_jenis_objek_id($obj_id)
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
