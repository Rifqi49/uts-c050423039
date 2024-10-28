<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('donatur', function (Blueprint $table) {
            $table->id('id_donatur');
            $table->string('nama_donatur', 100);
            $table->string('email', 100)->unique();
            $table->string('nomor_telepon', 20)->nullable();
            $table->text('alamat')->nullable();
            $table->date('tanggal_terdaftar');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('donatur');
    }
};

