<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 25);
            $table->string('apellidop', 25);
            $table->string('apellidom', 25)->nullable()->default();
            $table->date('fechanacimiento');
            $table->string('direccion', 120);
            $table->string('carnet', 10)->nullable()->default("0");
            $table->string('expedido', 3)->nullable()->default();
            $table->string('genero', 1);
            $table->string('observacion', 250)->nullable();
            $table->string('foto', 60)->nullable();
            $table->unsignedInteger('persona_id');
            $table->unsignedInteger('idantiguo')->nullable()->default(0);
            $table->foreign('persona_id', 'fk_persona_persona1_idx')
            ->references('id')->on('personas');
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
        Schema::dropIfExists('personas');
    }
}
