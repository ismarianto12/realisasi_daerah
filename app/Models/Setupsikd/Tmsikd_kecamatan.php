<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_kecamatan extends Model
{
    
    protected $guarded = [];

    public function kabupaten()
    {
        return $this->belongsTo(Tmsikd_kabupaten::class);
    }

    public function kelurahans()
    {
        return $this->hasMany(Tmsikd_kelurahan::class);
    }
}
