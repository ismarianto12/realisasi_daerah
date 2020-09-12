<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_tim_anggaran extends Model
{
     
    protected $guarded    = [];
    protected $fillable   = ['tmsikd_setup_tahun_anggaran_id', 'no_urut', 'nip', 'nama', 'jabatan', 'unit_kerja', 'no_telp', 'no_hp'];
    protected $table      = 'tmsikd_tim_anggarans';

    public function tahun()
    {
        return $this->belongsTo(Tmsikd_setup_tahun_anggaran::class, 'tmsikd_setup_tahun_anggaran_id');
    }
}
