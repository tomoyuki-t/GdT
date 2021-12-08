<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use App\Models\User;
use App\Models\Area;
use Faker\Generator as Faker;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => function(){
                return factory(App\Models\User::class)->create()->id;
            },
            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(),
            'area_id' => function(){
                return factory(App\Models\Area::class)->create()->id;
            },
            'gender' => $this->faker->numberBetween(0, 2),

            
        ];
    }
}
