<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioCondominioConstrucaoApartamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_condominio_construcao_apartamento', function (Blueprint $table) {
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('condominio_id');
            $table->unsignedBigInteger('construcao_id');
            $table->unsignedBigInteger('apartamento_id');
            $table->timestamps();
            $table->index('usuario_id', 'usuario_id');
            $table->foreign('usuario_id')->references('id')->on('usuario');
            $table->index('condominio_id', 'condominio_id');
            $table->foreign('condominio_id')->references('id')->on('condominio');
            $table->index('construcao_id', 'construcao_id');
            $table->foreign('construcao_id')->references('id')->on('construcao');
            $table->index('apartamento_id', 'apartamento_id');
            $table->foreign('apartamento_id')->references('id')->on('apartamento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_condominio_construcao_apartamento');
    }
}
