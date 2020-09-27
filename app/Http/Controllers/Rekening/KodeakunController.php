<?php

namespace App\Http\Controllers\Rekening;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use DataTables;
 
use App\Models\Setupsikd\Tmrekening_akun;

class KodeakunController extends Controller
{

    protected $permission = 'rekening.kodeakun';
    protected $route      = 'rekening.kodeakun.';
    protected $view       = 'kodeakun.';
    protected $title      = "Rekening Akun Mata Anggaran Kegiatan";

    public function __construct()
    { 
     //   $this->middleware('level:|1');
    }

    public function index()
    {
        $title = $this->title;
        $route = $this->route;
        $toolbar = ['c','d'];
        return view($this->view . 'index', compact('title', 'route', 'toolbar'));
    }

    public function api()
    {
        $data = Tmrekening_akun::all();
        return DataTables::of($data)
            ->editColumn('id', function ($p) {
                return "<input type='checkbox' name='cbox[]' value='" . $p->id . "' />";
            })
            ->editColumn('nm_rek_akun', function ($p) {
                return "<a href='" . route($this->route . 'show', $p->id) . "' target='_self'>" . $p->nm_rek_akun . "</a>";
            })
            ->rawColumns(['id', 'nm_rek_akun'])
            ->toJson();
    }

    public function create()
    {
        $title   = 'Tambah | ' . $this->title;
        $route   = $this->route;
        $toolbar = ['r', 'save'];
        return view($this->view . 'form_add', compact('title', 'route', 'toolbar'));
    }

    public function store(Request $request)
    {
        $kd_rek_akun   = $request->kd_rek_akun;
        $nm_rek_akun   = $request->nm_rek_akun;
        $kd_rek_akrual = $request->kd_rek_akrual;
        $kd_rek_aset   = $request->kd_rek_aset;
        $kd_rek_utang  = $request->kd_rek_utang;

        for ($i = 0; $i < count($kd_rek_akun); $i++) {
            if ($kd_rek_akun[$i] != "" && $nm_rek_akun[$i] != "") {

                if (Tmrekening_akun::wherekd_rek_akun($kd_rek_akun[$i])->count() > 0) {
                    return response()->json([
                        'message' => 'kode sudah pernah tersimpan : ' . $kd_rek_akun[$i]
                    ], 422);
                } else {
                    $tmrekening_akun = new Tmrekening_akun();
                    $tmrekening_akun->id            = $kd_rek_akun[$i];
                    $tmrekening_akun->kd_rek_akun   = $kd_rek_akun[$i];
                    $tmrekening_akun->nm_rek_akun   = $nm_rek_akun[$i];
                    $tmrekening_akun->kd_rek_akrual = $kd_rek_akrual[$i];
                    $tmrekening_akun->kd_rek_aset   = $kd_rek_aset[$i];
                    $tmrekening_akun->kd_rek_utang  = $kd_rek_utang[$i];
                    $tmrekening_akun['created_by']  = Auth::user()->username;
                    $tmrekening_akun->save();
                }
            }
        }

        return response()->json([
            'message' => 'Data' . $this->title . 'berhasil tersimpan.'
        ]);
    }

    public function show($id)
    {
        $title   = 'Menampilkan | ' . $this->title;
        $route   = $this->route;
        $toolbar = ['r', 'u', 'd'];
        $tmrekening_akun = Tmrekening_akun::findOrFail($id);
        return view($this->view . 'show', compact('title', 'route', 'toolbar', 'id', 'tmrekening_akun'));
    }

    public function edit($id)
    {
        $title   = 'Edit | ' . $this->title;
        $route   = $this->route;
        $toolbar = ['r', 'save'];
        $tmrekening_akun = Tmrekening_akun::findOrFail($id);
        return view($this->view . 'form_edit', compact('title', 'route', 'toolbar', 'id', 'tmrekening_akun'));
    }

    public function update(Request $request, $id)
    {
        $kd_rek_akun = $request->kd_rek_akun;
        $request->validate([
            'kd_rek_akun' => 'required|max:1|unique:tmrekening_akuns,kd_rek_akun,' . $id,
            'nm_rek_akun' => 'required|max:30'
        ]);

        $input = $request->all();
        $tmrekening_akun = Tmrekening_akun::findOrFail($id);
        $tmrekening_akun['updated_by'] = Auth::user()->username;
        $tmrekening_akun->id = $kd_rek_akun;
        $tmrekening_akun->update($input);

        return response()->json([
            'message' => 'Data rekening kode akun berhasil diperbaharui.'
        ]);
    }

    public function destroy(Request $request, $id)
    {
        if (is_array($request->id))
            Tmrekening_akun::whereIn('id', $request->id)->delete();
        else
            Tmrekening_akun::whereid($request->id)->delete();

        return ['message' => "Data rekening kode akun berhasil dihapus."];
    }
}
