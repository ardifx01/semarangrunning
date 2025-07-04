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
        Schema::create('hspkonstruksiumums', function (Blueprint $table) {
            $table->id();
            // $table->uuid('id')->primary(); // Gunakan UUID
            $table->foreignId('hspdivisi_id')->nullable();
            $table->foreignId('hsppaket_id')->nullable();
            $table->foreignId('hspkodepekerjaan_id')->nullable();
            $table->foreignId('subhargadiv1_id')->nullable();
            $table->foreignId('subhargadiv1bahan_id')->nullable();
            $table->foreignId('subhargadiv1peralatan_id')->nullable();
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
        Schema::dropIfExists('hspkonstruksiumums');
    }
};
