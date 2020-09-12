<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_sub_kegiatan extends Model
{
    
    protected $fillable   = ['id', 'tmsikd_kegiatan_id', 'kd_sub_kegiatan', 'nm_sub_kegiatan'];
    protected $table      = 'tmsikd_sub_kegiatans';
    public $incrementing  = false;

    public function kegiatan()
    {
        return $this->belongsTo(Tmsikd_kegiatan::class, 'tmsikd_kegiatan_id');
    }

    public function tmrenstra_sub_kegiatan()
    {
        return $this->belongsTo('App\Models\Renstra\Tmrenstra_sub_kegiatan', 'tmrenstra_sub_kegiatan_id');
    }
}
