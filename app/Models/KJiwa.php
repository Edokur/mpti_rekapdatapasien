<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KJiwa extends Model
{
    use HasFactory;

    protected $table = 'kesehatan_jiwa';

    protected $fillable = [
        'id_kesehatan_jiwa',
        'id_register',
        'pasien_id',
        'nama_pasien',
        'nik',
        'tanggal_lahir',
        'alamat',
        'jenis_kelamin',
        'no_bpjs',
        'kepala_keluarga',
        'pendidikan',
        'pekerjaan',
        'diagnosa',
        'terapi',
        'tanggal_kunjungan',
        'kunjungan',
        'keterangan',
    ];
}
