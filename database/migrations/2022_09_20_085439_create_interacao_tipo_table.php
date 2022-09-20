<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInteracaoTipoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interacao_tipo', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->enum('nome', ['melhoria', 'ouvidoria', 'queixa', 'reclamacao', 'solicitacao', 'anuncio']);
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
        Schema::dropIfExists('interacao_tipo');
    }
}
