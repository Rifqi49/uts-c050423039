<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('donasi', function (Blueprint $table) {
            $table->id('id_donasi');
            $table->foreignId('id_donatur')->constrained('donatur')->onDelete('cascade');
            $table->date('tanggal_donasi');
            $table->decimal('jumlah_donasi', 15, 2);
            $table->string('metode_pembayaran', 50);
            $table->enum('status_donasi', ['diterima', 'diproses', 'didistribusikan']);
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('donasi');
    }
};

