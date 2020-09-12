<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tmjabatan extends Model
{
    protected $primarykey    = 'jabatanid';
    protected $table         = 'tmjabatan';

    protected $guarded       = [];
    public    $incrementing  = false;
}
