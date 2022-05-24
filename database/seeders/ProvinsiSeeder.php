<?php

namespace Database\Seeders;

use App\Models\Provinsi;
use Illuminate\Database\Seeder;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinsi = [
            'Nanggroe Aceh Darussalam',
            'Sumatera Utara',
            'Sumatera Barat',
            'Riau',
            'Kepulauan Riau',
            'Jambi',
            'Bengkulu',
            'Sumatera Selatan',
            'Kepulauan Bangka Belitung',
            'Lampung',
        ];

        foreach ($provinsi as $prov) {
            Provinsi::create(['nama_provinsi' => $prov]);
        }
    }
}
