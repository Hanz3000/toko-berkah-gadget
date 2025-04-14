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

        /* Toast Animation */
        .toast-enter {
            animation: toastIn 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
        }

        .toast-exit {
            animation: toastOut 0.5s cubic-bezier(0.6, -0.28, 0.735, 0.045) forwards;
        }

        @keyframes toastIn {
            0% {
                transform: translateY(-20px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes toastOut {
            0% {
                transform: translateY(0);
                opacity: 1;
            }

            100% {
                transform: translateY(-20px);
                opacity: 0;
            }
        }

        .shake-animation {
            animation: shake 0.5s cubic-bezier(.36, .07, .19, .97) both;
        }

        @keyframes shake {

            10%,
            90% {
                transform: translate3d(-1px, 0, 0);
            }

            20%,
            80% {
                transform: translate3d(2px, 0, 0);
            }

            30%,
            50%,
            70% {
                transform: translate3d(-4px, 0, 0);
            }

            40%,
            60% {
                transform: translate3d(4px, 0, 0);
            }
        }

        /* Make sure toast container is visible and on top */
        #toastContainer {
            z-index: 9999;
            pointer-events: none;
        }

        #toastContainer>div {
            pointer-events: auto;
        }
    </style>
</head>

<body class="bg-gray-100 min-h-screen">
    <!-- Toast Notification Container -->
    <div id="toastContainer" class="fixed top-6 left-1/2 transform -translate-x-1/2 z-50 flex flex-col gap-4"></div>

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
                            <span>Daftar user</span>
                        </a>
                        @if(Auth::user()->role === 'superadmin')
                        <a href="{{ route('admin.produk.tambah_admin') }}" class="flex items-center space-x-3 text-gray-300 p-2 rounded-md hover:bg-gray-800 hover:text-white">
                            <i class="fas fa-user-shield"></i>
                            <span>Tambah Admin</span>
                        </a>
                        @endif
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
                                <h3 class="text-2xl font-bold">{{ $jumlahUser }}</h3>
                            </div>
                            <div class="bg-yellow-100 p-3 rounded-full">
                                <i class="fas fa-users text-yellow-600"></i>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-lg font-semibold">Kelola Produk</h2>
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
                                    <th class="py-3 px-4 font-medium text-left">No</th>
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
                                    <td class="py-3 px-4 text-sm">{{ $loop->iteration }}</td>
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
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-3 px-4">
                                        <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">{{ $item->kategori }}</span>
                                    </td>
                                    <td class="py-3 px-4 font-medium">Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                                    <td class="py-3 px-4">
                                        <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">tersedia</span>
                                    </td>
                                    <td class="py-3 px-4 text-right">
                                        <div class="flex items-center justify-end space-x-2">
                                            <a href="{{ route('admin.produk.edit', $item->id) }}" class="px-3 py-1 bg-amber-500 text-white rounded-md hover:bg-amber-600 text-sm btn-effect">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.produk.destroy', $item->id) }}" method="POST" class="inline delete-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 text-sm btn-effect delete-btn" data-name="{{ $item->nama_produk }}">
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

    <div id="toast" class="hidden fixed top-5 right-5 z-50 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg transition-opacity duration-300">
        <span id="toast-message"></span>
    </div>

    @if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            showToast("{{ session('success') }}", 'success');
        });
    </script>
    @endif


    <script>
        function showToast(message, type = 'success') {
            const toast = document.getElementById('toast');
            const toastMessage = document.getElementById('toast-message');

            toastMessage.textContent = message;
            toast.classList.remove('hidden');
            toast.classList.remove('bg-green-500', 'bg-red-500');

            if (type === 'success') {
                toast.classList.add('bg-green-500');
            } else {
                toast.classList.add('bg-red-500');
            }

            setTimeout(() => {
                toast.classList.add('hidden');
            }, 2000);
        }
    </script>


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

            // Fungsi untuk menampilkan toast notification - FIXED
            function showToast(message, type = 'success') {
                const toastContainer = document.getElementById('toastContainer');

                // Buat elemen toast
                const toast = document.createElement('div');
                toast.className = 'toast-enter flex items-center justify-between p-4 mb-3 rounded-lg shadow-lg max-w-md shake-animation';

                // Set warna berdasarkan tipe
                if (type === 'success') {
                    toast.classList.add('bg-green-600', 'text-white');
                } else if (type === 'error') {
                    toast.classList.add('bg-red-600', 'text-white');
                } else if (type === 'warning') {
                    toast.classList.add('bg-yellow-500', 'text-white');
                } else if (type === 'info') {
                    toast.classList.add('bg-blue-600', 'text-white');
                } else if (type === 'delete') {
                    toast.classList.add('bg-red-600', 'text-white');
                }

                // Icon sesuai tipe
                let icon = 'fa-check-circle';
                if (type === 'error') icon = 'fa-times-circle';
                if (type === 'warning') icon = 'fa-exclamation-triangle';
                if (type === 'info') icon = 'fa-info-circle';
                if (type === 'delete') icon = 'fa-trash-alt';

                // Buat konten toast
                toast.innerHTML = `
                    <div class="flex items-center">
                        <div class="bg-white bg-opacity-20 p-2 rounded-full mr-3">
                            <i class="fas ${icon}"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-sm uppercase tracking-wider">Notifikasi</h4>
                            <p>${message}</p>
                        </div>
                    </div>
                    <button class="text-white focus:outline-none toast-close ml-3">
                        <i class="fas fa-times"></i>
                    </button>
                `;

                // Tambahkan toast ke container
                toastContainer.appendChild(toast);

                // Hapus toast setelah 3 detik
                setTimeout(() => {
                    toast.classList.remove('toast-enter');
                    toast.classList.add('toast-exit');
                    setTimeout(() => {
                        toast.remove();
                    }, 7000);
                }, 7000);

                // Tombol close
                const closeButton = toast.querySelector('.toast-close');
                closeButton.addEventListener('click', () => {
                    toast.classList.remove('toast-enter');
                    toast.classList.add('toast-exit');
                    setTimeout(() => {
                        toast.remove();
                    }, 7000);
                });
            }

            // Event listener untuk tombol hapus
            const deleteForms = document.querySelectorAll('.delete-form');
            deleteForms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    const btn = this.querySelector('.delete-btn');
                    const name = btn.getAttribute('data-name');

                    if (!confirm(`Apakah Anda yakin ingin menghapus produk "${name}"?`)) {
                        e.preventDefault(); // Hanya jika batal hapus
                    } else {
                        showToast(`Produk "${name}" berhasil dihapus dari sistem!`, 'delete');
                    }
                });
            });
        });
    </script>
</body>

</html>