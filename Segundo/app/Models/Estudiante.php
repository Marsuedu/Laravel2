<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_completo',
        'asignatura',
        'nota1',
        'nota2',
        'nota3',
    ];

    // Accessor para calcular el promedio
    public function getPromedioAttribute()
    {
        return ($this->nota1 + $this->nota2 + $this->nota3) / 3;
    }

    // Método para convertir el número a texto
    public function numeroATexto($numero)
    {
        $numerosTexto = [
            0 => 'cero', 1 => 'uno', 2 => 'dos', 3 => 'tres', 4 => 'cuatro', 5 => 'cinco',
            6 => 'seis', 7 => 'siete', 8 => 'ocho', 9 => 'nueve', 10 => 'diez',
            11 => 'once', 12 => 'doce', 13 => 'trece', 14 => 'catorce', 15 => 'quince',
            16 => 'dieciséis', 17 => 'diecisiete', 18 => 'dieciocho', 19 => 'diecinueve',
            20 => 'veinte', 21 => 'veintiuno', 22 => 'veintidós', 23 => 'veintitrés', 
            24 => 'veinticuatro', 25 => 'veinticinco', 26 => 'veintiséis', 27 => 'veintisiete',
            28 => 'veintiocho', 29 => 'veintinueve', 30 => 'treinta', 31 => 'treinta y uno',
            32 => 'treinta y dos', 33 => 'treinta y tres', 34 => 'treinta y cuatro',
            35 => 'treinta y cinco', 36 => 'treinta y seis', 37 => 'treinta y siete',
            38 => 'treinta y ocho', 39 => 'treinta y nueve', 40 => 'cuarenta',
            // Agrega más números si es necesario
        ];

        return $numerosTexto[intval($numero)] ?? 'Número fuera de rango';
    }

    // Accessor para obtener el promedio en texto
    public function getPromedioTextoAttribute()
    {
        return $this->numeroATexto($this->promedio);
    }
}

