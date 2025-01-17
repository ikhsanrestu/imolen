<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaAktif extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_presensi',
        'id_card',
        'status_kekatifan',
        'status_kepesertaan',
        'nama',
        'jk',
        'notelp',
        'asal_instansi',
        'nis_nim',
        'kompetensi_programstudi',
        'periode_awal',
        'periode_akhir',
        'gedung_penempatan',
        'pembimbing_perusahaan',
        'unit_penempatan',
        'jenis_pekerjaan',
        'pembimbing_perusahaan',
        'reguler_msib_magenta', // Pastikan kolom ini ada di $fillable
    ];
}
