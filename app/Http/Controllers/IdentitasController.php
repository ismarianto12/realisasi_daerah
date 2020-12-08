<?php

namespace App\Http\Controllers;

use App\Models\Setupsikd\Tmsikd_satker;
use App\Models\Tmpendapatan;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\User;
use App\Helpers\Properti_app;

class IdentitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $route      = 'aplikasi.';
    protected $view       = 'identitas.';
    protected $title      = 'Pendapatan SKPD';

    public function __construct()
    {
    }


    public function index()
    {

        return view($this->view . '.index', []);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    //get api data

    public function notifopd(Request $request)
    {

        $row     = [];
        $now     = Carbon::now()->format('Y-m-d');
        $satkers = User::with(['tmsikd_satker' => function ($p) {
            $p->groupBy('tmsikd_satkers.id');
        }])
            ->where('sikd_satker_id', '!=', 0)
            ->groupBy('sikd_satker_id')
            ->get();
        $satker_t = [];
        foreach ($satkers as $satker) {
            // dd($satker);

            $data   = Tmpendapatan::where('tanggal_lapor', $now)
                ->where('tmsikd_satker_id', $satker['id'])->first();
            if ($satker['sikd_satker_id'] != $data['tmsikd_satker_id']) {
                $r             =  [];
                $r['image']    = '<img src="' . asset('./file/photo_user/' . Properti_app::propuser('photo')) . '" alt="Tidak ada foto" class="avatar-img rounded-circle"
                onerror="this.src=\'' . asset('assets/template/img/no-image.png') . '\'">';
                $r['opd_kode'] = $satker['tmsikd_satker']['kode'];
                $r['opn_nm']   = $satker['tmsikd_satker']['nama'];
                $row[]         = $r;
            }
        }
        if ($request->total != '') {
            return response()->json(count($row));
        } else {
            return response()->json($row);
        }
    }
}
