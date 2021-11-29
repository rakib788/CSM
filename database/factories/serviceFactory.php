<?php

namespace Database\Factories;

use App\Models\service;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class serviceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'serviceName' => $this->faker->Name,
            'price' => $this->faker->numberBetween($min = 3000, $max = 5000),
        ];
    }
}
