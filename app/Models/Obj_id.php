<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Obj_id extends Model
{
    public $timestamps = false;
    protected $fillable = ['y', 'm', 'd', 'no'];
}
