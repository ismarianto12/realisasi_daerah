<?php

namespace App\Models;

use App\Libraries\Html\Html_number;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Obj;
use App\Models\Setupsikd\Tmsikd_satker;

class Tmpendapatan extends Model
{

    public    $incrementing = false;
    protected $table        = 'tmpendapatan';

    protected $fillable     = [
        'tanggal_lapor',
        'tmrekening_akun_kelompok_jenis_objek_rincian_sub_id',
        'kd_rekening',
        'volume',
        'satuan',
        'harga',
        'jumlah',
        'keterangan',
        'created_by',
        'updated_by',
        'dasar_hukum',
    ];
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


    public function tmsikd_satker()
    {
        return $this->belongsTo(Tmsikd_satker::class);
    }

    public static function list()
    {
        return Tmpendapatan::select(
            'tmpendapatan.*',
            'tmrekening_akun_kelompok_jenis_objek_rincian_subs.kd_rek_rincian_objek_sub',
            'tmrekening_akun_kelompok_jenis_objek_rincian_subs.nm_rek_rincian_objek_sub',
            'tmrekening_akun_kelompok_jenis_objek_rincians.kd_rek_rincian_obj',
            'tmrekening_akun_kelompok_jenis_objek_rincians.nm_rek_rincian_obj',
            'tmrekening_akun_kelompok_jenis_objeks.kd_rek_obj',
            'tmrekening_akun_kelompok_jenis_objeks.nm_rek_obj',
            'tmrekening_akun_kelompok_jenis.kd_rek_jenis',
            'tmrekening_akun_kelompok_jenis.nm_rek_jenis',
            'tmrekening_akun_kelompoks.kd_rek_kelompok',
            'tmrekening_akun_kelompoks.nm_rek_kelompok',
            // 'tmsikd_sumber_anggarans.nm_sumber_anggaran',
            \DB::raw('(
                    SELECT SUM(rincian.jumlah) 
                    FROM tmpendapatan AS rincian 
                    Where SUBSTR(rincian.tmrekening_akun_kelompok_jenis_objek_rincian_sub_id, 1, 7) = tmrekening_akun_kelompok_jenis_objek_rincians.kd_rek_rincian_obj) AS jml_rek_rincian_obj'),
            \DB::raw('(
                    SELECT SUM(rincian.jumlah) 
                    FROM tmpendapatan AS rincian 
                    Where SUBSTR(rincian.tmrekening_akun_kelompok_jenis_objek_rincian_sub_id, 1, 5) = tmrekening_akun_kelompok_jenis_objeks.kd_rek_obj) AS jml_rek_obj'),
            \DB::raw('(
                    SELECT SUM(rincian.jumlah) 
                    FROM tmpendapatan AS rincian 
                    Where SUBSTR(rincian.tmrekening_akun_kelompok_jenis_objek_rincian_sub_id, 1, 3) = tmrekening_akun_kelompok_jenis.kd_rek_jenis) AS jml_rek_jenis')
        )
            ->join('tmrekening_akun_kelompok_jenis_objek_rincian_subs', 'tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_sub_id', '=', 'tmrekening_akun_kelompok_jenis_objek_rincian_subs.id')
            ->join('tmrekening_akun_kelompok_jenis_objek_rincians', 'tmrekening_akun_kelompok_jenis_objek_rincian_subs.tmrekening_akun_kelompok_jenis_objek_rincian_id', '=', 'tmrekening_akun_kelompok_jenis_objek_rincians.id')
            ->join('tmrekening_akun_kelompok_jenis_objeks', 'tmrekening_akun_kelompok_jenis_objek_rincians.tmrekening_akun_kelompok_jenis_objek_id', '=', 'tmrekening_akun_kelompok_jenis_objeks.id')
            ->join('tmrekening_akun_kelompok_jenis', 'tmrekening_akun_kelompok_jenis_objeks.tmrekening_akun_kelompok_jenis_id', '=', 'tmrekening_akun_kelompok_jenis.id')
            ->join('tmrekening_akun_kelompoks', 'tmrekening_akun_kelompok_jenis.tmrekening_akun_kelompok_id', '=', 'tmrekening_akun_kelompoks.id')
            ->groupBy('tmpendapatan.id')
            ->orderBy('tmrekening_akun_kelompok_jenis_objek_rincian_subs.kd_rek_rincian_objek_sub');
    }


