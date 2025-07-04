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
        Schema::create('tertibjakonpenyelenggaraans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penyediastatustertibjakon_id')->nullable();
            $table->string('kegiatankonstruksi')->nullable();
            $table->string('namapekerjaan')->nullable();
            $table->string('nomorkontrak')->nullable();
            $table->string('bujk')->nullable();
            $table->string('prosespemilihan')->nullable();
            $table->string('pengawasan_standarkontrak')->nullable();
            $table->string('pengawasan_tenagakerja')->nullable();
            $table->string('pengawasan_penunjang')->nullable();
            $table->string('pengawasan_dokumenk4')->nullable();
            $table->string('pengawasan_smkk')->nullable();
            $table->string('pengawasan_kecelakaankerja')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tertibjakonpenyelenggaraans');
    }
};
