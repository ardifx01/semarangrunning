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
Schema::create('berkasperlombaans', function (Blueprint $table) {
    $table->id();
    // $table->foreignId('kota_id')->nullable()->index();        // Pilih Kategori
    // Kolom info tim dan organisasi
    $table->foreignId('akunpengguna_id')->nullable()->index(); // sudah
    $table->foreignId('perlombaan_id')->nullable()->index();        // Pilih Kategori

    $table->string('nama_tim')->nullable();        // Nama Tim
    $table->text('nama_organisasi')->nullable();// Nama Organisasi
    $table->string('kota')->nullable()->index();        // Pilih Kategori
    $table->foreignId('provinsi_id')->nullable()->index();        // Pilih Kategori
    $table->text('alamat_organisasi')->nullable();// Alamat Organisasi

    $table->foreignId('kategoriperlombaan_id')->nullable()->index();        // Pilih Kategori
    // Kolom upload file, simpan path/file name
    $table->string('surat_tugas_organisasi')->nullable();  // Surat tugas dr organisasi
    $table->string('surat_keterangan_sehat')->nullable();  // Surat keterangan sehat
    $table->string('bukti_pembayaran')->nullable();        // Bukti Pembayaran
    $table->string('surat_pernyataan')->nullable();        // Surat Pernyataan

            $table->string('cekdokumen1')->nullable();
            $table->string('cekdokumen2')->nullable();
            $table->string('cekdokumen3')->nullable();
            $table->string('cekdokumen4')->nullable();

            $table->string('validasiberkas1')->nullable();
            $table->string('validasiberkas2')->nullable();
            $table->string('validasiberkas3')->nullable();
            $table->string('validasiberkas4')->nullable();
            $table->string('validasiberkas5')->nullable();
            $table->string('validasiberkas6')->nullable();
            $table->string('validasiberkas7')->nullable();

            $table->string('cadangan1')->nullable();
            $table->string('cadangan2')->nullable();
            $table->string('cadangan3')->nullable();
            $table->string('cadangan4')->nullable();

    $table->softDeletes();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berkasperlombaans');
    }
};
