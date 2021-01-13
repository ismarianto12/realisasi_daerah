<?php

namespace App\Http\Controllers\Rekening;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use DataTables;

use App\Models\Setupsikd\Tmrekening_akun;
use App\Models\Setupsikd\Tmrekening_akun_kelompok;

class KodekelompokController extends Controller
{

    protected $permission = 'rekening.kodekelompok';
    protected $route      = 'rekening.kodekelompok.';
    protected $view       = 'kodekelompok.';
    protected $title      = "Rekening Akun Kelompok Mata Anggaran Kegiatan";

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

        return view($this->view . 'index', compact(
            'title',
            'route',
            'toolbar',
            'tmrekening_akuns'
        ));
    }

    public function api(Request $request)
    {
        $data = Tmrekening_akun_kelompok::select('*');
        if ($request->tmrekening_akun_id != 0) {
            $data->wheretmrekening_akun_id($request->tmrekening_akun_id);
        }
        $data->get();
        return DataTables::of($data)
            ->editColumn('id', function ($p) {
                return "<input type='checkbox' name='cbox[]' value='" . $p->id . "' />";
            })
            ->editColumn('nm_rek_kelompok', function ($p) {
                return "<a href='" . route($this->route . 'show', $p->id) . "' target='_self'>" . $p->nm_rek_kelompok . "</a>";
            })
            ->rawColumns(['id', 'nm_rek_kelompok'])
            ->toJson();
    }

    public function create(Request $request)
    {
        $title   = 'Tambah | ' . $this->title;
        $route   = $this->route;
        $toolbar = ['r', 'save'];

        $tmrekening_akun_id = $request->tmrekening_akun_id;
        if ($tmrekening_akun_id == null) return abort(403, "Terdapat data yang tidak terparsing dengan benar."); 
        $tmrekening_akun = Tmrekening_akun::select('id', 'kd_rek_akun', 'nm_rek_akun')->whereid($tmrekening_akun_id)->firstOrFail();
        return view($this->view . 'form_add', compact(
            'title',
            'route',
            'toolbar',
            'tmrekening_akun'
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tmrekening_akun_id' => 'required',
        ]);

        $tmrekening_akun_id = $request->tmrekening_akun_id;
        $kd_rek_kelompok    = $request->kd_rek_kelompok;
        $nm_rek_kelompok    = $request->nm_rek_kelompok;
        $kd_rek_akrual      = $request->kd_rek_akrual;
        $kd_rek_aset        = $request->kd_rek_aset;
        $kd_rek_utang       = $request->kd_rek_utang;

        for ($i = 0; $i < count($kd_rek_kelompok); $i++) {
            if ($kd_rek_kelompok[$i] != "" && $nm_rek_kelompok[$i] != "") {
                if (Tmrekening_akun_kelompok::wherekd_rek_kelompok($kd_rek_kelompok[$i])->count() > 0) {
                    return response()->json([
                        'message' => 'kode sudah pernah tersimpan : ' . $kd_rek_kelompok[$i]
                    ], 422);
                } else {
                    $tmrekening_akun_kelompok = new Tmrekening_akun_kelompok();
                    $tmrekening_akun_kelompok->tmrekening_akun_id = $tmrekening_akun_id;
                    $tmrekening_akun_kelompok->id                 = $kd_rek_kelompok[$i];
                    $tmrekening_akun_kelompok->kd_rek_kelompok    = $kd_rek_kelompok[$i];
                    $tmrekening_akun_kelompok->nm_rek_kelompok    = $nm_rek_kelompok[$i];
                    $tmrekening_akun_kelompok->kd_rek_akrual      = $kd_rek_akrual[$i];
                    $tmrekening_akun_kelompok->kd_rek_aset        = $kd_rek_aset[$i];
                    $tmrekening_akun_kelompok->kd_rek_utang       = $kd_rek_utang[$i];
                    $tmrekening_akun_kelompok['created_by']       = Auth::user()->username;
                    $tmrekening_akun_kelompok->save();
                }
            }
        }

        return response()->json([
            'message' => 'Data rekening kode akun berhasil tersimpan.'
        ]);
    }

    public function show($id)
    {
        $title   = 'Menampilkan | ' . $this->title;
        $route   = $this->route;
        $toolbar = ['r', 'u', 'd'];
        $tmrekening_akun_kelompok = Tmrekening_akun_kelompok::with('tmrekening_akun:id,kd_rek_akun,nm_rek_akun')->whereid($id)->firstOrFail();
        return view($this->view . 'show', compact('title', 'route', 'toolbar', 'id', 'tmrekening_akun_kelompok'));
    }

    public function edit($id)
    {
        $title   = 'Edit | ' . $this->title;
        $route   = $this->route;
        $toolbar = ['r', 'save'];

        $tmrekening_akun_kelompok = Tmrekening_akun_kelompok::findOrFail($id);
        $tmrekening_akun = Tmrekening_akun::select('id', 'kd_rek_akun', 'nm_rek_akun')->whereid($tmrekening_akun_kelompok->tmrekening_akun_id)->firstOrFail();
        $n_rekening_akun = '[' . $tmrekening_akun->kd_rek_akun . '] ' . $tmrekening_akun->nm_rek_akun;

        return view($this->view . 'form_edit', compact('title', 'route', 'toolbar', 'id', 'tmrekening_akun_kelompok', 'n_rekening_akun'));
    }

    public function update(Request $request, $id)
    {
        $kd_rek_kelompok = $request->kd_rek_kelompok;
        $request->validate([
            'kd_rek_kelompok' => 'required|max:2|unique:tmrekening_akun_kelompoks,kd_rek_kelompok,' . $id,
            'nm_rek_kelompok' => 'required|max:100'
        ]);

        $input = $request->all();
        $tmrekening_akun_kelompok = Tmrekening_akun_kelompok::findOrFail($id);
        $tmrekening_akun_kelompok['updated_by'] = Auth::user()->username;
        $tmrekening_akun_kelompok->id = $kd_rek_kelompok;
        $tmrekening_akun_kelompok->update($input);

        return response()->json([
            'message' => 'Data rekening kode akun berhasil diperbaharui.'
        ]);
    }

    public function destroy(Request $request, $id)
    {
        if (is_array($request->id))
            Tmrekening_akun_kelompok::whereIn('id', $request->id)->delete();
        else
            Tmrekening_akun_kelompok::whereid($request->id)->delete();

        return ['message' => "Data rekening kode akun berhasil dihapus."];
    }
}
