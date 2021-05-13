<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Registros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->string('numero_cedula');
            $table->string('nombre_empleado');
            $table->string('apellidos_empleado');
            $table->string('cargo')->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_retiro')->nullable();
            $table->integer('dias_laborados')->nullable();
            $table->float('cpsm')->nullable();
            $table->float('sueldo')->nullable();
            $table->integer('caja_compensacion')->nullable();
            $table->integer('ley100')->nullable();
            $table->unsignedBigInteger('libro_id')->nullable();
            $table->timestamps();
            $table->foreign('libro_id')
                ->references('id')->on('libros')
                ->onDelete('set null');
        });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registros');
    }
}
