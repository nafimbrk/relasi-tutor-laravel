<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Pemrograman',
                'content' => 'Isi konten pemrograman'
            ], [
                'title' => 'Struktur Data',
                'content' => 'Isi konten struktur data'
            ]
        ];

        foreach ($data as $item) {
            Post::create($item);
        }
    }
}
