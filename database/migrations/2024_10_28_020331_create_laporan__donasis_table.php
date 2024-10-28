<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void 
    {
        Schema::create('laporan_donasi', function (Blueprint $table) {
            $table->id('id_laporan');
            $table->date('periode_awal');
            $table->date('periode_akhir');
            $table->decimal('total_donasi', 15, 2);
            $table->decimal('total_distribusi', 15, 2);
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('laporan_donasi');
    }
};
