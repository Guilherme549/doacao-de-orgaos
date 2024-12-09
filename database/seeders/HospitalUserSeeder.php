<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Hospital;
use Illuminate\Database\Seeder;

class HospitalUserSeeder extends Seeder
{
    public function run()
    {
        $user = User::first();
        $hospital = Hospital::first();

        $hospital->users()->attach($user->id);
    }
}
