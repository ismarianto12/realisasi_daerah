<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_dokumen_sp2d extends Model
{
     
    protected $guarded    = [];
    protected $fillable   = ['tmsikd_jenis_sp2d_id', 'kd_dokumen', 'nm_dokumen', 'uraian'];
    protected $table      = 'tmsikd_dokumen_sp2ds';

    public function jns_sp2d()
    {
        return $this->belongsTo('App\Models\Setupsikd\Tmsikd_jenis_sp2d', 'tmsikd_jenis_sp2d_id');
    }
}
