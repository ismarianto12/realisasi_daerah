<?php

namespace App\Models\Rka;

use App\Libraries\Html\Html_number;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Obj;

use App\Models\Setupsikd\Tmsikd_bidang;
use App\Models\Setupsikd\Tmsikd_satker;
use App\Models\Setupsikd\Tmsikd_sub_skpd;

class Tmrka extends Model
{

    public    $incrementing = false;
    protected $fillable     = ['id', 'tmrapbd_id', 'tmsikd_satker_id', 'tmsikd_sub_skpd_id', 'tmsikd_bidang_id', 'rka_type', 'no_rka', 'judul_rka', 'status_rka', 'nip_ka_satker', 'nm_ka_satker', 'tgl_pengesahan_satker', 'keterangan', 'sumber_id'];

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

    public function tmrapbd()
    {
        return $this->belongsTo(Tmrapbd::class);
    }
    public static function getTmrka_kegiatan_id($id)
    {
        return Tmrka_blnj::wheretmrka_id($id)->first()->tmrka_kegiatan_id;
    }

    public function tmsikd_satker()
    {
        return $this->belongsTo(Tmsikd_satker::class);
    }

    public function tmsikd_sub_skpd()
    {
        return $this->belongsTo(Tmsikd_sub_skpd::class);
    }

    public function tmsikd_bidang()
    {
        return $this->belongsTo(Tmsikd_bidang::class);
    }

    public static function list($where)
    {
        return Tmrka::where($where)
            ->join('tmrka_mata_anggarans', 'tmrkas.id', '=', 'tmrka_mata_anggarans.tmrka_id')
            ->join('tmrekening_akun_kelompok_jenis_objek_rincian_subs', 'tmrka_mata_anggarans.tmrekening_akun_kelompok_jenis_objek_rincian_sub_id', '=', 'tmrekening_akun_kelompok_jenis_objek_rincian_subs.id')
            ->join('tmrekening_akun_kelompok_jenis_objek_rincians', 'tmrekening_akun_kelompok_jenis_objek_rincian_subs.tmrekening_akun_kelompok_jenis_objek_rincian_id', '=', 'tmrekening_akun_kelompok_jenis_objek_rincians.id')
            ->join('tmrekening_akun_kelompok_jenis_objeks', 'tmrekening_akun_kelompok_jenis_objek_rincians.tmrekening_akun_kelompok_jenis_objek_id', '=', 'tmrekening_akun_kelompok_jenis_objeks.id')
            ->join('tmrekening_akun_kelompok_jenis', 'tmrekening_akun_kelompok_jenis_objeks.tmrekening_akun_kelompok_jenis_id', '=', 'tmrekening_akun_kelompok_jenis.id')
            ->join('tmrekening_akun_kelompoks', 'tmrekening_akun_kelompok_jenis.tmrekening_akun_kelompok_id', '=', 'tmrekening_akun_kelompoks.id')
            ->select(
                'tmrka_mata_anggarans.*',
                'tmrkas.id as tmrapbd_id',
                'tmrkas.tmrapbd_id',
                'tmrkas.tmsikd_satker_id',
                'tmrkas.tmsikd_sub_skpd_id',
                'tmrkas.tmsikd_bidang_id',
                'tmrkas.rka_type',
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
                'tmrka_mata_anggarans.tmsikd_sumber_anggaran_id',
                // 'tmsikd_sumber_anggarans.nm_sumber_anggaran',
                \DB::raw('(
                        SELECT SUM(rincian.jumlah) 
                        FROM tmrka_mata_anggarans AS rincian 
                        WHERE rincian.tmrka_id = tmrkas.id 
                        AND SUBSTR(rincian.tmrekening_akun_kelompok_jenis_objek_rincian_sub_id, 1, 8) = tmrekening_akun_kelompok_jenis_objek_rincians.kd_rek_rincian_obj) AS jml_rek_rincian_obj'),
                \DB::raw('(
                        SELECT SUM(rincian.jumlah) 
                        FROM tmrka_mata_anggarans AS rincian 
                        WHERE rincian.tmrka_id = tmrkas.id 
                        AND SUBSTR(rincian.tmrekening_akun_kelompok_jenis_objek_rincian_sub_id, 1, 6) = tmrekening_akun_kelompok_jenis_objeks.kd_rek_obj) AS jml_rek_obj'),
                \DB::raw('(
                        SELECT SUM(rincian.jumlah) 
                        FROM tmrka_mata_anggarans AS rincian 
                        WHERE rincian.tmrka_id = tmrkas.id 
                        AND SUBSTR(rincian.tmrekening_akun_kelompok_jenis_objek_rincian_sub_id, 1, 4) = tmrekening_akun_kelompok_jenis.kd_rek_jenis) AS jml_rek_jenis')
            )->orderBy('tmrekening_akun_kelompok_jenis_objek_rincian_subs.kd_rek_rincian_objek_sub');;
    }




