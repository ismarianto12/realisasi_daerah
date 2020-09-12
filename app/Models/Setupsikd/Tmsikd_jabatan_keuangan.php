<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_jabatan_keuangan extends Model
{
     
    protected $guarded    = [];
    protected $fillable   = ['unit_organisasi', 'kd_jabatan', 'nm_jabatan', 'singkatan', 'created_by', 'updated_by'];
    protected $table      = 'tmsikd_jabatan_keuangans';
}
