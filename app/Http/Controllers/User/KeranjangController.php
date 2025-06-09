<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keranjang;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{
    public function tambah(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'produk_id' => 'required|exists:produk,id',
        ]);

        // Cek apakah produk sudah ada di keranjang user
        $keranjang = Keranjang::where('user_id', $user->id)
            ->where('produk_id', $request->produk_id)
            ->first();

        if ($keranjang) {
            // Jika sudah ada, jumlahkan
            $keranjang->jumlah += 1;
            $keranjang->save();
        } else {
            // Jika belum ada, buat baru
            Keranjang::create([
                'user_id' => $user->id,
                'produk_id' => $request->produk_id,
                'jumlah' => 1,
            ]);
        }

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang.');
    }
}
