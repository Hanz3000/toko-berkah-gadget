<?php

namespace App\Http\Controllers\User;

use App\Models\Produk;
use App\Models\Keranjang;
use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        $carousels = Carousel::all();

        $jumlahKeranjang = 0;
        if ($user = Auth::user()) {
            $jumlahKeranjang = Keranjang::where('user_id', $user->id)->sum('jumlah');
        }

        return view('user.dashboard', compact('produk', 'carousels', 'jumlahKeranjang'));
    }

    public function katalogProduk()
    {
        $userId = Auth::id();

        $keranjangItems = Keranjang::with('produk')
            ->where('user_id', $userId)
            ->get();

        $jumlahProduk = $keranjangItems->count();

        return view('user.katalog-produk', compact('keranjangItems', 'jumlahProduk'));
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

    public function favorit()
    {
        $user = auth()->user();
        $favorit_produk = $user->favorit()->latest()->get();
        $favorit = $favorit_produk->pluck('id')->toArray();
        $produkFavorit = $user->favorit()->get();

        return view('user.favorit', compact('favorit_produk', 'favorit'));
    }
}