<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CarRoleSeeder extends Seeder
{
    public function run()
    {
        // Data awal untuk car_roles
        $carRoles = [
            ['id' => Str::uuid(), 'name' => 'Driver', 'created_at' => now(), 'updated_at' => now()],
            ['id' => Str::uuid(), 'name' => 'Owner', 'created_at' => now(), 'updated_at' => now()],
            ['id' => Str::uuid(), 'name' => 'Mechanic', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Insert ke database
        DB::table('car_roles')->insert($carRoles);
    }
}
