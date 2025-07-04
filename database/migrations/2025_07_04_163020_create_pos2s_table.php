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
        Schema::create('pos2s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('berkaslomba_id')->nullable();
            $table->string('point')->nullable();
            $table->string('waktu')->nullable();
            $table->string('pos')->nullable();
            $table->string('jawabpos')->nullable();
            $table->string('barcode')->nullable();
                        $table->string('status')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pos2s');
    }
};
