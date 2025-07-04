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
        Schema::create('kegiatanjaskons', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('laporankegiatan_id');
            $table->foreignId('user_id');            
            $table->foreignId('pengawasanlokasi_id');            
            $table->text('judul_kegiatan');
            $table->text('alamat_kegiatan');
            $table->string('berita1')->nullable(); 
            $table->string('berita2')->nullable();
            $table->string('berita3')->nullable();
            $table->string('berita4')->nullable();
            $table->string('berita5')->nullable();
            $table->string('berita6')->nullable();
            $table->string('berita7')->nullable();
            $table->string('berita8')->nullable();
            $table->string('berita9')->nullable();
            $table->string('berita10')->nullable();
            $table->string('berita11')->nullable();
            $table->string('berita12')->nullable();
            $table->string('berita13')->nullable();
            $table->string('berita14')->nullable();
            $table->string('berita15')->nullable();
            $table->string('berita16')->nullable();
            $table->string('berita17')->nullable();
            $table->string('berita18')->nullable();
            $table->string('berita19')->nullable();
            $table->string('berita20')->nullable();
            // $table->string('laporanfoto1')->nullable();
            // $table->string('laporanfoto2')->nullable();
            // $table->string('laporanfoto3')->nullable();
            // $table->string('laporanfoto4')->nullable();
            // $table->string('laporanfoto5')->nullable();
            // $table->string('laporanfoto6')->nullable();
            // $table->string('laporanfoto7')->nullable();
            // $table->string('laporanfoto8')->nullable();
            // $table->string('laporanfoto9')->nullable();
            // $table->string('laporanfoto10')->nullable();
            // $table->string('laporanfoto11')->nullable();
            // $table->string('laporanfoto12')->nullable();
            // $table->string('laporanfoto13')->nullable();
            // $table->string('laporanfoto14')->nullable();
            // $table->string('laporanfoto15')->nullable();
            // $table->string('laporanfoto16')->nullable();
            // $table->string('laporanfoto17')->nullable();
            // $table->string('laporanfoto18')->nullable();
            // $table->string('laporanfoto19')->nullable();
            // $table->string('laporanfoto20')->nullable();
            // $table->string('laporanfoto21')->nullable();
            // $table->string('laporanfoto22')->nullable();
            // $table->string('laporanfoto23')->nullable();
            // $table->string('laporanfoto24')->nullable();
            // $table->string('laporanfoto25')->nullable();
            // $table->string('laporanfoto26')->nullable();
            // $table->string('laporanfoto27')->nullable();
            // $table->string('laporanfoto28')->nullable();
            $table->date('tanggal'); 
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatanjaskons');
    }
};
