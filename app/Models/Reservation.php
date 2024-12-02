<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reservation
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $dni
 * @property $codigo_vuelo
 * @property $origen
 * @property $destino
 * @property $numero_asiento
 * @property $fecha_vuelo
 * @property $hora_salida
 * @property $hora_llegada
 * @property $precio
 * @property $estado
 * @property $email
 * @property $telefono
 * @property $notas
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reservation extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'apellido', 'dni', 'codigo_vuelo', 'origen', 'destino', 'numero_asiento', 'fecha_vuelo', 'hora_salida', 'hora_llegada', 'precio', 'estado', 'email', 'telefono', 'notas', 'user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }
    
}
