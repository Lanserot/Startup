<?php

namespace Database\Factories;

use App\Models\Resume;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ResumeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Resume::class;

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
            'user_id' => rand(1,10),
            'price' => $pay ? rand(100,10000) : 0,
            'pay' => $pay,
        ];
    }

}
