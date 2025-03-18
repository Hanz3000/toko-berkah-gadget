<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk'; // Nama tabel

    protected $fillable = [
        'nama_produk',
        'kategori',
        'harga',
        'deskripsi',
        'kekurangan',
        'kelengkapan',
        'gambar'
    ];
}
