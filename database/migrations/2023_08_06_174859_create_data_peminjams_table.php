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
        Schema::create('data_peminjams', function (Blueprint $table) {
            $table->id();
            $table->string('NIK');
            $table->foreign('NIK')->references('NIK')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_barang')->references('id')->on('data_barangs')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('jumlah');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_peminjams');
    }
};
