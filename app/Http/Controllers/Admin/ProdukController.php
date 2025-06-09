<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\User;
use App\Models\Carousel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    // 🔵 Tampilkan semua produk untuk admin (dengan pencarian dan pagination)
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Produk::query();

        if (!empty($search)) {
            $query->where('nama_produk', 'like', '%' . $search . '%');
        }

        $produk = $query->paginate(10); // pagination

        return view('admin.produk.index', compact('produk', 'search'));
    }

    // 🔵 Tampilkan form tambah produk
    public function create()
    {
        return view('admin.produk.create');
    }

    // 🔵 Tampilkan form tambah admin
    public function tambahAdmin()
    {
        return view('admin.produk.tambah_admin');
    }

    // 🟢 Simpan data admin baru
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
            'role' => 'admin',
        ]);

        return redirect()->route('admin.produk.index')->with('success', 'Admin baru berhasil ditambahkan!');
    }

    // 🟢 Simpan data produk baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk'   => 'required',
            'kategori'      => 'required',
            'harga'         => 'required|numeric',
            'deskripsi'     => 'required',
            'kekurangan'    => 'nullable',
            'kelengkapan'   => 'nullable',
            'gambar'        => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'warna'         => 'nullable|string',
        ]);

        $gambarPath = $request->hasFile('gambar')
            ? $request->file('gambar')->store('produk', 'public')
            : null;

        Produk::create([
            'nama_produk'   => $request->nama_produk,
            'kategori'      => $request->kategori,
            'harga'         => $request->harga,
            'deskripsi'     => $request->deskripsi,
            'kekurangan'    => $request->kekurangan,
            'kelengkapan'   => $request->kelengkapan,
            'gambar'        => $gambarPath,
            'warna'         => $request->warna,
        ]);

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    // 🟡 Tampilkan form edit produk
    public function edit($id)
    {
        $produk = Produk::find($id);

        if (!$produk) {
            return redirect()->route('admin.produk.index')->with('error', 'Produk tidak ditemukan.');
        }

        return view('admin.produk.edit', compact('produk'));
    }

    // 🟡 Update data produk
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk'   => 'required',
            'kategori'      => 'required',
            'harga'         => 'required|numeric',
            'deskripsi'     => 'required',
            'kekurangan'    => 'nullable',
            'kelengkapan'   => 'nullable',
            'gambar'        => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'warna'         => 'nullable|string',
        ]);

        $produk = Produk::findOrFail($id);
        $gambarPath = $produk->gambar;

        if ($request->hasFile('gambar')) {
            if ($gambarPath) {
                Storage::delete('public/' . $gambarPath);
            }
            $gambarPath = $request->file('gambar')->store('produk', 'public');
        }

        $produk->update([
            'nama_produk'   => $request->nama_produk,
            'kategori'      => $request->kategori,
            'harga'         => $request->harga,
            'deskripsi'     => $request->deskripsi,
            'kekurangan'    => $request->kekurangan,
            'kelengkapan'   => $request->kelengkapan,
            'gambar'        => $gambarPath,
            'warna'         => $request->warna,
        ]);

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil diperbarui!');
    }

    // 🔴 Hapus produk
    public function destroy($id)
    {
        $produk = Produk::find($id);

        if (!$produk) {
            return redirect()->route('admin.produk.index')->with('error', 'Produk tidak ditemukan.');
        }

        if ($produk->gambar) {
            Storage::delete('public/' . $produk->gambar);
        }

        $produk->delete();

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil dihapus.');
    }
// Di dalam ProdukController

// Tampilkan form tambah admin
public function tambah_admin()
{
    return view('admin.produk.tambah_admin'); // file blade kamu
}

// Simpan data admin baru
public function store_admin(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed',
    ]);

    // Simpan admin ke tabel users (dengan role admin, misalnya)
    User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => Hash::make($validated['password']),
        'role' => 'admin', // pastikan ada kolom ini kalau pakai sistem role
    ]);

    return redirect()->route('admin.produk.index')->with('success', 'Admin baru berhasil ditambahkan!');
}

    // 🔍 Pencarian produk untuk dashboard user
    public function search(Request $request)
    {
        $query = $request->query('query');
        $kategori = $request->query('kategori');
        $kategoriArr = $kategori ? explode('|', $kategori) : [];

        $produkQuery = Produk::where('nama_produk', 'like', '%' . $query . '%');

        if (!empty($kategoriArr)) {
            $produkQuery->whereIn('kategori', $kategoriArr);
        }

        $produk = $produkQuery->get();
        $carousels = Carousel::all();

        return view('user.dashboard', [
            'carousels' => $carousels,
            'produk' => $produk,
            'query' => $query,
        ]);
    }

    // 🟣 Dashboard user - tampilkan semua produk
    public function showDashboard()
    {
        $produk = Produk::all();
        return view('user.dashboard', compact('produk'));
    }

    // 🟢 API: Ambil semua produk (JSON)
    public function getAllProduk()
    {
        $produk = Produk::all();
        return response()->json($produk);
    }
}
