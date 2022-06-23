<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perkesmas extends Model
{
    use HasFactory;

    protected $table = 'perkesmas';

    protected $fillable = [
        'id',
        'status',
        'judul',
        'deskripsi',
    ];
}
