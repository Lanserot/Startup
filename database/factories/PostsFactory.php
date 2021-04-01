<?php

namespace Database\Factories;

use App\Models\Posts;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Posts::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $pay = rand(0,10) == 0;
        return [
            'description' => $this->faker->text(1500),
            'title' => $this->faker->text(100),
            'category' => rand(1,2) == 1 ? "resume" : "vacancy",
            'user_id' => rand(1,10),
            'price' => $pay ? rand(100,10000) : 0,
            'pay' => $pay,
        ];

    }

}
