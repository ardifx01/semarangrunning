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
        Schema::create('allskktenagakerjabloras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agendaskk_id')->nullable();
            $table->foreignId('user_id')->nullable();
                    $table->string('jabatankerja')->nullable();
                    // $table->string('namalengkap')->nullable();
                    $table->string('tempatlahir')->nullable();
                    $table->date('ttl')->nullable();
                    $table->string('jeniskelamin')->nullable();
                    $table->string('nik')->nullable();
                    $table->string('alamat')->nullable();
                    $table->string('notelepon')->nullable();
                    $table->string('email')->nullable();

                    $table->foreignId('jenjangpendidikan_id')->nullable();
                    $table->foreignId('namasekolah_id')->nullable();

                    $table->integer('tahunlulus')->nullable();

                    $table->foreignId('tahunpilihan_id')->nullable();

                    $table->string('uploadktp')->nullable();
                    $table->string('uploadfoto')->nullable();
                    $table->string('uploadijazah')->nullable();
                    $table->string('uploadpengalaman')->nullable();
                    $table->string('uploadnpwp')->nullable();
                    $table->string('uploaddaftarriwayathidup')->nullable();

                    $table->string('namaasosiasi')->nullable();
                    $table->string('punyaskk')->nullable();
                    $table->string('punyasiki')->nullable();
                    $table->string('siappatuh')->nullable();
                    $table->string('verifikasipu')->nullable();
                    $table->string('verifikasilps')->nullable();

                    $table->softDeletes();
                    $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allskktenagakerjabloras');
    }
};
