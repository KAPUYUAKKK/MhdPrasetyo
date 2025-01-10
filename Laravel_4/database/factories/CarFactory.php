<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\CarType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CarFactory extends Factory
{
    protected $model = Car::class;

    public function definition()
    {
        return [
            'id' => Str::uuid(),
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'image' => $this->faker->imageUrl(300, 450, 'cars'),
            'year' => $this->faker->year(),
            'available' => $this->faker->boolean(80), // 80% true
            'car_type_id' => CarType::inRandomOrder()->first()->id ?? CarType::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
