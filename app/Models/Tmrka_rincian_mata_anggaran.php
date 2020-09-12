<?php

namespace App\Models\Rka;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Obj;

class Tmrka_rincian_mata_anggaran extends Model
{
  
    public $incrementing = false;
    protected $fillable     = ['id', 'tmrka_mata_anggaran_id', 'tmrka_harga_satuan_id', 'tmasb_blnj_non_fisik_id', 'no_item_h', 'no_item_s', 'no_item', 'jns_item', 'header', 'subheader', 'uraian', 'volume', 'satuan', 'harga', 'jumlah', 'keterangan', 'tmrka_rincian_mata_anggaran_id', 'tmrka_rincian_mata_anggaran_id'];

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

    public function tmrka_mata_anggaran()
    {
        return $this->belongsTo(Tmrka_mata_anggaran::class);
    }

    public function tmrka_harga_satuan()
    {
        return $this->belongsTo('App\Models\Sshasb\Tmrka_harga_satuan');
    }

    public function tmasb_blnj_non_fisik()
    {
        return $this->belongsTo('App\Models\Sshasb\Tmasb_blnj_non_fisik');
    }

    public static function list($where)
    {
        return Tmrka_rincian_mata_anggaran::where($where)
            ->select(
                '*',
                \DB::raw('(
                        SELECT SUM(h.jumlah) FROM tmrka_rincian_mata_anggarans as h WHERE 
                        h.tmrka_mata_anggaran_id = tmrka_rincian_mata_anggarans.tmrka_mata_anggaran_id
                        AND h.no_item_h = tmrka_rincian_mata_anggarans.no_item_h) AS jumlah_h'),
                \DB::raw('(
                        SELECT SUM(s.jumlah) FROM tmrka_rincian_mata_anggarans as s WHERE 
                        s.tmrka_mata_anggaran_id = tmrka_rincian_mata_anggarans.tmrka_mata_anggaran_id
                        AND s.no_item_h = tmrka_rincian_mata_anggarans.no_item_h
                        AND s.no_item_s = tmrka_rincian_mata_anggarans.no_item_s) AS jumlah_s')
            )
            ->orderBy('no_item_h', 'ASC')
            ->orderBy('no_item_s', 'ASC')
            ->orderBy('no_item', 'ASC');
    }


    public static function listIn($where)
    {
        return Tmrka_rincian_mata_anggaran::where($where)
            ->select(
                '*',
                \DB::raw('(
                        SELECT SUM(h.jumlah) FROM tmrka_rincian_mata_anggarans as h WHERE 
                        h.tmrka_mata_anggaran_id = tmrka_rincian_mata_anggarans.tmrka_mata_anggaran_id
                        AND h.no_item_h = tmrka_rincian_mata_anggarans.no_item_h) AS jumlah_h'),
                \DB::raw('(
                        SELECT SUM(s.jumlah) FROM tmrka_rincian_mata_anggarans as s WHERE 
                        s.tmrka_mata_anggaran_id = tmrka_rincian_mata_anggarans.tmrka_mata_anggaran_id
                        AND s.no_item_h = tmrka_rincian_mata_anggarans.no_item_h
                        AND s.no_item_s = tmrka_rincian_mata_anggarans.no_item_s) AS jumlah_s')
            )
            ->orderBy('no_item_h', 'ASC')
            ->orderBy('no_item_s', 'ASC')
            ->orderBy('no_item', 'ASC');
    }

    public static function getListJnsItem()
    {
        $arr = ['' => "&nbsp;", 'I' => "Item MAK", 'H' => "Header", 'S' => "Sub Header"];
        return $arr;
    }
}
