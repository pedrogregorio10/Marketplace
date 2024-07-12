<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
        [
            'name' => 'Papa',
            'nickn' => 'Wemba',
            'email' => 'papa@gmail.com',
            'password' =>bcrypt('12345'),
            'rule' => 'admin',
        ],[
            'name' => 'Mama',
            'nickn' => 'sema',
            'email' => 'mama@gmail.com',
            'password' => bcrypt('12345'),
            'rule' => 'vendor',
        ],
        [
            'name' => 'Tilcia',
            'nickn' => 'Leal',
            'email' => 'tilcia@gmail.com',
            'password' => bcrypt('12345'),
            'rule' => 'user',
        ]
    ]);
    }
}
