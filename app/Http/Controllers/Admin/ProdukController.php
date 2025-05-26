<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Carousel;
use Carbon\Carbon;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('admin.produk.index', compact('produk'));
    }

    public function create()
    {
        return view('admin.produk.create');
    }

    public function tambah_admin()
    {
        return view('admin.produk.tambah_admin');
    }

    public function storeAdmin(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|confirmed|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin', // role otomatis admin
        ]);

        return redirect()->route('admin.produk.index')->with('success', 'Admin baru berhasil ditambahkan!');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'kekurangan' => 'nullable',
            'kelengkapan' => 'nullable',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('produk', 'public');
        }

        Produk::create([
            'nama_produk' => $request->nama_produk,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'kekurangan' => $request->kekurangan,
            'kelengkapan' => $request->kelengkapan,
            'gambar' => $gambarPath,
        ]);

        session()->flash('success', 'Produk berhasil ditambahkan!');
        return redirect()->route('admin.produk.index');

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('admin.produk.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'kekurangan' => 'nullable',
            'kelengkapan' => 'nullable',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $produk = Produk::findOrFail($id);
        $gambarPath = $produk->gambar; // Simpan path gambar lama

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($gambarPath) {
                Storage::delete('public/' . $gambarPath);
            }
            $gambarPath = $request->file('gambar')->store('produk', 'public');
        }

        $produk->update([
            'nama_produk' => $request->nama_produk,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'kekurangan' => $request->kekurangan,
            'kelengkapan' => $request->kelengkapan,
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);

        // Hapus gambar dari storage kalau ada
        if ($produk->gambar) {
            Storage::delete('public/' . $produk->gambar);
        }

        // Hapus dari database
        $produk->delete();

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil dihapus.');
    }

    public function search(Request $request)
    {
        $query = $request->query('query');
        $kategori = $request->query('kategori');
        $carousels = Carousel::all();


        // Pisahkan kategori jika ada lebih dari satu, atau set kategori menjadi array kosong jika tidak ada kategori
        $kategoriArr = $kategori ? explode('|', $kategori) : [];

        // Cari produk yang sesuai dengan query
        $produkQuery = Produk::where('nama_produk', 'like', '%' . $query . '%');

        // Jika ada kategori, filter produk berdasarkan kategori
        if (!empty($kategoriArr)) {
            $produkQuery->whereIn('kategori', $kategoriArr);
        }

        // Ambil produk yang sesuai
        $produk = $produkQuery->get();

        return view('user.dashboard', [
            'carousels' => $carousels,
            'produk' => $produk,
        ]);
    }

    public function showDashboard()
    {
        $produk = produk::all();
        return view('user.dashboard', compact('produk'));
    }
}
