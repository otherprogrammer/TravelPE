<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'nombre' => 'required|string',
			'apellido' => 'required|string',
			'dni' => 'required|string',
			'codigo_vuelo' => 'required|string',
			'origen' => 'required|string',
			'destino' => 'required|string',
			'numero_asiento' => 'required|string',
			'fecha_vuelo' => 'required',
			'hora_salida' => 'required',
			'hora_llegada' => 'required',
			'precio' => 'required',
			'estado' => 'required',
			'email' => 'string',
			'telefono' => 'string',
			'notas' => 'string',
        ];
    }
}
