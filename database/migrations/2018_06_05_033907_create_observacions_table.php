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
            $table->integer('idusu');
            $table->integer('idagencia');
            $table->integer('idronda');
            $table->integer('idmodulo');
            $table->string('cod_supe');
            $table->string('ruta_imagen');
            $table->string('comentario');
            $table->date('fecha_supe');
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
