<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    public $incementing = false;
    protected $guarded = [];

    function Tmpegawai()
    {
        return $this->belongsTo(Tmpegawai::class, 'tmpegawai_id');
    }
}
