<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('umkms', function (Blueprint $table) {
            $table->id();
            $table->string('NIK');
            $table->string('nama');
            $table->string('nowa');
            $table->text('deskripsi');
            $table->string('linkTP');
            $table->string('linkSP');
            $table->string('gambar');
            $table->date('tanggal');
            $table->enum('status', ['Diproses', 'Ditolak', 'Diterima']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkms');
    }
};
