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
        Schema::create('bujkkontraktors', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('bujkkontraktorsub_id');
            $table->foreignId('bujkkontraktorsub_id')->nullable();
            $table->foreignId('asosiasimasjaki_id')->nullable();
            $table->string('namalengkap')->nullable();
            $table->text('alamat')->nullable();
            $table->string('no_telepon')->nullable();
            $table->string('email')->nullable();
            $table->string('nomorindukberusaha')->nullable();
            $table->string('pju')->nullable();
            $table->string('no_akte')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('nama_notaris')->nullable();
            $table->string('no_pengesahan')->nullable();
            // $table->foreignId('tahunpilihan_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bujkkontraktors');
    }
};
