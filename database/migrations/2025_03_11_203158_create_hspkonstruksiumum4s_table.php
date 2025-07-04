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
        Schema::create('hspkonstruksiumum4s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hspdivisi_id')->nullable();
            $table->foreignId('hsppaket4_id')->nullable();
            $table->foreignId('hspkodepekerjaan4_id')->nullable();
            $table->foreignId('subhargadiv4_id')->nullable();
            $table->foreignId('subhargadiv4bahan_id')->nullable();
            $table->foreignId('subhargadiv4peralatan_id')->nullable();
            $table->string('kode')->nullable();
            $table->string('jenispekerjaan')->nullable();
            $table->string('satuanmaterial')->nullable();
            $table->string('hargasatuan')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hspkonstruksiumum4s');
    }
};
