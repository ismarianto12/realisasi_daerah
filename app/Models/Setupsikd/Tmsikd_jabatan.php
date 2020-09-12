<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_jabatan extends Model
{     
    protected $fillable   = ['tmsikd_satker_id', 'tmsikd_sub_skpd_id', 'kode_jabatan', 'nama_jabatan'];
    protected $table      = 'tmsikd_jabatans';
}
