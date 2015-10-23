<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosticosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosticos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('edad');
            $table->string('peso');
            $table->string('sangre_tipo');
            $table->string('alergias');
            $table->string('expediente');
            $table->string('antecedentes');
            $table->string('examen_orina');
            $table->string('examen_heces');
            $table->string('observaciones');
             $table->string('path');
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
        Schema::drop('diagnosticos');
    }
}
