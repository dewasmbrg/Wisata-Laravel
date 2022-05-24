<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama_hotel',
        'alamat_hotel',
        'deskripsi',
        'contact',
        'gambar',
        'id_user'
    ];

    protected $table = 'hotel';

    public static function latestPaginatedHotel(int $limit) {
        $hotel = self::orderBy('created_at', 'desc')->paginate($limit);

        return $hotel;
    }

    public static function hargaTerbesar(int $limit)
    {
        $hotel = self::orderBy('harga_hotel', 'desc')->paginate($limit);

        return $hotel;
    }

    public static function hargaTerkecil(int $limit)
    {
        $hotel = self::orderBy('harga_hotel', 'asc')->paginate($limit);

        return $hotel;
    }

    public function getPemesanan()
    {
        return $this->hasMany(PemesananHotel::class);
    }
}
