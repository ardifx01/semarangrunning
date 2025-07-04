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
        Schema::create('prosespakets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profilpaketpekerjaanblora_id')->nullable();
            $table->string('persiapan')->nullable();
            $table->string('pengadaan')->nullable();
            $table->string('pelaksanaan')->nullable();
            $table->string('pemeliharaan')->nullable();
            $table->string('paketselesai')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prosespakets');
    }
};
