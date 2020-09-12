<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_provinsi extends Model
{
   
    protected $guarded = [];

    public function kabupatens()
    {
        return $this->hasMany(Tmsikd_kabupaten::class);
    }

}