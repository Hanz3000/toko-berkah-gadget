<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Carousel;



class AdminController extends Controller
{
    public function index(Request $request)
    {
        $query = Produk::query();

        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where('nama_produk', 'like', "%{$search}%")
                ->orWhere('kategori', 'like', "%{$search}%");
        }

        $produk = $query->paginate(10)->appends($request->all());

        $produkTerbaru = Produk::orderBy('updated_at', 'desc')->first();
        $carousels = Carousel::all();
        $jumlahUser = User::count();
        $jumlahCarousel = Carousel::count();
        return view('admin.produk.index', compact(
            'produk',
            'carousels',
            'jumlahUser',
            'jumlahCarousel',
            'produkTerbaru'
        ));
    }







    public function create()
    {
        return view('admin.produk.create');
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

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function userList()
    {
        // Pastikan pengguna sudah login
        if (Auth::check()) {
            // Mendapatkan role pengguna yang sedang login
            $loggedInUserRole = Auth::user()->role;
            // Jika yang login adalah super_admin, tampilkan semua user termasuk admin
            if ($loggedInUserRole == 'superadmin') {
                $users = User::all();   // Menampilkan semua user, termasuk admin dan super admin
            } else {
                // Jika yang login adalah admin, tampilkan hanya user dengan role selain admin dan super_admin
                // dan juga selain role untuk user biasa (misalnya 'user' dan 'member')
                $users = User::whereNotIn('role', ['superadmin', 'admin', ''])->get();
                return view('admin.users.index', compact('users'));
            }

            // Mengembalikan view dengan data pengguna
            return view('admin.users.index', compact('users'));
        }
    }
    // UserController.php

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);

        // Tidak bisa menghapus diri sendiri
        if (Auth::id() === $user->id) {
            return redirect()->back()
                ->with('error', 'Kamu tidak bisa menghapus akunmu sendiri.');
        }

        // Hanya superadmin yang boleh menghapus
        if (Auth::user()->role !== 'superadmin') {
            return redirect()->back()
                ->with('error', 'Akses ditolak. Hanya Superadmin yang dapat menghapus user.');
        }

        try {
            $user->delete();
            return redirect()->back()
                ->with('success', 'User berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus user.');
        }
    }
    public function destroy($id)
    {
        try {
            User::findOrFail($id)->delete();
            return redirect()->back()->with('success', 'User berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menghapus user!');
        }
    }
}
