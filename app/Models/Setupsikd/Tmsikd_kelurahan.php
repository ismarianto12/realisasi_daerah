<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_kelurahan extends Model
{
   
    protected $guarded = [];

    public function kecamatan()
    {
        return $this->belongsTo(Tmsikd_kecamatan::class);
    }
}