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
        Schema::create('peralatankonstruksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kecamatanblora_id')->nullable();
            $table->foreignId('alatberat_id')->nullable();
            $table->string('namabadanusaha')->nullable();
            $table->string('foto')->nullable();
            $table->string('nib')->nullable();
            $table->string('notelepon')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peralatankonstruksis');
    }
};
