<?php


// author : ismarianto 

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
use App\Models\TmpendapatantargetModel;

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
            'title'            => 'Setting Target Pendpatan',
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
        $l = TmpendapatantargetModel::with(['Tmrekening_akun_kelompok_jenis_objek_rincian'])->get();
        return DataTables::of($l)
            ->editColumn('id', function ($p) {
                return "<input type='checkbox' name='cbox[]' value='" . $p->id . "' />";
            })
            ->toJson();
    }

    public function create()
    {
        $method = method_field('PUT');
        return view(
            $this->view . 'target_form',
            [
                'jumlah' => '',
                'jumlah_perubahan' => '',
                'rekneing_rincian_akun_jenis_objek_id' => '',
                'dasar_hukum' => '',
                'keterangan' => '',
                'tgl_perubahan' => '',
                'action' => $this->route . 'store',
                'method_field' => $method
            ],
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validation([
            'jumlah' => 'required',
            'jumlah_perubahan' => 'required',
            'rekneing_rincian_akun_jenis_objek_id' => 'required|unique:tmpendapatantarget,rekneing_rincian_akun_jenis_objek_id',
            'dasar_hukum' => 'required',
            'keterangan' => 'required',
            'tgl_perubahan' => 'required'
        ]);
        $r                                       = new TmpendapatantargetModel;
        $r->jumlah                               = $request->jumlah;
        $r->jumlah_perubahan                     = $request->jumlah_perubahan;
        $r->rekneing_rincian_akun_jenis_objek_id = $request->rekneing_rincian_akun_jenis_objek_id;
        $r->dasar_hukum                          = $request->dasar_hukum;
        $r->keterangan                           = $request->keterangan;
        $r->tgl_perubahan                        = $request->tgl_perubahan;
        $r->save();

        return response()->json([
            'msg' => 'data berhasil di simpan'
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
        $method = method_field('update');
        $data   = TmpendapatantargetModel::find($id);
        return view($this->view . 'target_form', [
            'jumlah' => $data->jumlah,
            'jumlah_perubahan' => $data->jumlah_perubahan,
            'rekneing_rincian_akun_jenis_objek_id' => $data->rekneing_rincian_akun_jenis_objek_id,
            'dasar_hukum' => $data->dasar_hukum,
            'keterangan' => $data->keterangan,
            'tgl_perubahan' => $data->tgl_perubahan,
            'action' => route($this->route, '.update', $data->id),
            'method_field' => $method,
        ]);
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
        $request->validation([
            'jumlah' => 'required',
            'jumlah_perubahan' => 'required',
            'rekneing_rincian_akun_jenis_objek_id' => 'required',
            'dasar_hukum' => 'required',
            'keterangan' => 'required',
            'tgl_perubahan' => 'required'
        ]);
        $r = new TmpendapatantargetModel;
        $r->jumlah = $request->jumlah;
        $r->jumlah_perubahan = $request->jumlah_perubahan;
        $r->rekneing_rincian_akun_jenis_objek_id = $request->rekneing_rincian_akun_jenis_objek_id;
        $r->dasar_hukum = $request->dasar_hukum;
        $r->keterangan = $request->keterangan;
        $r->tgl_perubahan = $request->tgl_perubahan;
        $r->find($id)->save();

        return response()->json([
            'msg' => 'data berhasil di update'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $data = TmpendapatantargetModel::find($request->id);
        if ($data != '') {
            $data->delete();
            return response()->json([
                'msg' => 'data berhasil di update'
            ]);
        } else {
            return response()->json([
                'msg' => 'data gagal di hapus'
            ]);
        }
    }
}
