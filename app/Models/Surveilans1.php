<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surveilans1 extends Model
{
    use HasFactory;

    protected $table = 'surveilans_1';

    protected $fillable = [
        'id_surveilens1',
        'id_register',
        // 'pasien_id',
        'nama_pasien',
        'umur',
        'jenis_kelamin',
        'alamat',
        'tanggal',
        'diagnosa',
    ];
}
