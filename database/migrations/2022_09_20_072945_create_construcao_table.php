<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstrucaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('construcao', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('nome');
            $table->enum('tipo', ['predio', 'casa', 'salao', 'sala', 'deposito', 'almoxarifado']);
            $table->string('numero_interno');
            $table->integer('quantidade_andar')->unsigned();
            $table->unsignedBigInteger('rua_interna_id');
            $table->unsignedBigInteger('condominio_id');
            $table->unsignedBigInteger('status_id');
            $table->timestamps();
            $table->index('id', 'id');
            $table->index('rua_interna_id', 'rua_interna_id');
            $table->foreign('rua_interna_id')->references('id')->on('rua_interna');
            $table->index('condominio_id', 'condominio_id');
            $table->foreign('condominio_id')->references('id')->on('condominio');
            $table->index('status_id', 'status_id');
            $table->foreign('status_id')->references('id')->on('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('construcao');
    }
}
