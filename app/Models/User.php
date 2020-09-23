<?php

namespace App\Models;

use App\Models\Setupsikd\Tmsikd_satker;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    public $incementing = false;
    protected $guarded = [];

    function Tmpegawai()
    {
        return $this->belongsTo(Tmpegawai::class);
    }

    function Tmsikd_satker()
    {
        return $this->belongsTo(Tmsikd_satker::class,'sikd_satker_id');
    }

    function Tmuser_level()
    {
        return $this->belongsTo(Tmuser_level::class);
    }
}
