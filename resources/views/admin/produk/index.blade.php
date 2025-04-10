<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin - Daftar Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }

        .sidebar {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-3px);
            transition: all 0.2s ease;
        }

        .btn-effect:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .dropdown-menu {
            display: none;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .table-hover tr:hover {
            background-color: #f9fafb;
        }
    </style>
</head>

<body class="bg-gray-100 min-h-screen">
    <div class="flex">
        <!-- Sidebar -->
        <div class="sidebar bg-gray-900 text-white w-64 min-h-screen fixed">
            <div class="p-5 border-b border-gray-800">
                <div class="flex items-center space-x-3">
                    <div class="h-8 w-8 bg-blue-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-store text-white"></i>
                    </div>
                    <h1 class="text-xl font-bold">Admin Panel</h1>
                </div>
            </div>

            <div class="p-5">
                <nav>
                    <div class="mb-3">
                        <p class="text-gray-500 text-xs uppercase tracking-wider mb-2">Menu Utama</p>
                        <a href="{{ route('user.dashboard') }}" class="flex items-center space-x-3 text-gray-300 p-2 rounded-md hover:bg-gray-800 hover:text-white">
                            <i class="fas fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </div>

                    <div class="mb-3">
                        <p class="text-gray-500 text-xs uppercase tracking-wider mb-2">Produk</p>
                        <a href="{{ route('admin.produk.index') }}" class="flex items-center space-x-3 bg-blue-600 text-white p-2 rounded-md">
                            <i class="fas fa-box"></i>
                            <span>Daftar Produk</span>
                        </a>
                        <a href="{{ route('admin.produk.create') }}" class="flex items-center space-x-3 text-gray-300 p-2 rounded-md hover:bg-gray-800 hover:text-white">
                            <i class="fas fa-plus-circle"></i>
                            <span>Tambah Produk</span>
                        </a>
                    </div>

                    <div class="mb-3">
                        <p class="text-gray-500 text-xs uppercase tracking-wider mb-2">Pengguna</p>
                        <a href="#" class="flex items-center space-x-3 text-gray-300 p-2 rounded-md hover:bg-gray-800 hover:text-white">
                            <i class="fas fa-users"></i>
                            <span>Daftar Pengguna</span>
                        </a>
                        @if(Auth::user()->role === 'superadmin')
                        <a href="{{ route('admin.produk.tambah_admin') }}" class="flex items-center space-x-3 text-gray-300 p-2 rounded-md hover:bg-gray-800 hover:text-white">
                            <i class="fas fa-user-shield"></i>
                            <span>Tambah Admin</span>
                        </a>
                        @endif
                    </div>

                    <div class="mb-3">
                        <p class="text-gray-500 text-xs uppercase tracking-wider mb-2">Laporan</p>
                        <a href="#" class="flex items-center space-x-3 text-gray-300 p-2 rounded-md hover:bg-gray-800 hover:text-white">
                            <i class="fas fa-chart-bar"></i>
                            <span>Statistik Penjualan</span>
                        </a>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Main Content -->
        <div class="ml-64 flex-1">
            <!-- Navbar -->
            <div class="bg-white px-6 py-3 flex items-center justify-between shadow">
                <div class="flex items-center">
                    <button class="text-gray-500 hover:text-gray-700 focus:outline-none mr-6">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h2 class="text-xl font-semibold">Daftar Produk</h2>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <input type="text" placeholder="Cari..." class="bg-gray-100 text-sm rounded-full pl-10 pr-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 w-64">
                        <i class="fas fa-search text-gray-500 absolute left-3 top-2.5"></i>
                    </div>
                    <div class="relative dropdown">
                        <button class="flex items-center space-x-2 focus:outline-none">
                            <div class="h-8 w-8 rounded-full bg-blue-500 flex items-center justify-center text-white font-semibold">
                                {{ substr(Auth::user()->name, 0, 1) }}
                            </div>
                            <span class="text-sm font-medium">{{ Auth::user()->name }}</span>
                            <i class="fas fa-chevron-down text-xs text-gray-500"></i>
                        </button>
                        <div class="dropdown-menu absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Pengaturan</a>
                            <div class="border-t border-gray-200"></div>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Keluar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="p-6">
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
                    <div class="bg-white rounded-lg shadow p-5 card-hover">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm">Total Produk</p>
                                <h3 class="text-2xl font-bold">{{ count($produk) }}</h3>
                            </div>
                            <div class="bg-blue-100 p-3 rounded-full">
                                <i class="fas fa-box text-blue-600"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow p-5 card-hover">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm">Kategori</p>
                                <h3 class="text-2xl font-bold">8</h3>
                            </div>
                            <div class="bg-green-100 p-3 rounded-full">
                                <i class="fas fa-tags text-green-600"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow p-5 card-hover">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm">Pengguna</p>
                                <h3 class="text-2xl font-bold">45</h3>
                            </div>
                            <div class="bg-yellow-100 p-3 rounded-full">
                                <i class="fas fa-users text-yellow-600"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow p-5 card-hover">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-500 text-sm">Pesanan</p>
                                <h3 class="text-2xl font-bold">123</h3>
                            </div>
                            <div class="bg-purple-100 p-3 rounded-full">
                                <i class="fas fa-shopping-cart text-purple-600"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-lg font-semibold">Kelola Produk</h2>
                    <div class="flex space-x-3">
                        <a href="{{ route('admin.produk.create') }}" class="flex items-center justify-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 btn-effect">
                            <i class="fas fa-plus mr-2"></i>
                            <span>Tambah Produk</span>
                        </a>
                        @if(Auth::user()->role === 'superadmin')
                        <a href="{{ route('admin.produk.tambah_admin') }}" class="flex items-center justify-center px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 btn-effect">
                            <i class="fas fa-user-plus mr-2"></i>
                            <span>Tambah Admin</span>
                        </a>
                        @endif
                    </div>
                </div>

                <!-- Product Table Card -->
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="flex items-center justify-between p-4 border-b">
                        <h3 class="font-semibold">Daftar Produk</h3>
                        <div class="flex items-center space-x-2">
                            <div class="relative">
                                <select class="bg-gray-100 text-sm rounded-md pl-3 pr-8 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option>Semua Kategori</option>
                                    <option>Elektronik</option>
                                    <option>Fashion</option>
                                    <option>Makanan</option>
                                </select>
                                <i class="fas fa-chevron-down text-xs absolute right-3 top-3 text-gray-500 pointer-events-none"></i>
                            </div>
                            <div class="relative">
                                <select class="bg-gray-100 text-sm rounded-md pl-3 pr-8 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option>10 per halaman</option>
                                    <option>25 per halaman</option>
                                    <option>50 per halaman</option>
                                </select>
                                <i class="fas fa-chevron-down text-xs absolute right-3 top-3 text-gray-500 pointer-events-none"></i>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full table-hover">
                            <thead>
                                <tr class="bg-gray-50 text-gray-500 text-sm uppercase">
                                    <th class="py-3 px-4 font-medium text-left">ID</th>
                                    <th class="py-3 px-4 font-medium text-left">Produk</th>
                                    <th class="py-3 px-4 font-medium text-left">Kategori</th>
                                    <th class="py-3 px-4 font-medium text-left">Harga</th>
                                    <th class="py-3 px-4 font-medium text-left">Status</th>
                                    <th class="py-3 px-4 font-medium text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produk as $item)
                                <tr class="border-t border-gray-100">
                                    <td class="py-3 px-4 text-sm">#{{ $item->id }}</td>
                                    <td class="py-3 px-4">
                                        <div class="flex items-center">
                                            @if ($item->gambar)
                                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_produk }}" class="w-10 h-10 rounded-md object-cover mr-3">
                                            @else
                                            <div class="w-10 h-10 rounded-md bg-gray-200 flex items-center justify-center mr-3">
                                                <i class="fas fa-image text-gray-400"></i>
                                            </div>
                                            @endif
                                            <div>
                                                <p class="font-medium">{{ $item->nama_produk }}</p>
                                                <p class="text-gray-500 text-xs">ID: {{ $item->id }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-3 px-4">
                                        <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">{{ $item->kategori }}</span>
                                    </td>
                                    <td class="py-3 px-4 font-medium">Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                                    <td class="py-3 px-4">
                                        <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Aktif</span>
                                    </td>
                                    <td class="py-3 px-4 text-right">
                                        <div class="flex items-center justify-end space-x-2">
                                            <a href="{{ route('admin.produk.edit', $item->id) }}" class="px-3 py-1 bg-amber-500 text-white rounded-md hover:bg-amber-600 text-sm btn-effect">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.produk.destroy', $item->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 text-sm btn-effect" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                            <button class="px-3 py-1 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 text-sm btn-effect">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="px-4 py-3 border-t flex items-center justify-between">
                        <p class="text-sm text-gray-500">Menampilkan {{ count($produk) }} dari {{ count($produk) }} produk</p>
                        <div class="flex space-x-1">
                            <button class="px-3 py-1 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 text-sm">Sebelumnya</button>
                            <button class="px-3 py-1 bg-blue-600 text-white rounded-md hover:bg-blue-700 text-sm">1</button>
                            <button class="px-3 py-1 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 text-sm">2</button>
                            <button class="px-3 py-1 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 text-sm">3</button>
                            <button class="px-3 py-1 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 text-sm">Selanjutnya</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="bg-white p-4 text-center text-gray-500 text-sm">
                &copy; 2025 Admin Panel. Hak Cipta Dilindungi.
            </footer>
        </div>
    </div>

    <script>
        // Untuk fungsionalitas sidebar toggle
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarToggle = document.querySelector('button');
            const sidebar = document.querySelector('.sidebar');
            const mainContent = document.querySelector('.ml-64');

            sidebarToggle.addEventListener('click', function() {
                if (sidebar.classList.contains('w-64')) {
                    sidebar.classList.remove('w-64');
                    sidebar.classList.add('w-20');
                    mainContent.classList.remove('ml-64');
                    mainContent.classList.add('ml-20');
                } else {
                    sidebar.classList.remove('w-20');
                    sidebar.classList.add('w-64');
                    mainContent.classList.remove('ml-20');
                    mainContent.classList.add('ml-64');
                }
            });
        });
    </script>
</body>

</html>