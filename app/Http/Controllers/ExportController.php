<?php

namespace App\Http\Controllers;

use App\Exports\ProductosExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function export()
    {
        return Excel::download(new ProductosExport, 'productos.xlsx');
    }
}
