<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tmpenerimaan extends Model
{
    protected $table        = 'tmpenerimaan';
    protected $guarded      = [];
    public    $incrementing = false;


    function Sikd_satker()
    {
        return $this->belongsTo(Sikd_satker::class);
    }
    function sikd_rek_rincian_obj()
    {
        return  $this->belongsTo(sikd_rek_rincian_obj::class);
    }
    function sikd_rek_obj()
    {
        return  $this->belongsTo(sikd_rek_obj::class);
    }
    function User()
    {
        return  $this->belongsTo(User::class);
    }


    public  static function list($where, $dari = '', $sampai = '')
    {
        if ($dari != '' || $sampai != '') {
            $range = [
                'tmpenerimaan.tanggal >'=> $dari,
                'tmpenerimaan.tanggal <'=> $sampai, 
            ];
        }else{
            $range = [];
        }
        return Tmpenerimaan::where($where)
            ->where($range)
            ->join('sikd_rek_rincian_obj', 'sikd_rek_rincian_obj.id', '=', 'tmpenerimaan.sikd_rek_rincian_obj_id', 'left')
            ->join('sikd_rek_obj', 'sikd_rek_rincian_obj.sikd_rek_obj_id', '=', 'sikd_rek_obj.id')
            ->join('sikd_satker', 'tmpenerimaan.sikd_satker_id', '=', 'sikd_satker.id')
            ->select(
                'sikd_rek_rincian_obj.id as obj_rid',
                'sikd_rek_rincian_obj.sikd_rek_obj_id',
                'sikd_rek_rincian_obj.sikd_satker_id',
                'sikd_rek_rincian_obj.kd_rek_rincian_obj',
                'sikd_rek_rincian_obj.nm_rek_rincian_obj',
                'sikd_rek_rincian_obj.kd_rekening',
                'sikd_rek_rincian_obj.klasifikasi_rek',
                'sikd_rek_rincian_obj.dasar_hukum',
                'sikd_rek_rincian_obj.sikd_rek_rincian_obj_p64_id',
                'sikd_rek_rincian_obj.sikd_rek_lra_id',
                'sikd_rek_rincian_obj.sikd_rek_lo_id',
                'sikd_rek_rincian_obj.sikd_rek_lak_id',
                'sikd_rek_rincian_obj.sikd_rek_neraca_id',
                'sikd_rek_rincian_obj.sikd_rek_aset_id',

                'sikd_rek_obj.nm_rek_obj',
                'sikd_rek_obj.kd_rek_obj',
                'sikd_rek_obj.kd_rekening',

                'tmpenerimaan.id as pen_id',
                'tmpenerimaan.tahun',
                'tmpenerimaan.sikd_satker_id',
                'tmpenerimaan.dpa_dpa_no_dpa',
                'tmpenerimaan.sikd_sub_satker_id',
                'tmpenerimaan.jumlah_trm',
                'tmpenerimaan.jumlah_str',
                'tmpenerimaan.jumlah',
                'tmpenerimaan.tanggal',
                'tmpenerimaan.user_id',
                'sikd_satker.id',
                'sikd_satker.sikd_satker_type',
                'sikd_satker.sikd_satker_id',
                'sikd_satker.kode',
                'sikd_satker.nama',
                'sikd_satker.singkatan',
                'sikd_satker.sikd_bidang_id',
                'sikd_satker.klasifikasi'
            )->orderBy('sikd_rek_rincian_obj.id');
    }
}
