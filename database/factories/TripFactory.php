<?php

namespace Database\Factories;

use App\Models\Trip;
use Illuminate\Database\Eloquent\Factories\Factory;

class TripFactory extends Factory
{
    protected $model = Trip::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(2),
            'price' => $this->faker->randomFloat(2, 100, 5000),
            'seats' => $this->faker->numberBetween(1, 100),
            'supervisor' => $this->faker->name,
            'image' => $this->faker->imageUrl(),
            'destination' => $this->faker->city,
            'category' => $this->faker->word,
            'is_featured' => $this->faker->boolean,
            'is_started' => $this->faker->boolean,
            'start_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'end_date' => $this->faker->dateTimeBetween('+1 month', '+2 months'),
        ];
    }
}
