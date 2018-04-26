<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermohonansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            // $table->integer('user_id')->unsigned()->nullable();
            $table->date('tarikh_permohonan')->nullable();
            $table->string('nama_pelajar');
            $table->string('gambar');
            $table->string('warganegara');
            $table->string('no_kp');
            $table->string('sijil_lahir');
            $table->date('tarikh_lahir')->nullable();
            $table->string('jantina');
            $table->text('alamat');
            $table->string('status');
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
        Schema::dropIfExists('permohonans');
    }
}
