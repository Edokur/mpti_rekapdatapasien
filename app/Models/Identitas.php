<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identitas extends Model
{
    use HasFactory;

    protected $table = 'identitas_pasien';

    protected $fillable = [
        'id',
        'id_pasien',
        'nama',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'kepala_keluarga',
        'nik',
        'no_bpjs',
        'pendidikan',
        'pekerjaan',
    ];
}
