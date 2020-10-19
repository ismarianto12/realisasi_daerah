<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use DataTables;
use Sikd_list_option;

use App\Models\Setupsikd\Tmrekening_akun;
use App\Models\Setupsikd\Tmrekening_akun_kelompok;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek_rincian;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek_rincian_sub;
use App\Models\Setupsikd\Tmsikd_rekening_lra;
use App\Models\Setupsikd\Tmsikd_rekening_lak;
use App\Models\Setupsikd\Tmsikd_rekening_neraca;
use App\Models\Setupsikd\Tmsikd_satker;
use App\Models\Setupsikd\Tmsikd_setup_tahun_anggaran;


class SettingrekeningController extends Controller
{
    protected $route      = 'settingrek.rek.';
    protected $view       = 'settingrek.';
    protected $title      = "Setting Rekening Per satker akses OPD";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
        $this->middleware('level:|1');
    }

    public function index()
    {

        $tmsikd_satkers     = Sikd_list_option::listSkpd();
        $title              = $this->title;
        $route              = $this->route;
        $toolbar            = ['list'];
        $tmrekening_akuns   = Tmrekening_akun::select('id', 'kd_rek_akun', 'nm_rek_akun')->get();
        return view($this->view . 'index', compact(
            'title',
            'route',
            'toolbar',
            'tmrekening_akuns',
            'tmsikd_satkers'

        ));
    }


    function api(Request $request)
    {
        $data = Tmrekening_akun_kelompok_jenis_objek_rincian::select('tmrekening_akun_kelompok_jenis_objek_rincians.*');
        if ($request->tmrekening_akun_kelompok_jenis_objek_id != 0) {
            $data->wheretmrekening_akun_kelompok_jenis_objek_id($request->tmrekening_akun_kelompok_jenis_objek_id);
        } elseif ($request->tmrekening_akun_kelompok_jenis_id != 0) {
            $tmrekening_akun_kelompok_jenis_id = $request->tmrekening_akun_kelompok_jenis_id;
            $data->join('tmrekening_akun_kelompok_jenis_objeks', function ($join) use ($tmrekening_akun_kelompok_jenis_id) {
                $join->on('tmrekening_akun_kelompok_jenis_objek_rincians.tmrekening_akun_kelompok_jenis_objek_id', '=', 'tmrekening_akun_kelompok_jenis_objeks.id')
                    ->where('tmrekening_akun_kelompok_jenis_objeks.tmrekening_akun_kelompok_jenis_id', $tmrekening_akun_kelompok_jenis_id);
                });
        } elseif ($request->tmrekening_akun_kelompok_id != 0) {
            $data->join('tmrekening_akun_kelompok_jenis_objeks', function ($join) {
                $join->on('tmrekening_akun_kelompok_jenis_objek_rincians.tmrekening_akun_kelompok_jenis_objek_id', '=', 'tmrekening_akun_kelompok_jenis_objeks.id');
            });

            $tmrekening_akun_kelompok_id = $request->tmrekening_akun_kelompok_id;
            $data->join('tmrekening_akun_kelompok_jenis', function ($join) use ($tmrekening_akun_kelompok_id) {
                $join->on('tmrekening_akun_kelompok_jenis_objeks.tmrekening_akun_kelompok_jenis_id', '=', 'tmrekening_akun_kelompok_jenis.id')
                    ->where('tmrekening_akun_kelompok_jenis.tmrekening_akun_kelompok_id', $tmrekening_akun_kelompok_id);
            });
        } elseif ($request->tmrekening_akun_id != 0) {
            $data->join('tmrekening_akun_kelompok_jenis_objeks', function ($join) {
                $join->on('tmrekening_akun_kelompok_jenis_objek_rincians.tmrekening_akun_kelompok_jenis_objek_id', '=', 'tmrekening_akun_kelompok_jenis_objeks.id');
            });

            $data->join('tmrekening_akun_kelompok_jenis', function ($join) {
                $join->on('tmrekening_akun_kelompok_jenis_objeks.tmrekening_akun_kelompok_jenis_id', '=', 'tmrekening_akun_kelompok_jenis.id');
            });

            $tmrekening_akun_id = $request->tmrekening_akun_id;
            $data->join('tmrekening_akun_kelompoks', function ($join) use ($tmrekening_akun_id) {
                $join->on('tmrekening_akun_kelompok_jenis.tmrekening_akun_kelompok_id', '=', 'tmrekening_akun_kelompoks.id')
                    ->where('tmrekening_akun_kelompoks.tmrekening_akun_id', $tmrekening_akun_id);
            });
        } 
        // $data->with(['tmsikd_satker'=> function($par){ 
            
        //    // 'tmsikd_satkers.id','=','tmrekening_akun_kelompok_jenis_objek_rincians.tmsikd_satker_id');
        // }]); 
        if ($request->tmsikd_satker_id != 0) {
            $satker_id = $request->tmsikd_satker_id;
            $data->where('tmrekening_akun_kelompok_jenis_objek_rincians.tmsikd_satkers_id', $satker_id);
        }
        if ($request->notsetting == 1) {
            $data->where('tmrekening_akun_kelompok_jenis_objek_rincians.tmsikd_satkers_id', '=', '');
        } else if ($request->notsetting == 2) {
            $data->where('tmrekening_akun_kelompok_jenis_objek_rincians.tmsikd_satkers_id', '!=', '');
        }

        $data->get();
        return DataTables::of($data)
            ->editColumn('id', function ($p) {
                return "<input type='checkbox' name='cbox[]' value='" . $p->id . "' />";
            })
            ->editColumn('nm_rek_rincian_obj', function ($p) {
                return "<a href='" . route($this->route . 'show', $p->id) . "' target='_self'>" . $p->nm_rek_rincian_obj . "</a>";
            })
            ->editColumn('nm_satker', function ($p) {
                $exp   = explode(',', $p->tmsikd_satkers_id);
                $datas = Tmsikd_satker::whereIn('id',$exp)->get();
                $hasil = [];
                foreach($datas as $result){
                  $hasil[] =  ($result['nama']) ? $result['nama'] : '<span color="red"><b>Belum di setting</b></span>';
                }     
                $r = implode(',',$hasil); 
                return $r;
            })
            ->rawColumns(['id', 'nm_rek_rincian_obj', 'nm_satker', 'action'])
            ->toJson();
    }
    //api sub rincian object

    function api_rincian_sub(Request $request, $id)
    {
        $data = Tmrekening_akun_kelompok_jenis_objek_rincian_sub::where('tmrekening_akun_kelompok_jenis_objek_rincian_id', $id);
        if ($request->tmsikd_satker_id != 0) {
            $satker_id = $request->tmsikd_satker_id;
            $data->where('tmrekening_akun_kelompok_jenis_objek_rincian_subs.tmsikd_satkers_id', $satker_id);
        }
        if ($request->notsetting == 1) {
            $data->where('tmrekening_akun_kelompok_jenis_objek_rincian_subs.tmsikd_satkers_id', '=', '');
        }
        if ($request->notsetting == 2) {
            $data->where('tmrekening_akun_kelompok_jenis_objek_rincian_subs.tmsikd_satkers_id', '!=', '');
        }
        $data->get();
        return DataTables::of($data)
            ->editColumn('id', function ($p) {
                return "<input type='checkbox' name='cbox[]' value='" . $p->id . "' />";
            })
            ->editColumn('nm_rek_rincian_obj', function ($p) {
                return "<a href='" . route($this->route . 'show', $p->id) . "' target='_self'>" . $p->nm_rek_rincian_obj . "</a>";
            })
            ->editColumn('nm_satker', function ($p) {
                $f = Tmsikd_satker::where('id', $p->tmsikd_satkers_id);
                if ($f->count() == '') {
                    return '<span style="color: red"><b>Kosong</b></span><br /><small>Belum di setting.</small>';
                } else {
                    return "<b>" . $f->first()->nama . "</b>";
                }
            })
            ->editColumn('nm_satker', function ($p) {
                $f = Tmsikd_satker::where('id', $p->tmsikd_satkers_id);
                if ($f->count() == '') {
                    return '<span style="color: red"><b>Kosong</b></span><br /><small>Belum di setting.</small>';
                } else {
                    return "<b>" . $f->first()->nama . "</b>";
                }
            })
            ->rawColumns(['id', 'nm_rek_rincian_obj', 'nm_satker', 'action'])
            ->toJson();
    }


    public function create(Request $request)
    {
        $tmsikd_satkers     = Sikd_list_option::listSkpd()->whereNotIn('kode', 300202);
        $title              = $this->title;
        $route              = $this->route;
        $toolbar            = ['list', 'save'];
        $tmrekening_akuns   = Tmrekening_akun::select('id', 'kd_rek_akun', 'nm_rek_akun')->get();
        return view($this->view . 'settig_form', compact(
            'title',
            'route',
            'toolbar',
            'tmrekening_akuns',
            'tmsikd_satkers'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data               = Tmrekening_akun_kelompok_jenis_objek_rincian::where('kd_rek_rincian_obj', $id)->first();
        $nama_rincian       = ($data->nm_rek_rincian_obj) ? $data->nm_rek_rincian_obj : 0;

        $tmsikd_satkers     = Sikd_list_option::listSkpd();
        $title              = $this->title;
        $route              = $this->route;
        $rincian_id         = $id;
        $toolbar            = ['list'];
        $tmrekening_akuns   = Tmrekening_akun::select('id', 'kd_rek_akun', 'nm_rek_akun')->get();
        return view($this->view . 'index_rincian', compact(
            'title',
            'nama_rincian',
            'rincian_id',
            'route',
            'toolbar',
            'tmrekening_akuns',
            'tmsikd_satkers'

        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $r      = new Tmrekening_akun_kelompok_jenis_objek_rincian;
        $satker = $request->satker_id;
        $id     = $request->id;

        $r->whereIn('id', $id)->update([
            'tmsikd_satkers_id' => $satker
        ]);
        return response()->json([
            'msg' => 'data berhasil di simpan'
        ]);
    }

    ///update setting di sub rekening
    public function update_rincian_sub(Request $request)
    {
        $r      = new Tmrekening_akun_kelompok_jenis_objek_rincian_sub;
        $satker = $request->satker_id;
        $id     = $request->id;

        $r->whereIn('id', $id)->update([
            'tmsikd_satkers_id' => $satker
        ]);
        return response()->json([
            'msg' => 'data berhasil di simpan'
        ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function batalkan(Request $request)
    {
        Tmrekening_akun_kelompok_jenis_objek_rincian::whereIn('id', $request->id)
            ->update([
                'tmsikd_satkers_id' => NULL
            ]);

        return response()->json([
            'msg' => 'data berhasil di batalkan'
        ]);
    }
    public function batalkan_sub(Request $request)
    {
        Tmrekening_akun_kelompok_jenis_objek_rincian_sub::whereIn('id', $request->id)
            ->update([
                'tmsikd_satkers_id' => NULL
            ]);

        return response()->json([
            'msg' => 'data berhasil di batalkan'
        ]);
    }
    public function destroy(Request $request, $id)
    {
    }
}
