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
        // dd(Auth::user()->sikd_satker_id);

        $title   = 'Laporan Pendapatan | ' . $this->title;
        $route   =  $this->route;
        $toolbar =  ['r', 'd', 'c'];
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
        //dd($tahuns);
        return view($this->view . 'index', compact(
            'title',
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
        $data = Tmpendapatan::list();

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
            $data->where('tmpendapatan.tanggal_lapor', '>=', $dari);
        }
        if ($sampai != '') {
            $data->where('tmpendapatan.tanggal_lapor', '<=', $sampai);
        }
        if ($tmsikd_satker_id != '') {
            $data->where('tmpendapatan.tmsikd_satker_id', $tmsikd_satker_id);
        }
        //end satker
        if ($tmsikd_satker_id == 0 || $tmsikd_satker_id == NULL) {
            $filldata = $data->where('tmpendapatan.tmsikd_satker_id', NULL);
        } else {
            $filldata = $data->get();
        }
        return DataTables::of($filldata)
            ->editColumn('id', function ($p) {
                return "<input type='checkbox' name='cbox[]' value='" . $p->id . "'/>";
            })
            ->editColumn('kd_rek_rincian_obj', function ($p) {
                return "<a to='" . route($this->route . 'pendapatandetail', $p->tmrekening_akun_kelompok_jenis_objek_rincian_id) . "' class='btn btn-primary btn-xs' id='detail' target='_self'>" . $p->kd_rek_rincian_obj . "</a>";
            })
            ->editColumn('tanggal_lapor', function ($p) {
                return ($p->tanggal_lapor) ?  '<b>' . Properti_app::tgl_indo($p->tanggal_lapor) . '</b>' : '<b>Kosong</b>';
            })
            ->editColumn('volume', function ($p) {
                return ($p->volume == 0 ? '' : Html_number::decimal($p->volume));
            })
            ->editColumn('jumlah', function ($p) {
                return Html_number::decimal($p->jumlah);
            })
            ->rawColumns(['id', 'kd_rek_rincian_obj', 'tanggal_lapor'])
            ->toJson();
    }


    function pendapatandetail($id)
    {
        //$id adalah rincian rekening pendpatan rincian
        $where = [
            'tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id' => $id
        ];
        $data  = Tmpendapatan::list()->where($where)->firstOrFail();
        // $nilobj              = substr($data[''])
        // $rj_object           = Tmpendapatan::select(\DB::raw('sum(jumlah) as totak_robject'))
        //                         ->where(\DB::raw('SUBSTR(tmrekening_akun_kelompok_jenis_objek_rincian_id,1,5)'),$) 

        // $jml_rek_rincian_obj = '';
        // $jml_rek_obj         =  '';
        // $jml_rek_jenis       =  ''; 

        $opd  = Tmopd::Where('kode', $data->tmsikd_satker_id)->first();
        return view($this->view . 'pendapatandetail', [
            'data' => $data,
            'pendapatan_id' => $id,
            'opd' => $opd,
        ]);
    }

    public function create(Request $request)
    {    // * 

        $title   = 'Laporan Pendapatan | ' . $this->title;
        $route   =  $this->route;
        $toolbar =  ['r', 'save'];
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

        $nowdate          = strtotime("1 day", strtotime(date('Y-m-d')));
        $new_date         = date("Y-m-d", $nowdate);
        $dari             = date('Y-m-d');
        $sampai           = $new_date;

        $idrincian        = $request->id;
        //id adalah rekening obj rincian 
        if ($idrincian != '') {
            $jumlahMax    = Tmpendapatan::select(\DB::raw('sum(jumlah) as total'))
                ->where('tmrekening_akun_kelompok_jenis_objek_rincian_id', $request->id)
                ->first();

            $raction      = 'edit';
            $where_data   = [
                'tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id' => $request->id,
            ];
            $row   = Tmpendapatan::getpadbyrekrinci($where_data)->first();

            $kd_rek_rincian_obj = $row['kd_rek_rincian_obj'];
            $nm_rek_rincian_obj = $row['nm_rek_rincian_obj'];
            $nmtitledit   = '['.$kd_rek_rincian_obj.'] ' . $nm_rek_rincian_obj;

            $rincianid    = $request->id;
            $jumlahmax    = $jumlahMax['total'];
            $satkerid     = $request->satker_id;
        } else {
            $raction      = 'add';
            $jumlahmax    = '';
            $rincianid    = '';
            $satkerid     = '';
            $infodetail   = '';
            $nmtitledit   = '';
        }

        return view($this->view . 'form_add', compact(
            'title',
            'route',
            'toolbar',
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

    public function edit(Request $request, $id)
    {
        return redirect(route('pendapatan.create', 'id=' . $id . '&satker_id=' . $request->satker_id));
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
        //def level 
        $level_id  = Properti_app::getlevel();

        $rsatker_id = Auth::user()->sikd_satker_id;
        if ($rsatker_id == NULL || $rsatker_id == 0) {
            $fsatker_id = $request->satker_id;
        } else {
            $fsatker_id = $rsatker_id;
        }

        $cond['tmrekening_akun_kelompok_jenis_objek_id'] = $jenis_object;

        $tanggal_sekarang = date('Y-m-d');
        $notIn = Tmpendapatan::wheretanggal_lapor($tanggal_sekarang)
            ->select('id', 'tmrekening_akun_kelompok_jenis_objek_rincian_sub_id')
            ->pluck('tmrekening_akun_kelompok_jenis_objek_rincian_sub_id')
            ->toArray();

        $satker['tmsikd_satkers_id']  = $fsatker_id;
        if (empty($cond['tmrekening_akun_kelompok_jenis_objek_id'])) {
            $rekRincians = Tmrekening_akun_kelompok_jenis_objek_rincian::where($satker)
                ->select('id', 'kd_rek_rincian_obj', 'nm_rek_rincian_obj')
                ->get();
        } else {
            $mcond = array_merge($satker, $cond);
            $rekRincians = Tmrekening_akun_kelompok_jenis_objek_rincian::where($mcond)
                ->select('id', 'kd_rek_rincian_obj', 'nm_rek_rincian_obj')
                ->get();
        }
        // }

        $idx = 0;
        $dataSet = [];
        foreach ($rekRincians as $key => $rekRincian) {
            $rekSubcheck = Tmrekening_akun_kelompok_jenis_objek_rincian_sub::where('tmrekening_akun_kelompok_jenis_objek_rincian_id', $rekRincian->id)
                ->select('id', 'kd_rek_rincian_objek_sub', 'nm_rek_rincian_objek_sub')
                ->first();

            if ($rekRincian['kd_rek_rincian_obj'] == $rekSubcheck['tmrekening_akun_kelompok_jenis_objek_rincian_id']) {
                $dataSet[$idx]['disabled']['val'] = 'disabled';
            } else {
                $dataSet[$idx]['disabled']['val'] = '';
            }

            $dataSet[$idx]['tmrekening_akun_kelompok_jenis_objek_rincian_sub_id']['val'] = '';
            $dataSet[$idx]['tmrekening_akun_kelompok_jenis_objek_rincian_id']['val']     = $rekRincian->id;
            $dataSet[$idx]['kd_rek']['val'] = $rekRincian->kd_rek_rincian_obj;
            $dataSet[$idx]['nm_rek']['val'] = $rekRincian->nm_rek_rincian_obj;
            $dataSet[$idx]['cbox']['accRight'] = 'r';
            $dataSet[$idx]["style"] = "background:#ECECD7";
            $dataSet[$idx]["kd_rek"]["no_url"] = true;
            $idx++;
            //check jika ada satker 
            $getSatker = Tmrekening_akun_kelompok_jenis_objek_rincian_sub::where('tmsikd_satkers_id', '!=', NULL)->get();
            foreach ($getSatker as $tsatker) {
                $satkerid[] = $tsatker['tmsikd_satkers_id'];
            }
            $rincian_satker_id = implode(',', $satkerid);

            $rekSubs = Tmrekening_akun_kelompok_jenis_objek_rincian_sub::wheretmrekening_akun_kelompok_jenis_objek_rincian_id($rekRincian->id)
                ->whereNotIn('id', $notIn)
                ->select('id', 'kd_rek_rincian_objek_sub', 'nm_rek_rincian_objek_sub')
                ->get();
            //end sub object


            //  dd($dataSet);

            foreach ($rekSubs as $key => $rekSub) {

                if ($rekSub['tmsikd_satkers_id'] != '') {
                    $where = [
                        'tmrekening_akun_kelompok_jenis_objek_rincian_id' => $rekRincian->id,
                        'tmsikd_satkers_id' => $fsatker_id
                    ];
                    $subBySat = Tmrekening_akun_kelompok_jenis_objek_rincian_sub::where($where)
                        ->whereNotIn('id', $notIn)
                        ->select('id', 'kd_rek_rincian_objek_sub', 'nm_rek_rincian_objek_sub')
                        ->first();

                    $dataSet[$idx]['tmrekening_akun_kelompok_jenis_objek_rincian_sub_id']['val']    = $subBySat->id;
                    $dataSet[$idx]['tmrekening_akun_kelompok_jenis_objek_rincian_id']['val'] = $rekRincian->id;
                    $dataSet[$idx]['kd_rek']['val'] = $subBySat->kd_rek_rincian_objek_sub;
                    $dataSet[$idx]['kd_rek']['val'] = $subBySat->kd_rek_rincian_objek_sub;
                    $dataSet[$idx]['nm_rek']['val'] = $subBySat->nm_rek_rincian_objek_sub;
                } else {
                    //$dataSet[$idx]['disabled'] =  $rekSub->kd_rek_rincian_objek_sub;
                    $dataSet[$idx]['tmrekening_akun_kelompok_jenis_objek_rincian_sub_id']['val']    = $rekSub->id;
                    $dataSet[$idx]['tmrekening_akun_kelompok_jenis_objek_rincian_id']['val'] = $rekRincian->id;
                    $dataSet[$idx]['kd_rek']['val'] = $rekSub->kd_rek_rincian_objek_sub;
                    $dataSet[$idx]['kd_rek']['val'] = $rekSub->kd_rek_rincian_objek_sub;
                    $dataSet[$idx]['nm_rek']['val'] = $rekSub->nm_rek_rincian_objek_sub;
                }
                $idx++;
            }
        }

        foreach ($rekRincians as $ls) {
            $item[] = $ls['id'];
        }
        //$id_rincian_rek = implode(',', $item);  
        //$listRincianSubs  = Tmrekening_akun_kelompok_jenis_objek_rincian_sub::WhereIn('tmrekening_akun_kelompok_jenis_objek_rincian_id', $item)->get();

        // dd($listRincianSubs);
        return view($this->view . 'form_pendapatan', [
            //'listRincianSubs' => $listRincianSubs,
            'dataSet' => $dataSet
        ]);
    }

    //form pendapatan edit jika request data nya adlah edit 
    public function form_pendapatan_edit(Request $request, $jenis_object)
    {
        //dd($jenis_object); 
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
            $this->view . 'pendapatanrincian_edit',
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
