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
        Schema::create('kecelakaankerjamasjakis', function (Blueprint $table) {
            $table->id();
            $table->string('namapaketpekerjaan')->nullable();  // Nama paket pekerjaan, bisa nullable
            $table->year('tahun')->nullable(); // Tipe tahun lebih sesuai dengan data tahun
            $table->string('namaperusahaan')->nullable();  // Nama perusahaan, bisa nullable
            $table->string('namatenagakerja')->nullable();  // Nama tenaga kerja, bisa nullable
            $table->string('lokasikecelakaan')->nullable();  // Lokasi kecelakaan, bisa nullable
            $table->dateTime('waktukecelakaan')->nullable();  // Waktu kecelakaan, lebih baik menggunakan dateTime
            $table->text('keterangan')->nullable();  // Keterangan kecelakaan, bisa panjang
            $table->decimal('nilaikerugian', 15, 2)->nullable();  // Nilaikerugian menggunakan tipe decimal
            $table->softDeletes();  // Untuk soft delete
            $table->timestamps();  // Waktu dibuat dan diperbarui
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kecelakaankerjamasjakis');
    }
};
