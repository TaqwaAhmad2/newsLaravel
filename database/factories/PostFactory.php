<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence   ,
            'body'=>   $this->faker->text(200),
            'desc'=>   $this->faker->text(50),
            'category_id'=>$this->faker->numberBetween(1, DB::table('categories')->count())  ,
            'author_id'=>$this->faker->numberBetween(1, DB::table('authors')->count()) ,
            'post_image'=>$this->faker->imageUrl,
//            'small_image'=> $this->faker->imageUrl,
//            'views'=> $this->faker->randomNumber(2)  ,
//            'shares'=> $this->faker->randomNumber(2)  ,

        ];
    }
}
