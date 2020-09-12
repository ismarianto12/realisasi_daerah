<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_jenis_sp2d extends Model
{
    
    protected $guarded    = [];
    protected $fillable   = ['kode','jns_sp2d', 'jns_spm', 'jns_spp', 'nihil', 'uraian'];
    protected $table      = 'tmsikd_jenis_sp2ds';
}
