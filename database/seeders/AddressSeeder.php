<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Address; // Adicionamos esta linha

class AddressSeeder extends Seeder
{
    public function run()
    {
        Address::create([
            'street' => 'Rua das Flores',
            'city' => 'São Paulo',
            'state' => 'SP',
            'zip_code' => '01001-000',
        ]);

        Address::create([
            'street' => 'Avenida Brasil',
            'city' => 'Rio de Janeiro',
            'state' => 'RJ',
            'zip_code' => '20040-000',
        ]);
    }
}
