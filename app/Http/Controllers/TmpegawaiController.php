<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tmpegawai;
use App\Models\tmdinas;
use App\Models\tmjabatan;

use DataTables;
use Validator;
use Properti_app;

class TmpegawaiController extends Controller
{
    function __construct()
    {
        $this->view  = 'tmpegawai';
        $this->route = 'pegawai.';
    }

    public function index()
    {
        $route       = $this->route;
        $load_script = Properti_app::load_js([

            asset('assets/template/js/plugin/datatables/datatables.min.js'),
        ]);
        return view($this->view . '.tmpegawai_list', compact('load_script', 'route'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function api($params = '')
    {
        $pegawaidata = Tmpegawai::with(['tmdinas', 'tmjabatan'])->get();
        if ($params) {
            return DataTables::of($pegawaidata)
                ->editColumn('select', function ($p) {
                    return '<button data-id="' . $p->id . '" id="pilih" data-nama="' . $p->n_pegawai . '" class="btn btn-primary btn-xs"><i class="fa fa-check"></i>Pilih</button>';
                }, TRUE)
                ->editColumn('nama_dinas', function ($p) {
                    if ($p->n_dinas == '') {
                        return 'Kosong';
                    } else {
                        return $p->n_dinas;
                    }
                }, TRUE)
                ->addIndexColumn()
                ->rawColumns(['select'])
                ->toJson();
        } else {

            return DataTables::of($pegawaidata)
                ->editColumn('action', function ($p) {
                    return '<button to="' . Url($this->route . $p->id . '.edit') . '" class="btn btn-warning btn-xs"><i class="fa fa-list"></i>Edit </button>
                            <button onclick="javascript:confirm_del()" id="' .   $p->id . '" class="btn btn-primary btn-xs"><i class="fa fa-list"></i>Delete</button>
                            ';
                }, TRUE)
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->toJson();
        }
    }


    public function create()
    {
        $pegawaiid        = "";
        $action           = route('pegawai.store');
        $method_field     = method_field('post');
        $satuankerjaid    = "";
        $jabatanid        = "";
        $pegawaistatusid  = "";
        $d_masuk          = "";
        $d_keluar         = "";
        $nip              = "";
        $n_pegawai        = "";
        $telp             = "";
        $alamat           = "";
        $dinasid          = "";
        $bidangid         = "";
        $satker           = [];
        $d_kontrak        = "";
        $jabatan          = [];
        $c_status         = [];
        return view($this->view . '.tmpegawai_form', compact(
            'pegawaiid',
            'action',
            'method_field',
            'satuankerjaid',
            'jabatanid',
            'pegawaistatusid',
            'd_masuk',
            'd_keluar',
            'nip',
            'n_pegawai',
            'telp',
            'alamat',
            'dinasid',
            'bidangid',
            'd_kontrak',
            'jabatan',
            'c_status',
            'satker'
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
        $rules = [
            'pegawaiid' => 'required|unique:pegawaiid',
            'satuankerjaid' => 'required',
            'jabatanid' => 'required',
            'pegawaistatusid' => 'required',
            'd_masuk' => 'required',
            'd_keluar' => 'required',
            'nip' => 'required',
            'n_pegawai' => 'required',
            'telp' => 'required',
            'alamat' => 'required',
            'dinasid' => 'required',
            'bidangid' => 'required',
            'd_kontrak' => 'required',
        ];
        $error = Validator::make($request->all(), $rules);
        if ($error->fails()) {
            return response()->json(['status' => 1, 'msg' => $error->errors()->all()]);
        }
        $data = new Tmpegawai();
        $data->pegawaiid = $request->pegawaiid;
        $data->satuankerjaid = $request->satuankerjaid;
        $data->jabatanid = $request->jabatanid;
        $data->pegawaistatusid = $request->pegawaistatusid;
        $data->d_masuk = $request->d_masuk;
        $data->d_keluar = $request->d_keluar;
        $data->nip = $request->nip;
        $data->n_pegawai = $request->n_pegawai;
        $data->telp = $request->telp;
        $data->alamat = $request->alamat;
        $data->dinasid = $request->dinasid;
        $data->bidangid = $request->bidangid;
        $data->d_kontrak = $request->d_kontrak;
        $data->save();
        return response()->json(['status' => 1, 'msg' => 'data berhasil di tambahkan']);
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
        $data = Tmpegawai::find($id);

        $pegawaiid = $data->pegawaiid;
        $satuankerjaid = $data->satuankerjaid;
        $jabatanid = $data->jabatanid;
        $pegawaistatusid = $data->pegawaistatusid;
        $d_masuk = $data->d_masuk;
        $d_keluar = $data->d_keluar;
        $nip = $data->nip;
        $n_pegawai = $data->n_pegawai;
        $telp = $data->telp;
        $alamat = $data->alamat;
        $dinasid = $data->dinasid;
        $bidangid = $data->bidangid;
        $d_kontrak = $data->d_kontrak;

        return view($this->view . '.tmpegawai_form', compact(
            'pegawaiid',
            'satuankerjaid',
            'jabatanid',
            'pegawaistatusid',
            'd_masuk',
            'd_keluar',
            'nip',
            'n_pegawai',
            'telp',
            'alamat',
            'dinasid',
            'bidangid',
            'd_kontrak',
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
        $rules = [
            'pegawaiid' => 'required|unique:pegawaiid',
            'satuankerjaid' => 'required',
            'jabatanid' => 'required',
            'pegawaistatusid' => 'required',
            'd_masuk' => 'required',
            'd_keluar' => 'required',
            'nip' => 'required',
            'n_pegawai' => 'required',
            'telp' => 'required',
            'alamat' => 'required',
            'dinasid' => 'required',
            'bidangid' => 'required',
            'd_kontrak' => 'required',
        ];
        $error = Validator::make($request->all(), $rules);
        if ($error->fails()) {
            return response()->json(['status' => 1, 'msg' => $error->errors()->all()]);
        }
        $user = Tmpegawai::find($request->id)->fill($request->all());
        if ($user) {
            return response()->json(['status' => 1, 'msg' => 'data berhasil di tambahkan']);
        } else {
            return response()->json(['status' => 2, 'msg' => 'data gagal di edit']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $data =  Tmpegawai::find($request->id);
        $data->delete($request->id);
        return response()->json(['status' => 1, 'msg' => 'data berhasil di hapus.']);
    }
}
