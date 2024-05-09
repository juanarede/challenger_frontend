<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pedido; // Asegúrate de importar el modelo Pedido

class Cliente extends Model
{
    use HasFactory;

    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'ClienteID', 'id');
    }
}



