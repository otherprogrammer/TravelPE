<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nombre del Vuelo',           // Nombre del vuelo
        'Origen',         // Origen
        'Destino',    // Destino
        'Hora_de_Salida', // Hora de salida
        'Hora_de_Llegada',   // Hora de llegada
    ];
}
