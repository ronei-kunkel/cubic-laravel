<?php

use App\Models\Condominio;
use App\Models\Funcao;
use App\Models\Usuario;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCondominioUsuarioFuncaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condominio_usuario_funcao', function (Blueprint $table) {
            $table->foreignIdFor(Condominio::class)->constrained('condominio')->onDelete('cascade');
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
        Schema::dropIfExists('condominio_usuario_funcao');
    }
}
