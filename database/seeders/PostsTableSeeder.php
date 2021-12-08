<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;
use App\Models\Post;
use App\Models\User;
use App\Models\Area;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->delete();
        $user = User::first();
        $area = Area::first();
        Post::factory()->count(20)->create(['user_id' => $user->id, 'area_id' => $area->id]);

    }
}
