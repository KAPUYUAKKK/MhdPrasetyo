<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CarUserSeeder extends Seeder
{
    public function run()
    {
        // Data awal untuk car_users
        $carUsers = [
            [
                'id' => Str::uuid(),
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'car_model' => 'Toyota Camry',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'car_model' => 'Honda Accord',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert ke database
        DB::table('car_users')->insert($carUsers);
    }
}
