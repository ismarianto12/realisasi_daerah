<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pendapatan\Transaksi\Trx_pdpt_penutupan_kas;

class Tmsikd_satker extends Model
{ 
    protected $fillable   = ['sikd_satker_type', 'kode', 'nama', 'singkatan', 'tmsikd_satker_id', 'tmsikd_bidang_id', 'kd_bidang_induk', 'rek_konsolidasi_id', 'nm_ka_satker', 'nip_ka_satker', 'jab_ka_satker', 'klasifikasi', 'satker_pendapatan', 'sotk_lama', 'npwp_satker', 'kd_skpd_bmd', 'created_by', 'updated_by'];
    protected $table      = 'tmsikd_satkers';

    public function rek_konsolidasi()
    {
        return $this->belongsTo(Tmrekening_akun_kelompok_jenis_objek_rincian::class, 'rek_konsolidasi_id');
    }

    public function bidang()
    {
        return $this->belongsTo(Tmsikd_bidang::class, 'tmsikd_bidang_id');
    }

    public function satker_bidang()
    {
        return $this->belongsToMany('App\Models\Setupsikd\Tmsikd_bidang', 'trsikd_bidang_skpds', 'tmskpd_id', 'tmurusan_bidang_id');
    }

    public function tmsikd_sub_skpd()
    {
        return $this->belongsTo(Tmsikd_sub_skpd::class, 'tmsikd_satker_id');
    }


}
