<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJamNyalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jam_nyalas', function (Blueprint $table) {
            //$table->increments('id');
            $table->char('idpel', 12)->index();
            $table->integer('jam_nyala');
            $table->integer('bulan');
            $table->integer('tahun');
            $table->timestamps();
        });

        Schema::table('jam_nyalas', function($table){
            $table->foreign('idpel')
                ->references('id')
                ->on('pelanggans')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jam_nyalas');
    }
}
