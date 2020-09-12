<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

use App\Models\Administrator\Kode\Tmunit_kerja;
use App\Models\Pendapatan\Transaksi\Trx_pdpt_penutupan_kas;

class Tmsikd_sub_skpd extends Model
{
   
    protected $guarded    = [];
    protected $fillable   = ['tmsikd_satker_id', 'sikd_sub_skpd_id', 'kd_unit_kerja', 'kode', 'nama', 'singkatan', 'rek_konsolidasi_id', 'nip_ka_sub_skpd', 'nm_ka_sub_skpd', 'jab_ka_sub_skpd', 'sub_skpd_pendaptan', 'sotk_lama'];
    protected $table      = 'tmsikd_sub_skpds';

    public function rek_konsolidasi()
    {
        return $this->belongsTo(Tmrekening_akun_kelompok_jenis_objek_rincian::class, 'rek_konsolidasi_id');
    }

    public function unit_kerja()
    {
        return $this->belongsTo(Tmunit_kerja::class, 'kd_unit_kerja');
    }

}
