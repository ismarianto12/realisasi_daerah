<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;  
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    protected $route = 'akses.';
    protected $view  = 'profile.';
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $session_id = Auth::user()->id;
        $data       = User::find($session_id);
        $username   = $data->username;
        $nama       = $data->realname;
        //  if (FILE::exists($photo_paht)) {
        //     $user_foto = asset('./file/photo_user/' . $data->photo);
        // } else {
        //     $user_foto = asset('assets/template/img/profile.jpg');
        // }
        $telp       = $data->telp;
        return view(
            $this->view . 'index',
            [
                'username'  => $username,
                'nama'  => $nama,
                'telp'  => $telp,
                'photo' => asset('./file/photo_user/' . $data->photo),
                'action' => route($this->route . 'profile.update', $session_id),
                'method_field' => method_field('put')
            ]
        );
    }

    public function create(Request $request)
    {
    }



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
    public function update(Request $request, $id)
    {

        $userid = Auth::user()->id;
        $result = User::find($userid);

        $request->validate([
            'realname' => 'required',
            'telp'    => 'required',
            'password' => 'required',
        ]); 
        if ($request->file('photo')) {
            $dt             = Carbon::now();
            $ext            = $request->file('photo')->getClientOriginalExtension();
            $file           = rand(1, 2333) . '-' . $dt->format('Y-m-d-H-i-s') . '.' . $ext;
            $data['realname']  = $request->realname;
            $data['password'] = bcrypt($request->password);
            $data['telp']     = $request->telp;
            $request->file('photo')->move('public/file/photo_user/', $file);
            $data['photo']    = $file; 
            if (file_exists('public/file/photo_user' . $result->photo)) {
                @unlink('public/file/photo_user' . $result->photo);
            }
        } else {
            $data['realname']  = $request->realname;
            $data['password'] = bcrypt($request->password);
            $data['telp']     = $request->telp;
        }
        User::find($userid)->update($data); 
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
    public function destroy($id)
    {
        //
    }
}
