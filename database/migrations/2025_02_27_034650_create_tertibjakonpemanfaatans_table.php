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
        Schema::create('tertibjakonpemanfaatans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penyediastatustertibjakon_id')->nullable();
            $table->string('namapekerjaan')->nullable();
            $table->string('namabangunan')->nullable();
            $table->string('nomorkontrak')->nullable();
            $table->string('lokasi')->nullable();
            $table->date('tanggalpembangunan')->nullable();
            $table->date('tanggalpemanfaatan')->nullable();
            $table->integer('umurkonstruksi')->nullable();
            $table->string('peruntukan_fungsi')->nullable();
            $table->string('peruntukan_lokasi')->nullable();
            $table->string('rencanaumur')->nullable();
            $table->string('kapasitasdanbeban')->nullable();
            $table->string('pemeliharaan_konstruksi')->nullable();
            $table->string('pemeliharaan_struktur')->nullable(); // Diperbaiki dari pemeliharaan_pemeliharaan
            $table->softDeletes();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tertibjakonpemanfaatans');
    }
};
