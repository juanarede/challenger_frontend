<?php

namespace App\Enums;

enum ExistenciaEnum: string
{
    case DISPONIBLE = 'stock';
    case AGOTADO = 'sin stock';

 public function label(): string
 {
    return match($this)
    {
        self::DISPONIBLE => 'Stock',
        self::AGOTADO => 'Sin Stock',
    };
 }
}


