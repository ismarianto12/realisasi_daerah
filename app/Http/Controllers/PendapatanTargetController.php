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
use App\Models\Setupsikd\Tmsikd_setup_tahun_anggaran;
use App\Models\TmpendapatantargetModel;
use App\Models\Trtargetrincian;
use Properti_app;

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
            'title'            => 'Setting Target Pendapatan',
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
        $ls    = Tmrekening_akun_kelompok_jenis_objek_rincian::select('*')
            ->join('tmrekening_akun_kelompok_jenis_objeks', function ($join) {
                $join->on('tmrekening_akun_kelompok_jenis_objek_rincians.tmrekening_akun_kelompok_jenis_objek_id', '=', 'tmrekening_akun_kelompok_jenis_objeks.id');
            })
            ->join('tmpendapatan_target', function ($join) {
                $join->on('tmpendapatan_target.tmrekening_akun_kelompok_jenis_objek_rincian_id', '=', 'tmrekening_akun_kelompok_jenis_objek_rincians.kd_rek_rincian_obj');
            });

        $levelid  = Properti_app::getlevel();
        $satkerid = Auth::user()->sikd_satker_id;
        if ($levelid == 3) {
            $ls = $ls->where('tmrekening_akun_kelompok_jenis_objek_rincians.tmsikd_satkers_id', '=', $satkerid);
        }
        $rekening_rincian_id = isset($request['tmrekening_akun_kelompok_jenis_objek_rincian_id']) ? $request['tmrekening_akun_kelompok_jenis_objek_rincian_id'] : 0;
        if ($rekening_rincian_id == 0) {
        } else {
            $frekening_rincian_id = $rekening_rincian_id;
            $ls = $ls->where('tmrekening_akun_kelompok_jenis_objek_rincian_id', $frekening_rincian_id);
        }
        $rls = $ls->get();
        // dd($rls);
        $exrincian = $rekening_rincian_id;
        return DataTables::of($rls)
            ->editColumn('id', function ($p) {
                return "<input type='checkbox' name='cbox[]' value='" . $p->id . "' />";
            })
            ->editColumn('jenis_pad', function ($p) use ($exrincian) {
                return '<b>[' . $p->kd_rek_obj . ']' . $p->nm_rek_obj . '</b>';
            })
            ->editColumn('djumlah', function ($p) {
                return "<b><a href='" . route($this->route . 'edit', $p->tmrekening_akun_kelompok_jenis_objek_rincian_id) . "' class='btn btn-success btn-xs'> " . number_format($p->jumlah, 0, 0, '.') . "</a></b>";
            })
            ->editColumn('djumlah_perubahan', function ($p) {
                return "<b>" . number_format($p->jumlah, 0, 0, '.') . "</b>";
            })
            ->editColumn('rincian', function ($p) {
                return '<b>' . $p->nm_rek_rincian_obj . '</b>';
            })
            ->addIndexColumn()
            ->rawColumns(['id', 'jenis_pad', 'rincian', 'djumlah', 'djumlah_perubahan', 'rincian'])
            ->toJson();
    }

    public function create(Request $request)
    {

        if ($request->rincian_obj_id == '' || $request->rincian_obj_id == 0) return abort('404', 'Parameter tidak berjalan dengan baik');

        $rincian_obj_id                       = $request->rincian_obj_id;
        $trekening                            = Tmrekening_akun_kelompok_jenis_objek_rincian::with(['Tmrekening_akun_kelompok_jenis_objek'])->wherekd_rek_rincian_obj($rincian_obj_id)->get();
        if ($trekening->count() == '' || $trekening == NULL) return abort('404', 'data tidak di temukan');
        //dd($request);

        $jumlah                               = '';
        $jumlah_perubahan                     = '';
        $tmrekening_akun_kelompok_jenis_objek_rincian_id = '';
        $dasar_hukum                          = '';
        $keterangan                           = '';
        $tgl_perubahan                        = '';
        $method_field                         = method_field('POST');
        $action                               = route($this->route . 'store');
        $tahuns                               = Tmsikd_setup_tahun_anggaran::get();

        $ctargetid                            = TmpendapatantargetModel::max('id');
        $targetid                             = ($ctargetid) ? $ctargetid : 1;
        // $gtargetid                       = TmpendapatantargetModel::firstOrCreate([
        //     'tahun' => date('Y')
        // ]);
        $method = 'add';
        return view(
            $this->view . 'target_form',
            compact(
                'action',
                'method',
                'targetid',
                'trekening',
                'jumlah',
                'jumlah_perubahan',
                'tmrekening_akun_kelompok_jenis_objek_rincian_id',
                'dasar_hukum',
                'keterangan',
                'tgl_perubahan',
                'tahuns',
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
            'tperubahan' => 'required',
            'tmrekening_akun_kelompok_jenis_objek_rincian_id' => 'required|unique:tmpendapatan_target,tmrekening_akun_kelompok_jenis_objek_rincian_id',
            'dasar_hukum'     => 'required',
            'keterangan'      => 'required',
            'tahun'           => 'required'
        ]);
        //dd($request);
        $jumlah        = str_replace(',', '', $request->jumlah);
        $jumlahperubahan = str_replace(',', '', $request->tperubahan);
        //    $rinciantr                               = new TrtargetrincianModel;    
        $r                                       = new TmpendapatantargetModel;
        $r->jumlah                               = $jumlah;
        $r->jumlah_perubahan                     = $jumlahperubahan;
        $r->tmrekening_akun_kelompok_jenis_objek_rincian_id = $request->tmrekening_akun_kelompok_jenis_objek_rincian_id;
        $r->dasar_hukum                          = $request->dasar_hukum;
        $r->keterangan                           = $request->keterangan;
        $r->tgl_perubahan                        = $request->tgl_perubahan;
        $r->tahun                                = date('Y');
        $r->save();

        $ctargetid                            = TmpendapatantargetModel::max('id');
        for ($i = 0; $i <= 11; $i++) {
            $f = $i + 1;

            $rinjumlah  = str_replace(',', '', $request->input('bulan_' . $i));
            $trinjumlah = str_replace(',', '', $request->input('tpbulan_' . $i));
            Trtargetrincian::create([
                'tmtarget_id' => $ctargetid,
                'bulan' => $f,
                'jumlah' => ($rinjumlah) ? $rinjumlah : 0,
                'jumlah_perubahan' => ($trinjumlah) ? $trinjumlah : 0
            ]);
        }
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
        $data = TmpendapatantargetModel::find($id);
        return view($this->view . 'target_show', [
            'action' => route($this->route . 'update', $id),
            'method_field' => method_field('PACTH'),
            'data' => $data,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data                                  = TmpendapatantargetModel::Where('tmrekening_akun_kelompok_jenis_objek_rincian_id', $id)->first();
        $tahuns                                = Tmsikd_setup_tahun_anggaran::get();
        $method_field                          = method_field('PATCH');
        $jumlah                                = number_format($data['jumlah'], 0, 0, ',');
        $jumlah_perubahan                      = $data['jumlah_perubahan'];
        $tmrekening_akun_kelompok_jenis_objek_rincian_id  = $data['tmrekening_akun_kelompok_jenis_objek_rincian_id'];
        $dasar_hukum     =  $data['dasar_hukum'];
        $keterangan      =  $data['keterangan'];
        $tgl_perubahan   =  $data['tgl_perubahan'];
        if ($data['id'] == '') {
            $action      = '';
        } else {
            $action      =  route($this->route . 'update', $data['id']);
        }
        $rincian_obj_id  =  $data['tmrekening_akun_kelompok_jenis_objek_rincian_id'];
        //dd($rincian_obj_id);
        $trekening       =  Tmrekening_akun_kelompok_jenis_objek_rincian::with(['Tmrekening_akun_kelompok_jenis_objek'])->wherekd_rek_rincian_obj($rincian_obj_id)->get();
        $method          = 'edit';
        $targetid        =  $data['id'];

        return view($this->view . 'target_form', compact(
            'action',
            'targetid',
            'jumlah',
            'jumlah_perubahan',
            'tmrekening_akun_kelompok_jenis_objek_rincian_id',
            'dasar_hukum',
            'keterangan',
            'tgl_perubahan',
            'method',
            'method_field',
            'tahuns',
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
            'tperubahan' => 'required',
            'dasar_hukum'     => 'required',
            'keterangan'      => 'required',
            'tahun'           => 'required'
        ]);

        $jumlah          = str_replace(',', '', $request->jumlah);
        $jumlahperubahan = str_replace(',', '', $request->tperubahan);

        // for ($i = 0; $i <= 11; $i++) {
        //     $f = $i + 1;
        //     // dd($id);
        //     dd($request->input('tpbulan_'.$i));
        //     die;
        // }

        $r = TmpendapatantargetModel::find($id);
        $r->jumlah                               = $jumlah;
        $r->jumlah_perubahan                     = $jumlahperubahan;
        $r->tmrekening_akun_kelompok_jenis_objek_rincian_id = $request->tmrekening_akun_kelompok_jenis_objek_rincian_id;
        $r->dasar_hukum                          = $request->dasar_hukum;
        $r->keterangan                           = $request->keterangan;
        $r->tgl_perubahan                        = $request->tgl_perubahan;
        $r->tahun                                = $request->tahun;
        $r->save();

        for ($i = 0; $i <= 11; $i++) {
            $f = $i + 1;
            $rinjumlah  = str_replace(',', '', $request->input('bulan_' . $i));
            $trinjumlah = str_replace(',', '', $request->input('tpbulan_' . $i));
            Trtargetrincian::where(
                [
                    'tmtarget_id' => $id,
                    'bulan' => $f
                ]
            )
                ->update([
                    'bulan' => $f,
                    'jumlah' => ($rinjumlah) ? $rinjumlah : 0,
                    'jumlah_perubahan' => ($trinjumlah) ? $trinjumlah : 0
                ]);
        }
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
            if ($data->count() == 1) {
                $rinci = Trtargetrincian::where('tmtarget_id', $request->id);
                $rinci->delete();
            } else {
                $implode = implode(',', $request->id);
                $rinci = Trtargetrincian::whereIn('tmtarget_id', $implode);
                $rinci->delete();
            }
            $data->delete();
            return response()->json([
                'msg' => 'data berhasil di hapus'
            ]);
        } else {
            return response()->json([
                'msg' => 'data gagal di hapus'
            ]);
        }
    }
}
