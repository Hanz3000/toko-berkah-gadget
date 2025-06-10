<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;
use App\Models\Keranjang;

class KeranjangController extends Controller
{
    public function index()
    {
        $keranjang = session('keranjang', []);
        return view('user.keranjang', compact('keranjang'));
    }

    public function detail($id)
    {
        $produk = Produk::findOrFail($id);
        return view('user.detail_produk', compact('produk'));
    }


    public function tambahKeKeranjang(Request $request)
    {
        $request->validate([
            'produk_id' => 'required|integer|exists:produk,id',
            'jumlah' => 'nullable|integer|min:1',
        ]);

        $userId = Auth::id();

        $keranjang = Keranjang::where('user_id', $userId)
            ->where('produk_id', $request->produk_id)
            ->first();

        if ($keranjang) {
            $keranjang->jumlah += $request->jumlah ?? 1;
            $keranjang->save();
        } else {
            Keranjang::create([
                'user_id' => $userId,
                'produk_id' => $request->produk_id,
                'jumlah' => $request->jumlah ?? 1,
            ]);
        }

        return response()->json(['message' => 'Produk berhasil ditambahkan ke keranjang']);
    }
}