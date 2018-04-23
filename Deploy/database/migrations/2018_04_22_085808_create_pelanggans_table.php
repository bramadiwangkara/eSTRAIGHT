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
            $table->char('unitap', 5);
            $table->string('nama');
            $table->string('alamat');
            $table->string('tarif');
            $table->integer('daya');
            $table->integer('fakm');
            $table->integer('fakmvarh');
            $table->string('kdgardu');
            $table->string('dlpd');
            $table->string('dlpd_fkm');
            $table->string('dlpd_jnsmutasi');
            $table->timestamps();
        });

        Schema::table('pelanggans', function($table){
            $table->foreign('unitap')
                ->references('unitap')
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
