<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_bank extends Model
{
     
    protected $guarde     = [];
    protected $fillable   = ['nama_bank', 'initial', 'alamat', 'telp', 'fax', 'status_bank'];
    protected $table      = 'tmsikd_banks';
}
