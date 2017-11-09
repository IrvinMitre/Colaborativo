<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Grupo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('grupo', function (Blueprint $table) {
            $table->increments('idG');
            $table->integer('idProyecto')->unsigned();
            $table->foreign('idProyecto')->references('idProyecto')->on('proyecto')->onDelete('cascade');
            $table->string('name')->unsigned();
            $table->foreign('name')->references('name')->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          
    }
}
