<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_opd extends Model
{
   
    protected $fillable = ['kode', 'n_opd', 'initial', 'rumpun_id','created_by','updated_by'];

    public function rumpun()
    {
        
        return $this->belongsTo(Tmsikd_rumpun::class);
    }

    public function unitkerjas()
    {
       
        return $this->hasMany(Unitkerja::class);
    }

    public function indikators()
    {
        return $this->hasMany('App\Models\RPJMD\Tmrpjmd_indikator_sasaran');
    }

    public function satker_bidang()
    {
        return $this->belongsToMany('App\Models\Setupsikd\Tmsikd_bidang', 'trsikd_bidang_skpds', 'tmskpd_id', 'tmurusan_bidang_id');
    }

}
 