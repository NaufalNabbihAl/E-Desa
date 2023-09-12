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
        Schema::create('artikel_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('artikel_id')->references('id_artikel')->on('artikels')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikel_images');
    }
};
