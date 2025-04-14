<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin - Daftar Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9fafb;
        }

        .sidebar {
            transition: all 0.3s ease;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
        }

        .card-transition {
            transition: all 0.2s ease;
        }

        .card-transition:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .btn-effect {
            transition: all 0.2s ease;
        }

        .btn-effect:hover {
            transform: translateY(-1px);
        }

        .dropdown-menu {
            display: none;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .table-hover tr:hover {
            background-color: #f3f4f6;
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

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: #c5c5c5;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }

        /* Progress bar style */
        .progress-bar {
            height: 6px;
            border-radius: 3px;
            background: linear-gradient(90deg, #3B82F6 0%, #60A5FA 100%);
        }

        /* Toast container */
        #toastContainer {
            z-index: 9999;
            pointer-events: none;
        }

        #toastContainer>div {
            pointer-events: auto;
        }
    </style>
</head>

<body class="bg-gray-50 min-h-screen">
    <!-- Toast Notification Container -->
    <div id="toastContainer" class="fixed top-6 right-6 z-50 flex flex-col gap-4"></div>

    <div class="flex">

        <!-- Sidebar -->
        <div id="sidebar" class="sidebar bg-white text-gray-800 w-64 min-h-screen fixed border-r border-gray-100 z-30 transform transition-transform -translate-x-full md:translate-x-0">
            <div class="p-5 border-b border-gray-100">
                <div class="flex items-center space-x-3">
                    <div class="h-9 w-9 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center">
                        <i class="fas fa-store text-white text-lg"></i>
                    </div>
                    <h1 class="text-xl font-bold bg-gradient-to-r from-blue-600 to-indigo-700 bg-clip-text text-transparent">Dashboar Admin</h1>
                </div>
            </div>

            <div class="px-3 py-4">
                <nav>
                    <div class="mb-4">
                        <p class="text-gray-400 text-xs uppercase tracking-wider ml-4 mb-2">Menu Utama</p>
                        <a href="{{ route('user.dashboard') }}" class="flex items-center space-x-3 text-gray-700 p-3 rounded-lg mb-1 hover:bg-blue-50 hover:text-blue-600 transition-all">
                            <i class="fas fa-home text-lg"></i>
                            <span class="font-medium">Dashboard</span>
                        </a>
                    </div>

                    <div class="mb-4">
                        <p class="text-gray-400 text-xs uppercase tracking-wider ml-4 mb-2">Produk</p>
                        <a href="{{ route('admin.produk.index') }}" class="flex items-center space-x-3 bg-blue-50 text-blue-600 p-3 rounded-lg mb-1">
                            <i class="fas fa-box text-lg"></i>
                            <span class="font-medium">Daftar Produk</span>
                        </a>
                        <a href="{{ route('admin.produk.create') }}" class="flex items-center space-x-3 text-gray-700 p-3 rounded-lg mb-1 hover:bg-blue-50 hover:text-blue-600 transition-all">
                            <i class="fas fa-plus-circle text-lg"></i>
                            <span class="font-medium">Tambah Produk</span>
                        </a>
                    </div>

                    <div class="mb-4">
                        <p class="text-gray-400 text-xs uppercase tracking-wider ml-4 mb-2">Management User</p>
                        <a href="{{ route('admin.users.index') }}" class="flex items-center space-x-3 text-gray-700 p-3 rounded-lg mb-1 hover:bg-blue-50 hover:text-blue-600 transition-all">
                            <i class="fas fa-users text-lg"></i>
                            <span class="font-medium">Daftar User</span>
                        </a>
                        @if(Auth::user()->role === 'superadmin')
                        <a href="{{ route('admin.produk.tambah_admin') }}" class="flex items-center space-x-3 text-gray-700 p-3 rounded-lg mb-1 hover:bg-blue-50 hover:text-blue-600 transition-all">
                            <i class="fas fa-user-shield text-lg"></i>
                            <span class="font-medium">Tambah Admin</span>
                        </a>
                        @endif
                    </div>
                </nav>
            </div>

            <div class="absolute bottom-0 left-0 right-0 p-4 border-t border-gray-100">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="h-9 w-9 rounded-full bg-gradient-to-r from-blue-500 to-indigo-600 flex items-center justify-center text-white font-medium text-sm">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </div>
                        <div>
                            <p class="text-sm font-medium">{{ Auth::user()->name }}</p>
                            <p class="text-xs text-gray-500">{{ Auth::user()->role }}</p>
                        </div>
                    </div>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-gray-500 hover:text-red-500" title="Keluar">
                            <i class="fas fa-sign-out-alt"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="ml-64 flex-1">
            <!-- Navbar -->
            <div class="bg-white px-6 py-4 flex items-center justify-between shadow-sm sticky top-0 z-20">
                <div class="flex items-center">

                    <button id="sidebarToggle" class="text-gray-500 hover:text-blue-600 focus:outline-none mr-6 transition-all">
                        <i class="fas fa-bars"></i>
                    </button>

                    <div>
                        <h2 class="text-xl font-semibold text-gray-800">Daftar Produk</h2>
                        <p class="text-sm text-gray-500">Kelola semua produk Anda</p>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <form action="{{ route('admin.produk.index') }}" method="GET" class="relative">
                        <input
                            type="text"
                            name="search"
                            value="{{ request('search') }}"
                            placeholder="Cari produk..."
                            class="bg-gray-50 text-sm rounded-lg pl-10 pr-4 py-2 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-64 transition-all">
                        <i class="fas fa-search text-gray-500 absolute left-3 top-2.5"></i>
                    </form>
                </div>

            </div>

            <!-- Content -->
            <div class="p-6">
                <!-- Overview Section -->
                <div class="mb-8">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-semibold text-gray-800">Ringkasan</h3>
                    </div>

                    <!-- Stats Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Card 1 -->
                        <div class="bg-white rounded-xl shadow-sm p-6 card-transition border border-gray-100">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="text-gray-500 font-medium">Total Produk</h4>
                                <div class="p-2 rounded-lg bg-blue-100 text-blue-600">
                                    <i class="fas fa-box"></i>
                                </div>
                            </div>
                            <div class="flex items-end justify-between">
                                <div>
                                    <h3 class="text-3xl font-bold text-gray-800">{{ count($produk) }}</h3>
                                </div>
                                <div class="h-16 w-24">
                                    <div class="flex items-end justify-between h-full">
                                        <div class="w-3 bg-blue-100 rounded-t-sm h-6"></div>
                                        <div class="w-3 bg-blue-100 rounded-t-sm h-8"></div>
                                        <div class="w-3 bg-blue-100 rounded-t-sm h-10"></div>
                                        <div class="w-3 bg-blue-100 rounded-t-sm h-7"></div>
                                        <div class="w-3 bg-blue-100 rounded-t-sm h-12"></div>
                                        <div class="w-3 bg-blue-500 rounded-t-sm h-14"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="bg-white rounded-xl shadow-sm p-6 card-transition border border-gray-100">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="text-gray-500 font-medium">Kategori</h4>
                                <div class="p-2 rounded-lg bg-purple-100 text-purple-600">
                                    <i class="fas fa-tags"></i>
                                </div>
                            </div>
                            <div class="flex items-end justify-between">
                                <div>
                                    <h3 class="text-3xl font-bold text-gray-800">8</h3>
                                </div>
                                <div class="flex -space-x-2">
                                    <div class="h-8 w-8 rounded-full bg-red-100 flex items-center justify-center text-red-600 text-xs">S</div>
                                    <div class="h-8 w-8 rounded-full bg-green-100 flex items-center justify-center text-green-600 text-xs">T</div>
                                    <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 text-xs">S</div>
                                    <div class="h-8 w-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 text-xs">+5</div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="bg-white rounded-xl shadow-sm p-6 card-transition border border-gray-100">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="text-gray-500 font-medium">Total Pengguna</h4>
                                <div class="p-2 rounded-lg bg-amber-100 text-amber-600">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                            <div class="flex items-end justify-between">
                                <div>
                                    <h3 class="text-3xl font-bold text-gray-800">{{ $jumlahUser }}</h3>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Management Section -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="flex items-center justify-between p-6 border-b border-gray-100">
                        <div>
                            <h3 class="font-semibold text-gray-800">Daftar Produk</h3>
                            <p class="text-sm text-gray-500 mt-1">Kelola dan monitor semua produk Anda</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="relative">
                                <select class="bg-gray-50 text-sm rounded-lg pl-3 pr-8 py-2 border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 appearance-none">
                                    <option>Semua Kategori</option>
                                    <option>Elektronik</option>
                                    <option>Fashion</option>
                                    <option>Makanan</option>
                                </select>
                                <i class="fas fa-chevron-down text-xs absolute right-3 top-3 text-gray-500 pointer-events-none"></i>
                            </div>
                            <a href="{{ route('admin.produk.create') }}" class="px-4 py-2 bg-blue-600 text-white text-sm rounded-lg hover:bg-blue-700 btn-effect flex items-center space-x-1">
                                <i class="fas fa-plus"></i>
                                <span>Produk Baru</span>
                            </a>
                        </div>
                    </div>

                    <!-- Table -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full table-hover">
                            <thead>
                                <tr class="text-gray-600 text-sm border-b border-gray-100">
                                    <th class="py-4 px-6 font-medium text-left">No</th>
                                    <th class="py-4 px-6 font-medium text-left">Produk</th>
                                    <th class="py-4 px-6 font-medium text-left">Kategori</th>
                                    <th class="py-4 px-6 font-medium text-left">Harga</th>
                                    <th class="py-4 px-6 font-medium text-left">Status</th>
                                    <th class="py-4 px-6 font-medium text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produk as $item)
                                <tr class="border-b border-gray-50 hover:bg-gray-50 transition-colors">
                                    <td class="py-4 px-6 text-sm text-gray-500">{{ $loop->iteration }}</td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center">
                                            @if ($item->gambar)
                                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_produk }}" class="w-12 h-12 rounded-lg object-cover mr-4 border border-gray-100">
                                            @else
                                            <div class="w-12 h-12 rounded-lg bg-gray-100 flex items-center justify-center mr-4 border border-gray-200">
                                                <i class="fas fa-image text-gray-400"></i>
                                            </div>
                                            @endif
                                            <div>
                                                <p class="font-medium text-gray-800">{{ $item->nama_produk }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span class="px-3 py-1.5 bg-blue-50 text-blue-600 rounded-full text-xs font-medium">{{ $item->kategori }}</span>
                                    </td>
                                    <td class="py-4 px-6 font-medium text-gray-800">Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                                    <td class="py-4 px-6">
                                        <span class="px-3 py-1.5 bg-green-50 text-green-600 rounded-full text-xs font-medium flex items-center w-fit space-x-1">
                                            <span class="h-1.5 w-1.5 rounded-full bg-green-500"></span>
                                            <span>Tersedia</span>
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 text-right">
                                        <div class="flex items-center justify-end space-x-2">
                                            <a href="{{ route('admin.produk.edit', $item->id) }}" class="p-2 bg-amber-50 text-amber-600 rounded-lg hover:bg-amber-100 btn-effect" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.produk.destroy', $item->id) }}" method="POST" class="inline delete-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="p-2 bg-red-50 text-red-600 rounded-lg hover:bg-red-100 btn-effect delete-btn" data-name="{{ $item->nama_produk }}" title="Hapus">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="px-6 py-4 border-t border-gray-100 flex items-center justify-between">
                        <p class="text-sm text-gray-500">Menampilkan {{ count($produk) }} dari {{ count($produk) }} produk</p>
                        <div class="flex space-x-1">
                            <button class="px-3 py-1.5 bg-gray-50 text-gray-600 rounded-lg hover:bg-gray-100 text-sm border border-gray-200">Sebelumnya</button>
                            <button class="px-3 py-1.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700 text-sm">1</button>
                            <button class="px-3 py-1.5 bg-gray-50 text-gray-600 rounded-lg hover:bg-gray-100 text-sm border border-gray-200">2</button>
                            <button class="px-3 py-1.5 bg-gray-50 text-gray-600 rounded-lg hover:bg-gray-100 text-sm border border-gray-200">3</button>
                            <button class="px-3 py-1.5 bg-gray-50 text-gray-600 rounded-lg hover:bg-gray-100 text-sm border border-gray-200">Selanjutnya</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="bg-white p-6 border-t border-gray-100">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-500 text-sm">&copy; 2025 BerkahGadget. Hak Cipta Kelompok3.</p>
                    <div class="flex space-x-4 mt-4 md:mt-0">
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script>
        // Sidebar toggle functionality
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarToggle = document.getElementById('sidebarToggle');
            const sidebar = document.querySelector('.sidebar');
            const mainContent = document.querySelector('.ml-64');

            sidebarToggle.addEventListener('click', function() {
                if (sidebar.classList.contains('w-64')) {
                    sidebar.classList.remove('w-64');
                    sidebar.classList.add('w-20');
                    mainContent.classList.remove('ml-64');
                    mainContent.classList.add('ml-20');

                    // Hide text in sidebar
                    document.querySelectorAll('.sidebar span, .sidebar p:not(.sidebar div div p)').forEach(el => {
                        el.classList.add('hidden');
                    });
                } else {
                    sidebar.classList.remove('w-20');
                    sidebar.classList.add('w-64');
                    mainContent.classList.remove('ml-20');
                    mainContent.classList.add('ml-64');

                    // Show text in sidebar
                    document.querySelectorAll('.sidebar span, .sidebar p:not(.sidebar div div p)').forEach(el => {
                        el.classList.remove('hidden');
                    });
                }
            });

            // Toast notification system
            function showToast(message, type = 'success') {
                const toastContainer = document.getElementById('toastContainer');

                // Create toast element
                const toast = document.createElement('div');
                toast.className = 'toast-enter flex items-center p-4 rounded-lg shadow-lg max-w-md';

                // Set color based on type
                if (type === 'success') {
                    toast.classList.add('bg-green-600', 'text-white');
                } else if (type === 'error') {
                    toast.classList.add('bg-red-600', 'text-white');
                } else if (type === 'warning') {
                    toast.classList.add('bg-amber-500', 'text-white');
                } else if (type === 'info') {
                    toast.classList.add('bg-blue-600', 'text-white');
                } else if (type === 'delete') {
                    toast.classList.add('bg-red-600', 'text-white');
                }

                // Icon based on type
                let icon = 'fa-check-circle';
                if (type === 'error') icon = 'fa-times-circle';
                if (type === 'warning') icon = 'fa-exclamation-triangle';
                if (type === 'info') icon = 'fa-info-circle';
                if (type === 'delete') icon = 'fa-trash-alt';

                // Create toast content
                toast.innerHTML = `
                    <div class="flex items-center justify-between w-full">
                        <div class="flex items-center">
                            <div class="bg-white bg-opacity-20 p-2 rounded-lg mr-3">
                                <i class="fas ${icon}"></i>
                            </div>
                            <div>
                                <p class="font-medium">${message}</p>
                            </div>
                        </div>
                        <button class="text-white focus:outline-none toast-close ml-3">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                `;

                // Add toast to container
                toastContainer.appendChild(toast);

                // Remove toast after 5 seconds
                setTimeout(() => {
                    toast.classList.remove('toast-enter');
                    toast.classList.add('toast-exit');
                    setTimeout(() => {
                        toast.remove();
                    }, 500);
                }, 5000);

                // Close button functionality
                const closeButton = toast.querySelector('.toast-close');
                closeButton.addEventListener('click', () => {
                    toast.classList.remove('toast-enter');
                    toast.classList.add('toast-exit');
                    setTimeout(() => {
                        toast.remove();
                    }, 500);
                });
            }

            document.addEventListener('DOMContentLoaded', function() {
                function showToast(message, type = 'success') {
                    toast.remove();
                }

                // Delete confirmation handling
                const deleteForms = document.querySelectorAll('.delete-form');
                deleteForms.forEach(form => {
                    form.addEventListener('submit', function(e) {
                        const btn = this.querySelector('button[type="submit"]');
                        const confirmText = btn.getAttribute('data-confirm') || 'Are you sure you want to delete this item?';

                        if (!confirm(confirmText)) {
                            e.preventDefault();
                            return false;
                        }

                        // Optional: disable the button to prevent multiple submissions
                        btn.disabled = true;
                        btn.innerHTML = 'Deleting...';

                        return true;
                    }); // close submit listener
                }); // close forEach
            });
        }); // close DOMContentLoaded