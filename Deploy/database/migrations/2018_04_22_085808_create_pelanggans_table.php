<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelanggansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->char('id', 12)->index();
            $table->string('nama');
            $table->string('alamat');
            $table->string('tarif');
            $table->integer('daya');
            $table->integer('fakm')->nullable();
            $table->integer('fakmvarh')->nullable();
            $table->double('slalwbp')->nullable();
            $table->double('sahlwbp')->nullable();
            $table->double('slawbp')->nullable();
            $table->double('sahwbp')->nullable();
            $table->double('slakvarh')->nullable();
            $table->double('sahkvarh')->nullable();
            $table->integer('pemkwh')->nullable();
            $table->char('unitup', 5);
            $table->string('kdgardu')->nullable();
            $table->string('dlpd')->nullable();
            $table->string('dlpd_fkm')->nullable();
            $table->string('dlpd_jnsmutasi')->nullable();
        });

        Schema::table('pelanggans', function($table){
            $table->foreign('unitup')
                ->references('unitup')
                ->on('areas')
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
        Schema::dropIfExists('pelanggans');
    }
}
