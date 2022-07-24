<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surveilans2 extends Model
{
    use HasFactory;

    protected $table = 'surveilans_2';

    protected $fillable = [
        'id_surveilens2',
        // 'identitas_penyakit_id',
        'id_register',
        'nama_penyakit',
        'lakilaki',
        'perempuan',
        'lga',
        'lgb',
        'lgc',
        'lgd',
        'lge',
        'lgf',
        'lgg',
        'lgh',
        'lgi',
        'lgj',
        'lgk',
        'lgl',
        'pga',
        'pgb',
        'pgc',
        'pgd',
        'pge',
        'pgf',
        'pgg',
        'pgh',
        'pgi',
        'pgj',
        'pgk',
        'pgl',
        'total_kunjungan',
    ];
}
