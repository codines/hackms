<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receitas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('fonte_recurso_id')->unsigned();
            $table->foreign('fonte_recurso_id')->references('id')->on('fonte_recursos');

            $table->decimal('valor_previsto', 15, 2);
            $table->decimal('valor_arrecadado', 15, 2);
            $table->integer('mes');
            $table->integer('ano');

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
        Schema::dropIfExists('receitas');
    }
}