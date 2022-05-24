<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin')
        ]);
        $admin->assignRole('admin');

        $customer = User::create([
            'name' => 'customer',
            'email' => 'customer@gmail.com',
            'password' => bcrypt('customer')
        ]);
        $customer->assignRole('customer');
    }
}
