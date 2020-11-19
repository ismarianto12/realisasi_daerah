<?php


namespace App\Http\Controllers;

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
use App\Models\Tmrapbd;

use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek_rincian;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek_rincian_sub;

use App\Helpers\Properti_app;
use App\Libraries\List_pendapatan;
use App\Models\Tmopd;
use App\Models\Tmpenerimaan;
use Illuminate\Support\Carbon;


class PendapatanController extends Controller
{
    protected $route      = 'pendapatan.';
    protected $view       = 'pendapatan.pendapatan.';
    protected $title      = 'Pendapatan SKPD';
    protected $type       = "RKAPendapatan";
    protected $jdl        = "Pendapatan";
    public $tahun         = '';

    public function __construct()
    {
        $ftahun = Carbon::now()->format('Y');
        $tskrg  = Properti_app::tahun_sekarang();
        $tahun =  ($tskrg) ? $tskrg : $ftahun;
        $this->tahun = $tahun;
    }

    public function index(Request $request)
    {

        $title   = 'Entri Pendapatan  |' . $this->title;
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

        $tmsikd_satkers   =  Sikd_list_option::listSkpd();
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
        $data        = Tmpendapatan::datatable($satker_id)->get();
        $tgl_lapor = $request->tgl_lapor;

        $par = [
            'tgl_lapor' => $tgl_lapor,
            'level_id' => $level_id = Properti_app::getlevel(),
            'satker_id' => $satker_id

        ];
        return DataTables::of($data)
            ->editColumn('id', function ($p) use ($tgl_lapor) {
                return "<input type='checkbox' name='cbox[]' value='" . $p->kd_rek_rincian_obj . "' data-tgl_lapor= '" . $tgl_lapor . "'/>";
            })
            ->editColumn('r_kd_rek_obj', function ($p) {
                return '<td><strong>' . $p->kd_rek_obj . '</strong></td><td>' . $p->nm_rek_obj . '</td></td><td></td><td align="right"></td><td></td><td></td>';
            })
            ->editColumn('kd_rek_rincian_obj', function ($p) use ($tgl_lapor) {
                $rincian_id = $p['tmrekening_akun_kelompok_jenis_objek_rincian_id'];
                $tmsikd_satker_id = $p['tmsikd_satker_id'];

                return "<a to='" . Url('pendapatan/pendapatandetail/' . $rincian_id . '?rincian_id=' . $rincian_id . '&tgl_lapor=' . $tgl_lapor . '&tmsikd_satker_id=' . $tmsikd_satker_id) . "' class='btn btn-primary btn-xs' id='detail' target='_self'>" . $p->kd_rek_rincian_obj . "</a>";
            })
            ->editColumn('tanggal_lapor',  function ($p) use ($par) {

                $tgl_lapor = $par['tgl_lapor'];
                $pad       = Tmpendapatan::where('tanggal_lapor', $tgl_lapor);
                $pad->where('tmrekening_akun_kelompok_jenis_objek_rincian_id', $p['tmrekening_akun_kelompok_jenis_objek_rincian_id']);
                if ($par['level_id'] == 3) {
                    $pad->where('is_deleted', 0);
                } else {
                }
                $r = $pad->first();
                return ($r['tanggal_lapor']) ?  '<b>' . Properti_app::tgl_indo($r->tanggal_lapor) . '</b>' : '<b>Kosong</b>';
            })
            ->editColumn('volume',  function ($p) use ($par) {
                $tgl_lapor = $par['tgl_lapor'];
                $pad       = Tmpendapatan::where('tanggal_lapor', $tgl_lapor);
                $pad->where('tmrekening_akun_kelompok_jenis_objek_rincian_id', $p['tmrekening_akun_kelompok_jenis_objek_rincian_id']);
                if ($par['level_id'] == 3) {
                    $pad->where('is_deleted', 0);
                } else {
                }
                $r = $pad->first();
                return ($r['volume'] == 0 ? '' : Html_number::decimal($r['volume']));
            })
            ->editColumn('jumlah_lapor', function ($p) use ($par) {

                $tgl_lapor = $par['tgl_lapor'];
                $r   = Tmpendapatan::Select(\DB::raw('sum(jumlah) as tot_lapor'))
                    ->where('tanggal_lapor', $tgl_lapor)
                    ->where('tmrekening_akun_kelompok_jenis_objek_rincian_id', $p['tmrekening_akun_kelompok_jenis_objek_rincian_id'])
                    ->groupBy('tmrekening_akun_kelompok_jenis_objek_rincian_id')
                    ->first();

                return ($r['tot_lapor']) ? Html_number::decimal($r['tot_lapor']) : '<b>Kosong. </b>';
            })
            ->editColumn('action', function ($p) use ($par) {

                $tgl_lapor  = $par['tgl_lapor'];
                $satker_id  = $par['satker_id'];

                $rincian_id = $p->kd_rek_rincian_obj;

                $pad       = Tmpendapatan::where('tanggal_lapor', $tgl_lapor);
                $pad->where('tmrekening_akun_kelompok_jenis_objek_rincian_id', $p['tmrekening_akun_kelompok_jenis_objek_rincian_id']);
                if ($par['level_id'] == 3) {
                    $pad->where('is_deleted', 0);
                } else {
                }
                $r = $pad->first();
                if ($r['jumlah'] == '' || $r['jumlah'] == NULL) {
                    return '<a href="' . route('pendapatan.create', $rincian_id . '?satker_id=' . $satker_id . '&tgl=' . $tgl_lapor) . '" class="btn btn-danger btn-xs"><i class="fa fa-info fa-spin"></i>Belum Lapor </a>
                  <br />
                <small>(Klik Tombol Untuk Lapor)</small>
                <br />';
                } else {
                    return '<a href="" class="btn btn-primary btn-xs" title="Silahkan Laporkan jumlah Pad"><i class="fa fa-check"></i>Sudah Lapor</a>';
                }
            })
            ->rawColumns(['id', 'r_kd_rek_obj', 'kd_rek_rincian_obj', 'jumlah_lapor', 'tanggal_lapor', 'action'])
            ->toJson();
    }


