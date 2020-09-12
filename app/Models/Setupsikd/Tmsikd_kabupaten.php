<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_kabupaten extends Model
{
   
    protected $guarded = [];

    public function provinsi()
    {
        return $this->belongsTo(Tmsikd_provinsi::class);
    }

    public function kecamatans()
    {
        return $this->hasMany(Tmsikd_kecamatan::class);
    }

}