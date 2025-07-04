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
        Schema::create('skktenagakerjabloras', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->text('alamat')->nullable();
            $table->year('tahunlulus')->nullable();
            // -----------------------------------------------------------------------
            $table->foreignId('namasekolah_id')->nullable();
            $table->foreignId('jenjangpendidikan_id')->nullable();
            $table->foreignId('jurusan_id')->nullable();
            $table->foreignId('jabatankerja_id')->nullable();
            $table->foreignId('jenjang_id')->nullable();
            $table->foreignId('asosiasimasjaki_id')->nullable();
            $table->foreignId('lpspenerbit_id')->nullable();
            // ==================================================================================
            $table->date('tanggalterbit')->nullable();
            $table->date('tanggalhabis')->nullable();
            $table->enum('statusterbit', ['TERBIT', 'DALAM PROSES']);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skktenagakerjabloras');
    }
};
