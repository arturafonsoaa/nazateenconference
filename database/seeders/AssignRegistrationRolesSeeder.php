<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AssignRegistrationRolesSeeder extends Seeder
{
    public function run()
    {
        $registrationUsers = User::where('name', '!=', 'Master')->get();

        foreach ($registrationUsers as $user) {
            $user->syncRoles(['registration']);
        }
    }
}
