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
        Schema::create('onboardingprivates', function (Blueprint $table) {
            $table->id();
            $table->integer('nomor_form');
            $table->string('nama');
            $table->integer('nis_nim_nip');
            $table->string('kompetensi_keahlian');
            $table->string('kategori_peserta');
            $table->date('tanggal_pengajuan');
            $table->date('tanggal_mulai');
            $table->date('tanggal_berakhir');
            $table->integer('nilai_psikotes');
            $table->integer('nilai_wawancara');
            $table->string('hasil_seleksi');
            $table->string('nomor_surat_konfirmasi');
            $table->date('tanggal_surat_konfirmasi');
            $table->string('link_surat_konfirmasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('onboardingprivates');
    }
};
