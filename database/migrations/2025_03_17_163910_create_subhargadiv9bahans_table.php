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
        Schema::create('subhargadiv9bahans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hspkonstruksiumum9_id')->nullable();
            $table->string('uraian')->nullable();
            $table->string('kode')->nullable();
            $table->string('satuan')->nullable();
            $table->string('koefisien')->nullable();
            $table->string('hargasatuan')->nullable();
            $table->bigInteger('jumlah_pagu')->nullable();
            $table->softDeletes();
            $table->timestamps();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subhargadiv9bahans');
    }
};
