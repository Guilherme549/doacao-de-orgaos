<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Organ;
use Illuminate\Database\Seeder;

class UserOrganSeeder extends Seeder
{
    public function run()
    {
        $user = User::first();
        $organ = Organ::first();

        $user->organs()->attach($organ->id);
    }
}
