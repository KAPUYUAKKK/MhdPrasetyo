<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CarSeeder extends Seeder
{
    public function run()
    {
        // Ambil ID jenis mobil dari tabel car_types
        $carTypeId = DB::table('car_types')->first()->id ?? Str::uuid();

        // Data awal untuk cars
        $cars = [
            [
                'id' => Str::uuid(),
                'title' => 'Toyota Corolla',
                'description' => 'A reliable and fuel-efficient compact car.',
                'image' => 'corolla.jpg',
                'year' => 2020,
                'available' => true,
                'car_type_id' => $carTypeId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'title' => 'Ford Mustang',
                'description' => 'A classic American muscle car.',
                'image' => 'mustang.jpg',
                'year' => 2022,
                'available' => true,
                'car_type_id' => $carTypeId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert ke database
        DB::table('cars')->insert($cars);
    }
}
