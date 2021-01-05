<?php

namespace Database\Factories\admin;

use App\Models\admin\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->sentence(6, true),
            'slug'  => $this->faker->slug,
            'text'  => $this->faker->text
        ];
    }
}
