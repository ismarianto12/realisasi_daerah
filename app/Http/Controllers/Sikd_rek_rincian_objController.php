<?php

namespace App\Http\Controllers;

use App\Models\Sikd_rek_rincian_obj;
use Illuminate\Http\Request;
use Validator;
use DataTables;
use App\Helpers\Properti_app;


class Sikd_rek_rincian_objController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->view  = 'sikd_robject';
        $this->route = 'sikd_robject';
    }

    public function index()
    {
        //
        $load_script = Properti_app::load_js([
            asset('assets/template/js/plugin/datatables/datatables.min.js'),
        ]);
        return view($this->view . '.sikd_robject_list', compact('load_script'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $action = route($this->route . 'store');
        $method_field = method_field('post');
        $sikd_rek_obj_id = '';
        $kd_rek_rincian_obj = '';
        $nm_rek_rincian_obj = '';
        $kd_rekening = '';
        $klasifikasi_rek = '';
        $dasar_hukum = '';
        $sikd_rek_rincian_obj_p64_id = '';
        $sikd_rek_lra_id = '';
        $sikd_rek_lo_id = '';
        $sikd_rek_lak_id = '';
        $sikd_rek_neraca_id = '';
        $sikd_rek_aset_id = '';
        $sikd_rek_utang_id = '';
        $sikd_rek_akrual_id = '';
        $sikd_rek_lpe_id = '';
        $sikd_rek_lpsal_id = '';
        $bmd_kd_barang_id = '';
        $status_aktif = '';
        $sikd_rek_rincian_obj_id = '';

        return view(
            $this->view . 'sipkd_robject',
            compact(
                'action',
                'method_field',
                'sikd_rek_obj_id',
                'kd_rek_rincian_obj',
                'nm_rek_rincian_obj',
                'kd_rekening',
                'klasifikasi_rek',
                'dasar_hukum',
                'sikd_rek_rincian_obj_p64_id',
                'sikd_rek_lra_id',
                'sikd_rek_lo_id',
                'sikd_rek_lak_id',
                'sikd_rek_neraca_id',
                'sikd_rek_aset_id',
                'sikd_rek_utang_id',
                'sikd_rek_akrual_id',
                'sikd_rek_lpe_id',
                'sikd_rek_lpsal_id',
                'bmd_kd_barang_id',
                'status_aktif',
                'sikd_rek_rincian_obj_id'
            ),
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function api($params = '')
    {
        if ($params == '') {
            $sik_rek_rincian = Sikd_rek_rincian_obj::with(['Sikd_rek_obj'])->get();
            return DataTables::of($sik_rek_rincian)
                ->editColumn('action', function ($p) {
                    return '<button to="' . Url($this->route . '/' . $p->id . '/edit') . '" class="edit btn btn-warning btn-xs"><i class="fa fa-edit"></i>Edit </button>
                            <button data="' . Url($this->route . '/delete/' . $p->id) . '" class="btn btn-danger btn-xs"><i class="fa fa-list"></i>Delete</button>';
                })
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->toJson();
        } else {

            $sik_rek_rincian = Sikd_rek_rincian_obj::with(['Sikd_rek_obj'])->get();
            return DataTables::of($sik_rek_rincian)
                ->editColumn('action', function ($p) {
                    return '<button to="' . Url($this->route . '/' . $p->id . '/edit') . '" class="edit btn btn-warning btn-xs"><i class="fa fa-edit"></i>Edit </button>
                    <button data="' . Url($this->route . '/delete/' . $p->id) . '" class="btn btn-danger btn-xs"><i class="fa fa-list"></i>Delete</button>';
                })
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->toJson();
        }
    }


    public function store(Request $request)
    {
        $required = [
            'sikd_rek_obj_id' => 'required',
            'kd_rek_rincian_obj' => 'required',
            'nm_rek_rincian_obj' => 'required',
            'kd_rekening' => 'required',
            'klasifikasi_rek' => 'required',
            'dasar_hukum' => 'required',
            'sikd_rek_rincian_obj_p64_id' => 'required',
            'sikd_rek_lra_id' => 'required',
            'sikd_rek_lo_id' => 'required',
            'sikd_rek_lak_id' => 'required',
            'sikd_rek_neraca_id' => 'required',
            'sikd_rek_aset_id' => 'required',
            'sikd_rek_utang_id' => 'required',
            'sikd_rek_akrual_id' => 'required',
            'sikd_rek_lpe_id' => 'required',
            'sikd_rek_lpsal_id' => 'required',
            'bmd_kd_barang_id' => 'required',
            'status_aktif' => 'required',
            'sikd_rek_rincian_obj_id' => 'required',
        ];
        $validations = Validator::make($request->all(), $required);
        if ($validations->fails()) {
            return response()->json(['status' => 1, 'msg' => $validations->errors()->all()]);
        } else {
            Sikd_rek_rincian_obj::create($request->all());
            return response()->json(['status' => 1, 'msg' => 'data berhasil di tambahkan']);
        }
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
            'sikd_rek_obj_id' => 'required',
            'kd_rek_rincian_obj' => 'required',
            'nm_rek_rincian_obj' => 'required',
            'kd_rekening' => 'required',
            'klasifikasi_rek' => 'required',
            'dasar_hukum' => 'required',
            'sikd_rek_rincian_obj_p64_id' => 'required',
            'sikd_rek_lra_id' => 'required',
            'sikd_rek_lo_id' => 'required',
            'sikd_rek_lak_id' => 'required',
            'sikd_rek_neraca_id' => 'required',
            'sikd_rek_aset_id' => 'required',
            'sikd_rek_utang_id' => 'required',
            'sikd_rek_akrual_id' => 'required',
            'sikd_rek_lpe_id' => 'required',
            'sikd_rek_lpsal_id' => 'required',
            'bmd_kd_barang_id' => 'required',
            'status_aktif' => 'required',
            'sikd_rek_rincian_obj_id' => 'required',
        ];
        $validations = Validator::make($request->all(), $required);
        if ($validations->fails()) {
            return response()->json(['status' => 1, 'msg' => $validations->errors()->all()]);
        } else {
            Sikd_rek_rincian_obj::find($request->id)->update($request->all());
            return response()->json(['status' => 1, 'msg' => 'data berhasil di tambahkan']);
        }
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
