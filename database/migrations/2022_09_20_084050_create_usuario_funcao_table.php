<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioFuncaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_funcao', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->enum('nome', ['morador', 'dono', 'zelador', 'síndico', 'terceirizado', 'administrador']);
            $table->timestamps();
            $table->index('id', 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_funcao');
    }
}
