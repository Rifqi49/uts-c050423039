<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pendistribusian', function (Blueprint $table) {
            $table->id('id_distribusi');
            $table->foreignId('id_donasi')->constrained('donasi')->onDelete('cascade');
            $table->foreignId('id_penerima')->constrained('penerima_manfaat')->onDelete('cascade');
            $table->date('tanggal_distribusi');
            $table->decimal('jumlah_distribusi', 15, 2);
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pendistribusian');
    }
};

