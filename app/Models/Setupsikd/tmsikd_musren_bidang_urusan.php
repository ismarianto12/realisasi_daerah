<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class tmsikd_musren_bidang_urusan extends Model
{
     
    protected $fillable   = ['tmsikd_bidang_id', 'tmsikd_bidang_musrenbang_id'];
    protected $table      = 'tmsikd_musren_bidang_urusan';

    public function tmsikd_bidangs()
    {
        return $this->belongsTo(Tmsikd_bidang::class, 'tmsikd_bidang_id');
    }

}
