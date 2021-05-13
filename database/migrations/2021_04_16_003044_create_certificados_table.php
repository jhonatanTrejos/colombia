<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('solicitud_id');
            $table->longText('registros');
            $table->date('fecha_despacho')->nullable();
            $table->integer('total_dias')->nullable();
            $table->foreign('user_id')
                ->references('id')->on('users')
                 ->onDelete('cascade');
            $table->foreign('solicitud_id')
                ->references('id')->on('solicituds')
                 ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificados');
    }
}
