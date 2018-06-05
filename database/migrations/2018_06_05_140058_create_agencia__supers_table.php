<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgenciaSupersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencia__supers', function (Blueprint $table) {
            $table->increments('idagsupe');
            $table->integer('idusu')->unsigned();
            $table->integer('idagencia')->unsigned();
            $table->integer('idronda')->unsigned();
            $table->string('cod_supe');
            $table->string('jefe_encargado');
            $table->date('fecha_agsupe');
            $table->foreign('idusu')->references('id')->on('users');
            $table->foreign('idagencia')->references('idagencia')->on('agencias');
            $table->foreign('idronda')->references('idronda')->on('rondas');
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
        Schema::dropIfExists('agencia__supers');
    }
}
