<?php

namespace Database\Seeders;
namespace App\Models;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Post One',
                'expert' => 'Summary of Post One',
                'body' => 'Body of Post One',
                'image_path' => 'Empty',
                'is_published' => false,
                'min_to_read' => 2
            ],
            [
                'title' => 'Post Two',
                'expert' => 'Summary of Post Two',
                'body' => 'Body of Post Two',
                'image_path' => 'Empty',
                'is_published' => false,
                'min_to_read' => 2
            ]
        ];

        foreach ($posts as $key => $value) {
            Post::call($value);
        }
    }
}
