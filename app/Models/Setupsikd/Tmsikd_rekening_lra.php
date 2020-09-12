<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_rekening_lra extends Model
{
    
    protected $guarded    = [];
    protected $fillable   = ['kd_rek_lra', 'nm_rek_lra', 'kd_rek_induk', 'jns_rekening', 'lra_skpd', 'lra_skpkd', 'lra_pemda', 'display'];
    protected $table      = 'tmsikd_rekening_lras';

    public function Tmsikd_rekening_neraca_jenis()
    {
        return $this->belongsTo(Tmsikd_rekening_neraca_jenis::class);
    }
}
