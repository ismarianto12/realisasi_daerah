<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_kelompok_indikator extends Model
{
    
    protected $guarded    = [];
    protected $fillable   = ['kd_klpk_indikator', 'nm_klpk_indikator', 'created_by', 'updated_by'];
    protected $table      = 'tmsikd_kelompok_indikators';

    
}
