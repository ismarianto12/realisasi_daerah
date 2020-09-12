<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmrekening_akun_kelompok_jenis_objek_rincian_sub extends Model
{
    
    protected $fillable   = ['tmrekening_akun_kelompok_jenis_objek_rincian_id', 'kd_rek_rincian_objek_sub', 'nm_rek_rincian_objek_sub', 'dasar_hukum'];
    protected $table      = 'tmrekening_akun_kelompok_jenis_objek_rincian_subs';
    public $incrementing  = false;

    public function tmrekening_akun_kelompok_jenis_objek_rincian()
    {
        return $this->belongsTo(Tmrekening_akun_kelompok_jenis_objek_rincian::class);
    }
}
