<?php
// author ismarianto


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TmholidayController extends Controller
{
    function __construct()
    {
        $this->view  = 'tmholiday';
        $this->route = 'tmholiday.';
    }

    public function index()
    {
        $load_script = Properti_app::load_js([
            asset('assets/template/js/plugin/datatables/datatables.min.js'),
        ]);
        return view($this->view . '.tmholiday_list', compact('load_script'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $holidayid = '';
        $d_holiday = '';
        $deskripsi = '';
        $action    = Url('store');
        return view($this->view . 'tmholiday_form', compact(
            'holidayid',
            'd_holiday',
            'deskripsi'
        ),);
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
            'holidayid' => 'required',
            'd_holiday' => 'required',
            'deskripsi' => 'required',
        ];
        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()) {
            return response()->json(['status' => 2, $validation->errors->all()]);
        }

        $data = new Tmholiday;
        $data->holidayid = $request->holidayid;
        $data->d_holiday = $request->d_holiday;
        $data->deskripsi = $request->deskripsi;
        $data->save();
        return response()->json(['status' => 2, 'msg' => 'data berhasil di update']);
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

    function api()
    {
        $tmholiday =  Tmholiday::get();
        return DataTables::of($tmholiday)
            ->editColumn('id', function ($p) {
                return '<button to="' . Url($this->route . $p->holidayid . '.edit') . '" class="btn btn-warning btn-xs"><i class="fa fa-list"></i>Edit </button>
                        <button data="' . Url($this->route . '/delete/' . $p->holidayid) . '" class="btn btn-primary btn-xs"><i class="fa fa-list"></i>Delete</button>';
            })
            ->rawColumns(['id'])
            ->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data      = Tmholiday::find($id);
        $holidayid = $data->holidayid;
        $d_holiday = $data->d_holiday;
        $deskripsi = $data->deskrisi;
        $action    = Url($data->holidayid . 'edit');
        return view($this->view . 'tmholiday_form', compact(
            'holidayid',
            'd_holiday',
            'deskripsi'
        ),);
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
            'd_holiday' => 'required|unique:tmholiday,d_holiday',
            'deskripsi' => 'required',
        ];
        $valid = Validator::make($request->all(), $rules);
        if ($valid->fails()) {
            return response()->json(['status' => 2, $valid->errors()->all()]);
        }
        Tmholiday::find($request->id)->update($request->all());
        return response()->json(['status' => 1, 'msg' => 'data berhasil di tambah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = Tmholiday::findOrFail($request->id);
        $data->delete();
        return response()->json(['status' => 1, 'msg' => 'data berhasil di hapus']);
    }
}
