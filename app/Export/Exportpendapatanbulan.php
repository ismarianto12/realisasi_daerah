<?php

namespace App\Export;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


use App\Models\Setupsikd\Tmrekening_akun_kelompok;

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
use App\Models\Setupsikd\Tmrekening_akun;


use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Worksheet\PageSetup;
use Maatwebsite\Excel\Concerns\WithProperties;

use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeExport;

use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;


class Exportpendapatanbulan implements ShouldAutoSize, FromView, WithEvents, WithStyles
{

    protected $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    public function view(): View
    {
        $tahun                = Properti_app::tahun_sekarang();
        $getdatayears         = $this->reportperyears($tahun);
        return view(
            'laporan_pendapatan.rekapbulanexcel',
            ['getdatayears' => $getdatayears, 'tahun' => $tahun]
        );
    } 

    public static function reportperyears($tahun)
    {

        $idx = 0;
        $rekenings = Tmrekening_akun::select(
            'kd_rek_akun',
            'nm_rek_akun'
        )->groupBy('kd_rekening')->get();
        foreach ($rekenings as $rekening) {
            $dataset[$idx]['kd_rek']['val']        = '<td style="text-align:left" colspan=2><b>' . $rekening['kd_rek_akun'] . '<b></td>';
            $dataset[$idx]['nm_rek']['val']        = '<td colspan=3><b>' . $rekening['nm_rek_akun'] . '<b></td>';
            $dataset[$idx]['bold']['val']          = true;
            //$dataset[$idx]['rekposition']['val']   = 'rek';
            $dataset[$idx]['juraian']['val']  = '<td></td>';
            $dataset[$idx]['table']['val']  = '';
            for ($t = 1; $t <= 12; $t++) {
                $padtot = Tmpendapatan::select(\DB::raw('sum(jumlah) as total'))
                    ->where(\DB::raw('MONTH(tanggal_lapor)'), $t)
                    ->where(\DB::raw('LOCATE(' . $rekening['kd_rek_akun'] . ',tmrekening_akun_kelompok_jenis_objek_rincian_id)'), '=', 1)
                    ->where('tahun', $tahun)
                    ->GroupBy(\DB::raw('MONTH(tanggal_lapor)'))
                    ->first();
                $pad                    = ($padtot['total']) ? number_format($padtot['total'], 0, 0, '.') : '';
                $dataset[$idx]['bulan_' . $t]['val'] = '<td>' . $pad . '</td>';
            }

            $idx++;
            //by kelompok jenis obj     
            $kelompoks = Tmrekening_akun_kelompok::select('kd_rek_kelompok', 'nm_rek_kelompok')
                ->where('tmrekening_akun_id', $rekening['kd_rek_akun'])
                ->groupBy('kd_rek_kelompok')
                ->get();

            foreach ($kelompoks as $kelompok) {
                $dataset[$idx]['kd_rek']['val']        = '<td style="text-align:left" colspan=2><b>' . $kelompok['kd_rek_kelompok'] . '<b></td>';
                $dataset[$idx]['nm_rek']['val']        = '<td colspan=2><b>' . $kelompok['nm_rek_kelompok'] . '<b></td>';
                $dataset[$idx]['bold']['val']          = true;
                $dataset[$idx]['juraian']['val']       = '<td></td>';
                $dataset[$idx]['table']['val']         = '<td></td>';
                for ($y = 1; $y <= 12; $y++) {
                    $kpadtot = Tmpendapatan::select(\DB::raw('sum(jumlah) as total'))
                        ->where(\DB::raw('MONTH(tanggal_lapor)'), $y)
                        ->where(\DB::raw('LOCATE(' . $kelompok['kd_rek_kelompok'] . ',tmrekening_akun_kelompok_jenis_objek_rincian_id)'), '=', 1)
                        ->GroupBy(\DB::raw('MONTH(tanggal_lapor)'))
                        ->where('tahun', $tahun)
                        ->first();
                    $pad                    = ($kpadtot['total']) ? number_format($kpadtot['total'], 0, 0, '.') : '';
                    $dataset[$idx]['bulan_' . $y]['val'] = '<td>' . $pad . '</td>';
                }
                $idx++;

                //by kelompok jenis obj   
                $rek_jeniss = Tmrekening_akun_kelompok_jenis::select('kd_rek_jenis', 'nm_rek_jenis')
                    ->where('tmrekening_akun_kelompok_id', $kelompok['kd_rek_kelompok'])
                    ->groupBy('kd_rek_jenis')
                    ->get();

                foreach ($rek_jeniss as $rek_jenis) {
                    $dataset[$idx]['kd_rek']['val']       = '<td style="text-align:left" colspan=2><b>' . $rek_jenis['kd_rek_jenis'] . '</b></td>';
                    $dataset[$idx]['nm_rek']['val']       = '<td colspan=1><b>' . $rek_jenis['nm_rek_jenis'] . '</b></td>';
                    $dataset[$idx]['bold']['val']         = true;
                    //$dataset[$idx]['rekposition']['val']   = 'rek_kelompok_jenis';
                    $dataset[$idx]['juraian']['val']  = '<td></td>';
                    $dataset[$idx]['table']['val']    = '<td></td><td></td>';
                    for ($g = 1; $g <= 12; $g++) {
                        $obj_data = Tmpendapatan::select(\DB::raw('sum(jumlah) as t_obj'))
                            ->where(\DB::raw('MONTH(tanggal_lapor)'), $g)
                            ->where(\DB::raw('LOCATE(' . $rek_jenis['kd_rek_jenis'] . ',tmrekening_akun_kelompok_jenis_objek_rincian_id)'), '=', 1)
                            ->where('tahun', $tahun)
                            ->groupBy(\DB::raw('MONTH(tanggal_lapor)'))
                            ->first();
                        $obj_jumlah                    = ($obj_data['t_obj']) ? number_format($obj_data['t_obj'], 0, 0, '.') : '';
                        $dataset[$idx]['bulan_' . $g]['val'] = '<td>' . $obj_jumlah . '</td>';
                    }
                    $idx++;

                    //by kelompok jenis obj   
                    $rekobjeks = Tmrekening_akun_kelompok_jenis_objek::select('kd_rek_obj', 'nm_rek_obj')
                        ->where('tmrekening_akun_kelompok_jenis_id', $rek_jenis['kd_rek_jenis'])
                        ->groupBy('kd_rek_obj')
                        ->get();

                    foreach ($rekobjeks as $rekobjek) {
                        $dataset[$idx]['kd_rek']['val']       = '<td style="text-align:left" colspan=2><b>' . $rekobjek['kd_rek_obj'] . '</b></td>';
                        $dataset[$idx]['nm_rek']['val']       = '<td colspan=1><b>' . $rekobjek['nm_rek_obj'] . '</b></td>';
                        $dataset[$idx]['bold']['val']         = true;
                        //$dataset[$idx]['rekposition']['val']   = 'rek_kelompok_jenis';
                        $dataset[$idx]['juraian']['val']  = '<td></td>';
                        $dataset[$idx]['table']['val']    = '<td></td><td></td>';
                        for ($gg = 1; $gg <= 12; $gg++) {
                            $obj_data = Tmpendapatan::select(\DB::raw('sum(jumlah) as t_obj'))
                                ->where(\DB::raw('MONTH(tanggal_lapor)'), $gg)
                                ->where(\DB::raw('LOCATE(' . $rekobjek['kd_rek_obj'] . ',tmrekening_akun_kelompok_jenis_objek_rincian_id)'), '=', 1)
                                ->where('tahun', $tahun)
                                ->groupBy(\DB::raw('MONTH(tanggal_lapor)'))
                                ->first();
                            $obj_jumlah                    = ($obj_data['t_obj']) ? number_format($obj_data['t_obj'], 0, 0, '.') : '';
                            $dataset[$idx]['bulan_' . $gg]['val'] = '<td>' . $obj_jumlah . '</td>';
                        }
                        $idx++;

                        //by kelompok jenis rincian obj   
                        $rincians = Tmrekening_akun_kelompok_jenis_objek_rincian::where('tmrekening_akun_kelompok_jenis_objek_id', $rekobjek['kd_rek_obj'])
                            ->groupBy('tmrekening_akun_kelompok_jenis_objek_rincians.kd_rek_rincian_obj')
                            ->get();
                        foreach ($rincians as $rincian) {
                            //get subrincian rek 
                            $dataset[$idx]['kd_rek']['val']        = '<td style="text-align:left" colspan=1>' . $rincian['kd_rek_rincian_obj'] . '</td>';
                            $dataset[$idx]['nm_rek']['val']        = '<td colspan=1>' . $rincian['nm_rek_rincian_obj'] . '</td>';
                            $dataset[$idx]['bold']['val']          = false;
                            $dataset[$idx]['juraian']['val']       = '<td></td>';
                            $dataset[$idx]['table']['val']         = '<td></td><td></td><td></td>';
                            for ($j = 1; $j <= 12; $j++) {
                                $jumlah_rinci = Tmpendapatan::select(\DB::raw('sum(jumlah) as t_rinci'))
                                    ->where(\DB::raw('MONTH(tanggal_lapor)'), $j)
                                    ->where('tmrekening_akun_kelompok_jenis_objek_rincian_id', $rincian['kd_rek_rincian_obj'])
                                    ->where('tahun', $tahun)
                                    ->groupBy(\DB::raw('MONTH(tanggal_lapor)'))
                                    ->first();
                                $rincian_jumlah                    = ($jumlah_rinci['t_rinci']) ? number_format($jumlah_rinci['t_rinci'], 0, 0, '.') : '';
                                $dataset[$idx]['bulan_' . $j]['val'] = '<td>' . $rincian_jumlah . '</td>';
                            }
                            $idx++;
                        }
                    }
                }
            }
        }
        $result = isset($dataset) ? $dataset : 0;
        if ($result != 0) {
            return $dataset;
        } else {
            return abort(403, 'MAAF DATA TIDAK ADA SATUAN KERJ OPD TIDAK TERDAFTAR PADA PENCARIAN PAD YANG DI MAKSUD');
        }
        //  DB::connection()->close();
    }


