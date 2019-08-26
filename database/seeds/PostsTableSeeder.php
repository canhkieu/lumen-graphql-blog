<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 25)->create()->each(function ($user) {
            $user->posts()->saveMany(factory(App\Post::class, 5)->make());
        });
    }
}
