<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('penerima_manfaat', function (Blueprint $table) {
            $table->id('id_penerima');
            $table->string('nama_penerima', 100);
            $table->enum('kategori_penerima', ['individu', 'keluarga', 'organisasi']);
            $table->text('alamat')->nullable();
            $table->string('kontak', 20)->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penerima_manfaat');
    }
};

