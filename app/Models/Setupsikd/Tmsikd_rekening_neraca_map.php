<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_rekening_neraca_map extends Model
{
   
    protected $fillable   = ['tmsikd_rek_neraca_id', 'tmrekening_akun_kelompok_jenis_objek_id', 'kd_rek_obj', 'tmrekening_akun_kelompok_jenis_objek_rincian_id', 'kd_rek_rincian_obj'];
    protected $table      = 'tmsikd_rekening_neraca_map';
    
    public function rek_rincian()
    {
        return $this->belongsTo(Tmrekening_akun_kelompok_jenis_objek_rincian::class, 'tmrekening_akun_kelompok_jenis_objek_rincian_id');
    }

}
