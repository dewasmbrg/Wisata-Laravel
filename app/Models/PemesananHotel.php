<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemesananHotel extends Model
{
    use HasFactory;

    protected $table = 'transaksi_pemesanan_hotel';

    protected $fillable = [
        'id',
        'nama_hotel',
        'nama_pemesan',
        'lama_inap',
        'tanggal_pesanan',
        'id_hotel',
        'id_user',
    ];

    public function getHotel()
    {
        return $this->belongsTo(Hotel::class, 'id_hotel');
    }

    public function getUser()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
