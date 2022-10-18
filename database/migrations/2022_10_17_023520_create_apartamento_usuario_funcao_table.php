<?php

use App\Models\Apartamento;
use App\Models\Funcao;
use App\Models\Usuario;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartamentoUsuarioFuncaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartamento_usuario_funcao', function (Blueprint $table) {
            $table->foreignIdFor(Apartamento::class)->constrained('apartamento')->default(0);
            $table->foreignIdFor(Usuario::class)->constrained('usuario')->default(0);
            $table->foreignIdFor(Funcao::class)->constrained('funcao')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartamento_usuario_funcao');
    }
}
