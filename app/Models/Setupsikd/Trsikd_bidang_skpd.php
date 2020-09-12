<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;
use App\Models\Rkpd\Tmrkpd_kegiatan;
use Illuminate\Support\Facades\DB;

class Trsikd_bidang_skpd extends Model
{
    
    protected $dirKode = 'App\Models';
    protected $fillable = ['tmsikd_bidang_id', 'id', 'tmsikd_satker_id'];

    public function getTmsikd_bidang()
    {
        return $this->belongsTo($this->dirKode . '\Setupsikd\Tmsikd_bidang', 'tmsikd_bidang_id');
    }

    public function tmsikd_satker()
    {
        return $this->belongsTo(Tmsikd_satker::class, 'tmsikd_satker_id');
    }

    public function tmsikd_bidang()
    {
        return $this->belongsTo(Tmsikd_bidang::class, 'tmsikd_bidang_id');
    }

    public static function tmrkpd_kegiatan()
    {
        return DB::table('trsikd_bidang_skpds')
            ->select(
                'tmrkpd_kegiatans.id',
                'tmrkpd_kegiatans.kd_kegiatan',
                'tmrkpd_kegiatans.nm_kegiatan',
                'tmrkpd_kegiatans.nm_subkegiatan',
                'tmrkpd_kegiatans.prioritas',
                'tmrkpd_kegiatans.target_kgtn',
                'tmrkpd_kegiatans.jml_usulan_anggaran',
                'tmrkpd_kegiatans.jml_anggaran_rkpd'
            )
            ->join('tmsikd_satkers', 'trsikd_bidang_skpds.tmsikd_satker_id', '=', 'tmsikd_satkers.id')
            ->join('tmrkpd_kegiatans', 'tmrkpd_kegiatans.tmsikd_satker_id', '=', 'tmsikd_satkers.id')
            ->limit(1000)
            ->get();
    }

    public function bidang_satker()
    {
        return $this->belongsToMany($this->dirKode . '\Setupsikd\Tmsikd_satker');
    }
}
