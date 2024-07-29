<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Check if the role exists before creating it
        if (!Role::where('name', 'super-admin')->exists()) {
            Role::create(['name' => 'super-admin']);
        }

        if (!Role::where('name', 'customer')->exists()) {
            Role::create(['name' => 'customer']);
        }

        if (!Role::where('name', 'employee')->exists()) {
            Role::create(['name' => 'employee']);
        }

        // Create permissions (if needed)
        // Permission::create(['name' => 'edit articles']);

        // Assign permissions to roles (if needed)
        // $role->givePermissionTo('edit articles');
    }
}
