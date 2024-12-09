<?php

namespace Database\Seeders;

use App\Models\Hospital;
use Illuminate\Database\Seeder;

class HospitalSeeder extends Seeder
{
    public function run()
    {
        Hospital::create(['name' => 'Hospital das Clínicas', 'city' => 'São Paulo', 'state' => 'SP']);
        Hospital::create(['name' => 'Hospital Sírio-Libanês', 'city' => 'São Paulo', 'state' => 'SP']);
        Hospital::create(['name' => 'Hospital Albert Einstein', 'city' => 'São Paulo', 'state' => 'SP']);
    }
}
