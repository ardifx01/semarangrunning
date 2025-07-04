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
        Schema::create('hspkonstruksiumum8s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hspdivisi_id')->nullable();
            $table->foreignId('hsppaket8_id')->nullable();
            $table->foreignId('hspkodepekerjaan8_id')->nullable();
            $table->foreignId('subhargadiv8_id')->nullable();
            $table->foreignId('subhargadiv8bahan_id')->nullable();
            $table->foreignId('subhargadiv8peralatan_id')->nullable();
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
        Schema::dropIfExists('hspkonstruksiumum8s');
    }
};
