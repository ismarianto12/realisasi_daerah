<?php

namespace App\Models\Rka;

use App\Helpers\Properti_app;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Obj;

use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek_rincian;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek_rincian_sub;
use Illuminate\Validation\Rules\NotIn;

class Tmrka_mata_anggaran extends Model
{

    public    $incrementing = false;
    protected $fillable     = ['id', 'tmrka_id', 'tanggal_lapor', 'tmrekening_akun_kelompok_jenis_objek_rincian_sub_id', 'tmsikd_sumber_anggaran_id', 'kd_rekening', 'volume', 'satuan', 'harga', 'jumlah', 'jml_anggaran_rkpd', 'jml_final', 'keterangan', 'tmrka_mata_anggaran_id', 'tmrka_mata_anggaran_id'];

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

    public function tmrka()
    {
        return $this->belongsTo(Tmrka::class);
    }

    public function tmrekening_akun_kelompok_jenis_objek_rincian_sub()
    {
        return $this->belongsTo('App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek_rincian_sub');
    }

    public function tmsikd_sumber_anggaran()
    {
        return $this->belongsTo('App\Models\Setupsikd\Tmsikd_sumber_anggaran');
    }

    public static function getKdRekRka($RkaSkpdType)
    {
        switch ($RkaSkpdType) {
            case "RKAPendapatan":
                $kdRek = "4";
                break;
            case "KuaBlnjModal":
                $kdRek = "52";
                break;
            case "KuaBlnjOperasi":
                $kdRek = "51";
                break;
            case "KuaBlnjTdkTerduga":
                $kdRek = "53";
                break;
            case "KuaBlnjTransfer":
                $kdRek = "54";
                break;
            case "RKAPenerimaan":
                $kdRek = "61";
                break;
            case "RKAPengeluaran":
                $kdRek = "62";
                break;
            case "RKABlnj":
                $kdRek = ["51", "52", "53", "54"];
                break;
        }
        return $kdRek;
    }
    public static function getInputListDataSetRincSub($par)
    {
        //def level 
        $level_id  = Properti_app::getlevel(); 
        $satker_id = Auth::user()->sikd_satker_id;
        
        if ($par['tmrekening_akun_kelompok_jenis_objek_rincian_id'] != "")
            $cond['id'] = $par['tmrekening_akun_kelompok_jenis_objek_rincian_id'];
        else
            $cond['tmrekening_akun_kelompok_jenis_objek_id'] = $par['tmrekening_akun_kelompok_jenis_objek_id'];

        $tanggal_sekarang = date('Y-m-d');
        $notIn = Tmrka_mata_anggaran::wheretanggal_lapor($tanggal_sekarang)
            ->select('id', 'tmrekening_akun_kelompok_jenis_objek_rincian_sub_id')
            ->pluck('tmrekening_akun_kelompok_jenis_objek_rincian_sub_id')
            ->toArray();

        if ($level_id == 1) { 
            $rekRincians = Tmrekening_akun_kelompok_jenis_objek_rincian::where($cond)
                ->select('id', 'kd_rek_rincian_obj', 'nm_rek_rincian_obj')
                ->get();
        } else {
            $satker['tmsikd_satkers_id']  = $satker_id;
            if(empty($cond['tmrekening_akun_kelompok_jenis_objek_id'])){
               $rekRincians = Tmrekening_akun_kelompok_jenis_objek_rincian::where($satker)
                ->select('id', 'kd_rek_rincian_obj', 'nm_rek_rincian_obj')
                ->get();  
            }else{    
             $mcond = array_merge($satker,$cond);
             $rekRincians = Tmrekening_akun_kelompok_jenis_objek_rincian::where($mcond)
                ->select('id', 'kd_rek_rincian_obj', 'nm_rek_rincian_obj')
                ->get();
            }
        } 

        $idx = 0;
        $dataSet = [];
        foreach ($rekRincians as $key => $rekRincian) {
            $dataSet[$idx]['tmrekening_akun_kelompok_jenis_objek_rincian_sub_id']['val'] = '';
            $dataSet[$idx]['tmrekening_akun_kelompok_jenis_objek_rincian_id']['val']     = $rekRincian->id;
            $dataSet[$idx]['kd_rek']['val'] = $rekRincian->kd_rek_rincian_obj;
            $dataSet[$idx]['nm_rek']['val'] = $rekRincian->nm_rek_rincian_obj;
            $dataSet[$idx]['cbox']['accRight'] = 'r';
            $dataSet[$idx]["style"] = "background:#ECECD7";
            $dataSet[$idx]["kd_rek"]["no_url"] = true;
            $idx++;

            $rekSubs = Tmrekening_akun_kelompok_jenis_objek_rincian_sub::wheretmrekening_akun_kelompok_jenis_objek_rincian_id($rekRincian->id)
                ->whereNotIn('id', $notIn)
                ->select('id', 'kd_rek_rincian_objek_sub', 'nm_rek_rincian_objek_sub')
                ->get();
            foreach ($rekSubs as $key => $rekSub) {
                $dataSet[$idx]['tmrekening_akun_kelompok_jenis_objek_rincian_sub_id']['val']    = $rekSub->id;
                $dataSet[$idx]['tmrekening_akun_kelompok_jenis_objek_rincian_id']['val'] = $rekRincian->id;
                $dataSet[$idx]['kd_rek']['val'] = $rekSub->kd_rek_rincian_objek_sub;
                $dataSet[$idx]['nm_rek']['val'] = $rekSub->nm_rek_rincian_objek_sub;
                $idx++;
            }
        }
        return $dataSet;
    }
}
