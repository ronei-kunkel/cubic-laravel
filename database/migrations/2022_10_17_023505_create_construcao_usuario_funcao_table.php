<?php

use App\Models\Construcao;
use App\Models\Funcao;
use App\Models\Usuario;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstrucaoUsuarioFuncaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('construcao_usuario_funcao', function (Blueprint $table) {
            $table->foreignIdFor(Construcao::class)->constrained('construcao')->onDelete('cascade');
            $table->foreignIdFor(Usuario::class)->constrained('usuario')->onDelete('cascade');
            $table->foreignIdFor(Funcao::class)->constrained('funcao')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('construcao_usuario_funcao');
    }
}
