<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;
use App\Models\Produk;
use App\Models\Carousel;
use Illuminate\Support\Facades\Auth;

class KontakController extends Controller
{
    public function index()
    {
        $kontak = Kontak::latest()->get();
        $produk = Produk::latest()->get();
        $carousels = Carousel::latest()->get();

        return view('user.dashboard', compact('kontak', 'produk', 'carousels'));
    }

    public function store(Request $request)
    {
        // Cek apakah user sudah login
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Anda harus login untuk mengirim pesan.');
        }

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
