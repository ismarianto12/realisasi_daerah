<?php

namespace App\Models;

use App\Models\TmpendapatantargetModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Obj;
use App\Models\Setupsikd\Tmsikd_satker;


use App\Models\Setupsikd\Tmrekening_akun_kelompok;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek_rincian;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek_rincian_sub;

use Illuminate\Support\Facades\DB;


class Tmpendapatan extends Model
{

    public    $incrementing = false;
    protected $table        = 'tmpendapatan';

    protected $fillable     = [
        'tmsikd_satker_id',
        'tanggal_lapor',
        'tmrekening_akun_kelompok_jenis_objek_rincian_sub_id',
        'tmrekening_akun_kelompok_jenis_objek_rincian_id',
        'kd_rekening',
        'harga',
        'jumlah',
        'volume',
        'satuan',
        'keterangan',
        'tanggal_lapor',
        'is_deleted',
        'tahun',
        'created_by',
        'updated_by'
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

    //report modeil all  data 
    public function Tmrekening_akun_kelompok_jenis_objek_rincian()
    {
        return $this->belongsTo(Tmrekening_akun_kelompok_jenis_objek_rincian::class);
    }
    public function Tmrekening_akun_kelompok_jenis_objek_rincian_sub()
    {
        return $this->belongsTo(Tmrekening_akun_kelompok_jenis_objek_rincian_sub::class);
    }
    //  end funciton table

    public static function tbykelompok_jenis($where)
    {
        return Tmpendapatan::where($where)
            ->select(\DB::raw('tmrekening_akun_kelompok_jenis_objeks.*, DATE_FORMAT(tanggal_lapor,"%M") as bln,sum(tmpendapatan.jumlah) as jumlah_obj'))
            ->join('tmrekening_akun_kelompok_jenis_objek_rincians', 'tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id', '=', 'tmrekening_akun_kelompok_jenis_objek_rincians.kd_rek_rincian_obj')

            ->join('tmrekening_akun_kelompok_jenis_objeks', 'tmrekening_akun_kelompok_jenis_objek_rincians.tmrekening_akun_kelompok_jenis_objek_id', '=', 'tmrekening_akun_kelompok_jenis_objeks.kd_rek_obj')
            ->get();
    }


    public static function tbykelompok($kelompok_id)
    {
        $jumlah_digit = 2;
        //jumlah bisa berubah sesuai tahun 
        return Tmpendapatan::select(\DB::raw('sum(jumlah) as total_pad'))
            ->where(\DB::raw('SUBSTR(tmrekening_akun_kelompok_jenis_objek_rincian_id,1,' . $jumlah_digit . ')'), $kelompok_id)
            ->get();
    }

    public static function tbykelompok_object($kd_rek_obj, $bulan)
    {
        $data = Tmpendapatan::SELECT(\DB::raw('sum(jumlah) as total'))
            ->join('tmrekening_akun_kelompok_jenis_objek_rincians', 'tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id', '=', 'tmrekening_akun_kelompok_jenis_objek_rincians.kd_rek_rincian_obj')
            ->where(
                'tmrekening_akun_kelompok_jenis_objek_rincians.tmrekening_akun_kelompok_jenis_objek_id',
                $kd_rek_obj
            )
            ->where(\DB::raw('MONTH(tanggal_lapor)'), $bulan)
            ->groupBy('tmrekening_akun_kelompok_jenis_objek_rincians.tmrekening_akun_kelompok_jenis_objek_id')->first();
        $jmlah  = ($data['total']) ?  $data['total'] : 0;
        return number_format($jmlah, 0, 0, '.');
    }

    public static function list()
    {
        return Tmpendapatan::select(
            'tmpendapatan.*',

            'tmrekening_akun_kelompok_jenis_objek_rincians.kd_rek_rincian_obj',
            'tmrekening_akun_kelompok_jenis_objek_rincians.nm_rek_rincian_obj',

            'tmrekening_akun_kelompok_jenis_objeks.kd_rek_obj',
            'tmrekening_akun_kelompok_jenis_objeks.nm_rek_obj',

            'tmrekening_akun_kelompok_jenis.kd_rek_jenis',
            'tmrekening_akun_kelompok_jenis.nm_rek_jenis',

            'tmrekening_akun_kelompoks.kd_rek_kelompok',
            'tmrekening_akun_kelompoks.nm_rek_kelompok',


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


            ->join('tmrekening_akun_kelompok_jenis_objek_rincians', 'tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id', '=', 'tmrekening_akun_kelompok_jenis_objek_rincians.kd_rek_rincian_obj', 'LEFT')


            ->join('tmrekening_akun_kelompok_jenis_objeks', 'tmrekening_akun_kelompok_jenis_objek_rincians.tmrekening_akun_kelompok_jenis_objek_id', '=', 'tmrekening_akun_kelompok_jenis_objeks.kd_rek_obj')

            ->join('tmrekening_akun_kelompok_jenis', 'tmrekening_akun_kelompok_jenis_objeks.tmrekening_akun_kelompok_jenis_id', '=', 'tmrekening_akun_kelompok_jenis.kd_rek_jenis')

            ->join('tmrekening_akun_kelompoks', 'tmrekening_akun_kelompok_jenis.tmrekening_akun_kelompok_id', '=', 'tmrekening_akun_kelompoks.kd_rek_kelompok')

            ->groupBy('tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id');
    }

    public static function report_pendapatan($par)
    {
        $where    = ['tmrekening_akun_kelompok_jenis_objek_rincians.tmsikd_satkers_id' => $par['tmsikd_satker_id']];
        //by jenis 
        $jeniss = self::getrekeningbySatker($where)->groupBy('kd_rek_jenis')->get();
        $idx = 0;
        foreach ($jeniss as $jenis) {
            $pagu_kjenis        = TmpendapatantargetModel::select(\DB::raw('sum(jumlah) as total'))->where(\DB::raw('substr(tmrekening_akun_kelompok_jenis_objek_rincian_id,1,3)'), $jenis['kd_rek_jenis'])->first();
            $periodel_kjenis    = Tmpendapatan::select(\DB::raw('sum(jumlah) as trlalu'))
                ->where(\DB::raw('SUBSTR(tmrekening_akun_kelompok_jenis_objek_rincian_id,1,3)'), $jenis['kd_rek_jenis'])
                ->where('tanggal_lapor', '>=', $par['dperiode'])
                ->where('tanggal_lapor', '<=', $par['speriode'])
                ->first();

            $periode_ini_kjenis = Tmpendapatan::select(\DB::raw('sum(jumlah) as total'))
                ->where(\DB::raw('SUBSTR(tmrekening_akun_kelompok_jenis_objek_rincian_id,1,3)'), $jenis['kd_rek_jenis'])
                ->where('tanggal_lapor', '>=', $par['dari'])
                ->where('tanggal_lapor', '<=', $par['sampai'])
                ->first();

            $kurleb_kjenis      = 0;
            $persen_kjenis      = 0;

            $dataset[$idx]['kd_rek']['val']       = $jenis['kd_rek_jenis'];
            $dataset[$idx]['nm_rek']['val']       = $jenis['nm_rek_jenis'];
            $dataset[$idx]['pagu']['val']         = ($pagu_kjenis['total']) ? number_format($pagu_kjenis['total'], 0, 0, '.') : 0;
            $dataset[$idx]['periode_lalu']['val'] = ($periodel_kjenis['trlalu']) ? number_format($pagu_kjenis['total'], 0, 0, '.') : 0;
            $dataset[$idx]['periode_ini']['val']  = ($periode_ini_kjenis['total']) ? number_format($periode_ini_kjenis['total'], 0, 0, '.') : '';
            $dataset[$idx]['total']['val']        = 0;
            $dataset[$idx]['divide']['val']       = 0;
            $dataset[$idx]['persen']['val']       = 0;
            $dataset[$idx]['bold']['val']          = true;

            $idx++;
            //by kelompok jenis obj    
            $rek_objs = self::getrekeningbySatker($where)
                ->where('tmrekening_akun_kelompok_jenis_objeks.tmrekening_akun_kelompok_jenis_id', $jenis['kd_rek_jenis'])
                ->groupBy('tmrekening_akun_kelompok_jenis_objeks.kd_rek_obj')
                ->get();
            foreach ($rek_objs as $rek_obj) {
                $pagu_jobj        = TmpendapatantargetModel::select(\DB::raw('sum(jumlah) as total'))->where(\DB::raw('substr(tmrekening_akun_kelompok_jenis_objek_rincian_id,1,5)'), $rek_obj['kd_rek_obj'])->first();
                $periodel_jobj    = Tmpendapatan::select(\DB::raw('sum(jumlah) as trlalu'))
                    ->where(\DB::raw('SUBSTR(tmrekening_akun_kelompok_jenis_objek_rincian_id,1,5)'), $rek_obj['kd_rek_obj'])
                    ->where('tanggal_lapor', '>=', $par['dperiode'])
                    ->where('tanggal_lapor', '<=', $par['speriode'])
                    ->first();

                $periode_ini_jobj = Tmpendapatan::select(\DB::raw('sum(jumlah) as total'))
                    ->where(\DB::raw('SUBSTR(tmrekening_akun_kelompok_jenis_objek_rincian_id,1,5)'), $rek_obj['kd_rek_obj'])
                    ->where('tanggal_lapor', '>=', $par['dari'])
                    ->where('tanggal_lapor', '<=', $par['sampai'])
                    ->first();

                $kurleb_jobj      = 0;
                $persen_jobj      = 0;

                $dataset[$idx]['kd_rek']['val']       = $rek_obj['kd_rek_obj'];
                $dataset[$idx]['nm_rek']['val']       = $rek_obj['nm_rek_obj'];
                $dataset[$idx]['pagu']['val']         = $pagu_jobj['total'];
                $dataset[$idx]['periode_lalu']['val'] = $periodel_jobj['trlalu'];
                $dataset[$idx]['periode_ini']['val']  = $periode_ini_jobj['total'];
                $dataset[$idx]['total']['val']        = 0;
                $dataset[$idx]['divide']['val']       = 0;
                $dataset[$idx]['persen']['val']       = 0;
                $dataset[$idx]['bold']['val']         = true;
                $idx++;

                //by kelompok jenis rincian obj   
                $rincians = self::getrekeningbySatker($where)
                    ->where('tmrekening_akun_kelompok_jenis_objek_id', $rek_obj['kd_rek_obj'])
                    ->groupBy('kd_rek_rincian_obj')->get();
                foreach ($rincians as $rincian) {

                    //get subrincian rek 
                    $pagu_rincian        = TmpendapatantargetModel::select(\DB::raw('sum(jumlah) as total'))->where('tmrekening_akun_kelompok_jenis_objek_rincian_id', $rincian['kd_rek_rincian_obj'])->first();
                    $periodel_rincian    = Tmpendapatan::select(\DB::raw('sum(jumlah) as trlalu'))
                        ->where('tmrekening_akun_kelompok_jenis_objek_rincian_id', $rincian['kd_rek_rincian_obj'])
                        ->where('tanggal_lapor', '>=', $par['dperiode'])
                        ->where('tanggal_lapor', '<=', $par['speriode'])
                        ->first();
                    $periode_rincian = Tmpendapatan::select(\DB::raw('sum(jumlah) as total'))
                        ->where('tmrekening_akun_kelompok_jenis_objek_rincian_id', $rincian['kd_rek_rincian_obj'])
                        ->where('tanggal_lapor', '>=', $par['dari'])
                        ->where('tanggal_lapor', '<=', $par['sampai'])
                        ->first();

                    $kurleb_rincian      = 0;
                    $persen_rincian      = 0;

                    $dataset[$idx]['kd_rek']['val']        = $rincian['kd_rek_rincian_obj'];
                    $dataset[$idx]['nm_rek']['val']        = $rincian['nm_rek_rincian_obj'];
                    $dataset[$idx]['pagu']['val']          = $pagu_rincian['total'];
                    $dataset[$idx]['periode_lalu']['val']  = $periodel_rincian['trlalu'];
                    $dataset[$idx]['periode_ini']['val']   = $periode_rincian['total'];
                    $dataset[$idx]['total']['val']         = 0;
                    $dataset[$idx]['divide']['val']        = 0;
                    $dataset[$idx]['persen']['val']        = 0;
                    $dataset[$idx]['bold']['val']         = false;
                    $idx++;
                    //by kelompok jenis object rincian sub   
                    $rincian_subs = self::getrekeningbySatker($where)
                        ->where('tmrekening_akun_kelompok_jenis_objek_rincian_id', $rincian['kd_rek_rincian_obj'])
                        ->groupBy('kd_rek_rincian_objek_sub')
                        ->get();
                    foreach ($rincian_subs as $rincian_obj_sub) {

                        //get sub rinci rekening       
                        $pagu_rincian_sub        = TmpendapatantargetModel::select(\DB::raw('sum(jumlah) as total'))->where('tmrekening_akun_kelompok_jenis_objek_rincian_id', $rincian_obj_sub['kd_rek_rincian_objek_sub'])->get();
                        $periodel_rincian_sub    = Tmpendapatan::select(\DB::raw('sum(jumlah) as trlalu'))
                            ->where('tmrekening_akun_kelompok_jenis_objek_rincian_sub_id', $rincian_obj_sub['kd_rek_rincian_objek_sub'])
                            ->where('tanggal_lapor', '>=', $par['dperiode'])
                            ->where('tanggal_lapor', '<=', $par['speriode'])
                            ->first();

                        $periode_rincian_sub    = Tmpendapatan::select(\DB::raw('sum(jumlah) as total'))
                            ->where('tmrekening_akun_kelompok_jenis_objek_rincian_sub_id', $rincian_obj_sub['kd_rek_rincian_objek_sub'])
                            ->where('tanggal_lapor', '>=', $par['dari'])
                            ->where('tanggal_lapor', '<=', $par['sampai'])
                            ->first();
                        $pagu_objsub        = 0;
                        $periodel_objsub    = 0;
                        $periode_ini_objsub = 0;
                        $kurleb_objsub      = 0;
                        $persen_objsub      = 0;

                        $dataset[$idx]['kd_rek']['val']       = $rincian_obj_sub['kd_rek_rincian_objek_sub'];
                        $dataset[$idx]['nm_rek']['val']       = $rincian_obj_sub['nm_rek_rincian_objek_sub'];
                        $dataset[$idx]['pagu']['val']         = $pagu_rincian_sub;
                        $dataset[$idx]['periode_lalu']['val'] = $periodel_rincian_sub['trlalu'];
                        $dataset[$idx]['periode_ini']['val']  = $periode_rincian_sub['total'];
                        $dataset[$idx]['total']['val']        = 0;
                        $dataset[$idx]['divide']['val']       = 0;
                        $dataset[$idx]['persen']['val']       = 0;
                        $dataset[$idx]['bold']['val']         = false;
                        $idx++;
                    }
                }
            }
        }
        $result = isset($dataset) ? $dataset : 0;
        if ($result != 0) {
            return $dataset;
        } else {
            return abort(403, 'MAAF DATA TIDAK ADA SATUAN KERJ OPD TIDAK TERDAFTAR PADA PENCARIAN PAD YANG DI MAKSUD');
        }
    }

    public static function getpadbyrekrinci($where)
    {
        return Tmpendapatan::select(
            'tmpendapatan.*',
            'tmrekening_akun_kelompok_jenis_objek_rincian_subs.id as rek_rincian_sub_id',
            'tmrekening_akun_kelompok_jenis_objek_rincian_subs.kd_rek_rincian_objek_sub',
            'tmrekening_akun_kelompok_jenis_objek_rincian_subs.nm_rek_rincian_objek_sub',

            'tmrekening_akun_kelompok_jenis_objek_rincians.id as id_rek_rincians',
            'tmrekening_akun_kelompok_jenis_objek_rincians.kd_rek_rincian_obj',
            'tmrekening_akun_kelompok_jenis_objek_rincians.nm_rek_rincian_obj',

            'tmrekening_akun_kelompok_jenis_objek_rincians.id as tmrekening_akun_kelompok_jenis_objek_rincians_id',
            'tmrekening_akun_kelompok_jenis_objeks.id as id_rek_obj',
            'tmrekening_akun_kelompok_jenis_objeks.kd_rek_obj',
            'tmrekening_akun_kelompok_jenis_objeks.nm_rek_obj',

            'tmrekening_akun_kelompok_jenis.id as id_rek_jenis',
            'tmrekening_akun_kelompok_jenis.kd_rek_jenis',
            'tmrekening_akun_kelompok_jenis.nm_rek_jenis',

            'tmrekening_akun_kelompoks.id as id_rek_kelompok',
            'tmrekening_akun_kelompoks.kd_rek_kelompok',
            'tmrekening_akun_kelompoks.nm_rek_kelompok'
        )

            ->join('tmrekening_akun_kelompok_jenis_objek_rincian_subs', 'tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_sub_id', '=', 'tmrekening_akun_kelompok_jenis_objek_rincian_subs.id')
            ->join('tmrekening_akun_kelompok_jenis_objek_rincians', 'tmrekening_akun_kelompok_jenis_objek_rincian_subs.tmrekening_akun_kelompok_jenis_objek_rincian_id', '=', 'tmrekening_akun_kelompok_jenis_objek_rincians.id')
            ->join('tmrekening_akun_kelompok_jenis_objeks', 'tmrekening_akun_kelompok_jenis_objek_rincians.tmrekening_akun_kelompok_jenis_objek_id', '=', 'tmrekening_akun_kelompok_jenis_objeks.id')
            ->join('tmrekening_akun_kelompok_jenis', 'tmrekening_akun_kelompok_jenis_objeks.tmrekening_akun_kelompok_jenis_id', '=', 'tmrekening_akun_kelompok_jenis.id')
            ->join('tmrekening_akun_kelompoks', 'tmrekening_akun_kelompok_jenis.tmrekening_akun_kelompok_id', '=', 'tmrekening_akun_kelompoks.id')
            ->where($where)
            ->orderBy('tmrekening_akun_kelompok_jenis_objek_rincian_subs.kd_rek_rincian_objek_sub');
    }

    //check pendapatan perbulan 

    public static function pertahun($where)
    {
        return Tmpendapatan::where($where)
            ->select(
                'tmpendapatan.*',
                \DB::raw('sum(tmpendapatan.jumlah) as total'),

                'tmrekening_akun_kelompok_jenis_objek_rincian_subs.id as rek_rincian_sub_id',
                'tmrekening_akun_kelompok_jenis_objek_rincian_subs.kd_rek_rincian_objek_sub',
                'tmrekening_akun_kelompok_jenis_objek_rincian_subs.nm_rek_rincian_objek_sub',

                'tmrekening_akun_kelompok_jenis_objek_rincians.id as id_rek_rincians',
                'tmrekening_akun_kelompok_jenis_objek_rincians.kd_rek_rincian_obj',
                'tmrekening_akun_kelompok_jenis_objek_rincians.nm_rek_rincian_obj',

                'tmrekening_akun_kelompok_jenis_objek_rincians.id as tmrekening_akun_kelompok_jenis_objek_rincians_id',
                'tmrekening_akun_kelompok_jenis_objeks.id as id_rek_obj',
                'tmrekening_akun_kelompok_jenis_objeks.kd_rek_obj',
                'tmrekening_akun_kelompok_jenis_objeks.nm_rek_obj',

                'tmrekening_akun_kelompok_jenis.id as id_rek_jenis',
                'tmrekening_akun_kelompok_jenis.kd_rek_jenis',
                'tmrekening_akun_kelompok_jenis.nm_rek_jenis',

                'tmrekening_akun_kelompoks.id as id_rek_kelompok',
                'tmrekening_akun_kelompoks.kd_rek_kelompok',
                'tmrekening_akun_kelompoks.nm_rek_kelompok',

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
            ->join('tmrekening_akun_kelompok_jenis_objek_rincian_subs', 'tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_sub_id', '=', 'tmrekening_akun_kelompok_jenis_objek_rincian_subs.kd_rek_rincian_objek_sub', 'LEFT')

            ->join('tmrekening_akun_kelompok_jenis_objek_rincians', 'tmrekening_akun_kelompok_jenis_objek_rincian_subs.tmrekening_akun_kelompok_jenis_objek_rincian_id', '=', 'tmrekening_akun_kelompok_jenis_objek_rincians.kd_rek_rincian_obj', 'LEFT')

            ->join('tmrekening_akun_kelompok_jenis_objeks', 'tmrekening_akun_kelompok_jenis_objek_rincians.tmrekening_akun_kelompok_jenis_objek_id', '=', 'tmrekening_akun_kelompok_jenis_objeks.kd_rek_obj')

            ->join('tmrekening_akun_kelompok_jenis', 'tmrekening_akun_kelompok_jenis_objeks.tmrekening_akun_kelompok_jenis_id', '=', 'tmrekening_akun_kelompok_jenis.kd_rek_jenis')

            ->join('tmrekening_akun_kelompoks', 'tmrekening_akun_kelompok_jenis.tmrekening_akun_kelompok_id', '=', 'tmrekening_akun_kelompoks.kd_rek_kelompok')
            ->groupBy('tmrekening_akun_kelompok_jenis_objeks.kd_rek_obj');
    }
    //list data pendapatan 

    public static function datatable($satker_id)
    {

        return Tmrekening_akun_kelompok_jenis_objek_rincian::whereIn('tmrekening_akun_kelompok_jenis_objek_rincians.tmsikd_satkers_id', $satker_id)
            ->select(
                'tmpendapatan.*',
                'tmrekening_akun_kelompok_jenis_objek_rincians.id as id_rincian_obj',
                'tmrekening_akun_kelompok_jenis_objek_rincians.kd_rek_rincian_obj',
                'tmrekening_akun_kelompok_jenis_objek_rincians.nm_rek_rincian_obj',

                'tmrekening_akun_kelompok_jenis_objeks.kd_rek_obj',
                'tmrekening_akun_kelompok_jenis_objeks.nm_rek_obj'
            )

            ->join('tmrekening_akun_kelompok_jenis_objeks', 'tmrekening_akun_kelompok_jenis_objeks.id', '=', 'tmrekening_akun_kelompok_jenis_objek_rincians.tmrekening_akun_kelompok_jenis_objek_id', 'LEFT')

            //  ->join('tmrekening_akun_kelompok_jenis_objek_rincians','tmrekening_akun_kelompok_jenis_objeks.id','=','tmrekening_akun_kelompok_jenis_objek_rincians.tmrekening_akun_kelompok_jenis_objek_id','LEFT OUTER')
            ->join('tmpendapatan', 'tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id', '=', 'tmrekening_akun_kelompok_jenis_objek_rincians.kd_rek_rincian_obj', 'LEFT')
            ->groupBy('tmrekening_akun_kelompok_jenis_objek_rincians.kd_rek_rincian_obj');
    }
    //get detaool data rekening by  satker login


    public static function getrekeningbySatker($where)
    {
        return  Tmrekening_akun_kelompok_jenis_objek_rincian::select('*')
            ->join('tmrekening_akun_kelompok_jenis_objeks', 'tmrekening_akun_kelompok_jenis_objek_rincians.tmrekening_akun_kelompok_jenis_objek_id', '=', 'tmrekening_akun_kelompok_jenis_objeks.id')
            ->join('tmrekening_akun_kelompok_jenis', 'tmrekening_akun_kelompok_jenis_objeks.tmrekening_akun_kelompok_jenis_id', '=', 'tmrekening_akun_kelompok_jenis.id')
            ->join('tmrekening_akun_kelompoks', 'tmrekening_akun_kelompok_jenis.tmrekening_akun_kelompok_id', '=', 'tmrekening_akun_kelompoks.id')
            ->join('tmrekening_akun_kelompok_jenis_objek_rincian_subs', 'tmrekening_akun_kelompok_jenis_objek_rincians.id', '=', 'tmrekening_akun_kelompok_jenis_objek_rincian_subs.tmrekening_akun_kelompok_jenis_objek_rincian_id', 'LEFT')
            ->where($where);
        // ->where('tmrekening_akun_kelompok_jenis_objek_rincians.tmsikd_satkers_id', '=', 110201)

    }



    // public function static getPeriodeLalu()
    // {
    //     # code...
    // }

}
