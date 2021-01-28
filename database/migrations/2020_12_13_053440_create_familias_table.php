<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familias', function (Blueprint $table) {
            $table->id();
            $table->string('estado_civil')->nullable();
            $table->string('nombre_conyugue')->nullable();
            $table->string('madre')->nullable();
            $table->string('padre')->nullable();
            $table->string('hijo')->nullable();
            $table->boolean('m_fallecida')->default(false)->nullable();
            $table->boolean('p_fallecido')->default(false)->nullable();
            $table->boolean('c_fallecido')->default(false)->nullable();
            $table->string('sexo_hijo')->nullable();
            $table->integer('edad_hijo')->nullable();
            //$table->unsignedBigInteger('persona_id');
            $table->foreignId('persona_id')->constrained('personas')->onDelete('cascade');
           // $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');
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
        Schema::dropIfExists('familias');
    }
}
