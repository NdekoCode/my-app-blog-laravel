<?php

use App\Post;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Post::class, 100)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
