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
        Schema::create('alatberats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('peralatankonstruksi_id')->nullable();
            $table->string('alatberat')->nullable();
            $table->string('jumlahalatberat')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alatberats');
    }
};
