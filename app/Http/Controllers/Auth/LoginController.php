<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // Menampilkan Form Login
    public function showLoginForm()
    {
        return view('auth.login'); // Pastikan file ini ada di `resources/views/auth/login.blade.php`
    }

    // Proses Login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Cek role
            if ($user->role === 'admin') {
                return redirect()->route('admin.produk.index'); // Jika admin, ke halaman admin
            } else {
                return redirect()->route('user.dashboard'); // Jika user biasa, ke dashboard user
            }
        }

        // Jika login gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    // Proses Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('user.dashboard'); // Arahkan kembali ke dashboard setelah logout
    }

    // Menampilkan Form Registrasi
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Proses Registrasi
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user', // Set peran default sebagai user
        ]);

        Auth::login($user);

        return redirect()->route('user.dashboard');
    }
}
