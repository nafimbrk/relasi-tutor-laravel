<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Eko Kurniawan',
                'email' => 'ekokurniawan@gmail.com',
                'password' => Hash::make('rahasiabanget')
            ], [
                'name' => 'Herman Susanto',
                'email' => 'hermansusanto@gmail.com',
                'password' => Hash::make('rahasiabanget')
            ], [
                'name' => 'Putri Maharani',
                'email' => 'putrimaharani@gmail.com',
                'password' => Hash::make('rahasiabanget')
            ]
        ];

        foreach ($data as $item) {
            User::create($item);
        }
    }







}
