<?php

namespace App\Http\Controllers\Rekening;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use DataTables;
  
use App\Models\Setupsikd\Tmrekening_akun;
use App\Models\Setupsikd\Tmrekening_akun_kelompok;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis;

class KodejenisController extends Controller
{

    protected $permission = 'rekening.kodejenis';
    protected $route      = 'rekening.kodejenis.';
    protected $view       = 'kodejenis.';
    protected $title      = "Rekening Jenis Mata Anggaran Kegiatan";

    public function __construct()
    { 
       // $this->middleware('level:|1');
    }

    public function index()
    {
        $title   = $this->title;
        $route   = $this->route;
        $toolbar = ['c', 'd'];

        $tmrekening_akuns = Tmrekening_akun::select('id', 'kd_rek_akun', 'nm_rek_akun')->get();

        return view($this->view . 'index', compact('title', 'route', 'toolbar', 'tmrekening_akuns'));
    }

    public function api(Request $request)
    {
        $data = Tmrekening_akun_kelompok_jenis::select('tmrekening_akun_kelompok_jenis.*');
        if ($request->tmrekening_akun_kelompok_id != 0) {
            $data->wheretmrekening_akun_kelompok_id($request->tmrekening_akun_kelompok_id);
        } elseif ($request->tmrekening_akun_id != 0) {
            $tmrekening_akun_id = $request->tmrekening_akun_id;
            $data->join('tmrekening_akun_kelompoks', function ($join) use ($tmrekening_akun_id) {
                $join->on('tmrekening_akun_kelompok_jenis.tmrekening_akun_kelompok_id', '=', 'tmrekening_akun_kelompoks.id')
                    ->where('tmrekening_akun_kelompoks.tmrekening_akun_id', $tmrekening_akun_id);
            });
        }
        $data->get();
        return DataTables::of($data)
            ->editColumn('id', function ($p) {
                return "<input type='checkbox' name='cbox[]' value='" . $p->id . "' />";
            })
            ->editColumn('nm_rek_jenis', function ($p) {
                return "<a href='" . route($this->route . 'show', $p->id) . "' target='_self'>" . $p->nm_rek_jenis . "</a>";
            })
            ->rawColumns(['id', 'nm_rek_jenis'])
            ->toJson();
    }

    public function kodekelompokByKodeakun($tmrekening_akun_id)
    {
        return Tmrekening_akun_kelompok::select('id', 'kd_rek_kelompok', 'nm_rek_kelompok')->wheretmrekening_akun_id($tmrekening_akun_id)->get();
    }

    public function create(Request $request)
    {
        $title      = 'Tambah | ' . $this->title;
        $route      = $this->route;
        $toolbar    = ['r', 'save'];

        $tmrekening_akun_id             = $request->tmrekening_akun_id;
        $tmrekening_akun_kelompok_id    = $request->tmrekening_akun_kelompok_id;
        if ($tmrekening_akun_id == null || $tmrekening_akun_kelompok_id == null) return abort(403, "Terdapat data yang tidak terparsing dengan benar.");

        $tmrekening_akun = Tmrekening_akun::select('id', 'kd_rek_akun', 'nm_rek_akun')->whereid($tmrekening_akun_id)->firstOrFail();
        $tmrekening_akun_kelompok = Tmrekening_akun_kelompok::select('id', 'kd_rek_kelompok', 'nm_rek_kelompok')->whereid($tmrekening_akun_kelompok_id)->firstOrFail();

        $klasifikasi        = new Tmrekening_akun_kelompok_jenis();
        $klasifikasi_reks   = $klasifikasi->klasifikasi_reks();

        return view($this->view . 'form_add', compact('title', 'route', 'toolbar', 'tmrekening_akun_kelompok_id', 'klasifikasi_reks', 'tmrekening_akun', 'tmrekening_akun_kelompok'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tmrekening_akun_kelompok_id' => 'required',
        ]);

        $tmrekening_akun_kelompok_id    = $request->tmrekening_akun_kelompok_id;
        $kd_rek_jenis                   = $request->kd_rek_jenis;
        $nm_rek_jenis                   = $request->nm_rek_jenis;
        $klasifikasi_rek                = $request->klasifikasi_rek;
        $kd_rek_akrual                  = $request->kd_rek_akrual;
        $kd_rek_aset                    = $request->kd_rek_aset;
        $kd_rek_utang                   = $request->kd_rek_utang;
        $dasar_hukum                    = $request->dasar_hukum;

        for ($i = 0; $i < count($kd_rek_jenis); $i++) {
            if ($kd_rek_jenis[$i] != "" && $nm_rek_jenis[$i] != "") {
                if (Tmrekening_akun_kelompok_jenis::wherekd_rek_jenis($kd_rek_jenis[$i])->count() > 0) {
                    return response()->json([
                        'message' => 'kode sudah pernah tersimpan : ' . $kd_rek_jenis[$i]
                    ], 422);
                } else {
                    $tmrekening_akun_kelompok_jenis                                 = new Tmrekening_akun_kelompok_jenis();
                    $tmrekening_akun_kelompok_jenis->tmrekening_akun_kelompok_id    = $tmrekening_akun_kelompok_id;
                    $tmrekening_akun_kelompok_jenis->id                             = $kd_rek_jenis[$i];
                    $tmrekening_akun_kelompok_jenis->kd_rek_jenis                   = $kd_rek_jenis[$i];
                    $tmrekening_akun_kelompok_jenis->nm_rek_jenis                   = $nm_rek_jenis[$i];
                    $tmrekening_akun_kelompok_jenis->klasifikasi_rek                = $klasifikasi_rek[$i];
                    $tmrekening_akun_kelompok_jenis->kd_rek_akrual                  = $kd_rek_akrual[$i];
                    $tmrekening_akun_kelompok_jenis->kd_rek_aset                    = $kd_rek_aset[$i];
                    $tmrekening_akun_kelompok_jenis->kd_rek_utang                   = $kd_rek_utang[$i];
                    $tmrekening_akun_kelompok_jenis->dasar_hukum                    = $dasar_hukum[$i];
                    $tmrekening_akun_kelompok_jenis['created_by']                   = Auth::user()->username;
                    $tmrekening_akun_kelompok_jenis->save();
                }
            }
        }

        return response()->json([
            'message' => 'Data rekening kode jenis berhasil tersimpan.'
        ]);
    }

