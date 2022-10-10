<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsSeeder extends Seeder
{
    public function run()
    {
        $admin = Role::firstOrCreate([
            'name' => 'admin'
        ]);

        $acquirer = Role::firstOrCreate([
            'name' => 'acquirer'
        ]);

        $registration = Role::firstOrCreate([
            'name' => 'registration'
        ]);

        $permissions = config('permissions');

        foreach ($permissions as $permission => $roles) {
            $permissionModel = Permission::firstOrCreate([
                'name' => $permission
            ]);

            $permissionModel->syncRoles($roles);
        }

        $masterUser = User::whereName('Master')->first();
        $masterUser->syncRoles(['admin']);
    }
}
