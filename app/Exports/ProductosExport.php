<?php

namespace App\Exports;


use App\Models\Producto;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Cell\DefaultValueBinder;

class ProductosExport extends DefaultValueBinder implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping, WithCustomValueBinder
{
    public function collection()
    {
        return Producto::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nombre',
            'Descripción',
            'Precio',
        ];
    }

    public function map($producto): array
    {
        return [
            $producto->id,
            $producto->Nombre,
            $producto->Descripción,
            $producto->Precio,
        ];
    }

    /**
     * @param mixed
     * @param Cell
     * @return string
     */
    public function bindValue(Cell $cell, $value): string
    {

        if ($cell->getColumn() == 'B') {
            $cell->getStyle()->getAlignment()->setWrapText(true);
            $cell->getStyle()->getAlignment()->setVertical('center');
            $cell->getStyle()->getAlignment()->setHorizontal('center');
            $cell->getStyle()->getFont()->setSize(14);
            $cell->getStyle()->getFill()->setFillType('solid');
            $cell->getStyle()->getFill()->getStartColor()->setARGB('FFFF00');
        }


        return parent::bindValue($cell, $value);
    }
}
