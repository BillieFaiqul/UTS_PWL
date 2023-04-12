<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bukus')->insert([
            [
                'Judul' => 'si kancil',
                'Penulis' => 'doni',
                'Tanggal_Terbit' => '2002-10-11',
                'Genre' => 'komedi'
            ],
            [
                'Judul' => 'hitman',
                'Penulis' => 'bili',
                'Tanggal_Terbit' => '2001-05-19',
                'Genre' => 'aksi'
            ], [
                'Judul' => 'pocong',
                'Penulis' => 'fito',
                'Tanggal_Terbit' => '1999-08-15',
                'Genre' => 'horor'
            ],
        ]);
    }
}
