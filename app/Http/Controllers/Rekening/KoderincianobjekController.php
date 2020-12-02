<?php

namespace App\Http\Controllers\Rekening;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use DataTables;

use App\Libraries\Sikd_list_option;
use App\Models\Setupsikd\Tmrekening_akun;
use App\Models\Setupsikd\Tmrekening_akun_kelompok;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek_rincian;

use App\Models\Setupsikd\Tmsikd_rekening_lra;
use App\Models\Setupsikd\Tmsikd_rekening_lak;
use App\Models\Setupsikd\Tmsikd_rekening_neraca;

class KoderincianobjekController extends Controller
{

    protected $permission = 'rekening.koderincianobjek';
    protected $route      = 'rekening.koderincianobjek.';
    protected $view       = 'koderincianobjek.';
    protected $title      = "Rekening Rincian Objek Mata Anggaran Kegiatan";

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
        $data = Tmrekening_akun_kelompok_jenis_objek_rincian::select('tmrekening_akun_kelompok_jenis_objek_rincians.*');
        if ($request->tmrekening_akun_kelompok_jenis_objek_id != 0) {
            $data->wheretmrekening_akun_kelompok_jenis_objek_id($request->tmrekening_akun_kelompok_jenis_objek_id);
        } elseif ($request->tmrekening_akun_kelompok_jenis_id != 0) {
            $tmrekening_akun_kelompok_jenis_id = $request->tmrekening_akun_kelompok_jenis_id;
            $data->join('tmrekening_akun_kelompok_jenis_objeks', function ($join) use ($tmrekening_akun_kelompok_jenis_id) {
                $join->on('tmrekening_akun_kelompok_jenis_objek_rincians.tmrekening_akun_kelompok_jenis_objek_id', '=', 'tmrekening_akun_kelompok_jenis_objeks.id')
                    ->where('tmrekening_akun_kelompok_jenis_objeks.tmrekening_akun_kelompok_jenis_id', $tmrekening_akun_kelompok_jenis_id);
            });
        } elseif ($request->tmrekening_akun_kelompok_id != 0) {
            $data->join('tmrekening_akun_kelompok_jenis_objeks', function ($join) {
                $join->on('tmrekening_akun_kelompok_jenis_objek_rincians.tmrekening_akun_kelompok_jenis_objek_id', '=', 'tmrekening_akun_kelompok_jenis_objeks.id');
            });

            $tmrekening_akun_kelompok_id = $request->tmrekening_akun_kelompok_id;
            $data->join('tmrekening_akun_kelompok_jenis', function ($join) use ($tmrekening_akun_kelompok_id) {
                $join->on('tmrekening_akun_kelompok_jenis_objeks.tmrekening_akun_kelompok_jenis_id', '=', 'tmrekening_akun_kelompok_jenis.id')
                    ->where('tmrekening_akun_kelompok_jenis.tmrekening_akun_kelompok_id', $tmrekening_akun_kelompok_id);
            });
        } elseif ($request->tmrekening_akun_id != 0) {
            $data->join('tmrekening_akun_kelompok_jenis_objeks', function ($join) {
                $join->on('tmrekening_akun_kelompok_jenis_objek_rincians.tmrekening_akun_kelompok_jenis_objek_id', '=', 'tmrekening_akun_kelompok_jenis_objeks.id');
            });

            $data->join('tmrekening_akun_kelompok_jenis', function ($join) {
                $join->on('tmrekening_akun_kelompok_jenis_objeks.tmrekening_akun_kelompok_jenis_id', '=', 'tmrekening_akun_kelompok_jenis.id');
            });

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
            ->editColumn('nm_rek_rincian_obj', function ($p) {
                return "<a href='" . route($this->route . 'show', $p->id) . "' target='_self'>" . $p->nm_rek_rincian_obj . "</a>";
            })
            ->rawColumns(['id', 'nm_rek_rincian_obj'])
            ->toJson();
    }

    public function kodeobjekByKodejenis($tmrekening_akun_kelompok_jenis_id)
    {
        return Tmrekening_akun_kelompok_jenis_objek::select('id', 'kd_rek_obj', 'nm_rek_obj')->wheretmrekening_akun_kelompok_jenis_id($tmrekening_akun_kelompok_jenis_id)->get();
    }

