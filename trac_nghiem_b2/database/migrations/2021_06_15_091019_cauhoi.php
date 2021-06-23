<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cauhoi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cauhoi', function (Blueprint $table) {
            $table->id();
            $table->string('noidung'); 
            $table->string('dapandung');
            $table->integer('madethi')->unsigned();
            $table->foreign('madethi')->references('id')->on('dethi');
            $table->integer('idloaicauhoi')->unsigned();
            $table->foreign('idloaicauhoi')->references('id')->on('loaicauhoi');
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
        Schema::dropIfExists('cauhoi');
    }
}
