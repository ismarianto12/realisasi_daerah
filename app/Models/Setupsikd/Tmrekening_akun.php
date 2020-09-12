<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmrekening_akun extends Model
{
     
    protected $fillable   = ['kd_rek_akun', 'nm_rek_akun', 'kd_rekening', 'kd_rek_akrual', 'kd_rek_aset', 'kd_rek_utang'];
    public $incrementing  = false;

    public function kelompok()
    {
        return $this->hasMany(Tmrekening_akun_kelompok::class);
    }
}
