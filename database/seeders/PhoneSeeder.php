<?php

namespace Database\Seeders;

use App\Models\Phone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1,
                'phone' => '0858283739'
            ], [
                'user_id' => 2,
                'phone' => '0858585869'
            ], [
                'user_id' => 3,
                'phone' => '0850858909'
            ]
        ];

        foreach ($data as $item) {
            Phone::create($item);
        }

    }
}
