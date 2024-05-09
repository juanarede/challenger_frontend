<?php

namespace App\Models;

use App\Enums\ExistenciaEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function inventario()
    {
        return $this->hasOne(Inventario::class,'productoID');
    }

    public function getStockAttribute(): ExistenciaEnum
    {
        if($this->inventario === null){
            return ExistenciaEnum::AGOTADO;
        }
        return $this->inventario->CantidadDisponible > 0
            ? ExistenciaEnum::DISPONIBLE
            : ExistenciaEnum::AGOTADO;
    }
}
