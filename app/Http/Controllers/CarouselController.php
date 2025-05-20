<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Untuk mengelola file

class CarouselController extends Controller
{
    public function index()
    {
        $carousels = Carousel::all();
        return view('admin.carousels.index', compact('carousels'));
    }

    public function create()
    {
        return view('admin.carousels.create'); // Asumsikan Anda memiliki view 'create.blade.php' di direktori 'admin/carousels'
    }

    public function edit(Carousel $carousel)
    {
        return view('admin.carousels.edit', compact('carousel')); // Mengirimkan data carousel ke view edit
    }

    public function update(Request $request, Carousel $carousel)
    {
        // 1. Validasi data yang masuk dari form
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Gambar boleh null saat edit
            'harga_normal' => 'required|numeric',
            'harga_diskon' => 'nullable|numeric',
            // ... tambahkan validasi untuk kolom lain
        ]);

        // 2. Proses penyimpanan gambar baru (jika ada)
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($carousel->gambar) {
                Storage::delete('public/' . $carousel->gambar);
            }
            $gambar = $request->file('gambar');
            $namaGambar = time() . '_' . $gambar->getClientOriginalName();
            $pathGambar = $gambar->storeAs('carousels', $namaGambar);
            $carousel->gambar = str_replace('public/', '', $pathGambar);
        }

        // 3. Update data carousel di database
        $carousel->judul = $request->judul;
        $carousel->harga_normal = $request->harga_normal;
        $carousel->harga_diskon = $request->harga_diskon;
        // Update kolom lain sesuai kebutuhan
        $carousel->save();

        // 4. Redirect kembali dengan pesan sukses
        return redirect()->route('admin.carousels.index')->with('success', 'Carousel berhasil diperbarui.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'harga_normal' => 'required|numeric', // Pastikan validasi ini ada
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaGambar = time() . '_' . $gambar->getClientOriginalName();
            $pathGambar = $gambar->storeAs('carousels', $namaGambar);
        } else {
            $pathGambar = null;
        }

        $carousel = new Carousel();
        $carousel->judul = $request->judul;
        $carousel->gambar = str_replace('public/', '', $pathGambar);
        $carousel->harga_normal = $request->harga_normal; // Pastikan nilai ini disimpan
        $carousel->harga_diskon = $request->harga_diskon;
        $carousel->save();

        return redirect()->route('admin.carousels.index')->with('success', 'Carousel berhasil ditambahkan.');
    }

    public function destroy(Carousel $carousel)
    {
        // Hapus file gambar terkait (jika ada)
        if ($carousel->gambar) {
            Storage::delete('public/' . $carousel->gambar);
        }

        // Hapus data carousel dari database
        $carousel->delete();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('admin.carousels.index')->with('success', 'Carousel berhasil dihapus.');
    }

    // Tambahkan method lain untuk edit, update, delete di sini
}
