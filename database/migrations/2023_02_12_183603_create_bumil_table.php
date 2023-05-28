<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bumil', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ibu');
            $table->bigInteger('NIK');
            $table->integer('umur');
            $table->string('alamat');
            $table->string('masa_kehamilan');
            $table->string('checkup_ke');
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
        Schema::dropIfExists('bumil');
    }
};
