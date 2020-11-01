<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use DataTables;

use App\Models\Setupsikd\Tmrekening_akun;
use App\Helpers\Properti_app;
use App\Models\Trtargetrincian;


class TrtargetrincianController extends Controller
{


    public $route  = 'pendapatan.target.';
    public $view   = 'trtargetrincian.';

    function __construct()
    {
        // $this->middleware('level:|1');
    }

    public function index()
    {
        $load_script = Properti_app::load_js(
            [
                asset('assets/template/js/plugin/datatables/datatables.min.js'),
            ]
        );
        return view($this->view . '.index', compact('load_script'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function form($id)
    {
        ///gett table pendpatan target id terlenih dahulu ;
        return view(
            $this->view . 'form_add',
            [
                'data' => [],
                'targetid' => $id
            ]
        );
    }

    public function form_edit($id)
    {
        //dd($rincian_data);
        // for ($i = 0; $i < 11; $i++) {
        //     print($i);
        // } 
        $rdata  = Trtargetrincian::where([
            'tmtarget_id' => $id,
        ])->OrderBy('id', 'asc')->get();
        for ($idx = 0; $idx <= 11; $idx++) {
            $k = $idx + 1;
            $dataset[$idx]['jumlah']['val']           =  ($rdata[$idx]['jumlah']) ? $rdata[$idx]['jumlah'] : 0;
            $dataset[$idx]['jumlah_perubahan']['val'] =  ($rdata[$idx]['jumlah_perubahan']) ? $rdata[$idx]['jumlah_perubahan'] : 0;
        }

        $listdata = isset($dataset) ? $dataset : 0;
        if ($listdata == 0) return abort(404, 'maaf data tidak ditemukan');
        return view(
            $this->view . 'form_edit',
            [
                'rincian_data' => $listdata,
                'targetid' => $id
            ]
        );
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
