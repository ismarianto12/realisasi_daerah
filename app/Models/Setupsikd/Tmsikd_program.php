<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Tmsikd_program extends Model
{
   
    protected $guarded    = [];
    protected $fillable   = ['id', 'kode', 'nama_program', 'tmsikd_bidang_id', 'kd_bidang', 'tmsikd_program_id'];
    protected $table      = 'tmsikd_programs';

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->created_by = Auth::user()->username;
        });
        static::updating(function ($model) {
            $model->updated_by = Auth::user()->username;
        });
    }

    public function bidang()
    {
        return $this->belongsTo('App\Models\Setupsikd\Tmsikd_bidang', 'tmsikd_bidang_id');
    }
}