    public static function listblnj($where)
    {
        return Tmrka::where($where)
            ->join('tmrka_kegiatans', 'tmrka_kegiatans.tmrka_id', '=', 'tmrkas.id')
            ->join('tmrka_mata_anggarans', 'tmrkas.id', '=', 'tmrka_mata_anggarans.tmrka_id')
            // ->join('tmsikd_sumber_anggarans', 'tmsikd_sumber_anggarans.id', '=', 'tmrka_mata_anggarans.tmsikd_sumber_anggaran_id')
            ->join('tmrekening_akun_kelompok_jenis_objek_rincian_subs', 'tmrka_mata_anggarans.tmrekening_akun_kelompok_jenis_objek_rincian_sub_id', '=', 'tmrekening_akun_kelompok_jenis_objek_rincian_subs.id')
            ->join('tmrekening_akun_kelompok_jenis_objek_rincians', 'tmrekening_akun_kelompok_jenis_objek_rincian_subs.tmrekening_akun_kelompok_jenis_objek_rincian_id', '=', 'tmrekening_akun_kelompok_jenis_objek_rincians.id')
            ->join('tmrekening_akun_kelompok_jenis_objeks', 'tmrekening_akun_kelompok_jenis_objek_rincians.tmrekening_akun_kelompok_jenis_objek_id', '=', 'tmrekening_akun_kelompok_jenis_objeks.id')
            ->join('tmrekening_akun_kelompok_jenis', 'tmrekening_akun_kelompok_jenis_objeks.tmrekening_akun_kelompok_jenis_id', '=', 'tmrekening_akun_kelompok_jenis.id')
            ->join('tmrekening_akun_kelompoks', 'tmrekening_akun_kelompok_jenis.tmrekening_akun_kelompok_id', '=', 'tmrekening_akun_kelompoks.id')
            ->select(
                'tmrka_mata_anggarans.*',
                'tmrkas.id as tmrapbd_id',
                'tmrkas.tmrapbd_id',
                'tmrkas.tmsikd_satker_id',
                'tmrkas.tmsikd_sub_skpd_id',
                'tmrkas.tmsikd_bidang_id',
                'tmrkas.rka_type',
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
                'tmrka_mata_anggarans.tmsikd_sumber_anggaran_id',
                // 'tmsikd_sumber_anggarans.nm_sumber_anggaran',
                \DB::raw('(
                        SELECT SUM(rincian.jumlah) 
                        FROM tmrka_mata_anggarans AS rincian 
                        WHERE rincian.tmrka_id = tmrkas.id 
                        AND SUBSTR(rincian.tmrekening_akun_kelompok_jenis_objek_rincian_sub_id, 1, 8) = tmrekening_akun_kelompok_jenis_objek_rincians.kd_rek_rincian_obj) AS jml_rek_rincian_obj'),
                \DB::raw('(
                        SELECT SUM(rincian.jumlah) 
                        FROM tmrka_mata_anggarans AS rincian 
                        WHERE rincian.tmrka_id = tmrkas.id 
                        AND SUBSTR(rincian.tmrekening_akun_kelompok_jenis_objek_rincian_sub_id, 1, 6) = tmrekening_akun_kelompok_jenis_objeks.kd_rek_obj) AS jml_rek_obj'),
                \DB::raw('(
                        SELECT SUM(rincian.jumlah) 
                        FROM tmrka_mata_anggarans AS rincian 
                        WHERE rincian.tmrka_id = tmrkas.id 
                        AND SUBSTR(rincian.tmrekening_akun_kelompok_jenis_objek_rincian_sub_id, 1, 4) = tmrekening_akun_kelompok_jenis.kd_rek_jenis) AS jml_rek_jenis')
            )->orderBy('tmrekening_akun_kelompok_jenis_objek_rincian_subs.kd_rek_rincian_objek_sub');;
    }
    // set report data in model  
    public static function list_report($where)
    {
        return Tmrka::where($where)
            ->join('tmrka_mata_anggarans', 'tmrkas.id', '=', 'tmrka_mata_anggarans.tmrka_id')
            ->join('tmrekening_akun_kelompok_jenis_objek_rincian_subs', 'tmrka_mata_anggarans.tmrekening_akun_kelompok_jenis_objek_rincian_sub_id', '=', 'tmrekening_akun_kelompok_jenis_objek_rincian_subs.id')
            ->join('tmrekening_akun_kelompok_jenis_objek_rincians', 'tmrekening_akun_kelompok_jenis_objek_rincian_subs.tmrekening_akun_kelompok_jenis_objek_rincian_id', '=', 'tmrekening_akun_kelompok_jenis_objek_rincians.id')
            ->join('tmrekening_akun_kelompok_jenis_objeks', 'tmrekening_akun_kelompok_jenis_objek_rincians.tmrekening_akun_kelompok_jenis_objek_id', '=', 'tmrekening_akun_kelompok_jenis_objeks.id')
            ->join('tmrekening_akun_kelompok_jenis', 'tmrekening_akun_kelompok_jenis_objeks.tmrekening_akun_kelompok_jenis_id', '=', 'tmrekening_akun_kelompok_jenis.id')
            ->join('tmrekening_akun_kelompoks', 'tmrekening_akun_kelompok_jenis.tmrekening_akun_kelompok_id', '=', 'tmrekening_akun_kelompoks.id')
            ->select(
                'tmrka_mata_anggarans.*',
                'tmrkas.id as tmrapbd_id',
                'tmrkas.tmrapbd_id',
                'tmrkas.tmsikd_satker_id',
                'tmrkas.tmsikd_sub_skpd_id',
                'tmrkas.tmsikd_bidang_id',
                'tmrkas.rka_type',
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
                'tmrka_mata_anggarans.tmsikd_sumber_anggaran_id',
                // 'tmsikd_sumber_anggarans.nm_sumber_anggaran',
                \DB::raw('(
                        SELECT SUM(rincian.jumlah) 
                        FROM tmrka_mata_anggarans AS rincian 
                        WHERE rincian.tmrka_id = tmrkas.id 
                        AND SUBSTR(rincian.tmrekening_akun_kelompok_jenis_objek_rincian_sub_id, 1, 8) = tmrekening_akun_kelompok_jenis_objek_rincians.kd_rek_rincian_obj) AS jml_rek_rincian_obj'),
                \DB::raw('(
                        SELECT SUM(rincian.jumlah) 
                        FROM tmrka_mata_anggarans AS rincian 
                        WHERE rincian.tmrka_id = tmrkas.id 
                        AND SUBSTR(rincian.tmrekening_akun_kelompok_jenis_objek_rincian_sub_id, 1, 6) = tmrekening_akun_kelompok_jenis_objeks.kd_rek_obj) AS jml_rek_obj'),
                \DB::raw('(
                        SELECT SUM(rincian.jumlah) 
                        FROM tmrka_mata_anggarans AS rincian 
                        WHERE rincian.tmrka_id = tmrkas.id 
                        AND SUBSTR(rincian.tmrekening_akun_kelompok_jenis_objek_rincian_sub_id, 1, 4) = tmrekening_akun_kelompok_jenis.kd_rek_jenis) AS jml_rek_jenis')
            )->orderBy('tmrekening_akun_kelompok_jenis_objek_rincian_subs.kd_rek_rincian_objek_sub');;
    }






