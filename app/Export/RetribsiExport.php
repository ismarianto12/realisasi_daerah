<?php

namespace App\Exports;

use App\Exports;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Worksheet\PageSetup;

class RetribusiExport implements ShouldAutoSize, FromView, WithEvents
{
    use Exportable;
    public function view(): View
    {
        //$report = Report::find($this->id);
        return view('penerimaan.excel_penerimaan');
    }
    public function registerEvents(): array
    {

        return [
            AfterSheet::class    => function (AfterSheet $event) {
                $styleArray = [
                    'font' => [
                        'bold' => true,
                    ],
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
                    ],
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        ],

                    ], 
                ];

                $to = $event->sheet->getDelegate()->getHighestColumn();
                $event->sheet->getDelegate()->getStyle('A1:' . $to . '3')->applyFromArray($styleArray);
            },
        ];
    }
}
