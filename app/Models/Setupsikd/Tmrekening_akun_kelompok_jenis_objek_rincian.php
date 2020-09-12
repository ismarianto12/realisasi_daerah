<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmrekening_akun_kelompok_jenis_objek_rincian extends Model
{
     
    protected $fillable   = ['tmrekening_akun_kelompok_jenis_objek_id', 'kd_rek_rincian_obj', 'nm_rek_rincian_obj', 'kd_rekening', 'klasifikasi_rek', 'kd_rek_akrual', 'kd_rek_aset', 'kd_rek_utang', 'kd_barang', 'dasar_hukum'];
    public $incrementing  = false;

    public function tmrekening_akun_kelompok_jenis_objek()
    {
        return $this->belongsTo(Tmrekening_akun_kelompok_jenis_objek::class);
    }

    public function rekAkruals()
    {
        return Tmrekening_akun_kelompok_jenis_objek_rincian::select('id', 'kd_rek_rincian_obj', 'nm_rek_rincian_obj')
            ->whereIn(\DB::raw('substr(kd_rek_rincian_obj,1,1)'), ['8', '9'])
            ->orderBy('kd_rek_rincian_obj')
            ->get();

        /*
        SELECT
        * 
        FROM simraldata2020.sikd_rek_rincian_obj 
        WHERE 
        kd_rek_rincian_obj like '%' AND 
        substr(kd_rek_rincian_obj,1,1) in ('8','9') 
        order by kd_rek_rincian_obj
        */
    }

    public function rekAsets()
    {
        return Tmrekening_akun_kelompok_jenis_objek_rincian::select('id', 'kd_rek_rincian_obj', 'nm_rek_rincian_obj')
            ->where('kd_rek_rincian_obj', 'like', '1%')
            ->orderBy('kd_rek_rincian_obj')
            ->get();

        /*
        SELECT
        * 
        FROM simraldata2020.sikd_rek_rincian_obj 
        WHERE 
        kd_rek_rincian_obj like '%' AND 
        kd_rek_rincian_obj like '1%'
        order by kd_rek_rincian_obj
        */
    }

    public function rekUtangs()
    {
        return Tmrekening_akun_kelompok_jenis_objek_rincian::select('id', 'kd_rek_rincian_obj', 'nm_rek_rincian_obj')
            ->where('kd_rek_rincian_obj', 'like', '2%')
            ->orderBy('kd_rek_rincian_obj')
            ->get();

        /*
        SELECT
        * 
        FROM 
        simraldata2020.sikd_rek_rincian_obj 
        WHERE 
        kd_rek_rincian_obj like '2%' AND 
        kd_rek_rincian_obj LIKE '%' 
        order by kd_rek_rincian_obj
        */
    }

    public function rek_objek()
    {
        return $this->belongsTo(Tmrekening_akun_kelompok_jenis_objek::class, 'tmrekening_akun_kelompok_jenis_objek_id');
    }
}
