<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_kegiatan extends Model
{
  
    protected $fillable   = ['id', 'kd_bidang', 'tmsikd_program_id', 'nm_kgtn', 'kd_kgtn', 'tmsikd_bidang_id', 'created_by', 'updated_by'];
    protected $table      = 'tmsikd_kegiatans';
    public $incrementing  = false;

    public function bidang()
    {
        return $this->belongsTo('App\Models\Setupsikd\Tmsikd_bidang', 'tmsikd_bidang_id');
    }

    public function program()
    {
        return $this->belongsTo('App\Models\Setupsikd\Tmsikd_program', 'tmsikd_program_id');
    }

    public function tmrenstra_kegiatan()
    {
        return $this->belongsTo('App\Models\Renstra\Tmrenstra_kegiatan', 'tmrenstra_kegiatan_id');
    }
}
