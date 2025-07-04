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
        Schema::create('laporankegiatans', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('kegiatanjaskon_id');
            $table->foreignId('kegiatanjaskon_id');
            $table->foreignId('user_id');
            $table->string('judul_kegiatan');
            $table->string('jabatan');
            $table->string('gambar')->nullable();
            $table->text('keterangan_berita')->nullable();
            $table->date('tanggal');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporankegiatans');
    }
};
