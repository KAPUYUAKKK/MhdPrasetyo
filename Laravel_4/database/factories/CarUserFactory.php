<?php

namespace Database\Factories;

use App\Models\CarUser;
use App\Models\CarRole;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CarUserFactory extends Factory
{
    protected $model = CarUser::class;

    public function definition()
    {
        return [
            'id' => Str::uuid(),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('password'), // Default password
            'car_role_id' => CarRole::inRandomOrder()->first()->id ?? CarRole::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
