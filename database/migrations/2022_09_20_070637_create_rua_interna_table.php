<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuaInternaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rua_interna', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('nome');
            $table->unsignedBigInteger('condominio_id');
            $table->unsignedBigInteger('status_id');
            $table->timestamps();
            $table->index('id', 'id');
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
        Schema::dropIfExists('rua_interna');
    }
}
