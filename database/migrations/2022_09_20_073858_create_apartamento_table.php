<?php

use App\Models\Construcao;
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
            $table->foreignIdFor(Construcao::class)->constrained('construcao')->onDelete('cascade');
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
