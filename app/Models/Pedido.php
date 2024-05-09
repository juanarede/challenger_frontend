<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'ClienteID',
        'FechaPedido',
        'Total'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'ClienteID', 'id');
    }
}
