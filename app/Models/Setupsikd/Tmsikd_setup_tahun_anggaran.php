<?php

namespace App\Models\Setupsikd;

//use App\Models\Kua\Tmppas;
use Illuminate\Database\Eloquent\Model;

class Tmsikd_setup_tahun_anggaran extends Model
{
    
    protected $guarded    = [];
    protected $fillable   = ['id', 'tahun'];
    protected $table      = 'tmsikd_setup_tahun_anggarans';


    // public function tmppas()
    // {
    //     return $this->hasMany(Tmppas::class, 'tmsikd_setup_tahun_anggaran_id', 'id');
    // }
}
