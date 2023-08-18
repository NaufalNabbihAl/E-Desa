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
        Schema::table('wajib_lapors', function (Blueprint $table) {
            $table->dropColumn('terlapor');
            $table->dropColumn('ktp');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('wajib_lapors', function (Blueprint $table) {
            $table->string('terlapor');
            $table->string('ktp');
        });
    }
};
