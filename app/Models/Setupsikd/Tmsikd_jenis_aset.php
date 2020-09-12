<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_jenis_aset extends Model
{
   
    protected $guarded    = [];
    protected $fillable   = ['kode', 'nama_jenis_aset', 'tipe_aset'];
    protected $table      = 'tmsikd_jenis_asets';
}
