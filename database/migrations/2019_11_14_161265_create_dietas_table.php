<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDietasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dietas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_usuario');
            $table->date('fecha_inicio');
            $table->date('fecha_final');
            $table->string('meta',50);
            $table->decimal('peso',8,2)->nullable();
            $table->date('tiempo');
            $table->string('tipo',50);
            $table->boolean('estado')->default(1);
            $table->foreign('id_usuario')->references('id')->on('usuarios');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dietas');
    }
}