    public function registerEvents(): array
    {
        return [
            BeforeExport::class  => function (BeforeExport $event) {
                $event->writer->setCreator('Ismarianto');
            },
            AfterSheet::class    => function (AfterSheet $event) {

                $event->sheet->styleCells(
                    'A1:R2',
                    [
                        'alignment' => [
                            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                        ],
                        'font' => [
                            'name' => 'Century Gothic',
                            'size' => 17,
                            'bold' => true,
                            'color' => ['argb' => '000'],
                        ]
                    ]
                );


                $event->sheet->getStyle('A3:R4')->getFill()
                    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                    ->getStartColor()->setARGB('007bff');

                $event->sheet->styleCells(
                    'A3:R4',
                    [
                        'alignment' => [
                            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                        ],
                        'font' => [
                            'name' => 'Century Gothic',
                            'size' => 14,
                            'bold' => true,
                            'color' => ['argb' => 'ffffff'],
                        ]
                    ]
                );

                $event->sheet->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
                $event->sheet->getStyle('A3:R360')->applyFromArray([
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                            'color' => ['argb' => '000000'],
                        ],
                    ],
                ]);
                // $event->sheet->mergeCells('A1:R1');
                // $event->sheet->mergeCells('A2:R2');  

                $event->sheet->mergeCells('A3:E3');
                $event->sheet->mergeCells('A4:E4');

                $event->sheet->mergeCells('F3:F4');
            },
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('B2')->getFont()->setBold(true);
    }
}
