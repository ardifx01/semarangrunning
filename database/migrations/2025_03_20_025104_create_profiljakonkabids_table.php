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
        Schema::create('profiljakonkabids', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap')->nullable();
            $table->string('nip')->nullable();
            $table->string('ttl')->nullable();
            $table->string('pangkatgolongan')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('perangkatdaerah')->nullable();
            $table->string('pendidikanterakhir')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiljakonkabids');
    }
};
