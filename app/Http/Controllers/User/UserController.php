<?php

namespace App\Http\Controllers\User;

use App\Models\Produk;
use App\Http\Controllers\Controller;
use App\Models\Carousel;
use App\Models\Pesanan;


class UserController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        $carousels = Carousel::all();
        return view('user.dashboard', compact('produk', 'carousels'));
    }


    public function show($id)
    {
        $produk = Produk::findOrFail($id);

        $related_produks = Produk::where('id', '!=', $produk->id)
            ->where(function ($query) use ($produk) {
                $query->where('kategori', $produk->kategori)
                    ->orWhere('nama_produk', 'LIKE', '%' . explode(' ', $produk->nama_produk)[0] . '%');
            })
            ->limit(4)
            ->get();

        if ($related_produks->isEmpty()) {
            $related_produks = Produk::where('id', '!=', $produk->id)
                ->inRandomOrder()
                ->limit(4)
                ->get();
        }

        return view('user.detail', compact('produk', 'related_produks'));
    }
}
