<?php

namespace App\Models\Setupsikd;

use App\Models\Renstra\Tmrenstra_program;
use Illuminate\Database\Eloquent\Model;

class Tmsikd_bidang extends Model
{
    
    protected $guarded    = [];
    protected $fillable   = ['id', 'tmsikd_urusan_id', 'kd_bidang', 'nm_bidang', 'tmsikd_fungsi_id', 'tmsikd_musren_bidang_id', 'tmsikd_bidang_p13_id', 'tmsikd_bidang_id'];
    protected $table      = 'tmsikd_bidangs';

    public function fungsi()
    {
        return $this->belongsTo(Tmsikd_fungsi::class, 'tmsikd_fungsi_id');
    }

    public function tmurusan()
    {
        return $this->belongsTo('App\Models\Tmsikd_urusan');
    }

    public function bidang_satker()
    {
        return $this->belongsToMany('App\Models\Setupsikd\Tmsikd_opd', 'trsikd_bidang_skpds', 'tmsikd_bidang_id', 'tmsikd_skpd_id');
    }

    public function tmsikd_fungsi()
    {
        return $this->belongsTo('App\Models\Setupsikd\Tmsikd_fungsi');
    }

    public function permasalahan_pems()
    {
        return $this->hasMany('App\Models\RPJMD\Tmrpjmd_permasalahan_pemb');
    }

    public function tmsikd_program()
    {
        return $this->belongsTo('App\Models\Setupsikd\Tmsikd_program');
    }
    public function tmrenstra_programs()
    {
        return $this->hasMany(Tmrenstra_program::class);
    }

    public function trsikd_bidang_skpd()
    {
        return $this->belongsTo('App\Models\Setupsikd\Trsikd_bidang_skpd');
    }
}
