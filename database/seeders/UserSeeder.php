<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:: table('users')->insert([
            [
                'name' => 'Billie',
                'username' => 'Billie',
                'email' => 'billieizzat@gmail.com',
                'password' => Hash::make('billiefi05')
            ],
            [
                'name' => 'Bintang',
                'username' => 'Bintang',
                'email' => 'bintang@gmail.com',
                'password' => Hash::make('bintang')
            ]
            ]);
    }
}
