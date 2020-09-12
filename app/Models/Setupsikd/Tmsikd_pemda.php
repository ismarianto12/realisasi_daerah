<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;

class Tmsikd_pemda extends Model
{
    
    protected $fillable = ['klasifikasi', 'nm_pemda', 'nm_daerah', 'nm_provinsi', 'kd_pemda_depkeu', 'kd_satker_depkeu', 'ibu_kota', 'jab_kpl_daerah', 'nm_kpl_daerah', 'nm_wkl_kpl_daerah', 'jab_wkl_kpl_daerah', 'nm_sekda', 'jab_sekda', 'nm_glr_sekda', 'nip_sekda', 'pangkat_sekda', 'almt_kantor', 'telp_kantor', 'fax_kantor'];
}
