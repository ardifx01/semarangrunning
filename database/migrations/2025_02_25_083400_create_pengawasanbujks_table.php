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
        Schema::create('pengawasanbujks', function (Blueprint $table) {
            $table->id();
            $table->string('kodeproyek')->nullable();
            $table->string('namaperusahaan')->nullable();;
            $table->text('alamatperusahaan')->nullable();;  // Menggunakan text karena alamat bisa lebih panjang
            $table->string('statusmodal')->nullable();;
            $table->string('jenisperusahaan')->nullable();;
            $table->string('nib')->nullable();;
            $table->string('kbli')->nullable();;
            $table->text('uraiankbli')->nullable();;  // Menggunakan text jika deskripsi lebih panjang
            $table->string('sektor')->nullable();;
            $table->string('alamatproyek')->nullable();;
            $table->string('wilayah')->nullable();;
            $table->decimal('luastanah', 10, 2)->nullable();;  // Menggunakan decimal untuk luas tanah (dengan 2 desimal)
            $table->integer('tki_lakilaki')->default(0)->nullable();;  // Menggunakan integer untuk jumlah
            $table->integer('tki_perempuan')->default(0)->nullable();;
            $table->integer('tka_lakilaki')->default(0)->nullable();;
            $table->integer('tka_perempuan')->default(0)->nullable();;
            $table->string('resiko')->nullable();;
            $table->string('sumberdata')->nullable();;
            $table->decimal('investasi', 15, 2)->nullable();;  // Menggunakan decimal untuk nilai investasi (dengan 2 desimal)
            $table->string('skalausahaperusahaan')->nullable();;
            $table->string('skalausahaproyek')->nullable();;
            $table->string('kewenangankoordinator')->nullable();;
            $table->string('kewenanganpengawas')->nullable();;
            $table->string('PSN');
            $table->softDeletes();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengawasanbujks');
    }
};
