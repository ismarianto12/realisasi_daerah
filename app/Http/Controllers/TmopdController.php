<?php

namespace App\Http\Controllers;

use App\Models\Tmopd;
use Illuminate\Http\Request;
use Properti_app;
use DataTables;

class TmopdController extends Controller
{

    public $view  = 'tmopd';
    public $route = 'satker.';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $load_script = Properti_app::load_js([
            asset('assets/template/js/plugin/datatables/datatables.min.js'),
        ]);
        return view($this->view . '.index', compact('load_script'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

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