    function pendapatandetail($id, Request $request)
    {
        //$id adalah rincian rekening pendpatan rincian
        $where = [
            'tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id' => $request->rincian_id,
            'tanggal_lapor' => $request->tgl_lapor
            // 'tmsikd_satker_id' => $request->tmsikd_satker_id
        ];
        $datas   = Tmpendapatan::where($where)->get();
        // $findopd = Tmpendapatan::where($where)->first();
        $opd     = Tmopd::where('kode', $request->tmsikd_satker_id)->first();

        $i = 0;
        foreach ($datas as $data) {
            $rkrinci = Tmrekening_akun_kelompok_jenis_objek_rincian::where('kd_rek_rincian_obj', $data['tmrekening_akun_kelompok_jenis_objek_rincian_id'])->first();
            $datar[$i]['kode_rek']['val'] = $data['tmrekening_akun_kelompok_jenis_objek_rincian_id'];
            $datar[$i]['nama_rek']['val'] = $rkrinci['nm_rek_rincian_obj'];
            $datar[$i]['jumlah']['val'] = ($data['jumlah'])  ? number_format($data['jumlah'], 0, 0, '.') : 0;
            $datar[$i]['tanggal_lapor']['val'] = $data['tanggal_lapor'];
            $i++;
            $rkrinci_sub = Tmrekening_akun_kelompok_jenis_objek_rincian_sub::where('tmrekening_akun_kelompok_jenis_objek_rincian_id', $data['tmrekening_akun_kelompok_jenis_objek_rincian_sub_id'])->get();
            foreach ($rkrinci_sub as $sub) {
                $insub   = Tmpendapatan::where(
                    'tmrekening_akun_kelompok_jenis_objek_rincian_id',
                    $sub['kd_rek_rincian_objek_sub']
                )->first();

                $datar[$i]['kode_rek']['val'] = $sub['kd_rek_rincian_objek_sub'];
                $datar[$i]['nama_rek']['val'] = $sub['nm_rek_rincian_objek_sub'];
                $datar[$i]['jumlah']['val'] = ($insub['jumlah'])  ? number_format($insub['jumlah'], 0, 0, '.') : 0;
                $datar[$i]['tanggal_lapor']['val'] = $insub['tanggal_lapor'];
                $i++;
            }
        }
        $fdata = isset($datar) ? $datar : 0;
        if ($fdata != 0) {
            $hasdata =  $datar;
        } else {
            $hasdata =  0;
        }

        return view($this->view . 'pendapatandetail', [
            'tmsikd_satker_id' => $request->tmsikd_satker_id,
            'datas' => $hasdata,
            'pendapatan_id' => $request->rincian_id,
            'tanggal_lapor' => $request->tgl_lapor,
            'opd' => $opd
        ]);
    }

