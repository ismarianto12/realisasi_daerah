<?php

namespace App\Export;

use App\Invoice;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


use App\Models\Setupsikd\Tmrekening_akun_kelompok;
use App\Models\Setupsikd\Tmrekening_akun;

use Illuminate\Http\Request;

use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek_rincian;
use App\Helpers\Properti_app;
use App\Libraries\Jasper_report;
use App\Libraries\List_pendapatan;
use App\Models\Setupsikd\Tmrekening_akun_kelompok_jenis_objek_rincian_sub;
use App\Models\Sikd_satker;
use App\Models\Tmpendapatan;
use App\Models\TmpendapatantargetModel;
use App\Models\Tmopd;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
  
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Worksheet\PageSetup;
 
class Exportpendapatan implements ShouldAutoSize, FromView
{

    protected $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function view(): View
    {
  
        $tahun_id          = $this->request['tahun_id'];
        $tmsikd_satker_id  = $this->request['tmsikd_satker_id'];
        $dari              = $this->request['dari'];
        $sampai            = $this->request['sampai'];
        $jreport           = 1;
        $rekjenis_id       = $this->request['rekjenis_id'];

        $groupby           = 'tmrekening_akun_kelompok_jenis.id';
        $data              = Tmpendapatan::report_pendapatan([], $groupby);

        if ($rekjenis_id != 0) {
            $data->where('tmrekening_akun_kelompok_jenis.id', '=', $rekjenis_id);
        }
        if ($dari != '' && $sampai != '') {
            $data->where('tmpendapatan.tanggal_lapor', '>=', $dari);
            $data->where('tmpendapatan.tanggal_lapor', '<=', $sampai);
        }
        if ($tmsikd_satker_id != '' || $tmsikd_satker_id != 0) {
            $data->where('tmpendapatan.tmsikd_satker_id', '=', $tmsikd_satker_id);
        }
        if ($tmsikd_satker_id == 0) {
            $data->where('tmpendapatan.tmsikd_satker_id', '!=', NULL);
        }
        $filldata =  $data->get();
        // dd($data);
        $tahun             = Properti_app::tahun_sekarang();
        $listarget         = new TmpendapatantargetModel;
        $jenisobject       = new Tmrekening_akun_kelompok_jenis;
        $objectrincian     = new Tmrekening_akun_kelompok_jenis_objek_rincian;
        $objectrinciansub  = new Tmrekening_akun_kelompok_jenis_objek_rincian_sub;
        $tmpendapatan      = new Tmpendapatan;
        $opd = Sikd_satker::find($this->request['tmsikd_satker_id']);

        return view('laporan_pendapatan.jenis_object', [
            'tahun' => $tahun,
            'dari' => $dari,
            'opd' => $opd,
            'tmsikd_satker_id' => $tmsikd_satker_id,
            'tahun_id' => $tahun_id,
            'sampai' => $sampai,
            'render' => $filldata,
            'listarget' => $listarget,
            'tmpendapatan' => $tmpendapatan,
            'jenisobject' => $jenisobject,
            'objectrincian' => $objectrincian,
            'objectrinciansub' => $objectrinciansub,
        ]);
    }
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $event->sheet->getDelegate()->getPageSetup()->setOrientation(PageSetup::ORIENTATION_LANDSCAPE);
                 //all get event now
                $event->sheet->getColumnDimension('B')->setAutoSize(true);

            },
        ];
    }
}
