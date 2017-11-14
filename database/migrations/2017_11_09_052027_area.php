<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Area extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area', function (Blueprint $table) {
            $table->increments('idA');
            $table->integer('idB')->default(null);
            $table->integer('idProyecto')->unsigned();
            $table->foreign('idProyecto')->references('idProyecto')->on('grupo')->onDelete('cascade');
            $table->string('id')->unsigned();  
            $table->foreign('id')->references('id')->on('grupo')->onDelete('cascade');
            $table->string('codigo', 3000);
           
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
