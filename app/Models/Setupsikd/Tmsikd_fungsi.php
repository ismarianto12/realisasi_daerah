<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_fungsi extends Model
{
    
    protected $guarded    = [];
    protected $table      = 'tmsikd_fungsis';
    protected $fillable   = ['kd_fungsi', 'nm_fungsi', 'id', 'updated_by', 'created_by'];
}
