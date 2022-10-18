<?php

use App\Models\Construcao;
use App\Models\RuaInterna;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstrucaoRuaInternaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('construcao_rua_interna', function (Blueprint $table) {
            $table->foreignIdFor(Construcao::class)->constrained('construcao')->default(0);
            $table->foreignIdFor(RuaInterna::class)->constrained('rua_interna')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('construcao_rua_interna');
    }
}
