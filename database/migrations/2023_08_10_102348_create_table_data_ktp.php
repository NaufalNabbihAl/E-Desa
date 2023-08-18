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
        Schema::create('data_tamu', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wajib_lapors_id')->constrained('wajib_lapors')->onDelete('cascade');
            $table->string('ktp');
            $table->string('nama');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_tamu');
    }
};
