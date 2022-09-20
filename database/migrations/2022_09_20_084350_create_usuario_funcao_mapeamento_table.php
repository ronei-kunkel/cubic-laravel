<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioFuncaoMapeamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_funcao_mapeamento', function (Blueprint $table) {
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('usuario_funcao_id');
            $table->timestamps();
            $table->index('usuario_id', 'usuario_id');
            $table->foreign('usuario_id')->references('id')->on('usuario');
            $table->index('usuario_funcao_id', 'usuario_funcao_id');
            $table->foreign('usuario_funcao_id')->references('id')->on('usuario_funcao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_funcao_mapeamento');
    }
}
