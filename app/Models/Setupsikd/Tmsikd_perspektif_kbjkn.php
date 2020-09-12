<?php

namespace App\Models\SetupSIKD;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_perspektif_kbjkn extends Model
{
     
    protected $table =  "tmsikd_perspektif_kbjkn";
    // protected $fillable = ['kode', 'n_opd', 'initial', 'rumpun_id','created_by','updated_by'];

    public function tmrenstra_kebijakan_umum()
    {
        return $this->belongsTo('App\Models\Renstra\Tmrenstra_kebijakan_umum');
    } 
}
