<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmrekening_akun_kelompok extends Model
{
    
    protected $fillable   = ['tmrekening_akun_id', 'kd_rek_kelompok', 'nm_rek_kelompok', 'kd_rekening', 'kd_rek_akrual', 'kd_rek_aset', 'kd_rek_utang', 'dasar_hukum'];
    public $incrementing  = false;

    public function tmrekening_akun()
    {
        return $this->belongsTo(Tmrekening_akun::class);
    }

    public function jenis()
    {
        return $this->hasMany(Tmrekening_akun_kelompok_jenis::class);
    }
}
