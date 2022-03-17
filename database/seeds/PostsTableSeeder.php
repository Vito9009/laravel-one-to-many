<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i= 0; $i < 5; $i++) {
            $post = new Post();
            $post->title = $faker->words(7, true);
            $post->content = $faker->text();
            $post->slug = Str::of($post->title)->slug("-");
            // $post->published = rand(0,1);
            $post->save();
        }
    }
}