<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_urusan extends Model
{
    
    protected $fillable   = ['kode', 'nama_urusan', 'id'];
    public $incrementing  = false;
}
