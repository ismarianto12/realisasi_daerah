<?php

namespace App\Models\Setupsikd;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Trsikd_skpkd extends Model
{
     
    protected $fillable   = ['tmsikd_satker_id', 'tmsikd_satker_skpkd_id', 'id'];
    protected $table      = 'trsikd_skpkds';

    public function tmsikd_satker()
    {
        return $this->belongsTo(Tmsikd_satker::class, 'tmsikd_satker_id');
    }

    public function tmsikd_skpkd()
    {
        return $this->belongsTo(Tmsikd_satker::class, 'tmsikd_satker_skpkd_id');
    }

    public static function skpkd()
    {

        $auth = Auth::user()->tmpegawai;

        $skpkd = Trsikd_skpkd::select('id', 'tmsikd_satker_id', 'tmsikd_satker_skpkd_id');
        if ($auth != "") {
            if ($auth->tmsikd_satker_id != "")
                $skpkd->whereTmsikd_satker_id($auth->tmsikd_satker_id);
        }



        // $_satker = $satker->orderByRaw("if(locate('SOTK-LAMA',nama)=0,1,2), kode")->get();
        return $skpkd->pluck('tmsikd_satker_skpkd_id')->toArray();
    }
}
