<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Obj;

class Tmrapbd extends Model
{
  
   
    public $incrementing = false;
    protected $fillable     = ['tmsikd_setup_tahun_anggaran_id', 'jenis', 'sumber_data', 'no_pengajuan', 'tgl_pengajuan', 'no_perda', 'tgl_perda', 'perihal_perda', 'no_perbup', 'tgl_perbup', 'perihal_perbup', 'tgl_pengesahan_rka', 'tgl_ditetapkan', 'tgl_diundangkan', 'status', 'keterangan'];
    protected $dirKode      = 'App\Models';

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = Obj::getNextObjId();
            $model->created_by = Auth::user()->username;
        });
        static::updating(function ($model) {
            $model->updated_by = Auth::user()->username;
        });
    }

    public function tmsikd_setup_tahun_anggaran()
    {
        return $this->belongsTo($this->dirKode . '\Setupsikd\Tmsikd_setup_tahun_anggaran');
    }

    public static function getListStatus()
    {
        $arr = array(0 => "Draf", 1 => "Final");
        return $arr;
    }

    public static function getListJnsSmbrData()
    {
        $arr = ["PPAS-M" => "PPAS MURNI"];
        return $arr;
    }
}
