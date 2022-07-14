<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perkesmas extends Model
{
    use HasFactory;

    protected $table = 'perkesmas';

    protected $fillable = [
        'id_perkesmas',
        'id_register',
        'pasien_id',
        'nama_pasien',
        'nik',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'no_bpjs',
        'kepala_keluarga',
        'pendidikan',
        'tanggal_kunjungan',
        'kunjungan',
        'pekerjaan',
        'intervensi_keperawatan',
        'diagnosa_keperawatan',
        'implementasi_keperawatan',
        'keterangan',
    ];
}
