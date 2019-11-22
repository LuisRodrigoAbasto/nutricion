<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alimentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',50);
            $table->decimal('caloria',8,2);
            // $table->string('unidad_calorias',10);
            $table->decimal('grasa',8,2);
            // $table->string('unidad_grasa',10);
            $table->decimal('proteina',8,2);
            // $table->string('unidad_proteina',10);
            $table->decimal('carbohidrato',8,2);
            $table->boolean('estado')->default(1);
            // $table->string('unidad_carbohidrato',10);
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
        Schema::dropIfExists('alimentos');
    }
}
