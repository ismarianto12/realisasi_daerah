<?php

namespace App\Http\Controllers;

use App\Models\Tmpenerimaan;
use Illuminate\Http\Request;
use DataTables;
use Validator;
use App\Helpers\Properti_app;
use App\Models\Sikd_rek_obj;
use App\Models\Sikd_rek_rincian_obj;
use App\Models\Sikd_satker;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Session;

use App\Exports\RetribusiExport;
use Maatwebsite\Excel\Facades\Excel;

class TmpenerimaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        //$this->middleware();
        $this->view  = 'penerimaan';
        $this->route = 'penerimaan';
        $this->tahun =  Properti_app::getTahun();
    }

    public function index()
    {
        $level = Properti_app::getlevel();
        if ($level == 3) {
            $id        = Auth::user()->sikd_satker_id;
            $getsatker = Sikd_satker::find($id);
        } else {
            $getsatker =  '';
        }
        //dd($getsatker);
        $rsatker          = $getsatker;
        $tahun            = Carbon::now()->format('Y-m-d');
        $rekening_object  = Sikd_rek_obj::whereIn('id', [41201, 41202, 41203])->get();
        //dd($rekening_object);  

        $rekening_rincian = Sikd_rek_rincian_obj::get();
        $satker           = Sikd_satker::get();
        $load_script      = Properti_app::load_js([
            asset('assets/template/js/plugin/datatables/datatables.min.js'),
        ]);
        return view($this->view . '.penerimaan_list', compact('load_script', 'tahun', 'satker', 'rekening_object', 'rekening_rincian', 'rsatker'));
    }

    function api(Request $request)
    {

        if ($request->tahun != '' && $request->sikd_satker_id != '' && $request->rekening_obj_id != '' && $request->sikd_rek_obj_id != '') {
            $where =  [
                'tmpenerimaan.tahun'          => ($request->tahun) ? $request->tahun : NULL,
                'tmpenerimaan.sikd_satker_id' => ($request->satker_id) ? $request->satker_id : NULL,
                'sikd_rek_obj.id'             => ($request->rekening_obj_id) ? $request->rekening_obj_id : NULL,
                'sikd_rek_rincian_obj.id'     => ($request->sikd_rek_obj_id) ? $request->sikd_rek_obj_id : NULL,
            ];
        } else {
            $where = [];
        }
        $dari           = ($request->dari) ? $request->dari : '';
        $sampai         = ($request->sampai) ? $request->sampai : '';
        $datapenerimaan = Tmpenerimaan::list($where, $dari, $sampai)->get();

        return DataTables::of($datapenerimaan)
            ->editColumn('action', function ($p) {
                return '<a href="' . Url($this->route . '/' . $p->pen_id . '/edit') . '" class="edit btn btn-warning btn-xs"><i class="fa fa-edit"></i>Edit </a>
                        <button data="' .  $p->pen_id  . '" class="delete btn btn-danger btn-xs"><i class="fa fa-list"></i>Delete</button>';
            })
            ->editColumn('jenis_rek_ob', function ($p) {
                return '<b>' . $p->nm_rek_obj . '</b>';
            }, TRUE)
            ->addIndexColumn()
            ->rawColumns(['action', 'jenis_rek_ob'])
            ->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rekening_object         = Sikd_rek_obj::whereIn('id', [41201, 41202, 41203])->get();
        $rekening_rincian        = Sikd_rek_rincian_obj::get();
        $action                  = route($this->route . '.store');
        $satker                  = Sikd_satker::get();
        $method_field            = method_field('store');
        $tahun_id                = '';
        $sikd_satker_id          = '';
        $sikd_sub_satker_id      = '';
        $dpa_dpa_no_dpa          = '';
        $sikd_rek_rincian_obj_id = '';
        $kd_rekening             = '';
        $cara_pembayaran         = '';
        $tgl_trx                 = '';
        $tgl_str                 = '';
        $jumlah_trm              = '';
        $jumlah_str              = '';
        $jumlah                  = '';
        $tanggal                 = '';
        $user_id                 = '';
        return view($this->view . '.penerimaan_form', compact(
            'action',
            'rekening_object',
            'method_field',
            'tahun_id',
            'sikd_satker_id',
            'sikd_sub_satker_id',
            'dpa_dpa_no_dpa',
            'sikd_rek_rincian_obj_id',
            'kd_rekening',
            'cara_pembayaran',
            'tgl_trx',
            'tgl_str',
            'jumlah_trm',
            'jumlah_str',
            'satker',
            'jumlah',
            'tanggal',
            'user_id'
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
        $validate = [
            'sikd_satker_id' => 'required',
            'sikd_rek_rincian_obj_id' => 'required',
            'cara_pembayaran' => 'required',
            'jumlah' => 'required',
        ];
        $valid = Validator::make($request->all(), $validate);
        if ($valid->fails()) {
            return response()->json([
                'status' => 1,
                'errors' => $valid->errors()->all()
            ]);
        }
        $data = new Tmpenerimaan();
        $data->tahun = $request->session()->get('year');
        $data->sikd_satker_id = $request->sikd_satker_id;
        $data->sikd_rek_rincian_obj_id = $request->sikd_rek_rincian_obj_id;
        $data->kd_rekening = $request->sikd_rek_rincian_obj_id;
        $data->cara_pembayaran = $request->cara_pembayaran;
        $data->tgl_trx =  Carbon::now()->format('Y-m-d');
        $data->tgl_str =  Carbon::now()->format('Y-m-d');
        $data->jumlah_trm = $request->jumlah;
        $data->jumlah_str = $request->jumlah;
        $data->jumlah = $request->jumlah;
        $data->tanggal =  Carbon::now()->format('Y-m-d');
        $data->user_id = Auth::user()->id;

        $data->save();
        return response()->json([
            'status' => 1,
            'success' => 'data berhasil di simpan.'
        ]);
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
        $data                    = Tmpenerimaan::find($id);
        $action                  = route($this->route . '.update', $data->id);
        $method_field            = method_field('put');
        $satker                  = Sikd_satker::get();
        $rekening_object         = Sikd_rek_obj::whereIn('id', [41201, 41202, 41203])->get();
        $rekening_rincian        = Sikd_rek_rincian_obj::get();

        $tahun_id = $data->tahun;
        $sikd_satker_id = $data->sikd_satker_id;
        $sikd_sub_satker_id = $data->sikd_sub_satker_id;
        $dpa_dpa_no_dpa = $data->dpa_dpa_no_dpa;
        $sikd_rek_rincian_obj_id = $data->sikd_rek_rincian_obj_id;
        $kd_rekening = $data->kd_rekening;
        $cara_pembayaran = $data->cara_pembayaran;
        $tgl_trx = $data->tgl_trx;
        $tgl_str = $data->tgl_str;
        $jumlah_trm = $data->jumlah_trm;
        $jumlah_str = $data->jumlah_str;
        $jumlah = $data->jumlah;
        $tanggal = $data->tanggal;
        $user_id = $data->user_id;

        return view($this->view . '.penerimaan_form', compact(
            'action',
            'method_field',
            'satker',
            'rekening_object',
            'rekening_rincian',
            'tahun_id',
            'sikd_satker_id',
            'sikd_sub_satker_id',
            'dpa_dpa_no_dpa',
            'sikd_rek_rincian_obj_id',
            'kd_rekening',
            'cara_pembayaran',
            'tgl_trx',
            'tgl_str',
            'jumlah_trm',
            'jumlah_str',
            'jumlah',
            'tanggal',
            'user_id'
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
        $validate = [
            'sikd_satker_id' => 'required',
            'sikd_sub_satker_id' => 'required',
            'dpa_dpa_no_dpa' => 'required',
            'sikd_rek_rincian_obj_id' => 'required',
            'kd_rekening' => 'required',
            'cara_pembayaran' => 'required',
            'tgl_trx' => 'required',
            'tgl_str' => 'required',
            'jumlah_trm' => 'required',
            'jumlah_str' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required',
        ];
        $valid = Validator::make($request->all(), $validate);
        if ($valid->fails()) {
            return response()->json([
                'status' => 1,
                'msg' => $valid->errors()->fails()
            ]);
        }
        $data = new Tmpenerimaan();
        $data->tahun = $this->tahun;
        $data->sikd_satker_id = $request->sikd_satker_id;
        $data->sikd_rek_rincian_obj_id = $request->sikd_rek_rincian_obj_id;
        $data->kd_rekening = $request->kd_rekening;
        $data->cara_pembayaran = $request->cara_pembayaran;
        $data->tgl_trx = Carbon::now()->format('Y-m-d');
        $data->tgl_str = Carbon::now()->format('Y-m-d');
        $data->jumlah_trm = $request->jumlah;
        $data->jumlah_str = $request->jumlah;
        $data->jumlah = $request->jumlah;
        $data->tanggal = Carbon::now()->format('Y-m-d');
        $data->user_id = Auth::user()->user_id;
        $data->find($request->id);
        $data->save();

        return response()->json([
            'status' => 1,
            'msg' => 'data berhasil di edit.'
        ]);
    }

    public function rekobj_rincian_json(Request $request)
    {
        $rekening_obj_id = $request->rekening_obj_id;
        if ($rekening_obj_id) {
            $data = Sikd_rek_rincian_obj::where('sikd_rek_obj_id', $rekening_obj_id)->get();

            $row = [];
            foreach ($data as $list) {
                // $row[]['sikd_rek_obj_id']    = $list['sikd_rek_obj_id'];
                // $row[]['nm_rek_rincian_obj'] = $list['nm_rek_rincian_obj'];
                $row[] = '<option value="' . $list['id'] . '">' . $list['id'] . '-' . $list['nm_rek_rincian_obj'] . '</option>';
            }
            return response()->json([
                'data' => $row,
            ]);
        } else {
            return response()->json([
                'data' => [],
            ]);
        }
    }

    public function export()
    {
        // header("Pragma: public");
        // header("Expires: 0");
        // header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        // header("Content-Type: application/force-download");
        // header("Content-Type: application/octet-stream");
        // header("Content-Type: application/download");
        // header("Content-Disposition: attachment;filename=pendapatan.xls");
        // header("Content-Transfer-Encoding: binary ");

        // $where       = [];
        // $datapenerimaan = Tmpenerimaan::list($where)->get();
        // return view('penerimaan.excel_penerimaan', [
        //             'datapenerimaan' => $datapenerimaan
        // ]);

        return Excel::download(new RetribusiExport, 'invoices.xlsx');

        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = Tmpenerimaan::findOrFail($request->id);
        $data->delete();
        return response()->json([
            'status' => 1,
            'msg' => 'data berhasil di hapus'
        ]);
    }
}
