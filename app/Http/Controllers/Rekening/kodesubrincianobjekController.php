<?php

namespace App\Http\Controllers\Rekening;

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
use App\Helpers\Properti_app;

class kodesubrincianobjekController extends Controller
{
    protected $permission = 'rekening.kodesubrincianobjek';
    protected $route      = 'rekening.kodesubrincianobjek.';
    protected $view       = 'kodesubrincianobjek.';
    protected $title      = "Rekening Sub Rincian Objek Mata Anggaran Kegiatan";

    public function __construct()
    {
        // $this->middleware('level:|1');
    }

    public function index()
    {
        $title      = $this->title;
        $route      = $this->route;
        $toolbar    = ['c', 'd'];

        $tmrekening_akuns = Tmrekening_akun::select('id', 'kd_rek_akun', 'nm_rek_akun')->get();
        return view($this->view . 'index', compact('title', 'route', 'toolbar', 'tmrekening_akuns'));
    }

    public function api(Request $request)
    {
        $data = Tmrekening_akun_kelompok_jenis_objek_rincian_sub::select('tmrekening_akun_kelompok_jenis_objek_rincian_subs.*');

        $tmrekening_akun_id = $request->tmrekening_akun_id;
        $tmrekening_akun_kelompok_id = $request->tmrekening_akun_kelompok_id;
        $tmrekening_akun_kelompok_jenis_id = $request->tmrekening_akun_kelompok_jenis_id;
        $tmrekening_akun_kelompok_jenis_objek_id = $request->tmrekening_akun_kelompok_jenis_objek_id;
        $tmrekening_akun_kelompok_jenis_objek_rincian_id = $request->tmrekening_akun_kelompok_jenis_objek_rincian_id;

        if ($tmrekening_akun_kelompok_jenis_objek_rincian_id != 0) {
            $data->wheretmrekening_akun_kelompok_jenis_objek_rincian_id($tmrekening_akun_kelompok_jenis_objek_rincian_id);
        } elseif ($tmrekening_akun_kelompok_jenis_objek_id != 0) {
            $data->where('tmrekening_akun_kelompok_jenis_objek_rincian_id', 'like', $tmrekening_akun_kelompok_jenis_objek_id . '%');
        } elseif ($tmrekening_akun_kelompok_jenis_id != 0) {
            $data->where('tmrekening_akun_kelompok_jenis_objek_rincian_id', 'like', $tmrekening_akun_kelompok_jenis_id . '%');
        } elseif ($tmrekening_akun_kelompok_id != 0) {
            $data->where('tmrekening_akun_kelompok_jenis_objek_rincian_id', 'like', $tmrekening_akun_kelompok_id . '%');
        } elseif ($tmrekening_akun_id != 0) {
            $data->where('tmrekening_akun_kelompok_jenis_objek_rincian_id', 'like', $tmrekening_akun_id . '%');
        }

        $data->get();
        return DataTables::of($data)
            ->editColumn('id', function ($p) {
                return "<input type='checkbox' name='cbox[]' value='" . $p->id . "' />";
            })
            ->editColumn('nm_rek_rincian_objek_sub', function ($p) {
                return "<a href='" . route($this->route . 'show', $p->id) . "' target='_self'>" . $p->nm_rek_rincian_objek_sub . "</a>";
            })
            ->rawColumns(['id', 'nm_rek_rincian_objek_sub'])
            ->toJson();
    }

    public function kodeobjekrincianByKodeobjek($tmrekening_akun_kelompok_jenis_objek_id)
    {
        $levelid = Properti_app::getlevel();
        $user_id = Auth::user()->id;
        if ($levelid == 3) {
            $where = [
                'tmrekening_akun_kelompok_jenis_objek_id' => $tmrekening_akun_kelompok_jenis_objek_id,
                'tmsikd_satkers_id' =>  $user_id
            ];
            return Tmrekening_akun_kelompok_jenis_objek_rincian::select('id', 'kd_rek_rincian_obj', 'nm_rek_rincian_obj')->where($where)->get();
        } else {
            return Tmrekening_akun_kelompok_jenis_objek_rincian::select('id', 'kd_rek_rincian_obj', 'nm_rek_rincian_obj')->wheretmrekening_akun_kelompok_jenis_objek_id($tmrekening_akun_kelompok_jenis_objek_id)->get();
        }
    }

