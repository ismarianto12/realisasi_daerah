<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_tipe_anggaran extends Model
{
     
    protected $guarded    = [];
    protected $fillable   = ['type_anggaran'];
    protected $table      = 'tmtype_anggarans';
}
