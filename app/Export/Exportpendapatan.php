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

use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeExport;

class Exportpendapatan implements ShouldAutoSize, FromView, WithEvents
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
        $tahun             = Properti_app::tahun_sekarang();
        //get periode lalu 
        $dperiode = $tahun . '-01-01';
        $speriode = date('Y-m-d', strtotime($sampai . ' -1 day'));

        $par = [
            'tahun_id' => $tahun_id,
            'tmsikd_satker_id' => $tmsikd_satker_id,
            'dari' => $dari,
            'sampai' => $sampai,
            'tahun' => $tahun,
            'dperiode' => $dperiode,
            'speriode' => $speriode
        ];
        $rpendapatan = Tmpendapatan::report_pendapatan($par);
        // dd($rpendapatan);  
        $opd = Sikd_satker::find($this->request['tmsikd_satker_id']);
        return view('laporan_pendapatan.jenis_object_excel', [
            'tahun' => $tahun,
            'dari' => $dari,
            'opd' => $opd,
            'tmsikd_satker_id' => $tmsikd_satker_id,
            'tahun_id' => $tahun_id,
            'sampai' => $sampai,
            'render' => $rpendapatan,
        ]);
    }
    public function registerEvents(): array
    {

        return [
            BeforeExport::class  => function (BeforeExport $event) {
                $event->writer->setCreator('Ismarianto');
            },
            AfterSheet::class    => function (AfterSheet $event) {

                $jumlahcell = $this->gettotal();


                $event->sheet->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
                $event->sheet->getStyle('A2:H' . $jumlahcell)->applyFromArray([
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                            'color' => ['argb' => '000000'],
                        ],
                    ],
                ]);
                // $event->sheet->mergeCells('A1:H1');

            },
        ];
    }


    public function gettotal()
    {
        $tahun_id          = $this->request['tahun_id'];
        $tmsikd_satker_id  = $this->request['tmsikd_satker_id'];
        $dari              = $this->request['dari'];
        $sampai            = $this->request['sampai'];
        $jreport           = 1;
        $rekjenis_id       = $this->request['rekjenis_id'];
        $tahun             = Properti_app::tahun_sekarang();
        //get periode lalu 
        $dperiode = $tahun . '-01-01';
        $speriode = date('Y-m-d', strtotime($sampai . ' -1 day'));

        $par = [
            'tahun_id' => $tahun_id,
            'tmsikd_satker_id' => $tmsikd_satker_id,
            'dari' => $dari,
            'sampai' => $sampai,
            'tahun' => $tahun,
            'dperiode' => $dperiode,
            'speriode' => $speriode
        ];
        $rw = array();
        $frpendapatan = Tmpendapatan::report_pendapatan($par);
        foreach ($frpendapatan as $vl) {
            $count[] = ['data' => $vl['nm_rek']['val']];
            $rw = $count;
        }
        $jumlah = (count($rw) * 2);
        return $jumlah;
    }
}
