<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Obj;

class Tmsikd_program_p13 extends Model
{
     
    protected $guarded    = [];
    protected $fillable   = ['id', 'kode', 'nama_program', 'tmsikd_bidang_p13_id', 'tmsikd_program_p13_id'];
    protected $table      = 'tmsikd_program_p13s';

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = Obj::getNextObjId();
            $model->created_by = Auth::user()->username;
        });
        static::updating(function ($model) {
            $model->updated_by = Auth::user()->username;
        });
    }

    public function bidang()
    {
        return $this->belongsTo('App\Models\Setupsikd\Tmsikd_bidang_p13', 'tmsikd_bidang_p13_id');
    }
}
