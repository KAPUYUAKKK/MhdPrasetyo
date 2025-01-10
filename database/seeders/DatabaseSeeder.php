<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            CarRoleSeeder::class,
            CarUserSeeder::class,
            CarSeeder::class,
        ]);
    }
}

