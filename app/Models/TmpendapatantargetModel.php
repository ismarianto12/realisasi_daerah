<?php

namespace App\Models;

use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek_rincian;
use Illuminate\Database\Eloquent\Model;

class TmpendapatantargetModel extends Model
{

    protected $table         = 'tmpendapatan_target';
    protected $guarded       = [];
    public    $incrementing  = false;

    function Tmrekening_akun_kelompok_jenis_objek_rincian()
    {
        return  $this->belongsTo(Tmrekening_akun_kelompok_jenis_objek_rincian::class, 'tmrekening_akun_kelompok_jenis_objek_rincian_id');
    }
}
