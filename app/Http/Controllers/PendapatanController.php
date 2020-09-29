<?php


namespace App\Http\Controllers;

use Access;
use DataTables;
use Html_number;
use Sikd_list_option;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use App\Models\Setupsikd\Tmsikd_bidang;
use App\Models\Setupsikd\Tmsikd_satker;
use App\Models\Setupsikd\Tmsikd_sub_skpd;
use App\Models\Setupsikd\Tmsikd_sumber_anggaran;
use App\Models\Setupsikd\Tmsikd_setup_tahun_anggaran;

use App\Models\Rka\Tmrka;
use App\Models\Rka\Tmrapbd;
use App\Models\Rka\Tmrka_pendapatan;
use App\Models\Rka\Tmrka_mata_anggaran;
use App\Models\Rka\Tmrka_rincian_mata_anggaran;
use App\Models\Setupsikd\Tmrekening_akun_kelompok;
use App\Models\Setupsikd\Tmrekening_akun;

use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek_rincian;
use App\Helpers\Properti_app;
use App\Libraries\List_pendapatan;

class PendapatanController extends Controller
{
    protected $route      = 'pendapatan.';
    protected $view       = 'pendapatan.pendapatan.';
    protected $title      = 'Pendapatan SKPD';
    protected $type       = "RKAPendapatan";
    protected $jdl        = "Pendapatan";

    public function __construct()
    {
    }

    public function index(Request $request)
    {

        $title   = 'Laporan Pendapatan | ' . $this->title;
        $route   =  $this->route;
        $toolbar =  ['r','d','c'];
        // Validasi
        $satker_id = Auth::user()->sikd_satker_id;
        $level_id  = Properti_app::getlevel();

        //jika akses satker berbeda 
        if ($satker_id == '' && $level_id != 3) {
            $satker_id = isset($request->tmsikd_satker_id) ? $request->tmsikd_satker_id : 0;
        } else {
            // if ($request->tmsikd_satker_id != $satker_id) {
            //     return abort(403, 'Akses tidak sesuai dengan satker id');
            // }
        }
        $tahun_id           = ($request->tahun_id) ? $request->tahun_id : 0;
        $tmrapbd_id         = $request->tmrapbd_id;
        $tmsikd_satker_id   = $request->tmsikd_satker_id;
        $tmsikd_sub_skpd_id = $request->tmsikd_sub_skpd_id;
        $tmsikd_bidang_id   = $request->tmsikd_bidang_id;
        $dari               = $request->dari;
        $sampai             = $request->sampai;

        // 
        $tmrekening_akuns = Tmrekening_akun::select('id', 'kd_rek_akun', 'nm_rek_akun')->get();
        $tahuns           = Tmsikd_setup_tahun_anggaran::select('id', 'tahun')->get();

        $tmsikd_satkers   =  Sikd_list_option::listSkpd()->whereNotIn('kode', 300202);
        $tmsikd_satker_id =  ($request->tmsikd_satker_id == '' ? $tmsikd_satkers->first()->id : $request->tmsikd_satker_id);

        $tmsikd_sub_skpds = Tmsikd_sub_skpd::select('id', 'kode', 'nama')->get();
        $tmsikd_bidangs   = Tmsikd_bidang::select('id', 'kd_bidang', 'nm_bidang')->get();
        $tmrapbds         = Tmrapbd::select('id', 'jenis')->get();

        // Sumber Anggaran
        $tmsikd_sumber_anggarans = Tmsikd_sumber_anggaran::select('id', 'kd_sumber_anggaran', 'nm_sumber_anggaran')->wheretmtype_anggaran_id(4)->get();
        // Rekening
        $kdRek = Tmrka_mata_anggaran::getKdRekRka($this->type);
        $rekJenis   = Sikd_list_option::getRekJenisByKode($kdRek);
        $rekJeni_id = ($request->rekJeni_id == '' ? $rekJenis->first()->id : $request->rekJeni_id);
        $rekObjs    = Sikd_list_option::getListRekObjs($rekJeni_id);
        $rekObj_id  = ($request->rekObj_id == '' ? $rekObjs->first()->id : $request->rekObj_id);

        $rekRincian_id  = $request->rekRincian_id;

        $par = [
            'tmrekening_akun_kelompok_jenis_objek_rincian_id' => $rekRincian_id,
            'tmrekening_akun_kelompok_jenis_objek_id'         => $rekObj_id,
            'tmsikd_satkers_id'                               => $request->tmsikd_satker_id,
            'rekjenis_id'                                     => $request->rekJeni_id,
            //   'tmrka_id' => $tmrka_id
        ];
        $satker          = Tmsikd_satker::find($satker_id);
        $satker_nm       = ($satker['nama']) ? $satker['nama'] : 'Kosong';
        $listRincianSubs = Tmrka_mata_anggaran::getInputListDataSetRincSub($par);


        return view($this->view . 'index', compact(
            'title',
            'route',
            'toolbar',
            'tahun_id',
            'tmrapbd_id',
            'tmsikd_satker_id',
            'tmsikd_sub_skpd_id',
            'tmsikd_bidang_id',
            'tahuns',
            'tmrekening_akuns',
            'tmsikd_satkers',
            'satker_nm',
            'tmsikd_sub_skpds',
            'tmsikd_bidangs',
            'kdRek',
            'rekJenis',
            'rekJeni_id',
            'rekObjs',
            'rekObj_id',
            'rekRincian_id',
            'listRincianSubs',
            'dari',
            'sampai',
            'tmsikd_sumber_anggarans'
        ));
    }

