<?php

namespace App\Service;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ExportsServices
{
    public function __construct() {}

    public function exportDocumentExcel(
        array $cells,
        array $data,
        $row = 2
    ) {

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        foreach ($cells as $cell) {
            $sheet->setCellValue($cell['letter'] . $cell['number'], $cell['title']);
            if (isset($cell['width'])) {
                $sheet->getColumnDimension($cell['letter'])->setWidth($cell['width']);
            } else {
                $sheet->getColumnDimension($cell['letter'])->setWidth(20);
            }
        }

        // Estilo para los encabezados
        $headerStyle = [
            'font' => [
                'bold' => true,
                'color' => ['rgb' => 'FFFFFF'],
            ],
            'fill' => [
                'fillType' => Fill::FILL_SOLID,
                'startColor' => ['rgb' => '4CAF50'],
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
                'vertical' => Alignment::VERTICAL_CENTER,
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                    'color' => ['rgb' => '000000'],
                ],
            ],
        ];
        $sheet->getStyle(reset($cells)['letter'] . reset($cells)['number'] . ':' . end($cells)['letter'] . end($cells)['number'])->applyFromArray($headerStyle);

        foreach ($data as $rowIndex => $rowData) {
            foreach ($cells as $cellIndex => $cell) {
                $letter = $cell['letter'];
                $sheet->setCellValue($letter . $row, $rowData[$cellIndex]);
            }
            $row++;
        }

        foreach (range(reset($cells)['letter'], end($cells)['letter']) as $columnID) {
            $sheet->getStyle($columnID . '2:' . $columnID . ($row - 1))
                ->getAlignment()->setWrapText(true); // Ajusta el texto a la celda
        }

        // Estilo para los datos
        $dataStyle = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                    'color' => ['rgb' => '000000'],
                ],
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_LEFT,
                'vertical' => Alignment::VERTICAL_CENTER
            ],
        ];
        $sheet->getStyle(reset($cells)['letter'] . '2:' . end($cells)['letter'] . ($row - 1))->applyFromArray($dataStyle);

        $writer = new Xlsx($spreadsheet);
        $tempFile = tempnam(sys_get_temp_dir(), 'export_') . '.xlsx';
        $writer->save($tempFile);

        return $tempFile;
    }
}
