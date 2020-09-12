<?php

namespace App\Models\setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_unitkerja extends Model
{
     
    protected $fillable = ['n_unitkerja', 'initial', 'opd_id'];

    public function opd() 
    {
        return $this->belongsTo('App\Models\Setupsikd\Tmsikd_opd', 'opd_id');
    }
}
