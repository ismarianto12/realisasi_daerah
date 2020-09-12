<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_jenis_rekening extends Model
{
  
    protected $guarded    = [];
    protected $fillabe    = ['kode', 'jenis_rek'];
    protected $table      = 'tmsikd_rekening_jenis';
}
