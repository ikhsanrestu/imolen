<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class onboardingprivate extends Model
{
    protected $fillable = [
        'nomor_form',
        'nama',
        'nis_nim_nip',
        'kompetensi_keahlian',
        'kategori_peserta',
        'tanggal_pengajuan',
        'tanggal_mulai',
        'tanggal_berakhir',
        'nilai_psikotes',
        'nilai_wawancara',
        'hasil_seleksi',
        'nomor_surat_konfirmasi',
        'tanggal_surat_konfirmasi',
        'link_surat_konfirmasi',
    ];
    
  
}
