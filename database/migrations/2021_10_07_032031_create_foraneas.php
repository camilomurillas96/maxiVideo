<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForaneas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ejemplares', function (Blueprint $table) {
            
            $table->foreign('idPelicula')
                 ->references('id')->on('peliculas');
        });

        Schema::table('actores', function (Blueprint $table) {
            
            $table->foreign('idPelicula')
                 ->references('id')->on('peliculas');
        });

        Schema::table('directores', function (Blueprint $table) {
            
            $table->foreign('idPelicula')
                 ->references('id')->on('peliculas');
        });

        Schema::table('alquilerPeliculas', function (Blueprint $table) {
            
            $table->foreign('idPelicula')
                 ->references('id')->on('peliculas');
        });

        Schema::table('alquilerPeliculas', function (Blueprint $table) {
            
            $table->foreign('idCliente')
                 ->references('id')->on('clientes');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foraneas');
    }
}
