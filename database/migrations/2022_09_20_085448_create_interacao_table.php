<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInteracaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interacao', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->text('mensagem');
            $table->unsignedBigInteger('interacao_tipo_id');
            $table->unsignedBigInteger('origem_usuario_id');
            $table->unsignedBigInteger('destino_usuario_funcao_id');
            $table->unsignedBigInteger('destino_usuario_id');
            $table->timestamps();
            $table->index('id', 'id');
            $table->index('interacao_tipo_id', 'interacao_tipo_id');
            $table->foreign('interacao_tipo_id')->references('id')->on('interacao_tipo');
            $table->index('origem_usuario_id', 'origem_usuario_id');
            $table->foreign('origem_usuario_id')->references('id')->on('usuario');
            $table->index('destino_usuario_funcao_id', 'destino_usuario_funcao_id');
            $table->foreign('destino_usuario_funcao_id')->references('id')->on('usuario_funcao');
            $table->index('destino_usuario_id', 'destino_usuario_id');
            $table->foreign('destino_usuario_id')->references('id')->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interacao');
    }
}
