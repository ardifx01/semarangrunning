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
        Schema::create('profiljakonidentitasopds', function (Blueprint $table) {
            $table->id();
            $table->string('namaopd')->nullable();
            $table->text('alamatopd')->nullable();
            $table->string('rtrw')->nullable();
            $table->string('kodepos')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kota')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('negara')->nullable();
            $table->text('posisigeografis')->nullable();
            $table->string('tipedinas')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiljakonidentitasopds');
    }
};
