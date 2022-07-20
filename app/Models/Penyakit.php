<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;

    protected $table = 'identitas_penyakit';

    protected $fillable = [
        'id_identitas_penyakit',
        'id_register',
        'nama_penyakit',
        'tanggal',
        'deskripsi',
    ];
}
