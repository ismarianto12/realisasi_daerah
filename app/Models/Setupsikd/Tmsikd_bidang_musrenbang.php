<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_bidang_musrenbang extends Model
{
    
    protected $fillable   = ['kd_bidang', 'nm_bidang', 'uraian_bidang', 'created_by', 'updated_by'];
    protected $table      = 'tmsikd_bidang_musrenbangs';
}
