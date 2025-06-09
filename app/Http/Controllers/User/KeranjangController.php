<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keranjang;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{
    // Tampilkan halaman keranjang
    public function index()
    {
        $userId = Auth::id();

        $items = Keranjang::with('produk')
            ->where('user_id', $userId)
            ->get();

        $jumlahProduk = $items->count();

        return view('keranjang.index', compact('items', 'jumlahProduk'));
    }

    // Tambah produk ke keranjang
    public function tambah(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'produk_id' => 'required|exists:produk,id',
        ]);

        $keranjang = Keranjang::where('user_id', $user->id)
            ->where('produk_id', $request->produk_id)
            ->first();

        if ($keranjang) {
            $keranjang->jumlah += 1;
            $keranjang->save();
        } else {
            Keranjang::create([
                'user_id' => $user->id,
                'produk_id' => $request->produk_id,
                'jumlah' => 1,
            ]);
        }

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang.');
    }

    // Kurangi jumlah produk
    public function kurang($id)
    {
        $keranjang = Keranjang::findOrFail($id);

        if ($keranjang->jumlah > 1) {
            $keranjang->jumlah -= 1;
            $keranjang->save();
        } else {
            $keranjang->delete();
        }

        return redirect()->back()->with('success', 'Jumlah produk diperbarui.');
    }

    // Hapus item dari keranjang
    public function hapus($id)
    {
        $keranjang = Keranjang::findOrFail($id);
        $keranjang->delete();

        return redirect()->back()->with('success', 'Produk dihapus dari keranjang.');
    }
}