    public function create(Request $request)
    {
        $title      = 'Tambah | ' . $this->title;
        $route      = $this->route;
        $toolbar    = ['r', 'save'];

        $tmrekening_akun_id                              = $request->tmrekening_akun_id;
        $tmrekening_akun_kelompok_id                     = $request->tmrekening_akun_kelompok_id;
        $tmrekening_akun_kelompok_jenis_id               = $request->tmrekening_akun_kelompok_jenis_id;
        $tmrekening_akun_kelompok_jenis_objek_id         = $request->tmrekening_akun_kelompok_jenis_objek_id;
        $tmrekening_akun_kelompok_jenis_objek_rincian_id = $request->tmrekening_akun_kelompok_jenis_objek_rincian_id;
        if ($tmrekening_akun_id == null || $tmrekening_akun_kelompok_id == null || $tmrekening_akun_kelompok_jenis_id == null || $tmrekening_akun_kelompok_jenis_objek_id == null || $tmrekening_akun_kelompok_jenis_objek_rincian_id == null) return abort(403, "Terdapat data yang tidak terparsing dengan benar.");

        $tmrekening_akun = Tmrekening_akun::select('id', 'kd_rek_akun', 'nm_rek_akun')->whereid($tmrekening_akun_id)->firstOrFail();
        $tmrekening_akun_kelompok = Tmrekening_akun_kelompok::select('id', 'kd_rek_kelompok', 'nm_rek_kelompok')->whereid($tmrekening_akun_kelompok_id)->firstOrFail();
        $tmrekening_akun_kelompok_jenis = Tmrekening_akun_kelompok_jenis::select('id', 'kd_rek_jenis', 'nm_rek_jenis')->whereid($tmrekening_akun_kelompok_jenis_id)->firstOrFail();
        $tmrekening_akun_kelompok_jenis_objek = Tmrekening_akun_kelompok_jenis_objek::select('id', 'kd_rek_obj', 'nm_rek_obj')->whereid($tmrekening_akun_kelompok_jenis_objek_id)->firstOrFail();
        $tmrekening_akun_kelompok_jenis_objek_rincian = Tmrekening_akun_kelompok_jenis_objek_rincian::select('id', 'kd_rek_rincian_obj', 'nm_rek_rincian_obj')->whereid($tmrekening_akun_kelompok_jenis_objek_rincian_id)->firstOrFail();

        return view($this->view . 'form_add', compact(
            'title',
            'route',
            'toolbar',
            'tmrekening_akun',
            'tmrekening_akun_kelompok',
            'tmrekening_akun_kelompok_jenis',
            'tmrekening_akun_kelompok_jenis_objek',
            'tmrekening_akun_kelompok_jenis_objek_rincian'
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tmrekening_akun_kelompok_jenis_objek_rincian_id' => 'required',
        ]);

        $kd_rek_rincian_objek_sub = $request->get('kd_rek_rincian_objek_sub');
        $nm_rek_rincian_objek_sub = $request->get('nm_rek_rincian_objek_sub');
        $dasar_hukum              = $request->get('dasar_hukum');
        $tmrekening_akun_kelompok_jenis_objek_rincian = $request->get('tmrekening_akun_kelompok_jenis_objek_rincian_id');

        for ($i = 0; $i < count($kd_rek_rincian_objek_sub); $i++) {
            if ($kd_rek_rincian_objek_sub[$i] != "" && $nm_rek_rincian_objek_sub[$i] != "") {
                if (Tmrekening_akun_kelompok_jenis_objek_rincian_sub::wherenm_rek_rincian_objek_sub($nm_rek_rincian_objek_sub[$i])->count() > 0) {
                    return response()->json([
                        'message' => 'Nama sub rekening sudah pernah tersimpan : Kode [' . $kd_rek_rincian_objek_sub[$i] . ']' . $nm_rek_rincian_objek_sub[$i]
                    ], 422);
                } else {
                    $tmrekening_akun_kelompok_jenis_objek_rincian_sub = new Tmrekening_akun_kelompok_jenis_objek_rincian_sub();
                    $tmrekening_akun_kelompok_jenis_objek_rincian_sub->id                       = $kd_rek_rincian_objek_sub[$i];
                    $tmrekening_akun_kelompok_jenis_objek_rincian_sub->kd_rek_rincian_objek_sub = $kd_rek_rincian_objek_sub[$i];
                    $tmrekening_akun_kelompok_jenis_objek_rincian_sub->nm_rek_rincian_objek_sub = $nm_rek_rincian_objek_sub[$i];
                    $tmrekening_akun_kelompok_jenis_objek_rincian_sub->dasar_hukum              = $dasar_hukum[$i];
                    $tmrekening_akun_kelompok_jenis_objek_rincian_sub->tmrekening_akun_kelompok_jenis_objek_rincian_id  = $tmrekening_akun_kelompok_jenis_objek_rincian;
                    $tmrekening_akun_kelompok_jenis_objek_rincian_sub['created_by']             = Auth::user()->username;
                    $tmrekening_akun_kelompok_jenis_objek_rincian_sub->save();
                }
            }
        }

        return response()->json([
            'message' => 'Data ' . $this->title . ' berhasil tersimpan.'
        ]);
    }

