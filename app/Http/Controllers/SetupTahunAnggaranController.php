<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use DataTables;
use Access;

// Models
use App\Models\Setupsikd\Tmsikd_setup_tahun_anggaran;

class SetupTahunAnggaranController extends Controller
{
    protected $permission = 'setuptahunanggaran';
    protected $route      = 'setuptahunanggaran.';
    protected $view       = 'setuptahunanggaran.';
    protected $title      = "Setup Tahun Anggaran";

    public function __construct()
    {
  
    }

    public function index()
    {
        $title   = $this->title;
        $route   = $this->route;
        $toolbar = ['d'];
        return view($this->view . 'index', compact('title', 'route', 'toolbar'));
    }

    // Add
    public function create()
    {
        $title   = 'Tambah | ' . $this->title;
        $route   = $this->route;
        $toolbar = ['r', 'save'];
        return view($this->view . 'form_add', compact('title', 'route', 'toolbar'));
    }

    public function store(Request $request)
    {
        $tahun = $request->tahun;

        for ($i = 0; $i < count($tahun); $i++) {
            if ($tahun[$i] != "") {
                if (Tmsikd_setup_tahun_anggaran::wheretahun($tahun[$i])->count() > 0) {
                    return response()->json([
                        'message' => 'Data Tahun sudah pernah tersimpan : ' . $tahun[$i]
                    ], 422);
                } else {
                    $tmsikd_setup_tahun_anggaran = new Tmsikd_setup_tahun_anggaran();
                    $tmsikd_setup_tahun_anggaran->tahun = $tahun[$i];
                    $tmsikd_setup_tahun_anggaran['created_by'] = Auth::user()->username;
                    $tmsikd_setup_tahun_anggaran->save();
                }
            }
        }

        return response()->json([
            'message' => 'Data Tahun Anggaran berhasil tersimpan.'
        ]);
    }

    // Edit
    public function edit($id)
    {
        $title   = 'Edit | ' . $this->title;
        $route   = $this->route;
        $toolbar = ['r', 'save'];
        $tmsikd_setup_tahun_anggaran = Tmsikd_setup_tahun_anggaran::findOrFail($id);
        return view($this->view . 'form_edit', compact('title', 'route', 'toolbar', 'id', 'tmsikd_setup_tahun_anggaran'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tahun' => 'required | unique:tmsikd_setup_tahun_anggarans,tahun,' . $id,
        ]);

        $input = $request->all();
        $tmsikd_setup_tahun_anggaran = Tmsikd_setup_tahun_anggaran::findOrFail($id);
        $tmsikd_setup_tahun_anggaran['updated_by']  = Auth::user()->username;
        $tmsikd_setup_tahun_anggaran->update($input);

        return response()->json([
            'message' => 'Data Tahun Anggaran berhasil diperbaharui.'
        ]);
    }

    // Delete
    // public function destroy(Request $request, $id)
    // {
    //     if (is_array($request->id))
    //         Tmsikd_setup_tahun_anggaran::whereIn('id', $request->id)->delete();
    //     else
    //         Tmsikd_setup_tahun_anggaran::whereid($request->id)->delete();

    //     return ['message' => "Data Tahun Anggaran berhasil dihapus."];
    // }

    // Show
    public function show($id)
    {
        $title   = 'Menampilkan | ' . $this->title;
        $route   = $this->route;
        $toolbar = ['r', 'u', 'd'];
        $tmsikd_setup_tahun_anggaran = Tmsikd_setup_tahun_anggaran::findOrFail($id);
        return view($this->view . 'show', compact('title', 'route', 'toolbar', 'id', 'tmsikd_setup_tahun_anggaran'));
    }

    // API
    public function api()
    {
        $data = Tmsikd_setup_tahun_anggaran::all();
        return DataTables::of($data)
            ->editColumn('id', function ($p) {
                return "<input type='checkbox' name='cbox[]' value='" . $p->id . "' />";
            })
            ->editColumn('tahun', function ($p) {
                return "<a href='" . route($this->route . 'show', $p->id) . "' target='_self'>" . $p->tahun . "</a>";
            })
            ->rawColumns(['id', 'tahun'])
            ->toJson();
    }
}
