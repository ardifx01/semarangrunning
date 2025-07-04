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
        Schema::create('shstbloras', function (Blueprint $table) {
            $table->id();
            $table->string('kabupaten')->nullable();
            $table->decimal('bangunankantortidaksederhana', 15, 2)->nullable();
            $table->decimal('bangunankantorsederhana', 15, 2)->nullable();
            $table->decimal('rumahnegaratipea', 15, 2)->nullable();
            $table->decimal('rumahnegaratipeb', 15, 2)->nullable();
            $table->decimal('rumahnegaratipecde', 15, 2)->nullable();
            $table->decimal('pagarrumahdepan', 15, 2)->nullable();
            $table->decimal('pagarrumahbelakang', 15, 2)->nullable();
            $table->decimal('pagarrumahsamping', 15, 2)->nullable();
            $table->decimal('pagarrumahnegaradepan', 15, 2)->nullable();
            $table->decimal('pagarrumahnegarabelakang', 15, 2)->nullable();
            $table->decimal('pagarrumahnegarasamping', 15, 2)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shstbloras');
    }
};
