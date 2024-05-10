<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;
use App\Models\Producto;


class HomeController extends Controller
{
    public function index(Request $request)
    {
        $productos = Producto::paginate(10);
        return view('home', compact('productos'));
    }


    public function toggleStatus($id)
    {
        $inventario = Inventario::findOrFail($id);
        $inventario->estatus = !$inventario->estatus;
        $inventario->save();

        return response()->json(['success' => true]);
    }


}
