<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $fillable = [
        'nama_produk',
        'kategori',
        'harga',
        'deskripsi',
        'kekurangan',
        'kelengkapan',
        'gambar',
        'warna' // tambahkan ini
    ];


    public function favoritOleh()
    {
        return $this->belongsToMany(\App\Models\User::class, 'favorit', 'produk_id', 'user_id');
    }
}
