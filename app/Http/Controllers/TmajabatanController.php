<?php
// autor ismarianto 


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tmjabatan;
use Validator;
use DataTable;


class TmajabatanController extends Controller
{

    function __construct()
    {
        // $this->middleware('Level:1|2')
        $this->view = 'tmjabatan';
        $this->route = 'tmjabatan.';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $load_js = Properti_app::load_js(
            [
                asset('assets/template/js/plugin/datatables/datatables.min.js'),
            ]
        );
        return view($this->view . 'tmjabatan_list', compact('load_js'));
    }


    function api()
    {

        $jabatan = Tmjabatan::get();
        return DataTables::of($jabatandata)
            ->editColumn('id', function ($p) {
                return '<button to="' . Url($this->route . $p->jabatanid . '.edit') . '" class="btn btn-warning btn-xs"><i class="fa fa-list"></i>Edit </button>
                        <button data="' . Url($this->route . '/delete/' . $p->pegawaiid) . '" class="btn btn-primary btn-xs"><i class="fa fa-list"></i>Delete</button>';
            })
            ->rawColumns(['id'])
            ->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatanid = '';
        $action    = '';
        $n_jabatan = '';
        return view($this->view . '.tmjabatan_form', compact(
            'jabatanid',
            'action',
            'n_jabatan'
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
            'n_jabatan' => 'required',
        ];
        $valid = Validator::make($request->all(), $rules);
        if ($valid->fails()) {
            return response()->json(['status' => 1, 'msg' => $valid->errors()->all()]);
        }
        $data = new Tmjabatan;
        $data->n_jabatan = $request->n_jabatan;
        $data->save();
        return response()->json(['status' => 1, 'msg' => 'data jataban berhasil di tambahkan']);
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
        $data      =  Tmjabatan::findOrFail($id);
        $action    = $this->route . '/' . $id . '/edit';
        $jabatanid =  $data->jabataid;
        $n_jabatan =  $data->n_jabatan;
        return view($this->view . '.tmjabatan_form', compact(
            'jabatanid',
            'n_jabatan'
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
            'n_jabatan' => 'required',
        ];
        $valid = Validator::make($request->all(), $rules);
        if ($valid->fails()) {
            return response()->json(['status' => 1, 'msg' => $valid->errors()->all()]);
        }
        $data = new Tmjabatan;
        $data->n_jabatan = $request->n_jabatan;
        $data->find($request->id);
        $data->save();
        return response()->json(['status' => 1, 'msg' => 'data jataban berhasil di tambahkan']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = Tmjabatan::findOrFails($request->id);
        $data->delete();
        return response()->json(['status' => 1, 'msg' => 'data jabatan berhasil di hapus']);
    }
}
