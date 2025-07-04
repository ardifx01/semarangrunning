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
        Schema::create('hspkodepekerjaan7s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hspkonstruksiumum7_id')->nullable();
            $table->foreignId('hsppaket7_id')->nullable();
            $table->string('kodepekerjaan')->nullable();
            $table->string('namapekerjaan')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hspkodepekerjaan7s');
    }
};
