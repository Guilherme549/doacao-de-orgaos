<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile; // Importando a model Profile

class ProfileSeeder extends Seeder
{
    public function run()
    {
        Profile::create(['name' => 'Administrador']);
        Profile::create(['name' => 'Doador']);
        Profile::create(['name' => 'Receptor']);
    }
}