    public function show($id)
    {
        $title      = 'Menampilkan | ' . $this->title;
        $route      = $this->route;
        $toolbar    = ['r', 'u', 'd'];

        $tmrekening_akun_kelompok_jenis_objek_rincian_sub = Tmrekening_akun_kelompok_jenis_objek_rincian_sub::with('tmrekening_akun_kelompok_jenis_objek_rincian.tmrekening_akun_kelompok_jenis_objek.tmrekening_akun_kelompok_jenis.tmrekening_akun_kelompok.tmrekening_akun')->whereid($id)->firstOrFail();

        return view($this->view . 'show', compact('title', 'route', 'toolbar', 'id', 'tmrekening_akun_kelompok_jenis_objek_rincian_sub'));
    }

    public function edit($id)
    {
        $title      = 'Edit | ' . $this->title;
        $route      = $this->route;
        $toolbar    = ['r', 'save'];

        $tmrekening_akun_kelompok_jenis_objek_rincian_sub = Tmrekening_akun_kelompok_jenis_objek_rincian_sub::with('tmrekening_akun_kelompok_jenis_objek_rincian.tmrekening_akun_kelompok_jenis_objek.tmrekening_akun_kelompok_jenis.tmrekening_akun_kelompok.tmrekening_akun')->whereid($id)->firstOrFail();
        $tmrekening_akun_kelompok_jenis_objek_rincian_id  = $id;

        $rek        = new Tmrekening_akun_kelompok_jenis_objek_rincian();
        $rekAkruals = $rek->rekAkruals();
        $rekAsets   = $rek->rekAsets();
        $rekUtangs  = $rek->rekUtangs();

        $tmsikd_rekening_lras       = Tmsikd_rekening_lra::select('id', 'kd_rek_lra', 'nm_rek_lra')->orderBy('kd_rek_lra')->get();
        $tmsikd_rekening_laks       = Tmsikd_rekening_lak::select('id', 'kd_rek_lak', 'nm_rek_lak')->orderBy('kd_rek_lak')->get();
        $tmsikd_rekening_neracas    = Tmsikd_Rekening_neraca::select('id', 'kd_rek_neraca', 'nm_rek_neraca')->orderBy('kd_rek_neraca')->get();
        $tmrekening_akun_kelompok_jenis_objek_rincian = []; ///Tmrekening_akun_kelompok_jenis_objek_rincian::select('id', 'kd_rek_rincian_obj', 'nm_rek_rincian_obj')->whereid($tmrekening_akun_kelompok_jenis_objek_rincian_id)->firstOrFail();

        return view($this->view . 'form_edit', compact(
            'id',
            'title',
            'route',
            'toolbar',
            'rekAsets',
            'rekUtangs',
            'rekAkruals',
            'tmsikd_rekening_lras',
            'tmsikd_rekening_laks',
            'tmsikd_rekening_neracas',
            'tmrekening_akun_kelompok_jenis_objek_rincian_sub',
            'tmrekening_akun_kelompok_jenis_objek_rincian_id',
            'tmrekening_akun_kelompok_jenis_objek_rincian'

        ));
    }

    public function update(Request $request, $id)
    {
        $kd_rek_rincian_objek_sub = $request->kd_rek_rincian_objek_sub;

        $request->validate([
            'kd_rek_rincian_objek_sub' => 'required|max:10',
            'nm_rek_rincian_objek_sub' => 'required|max:255'
        ]);

        $input = $request->all();
        $tmrekening_akun_kelompok_jenis_objek_rincian_sub = Tmrekening_akun_kelompok_jenis_objek_rincian_sub::findOrFail($id);
        $tmrekening_akun_kelompok_jenis_objek_rincian_sub->id           = $kd_rek_rincian_objek_sub;
        $tmrekening_akun_kelompok_jenis_objek_rincian_sub['updated_by'] = Auth::user()->username;
        $tmrekening_akun_kelompok_jenis_objek_rincian_sub->update($input);

        return response()->json([
            'message' => 'Data ' . $this->title . ' berhasil diperbaharui.'
        ]);
    }

    public function destroy(Request $request, $id)
    {
        if (is_array($request->id))
            Tmrekening_akun_kelompok_jenis_objek_rincian_sub::whereIn('id', $request->id)->delete();
        else
            Tmrekening_akun_kelompok_jenis_objek_rincian_sub::whereid($request->id)->delete();

        return ['message' => "Data rekening kode sub rincian objek berhasil dihapus."];
    }
}
