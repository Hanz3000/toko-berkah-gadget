<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;


class FavoritController extends Controller
{
    public function toggle($produkId)
    {
        $user = Auth::user();

        if ($user->favorit()->where('produk_id', $produkId)->exists()) {
            $user->favorit()->detach($produkId);
        } else {
            $user->favorit()->attach($produkId);
        }

        return back();
    }
}
