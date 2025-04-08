<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Berkah Gadget</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .bg-gradient {
            background: linear-gradient(90deg, #4F46E5 0%, #9333EA 100%);
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white shadow-md fixed w-full z-10">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-mobile-alt text-indigo-600 text-2xl"></i>
                    <span class="font-bold text-xl text-indigo-600">Toko Berkah Gadget</span>
                </div>

                <div class="hidden md:flex items-center space-x-6">
                    <a href="#" class="text-gray-600 hover:text-indigo-600">Beranda</a>
                    <a href="#" class="text-gray-600 hover:text-indigo-600">Produk</a>
                    <a href="#" class="text-gray-600 hover:text-indigo-600">Tentang</a>
                    <a href="#" class="text-gray-600 hover:text-indigo-600">Kontak</a>
                </div>

                <!-- Searchbar in navbar -->
                <div class="hidden md:flex flex-1 mx-4 max-w-md">
                    <form class="flex w-full">
                        <input type="text" placeholder="Cari produk..." class="w-full px-4 py-2 rounded-l-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <button type="button" class="bg-indigo-600 text-white px-4 py-2 rounded-r-md hover:bg-indigo-700 focus:outline-none flex items-center">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>

                <div class="flex items-center space-x-4">
                    @if(Auth::check())
                    <div class="flex items-center space-x-2">
                        <div class="relative">
                            <button class="flex items-center space-x-1 text-gray-700 hover:text-indigo-600 focus:outline-none">
                                <span>Halo, {{ Auth::user()->name }}</span>
                                <i class="fas fa-chevron-down text-xs"></i>
                            </button>
                            <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg hidden">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profil</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Pesanan Saya</a>
                                <form action="{{ route('logout') }}" method="POST" class="block">
                                    @csrf
                                    <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Logout</button>
                                </form>
                            </div>
                        </div>
                        <a href="#" class="relative">
                            <i class="fas fa-shopping-cart text-gray-700 hover:text-indigo-600 text-xl"></i>
                            <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">0</span>
                        </a>
                    </div>
                    @else
                    <div class="space-x-2">
                        <a href="{{ route('login') }}" class="px-4 py-2 text-sm font-medium text-indigo-600 hover:text-indigo-800">Login</a>
                        <a href="{{ route('register') }}" class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-md hover:bg-indigo-700">Register</a>
                    </div>
                    @endif

                    <button class="md:hidden focus:outline-none">
                        <i class="fas fa-bars text-gray-700 text-xl"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile search bar - visible on small screens -->
            <div class="md:hidden pt-3">
                <form class="flex w-full">
                    <input type="text" placeholder="Cari produk..." class="w-full px-4 py-2 rounded-l-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <button type="button" class="bg-indigo-600 text-white px-4 py-2 rounded-r-md hover:bg-indigo-700 focus:outline-none flex items-center">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-24 pb-12 bg-gradient">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Temukan Gadget Impian Anda</h1>
                    <p class="text-lg text-gray-100 mb-6">Koleksi terlengkap smartphone, laptop, dan aksesoris dengan harga terbaik dan garansi resmi.</p>
                    <form class="flex">
                        <input type="text" placeholder="Cari produk..." class="w-full px-4 py-3 rounded-l-md focus:outline-none">
                        <button type="button" class="bg-yellow-500 text-white px-6 py-3 rounded-r-md hover:bg-yellow-600 focus:outline-none flex items-center">
                            <i class="fas fa-search mr-2"></i> Cari
                        </button>
                    </form>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <img src="{{ asset('storage/images/s.png') }}" alt="Hero Image" class="rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Kategori Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold text-center mb-8">Kategori Populer</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-gray-50 rounded-lg p-4 text-center hover:shadow-md transition duration-300">
                    <div class="bg-indigo-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-mobile-alt text-indigo-600 text-2xl"></i>
                    </div>
                    <h3 class="font-medium">Smartphone</h3>
                </div>
                <div class="bg-gray-50 rounded-lg p-4 text-center hover:shadow-md transition duration-300">
                    <div class="bg-indigo-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-laptop text-indigo-600 text-2xl"></i>
                    </div>
                    <h3 class="font-medium">Laptop</h3>
                </div>
                <div class="bg-gray-50 rounded-lg p-4 text-center hover:shadow-md transition duration-300">
                    <div class="bg-indigo-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-headphones text-indigo-600 text-2xl"></i>
                    </div>
                    <h3 class="font-medium">Audio</h3>
                </div>
                <div class="bg-gray-50 rounded-lg p-4 text-center hover:shadow-md transition duration-300">
                    <div class="bg-indigo-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-camera text-indigo-600 text-2xl"></i>
                    </div>
                    <h3 class="font-medium">Kamera</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Admin Button -->
    @if(Auth::check() && (Auth::user()->role === 'admin' || Auth::user()->role === 'superadmin'))
    <div class="bg-gray-800 text-white text-center py-3">
        <div class="container mx-auto px-4">
            <p class="text-sm mb-2">Panel Admin</p>
            <a href="{{ route('admin.produk.index') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                <i class="fas fa-cog mr-2"></i> Manajemen Produk
            </a>
        </div>
    </div>
    @endif

    <!-- Produk -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">Produk Terbaru</h2>
                <div class="flex space-x-2">
                    <button class="px-4 py-2 bg-white border border-gray-300 rounded-md hover:bg-gray-50">Filter</button>
                    <select class="px-4 py-2 bg-white border border-gray-300 rounded-md hover:bg-gray-50">
                        <option>Terbaru</option>
                        <option>Harga Terendah</option>
                        <option>Harga Tertinggi</option>
                        <option>Terpopuler</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($produk as $item)
                <div class="bg-white rounded-lg overflow-hidden shadow-md product-card transition duration-300">
                    @if ($item->gambar)
                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_produk }}" class="w-full h-48 object-cover">
                    @else
                    <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">
                        <i class="fas fa-image text-4xl"></i>
                    </div>
                    @endif
                    <div class="p-4">
                        <span class="text-xs font-medium text-indigo-600 bg-indigo-100 px-2 py-1 rounded-full">{{ $item->kategori }}</span>
                        <h3 class="font-semibold text-lg mt-2 mb-1 text-gray-800">{{ $item->nama_produk }}</h3>
                        <p class="text-xl font-bold text-indigo-600 mb-3">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                        <div class="flex space-x-2">
                            <a href="{{ route('user.produk.detail', $item->id) }}" class="px-3 py-2 bg-gray-100 text-gray-800 text-sm rounded-md hover:bg-gray-200 flex-1 text-center">Lihat Detail</a>
                            <button class="px-3 py-2 bg-indigo-600 text-white text-sm rounded-md hover:bg-indigo-700 flex items-center justify-center">
                                <i class="fas fa-shopping-cart mr-1"></i> Tambah
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="py-12 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-indigo-600 text-3xl mb-4">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Pengiriman Cepat</h3>
                    <p class="text-gray-600">Pengiriman ke seluruh Indonesia dengan berbagai pilihan ekspedisi terpercaya</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-indigo-600 text-3xl mb-4">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Garansi Resmi</h3>
                    <p class="text-gray-600">Semua produk dijamin asli dan bergaransi resmi dari distributor atau principal</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-indigo-600 text-3xl mb-4">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Layanan Pelanggan</h3>
                    <p class="text-gray-600">Tim support siap membantu Anda 7 hari seminggu dari jam 08.00 - 21.00 WIB</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Subscribe -->
    <section class="py-12 bg-indigo-600">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-2xl font-bold text-white mb-4">Dapatkan Penawaran Eksklusif</h2>
            <p class="text-indigo-100 mb-6 max-w-2xl mx-auto">Berlangganan newsletter kami dan dapatkan info promo terbaru serta diskon eksklusif langsung ke email Anda</p>
            <form class="max-w-md mx-auto flex">
                <input type="email" placeholder="Alamat email Anda" class="flex-1 px-4 py-3 rounded-l-md focus:outline-none">
                <button type="submit" class="bg-yellow-500 text-white px-6 py-3 rounded-r-md hover:bg-yellow-600 focus:outline-none">Langganan</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-300 py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-white font-bold text-xl mb-4">Toko Berkah Gadget</h3>
                    <p class="mb-4">Toko gadget terpercaya dengan produk berkualitas dan harga terbaik.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div>
                    <h3 class="text-white font-bold mb-4">Informasi</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-white">Cara Pembelian</a></li>
                        <li><a href="#" class="hover:text-white">Kebijakan Privasi</a></li>
                        <li><a href="#" class="hover:text-white">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white font-bold mb-4">Layanan</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white">FAQ</a></li>
                        <li><a href="#" class="hover:text-white">Kontak Kami</a></li>
                        <li><a href="#" class="hover:text-white">Status Pesanan</a></li>
                        <li><a href="#" class="hover:text-white">Pengembalian</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white font-bold mb-4">Kontak</h3>
                    <ul class="space-y-2">
                        <li class="flex items-start space-x-2">
                            <i class="fas fa-map-marker-alt mt-1"></i>
                            <span>Jl. Gadget No. 123, Jakarta Pusat, Indonesia</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-phone"></i>
                            <span>+62 812-3456-7890</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="fas fa-envelope"></i>
                            <span>info@tokoberkahgadget.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-6 text-sm text-center">
                <p>&copy; 2025 Toko Berkah Gadget. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top -->
    <a href="#" class="fixed bottom-6 right-6 bg-indigo-600 text-white w-12 h-12 rounded-full flex items-center justify-center shadow-lg hover:bg-indigo-700">
        <i class="fas fa-chevron-up"></i>
    </a>

    <script>
        // Simple dropdown toggle
        document.addEventListener('DOMContentLoaded', function() {
            const dropdown = document.querySelector('.flex.items-center.space-x-1');
            const dropdownMenu = document.querySelector('.absolute.right-0.mt-2');

            if (dropdown && dropdownMenu) {
                dropdown.addEventListener('click', function() {
                    dropdownMenu.classList.toggle('hidden');
                });

                document.addEventListener('click', function(event) {
                    if (!dropdown.contains(event.target) && !dropdownMenu.contains(event.target)) {
                        dropdownMenu.classList.add('hidden');
                    }
                });
            }
        });
    </script>
</body>

</html>