<?php

namespace App\Models\Rka;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Tmrka_pendapatan extends Model
{
   
    public    $incrementing = false;
    protected $fillable     = ['tmrka_id'];

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

    public function tmrka()
    {
        return $this->belongsTo(Tmrka::class);
    }
}
