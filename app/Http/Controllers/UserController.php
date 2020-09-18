<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Setupsikd\Tmsikd_satker;
use App\Models\Sikd_satker;
use App\Models\User;
use App\Models\Tmuser_level;

use DataTables;
use Validator;
use Properti_app;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{

    function __construct()
    {
        $this->view  = 'user';
        $this->route = 'user';
    }

    public function index()
    {
        $load_script = Properti_app::load_js(
            [
                asset('assets/template/js/plugin/datatables/datatables.min.js'),
            ]
        );
        return view($this->view . '.user_list', compact('load_script'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tmpegawai_id = '';
        $action = route('user.store');
        $method_field = method_field('post');
        $level = new Tmuser_level;
        $satker = Sikd_satker::get();
        $sikd_satker_id = '';
        $username = '';
        $realname = '';
        $password = '';
        $last_login = '';
        $telp     = '';
        $c_status = '';
        $photo = '';
        $d_entry = '';
        $d_update = '';
        $ttd = '';
        $paraf = '';
        $tmuser_level_id = '';
        $jenis = '';
        $p12 = '';

        return view(
            $this->view . '.user_form',
            compact(
                'tmpegawai_id',
                'username',
                'sikd_satker_id',
                'action',
                'method_field',
                'realname',
                'level',
                'satker',
                'password',
                'last_login',
                'telp',
                'c_status',
                'photo',
                'd_entry',
                'd_update',
                'ttd',
                'paraf',
                'tmuser_level_id',
                'jenis',
                'p12'
            )
        );
    }

    function api()
    {
        $pegawaidata = User::with(['Tmpegawai'])->get();
        return DataTables::of($pegawaidata)
            ->editColumn('nama_satker', function ($p) {
                $satker_id = $p['sikd_satker_id'];
                if ($p->sikd_satker_id == '') {
                    if ($p->tmuser_level_id == 1) {
                        $nama = 'Administrator';
                    } else {
                        $nama = '';
                    }
                } else {
                    $satker = Tmsikd_satker::find($satker_id);
                    $nama = $satker['nama'];
                }
                return '<b>' . $nama . '</b>';
            })
            ->editColumn('action', function ($p) {
                return '<button to="' . Url($this->route . '/' . $p->id . '/edit') . '" class="edit btn btn-warning btn-xs"><i class="fa fa-edit"></i>Edit </button>
                        <button data="' . $p->id . '" class="delete btn btn-danger btn-xs"><i class="fa fa-list"></i>Delete</button>';
            })
            ->addIndexColumn()
            ->rawColumns(['nama_satker', 'action'])
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
            'pegawai_id' => 'required',
            'username'   => 'required|unique:user,username',
            'realname'   => 'required',
            'password'   => 'required',
            'telp'       => 'required',
            'c_status'   => 'required',
            'photo'      => 'required',

        ];
        $valid = Validator::make($request->all(), $rules);
        if ($valid->fails()) {
            return response()->json([
                'status' => 2,
                'msg' => $valid->errors()->all()
            ]);
        }
        $file = $request->file('photo');
        if ($file) {
            $dt    =  Carbon::now();
            $ext   =  $file->getClientOriginalExtension();
            $setfm = rand(1122, 111) . '-' . $dt->format('Y-m-d-H-i-s') . '.' . $ext;
            $request->file('photo')->move('./file/photo_user', $setfm);
            $photo = $setfm;
        } else {
            $photo = 'default.jpg';
        }
        User::create([
            'tmpegawai_id' => $request->pegawai_id,
            'sikd_satker_id' => $request->sikd_satker_id,
            'username' => $request->username,
            'realname' => $request->realname,
            'password' => bcrypt($request->password),
            'last_login' => $request->last_login,
            'telp' => $request->telp,
            'c_status' => $request->c_status,
            'photo' => $request->photo,

            'ttd' => $request->ttd,
            'paraf' => $request->paraf,
            'tmuser_level_id' => $request->tmuser_level_id,
            'jenis' => $request->jenis,
            'p12' => $request->p12,
        ]);
        return response()->json(
            [
                'status' => 1,
                'msg' => 'data berhasil di simpan'
            ]
        );
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
        $edit = User::findOrFail($id);
        $method_field = method_field('put');
        $tmpegawai_id = $edit->tmpegawai_id;
        $sikd_satker_id = $edit->sikd_satker_id;
        $satker = Sikd_satker::get();
        $username = $edit->username;
        $realname = $edit->realname;
        $action = route('user.store', $edit->id);
        $password = $edit->password;
        $last_login = $edit->last_login;
        $telp = $edit->telp;
        $c_status = $edit->c_status;
        $photo = $edit->photo;
        $d_entry = $edit->d_entry;
        $d_update = $edit->d_update;
        $ttd = $edit->ttd;
        $paraf = $edit->paraf;
        $tmuser_level_id = $edit->tmuser_level_id;
        $jenis = $edit->jenis;
        $level = new Tmuser_level;
        $p12 = $edit->p12; 


     //   dd($tmuser_level_id);

        return view(
            $this->view . '.user_form',
            compact(
                'tmpegawai_id',
                'username',
                'sikd_satker_id',
                'satker',
                'realname',
                'method_field',
                'level',
                'action',
                'password',
                'last_login',
                'telp',
                'c_status',
                'photo',
                'd_entry',
                'd_update',
                'ttd',
                'paraf',
                'tmuser_level_id',
                'jenis',
                'p12'
            )
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
            'tmpegawai_id' => 'required',
            'username' => 'required',
            'realname' => 'required',
            'password' => 'required',
            'last_login' => 'required',
            'telp' => 'required',
            'c_status' => 'required',
            'photo' => 'required',
            'd_entry' => 'required',
            'd_update' => 'required',
            'ttd' => 'required',
            'paraf' => 'required',
            'tmuser_level_id' => 'required',
            'jenis' => 'required',
            'p12' => 'required',
        ];
        $valid = Validator::make($request->all(), $rules);
        if ($valid->fails()) {
            return response()->json([
                'status' => 2,
                'msg' => $valid->errors()->all()
            ]);
        }
        $file = $request->file('photo');
        if ($file) {
            $data  = User::Where('id', $request->id)->first();
            $fileloc  = './file/photo_user/' . $data->photo;
            $filename = public_path($fileloc);
            if (File::exists($filename)) {
                File::delete($filename);
            }
            $dt    =  Carbon::now();
            $ext   =  $file->getClientOriginalExtension();
            $setfm = rand(1122, 111) . '-' . $dt->format('Y-m-d-H-i-s') . '.' . $ext;
            $request->file('photo')->move('./file/photo_user/', $setfm);
            $photo = $setfm;
        } else {
            $photo = 'default.jpg';
        }
        User::find($request->id)->update([
            'tmpegawai_id' => $request->tmpegawai_id,
            'sikd_satker_id' => $request->sikd_satker_id,
            'username' => $request->username,
            'realname' => $request->realname,
            'password' => bcrypt($request->password),
            'last_login' => $request->last_login,
            'telp' => $request->telp,
            'c_status' => $request->c_status,
            'photo' => $photo,
            'ttd' => $request->ttd,
            'paraf' => $request->paraf,
            'tmuser_level_id' => $request->tmuser_level_id,
            'jenis' => $request->jenis,
            'p12' => $request->p12,
        ]);
        return response()->json(
            [
                'status' => 1,
                'msg' => 'data berhasil di simpan'
            ]
        );
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = User::findOrFail($request->id);
        $filename = public_path('./file/photo_user/' . $data->photo);
        if (File::exists($filename)) {
            File::delete($filename);
        }
        $data->delete();
        return response()->json([
            'status' => 1,
            'msg' => 'data berhasil di hapus',
        ]);
    }
}
