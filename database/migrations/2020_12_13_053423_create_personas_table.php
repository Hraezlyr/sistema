<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('cedula')->unique();
            $table->string('inss')->unique();
            $table->string('nombre');
            $table->string('facultad');
            $table->string('departamento');
            $table->string('correo')->unique();
            $table->text('direccion');
            $table->date('fecha_afiliacion');
            $table->date('fecha_ingreso');
            $table->date('fecha_actualizacion')->nullable();
            $table->string('telefono_casa')->nullable()->unique();
            $table->string('telefono_tigo')->nullable()->unique();
            $table->string('telefono_claro')->nullable()->unique();
            $table->string('telefono_trabajo')->nullable()->unique();
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
        Schema::dropIfExists('personas');
    }
}
