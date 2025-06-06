<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;
use App\Models\Produk; // jika kamu punya model Produk
use App\Models\Carousel; // jika kamu punya model Carousel

class KontakController extends Controller
{
    public function index()
    {
        $kontak = Kontak::latest()->get();

        // Kirim juga produk dan carousel agar tidak error di dashboard.blade.php
        $produk = Produk::latest()->get(); // atau [] jika belum ada
        $carousels = Carousel::latest()->get(); // atau [] jika belum ada

        return view('user.dashboard', compact('kontak', 'produk', 'carousels'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'pesan' => 'required|string',
        ]);

        Kontak::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'pesan' => $request->pesan,
        ]);

        return redirect('/dashboard')->with('success', 'Pesan berhasil dikirim!');
    }
}
