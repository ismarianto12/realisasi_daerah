<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_bentuk_bank extends Model
{
     
    protected $guarded    = [];
    protected $fillable   = ['kode_bentuk', 'nama_bentuk'];
    protected $table      = 'tmsikd_bentuk_banks';
}
