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
            'delete contact',
            'view service',
            'edit service',
            'delete service',
            'view service feature',
            'edit service feature',
            'delete service feature',
            'view testimonial',
            'edit testimonial',
            'delete testimonial',
            'view logo',
            'edit logo',
            'delete logo',
            'view website content',
            'view banner',
            'create banner',
            'edit banner',
            'delete banner',
            'change banner status',
            'view team',
            'add member',
            'edit member',
            'delete member',
            'view blog',
            'edit blog',
            'delete blog',
            'view choose us',
            'add choose item',
            'edit choose item',
            'delete choose item',
            'view choose feature',
            'add feature',
            'edit feature',
            'delete feature',
            'view about',
            'add about info',
            'edit about info',
            'delete about info',
            'view faq',
            'add faq',
            'edit faq',
            'delete faq',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }
    }

}
