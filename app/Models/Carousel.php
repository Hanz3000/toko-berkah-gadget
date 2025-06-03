<?php

namespace App\Models;

class Carousel extends \Illuminate\Database\Eloquent\Model
{
    // ... kode model Anda (jika ada) ...
    protected $table = 'carousels'; // Jika nama tabel Anda bukan 'carousels' (plural dari nama model secara konvensi)

    // Anda mungkin juga perlu menambahkan properti $fillable atau $guarded di sini
}
