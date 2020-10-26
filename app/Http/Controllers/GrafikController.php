<?php
//author ismarianto
namespace App\Http\Controllers;

use App\Helpers\Properti_app;
use App\Models\Tmpendapatan;
use Illuminate\Http\Request;
use App\Models\TmpendapatantargetModel;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis;
use App\Models\Setupsikd\Tmrekening_akun_kelompok;


use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek_rincian;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek_rincian_sub;

class GrafikController extends Controller
{


    public $route = 'laporan.grafik';
    public $view  = 'grafik.';
    public $title = 'Grafik penerimaan pendapatan';

    function __construct()
    {
        $this->middleware('level:|1');
    }
    /**
     * Display a listing of the resource.
     *
     * return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        $tahun   = Properti_app::tahun_sekarang();
        $qkjenis = Tmrekening_akun_kelompok_jenis::with(['tmrekening_akun_kelompok'])->get();

        foreach ($qkjenis as $kjenis) {
            $id_rek_jenis[] = $kjenis['kd_rek_jenis'];
        }
        $rd_rek_jenis = implode(',', $id_rek_jenis);
        //dd($rd_rek_jenis);

        $bulan    = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
        $qdata    =  Tmrekening_akun_kelompok::select(
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

            ->join('tmrekening_akun_kelompok_jenis', 'tmrekening_akun_kelompoks.id', '=', 'tmrekening_akun_kelompok_jenis.tmrekening_akun_kelompok_id')
            ->join('tmrekening_akun_kelompok_jenis_objeks', 'tmrekening_akun_kelompok_jenis.kd_rek_jenis', '=', 'tmrekening_akun_kelompok_jenis_objeks.tmrekening_akun_kelompok_jenis_id')

            ->join('tmrekening_akun_kelompok_jenis_objek_rincians', 'tmrekening_akun_kelompok_jenis_objeks.id', '=', 'tmrekening_akun_kelompok_jenis_objek_rincians.tmrekening_akun_kelompok_jenis_objek_id')

            ->join('tmrekening_akun_kelompok_jenis_objek_rincian_subs', 'tmrekening_akun_kelompok_jenis_objek_rincians.id', '=', 'tmrekening_akun_kelompok_jenis_objek_rincian_subs.tmrekening_akun_kelompok_jenis_objek_rincian_id', 'LEFT')
            ->groupBy('tmrekening_akun_kelompok_jenis.kd_rek_jenis')
            ->get();
        $tmpendapatan = new Tmpendapatan;
        $padbytype    = $this->getdatapie();

        $arr = [];
        $i = 1;
        foreach ($padbytype as $value) {
            if ($i = 1) {
                $arr[] = [
                    'name' => $value['nm_rek_jenis']['val'],
                    'y'  => $value['persen']['val'],
                    'sliced' => true,
                    'selected' => true
                ];
            } else {
                $arr[] = [
                    'name' => $value['nm_rek_jenis']['val'],
                    'y'  => $value['persen']['val']
                ];
            }
            $i++;
        }
        $rpadtype = json_encode($arr);
        return view($this->view . 'index', [
            'title' => $this->title,
            'rpadtype' => $rpadtype,
            'tmpendapatan' => $tmpendapatan,
            'rekening' => $qdata
        ]);
    }

    protected function getdatapie()
    {
        // index like name and y  
        $akun_kelompok        = Tmrekening_akun_kelompok::get();
        $kelompok_jenis       = new Tmrekening_akun_kelompok_jenis;
        $kelompok_object      = new Tmrekening_akun_kelompok_jenis_objek;
        $kelompok_rincian     = new Tmrekening_akun_kelompok_jenis_objek_rincian;
        $kelompok_sub_rincian = new Tmrekening_akun_kelompok_jenis_objek_rincian_sub;
        $tmpendapatan         = new Tmpendapatan;
        // $listarget            = new TmpendapatantargetModel;

        $idx = 0;
        foreach ($akun_kelompok as $kelompok) {
            $total_pad = Tmpendapatan::tbykelompok($kelompok['kd_rek_kelompok'])->first();
            $tahun = Properti_app::getTahun();
            $qkjenis = $kelompok_jenis::where('tmrekening_akun_kelompok_id', $kelompok['id'])->get();
            $idx++;

            foreach ($qkjenis as $kjenis) {
                $where = [
                    'tmrekening_akun_kelompok_jenis_objeks.tmrekening_akun_kelompok_jenis_id' => $kjenis['kd_rek_jenis'],
                    'tmpendapatan.tahun' => $tahun
                ];

                $rjenis             = Tmpendapatan::tbykelompok_jenis($where)->first();
                $pagu_kjenis        = TmpendapatantargetModel::select(\DB::raw('sum(jumlah) as total'))->where(\DB::raw('substr(tmrekening_akun_kelompok_jenis_objek_rincian_id,1,3)'), $kjenis['kd_rek_jenis'])->first();
                if ($pagu_kjenis['total'] != NULL || $pagu_kjenis['total'] != '') {
                    $fpagu_kjenis       =  $pagu_kjenis['total'];
                } else {
                    $fpagu_kjenis       = 0;
                }
                if ($rjenis['jumlah_obj'] != NULL || $rjenis['jumlah_obj'] != '') {
                    $fjumlah = $rjenis['jumlah_obj'];
                } else {
                    $fjumlah = 0;
                }
                if ($fpagu_kjenis != 0 && $fjumlah != 0) {
                    $persentase    = round($fjumlah / ($fpagu_kjenis / 100), 2);
                } else {
                    $persentase  = 0.0;
                }
                //get value as val    
                $dataset[$idx]['kd_rek_jenis']['val'] = $kjenis['kd_rek_jenis'];
                $dataset[$idx]['nm_rek_jenis']['val'] = $kjenis['nm_rek_jenis'];
                $dataset[$idx]['persen']['val'] = $persentase;
                $idx++;
            }
        }
        return $dataset;
    }

    /**
     * Show the form for creating a new resource.
     *
     * return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * param  \Illuminate\Http\Request  $request
     * return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    public function tampilgrafik()
    {
    }

    /**
     * Display the specified resource.
     *
     * param  int  $id
     * return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * param  int  $id
     * return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * param  \Illuminate\Http\Request  $request
     * param  int  $id
     * return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * param  int  $id
     * return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
