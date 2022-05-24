<?php

namespace Database\Seeders;

use Database\Seeders\CsSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\HotelSeeder;
use Database\Seeders\WisataSeeder;
use Database\Seeders\ProvinsiSeeder;
use Database\Seeders\PermissionTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionTableSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProvinsiSeeder::class);
        $this->call(WisataSeeder::class);
        $this->call(HotelSeeder::class);
        $this->call(CsSeeder::class);
    }
}
