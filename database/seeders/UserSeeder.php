<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::firstOrCreate(
            ['email' => 'master@nazateenconference.com.br'],
            [
                'name' => 'Master',
                'password' => Hash::make('Master@123')
            ]
        );
    }
}
