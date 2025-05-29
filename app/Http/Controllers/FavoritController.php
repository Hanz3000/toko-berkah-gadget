<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;

class FavoritController extends Controller
{
    public function toggle($id)
    {
        $user = Auth::user();
        if (!$user) {
            return response()->json([
                'redirect' => route('login')
            ], 401);
        }

        $produk = Produk::findOrFail($id);

        if ($user->favorit->contains($produk->id)) {
            $user->favorit()->detach($produk->id);
            return response()->json(['status' => 'removed']);
        } else {
            $user->favorit()->attach($produk->id);
            return response()->json(['status' => 'added']);
        }
    }
}
