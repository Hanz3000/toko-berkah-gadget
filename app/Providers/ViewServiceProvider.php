<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Keranjang;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Kirim variabel jumlahKeranjang ke semua view
        View::composer('*', function ($view) {
            $jumlahKeranjang = 0;

            if (Auth::check()) {
                $jumlahKeranjang = Keranjang::where('user_id', Auth::id())->sum('jumlah');
            }

            $view->with('jumlahKeranjang', $jumlahKeranjang);
        });
    }

    public function register()
    {
        //
    }
}
