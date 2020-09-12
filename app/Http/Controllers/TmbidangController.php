<?php

namespace App\Http\Controllers;

use App\Models\Tmbidang;
use Illuminate\Http\Request;
use DataTables;
use Validator;
use Properti_app;

class TmbidangController extends Controller
{
    function __construct()
    {
        $this->view  = 'tmbidang';
        $this->route = 'tmbidang.';
    }

    public function index()
    {
        $load_script = Properti_app::load_js(
            asset('assets/template/js/plugin/datatables/datatables.min.js'),
        );
        return view($this->view . '.tmbidang_list', compact('load_script'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nm_bidang = '';
        $id_skpd   = '';
        return view($this->view . '.tmbidang', compact(
            'nm_bidang',
            'id_skpd'
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
        $required = [
            'id_skpd'  => 'required',
            'nm_bidang' => 'required'
        ];
        $valid = Validator::make($request->all(), $required);
        if ($valid->fails()) {
            return response()->json(['status' => 2, 'msg' => $valid->errors()->all()]);
        }
        $row            = new Tmbidang;
        $row->nm_bidang = $request->nm_bidang;
        $row->id_skpd   = $request->id_skpd;
        $row->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function api()
    {
        $pegawaidata = Tmbidang::get();
        return DataTables::of($pegawaidata)
            ->editColumn('id', function ($p) {
                return '<button to="' . Url($this->route . $p->id . '.edit') . '" class="btn btn-warning btn-xs"><i class="fa fa-list"></i>Edit </button>
                        <button data="' . Url($this->route . '/delete/' . $p->id) . '" class="btn btn-primary btn-xs"><i class="fa fa-list"></i>Delete</button>';
            })
            ->rawColumns(['id'])
            ->toJson();
    }



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
        $nm_bidang = '';
        $action    = $this->route.$id.'./edit/';
        $id_skpd   = '';
        return view($this->view . '.tmbidang_form', compact(
            'nm_bidang',
            'action',
            'id_skpd'
        ));
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
        $required = [
            'id_skpd'  => 'required',
            'nm_bidang' => 'required'
        ];
        $valid = Validator::make($request->all(), $required);
        if ($valid->fails()) {
            return response()->json(['status' => 2, 'msg' => $valid->errors()->all()]);
        }
        $row            = new Tmbidang;
        $row->nm_bidang = $request->nm_bidang;
        $row->id_skpd   = $request->id_skpd;
        $row->find($request->id);
        $row->update();
        return response()->json(['status' => 1, 'msg' => 'data berhasil disimpan .']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data =  Tmbidang::find($request->id);
        $data->delete();
    }
}
