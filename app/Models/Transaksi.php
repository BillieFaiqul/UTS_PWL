<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    //protected $primarykey = 'id';
    //protected $keyType = 'int';
    protected $fillable = [
        'nama',
        'judul_buku',
        'tanggal_pinjam',
        'tanggal_kembali',
        'Status'
    ];
}
