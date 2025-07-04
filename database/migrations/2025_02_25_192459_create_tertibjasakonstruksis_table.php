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
        Schema::create('tertibjasakonstruksis', function (Blueprint $table) {
            $table->id();
            $table->string('penyediastatustertibjakon_id');
            $table->string('nib')->nullable();
            $table->string('namapekerjaan')->nullable();
            $table->string('namabadanusaha')->nullable();
            $table->string('pjbu')->nullable();
            $table->string('sesuai_jenis')->nullable();
            $table->string('sesuai_sifat')->nullable();
            $table->string('sesuai_klasifikasi')->nullable();
            $table->string('sesuai_layanan')->nullable();
            $table->string('segmentasipasar_bentuk')->nullable();
            $table->string('segmentasipasar_kualifikasi')->nullable();
            $table->string('syarat_SBU')->nullable();
            $table->string('syarat_NIB')->nullable();
            $table->string('pelaksanaanpengembangan')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tertibjasakonstruksis');
    }
};
