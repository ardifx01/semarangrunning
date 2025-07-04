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
        Schema::create('berkaslombas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('perlombaan_id')->nullable()->index();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('surat1')->nullable();
            $table->string('surat2')->nullable();

            $table->string('verifikasi1')->nullable();
            $table->string('verifikasi2')->nullable();
            $table->string('verifikasi3')->nullable();
            $table->string('verifikasi4')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berkaslombas');
    }
};
