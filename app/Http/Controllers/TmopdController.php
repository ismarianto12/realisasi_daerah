<?php

namespace App\Http\Controllers;

use App\Models\Tmopd;
use Illuminate\Http\Request;
use Properti_app;
use DataTables;

class TmopdController extends Controller
{

    public $view  = 'tmopd.';
    public $route = 'aplikasi.satker.';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $route       = $this->route;
        $load_script = Properti_app::load_js([
            asset('assets/template/js/plugin/datatables/datatables.min.js'),
        ]);
        return view($this->view . '.index', compact('load_script', 'route'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(
            $this->view . '.tmopd_form',
            [
                'action' => route($this->route . 'store'),
                'method_field' => 'POST',
                'route' => $this->route,
                'kode' => '',
                'n_opd' => '',
                'initial' => '',
                'active' => '',
                'ket' => ''  
            ]
        );
    }

    public function api(Request $request)
    {
        $data = Tmopd::get();
        return DataTables::of($data)
            ->editColumn('nama_opd', function ($p) {
                return '<b>' . $p->n_opd . '</b>';
            })
            ->editColumn('active', function ($p) {
                if ($p->active == 1) {
                    $active = '<b>aktif</b>';
                } else {
                    $active = '<b>non aktif</b>';
                }
                return $active;
            })

            ->editColumn('set_active', function ($p) {
                if ($p->active == 1) {
                    return '<button onclick="javascript:confirm_active()" id="' .   $p->id . '" class="btn btn-primary btn-xs"><i class="fa fa-list"></i>Delete</button>';
                } else {
                    return '<button onclick="javascript:confirm_noactive()" id="' .   $p->id . '" class="btn btn-primary btn-xs"><i class="fa fa-list"></i>Delete</button>';
                }
            }, TRUE)
            ->editColumn('action', function ($p) {
                return '<button to="' . Url($this->route . $p->id . '.edit') . '" class="btn btn-warning btn-xs"><i class="fa fa-list"></i>Edit </button>
                        <button onclick="javascript:confirm_del()" id="' .   $p->id . '" class="btn btn-primary btn-xs"><i class="fa fa-list"></i>Delete</button>
                        ';
            }, TRUE)
            ->addIndexColumn()
            ->rawColumns([
                'nama_opd',
                'action',
                'active'
            ])
            ->toJson();
    }

    //set active
    function set_active(Request $request)
    {
        $request->validate([
            'active' => 'required',
        ]);
        $id = $request->id;
        $active = $request->active;
        Tmopd::find($id)->updated([
            'active' => $active
        ]);
        return response()->json([
            'msg' => 'data berhasil di aktifkan'
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
        $request->validate([
            'kode' => 'required',
            'n_opd' => 'required',
            'initial' => 'required',
            'tmrumpun_id' => 'required',
            'active' => 'required'
        ]);
        $r  = new Tmopd;
        $r->kode = $request->kode;
        $r->n_opd = $request->n_opd;
        $r->initial = $request->initial;
        $r->tmrumpun_id = $request->tmrumpun_id;
        $r->active = $request->active;
        $r->save();
        return response()->json([
            'msg' => 'data berhasil di simpan'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Tmopd::find($id);
        return view(
            $this->view . 'form',
            [
                'action' => route($this->route . 'store'),
                'method_field' => 'PACTH',
                'route' => $this->route,
                'kode' => $data->kode,
                'n_opd' => $data->n_opd,
                'initial' => $data->initial,
                'ket' => $data->ket,
                'active' => $data->active
            ]
        );
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required|unique:tmopds,kode',
            'n_opd' => 'required',
            'initial' => 'required',
            'tmrumpun_id' => 'required',
            'active' => 'required'
        ]);
        $r              = new Tmopd;
        $r->kode        = $request->kode;
        $r->n_opd       = $request->n_opd;
        $r->initial     = $request->initial;
        $r->tmrumpun_id = $request->tmrumpun_id;
        $r->active = $request->active;
        $r->find($request->id)->save();

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
    public function destroy(Request $request, $id)
    {
        $data = Tmopd::whereIn($request->id);
        if ($data != '') {
            $data->delete();
            return response()->json([
                'msg' => 'data berhasil di hapus'
            ]);
        }
    }
}
