<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\PostsTableSeeder;
use Database\Seeders\AreasTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            AreasTableSeeder::class,
            PostsTableSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