    public function api(Request $request)
    {

        $data = Tmrka::list();

        $tahun_id = $request->tahun_id;
        $tmsikd_satker_id = $request->tmsikd_satker_id;
        $dari = $request->dari;
        $sampai = $request->sampai;
        $tmrekening_akun_id = $request->tmrekening_akun_id;
        $tmrekening_akun_kelompok_id = $request->tmrekening_akun_kelompok_id;
        $tmrekening_akun_kelompok_jenis_id = $request->tmrekening_akun_kelompok_jenis_id;
        $tmrekening_akun_kelompok_jenis_objek_id = $request->tmrekening_akun_kelompok_jenis_objek_id;

        if ($tmrekening_akun_kelompok_jenis_objek_id != 0) {
            $data->where('tmrekening_akun_kelompok_jenis_objeks.id', '=', $tmrekening_akun_kelompok_jenis_objek_id);
        }
        if ($tmrekening_akun_kelompok_jenis_id != 0) {
            $data->where('tmrekening_akun_kelompok_jenis.id', '=', $tmrekening_akun_kelompok_jenis_id);
        }
        if ($dari != '') {
            $data->where('tmrkas.tanggal_lapor', '>=', $dari);
        }
        if ($sampai != '') {
            $data->where('tmrkas.tanggal_lapor', '<=', $sampai);
        }
        if ($tmsikd_satker_id != '') {
            $data->where('tmrkas.tmsikd_satker_id', '=', $tmsikd_satker_id);
        }
        $data = $data->get();
        return DataTables::of($data)
            ->editColumn('id', function ($p) {
                return "<input type='checkbox' name='cbox[]' value='" . $p->id . "'/>";
            })
            ->editColumn('kd_rek_jenis', function ($p) {
                return '<td><strong>' . $p->kd_rek_jenis . '</strong></td><td>' . $p->nm_rek_jenis . '</td><td align="right" colspan="2">' . Html_number::decimal($p->jml_rek_jenis) . '</td><td>' . Properti_app::tgl_indo($p->tanggal_lapor) . '</td>';
            })
            ->editColumn('kd_rek_obj', function ($p) {
                return '<td><strong>' . $p->kd_rek_obj . '</strong></td><td>' . $p->nm_rek_obj . '</td><td align="right" colspan="2">' . Html_number::decimal($p->jml_rek_obj) . '</td><td>'.Properti_app::tgl_indo($p->tanggal_lapor).'</td>';
            })
            ->editColumn('kd_rek_rincian_obj', function ($p) {
                return '<td><strong>' . $p->kd_rek_rincian_obj . '</strong></td><td>' . $p->nm_rek_rincian_obj . '</td>
            <td align="right" colspan="2">' . Html_number::decimal($p->jml_rek_rincian_obj) . '</td><td>'.Properti_app::tgl_indo($p->tanggal_lapor).'</td>';
            })
            ->editColumn('kd_rek_rincian_objek_sub', function ($p) {
                return "<a href='" . route($this->route . 'show', $p->id) . "' target='_self'>" . $p->kd_rek_rincian_objek_sub . "</a>";
            })
            ->editColumn('tgl_lapor', function ($p) {
                return ($p->tanggal_lapor) ?  '<b>' . Properti_app::tgl_indo($p->tanggal_lapor) . '</b>' : '<b>Kosong</b>';
            })
            ->editColumn('volume', function ($p) {
                return ($p->volume == 0 ? '' : Html_number::decimal($p->volume));
            })
            ->editColumn('jumlah', function ($p) {
                return Html_number::decimal($p->jumlah);
            })
            ->rawColumns(['id', 'kd_rek_rincian_obj', 'kd_rek_obj', 'kd_rek_jenis', 'kd_rek_rincian_objek_sub', 'tgl_lapor'])
            ->toJson();
    }

