<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmrekening_akun_kelompok_jenis_objek_rincian extends Model
{

    protected $fillable   = ['tmrekening_akun_kelompok_jenis_objek_id', 'kd_rek_rincian_obj', 'nm_rek_rincian_obj', 'kd_rekening', 'klasifikasi_rek', 'kd_rek_akrual', 'kd_rek_aset', 'kd_rek_utang', 'kd_barang', 'dasar_hukum', 'tmsikd_satkers_id'];
    public $incrementing  = false;
    protected $guarded = [];
    
    public function tmrekening_akun_kelompok_jenis_objek()
    {
        return $this->belongsTo(Tmrekening_akun_kelompok_jenis_objek::class);
    }

    public function rek_objek()
    {
        return $this->belongsTo(Tmrekening_akun_kelompok_jenis_objek::class, 'tmrekening_akun_kelompok_jenis_objek_id');
    }


    public function Tmsikd_satker()
    {
        return $this->belongsTo(Tmsikd_satker::class);
    }
}
