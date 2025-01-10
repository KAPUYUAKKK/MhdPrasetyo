<?php

namespace Database\Factories;

use App\Models\CarRole;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CarRoleFactory extends Factory
{
    protected $model = CarRole::class;

    public function definition()
    {
        return [
            'id' => Str::uuid(),
            'name' => $this->faker->randomElement(['Driver', 'Owner', 'Mechanic']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
