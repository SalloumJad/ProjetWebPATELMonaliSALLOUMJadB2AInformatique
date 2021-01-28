<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post as Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
        $post->title = 'Game advice!';
        $post->description = 'gpihHGOzbfombnZV';
        $post->image = 'link';
        $post->gameName = 'Game';
        $post->price = 15;
        $post->save();
    }
}
