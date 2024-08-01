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
        Schema::create('tbl_aplikasi', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->string('nama_apps')->nullable();
            $table->string('nohp_apps', 30)->nullable();
            $table->string('email_apps')->nullable();
            $table->string('alamat')->nullable();
            $table->string('logo')->nullable();
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
        Schema::dropIfExists('tbl_aplikasi');
    }
};
