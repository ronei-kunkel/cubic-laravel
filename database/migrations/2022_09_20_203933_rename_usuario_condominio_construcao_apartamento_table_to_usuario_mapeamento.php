<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameUsuarioCondominioConstrucaoApartamentoToUsuarioMapeamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('usuario_condominio_construcao_apartamento', 'usuario_mapeamento');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('usuario_mapeamento', 'usuario_condominio_construcao_apartamento');
    }
}
