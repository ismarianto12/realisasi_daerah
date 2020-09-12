<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_Rekening_neraca extends Model
{
  
    protected $guarded    = [];
    protected $fillable   = ['kd_rek_neraca', 'nm_rek_neraca', 'kd_rek_induk', 'jns_rekening', 'neraca_skpd', 'neraca_skpkd', 'neraca_pemda', 'display'];
    protected $table      = 'tmsikd_rekening_neracas';
    protected $dirKode    = 'App\Models\Setupsikd';

    public function rincian_obj()
    {
        return $this->belongsToMany($this->dirKode . '\Tmrekening_akun_kelompok_jenis_objek_rincians');
    }

}
