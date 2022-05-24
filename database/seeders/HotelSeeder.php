<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hotel::create([
            'nama_hotel' => 'Cambridge Hotel',
            'alamat_hotel' => 'Jl. S Parman No. 217, Medan, Sumatera Utara, Indonesia, 20152',
            'deskripsi' => 'Cambridge Hotel Medan terletak di jantung kawasan bisnis Medan, serta menawarkan kamar-kamar modern dengan kolam renang luar ruangan dan bar di puncak gedung.',
            'contact' => '+62 61 4576999',
            'harga_hotel' => '5900000',
            'gambar' => 'pict/hotel/1.jpg',
            'id_user' => 1
        ]);

        Hotel::create([
            'nama_hotel' => 'The Excelton Hotel',
            'alamat_hotel' => 'Jl Demang Lebar Daun No.58, 30137 Palembang, Indonesia',
            'deskripsi' => 'Menawarkan sebuah bar, The Excelton Hotel terletak di Palembang, Sumatra, 8 km dari Jembatan Ampera dan 3,5 km dari Palembang Square. Berbagai fasilitas akomodasi di antaranya adalah restoran, resepsionis 24 jam, layanan kamar, dan WiFi gratis di seluruh areanya.',
            'contact' => '+62 711 416609',
            'harga_hotel' => '7610000',
            'gambar' => 'pict/hotel/2.jpg',
            'id_user' => 1
        ]);

        Hotel::create([
            'nama_hotel' => 'Novotel Pekanbaru',
            'alamat_hotel' => 'Jalan Riau No 59, Senapelan, Pekanbaru, Riau, Indonesia, 28154',
            'deskripsi' => 'Terletak di Pekanbaru, berjarak 200 meter dari Ciputra Mall Seraya, Novotel Pekanbaru menawarkan akomodasi yang nyaman. Tempat nyaman dan tenang, cocok untuk beristirahat setelah melakukan kegiatan danpekerjaan seharian',
            'contact' => '(0761) 25599',
            'harga_hotel' => '1199980',
            'gambar' => 'pict/hotel/3.jpeg',
            'id_user' => 1
        ]);

        Hotel::create([
            'nama_hotel' => 'Pangeran Beach Hotel',
            'alamat_hotel' => 'Jl. Ir. H. Juanda No 79, 54613 Padang, Indonesia',
            'deskripsi' => '
            Selain memiliki lokasi strategis di Padang, Pangeran Beach Hotel hanya 15 menit berkendara dari Pantai Pasir Jambak. Hotel ini memiliki sebuah kolam renang outdoor, restoran, dan kamar-kamar dengan TV layar datar. Wi-Fi dan parkir tersedia gratis.',
            'contact' => '(0751) 7051333',
            'harga_hotel' => '1500000',
            'gambar' => 'pict/hotel/4.jpeg',
            'id_user' => 1
        ]);

        Hotel::create([
            'nama_hotel' => 'Hotel Swiss-Belhotel',
            'alamat_hotel' => 'Jl. Rasuna Said No 18, 35214 Bandar Lampung, Indonesia',
            'deskripsi' => 'Salah satu pilihan utama kami di Bandar Lampung. Dapat dicapai dalam 10 menit berkendara dari pusat kota, Central Plaza, dan mal Kartini, Swiss-Belhotel Lampung menawarkan kamar-kamar berkualitas dan Wi-Fi gratis di seluruh areanya.',
            'contact' => '(0721) 8017777',
            'harga_hotel' => '5729000',
            'gambar' => 'pict/hotel/5.jpeg',
            'id_user' => 1
        ]);

        Hotel::create([
            'nama_hotel' => 'JW Marriott Hotel',
            'alamat_hotel' => 'Jalan Putri Hijau No. 10, 20111 Medan, Indonesia',
            'deskripsi' => '
            Dapatkan pelayanan kelas dunia ala selebriti di JW Marriott Hotel Medan
             Salah satu pilihan utama kami di Medan.
            JW Marriott Hotel Medan terletak di pusat kota dan menawarkan akomodasi dengan TV LED 55 inci. Hotel ini memiliki kolam renang luar ruangan tak bertepi, pusat kebugaran 24 jam, spa, dan 6 pilihan tempat bersantap. Terdapat layanan antar-jemput dari Centre Point Mall.',
            'contact' => '(061) 4553333',
            'harga_hotel' => '1305685',
            'gambar' => 'pict/hotel/6.jpeg',
            'id_user' => 1
        ]);
    }
}
