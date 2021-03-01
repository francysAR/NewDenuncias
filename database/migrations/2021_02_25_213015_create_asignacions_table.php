<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignacionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('soporte_id')->unsigned();
            $table->integer('denuncia_id')->unsigned();
            $table->text('fecha');
            $table->text('barrio');
            $table->text('proceso');
            $table->text('observacion');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('soporte_id')->references('id')->on('soportes');
            $table->foreign('denuncia_id')->references('id')->on('denuncias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('asignacions');
    }
}
