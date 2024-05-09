<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Cliente;
use App\Models\Inventario;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPedidosPorCliente = Cliente::withSum('pedidos', 'Total')->get();
        $totalClientes = Cliente::count();
        $totalPedidos = Pedido::sum('Total');
        $totalCantidadDisponible = Inventario::sum('CantidadDisponible');

        return view('dashboard', [
            'totalClientes' => $totalClientes,
            'totalPedidos' => $totalPedidos,
            'totalCantidadDisponible' => $totalCantidadDisponible,
            'totalPedidosPorCliente' => $totalPedidosPorCliente,
        ]);
    }

    public function mostrarTotalClientes()
    {
        return Cliente::count();
    }

    public function mostrarTotalPedidos()
    {
        return Pedido::sum('Total');
    }

    public function mostrarTotalCantidadDisponible()
    {
        return Inventario::sum('CantidadDisponible');
    }
}





