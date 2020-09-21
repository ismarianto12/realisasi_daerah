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
        $ls = TmpendapatantargetModel::with(['Tmrekening_akun_kelompok_jenis_objek_rincian'])->get();
        if ($request->tmrekening_akun_kelompok_jenis_objek_id != 0) {
            $rincian_rek_id =  $request->tmrekening_akun_kelompok_jenis_objek_id;
            $ls = $ls->where('rekneing_rincian_akun_jenis_objek_id', $rincian_rek_id);
        }
        return DataTables::of($ls)
            ->editColumn('id', function ($p) {
                return "<input type='checkbox' name='cbox[]' value='" . $p->id . "' />";
            })
            ->editColumn('jenis_pad', function ($p) {
                $id_rincian = $p->Tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek_id;
                $pad_jenis  = Tmrekening_akun_kelompok_jenis_objek::find($id_rincian);
                return '<b>' . $pad_jenis['nm_rek_obj'] . '</b>';
            })
            ->editColumn('djumlah', function ($p) {
                return "<b>" . number_format($p->jumlah, 0, 0, '.') . "</b>";
            })
            ->editColumn('djumlah_perubahan', function ($p) {
                return "<b>" . number_format($p->jumlah, 0, 0, '.') . "</b>";
            })
            ->editColumn('rincian', function ($p) {
                return '<b>' . $p->Tmrekening_akun_kelompok_jenis_objek_rincian->nm_rek_rincian_obj . '</b>';
            })
            ->addIndexColumn()
            ->rawColumns(['id', 'jenis_pad', 'rincian', 'djumlah', 'djumlah_perubahan'])
            ->toJson();
    }

    public function create(Request $request)
    {

        if ($request->rincian_obj_id == '' || $request->rincian_obj_id == 0) return abort('404', 'Parameter tidak berjalan dengan baik');

        $rincian_obj_id                       = $request->rincian_obj_id;
        $trekening                            = Tmrekening_akun_kelompok_jenis_objek_rincian::with(['Tmrekening_akun_kelompok_jenis_objek'])->wherekd_rek_rincian_obj($rincian_obj_id)->get();
        if ($trekening->count() == '' || $trekening == NULL) return abort('404', 'data tidak di temukan');

        $jumlah                               = '';
        $jumlah_perubahan                     = '';
        $rekneing_rincian_akun_jenis_objek_id = '';
        $dasar_hukum                          = '';
        $keterangan                           = '';
        $tgl_perubahan                        = '';
        $method_field                         = method_field('POST');
        $action                               = route($this->route . 'store');

        return view(
            $this->view . 'target_form',
            compact(
                'trekening',
                'jumlah',
                'jumlah_perubahan',
                'rekneing_rincian_akun_jenis_objek_id',
                'dasar_hukum',
                'keterangan',
                'tgl_perubahan',
                'action',
                'method_field'
            )
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
        $request->validate([
            'jumlah' => 'required',
            'jumlah_perubahan' => 'required',
            'rekneing_rincian_akun_jenis_objek_id' => 'required|unique:tmpendapatan_target,rekneing_rincian_akun_jenis_objek_id',
            'dasar_hukum' => 'required',
            'keterangan' => 'required',
        ]);
        //dd($request);
        $r                                       = new TmpendapatantargetModel;
        $r->jumlah                               = $request->jumlah;
        $r->jumlah_perubahan                     = $request->jumlah_perubahan;
        $r->rekneing_rincian_akun_jenis_objek_id = $request->rekneing_rincian_akun_jenis_objek_id;
        $r->dasar_hukum                          = $request->dasar_hukum;
        $r->keterangan                           = $request->keterangan;
        $r->tgl_perubahan                        = $request->tgl_perubahan;
        $r->tahun                                = date('Y');
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

        $data                                  = TmpendapatantargetModel::find($id);

        $method_field                          = method_field('update');
        $jumlah                                = $data->jumlah;
        $jumlah_perubahan                      = $data->jumlah_perubahan;
        $rekneing_rincian_akun_jenis_objek_id  = $data->rekneing_rincian_akun_jenis_objek_id;
        $dasar_hukum     =  $data->dasar_hukum;
        $keterangan      =  $data->keterangan;
        $tgl_perubahan   =  $data->tgl_perubahan;
        $action          =  route($this->route, '.update', $data->id);
        $rincian_obj_id  =  $data['tmrekening_akun_kelompok_jenis_objek_id'];
        $trekening       =  Tmrekening_akun_kelompok_jenis_objek_rincian::with(['tmrekening_akun_kelompok_jenis_objek'])->wheretmrekening_akun_kelompok_jenis_objek_id($rincian_obj_id)->get();

        return view($this->view . 'target_form', compact(
            'jumlah',
            'jumlah_perubahan',
            'rekneing_rincian_akun_jenis_objek_id',
            'dasar_hukum',
            'keterangan',
            'tgl_perubahan',
            'action',
            'method_field',
            'trekening'
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
        $request->validate([
            'jumlah' => 'required',
            'jumlah_perubahan' => 'required',
            'rekneing_rincian_akun_jenis_objek_id' => 'required',
            'dasar_hukum' => 'required',
            'keterangan' => 'required',
        ]);
        $r = new TmpendapatantargetModel;
        $r->jumlah = $request->jumlah;
        $r->jumlah_perubahan = $request->jumlah_perubahan;
        $r->rekneing_rincian_akun_jenis_objek_id = $request->rekneing_rincian_akun_jenis_objek_id;
        $r->dasar_hukum = $request->dasar_hukum;
        $r->keterangan = $request->keterangan;
        $r->tgl_perubahan = $request->tgl_perubahan;
        $r->tahun    = date('Y');
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
        $data = TmpendapatantargetModel::whereIn('id', $request->id);
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
