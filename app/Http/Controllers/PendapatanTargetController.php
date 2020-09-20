<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use DataTables;
// Models
use App\Models\Setupsikd\Tmrekening_akun;
use App\Models\Setupsikd\Tmrekening_akun_kelompok;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek_rincian;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek_rincian_sub;
use App\Models\setupsikd\Tmsikd_rekening_lak;
use App\Models\Setupsikd\Tmsikd_rekening_lra;
use App\Models\Setupsikd\Tmsikd_Rekening_neraca;


class PendapatanTargetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $route  = 'pendapatan.target.';
    protected $view   = 'target_pendapatan.';
    function ___construct()
    {
    }


    public function index()
    {
     return view($this->view . 'index', [
            'route'            => $this->route,
            'toolbar'          => ['c', 'd'],
            'title'            => 'Setting Target Pendpatann',
            'tmrekening_akuns' => Tmrekening_akun::select('id', 'kd_rek_akun', 'nm_rek_akun')->get(),
        ]);
    } 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function api(Request $request)
    {

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
        //
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
