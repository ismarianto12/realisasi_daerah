<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Trbidang_musrenbang_urusans_bidang extends Model
{
     
    protected $guarded    = [];
    protected $fillable   = ['tmbidang_musrenbang_id', 'tmurusan_bidang_id'];
    protected $table      = 'trbidang_musrembang_urusan_bidangs';

    public function tmrpjmd_permasalahan_pemb()
    {
        return $this->belongsTo('App\Models\RPJMD\Tmrpjmd_permasalahan_pemb', 'tmrpjmd_permasalahan_pemb_id');
    }
}
