<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wisata extends Model
{
    use HasFactory;

    protected $table = 'wisata';

    protected $fillable = [
        'id',
        'nama_wisata',
        'deskripsi',
        'provinsi_id',
        'gambar',
        'id_user',
    ];

    public static function latestPaginatedWisata(int $limit)
    {
        $wisata = self::orderBy('created_at', 'desc')->paginate($limit);

        return $wisata;
    }

    public function getProvinsi()
    {
        return $this->belongsTo(Provinsi::class, 'provinsi_id');
    }
}
