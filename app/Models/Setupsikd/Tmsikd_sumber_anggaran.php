<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_sumber_anggaran extends Model
{
     
    protected $guarded    = [];
    protected $fillable   = ['tmtype_anggaran_id', 'kd_sumber_anggaran', 'nm_sumber_anggaran', 'initial'];
    protected $table      = 'tmsikd_sumber_anggarans';

    public function tipe_anggaran()
    {
        return $this->belongsTo(Tmsikd_tipe_anggaran::class, 'tmtype_anggaran_id');
    }
}
