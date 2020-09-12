<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_jenis_akun extends Model
{
   
    protected $guarded    = [];
    protected $fillable   = ['kd_jenis_account', 'jenis_account'];
    protected $table      = 'tmsikd_jenis_accounts';
}
