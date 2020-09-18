<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use function PHPSTORM_META\map;

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
        $photo_paht = asset('foto_user/' . $data->photo);
        $telp       = $data->telp;

        return view(
            $this->view . 'index',
            [
                'username'  => $username,
                'nama'  => $nama,
                'telp'  => $telp,
                'photo' => $photo_paht,
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
        $result = User::find($request->id);
        $request->validate([
            'realname' => 'required',
            'telp'    => 'required',
            'password' => 'required',
        ]);
        $data = new User;
        $data->relname  = $request->realname;
        $data->password = bcrypt($request->password);
        $data->telp     = $request->telp;
        $data->find($request->id)->save();

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
