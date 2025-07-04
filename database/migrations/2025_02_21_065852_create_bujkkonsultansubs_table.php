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
        Schema::create('bujkkonsultansubs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bujkkonsultan_id');
            $table->string('nama_pengurus')->nullable();
            $table->string('sub_klasifikasi_layanan')->nullable();
            $table->string('kode')->nullable();
            $table->string('kualifikasi')->nullable();
            $table->string('penerbit')->nullable();
            $table->date('tanggal_terbit')->nullable();
            $table->date('masa_berlaku')->nullable();
            $table->string('nama_psjk')->nullable();
            $table->string('sub_kualifikasi_bu')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bujkkonsultansubs');
    }
};
