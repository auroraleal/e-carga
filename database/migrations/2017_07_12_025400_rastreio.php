<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rastreio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rastreios', function (Blueprint $table) {
            $table->increments('id');
            $table->date('dt_carregamento');
            $table->string('placa_caminhao');
            $table->string('produto');
            $table->double('quantidade_carregada');
            $table->string('transportadora');
            $table->string('nota_fiscal');
            $table->date('previsao_chegada');
            $table->date('data_chegada');
            $table->date('saida_terminal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rastreios');
    }
}
