<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmrekening_jenis_pfk extends Model
{
    
    protected $guarded    = [];
    protected $fillable   = ['jenis_pfk', 'keterangan'];
    protected $table      = 'tmrekening_potongan_spm_jenis_pfks';
}
