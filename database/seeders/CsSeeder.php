<?php

namespace Database\Seeders;

use App\Models\Cs;
use Illuminate\Database\Seeder;

class CsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cs::create([
            'nama' => 'Andre Pernando Hutabarat',
            'email' => 'andre_hutabarat@gmail.com',
            'no_whatsapp' => '+62 813-6286-1470',
            'id_user' => 1,
        ]);

        Cs::create([
            'nama' => 'Ayuly Sari Sinambela',
            'email' => 'ayuly_sinambela@gmail.com',
            'no_whatsapp' => '+62 823-6321-7012',
            'id_user' => 1,
        ]);

        Cs::create([
            'nama' => 'Dewa Sembiring',
            'email' => 'dewasembiring1@gmail.com',
            'no_whatsapp' => '+62 857-6282-7062',
            'id_user' => 1,
        ]);

        Cs::create([
            'nama' => 'Juwita D. Sitorus',
            'email' => 'juwita_sitorus@gmail.com',
            'no_whatsapp' => '+62 813-8406-8422',
            'id_user' => 1,
        ]);

        Cs::create([
            'nama' => 'Weny Ari S. Purba',
            'email' => 'weny_purba@gmail.com',
            'no_whatsapp' => '+62 882-6240-8243',
            'id_user' => 1,
        ]);
    }
}
