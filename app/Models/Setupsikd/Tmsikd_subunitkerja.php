<?php

namespace App\Models\setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_subunitkerja extends Model
{
    
    protected $fillable = ['n_subunitkerja', 'initial', 'opd_id', 'tmsikd_unitkerja_id'];

    public function opd()
    {
        return $this->belongsTo(Tmsikd_opd::class);
    }

    public function unitkerja()
    {
        return $this->belongsTo(Tmsikd_unitkerja::class);
    }


}