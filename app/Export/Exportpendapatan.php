<?php

namespace App\Export;

use App\ReportController;
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
use Maatwebsite\Excel\Concerns\WithProperties;


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
        
        //periode lalu
        $dperiode = $tahun . '-01-01';
        $speriode = date($sampai, strtotime('-1 day'));

        $periode_lalu    = Tmpendapatan::report_pendapatan([], 'tmrekening_akun_kelompok_jenis.id');
        if ($rekjenis_id != 0) {
            $periode_lalu->where('tmrekening_akun_kelompok_jenis.id', '=', $rekjenis_id);
        }
        if ($dari != '' && $sampai != '') {
            $periode_lalu->where('tmpendapatan.tanggal_lapor', '>=', $dperiode);
            $periode_lalu->where('tmpendapatan.tanggal_lapor', '<=', $speriode);
        }
        if ($tmsikd_satker_id != '' || $tmsikd_satker_id != 0) {
            $periode_lalu->where('tmpendapatan.tmsikd_satker_id', '=', $tmsikd_satker_id);
        }
        $rperiode_lalu = $periode_lalu; 
        return view('laporan_pendapatan.jenis_object_excel', [
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
            'rperiode_lalu' => $rperiode_lalu
        ]);
    }
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function (AfterSheet $event) {
                $event->sheet->getDelegate()->getPageSetup()->setOrientation(PageSetup::ORIENTATION_LANDSCAPE);
                //all get event now
                $event->sheet->setAllBorders('thin');
                $event->sheet->setSize(array(
                    'A1' => array(
                        'width'     => 10,
                        'height'    => 0
                    )
                ));
                $event->sheet->getColumnDimension('B')->setAutoSize(true);
                $event->sheet->setCellValue('A1:I1', 'STUDENT PERFORMANCE');
                $cellRange = 'B1:I1';
                $event->cells->setAlignment('center');
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
           
                $event->sheet->cells('A1:C1', function($cells) {
                    $cells->setBorder('thin', 'thin', 'thin', 'thin');
                });
                $event->sheet->mergeCells('A1:C1');
            },
        ];
    }
    
}
