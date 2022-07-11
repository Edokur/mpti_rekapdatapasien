<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $table = 'log_identitas_pasien';

    protected $fillable = [
        'identitas_pasien_id',
        'deskripsi',
    ];
}
