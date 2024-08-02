<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 15);
            $table->string('apellidos', 15);
            $table->string('email')->unique();
            $table->string('telefono', 10);
            $table->integer('edad');
            $table->string('sexo');
            $table->string('ocupacion', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('registros');
    }
}
