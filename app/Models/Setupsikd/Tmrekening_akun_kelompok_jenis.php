<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmrekening_akun_kelompok_jenis extends Model
{
     
    protected $table      = 'tmrekening_akun_kelompok_jenis';
    protected $fillable   = ['tmrekening_akun_kelompok_id', 'kd_rek_jenis', 'nm_rek_jenis', 'klasifikasi_rek', 'kd_rekening', 'kd_rek_akrual', 'kd_rek_aset', 'kd_rek_utang', 'kd_barang', 'dasar_hukum'];
    public $incrementing  = false;

    public function tmrekening_akun_kelompok()
    {
        return $this->belongsTo(Tmrekening_akun_kelompok::class);
    }
    
    public function klasifikasi_reks()
    {
        return [
            [
                "id"    => "RSOA",
                "name"  => "Rek. Pendapatan Official Assessment"
            ],
            [
                "id"    => "RPSA",
                "name"  => "Rek. Pendapatan Self Assessment"
            ],
            [
                "id"    => "RBP",
                "name"  => "Rek. Belanja Persediaan"
            ],
            [
                "id"    => "RBM",
                "name"  => "Rek. Belanja Modal"
            ],
            [
                "id"    => "RL",
                "name"  => "Rek. Lainnya"
            ],
        ];
    }
}
