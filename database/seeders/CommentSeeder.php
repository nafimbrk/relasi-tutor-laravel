<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'comment' => 'Mantap',
                'post_id' => '2'
            ], [
                'comment' => 'Terimakasih',
                'post_id' => '2'
            ], [
                'comment' => 'Berhasil',
                'post_id' => '1'
            ], [
                'comment' => 'Halo',
                'post_id' => '2'
            ], [
                'comment' => 'Work',
                'post_id' => '1'
            ]
        ];

        foreach ($data as $item) {
            Comment::create($item);
        }
    }
}