    public static function listblnj($where)
    {
        return Tmpendapatan::where($where)
            ->join('tmrekening_akun_kelompok_jenis_objek_rincian_subs', 'tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_sub_id', '=', 'tmrekening_akun_kelompok_jenis_objek_rincian_subs.id')
            ->join('tmrekening_akun_kelompok_jenis_objek_rincians', 'tmrekening_akun_kelompok_jenis_objek_rincian_subs.tmrekening_akun_kelompok_jenis_objek_rincian_id', '=', 'tmrekening_akun_kelompok_jenis_objek_rincians.id')
            ->join('tmrekening_akun_kelompok_jenis_objeks', 'tmrekening_akun_kelompok_jenis_objek_rincians.tmrekening_akun_kelompok_jenis_objek_id', '=', 'tmrekening_akun_kelompok_jenis_objeks.id')
            ->join('tmrekening_akun_kelompok_jenis', 'tmrekening_akun_kelompok_jenis_objeks.tmrekening_akun_kelompok_jenis_id', '=', 'tmrekening_akun_kelompok_jenis.id')
            ->join('tmrekening_akun_kelompoks', 'tmrekening_akun_kelompok_jenis.tmrekening_akun_kelompok_id', '=', 'tmrekening_akun_kelompoks.id')
            ->select(
                'tmpendapatan.*',
                'tmrekening_akun_kelompok_jenis_objek_rincian_subs.kd_rek_rincian_objek_sub',
                'tmrekening_akun_kelompok_jenis_objek_rincian_subs.nm_rek_rincian_objek_sub',
                'tmrekening_akun_kelompok_jenis_objek_rincians.kd_rek_rincian_obj',
                'tmrekening_akun_kelompok_jenis_objek_rincians.nm_rek_rincian_obj',
                'tmrekening_akun_kelompok_jenis_objeks.kd_rek_obj',
                'tmrekening_akun_kelompok_jenis_objeks.nm_rek_obj',
                'tmrekening_akun_kelompok_jenis.kd_rek_jenis',
                'tmrekening_akun_kelompok_jenis.nm_rek_jenis',
                'tmrekening_akun_kelompoks.kd_rek_kelompok',
                'tmrekening_akun_kelompoks.nm_rek_kelompok',
                'tmpendapatan.tmsikd_sumber_anggaran_id',
                // 'tmsikd_sumber_anggarans.nm_sumber_anggaran',
                \DB::raw('(
                        SELECT SUM(rincian.jumlah) 
                        Where tmpendapatan AS rincian  
                        AND SUBSTR(rincian.tmrekening_akun_kelompok_jenis_objek_rincian_sub_id, 1, 8) = tmrekening_akun_kelompok_jenis_objek_rincians.kd_rek_rincian_obj) AS jml_rek_rincian_obj'),
                \DB::raw('(
                        SELECT SUM(rincian.jumlah) 
                        Where tmpendapatan AS rincian  
                        AND SUBSTR(rincian.tmrekening_akun_kelompok_jenis_objek_rincian_sub_id, 1, 6) = tmrekening_akun_kelompok_jenis_objeks.kd_rek_obj) AS jml_rek_obj'),
                \DB::raw('(
                        SELECT SUM(rincian.jumlah) 
                        FROM tmpendapatan AS rincian  
                        Where SUBSTR(rincian.tmrekening_akun_kelompok_jenis_objek_rincian_sub_id, 1, 4) = tmrekening_akun_kelompok_jenis.kd_rek_jenis) AS jml_rek_jenis')
            )->orderBy('tmrekening_akun_kelompok_jenis_objek_rincian_subs.kd_rek_rincian_objek_sub');;
    }
}
