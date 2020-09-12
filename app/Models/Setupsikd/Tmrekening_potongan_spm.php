<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmrekening_potongan_spm extends Model
{
    
    protected $guarded    = [];
    protected $fillable   = ['id', 'tmrekening_akun_kelompok_jenis_objek_rincian_id', 'kd_rekening', 'is_pfk', 'jns_pfk', 'kd_akun_pajak', 'sikd_skpkd_bank_account_id', 'rek_pengeluaran_id', 'rek_utang_pfk_id', 'kd_jns_pfk_sinergi'];
    protected $table      = 'tmrekening_potongan_spms';

    public function listUraian()
    {
        return $this->belongsTo(Tmrekening_akun_kelompok_jenis_objek_rincian::class, 'tmrekening_akun_kelompok_jenis_objek_rincian_id');
    }

    public function tmrekening_jenis_pfk()
    {
        return $this->belongsTo(Tmrekening_jenis_pfk::class, 'jns_pfk');
    }

    public function listPengeluaranPFK()
    {
        return $this->belongsTo(Tmrekening_akun_kelompok_jenis_objek_rincian::class, 'rek_pengeluaran_id');
    }

    public function listUtangPFK()
    {
        return $this->belongsTo(Tmrekening_akun_kelompok_jenis_objek_rincian::class, 'rek_utang_pfk_id');
    }

    public function tmsikd_bank_akun()
    {
        return $this->belongsTo(Tmsikd_bank_akun::class, 'tmsikd_bank_account_id');
    }
}
