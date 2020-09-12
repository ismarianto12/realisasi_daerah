<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_gol_pegawai extends Model
{
    
    protected $guarded    = [];
    protected $fillable   = ['golongan', 'ruang', 'nm_golongan', 'pangkat', 'created_by', 'updated_by'];
    protected $table      = 'tmsikd_gol_pegawais';
}
