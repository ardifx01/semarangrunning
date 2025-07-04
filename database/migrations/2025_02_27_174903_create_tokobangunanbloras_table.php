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
        Schema::create('tokobangunanbloras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kecamatanblora_id')->nullable(); // Relasi ke tabel kecamatan
            $table->string('namatokobangunan'); // Nama toko bangunan
            $table->string('pemilik')->nullable(); // Nama pemilik toko
            $table->string('alamat')->nullable(); // Alamat toko
            $table->string('notelepon')->nullable(); // Nomor telepon toko
            $table->string('email')->nullable(); // Email toko (jika ada)
            $table->string('jenisprodukbangunan')->nullable(); // Email toko (jika ada)
            $table->string('fototokobangunan')->nullable(); // Email toko (jika ada)
            $table->text('keterangan')->nullable(); // Deskripsi singkat tentang toko
            $table->softDeletes();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tokobangunanbloras');
    }
};
