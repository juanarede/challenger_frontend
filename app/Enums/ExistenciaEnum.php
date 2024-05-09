<?php

namespace App\Enums;

enum ExistenciaEnum: string
{
    case DISPONIBLE = 'disponible';
    case AGOTADO = 'agotado';

 public function label(): string
 {
    return match($this)
    {
        self::DISPONIBLE => 'Disponible',
        self::AGOTADO => 'Agotado',
    };
 }
}


