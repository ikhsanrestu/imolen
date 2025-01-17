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
        Schema::create('kelengkapanadministrasis', function (Blueprint $table) {
            $table->id();
            $table->integer('id_presensi');
            $table->string('nama');
            $table->string('data_keaktifan');
            $table->string('status_kepesertaan');
            $table->string('periode_awal');
            $table->string('periode_akhir');
            $table->string('surat_keterangan_sehat')->default('surat_keterangan_sehat.pdf');
            $table->string('sertifikat_vaksin');
            $table->string('background_checking');
            $table->string('surat_pengantar');
            $table->string('twibbon_in');
            $table->string('surat_pernyataan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelengkapanadministrasis');
    }
};