    public function create(Request $request)
    {    // * 
        $title   = 'Tambah | ' . $this->title;
        $route   =  $this->route;
        $toolbar =  ['r', 'save'];
        // Validasi
        $satker_id = Auth::user()->sikd_satker_id;
        $level_id  = Properti_app::getlevel();

        if ($satker_id == '' && $level_id != 3) {
        } else {
            if ($request->tmsikd_satker_id != $satker_id) {
                return abort(403, 'Akses tidak sesuai dengan satker id');
            }
        }

        $tahun_id           = $request->tahun_id;
        $tmrapbd_id         = $request->tmrapbd_id;
        $tmsikd_satker_id   = $request->tmsikd_satker_id;
        $tmsikd_sub_skpd_id = $request->tmsikd_sub_skpd_id;
        $tmsikd_bidang_id   = $request->tmsikd_bidang_id;
        if ($tmsikd_bidang_id == null || $tmsikd_bidang_id == "") return abort(403, "Terdapat data yang tidak terparsing dengan benar.");
        // 
        $tahuns           = Tmsikd_setup_tahun_anggaran::select('id', 'tahun')->whereid($tahun_id)->first();
        $tmsikd_satkers   = Tmsikd_satker::select('id', 'nama', 'kode')->whereid($tmsikd_satker_id)->first();
        $tmsikd_sub_skpds = Tmsikd_sub_skpd::select('id', 'kode', 'nama')->whereid($tmsikd_sub_skpd_id)->first();
        $tmsikd_bidangs   = Tmsikd_bidang::select('id', 'kd_bidang', 'nm_bidang')->whereid($tmsikd_bidang_id)->first();
        $tmrapbds         = Tmrapbd::select('id', 'jenis')->whereid($tmrapbd_id)->first();

        // Sumber Anggaran
        $tmsikd_sumber_anggarans = Tmsikd_sumber_anggaran::select('id', 'kd_sumber_anggaran', 'nm_sumber_anggaran')->wheretmtype_anggaran_id(4)->get();
        // Rekening
        //kode rekening pendapatan 4 
        if ($level_id != 3) {
            $class_option = new Sikd_list_option;
        }
        if ($level_id  == 3) {
            $class_option = new List_pendapatan;
        }
        //dd($class_option);
        //exit;  
        $kdRek      = Tmrka_mata_anggaran::getKdRekRka($this->type);
        $rekJenis   = $class_option->getRekJenisByKode($kdRek);
        $rekJeni_id = ($request->rekJeni_id == '' ? $rekJenis->first()->id : $request->rekJeni_id);

        $rekObjs    = $class_option->getListRekObjs($rekJeni_id);
        //dd($rekObjs);
        if (count($rekObjs) == NULL) {
            $rekObj_id  = [];
        } else {
            $rekObj_id  = ($request->rekObj_id == '' ? $rekObjs->first()->id : $request->rekObj_id);
        }
        // dd($rekObjs);

        $rekRincians    = $class_option->getListRekRincians($rekObj_id);
        $rekRincian_id  = $request->rekRincian_id;

        // List Rincian Sub
        $tmrka = Tmrka::firstOrCreate([
            'tmrapbd_id'         => ($tmrapbd_id) ? $tmrapbd_id : NULL,
            'tmsikd_satker_id'   => ($tmsikd_satker_id) ? $tmsikd_satker_id : NULL,
            'tmsikd_sub_skpd_id' => ($tmsikd_sub_skpd_id) ? $tmsikd_sub_skpd_id : 0,
            'tmsikd_bidang_id'   => ($tmsikd_bidang_id)  ? $tmsikd_bidang_id : NULL,
            'rka_type'           => ($this->type) ? $this->type : NULL,
            'tanggal_lapor'      => date('Y-m-d'),
        ]);
        $tmrka_id = $tmrka->id;
        $par = [
            'tmrekening_akun_kelompok_jenis_objek_rincian_id' => $rekRincian_id,
            'tmrekening_akun_kelompok_jenis_objek_id'         => $rekObj_id,
            'tmsikd_satkers_id'                               => $request->tmsikd_satker_id,
            'rekjenis_id'                                     => $request->rekJeni_id,
        ];
        $satker          = Tmsikd_satker::find($request->tmsikd_satker_id);
        $satker_nm       = ($satker->nama) ? $satker->nama : 'Kosong';
        $listRincianSubs = Tmrka_mata_anggaran::getInputListDataSetRincSub($par);
        return view($this->view . 'form_add', compact(
            'title',
            'route',
            'toolbar',
            'tahun_id',
            'tmrka_id',
            'tmrapbd_id',
            'tmsikd_satker_id',
            'tmsikd_sub_skpd_id',
            'tmsikd_bidang_id',
            'tahuns',
            'tmsikd_satkers',
            'satker_nm',
            'tmsikd_sub_skpds',
            'tmsikd_bidangs',
            'kdRek',
            'rekJenis',
            'rekJeni_id',
            'rekObjs',
            'rekObj_id',
            'rekRincians',
            'rekRincian_id',
            'listRincianSubs',
            'tmsikd_sumber_anggarans'
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tmsikd_setup_tahun_anggaran_id' => 'required',
            'tmrapbd_id'                     => 'required',
            'tmsikd_satker_id'               => 'required',
            'tmsikd_bidang_id'               => 'required'
        ]);

        /* Tahapan:
            1. Tmrkas
            2. Tmrka_pendapatans
            3. Tmrka_mata_anggarans */

        // Tahap 1
        $tmrapbd_id         = $request->tmrapbd_id;
        $tmsikd_satker_id   = $request->tmsikd_satker_id;
        $tmsikd_sub_skpd_id = $request->tmsikd_sub_skpd_id;
        if ($tmsikd_sub_skpd_id == null) {
            $tmsikd_sub_skpd_id = 0;
        }
        $tmsikd_bidang_id   = $request->tmsikd_bidang_id;

        $tmrka = Tmrka::where([
            'tmrapbd_id'          => $tmrapbd_id,
            'tmsikd_satker_id'    => $tmsikd_satker_id,
            'tmsikd_sub_skpd_id'  => $tmsikd_sub_skpd_id,
            'tmsikd_bidang_id'    => $tmsikd_bidang_id,
            'rka_type'            => $this->type
        ])->firstOrFail();
        $tmrka_id = $tmrka->id;
        // Tahap 2
        Tmrka_pendapatan::firstOrCreate([
            'tmrka_id' => $tmrka_id
        ]);

        // Tahap 3
        $cboxInput      = $request->cboxInput;
        $cboxInputVal   = $request->cboxInputVal;
        $kd_rekening    = $request->kd_rekening;
        $volume         = $request->volume;
        $satuan         = $request->satuan;
        $jumlah         = $request->jumlah;
        $harga          = $request->harga;
        $tanggal_lapor  = $request->tanggal_lapor;

        $tmsikd_sumber_anggaran_id = $request->tmsikd_sumber_anggaran_id;

        if ($cboxInput == null)
            return response()->json(['message' => "Tidak ada data rincian pendapatan yang dipilih."], 422);

        for ($i = 0; $i < count($cboxInput); $i++) {
            $key = $cboxInput[$i];

            Tmrka_mata_anggaran::updateOrCreate([
                'tmrka_id' => $tmrka_id,
                'tmsikd_sumber_anggaran_id' => $tmsikd_sumber_anggaran_id,
                'tmrekening_akun_kelompok_jenis_objek_rincian_sub_id' => $cboxInputVal[$key],
                'kd_rekening' => $kd_rekening[$key],
                'volume' => $volume[$key],
                'satuan' => $satuan[$key],
                'jumlah' => $jumlah[$key],
                'harga'  => $harga[$key],
                'tanggal_lapor' => $tanggal_lapor
            ]);
            //update tanggal raport
            Tmrka::find($tmrka_id)->update([
                'tanggal_lapor' => $request->tanggal_lapor,
            ]);
        }
        return response()->json([
            'message' => "Data " . $this->title . " Berhasil Tersimpan"
        ]);
    }

