<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Libros extends Migration
{
    
public function up()
{
    Schema::create('libros', function (Blueprint $table) {
        $table->id();
        $table->date('fecha_inicio')->nullable();
        $table->date('fecha_fin')->nullable();
        $table->text('detalles')->nullable();
        $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}    


