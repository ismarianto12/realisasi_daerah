<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmrekening_akun_kelompok_jenis_objek extends Model
{
    
    protected $fillable   = ['tmrekening_akun_kelompok_jenis_id', 'kd_rek_obj', 'nm_rek_obj', 'kd_rekening', 'klasifikasi_rek', 'kd_rek_akrual', 'kd_rek_aset', 'kd_rek_utang', 'kd_barang', 'dasar_hukum'];
    public $incrementing  = false;
    protected $dirKode    = 'App\Models';

    public function tmrekening_akun_kelompok_jenis()
    {
        return $this->belongsTo(Tmrekening_akun_kelompok_jenis::class);
    }
    public function kelompok_jenis()
    {
        return $this->belongsTo(Tmrekening_akun_kelompok_jenis::class, 'tmrekening_akun_kelompok_jenis_id');
    }

    public function tmasb_kgtn_non_fisik()
    {
        return $this->belongsTo($this->dirKode . '\Sshasb\Tmasb_kgtn_non_fisik');
    }

    public function tmasb_blnj_non_fisiks()
    {
        return $this->belongsTo($this->dirKode . '\Sshasb\Tmasb_blnj_non_fisik');
    }
}
