<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'wisata-view',
            'wisata-create',
            'wisata-edit',
            'wisata-delete',
            'hotel-view',
            'hotel-create',
            'hotel-edit',
            'hotel-delete',
            'hotel-chart',
            'cs-view',
            'cs-create',
            'cs-edit',
            'cs-delete',
            'cs-xls',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
