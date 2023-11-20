<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuartosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //migration que criará nossa tabela correspondente do db

        Schema::create('quartos', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->integer('capacidade');
            $table->decimal('preco_diaria', 8, 2);
            $table->boolean('disponivel')->default(true);
            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quartos');
    }
}
