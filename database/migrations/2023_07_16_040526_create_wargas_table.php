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
        Schema::create('wargas', function (Blueprint $table) {
            $table->id();
            $table->string('NIK');
            $table->string('nama');
            $table->string('tempat_tgl');
            $table->string('umur');
            $table->enum('jk', ['Laki-Laki', 'Perempuan']);
            $table->string('pekerjaan_sekolah');
            $table->string('pekerjaanOrtu');
            $table->string('jalan');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('rt');
            $table->string('rw');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wargas');
    }
};
