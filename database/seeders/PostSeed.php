<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class PostSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 1; $i++) {
            Post::create([
                'student_id' => $faker->numberBetween(1, 10),
                'title' => Str::random(10),
                'content' => Str::random(100),
            ]);
        }
    }
}
