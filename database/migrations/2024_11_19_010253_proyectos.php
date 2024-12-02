<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id'); // ID único de la reserva
            $table->string('nombre', 100); // Nombre del pasajero
            $table->string('apellido', 100); // Apellido del pasajero
            $table->string('dni', 20)->unique(); // DNI del pasajero
            $table->string('codigo_vuelo', 50); // Código de vuelo
            $table->string('origen', 100); // Ciudad de origen
            $table->string('destino', 100); // Ciudad de destino
            $table->string('numero_asiento', 10); // Número de asiento
            $table->date('fecha_vuelo'); // Fecha del vuelo
            $table->time('hora_salida'); // Hora de salida
            $table->time('hora_llegada'); // Hora de llegada
            $table->decimal('precio', 10, 2); // Precio del boleto
            $table->enum('estado', ['pendiente', 'confirmada', 'cancelada'])->default('pendiente'); // Estado de la reserva
            $table->string('email', 150)->nullable(); // Correo electrónico del pasajero
            $table->string('telefono', 20)->nullable(); // Teléfono del pasajero
            $table->text('notas')->nullable(); // Notas adicionales
            $table->unsignedBigInteger('user_id')->nullable(); // Relación con usuarios registrados (opcional)
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->timestamps(); // Campos de creación y actualización
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations'); // Eliminar la tabla si se revierte la migración
    }
};
