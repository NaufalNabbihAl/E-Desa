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
        Schema::create('users', function (Blueprint $table) {
            $table->string('NIK')->primary();
            $table->enum('role', ['warga', 'admin', 'rw', 'rt', 'lurah', 'adminRTRW', 'adminLogistik', 'adminDesa', 'adminLanding', 'AdminForum', 'adminKegiatan']);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