    public static function getPermission($id)
    {
        $r = Tmrka::whereid($id)
            ->select('id', 'rka_type')
            ->firstOrFail();
        switch ($r->rka_type) {
            case 'PPASPendapatan':
                $a = "rka.anggaran.pendapatan";
                break;
            case 'PPASPenerimaan':
                $a = "rka.anggaran.penerimaan";
                break;
            case 'PPASPengeluaran':
                $a = "rka.anggaran.pengeluaran";
                break;
            case 'PPASBlnjModal':
                $a = "rka.blnj.modal";
                break;
            case 'PPASBlnjOperasi':
                $a = "rka.blnj.operasi";
                break;
            case 'PPASBlnjTdkTerduga':
                $a = "rka.blnj.tdk_terduga";
                break;
            case 'PPASBlnjTransfer':
                $a = "rka.blnj.transfer";
                break;
            case 'PPASPenerimaHibah':
                $a = "rka.penerimahibah";
                break;
        }
        return $a;
    }

    public static function jns_rka()
    {
        $arr = array("1" => "RKAPendapatan", "2" => "RKABlnj", '"3" => "RKAPenerimaan","4" => "RKAPengeluaran"');
        return $arr;
    }
    public static function n_jns_rka()
    {
        $arr = array("1" => "Pendapatan", "2" => "Belanja", "3" => "Penerimaan", "4" => "Pengeluaran");
        return $arr;
    }

    public static function import($_table, $tmrka_id)
    {
        return \DB::table('tmrka_' . $_table)
            ->updateOrInsert(['tmrka_id' => $tmrka_id]);
    }

    public static function update_kegiatan_id($_table, $tmrka_id, $tmrka_kegiatan_id)
    {
        return \DB::table('tmrka_' . $_table)
            ->where('tmrka_id', $tmrka_id)
            ->update(['tmrka_kegiatan_id' => $tmrka_kegiatan_id]);
    }

    public static function export($_table, $where)
    {
        return Tmrka::where($where)
            ->join('tmrka_' . $_table, 'tmrkas.id', '=', 'tmrka_' . $_table . '.tmrka_id')
            ->select('tmrkas.*', 'tmrka_' . $_table . '.*')
            ->groupBy('tmrkas.id')
            ->get();
    }

    public static function getStatusRka()
    {
        $arr = array("0" => "Dalam Proses", "1" => "Disetujui", "2" => "Ditolak");
        return $arr;
    }

    public static function jml_anggaran($tmrka, $format = null)
    {
        // if($format){
        return  Tmrka_mata_anggaran::whereIn('tmrka_id', $tmrka->pluck('id')->toArray())->sum('jumlah');
        // }

        // return Html_number::decimal(Tmrka_mata_anggaran::whereIn('tmrka_id',$tmrka->pluck('id')->toArray())->sum('jumlah'));

    }
}
