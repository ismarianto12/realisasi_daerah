<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sikd_rek_obj extends Model
{
    protected $table        = 'sikd_rek_obj';
    protected $guarded      = [];
    public    $incrementing = false;

    function Sikd_rek_rincian_obj()
    {
        return $this->belongsTo(Sikd_rek_rincian_obj::class);
    }
}