    public static function showlistpad($rekening_kelobj, $fsatker_id)
    {

        $idx = 0;
        $rek_kelompoks = Tmrekening_akun_kelompok_jenis_objek::where('kd_rek_obj', $rekening_kelobj)->get();
        foreach ($rek_kelompoks as $rek_kelompok) {
            $dataset[$idx]['kode_rek']['val']  = $rek_kelompok['kd_rek_obj'];
            $dataset[$idx]['nm_rekening']['val']  =   $rek_kelompok['nm_rek_obj'];
            $dataset[$idx]['keterangan']['val'] =   'Kelompok rekening';
            $idx++;

            $cond = [
                'tmrekening_akun_kelompok_jenis_objek_id' => $rekening_kelobj,
            ];
            $rekening_rincians = Tmrekening_akun_kelompok_jenis_objek_rincian::where($cond)
                ->where(\DB::raw('LOCATE(' . $fsatker_id . ',tmrekening_akun_kelompok_jenis_objek_rincians.tmsikd_satkers_id)'), '>', 0)
                ->select('id', 'kd_rek_rincian_obj', 'nm_rek_rincian_obj')
                ->groupby('tmrekening_akun_kelompok_jenis_objek_rincians.id')
                ->get();

            foreach ($rekening_rincians as $data) {
                $rekening_sub_rinci = Tmrekening_akun_kelompok_jenis_objek_rincian_sub::where(\DB::raw('LOCATE(' . $fsatker_id . ',tmsikd_satkers_id)'), '>', 0)
                    ->where('tmrekening_akun_kelompok_jenis_objek_rincian_id', $data['kd_rek_rincian_obj'])
                    ->get();
                // check income by rincian object rekenign  pendapatan 

                $dataset[$idx]['kode_rek']['val']  = $data['kd_rek_rincian_obj'];
                $dataset[$idx]['nm_rekening']['val']  =   $data['nm_rek_rincian_obj'];
                $dataset[$idx]['keterangan']['val'] =   'Rekening Rincian Object';
                $idx++;
                foreach ($rekening_sub_rinci as $data_sub) {
                    $dataset[$idx]['kode_rek']['val']              = $data_sub['kd_rek_rincian_objek_sub'];
                    $dataset[$idx]['nm_rekening']['val']              = $data_sub['nm_rek_rincian_objek_sub'];
                    $dataset[$idx]['keterangan']['val']          = "Rekening Sub Rincian Object";
                    $idx++;
                }
            }
        }
        return $dataset;
    }

    public function create(Request $request, $id)
    {    // * 


        $title   = 'Laporan Pendapatan | ' . $this->title;
        $route   =  $this->route;
        $toolbar =  ['r', 'save'];
        // Validasi
        $satker_id = Auth::user()->sikd_satker_id;
        $level_id  = Properti_app::getlevel();
        if ($request->satker_id == '' || $request->tgl == '') return abort(403, 'Paramter Salahsilahkan kembali pada halaman sebelumnya  : ' . md5('ismarianto'));

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
        $tgl_lapor        = $request->tgl;


        if ($level_id == 3) {
            $fsatker_id = $satker_id;
        } else {
            $fsatker_id = $request->satker_id;
        }
        $whre  = [
            //id adalah jenis object rincian 
            'tmrekening_akun_kelompok_jenis_objek_rincians.kd_rek_rincian_obj' => $id,
        ];
        $kd_rek_obj     = $id;
        $rekeningdatas  = Tmpendapatan::getrekeningbySatker($whre)->where(\DB::raw('LOCATE(' . $fsatker_id . ',tmrekening_akun_kelompok_jenis_objek_rincians.tmsikd_satkers_id)'), '>', 0)->first();
        $jam            = Carbon::now()->format('H:i:s');

        $action       =  route($this->route . 'store');
        $method_field =  method_field('post');

        $getkelompok  = Tmrekening_akun_kelompok_jenis_objek_rincian::where('kd_rek_rincian_obj', $id)->first();

        $rekenings = self::showlistpad($getkelompok['tmrekening_akun_kelompok_jenis_objek_id'], $fsatker_id);

        $tahun_ang  = $this->tahun;


        return view($this->view . 'form_add', compact(
            'action',
            'method_field',
            'title',
            'tahun_active',
            'rekeningdatas',
            'jam',
            'tahun_ang',
            'rekenings',
            'tgl_lapor',
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
            'tmsikd_satker_id' => 'required',
            'cboxInputRinci' => 'required',
            'tanggal_lapor'    => 'required'
        ]);

        $ftahun = Carbon::now()->format('Y');
        $tskrg  = Properti_app::tahun_sekarang();
        $tahun =  ($tskrg) ? $tskrg : $ftahun;

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

        $kd_rekening_sub   = $request->kd_rekening_sub;
        $volume            = $request->volume;
        $satuan            = $request->satuan;
        $jumlah            = $request->jumlah;
        $harga             = $request->harga;
        $tanggal_lapor     = $request->tanggal_lapor;


        if ($cboxInput == null)
            return response()->json(['message' => "Tidak ada data list pendapatan yang dipilih."], 422);

        for ($i = 0; $i < count($cboxInput); $i++) {
            $key = $i;
            $sub_rek = ($kd_rekening_sub[$key]) ? $kd_rekening_sub[$key] : 0;
            $rincian_id = ($cboxInputRinci[$key]) ? $cboxInputRinci[$key] : 0;
            Tmpendapatan::updateOrCreate([
                'tmrekening_akun_kelompok_jenis_objek_rincian_sub_id' => $sub_rek,
                'tmrekening_akun_kelompok_jenis_objek_rincian_id' => $rincian_id,
                'kd_rekening' => $cboxInputRinci[$key],
                'tmsikd_satker_id' => $satker_id,
                'volume' => $volume[$key],
                'satuan' => $satuan[$key],
                'jumlah' => $jumlah[$key],
                'tanggal_lapor' => $tanggal_lapor,
                'is_deleted' => 0,
                'tahun' => $tahun
            ]);
        }
        return response()->json([
            'message' => "Data " . $this->title . " Berhasil Tersimpan"
        ]);
    }


