<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Organ; // Adicionamos esta linha

class OrganSeeder extends Seeder
{
    public function run()
    {
        Organ::create(['name' => 'Coração', 'description' => 'Órgão vital para doação.']);
        Organ::create(['name' => 'Pulmão', 'description' => 'Órgão essencial para a respiração.']);
        Organ::create(['name' => 'Fígado', 'description' => 'Órgão responsável pela desintoxicação.']);
        Organ::create(['name' => 'Rim', 'description' => 'Órgão que filtra o sangue.']);
    }
}
