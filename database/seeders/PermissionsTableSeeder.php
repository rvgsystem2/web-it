<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'view users',
            'edit users',
            'delete users',
            'create users',
            'view roles',
            'edit roles',
            'delete roles',
            'create roles',
            'view permission',
            'edit permission',
            'delete permission',
            'create permission',
            'view job module',
            'view category',
            'create category',
            'edit category',
            'delete category',
            'view job listing',
            'post job',
            'edit job',
            'delete job',
            'view job application',
            'delete application',
            'view application',
            'view application resume',
            'change application status',
            'view contact',
            'view contact detail',
            'view service',
            'edit service',
            'delete service',
            'view service feature',
            'edit service feature',
            'delete service feature',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }
    }

}
