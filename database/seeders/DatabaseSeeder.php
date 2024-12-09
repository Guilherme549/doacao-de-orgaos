<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            ProfileSeeder::class,
            UserSeeder::class,
            AddressSeeder::class,
            OrganSeeder::class,
            HospitalSeeder::class,
            UserOrganSeeder::class,
            HospitalUserSeeder::class,
        ]);
    }
}
