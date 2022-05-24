<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cs extends Model
{
    use HasFactory;

    protected $table = 'cs';

    protected $fillable = [
        'id',
        'nama',
        'email',
        'no_whatsapp',
        'id_user',
    ];
}
