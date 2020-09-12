<?php

namespace App\Models\setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_rekening_lak extends Model
{
    
    protected $guarded    = [];
    protected $fillable   = ['kd_rek_lak', 'nm_rek_lak', 'kd_rek_induk', 'jns_rekening'];
    protected $table      = 'tmsikd_rekening_laks';
}
