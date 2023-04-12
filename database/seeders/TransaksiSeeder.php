<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaksi')->insert([
            [
                'id' => 1,
                'nama' => 'Suhaimi Awali',
                'judul_buku'=>'Pelangi',
                'tanggal_pinjam'=>'2023-01-28',
                'tanggal_kembali'=>'2023-02-28',                
                'Status'=>'Belum Kembali'
            ],
            [
                'id' => 2,
                'nama' => 'Izza',
                'judul_buku'=>'Matahri',
                'tanggal_pinjam'=>'2023-01-18',
                'tanggal_kembali'=>'2023-02-18',                
                'Status'=>'Belum Kembali'           ],
            [
                'id' => 3,
                'nama' => 'Doni',
                'judul_buku'=>'Awan',
                'tanggal_pinjam'=>'2023-01-22',
                'tanggal_kembali'=>'2023-02-22',                
                'Status'=>'Sudah Kembali'
            ]
        ]);
    }
}
