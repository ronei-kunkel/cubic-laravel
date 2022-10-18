<?php

use App\Models\Condominio;
use App\Models\Funcao;
use App\Models\Usuario;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioFuncaoCondominioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_funcao_condominio', function (Blueprint $table) {
            $table->foreignIdFor(Usuario::class)->constrained('usuario')->default(0);
            $table->foreignIdFor(Funcao::class)->constrained('funcao')->default(0);
            $table->foreignIdFor(Condominio::class)->constrained('condominio')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_funcao_condominio');
    }
}