    public function show($id)
    {
        $title      = 'Menampilkan | ' . $this->title;
        $route      = $this->route;
        $toolbar    = ['r', 'u', 'd'];

        $tmrekening_akun_kelompok_jenis = Tmrekening_akun_kelompok_jenis::with('tmrekening_akun_kelompok.tmrekening_akun')->whereid($id)->firstOrFail();

        return view($this->view . 'show', compact('title', 'route', 'toolbar', 'id', 'tmrekening_akun_kelompok_jenis'));
    }

    public function edit($id)
    {
        $title = 'Edit | ' . $this->title;
        $route = $this->route;
        $toolbar = ['r', 'save'];

        $tmrekening_akun_kelompok_jenis = Tmrekening_akun_kelompok_jenis::with('tmrekening_akun_kelompok.tmrekening_akun')->whereid($id)->firstOrFail();

        $n_rekening_akun = '[ ' . $tmrekening_akun_kelompok_jenis->tmrekening_akun_kelompok->tmrekening_akun->kd_rek_akun . ' ] ' . $tmrekening_akun_kelompok_jenis->tmrekening_akun_kelompok->tmrekening_akun->nm_rek_akun;
        $n_rekening_akun_kelompok = '[ ' . $tmrekening_akun_kelompok_jenis->tmrekening_akun_kelompok->kd_rek_kelompok . ' ] ' . $tmrekening_akun_kelompok_jenis->tmrekening_akun_kelompok->nm_rek_kelompok;

        $klasifikasi        = new Tmrekening_akun_kelompok_jenis();
        $klasifikasi_reks   = $klasifikasi->klasifikasi_reks();

        return view($this->view . 'form_edit', compact('title', 'route', 'toolbar', 'id', 'tmrekening_akun_kelompok_jenis', 'n_rekening_akun', 'n_rekening_akun_kelompok', 'klasifikasi_reks'));
    }

    public function update(Request $request, $id)
    {
        $kd_rek_jenis = $request->kd_rek_jenis;
        $request->validate([
            'kd_rek_jenis' => 'required|max:4|unique:tmrekening_akun_kelompok_jenis,kd_rek_jenis,' . $id,
            'nm_rek_jenis' => 'required|max:100'
        ]);

        $input = $request->all();
        $tmrekening_akun_kelompok_jenis = Tmrekening_akun_kelompok_jenis::findOrFail($id);
        $tmrekening_akun_kelompok_jenis->id            = $kd_rek_jenis;
        $tmrekening_akun_kelompok_jenis['updated_by']  = Auth::user()->username;
        $tmrekening_akun_kelompok_jenis->update($input);

        return response()->json([
            'message' => 'Data rekening kode jenis berhasil diperbaharui.'
        ]);
    }

    public function destroy(Request $request, $id)
    {
        if (is_array($request->id))
            Tmrekening_akun_kelompok_jenis::whereIn('id', $request->id)->delete();
        else
            Tmrekening_akun_kelompok_jenis::whereid($request->id)->delete();

        return ['message' => "Data rekening kode jenis berhasil dihapus."];
    }
}
