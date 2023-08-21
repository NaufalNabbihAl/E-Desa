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
        Schema::create('wajib_lapors', function (Blueprint $table) {
            $table->id();
            $table->string('NIK');
            $table->foreign('NIK')->references('NIK')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('lokasi');
            $table->date('tanggal');
            $table->date('pulang')->nullable();
            $table->string('deskripsi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wajib_lapors');
    }
};