    //edit data pendpatan 
    public function edit(Request $request, $id)
    {
        $title   = 'Edit data pendapatan daerah';
        $route   =  $this->route;
        $toolbar =  ['r', 'save'];
        // Validasi
        $satker_id = Auth::user()->sikd_satker_id;
        $level_id  = Properti_app::getlevel();
        if ($request->satker_id == '' || $request->tgl == '') return abort(403, 'Paramter Salahsilahkan kembali pada halaman sebelumnya  : ' . md5('ismarianto'));

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

        $tgl_lapor        = $request->tgl;
        $jam              = Carbon::now()->format('s:i:s');
        $tahun_ang        = $this->tahun;
        $action       =  route($this->route . 'update', $id);
        // $method_field =  method_field('put');
        $id           =  $id;
        //get list information detail as views blde;
        $getkelompok  = Tmrekening_akun_kelompok_jenis_objek_rincian::where('kd_rek_rincian_obj', $id)->first();
        $rekenings = $this->showlistpad($getkelompok['tmrekening_akun_kelompok_jenis_objek_id'], $fsatker_id);
        // dd($getkelompok['tmrekening_akun_kelompok_jenis_objek_id']);

        return view($this->view . 'form_edit', compact(
            'title',
            'route',
            'action',
            //'method_field',
            'toolbar',
            'rekeningdatas',
            'rekenings',
            'rincianid',
            'jumlahmax',
            'tgl_lapor',
            'raction',
            'jam',
            'tahun_active',
            'tmsikd_satker_id',
            'tahuns',
            'tahun_ang',
            'nmtitledit',
            'fsatker_id',
            'satkerid',
            'tmrekening_akuns',
            'tmsikd_satkers',
            'dari',
            'sampai',
            'id'
        ));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'tmsikd_satker_id' => 'required',
            'cboxInputRinci' => 'required',
            'tanggal_lapor'    => 'required'
        ]);

        $ftahun = Carbon::now()->format('Y');
        $tskrg  = Properti_app::tahun_sekarang();
        $tahun =  ($tskrg) ? $tskrg : $ftahun;

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

        $kd_rekening_sub   = $request->kd_rekening_sub;
        $volume            = $request->volume;
        $satuan            = $request->satuan;
        $jumlah            = $request->jumlah;
        $harga             = $request->harga;
        $tanggal_lapor     = $request->tanggal_lapor;


        if ($cboxInput == null)
            return response()->json(['message' => "Tidak ada data list pendapatan yang dipilih."], 422);

        for ($i = 0; $i < count($cboxInput); $i++) {
            $key = $i;
            $sub_rek = ($kd_rekening_sub[$key]) ? $kd_rekening_sub[$key] : 0;
            $rincian_id = ($cboxInputRinci[$key]) ? $cboxInputRinci[$key] : 0;

            $where = [
                'tmpendapatan.tanggal_lapor' => $request->tanggal_lapor,
                'tmrekening_akun_kelompok_jenis_objek_rincian_id' => $id
            ];
            Tmpendapatan::where($where)->update([
                'tmrekening_akun_kelompok_jenis_objek_rincian_sub_id' => $sub_rek,
                'tmrekening_akun_kelompok_jenis_objek_rincian_id' => $rincian_id,
                'kd_rekening' => $cboxInputRinci[$key],
                'tmsikd_satker_id' => $satker_id,
                'volume' => $volume[$key],
                'satuan' => $satuan[$key],
                'jumlah' => $jumlah[$key],
                'tanggal_lapor' => $tanggal_lapor,
                'is_deleted' => 0,
                'tahun' => $tahun
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
    public function form_pendapatan(Request $request, $id)
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

        $cond = [
            'kd_rek_rincian_obj' => $id,
        ];

        $pendapatandata = $data;
        //model tmpendapatan 
        $tmpendapatan   = new Tmpendapatan;
        $rekrincian_sub = new Tmrekening_akun_kelompok_jenis_objek_rincian_sub;

        $idx = 0;
        $rekening_rincians = Tmrekening_akun_kelompok_jenis_objek_rincian::where($cond)
            ->where(\DB::raw('LOCATE(' . $fsatker_id . ',tmrekening_akun_kelompok_jenis_objek_rincians.tmsikd_satkers_id)'), '>', 0)
            ->select('id', 'kd_rek_rincian_obj', 'nm_rek_rincian_obj')
            ->groupby('tmrekening_akun_kelompok_jenis_objek_rincians.id')
            ->get();

        foreach ($rekening_rincians as $data) {
            $rekening_sub_rinci = Tmrekening_akun_kelompok_jenis_objek_rincian_sub::where(\DB::raw('LOCATE(' . $fsatker_id . ',tmsikd_satkers_id)'), '>', 0)
                ->where('tmrekening_akun_kelompok_jenis_objek_rincian_id', $data['kd_rek_rincian_obj'])
                ->get();
            // check income by rincian object rekenign  pendapatan 
            $income = Tmpendapatan::where([
                'tmrekening_akun_kelompok_jenis_objek_rincian_id' => $data['kd_rek_rincian_obj'],
                'tahun' => $this->tahun,
            ])->first();

            $dataset[$idx]['kd_rek']['val']  = $data['kd_rek_rincian_obj'];
            $dataset[$idx]['nm_rek']['val']  =   $data['nm_rek_rincian_obj'];
            $dataset[$idx]['kd_rek_rincian_obj']['val'] =   $data['kd_rek_rincian_obj'];
            $dataset[$idx]['kd_rincian_sub']['val'] =  null;
            $dataset[$idx]['style']['val'] = '';

            $dataset[$idx]['rvolume']['val']  = $income['volume'];
            $dataset[$idx]['rsatuan']['val']  = $income['satuan'];
            $dataset[$idx]['jumlah']['val']   = $income['jumlah'];
            $idx++;
            foreach ($rekening_sub_rinci as $data_sub) {
                $income_sub = Tmpendapatan::where([
                    'tmrekening_akun_kelompok_jenis_objek_rincian_sub_id' => $data_sub['kd_rek_rincian_objek_sub'],
                    'tahun' => $this->tahun,
                ])->first();

                $dataset[$idx]['kd_rek']['val']              = $data_sub['kd_rek_rincian_objek_sub'];
                $dataset[$idx]['nm_rek']['val']              = $data_sub['nm_rek_rincian_objek_sub'];
                $dataset[$idx]['kd_rek_rincian_obj']['val']  = $data['kd_rek_rincian_obj'];
                $dataset[$idx]['kd_rincian_sub']['val']      = $data_sub['kd_rek_rincian_objek_sub'];
                $dataset[$idx]['style']['val']               = '';

                $dataset[$idx]['rvolume']['val']             = $income_sub['volume'];
                $dataset[$idx]['rsatuan']['val']             = $income_sub['satuan'];
                $dataset[$idx]['jumlah']['val']              = $income_sub['jumlah'];
                $idx++;
            }
        }
        $rdataset =  isset($dataset) ? $dataset : 0;
        if ($rdataset != 0) {
            $fdataset = $dataset;
        } else {
            $fdataset = 0;
        }
        return view(
            $this->view . 'form_pendapatan_add',
            compact(
                'fdataset',
                'pendapatandata',
                'tmpendapatan',
                'rekrincian_sub'
            )
        );
    }

    //form pendapatan edit jika request data nya adlah edit 
    public function form_pendapatan_edit($jenis_object, Request $request)
    {
        // dd($this->tahun); 
        if ($request->satker_id == '') return abort(403, 'Satker tidak di temukan');
        $data      = Tmpendapatan::Where('tmrekening_akun_kelompok_jenis_objek_rincian_id', $request->pendapatanid)->first();
        $level_id  = Properti_app::getlevel();

        $rsatker_id = Auth::user()->sikd_satker_id;
        if ($rsatker_id == NULL || $rsatker_id == 0) {
            $fsatker_id = $request->satker_id;
        } else {
            $fsatker_id = $rsatker_id;
        }

        $cond = [
            'kd_rek_rincian_obj' => $jenis_object,
        ];
        $pendapatandata = $data;
        //model tmpendapatan 
        $tmpendapatan   = new Tmpendapatan;
        $rekrincian_sub = new Tmrekening_akun_kelompok_jenis_objek_rincian_sub;

        $idx = 0;
        $rekening_rincians = Tmrekening_akun_kelompok_jenis_objek_rincian::where($cond)
            ->where(\DB::raw('LOCATE(' . $fsatker_id . ',tmrekening_akun_kelompok_jenis_objek_rincians.tmsikd_satkers_id)'), '>', 0)
            ->select('id', 'kd_rek_rincian_obj', 'nm_rek_rincian_obj')
            ->groupby('tmrekening_akun_kelompok_jenis_objek_rincians.id')
            ->get();

        foreach ($rekening_rincians as $data) {
            $rekening_sub_rinci = Tmrekening_akun_kelompok_jenis_objek_rincian_sub::where(\DB::raw('LOCATE(' . $fsatker_id . ',tmsikd_satkers_id)'), '>', 0)
                ->where('tmrekening_akun_kelompok_jenis_objek_rincian_id', $data['kd_rek_rincian_obj'])
                ->get();
            // check income by rincian object rekenign  pendapatan 
            $income = Tmpendapatan::where([
                'tmrekening_akun_kelompok_jenis_objek_rincian_id' => $jenis_object,
                'tahun' => $this->tahun,
                'tanggal_lapor' => $request->tanggal_lapor
            ])->first();

            $dataset[$idx]['kd_rek']['val']  = $data['kd_rek_rincian_obj'];
            $dataset[$idx]['nm_rek']['val']  =   $data['nm_rek_rincian_obj'];
            $dataset[$idx]['kd_rek_rincian_obj']['val'] =   $data['kd_rek_rincian_obj'];
            $dataset[$idx]['kd_rincian_sub']['val'] =  null;
            $dataset[$idx]['style']['val'] = '';

            $dataset[$idx]['rvolume']['val']  = $income['volume'];
            $dataset[$idx]['rsatuan']['val']  = $income['satuan'];
            $dataset[$idx]['jumlah']['val']   = $income['jumlah'];
            $idx++;
            foreach ($rekening_sub_rinci as $data_sub) {
                $income_sub = Tmpendapatan::where([
                    'tmrekening_akun_kelompok_jenis_objek_rincian_sub_id' => $data_sub['kd_rek_rincian_objek_sub'],
                    'tahun' => $this->tahun,
                    'tanggal_lapor' => $request->tanggal_lapor
                ])->first();

                $dataset[$idx]['kd_rek']['val']              = $data_sub['kd_rek_rincian_objek_sub'];
                $dataset[$idx]['nm_rek']['val']              = $data_sub['nm_rek_rincian_objek_sub'];
                $dataset[$idx]['kd_rek_rincian_obj']['val']  = $data['kd_rek_rincian_obj'];
                $dataset[$idx]['kd_rincian_sub']['val']      = $data_sub['kd_rek_rincian_objek_sub'];
                $dataset[$idx]['style']['val']               = '';

                $dataset[$idx]['rvolume']['val']             = $income_sub['volume'];
                $dataset[$idx]['rsatuan']['val']             = $income_sub['satuan'];
                $dataset[$idx]['jumlah']['val']              = $income_sub['jumlah'];
                $idx++;
            }
        }
        $rdataset =  isset($dataset) ? $dataset : 0;
        if ($rdataset != 0) {
            $fdataset = $dataset;
        } else {
            $fdataset = 0;
        }
        return view(
            $this->view . 'form_pendapatan_edit',
            compact(
                'fdataset',
                'pendapatandata',
                'tmpendapatan',
                'rekrincian_sub'
            )
        );
    }

    public function dapatkanpadopd(Request $request, $id)
    {
        $level_id     = Properti_app::getlevel();
        if ($level_id == 3) {
            $satkerid = Auth::user()->sikd_satker_id;
        } else {
            $satkerid  = $id;
        }
        $tmopd        = Tmopd::where('kode', $id)->firstOrfail();
        $satker_kd    = $tmopd['kode'];
        $satkernm     = $tmopd['n_opd'];

        // dd($request->tanggal_lapor);

        if ($request->tanggal_lapor != '') {
            $sekarang = $request->tanggal_lapor;
        } else {
            $sekarang     = Carbon::now()->format('Y-m-d');
        }
        // query data form reekning get count of money all by opd
        $where    = ['tmrekening_akun_kelompok_jenis_objek_rincians.tmsikd_satkers_id' => $satkerid];
        //by jenis 
        $jeniss = Tmpendapatan::getrekeningbySatker([])
            ->where(\DB::raw('FIND_IN_SET(' . $satkerid . ',tmrekening_akun_kelompok_jenis_objek_rincians.tmsikd_satkers_id)'), '>', 0)
            ->groupBy('kd_rek_jenis')->get();
        $idx    = 0;
        //get pagu total from type by accout object 

        foreach ($jeniss as $jenis) {
            $dataset[$idx]['kd_rek']['val']       = $jenis['kd_rek_jenis'];
            $dataset[$idx]['nm_rek']['val']       = $jenis['nm_rek_jenis'];
            $dataset[$idx]['persen']['val']       = 0;
            $dataset[$idx]['bold']['val']         = true;
            $dataset[$idx]['lapor']['val']        = '';
            $idx++;
            //by kelompok jenis obj    
            $rek_objs = Tmpendapatan::getrekeningbySatker([])
                ->where(\DB::raw('LOCATE(' . $satkerid . ',tmrekening_akun_kelompok_jenis_objek_rincians.tmsikd_satkers_id)'), '>', 0)
                ->where('tmrekening_akun_kelompok_jenis_objeks.tmrekening_akun_kelompok_jenis_id', $jenis['kd_rek_jenis'])
                ->groupBy('tmrekening_akun_kelompok_jenis_objeks.kd_rek_obj')
                ->get();
            foreach ($rek_objs as $rek_obj) {
                $dataset[$idx]['kd_rek']['val']       = $rek_obj['kd_rek_obj'];
                $dataset[$idx]['nm_rek']['val']       = $rek_obj['nm_rek_obj'];
                $dataset[$idx]['lapor']['val']        = '';
                $dataset[$idx]['bold']['val']         = true;
                $idx++;
                //by kelompok jenis rincian obj   
                for ($a = 0; $a <= 2; $a++) {
                    $hasil[] =  $satkerid;
                }
                $explode  = implode(',', $hasil);
                // dd($rek_obj);
                $rincians = Tmpendapatan::getrekeningbySatker([])
                    ->where(\DB::raw('LOCATE(' . $satkerid . ',tmrekening_akun_kelompok_jenis_objek_rincians.tmsikd_satkers_id)'), '>', 0)
                    ->where('tmrekening_akun_kelompok_jenis_objek_id', $rek_obj['kd_rek_obj'])
                    ->groupBy('tmrekening_akun_kelompok_jenis_objek_rincians.kd_rek_rincian_obj')
                    ->get();
                foreach ($rincians as $rincian) {
                    $incomedet = Tmpendapatan::where([
                        'tmrekening_akun_kelompok_jenis_objek_rincian_id' => $rek_obj['kd_rek_rincian_obj'],
                        'tanggal_lapor' => $sekarang
                    ])
                        ->where('tmrekening_akun_kelompok_jenis_objek_rincian_id', '!=', 0)
                        ->first();

                    if ($rincian['kd_rek_rincian_obj'] == $incomedet['tmrekening_akun_kelompok_jenis_objek_rincian_id']) {
                        $lapor     = ($incomedet['jumlah']) ? '<a class="btn btn-primary">' . number_format($incomedet['jumlah'], 0, 0, '.') . '</a>' : '<a class="btn btn-danger">Belum Lapor</a>';
                    } else {
                        $lapor = '<a class="btn btn-danger">Belum Lapor</a>';
                        //get subrincian rek  
                    }
                    $dataset[$idx]['kd_rek']['val']        = $rincian['kd_rek_rincian_obj'];
                    $dataset[$idx]['nm_rek']['val']        = $rincian['nm_rek_rincian_obj'];

                    $dataset[$idx]['lapor']['val']        = $lapor;
                    $dataset[$idx]['bold']['val']         = false;
                    $idx++;
                    //by kelompok jenis object rincian sub   

                    // dd($rincian); 
                    $rincian_subs = Tmpendapatan::getrekeningbySatker([])
                        ->where(\DB::raw('LOCATE(' . $satkerid . ',tmrekening_akun_kelompok_jenis_objek_rincians.tmsikd_satkers_id)'), '>', 0)
                        ->where('tmrekening_akun_kelompok_jenis_objek_id', $rincian['kd_rek_rincian_obj'])
                        ->groupBy('kd_rek_rincian_obj')
                        ->get();
                    foreach ($rincian_subs as $rincian_obj_sub) {
                        $incomedetsub = Tmpendapatan::where([
                            'tmrekening_akun_kelompok_jenis_objek_rincian_sub_id' => $rek_obj['kd_rek_rincian_objek_sub'],
                            'tanggal_lapor' => $sekarang
                        ])
                            ->where('tmrekening_akun_kelompok_jenis_objek_rincian_sub_id', '!=', 0)
                            ->first();
                        if ($rincian_obj_sub['kd_rek_rincian_objek_sub'] == $incomedetsub['tmrekening_akun_kelompok_jenis_objek_rincian_sub_id']) {
                            $laporsub     = ($incomedetsub['jumlah']) ? '<a class="btn btn-primary btn-xs">' . number_format($incomedetsub['jumlah'], 0, 0, '.') . '</a>' : '<a class="btn btn-danger">Belum Lapor</a>';
                        } else {
                            $laporsub    =  '<a class="btn btn-danger">Belum Lapor</a>';
                        }
                        $dataset[$idx]['kd_rek']['val']       = $rincian_obj_sub['kd_rek_rincian_objek_sub'];
                        $dataset[$idx]['nm_rek']['val']       = $rincian_obj_sub['nm_rek_rincian_objek_sub'];
                        $dataset[$idx]['lapor']['val']        = $laporsub;
                        $dataset[$idx]['bold']['val']         = false;
                        $idx++;
                    }
                }
            }
        }
        // if result is null then show response message bellow
        $result = isset($dataset) ? $dataset : 0;
        if ($result != 0) {
            $dataset;
        } else {
            $dataset = '';
        }
        // dd($dataset);

        return view($this->view . 'detailpadopd', compact(
            'sekarang',
            'satker_kd',
            'dataset',
            'satkernm',
            'tmopd'
        ));
    }

    public function destroy(Request $request)
    {
        $level_id = Properti_app::getlevel();
        $sekarang = Carbon::now()->format('Y-m-d');
        $lewats   =  date($sekarang, strtotime('-1 day'));

        // 
        $tanggal_lapor  =  $request->tgl_lapor;
        // dd($tanggal_lapor);

        if (is_array($request->id)) {
            // try {
            $data = Tmpendapatan::whereIn('tmrekening_akun_kelompok_jenis_objek_rincian_id', $request->id)
                ->where('tanggal_lapor', $tanggal_lapor)
                ->delete();
            if ($data) {
                return response()->json(
                    ['message' => "Data " . $this->title . " data berhasil di hapus."]
                );
            } else {
                return response()->json([
                    'message' => 'data gagal di hapus '
                ]);
            }

            // } catch (\Throwable $th) {
            //     return response()->json(
            //         ['message' => "Data " . $this->title . " data gagal di hapus."]
            //     );
            // }

            // return 
            // if ($level_id == 3) {
            //     $check = Tmpendapatan::where([
            //         'tanggal_lapor' => $lewats,
            //         'id' => $request->id
            //     ]);
            //     if ($check > 0) {
            //         return ['message' => "Pelaporan PAD gagal di hapus karena sudah melewati masa penghapusan silahkan edit jika ada kesalahan."];
            //     } else {
            //         Tmpendapatan::whereIn('id', $request->id)->delete();
            //         return ['message' => "Data " . $this->title . " berhasil dihapus."];
            //     }
            // } else {
            //     Tmpendapatan::whereIn('id', $request->id)->delete();
            //     return ['message' => "Data " . $this->title . " berhasil dihapus."];
            // }
        } else {
            return response()->json(['message' => "Data Bukan Array Gays"]);
        }
    }
}
