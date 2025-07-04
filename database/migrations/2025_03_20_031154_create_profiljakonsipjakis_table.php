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
        Schema::create('profiljakonsipjakis', function (Blueprint $table) {
            $table->id();
            $table->string('nomor')->nullable();;
            $table->string('operator1')->nullable();;
            $table->string('operator2')->nullable();;
            $table->string('operator3')->nullable();;
            $table->string('operator4')->nullable();;
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiljakonsipjakis');
    }
};
