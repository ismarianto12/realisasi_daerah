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

use App\Models\Tmpendapatan;
use App\Models\Setupsikd\Tmrekening_akun_kelompok;
use App\Models\Setupsikd\Tmrekening_akun;
use App\Models\Rka\Tmrapbd;

use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek_rincian;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek_rincian_sub;

use App\Helpers\Properti_app;
use App\Libraries\List_pendapatan;
use App\Models\Tmopd;
use Illuminate\Support\Carbon;

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
        $toolbar =  ['r', 'd'];
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
        $tmrekening_akuns = Tmrekening_akun::select('id', 'kd_rek_akun', 'nm_rek_akun')->get();
        $tahuns           = Tmsikd_setup_tahun_anggaran::select('id', 'tahun')->get();

        $t_active     = Tmsikd_setup_tahun_anggaran::where('active', 1)->get();
        $tahun_active = ($t_active->first()->active) ? $t_active->first()->active : 0;

        $tmsikd_satkers   =  Sikd_list_option::listSkpd()->whereNotIn('kode', 300202);
        $tmsikd_satker_id =  ($request->tmsikd_satker_id == '' ? $tmsikd_satkers->first()->id : $request->tmsikd_satker_id);

        $tmsikd_sub_skpds = Tmsikd_sub_skpd::select('id', 'kode', 'nama')->get();
        $tmsikd_bidangs   = Tmsikd_bidang::select('id', 'kd_bidang', 'nm_bidang')->get();
        $tmrapbds         = Tmrapbd::select('id', 'jenis')->get();

        // Sumber Anggaran
        $tmsikd_sumber_anggarans = Tmsikd_sumber_anggaran::select('id', 'kd_sumber_anggaran', 'nm_sumber_anggaran')->wheretmtype_anggaran_id(4)->get();

        $nowdate = strtotime("1 day", strtotime(date('Y-m-d')));
        $new_date = date("Y-m-d", $nowdate);

        $dari             = date('Y-m-d');
        $sampai           = $new_date;
        //if request available 
        $tgl_lapor        = $request->tgl_lapor;
        //dd($tahuns);
        return view($this->view . 'index', compact(
            'title',
            'tgl_lapor',
            'route',
            'toolbar',
            'tahun_active',
            'tmsikd_satker_id',
            'tahuns',
            'tmrekening_akuns',
            'tmsikd_satkers',
            'dari',
            'sampai'
        ));
    }

    public function api(Request $request)
    {
        $level_id = Properti_app::getlevel();
        if ($level_id == 3) {
            $satker_id = Auth::user()->sikd_satker_id;
        } else {
            $satker_id = $request->tmsikd_satker_id;
        }
        $where = [
            'tmrekening_akun_kelompok_jenis_objek_rincians.tmsikd_satkers_id' => $satker_id
        ];
        $data = Tmpendapatan::datatable($where);

        //$tahun_id = $request->tahun_id;
        $tmsikd_satker_id = $request->tmsikd_satker_id;
        $tgl_lapor = $request->tgl_lapor;

        // $tmrekening_akun_id = $request->tmrekening_akun_id;
        // $tmrekening_akun_kelompok_id = $request->tmrekening_akun_kelompok_id;
        
        // $tmrekening_akun_kelompok_jenis_id = $request->tmrekening_akun_kelompok_jenis_id;
        // $tmrekening_akun_kelompok_jenis_objek_id = $request->tmrekening_akun_kelompok_jenis_objek_id;

        // if ($tmrekening_akun_kelompok_jenis_objek_id != 0) {
        //     $data->where('tmrekening_akun_kelompok_jenis_objeks.id', '=', $tmrekening_akun_kelompok_jenis_objek_id);
        // }
        // if ($tmrekening_akun_kelompok_jenis_id != 0) {
        //     $data->where('tmrekening_akun_kelompok_jenis_objeks.tmrekening_akun_kelompok_jenis_id', '=', $tmrekening_akun_kelompok_jenis_id);
        // }

        if ($tmsikd_satker_id != '') {
            $data->where('tmrekening_akun_kelompok_jenis_objek_rincians.tmsikd_satkers_id', $tmsikd_satker_id);
        }

        //with satkerid
        if ($tgl_lapor != '') {
            $par = [
                'tgl_lapor' => $tgl_lapor,
                'satker_id' => $satker_id

            ];
        } else {
            $sekarang = Carbon::now()->format('Y-m-d');
            $par = [
                'tgl_lapor' => $sekarang,
                'satker_id' => $satker_id
            ];
        }

        $data->get();
        return DataTables::of($data)
        ->editColumn('id', function ($p) {
            return "<input type='checkbox' name='cbox[]' value='" . $p->id . "'/>";
        })
        ->editColumn('r_kd_rek_obj', function ($p) {
            return '<td><strong>' . $p->kd_rek_obj . '</strong></td><td>' . $p->nm_rek_obj . '</td></td><td></td><td align="right"></td><td></td><td></td>';
        })
        ->editColumn('kd_rek_rincian_obj', function ($p) {
            return "<a to='" . Url('pendapatan/pendapatandetail/' . $p->tmrekening_akun_kelompok_jenis_objek_rincian_id) . "' class='btn btn-primary btn-xs' id='detail' target='_self'>" . $p->kd_rek_rincian_obj . "</a>";
        })
        ->editColumn('tanggal_lapor',  function ($p) use ($par) {
            $tgl_lapor = $par['tgl_lapor'];
            $pad       = Tmpendapatan::where('tmpendapatan.tanggal_lapor', $tgl_lapor)
            ->where('tmrekening_akun_kelompok_jenis_objek_rincian_id', $p['tmrekening_akun_kelompok_jenis_objek_rincian_id'])
            ->first();

            return ($pad['tanggal_lapor']) ?  '<b>' . Properti_app::tgl_indo($pad->tanggal_lapor) . '</b>' : '<b>Kosong</b>';
        })
        ->editColumn('volume',  function ($p) use ($par) {
            $tgl_lapor = $par['tgl_lapor'];
            $pad       = Tmpendapatan::where('tanggal_lapor', $tgl_lapor)
            ->where('tmrekening_akun_kelompok_jenis_objek_rincian_id', $p['tmrekening_akun_kelompok_jenis_objek_rincian_id'])
            ->first();

            return ($pad['volume'] == 0 ? '' : Html_number::decimal($pad->volume));
        })
        ->editColumn('jumlah_lapor', function ($p) use ($par) {
            $tgl_lapor = $par['tgl_lapor'];
            $pad       = Tmpendapatan::where('tanggal_lapor', $tgl_lapor)
            ->where('tmrekening_akun_kelompok_jenis_objek_rincian_id', $p['tmrekening_akun_kelompok_jenis_objek_rincian_id'])
            ->first();

            return ($pad['jumlah']) ? Html_number::decimal($pad['jumlah']) : '<b>Kosong. </b>';
        })
        ->editColumn('action', function ($p) use ($par) { 

            $tgl_lapor  = $par['tgl_lapor'];
            $satker_id  = $par['satker_id'];
            //dd
            $rincian_id = $p->kd_rek_rincian_obj;  
            $pad = Tmpendapatan::where('tanggal_lapor', $tgl_lapor)
            
            ->where('tmrekening_akun_kelompok_jenis_objek_rincian_id', $p['tmrekening_akun_kelompok_jenis_objek_rincian_id'])
            ->first();

            if ($pad['tmrekening_akun_kelompok_jenis_objek_rincian_id'] == '') {   
                return '<a href="' . route('pendapatan.create', $rincian_id.'?satker_id='.$satker_id) . '" class="btn btn-danger btn-xs"><i class="fa fa-info fa-spin"></i>Belum Lapor </a>
                <br />
                <small>(Klik Tombol Untuk Lapor)</small>';
            } else {
                return '<a href="" class="btn btn-primary btn-xs" title="Silahkan Laporkan jumlah Pad"><i class="fa fa-check"></i>Sudah Lapor</a>';
            }
        })
        ->rawColumns(['id', 'r_kd_rek_obj', 'kd_rek_rincian_obj', 'jumlah_lapor', 'tanggal_lapor', 'action'])
        ->toJson();
    }


    function pendapatandetail($id)
    {
        //$id adalah rincian rekening pendpatan rincian
        $where = [
            'tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id' => $id
        ];
        $data  = Tmpendapatan::list()->where($where)->firstOrFail();

        $opd  = Tmopd::Where('kode', $data->tmsikd_satker_id)->first();
        return view($this->view . 'pendapatandetail', [
            'data' => $data,
            'pendapatan_id' => $id,
            'opd' => $opd
        ]);
    }

    public function create(Request $request, $id)
    {    // * 

        $title   = 'Laporan Pendapatan | ' . $this->title;
        $route   =  $this->route;
        $toolbar =  ['r', 'save'];
        // Validasi
        $satker_id = Auth::user()->sikd_satker_id;
        $level_id  = Properti_app::getlevel();
        if ($request->satker_id == '') return abort(403, 'Satuan kerja tidak bisa kosong');

        //jika akses satker berbeda 
        if ($satker_id == '' && $level_id != 3) {
            $satker_id = isset($request->tmsikd_satker_id) ? $request->tmsikd_satker_id : 0;
        } else {
            // if ($request->tmsikd_satker_id != $satker_id) {
            //     return abort(403, 'Akses tidak sesuai dengan satker id');
            // }
        }

        $tahuns  = Tmsikd_setup_tahun_anggaran::get();
        $tahun_active = Properti_app::getTahun();

        $nowdate          = strtotime("1 day", strtotime(date('Y-m-d')));
        $new_date         = date("Y-m-d", $nowdate);
        $dari             = date('Y-m-d');
        $sampai           = $new_date;

        $idrincian        = $request->id;

        if ($level_id == 3) {
            $fsatker_id = $satker_id;
        } else {
            $fsatker_id = $request->satker_id;
        }
        $whred  = [
            //id adalah jenis object rincian 
            'tmrekening_akun_kelompok_jenis_objek_rincians.kd_rek_rincian_obj'=> $id,
            'tmrekening_akun_kelompok_jenis_objek_rincians.tmsikd_satkers_id' => $fsatker_id 
        ];
        $kd_rek_obj = $id;
        $rekeningdatas = Tmpendapatan::getrekeningbySatker($whred)->first();
        return view($this->view . 'form_add', compact(
            'title',
            'tahun_active',
            'rekeningdatas',
            'kd_rek_obj',
            'route',
            'tahuns',
            'toolbar',
            'fsatker_id',
            'dari',
            'sampai'
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            // 'tmsikd_setup_tahun_anggaran_id' => 'required', 
            'tmsikd_satker_id'               => 'required'
        ]);

        $level_id      = Properti_app::getlevel();
        if ($level_id  == 3) {
            $satker_id = Auth::user()->sikd_satker_id;
        } else {
            $satker_id = $request->tmsikd_satker_id;
        }

        $cboxInput      = $request->cboxInput;
        $cboxInputVal   = $request->cboxInputVal;
        $cboxInputRinci = $request->cboxInputRinci;
        $kd_rekening    = $request->kd_rekening;
        $volume         = $request->volume;
        $satuan         = $request->satuan;
        $jumlah         = $request->jumlah;
        $harga          = $request->harga;
        $tanggal_lapor  = $request->tanggal_lapor;


        if ($cboxInput == null)
            return response()->json(['message' => "Tidak ada data list pendapatan yang dipilih."], 422);

        for ($i = 0; $i < count($cboxInput); $i++) {
            $key = $i;
            $sub_rek = ($cboxInputVal[$key]) ? $cboxInputVal[$key] : 0;
            Tmpendapatan::updateOrCreate([
                'tmrekening_akun_kelompok_jenis_objek_rincian_sub_id' => $sub_rek,
                'tmrekening_akun_kelompok_jenis_objek_rincian_id' => $cboxInputRinci[$key],
                'kd_rekening' => $kd_rekening[$key],
                'tmsikd_satker_id' => $satker_id,
                'volume' => $volume[$key],
                'satuan' => $satuan[$key],
                'jumlah' => $jumlah[$key],
                'harga'  => $harga[$key],
                'tanggal_lapor' => $tanggal_lapor
            ]);
        }

        return response()->json([
            'message' => "Data " . $this->title . " Berhasil Tersimpan"
        ]);
    }


    //edit data pendpatan 
    public function edit(Request $request, $id)
    {
        $title   = 'Editt data pendpatan';
        $route   =  $this->route;
        $toolbar =  ['r', 'save'];
        // Validasi
        $satker_id = Auth::user()->sikd_satker_id;
        $level_id  = Properti_app::getlevel();
        if ($request->satker_id == '') return abort(403, 'Satuan kerja tidak bisa kosong');


        //jika akses satker berbeda 
        if ($satker_id == '' && $level_id != 3) {
            $satker_id = isset($request->tmsikd_satker_id) ? $request->tmsikd_satker_id : 0;
        } else {
            // if ($request->tmsikd_satker_id != $satker_id) {
            //     return abort(403, 'Akses tidak sesuai dengan satker id');
            // }
        }
        $tmrekening_akuns = Tmrekening_akun::select('id', 'kd_rek_akun', 'nm_rek_akun')->get();
        $tahuns           = Tmsikd_setup_tahun_anggaran::select('id', 'tahun')->get();

        $t_active     = Tmsikd_setup_tahun_anggaran::where('active', 1)->get();
        $tahun_active = ($t_active->first()->active) ? $t_active->first()->active : 0;

        $tmsikd_satkers   =  Sikd_list_option::listSkpd()->whereNotIn('kode', 300202);
        $tmsikd_satker_id =  ($request->tmsikd_satker_id == '' ? $tmsikd_satkers->first()->id : $request->tmsikd_satker_id);

        $tmsikd_sub_skpds = Tmsikd_sub_skpd::select('id', 'kode', 'nama')->get();
        $tmsikd_bidangs   = Tmsikd_bidang::select('id', 'kd_bidang', 'nm_bidang')->get();
        $tmrapbds         = Tmrapbd::select('id', 'jenis')->get();

        // Sumber Anggaran
        $tmsikd_sumber_anggarans = Tmsikd_sumber_anggaran::select('id', 'kd_sumber_anggaran', 'nm_sumber_anggaran')->wheretmtype_anggaran_id(4)->get();

        $nowdate          = strtotime("1 day", strtotime(date('Y-m-d')));
        $new_date         = date("Y-m-d", $nowdate);
        $dari             = date('Y-m-d');
        $sampai           = $new_date;

        $idrincian        = $request->id;
        $tanggal_lapor    = $request->tanggal_lapor;
        //id adalah rekening obj rincian 
        $jumlahMax    = Tmpendapatan::select(\DB::raw('sum(jumlah) as total'))
        ->where('tmrekening_akun_kelompok_jenis_objek_rincian_id', $request->id)
        ->where('tanggal_lapor', $tanggal_lapor)
        ->first();

        $raction      = 'edit';
        $where_data   = [
            'tmrekening_akun_kelompok_jenis_objek_rincian_id' => $request->id,
        ];
        $rows   = Tmrekening_akun_kelompok_jenis_objek_rincian_sub::where($where_data)->first();
        if ($rows == '') {
            $row = Tmrekening_akun_kelompok_jenis_objek_rincian::where('kd_rek_rincian_obj', $request->id)->first();
        } else {
            $row = $rows;
        }
        $kd_rek_rincian_obj = $row['kd_rek_rincian_obj'];
        $nm_rek_rincian_obj = $row['nm_rek_rincian_obj'];
        $nmtitledit   = '[' . $kd_rek_rincian_obj . '] ' . $nm_rek_rincian_obj;

        $rincianid    = $request->id;
        $jumlahmax    = $jumlahMax['total'];
        $satkerid     = $request->satker_id;


        //opert variable daa 
        if ($level_id == 3) {
            $fsatker_id = $satker_id;
        } else {
            $fsatker_id = $request->satker_id;
        }
        $whred  = [
            'tmrekening_akun_kelompok_jenis_objek_rincians.tmsikd_satkers_id' => $fsatker_id
        ];
        $rekeningdatas = Tmpendapatan::getrekeningbySatker($whred)->first();

        return view($this->view . 'form_edit', compact(
            'title',
            'route',
            'toolbar',
            'rekeningdatas',
            'rincianid',
            'jumlahmax',
            'raction',
            'tahun_active',
            'tmsikd_satker_id',
            'tahuns',
            'nmtitledit',
            'satkerid',
            'tmrekening_akuns',
            'tmsikd_satkers',
            'dari',
            'sampai'
        ));
    }

    public function show($id)
    {
        // *
        $title   = 'Menampilkan | ' . $this->title;
        $route   = $this->route;
        $toolbar = ['r', 'u'];
        $where = ['tmrka_mata_anggarans.id' => $id];
        $r     = Tmrka::list($where)->firstOrFail();


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


    //get forim isian rincian ketika satker mengisi jumlah pendapatan pada app
    public function form_pendapatan(Request $request, $jenis_object)
    {
         //dd($jenis_object); 
        if ($request->satker_id == '') return abort(403, 'Satker tidak di temukan');

        $data      = Tmpendapatan::Where('tmrekening_akun_kelompok_jenis_objek_rincian_id', $request->pendapatanid)->first();
        $level_id  = Properti_app::getlevel();

        $rsatker_id = Auth::user()->sikd_satker_id;
        if ($rsatker_id == NULL || $rsatker_id == 0) {
            $fsatker_id = $request->satker_id;
        } else {
            $fsatker_id = $rsatker_id;
        }

        $cond = ['kd_rek_rincian_obj' => $jenis_object];
        $rekRincians = Tmrekening_akun_kelompok_jenis_objek_rincian::where($cond)
        ->select('id', 'kd_rek_rincian_obj', 'nm_rek_rincian_obj')
        ->get();
        $pendapatandata = $data;
        //model tmpendapatan 
        $tmpendapatan   = new Tmpendapatan;
        $rekrincian     = $rekRincians;
        $rekrincian_sub = new Tmrekening_akun_kelompok_jenis_objek_rincian_sub;

        return view(
            $this->view . 'form_pendapatan_add',
            compact(
                'pendapatandata',
                'tmpendapatan',
                'rekrincian',
                'rekrincian_sub'
            )
        );
    }

    //form pendapatan edit jika request data nya adlah edit 
    public function form_pendapatan_edit(Request $request, $jenis_object)
    {
        //dd($jenis_object); 
        if ($request->satker_id == '') return abort(403, 'Satker tidak di temukan');

        $data      = Tmpendapatan::Where('tmrekening_akun_kelompok_jenis_objek_rincian_id', $request->pendapatanid)->first();
        $level_id  = Properti_app::getlevel();

        $rsatker_id = Auth::user()->sikd_satker_id;
        if ($rsatker_id == NULL || $rsatker_id == 0) {
            $fsatker_id = $request->satker_id;
        } else {
            $fsatker_id = $rsatker_id;
        }

        $cond = ['kd_rek_rincian_obj' => $jenis_object];
        $rekRincians = Tmrekening_akun_kelompok_jenis_objek_rincian::where($cond)
        ->select('id', 'kd_rek_rincian_obj', 'nm_rek_rincian_obj')
        ->get();
        $pendapatandata = $data;
        //model tmpendapatan 
        $tmpendapatan   = new Tmpendapatan;
        $rekrincian     = $rekRincians;
        $rekrincian_sub = new Tmrekening_akun_kelompok_jenis_objek_rincian_sub;

        return view(
            $this->view . 'form_pendapatan_edit',
            compact(
                'pendapatandata',
                'tmpendapatan',
                'rekrincian',
                'rekrincian_sub'
            )
        );
    }

    public function destroy(Request $request)
    {
        if (is_array($request->id)) {
            Tmpendapatan::whereIn('id', $request->id)->delete();
        } else {
            $tmrka = Tmpendapatan::whereid($request->id)->firstOrFail();
            $tmrka->delete();
        }
        return ['message' => "Data " . $this->title . " berhasil dihapus."];
    }
}