    public function show($id)
    {
        // *
        $title   = 'Menampilkan | ' . $this->title;
        $route   = $this->route;
        $toolbar = ['r', 'u'];
        $where = ['tmrka_mata_anggarans.id' => $id];
        $r     = Tmrka::list($where)->firstOrFail();

        // RKA Rincian Mata Anggaran
        $rincians = Tmrka_rincian_mata_anggaran::list(['tmrka_mata_anggaran_id' => $id])->get();
        $jnsItems = Tmrka_rincian_mata_anggaran::getListJnsItem();

        // RAPBD
        $tmrapbds = Tmrapbd::with(['tmsikd_setup_tahun_anggaran:id,tahun'])->whereid($r->tmrapbd_id)->firstOrFail();

        // RKA
        $rka = Tmrka_mata_anggaran::whereid($id)->with(
            'tmrka.tmsikd_satker',
            'tmrka.tmsikd_sub_skpd',
            'tmrka.tmsikd_bidang'
        )->first();

        return view($this->view . 'show', compact(
            'title',
            'route',
            'toolbar',
            'id',
            'r',
            'rincians',
            'jnsItems',
            'tmrapbds',
            'rka'
        ));
    }

    public function edit($id)
    {
        return redirect(route('rka.rkaskpd.rincian_mata_anggaran.create', 'tmrka_mata_anggaran_id=' . $id . '&edit=1'));
    }

    public function update()
    {
        // 
    }

    public function destroy(Request $request)
    {
        if (is_array($request->id)) {
            Tmrka_mata_anggaran::whereIn('id', $request->id)->delete();
        } else {
            $tmrka = Tmrka_mata_anggaran::whereid($request->id)->firstOrFail();
            $tmrka->delete();
        }
        return ['message' => "Data " . $this->title . " berhasil dihapus."];
    }
}
