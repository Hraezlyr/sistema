<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnexosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anexos', function (Blueprint $table) {
            $table->id();
            $table->boolean('partida_afiliado')->default(false)->nullable();
            $table->boolean('partida_hijo')->default(false)->nullable();
            $table->boolean('partida_padres')->default(false)->nullable();
            $table->boolean('acta_matrimonio')->default(false)->nullable();
            $table->boolean('declaracion_notariada')->default(false)->nullable();
            $table->text('observaciones')->nullable();
            $table->foreignId('persona_id')->constrained('personas')->onDelete('cascade');
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
        Schema::dropIfExists('anexos');
    }
}
