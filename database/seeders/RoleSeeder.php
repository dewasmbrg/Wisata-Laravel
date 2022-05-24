<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   //admin
        $admin = Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);
        $permissions = Permission::pluck('id','id')->all();
        $admin->syncPermissions($permissions);

        $customer = Role::create([
            'name' => 'customer',
            'guard_name' => 'web'
        ]);
        $permissions = Permission::where('name', 'wisata-view' )->
        orwhere('name', 'hotel-view' )->
        orwhere('name', 'cs-view' )->
        pluck('id','id');
        $customer->syncPermissions($permissions);
    }
}
