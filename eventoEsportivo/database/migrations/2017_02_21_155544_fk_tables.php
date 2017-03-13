<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FkTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registros',function($table){
            $table->foreign('atleta_id')->references('id')->on('atletas');
            $table->foreign('evento_id')->references('id')->on('eventos');



        });
    }

    /**
     * Reverse the migrations.
     *

     * @return void
     */
    public function down()
    {
        //
    }
}
