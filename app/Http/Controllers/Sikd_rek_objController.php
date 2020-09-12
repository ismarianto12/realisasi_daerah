<?php

namespace App\Http\Controllers;

use App\Models\Sikd_rek_obj;
use Illuminate\Http\Request;
use DataTables;
use Validator;
use Carbon;
use Properti_app;

class Sikd_rek_objController extends Controller
{
    function __construct()
    {
        $this->view  = 'sikd_object';
        $this->route = 'sikd_object.';
    }
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
        return view($this->view . '.sikd_object_list', compact('load_script'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function api()
    {
        $data = Sikd_rek_obj::get();
        return DataTables::of($data)
            ->editColumn('action', function ($p) {
                return '<button to="' . Url($this->route . $p->id . '.edit') . '" class="btn btn-warning btn-xs"><i class="fa fa-list"></i>Edit </button>
                        <button data="' . Url($this->route . '/delete/' . $p->id) . '" class="btn btn-primary btn-xs"><i class="fa fa-list"></i>Delete</button>';
            }, TRUE)
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->toJson();
    }


    public function create()
    {
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
    }

    public function destroy(Request $request, $id)
    {
        $data = Sikd_rek_obj::FindOrFail($request->id);
        $data->delete();
        return response()->json([
            'status' => 1,
            'msg' => 'data berhasil di hapus',

        ]);
    }
}
