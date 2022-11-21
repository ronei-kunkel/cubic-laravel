<?php

use App\Models\Condominio;
use App\Models\Rua;
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
            $table->string('tipo'); // ['predio', 'casa', 'salao', 'sala', 'deposito', 'almoxarifado', 'comercio']
            $table->string('numero_interno');
            $table->integer('quantidade_andar')->unsigned();
            $table->foreignIdFor(Condominio::class)->constrained('condominio')->onDelete('cascade');
            $table->foreignIdFor(Rua::class)->constrained('rua')->onDelete('cascade');
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
