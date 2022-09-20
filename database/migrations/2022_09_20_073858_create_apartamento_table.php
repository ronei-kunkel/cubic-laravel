<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartamento', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('numero');
            $table->string('andar');
            // $table->string('quantidade_comodo');
            // $table->string('quantidade_movel');
            // $table->string('metro_quadrado');
            $table->unsignedBigInteger('construcao_id');
            $table->timestamps();
            $table->index('id', 'id');
            $table->index('construcao_id', 'construcao_id');
            $table->foreign('construcao_id')->references('id')->on('construcao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartamento');
    }
}
