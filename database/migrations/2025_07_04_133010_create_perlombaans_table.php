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
        Schema::create('perlombaans', function (Blueprint $table) {
            $table->id();
            $table->string('kegiatan')->nullable();
            $table->string('tempat')->nullable();
            $table->string('koordinat')->nullable();
            $table->string('lokasi')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perlombaans');
    }
};
