<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vaidator;
use App\Models\Sikd_rek;
use Carbon;
use DataTables;
use App\Helpers\Properti_app;

class Sikd_rekController extends Controller
{

    function __construct()
    {
            $this->view  = 'sikd_rek';
            $this->route = 'sikd_rek.'; 
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
        return view($this->view . '.sikd_rek_list', compact('load_script'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id_sikd_rek  = '';
        $sikd_rek_id  = '';
        $kd_rek       = '';
        $nm_rek       = '';
        $action       = route('sikd_rek.store');
        $method_field = method_field('post');
        return view(
            $this->view . '/sikd_rek_form',
            compact(
                'id_sikd_rek',
                'sikd_rek_id',
                'kd_rek',
                'nm_rek',
                'action',
                'method_field'
            ),
        );
    }


    function api()
    {
        $sikd_rek = Sikd_rek::get();
        return DataTables::of($sikd_rek)
            ->editColumn('action', function ($p) {
              return '<button to="' . Url($this->route . $p->id . '.edit') . '" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i>Edit </button>
                      <button data="' . Url($this->route . '/delete/' . $p->id) . '" class="btn btn-primary btn-xs"><i class="fa fa-trash"></i>Delete</button>';
            }, TRUE)
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules =  [

            'sikd_rek_id' => 'required',
            'kd_rek' => 'required',
            'nm_rek' => 'required',
            'action' => 'required',
            'method_field' => 'required'
        ];
        $valid = Validator::make($request->all(), $request);
        if ($valid->fails()) {
            return response()->json([
                'status' => 2,
                'msg' => $valid->errors()->all(),
            ]);
        }
        Sikd_rek::Create($request->all());
        return response()->json([
            'status' => 1,
            'msg' => 'data berhasil di simpan',
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
        $data         = Sikd_rek::find($id);
        $id_sikd_rek  = $data->id_sikd_rek;
        $sikd_rek_id  = $data->sikd_rek_id;
        $kd_rek       = $data->kd_rek;
        $nm_rek       = $data->nm_rek;
        $action       = route('sikd_rek.updadate', $id);
        $method_field = method_field('put');
        return view(
            $this->view . '/sikd_rek_form',
            compact(
                'id_sikd_rek',
                'sikd_rek_id',
                'kd_rek',
                'nm_rek',
                'action',
                'method_field'
            ),
        );
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
        $rules =  [
            'sikd_rek_id' => 'required',
            'kd_rek' => 'required',
            'nm_rek' => 'required',
            'action' => 'required',
            'method_field' => 'required'
        ];
        $valid = Validator::make($request->all(), $request);
        if ($valid->fails()) {
            return response()->json([
                'status' => 2,
                'msg' => $valid->errors()->all(),
            ]);
        }
        Sikd_rek::Find($request->id)->update($request->all());
        return response()->json([
            'status' => 1,
            'msg' => 'data berhasil di simpan',
        ]);
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
        $data = Sikd_rek::FindOrFail($request->id);
        $data->delete();
        return response()->json([
            'status' => 1,
            'message' => 'data berhasil di hapus',
        ]);
    }
}
