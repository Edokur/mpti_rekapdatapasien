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
        'nama_pasien',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'kepala_keluarga',
        'no_bpjs',
    ];
}
