<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuModel extends Model
{
    use HasFactory;
    protected $table = 'bukus';
    protected $fillable = [
        'Judul',
        'Penulis',
        'Tanggal_Terbit',
        'Genre'
    ];
}
