<?php

use App\Models\Condominio;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRuaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rua', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('nome');
            $table->foreignIdFor(Condominio::class)->constrained('condominio')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rua');
    }
}
