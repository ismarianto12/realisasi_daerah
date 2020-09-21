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

use App\Models\Setupsikd\Tmsikd_rekening_lra;
use App\Models\Setupsikd\Tmsikd_rekening_lak;
use App\Models\Setupsikd\Tmsikd_rekening_neraca;
use App\Models\Setupsikd\Tmsikd_setup_tahun_anggaran;


class SettingrekeningController extends Controller
{


    protected $route      = 'settingrek.';
    protected $view       = 'settingrek.';
    protected $title      = "Setting Rekening Per satker akses OPD";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tmsikd_satkers     = Sikd_list_option::listSkpd()->whereNotIn('kode', 300202);

        $title              = $this->title;
        $route              = $this->route;
        $toolbar            = ['c', 'd'];
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
        } elseif ($request->tmsikd_satker_id != 0) {
            $satker_id = $request->tmsikd_satker_id;
            $data->join('tmsikd_satkers', function ($join) use ($satker_id) {
                $join->on('tmrekening_akun_kelompok_jenis_objek_rincians.tmsikd_satkers_id', '=', 'tmsikd_satkers.id')
                    ->where('tmrekening_akun_kelompok_jenis_objek_rincians.tmsikd_satkers_id', $satker_id);
            });
        }
        $data->get();
        return DataTables::of($data)
            ->editColumn('id', function ($p) {
                return "<input type='checkbox' name='cbox[]' value='" . $p->id . "' />";
            })
            ->editColumn('nm_rek_rincian_obj', function ($p) {
                return "<a href='" . route($this->route . 'show', $p->id) . "' target='_self'>" . $p->nm_rek_rincian_obj . "</a>";
            })
            ->rawColumns(['id', 'nm_rek_rincian_obj'])
            ->toJson();
    }

    public function create(Request $request)
    {

        $tahuns           = Tmsikd_setup_tahun_anggaran::select('id', 'tahun')->get();
        $tmsikd_satkers   = Sikd_list_option::listSkpd()->whereNotIn('kode', 300202);
        $tmsikd_satker_id = ($request->tmsikd_satker_id == '' ? $tmsikd_satkers->first()->id : $request->tmsikd_satker_id);
        $dari             = $request->dari;
        $sampai           = $request->sampai;

        return view($this->view . '.setting_form', [
            'tahuns' => $tahuns,
            'tmsikd_satkers' => $tmsikd_satkers,
            'tmsikd_satker_id' => $tmsikd_satker_id,
        ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
