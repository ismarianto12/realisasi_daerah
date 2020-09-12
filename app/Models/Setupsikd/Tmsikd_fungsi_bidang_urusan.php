<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_fungsi_bidang_urusan extends Model
{
 
    protected $fillable   = ['id', 'tmsikd_fungsi_id', 'tmsikd_bidang_id'];
    protected $table      = 'tmsikd_fungsi_bidang_urusan';

    public function tmsikd_bidangs()
    {
        return $this->belongsTo(Tmsikd_bidang::class, 'tmsikd_bidang_id');
    }
}
