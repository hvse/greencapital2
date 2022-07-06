<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('agente_id');
            $table->foreign('agente_id')->references('id')->on('users');
            $table->integer('area_construida')->default(0);
            $table->integer('area_de_servicio')->default(0);
            $table->integer('banos')->default(0);
            $table->string('caracteristicas_en');
            $table->string('caracteristicas_es');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->string('cliente');
            $table->integer('cochera')->default(0);
            $table->string('codigo');
            $table->string('departamento_ciudad');
            $table->integer('dormitorios')->default(0);
            $table->unsignedBigInteger('medida_id');
            $table->foreign('medida_id')->references('id')->on('medidas');
            $table->unsignedBigInteger('moneda_id');
            $table->foreign('moneda_id')->references('id')->on('monedas');
            $table->string('nota_en');
            $table->string('nota_es');
            $table->unsignedBigInteger('operacion_id');
            $table->foreign('operacion_id')->references('id')->on('operaciones');
            $table->integer('precio')->default(0);
            $table->boolean('published')->default(false);
            $table->boolean('sold')->default(false);
            $table->integer('superficie_total')->default(0);
            $table->string('zona');
            // $table->integer('portada');
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
        Schema::dropIfExists('inmuebles');
    }
}
