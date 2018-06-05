<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObservacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('observacions', function (Blueprint $table) {
            $table->increments('idob');
            $table->string('cod_supe');
            $table->integer('idmodulo')->unsigned();
            $table->string('ruta_imagen')->nulleable();
            $table->string('comentario')->nulleable();
            $table->date('fecha_supe');
            $table->integer('idusu')->unsigned();
            $table->foreign('idmodulo')->references('idmodulo')->on('modulos');
            $table->foreign('idusu')->references('id')->on('users');
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
        Schema::dropIfExists('observacions');
    }
}
