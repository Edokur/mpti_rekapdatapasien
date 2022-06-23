<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surveilans1 extends Model
{
    use HasFactory;

    protected $table = 'surveilans_1';

    protected $fillable = [
        'id',
        'id_pasien',
        'nama_pasien',
        'minggu',
        'umur',
        'tanggal',
        'diagnosa',
    ];
}
