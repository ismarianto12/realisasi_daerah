<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_bank_akun extends Model
{
     
    protected $guarded    = [];
    protected $table      = 'tmsikd_bankaccounts';

    public function jenis_akun()
    {
        return $this->belongsTo(Tmsikd_jenis_akun::class, 'jenis_account_id');
    }

    public function bentuk_bank()
    {
        return $this->belongsTo(Tmsikd_bentuk_bank::class, 'bentuk_bank_id');
    }

    public function bank()
    {
        return $this->belongsTo(Tmsikd_bank::class, 'bank_id');
    }

    public function tahun()
    {
        return $this->belongsTo(Tmsikd_setup_tahun_anggaran::class, 'tmsikd_setup_tahun_anggaran_id');
    }

    public function satker()
    {
        return $this->belongsTo(Tmsikd_satker::class, 'tmsikd_satker_id');
    }

    public function sub_unit()
    {
        return $this->belongsTo(Tmsikd_sub_skpd::class, 'tmsikd_sub_skpd_id');
    }

    public function rekening_mak()
    {
        return $this->belongsTo(Tmrekening_akun_kelompok_jenis_objek_rincian::class, 'tmrekening_akun_kelompok_jenis_objek_rincian_id');
    }
}