    //get rincian rek 
    // function objek_rincian($kelompok_jenis_id)
    // {
    //     return Tmrekening_akun_kelompok_jenis_objek_rincian::select('id','kd_rek_rincian_obj','nm_rek_rincian_obj')->wheretmrekening_akun_kelompok_jenis_objek_id($kelompok_jenis_id);
    // }

    public function create(Request $request)
    {
        $title      = 'Tambah | ' . $this->title;
        $route      = $this->route;
        $toolbar    = ['r', 'save'];

        $tmsikd_satkers                             =  Sikd_list_option::listSkpd()->whereNotIn('kode', 300202);
        $tmrekening_akun_id                         = $request->tmrekening_akun_id;
        $tmrekening_akun_kelompok_id                = $request->tmrekening_akun_kelompok_id;
        $tmrekening_akun_kelompok_jenis_id          = $request->tmrekening_akun_kelompok_jenis_id;
        $tmrekening_akun_kelompok_jenis_objek_id    = $request->tmrekening_akun_kelompok_jenis_objek_id;
        if ($tmrekening_akun_id == null || $tmrekening_akun_kelompok_id == null || $tmrekening_akun_kelompok_jenis_id == null || $tmrekening_akun_kelompok_jenis_objek_id == null) return abort(403, "Terdapat data yang tidak terparsing dengan benar.");

        $tmrekening_akun = Tmrekening_akun::select('id', 'kd_rek_akun', 'nm_rek_akun')->whereid($tmrekening_akun_id)->firstOrFail();
        $n_rekening_akun = '[ ' . $tmrekening_akun->kd_rek_akun . ' ] ' . $tmrekening_akun->nm_rek_akun;

        $tmrekening_akun_kelompok = Tmrekening_akun_kelompok::select('id', 'kd_rek_kelompok', 'nm_rek_kelompok')->whereid($tmrekening_akun_kelompok_id)->firstOrFail();
        $n_rekening_akun_kelompok = '[ ' . $tmrekening_akun_kelompok->kd_rek_kelompok . ' ] ' . $tmrekening_akun_kelompok->nm_rek_kelompok;

        $tmrekening_akun_kelompok_jenis = Tmrekening_akun_kelompok_jenis::select('id', 'kd_rek_jenis', 'nm_rek_jenis')->whereid($tmrekening_akun_kelompok_jenis_id)->firstOrFail();
        $n_rekening_akun_kelompok_jenis = '[ ' . $tmrekening_akun_kelompok_jenis->kd_rek_jenis . ' ] ' . $tmrekening_akun_kelompok_jenis->nm_rek_jenis;

        $tmrekening_akun_kelompok_jenis_objek = Tmrekening_akun_kelompok_jenis_objek::select('id', 'kd_rek_obj', 'nm_rek_obj')->whereid($tmrekening_akun_kelompok_jenis_objek_id)->firstOrFail();
        $n_rekening_akun_kelompok_jenis_objek = '[ ' . $tmrekening_akun_kelompok_jenis_objek->kd_rek_obj . ' ] ' . $tmrekening_akun_kelompok_jenis_objek->nm_rek_obj;

        $kd_awal = $tmrekening_akun_kelompok_jenis_objek->kd_rek_obj;

        return view($this->view . 'form_add', compact('title', 'route', 'toolbar', 'tmrekening_akun_kelompok_jenis_objek_id', 'n_rekening_akun', 'n_rekening_akun_kelompok', 'n_rekening_akun_kelompok_jenis', 'n_rekening_akun_kelompok_jenis_objek', 'kd_awal', 'tmsikd_satkers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tmrekening_akun_kelompok_jenis_objek_id' => 'required',
        ]);
        $tmrekening_akun_kelompok_jenis_objek_id    = $request->tmrekening_akun_kelompok_jenis_objek_id;
        $kd_rek_rincian_obj                         = $request->kd_rek_rincian_obj;
        $nm_rek_rincian_obj                         = $request->nm_rek_rincian_obj;
        // $tmsikd_satkers_id                          = $request->tmsikd_satkers_id;
        for ($i = 0; $i < count($kd_rek_rincian_obj); $i++) {
            if ($kd_rek_rincian_obj[$i] != "" && $nm_rek_rincian_obj[$i] != "") {
                if (Tmrekening_akun_kelompok_jenis_objek_rincian::wherenm_rek_rincian_obj($nm_rek_rincian_obj[$i])->count() > 0) {
                    return response()->json([
                        'message' => 'kode sudah pernah tersimpan : ' . $nm_rek_rincian_obj[$i]
                    ], 422);
                } else {
                    $tmrekening_akun_kelompok_jenis_objek_rincian                                           = new Tmrekening_akun_kelompok_jenis_objek_rincian();
                    $tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek_id  = $tmrekening_akun_kelompok_jenis_objek_id;
                    $tmrekening_akun_kelompok_jenis_objek_rincian->id                                       = $kd_rek_rincian_obj[$i];
                    $tmrekening_akun_kelompok_jenis_objek_rincian->kd_rek_rincian_obj                       = $kd_rek_rincian_obj[$i];
                    $tmrekening_akun_kelompok_jenis_objek_rincian->nm_rek_rincian_obj                       = $nm_rek_rincian_obj[$i];
                    $tmrekening_akun_kelompok_jenis_objek_rincian['created_by']                             = Auth::user()->username;
                    $tmrekening_akun_kelompok_jenis_objek_rincian->save();
                }
            }
        }

        return response()->json([
            'message' => 'Data rekening kode rincian objek berhasil tersimpan.'
        ]);
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'tmrekening_akun_kelompok_jenis_objek_id' => 'required',
    //     ]);

    //     $err = [];
    //     $tmrekening_akun_kelompok_jenis_objek_id    = $request->tmrekening_akun_kelompok_jenis_objek_id;
    //     $kd_rek_rincian_obj                         = $request->kd_rek_rincian_obj;
    //     $nm_rek_rincian_obj                         = $request->nm_rek_rincian_obj;

    //     for ($i = 0; $i < count($kd_rek_rincian_obj); $i++) {
    //         if ($kd_rek_rincian_obj[$i] != "" && $nm_rek_rincian_obj[$i] != "") {
    //             if (Tmrekening_akun_kelompok_jenis_objek_rincian::wherekd_rek_rincian_obj($kd_rek_rincian_obj[$i])->count() == 0) {
    //                 $tmrekening_akun_kelompok_jenis_objek_rincian                                           = new Tmrekening_akun_kelompok_jenis_objek_rincian();
    //                 $tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek_id  = $tmrekening_akun_kelompok_jenis_objek_id;
    //                 $tmrekening_akun_kelompok_jenis_objek_rincian->kd_rek_rincian_obj                       = $kd_rek_rincian_obj[$i];
    //                 $tmrekening_akun_kelompok_jenis_objek_rincian->nm_rek_rincian_obj                       = $nm_rek_rincian_obj[$i];
    //                 $tmrekening_akun_kelompok_jenis_objek_rincian->save();
    //             } else {
    //                 $err[] = "Kode " . $kd_rek_rincian_obj[$i] . " sudah pernah disimpan.";
    //             }
    //         } else {
    //             $err[] = "Nomor urut " . $i . " terdapat data yang kosong.";
    //         }
    //     }

    //     $msg_err = "";
    //     if (count($err) > 0) {
    //         $msg_err = "</div><div class='alert alert-danger'><ul class='mb-0'>";
    //         foreach ($err as $e) {
    //             $msg_err .= "<li>" . $e . "</li>";
    //         }
    //         $msg_err .= "</ul></div>";
    //     }

    //     return response()->json([
    //         'message' => 'Data rekening kode rincian objek berhasil tersimpan.' . $msg_err
    //     ]);
    // }

    public function show($id)
    {
        $title      = 'Menampilkan | ' . $this->title;
        $route      = $this->route;
        $toolbar    = ['c', 'd'];

        $tmrekening_akun_kelompok_jenis_objek_rincian = Tmrekening_akun_kelompok_jenis_objek_rincian::with('tmrekening_akun_kelompok_jenis_objek.tmrekening_akun_kelompok_jenis.tmrekening_akun_kelompok.tmrekening_akun')->whereid($id)->firstOrFail();

        return view($this->view . 'show', compact('title', 'route', 'toolbar', 'id', 'tmrekening_akun_kelompok_jenis_objek_rincian'));
    }

    public function edit($id)
    {
        $title      = 'Edit | ' . $this->title;
        $route      = $this->route;
        $toolbar    = ['c', 'd', 'u'];

        $tmrekening_akun_kelompok_jenis_objek_rincian = Tmrekening_akun_kelompok_jenis_objek_rincian::with('tmrekening_akun_kelompok_jenis_objek.tmrekening_akun_kelompok_jenis.tmrekening_akun_kelompok.tmrekening_akun')->whereid($id)->firstOrFail();

        $n_rekening_akun                        = '[ ' . $tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->tmrekening_akun_kelompok_jenis->tmrekening_akun_kelompok->tmrekening_akun->kd_rek_akun . ' ] ' . $tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->tmrekening_akun_kelompok_jenis->tmrekening_akun_kelompok->nm_rek_kelompok;
        $n_rekening_akun_kelompok               = '[ ' . $tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->tmrekening_akun_kelompok_jenis->tmrekening_akun_kelompok->kd_rek_kelompok . ' ] ' . $tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->tmrekening_akun_kelompok_jenis->tmrekening_akun_kelompok->nm_rek_kelompok;
        $n_rekening_akun_kelompok_jenis         = '[ ' . $tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->tmrekening_akun_kelompok_jenis->kd_rek_jenis . ' ] ' . $tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->tmrekening_akun_kelompok_jenis->nm_rek_jenis;
        $n_rekening_akun_kelompok_jenis_objek   = '[ ' . $tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->kd_rek_obj . ' ] ' . $tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->nm_rek_obj;

        $rek        = new Tmrekening_akun_kelompok_jenis_objek_rincian();
        $rekAkruals = $rek->rekAkruals();
        $rekAsets   = $rek->rekAsets();
        $rekUtangs  = $rek->rekUtangs();

        $tmsikd_rekening_lras       = Tmsikd_rekening_lra::select('id', 'kd_rek_lra', 'nm_rek_lra')->orderBy('kd_rek_lra')->get();
        $tmsikd_rekening_laks       = Tmsikd_rekening_lak::select('id', 'kd_rek_lak', 'nm_rek_lak')->orderBy('kd_rek_lak')->get();
        $tmsikd_rekening_neracas    = Tmsikd_rekening_neraca::select('id', 'kd_rek_neraca', 'nm_rek_neraca')->orderBy('kd_rek_neraca')->get();

        return view($this->view . 'form_edit', compact('title', 'route', 'toolbar', 'id', 'tmrekening_akun_kelompok_jenis_objek_rincian', 'n_rekening_akun', 'n_rekening_akun_kelompok', 'n_rekening_akun_kelompok_jenis', 'n_rekening_akun_kelompok_jenis_objek', 'tmsikd_rekening_lras', 'tmsikd_rekening_laks', 'tmsikd_rekening_neracas', 'rekAkruals', 'rekAsets', 'rekUtangs'));
    }

    public function update(Request $request, $id)
    {
        $kd_rek_rincian_obj  = $request->kd_rek_rincian_obj;
        $request->validate([
            'kd_rek_rincian_obj' => 'required|max:10|unique:tmrekening_akun_kelompok_jenis_objek_rincians,kd_rek_rincian_obj,' . $id,
            'nm_rek_rincian_obj' => 'required|max:30'
        ]);

        $input = $request->all();
        $tmrekening_akun_kelompok_jenis_objek_rincian = Tmrekening_akun_kelompok_jenis_objek_rincian::findOrFail($id);
        $tmrekening_akun_kelompok_jenis_objek_rincian->id           = $kd_rek_rincian_obj;
        $tmrekening_akun_kelompok_jenis_objek_rincian['updated_by'] = Auth::user()->username;
        $tmrekening_akun_kelompok_jenis_objek_rincian->update($input);

        return response()->json([
            'message' => 'Data rekening kode rincian objek berhasil diperbaharui.'
        ]);
    }

    public function destroy(Request $request, $id)
    {
        if (is_array($request->id))
            Tmrekening_akun_kelompok_jenis_objek_rincian::whereIn('id', $request->id)->delete();
        else
            Tmrekening_akun_kelompok_jenis_objek_rincian::whereid($request->id)->delete();

        return ['message' => "Data rekening kode rincian objek berhasil dihapus."];
    }
}
