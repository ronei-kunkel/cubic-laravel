<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameUsuarioFuncaoMapeamentoToFuncaoMapeamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('usuario_funcao_mapeamento', 'funcao_mapeamento');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('funcao_mapeamento', 'usuario_funcao_mapeamento');

    }
}
