<?php

namespace App\Http\Controllers\User;

use App\Models\Produk;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $produk = Produk::all(); // Ambil semua data produk dari database
        return view('user.dashboard', compact('produk'));

        $produk = \App\Models\Produk::all();
        return view('user.dashboard', ['products' => $products]);
    }

    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('user.detail', compact('produk'));
    }
}
