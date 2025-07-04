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
        Schema::create('rantaipasokbloras', function (Blueprint $table) {
            $table->id();
            $table->string('distributor')->nullable();
            $table->string('nib')->nullable();
            $table->string('alamat')->nullable();
            $table->string('notelepon')->nullable();
            $table->string('materialproduk')->nullable();
            $table->string('foto')->nullable();
            $table->string('submaterialproduk')->nullable();
            $table->string('merkproduk')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rantaipasokbloras');
    }
};
