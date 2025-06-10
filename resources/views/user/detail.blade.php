<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk | Toko Berkah Gadget</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9ff;
        }

        .product-image-zoom {
            transition: transform 0.3s ease;
        }

        .product-image-zoom:hover {
            transform: scale(1.03);
        }

        .gradient-border {
            position: relative;
            border-radius: 1rem;
            background: linear-gradient(to right, #3b82f6, #10b981);
            padding: 2px;
        }

        .gradient-border-content {
            background: white;
            border-radius: 0.9rem;
            height: 100%;
        }

        .feature-badge {
            background: linear-gradient(135deg, #dbeafe, #eff6ff);
            border-left: 3px solid #3b82f6;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            margin-bottom: 0.75rem;
        }

        .pulse-animation {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(59, 130, 246, 0.4);
            }

            70% {
                box-shadow: 0 0 0 10px rgba(59, 130, 246, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(59, 130, 246, 0);
            }
        }

        .bg-gradient-soft {
            background-image: linear-gradient(135deg, #f0f7ff 0%, #e6f0ff 100%);
        }
    </style>
</head>

<body class="bg-gradient-to-br from-indigo-50 to-blue-50 min-h-screen">
    <!-- Navigation -->
    <nav id="mainNav" class="navbar-glass fixed w-full z-50 backdrop-blur-md bg-white/70 transition-all duration-300 border-b border-gray-100 shadow-sm">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">

                <!-- Logo -->
                <div class="flex items-center justify-start" data-aos="fade-right">
                    <span class="whitespace-nowrap text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 via-blue-500 to-green-500 mr-3 hover:scale-105 transition-transform duration-300">
                        Berkah Gadget
                    </span>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-1" data-aos="fade-left" data-aos-delay="10">
                    <a href="{{ route('user.dashboard') }}" class="px-4 py-2 text-gray-700 hover:text-blue-600 font-medium transition-all relative group rounded-md hover:bg-gray-50/80">
                        Beranda
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-green-500 transition-all duration-300 group-hover:w-4/5"></span>
                    </a>

                    <!-- Produk Dropdown -->
                    <div class="relative group">
                        <button class="px-4 py-2 text-gray-700 hover:text-blue-600 font-medium transition-all flex items-center group rounded-md hover:bg-gray-50/80">
                            Produk
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transform transition-transform duration-300 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                            <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-green-500 transition-all duration-300 group-hover:w-4/5"></span>
                        </button>

                        <!-- Mega Menu -->
                        <div class="absolute left-0 mt-2 bg-white/95 backdrop-blur-md rounded-xl shadow-xl py-6 px-8 grid grid-cols-3 gap-8 invisible opacity-0 translate-y-4 group-hover:visible group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 z-50 border border-gray-100 min-w-[768px] max-w-max">
                            <!-- Smartphone -->
                            <div class="transition-all duration-300 hover:bg-gray-50/70 p-4 rounded-lg" data-aos="zoom-in" data-aos-delay="300">
                                <h4 class="text-blue-600 font-semibold mb-3 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                    </svg>
                                    Smartphone
                                </h4>
                                <ul class="space-y-2">
                                    <li><a href="{{ route('produk.search', ['query' => 'iphone', 'kategori' => 'smartphone|second']) }}#produk" class="text-gray-600 hover:text-blue-600 transition-all hover:translate-x-1 inline-block">iPhone</a></li>
                                    <li><a href="{{ route('produk.search', ['query' => 'samsung', 'kategori' => 'smartphone|second']) }}#produk" class="text-gray-600 hover:text-blue-600 transition-all hover:translate-x-1 inline-block">Samsung</a></li>
                                    <li><a href="{{ route('produk.search', ['query' => 'Xiaomi', 'kategori' => 'smartphone|second']) }}#produk" class="text-gray-600 hover:text-blue-600 transition-all hover:translate-x-1 inline-block">Xiaomi</a></li>
                                    <li><a href="{{ route('produk.search', ['query' => 'OPPO', 'kategori' => 'smartphone|second']) }}#produk" class="text-gray-600 hover:text-blue-600 transition-all hover:translate-x-1 inline-block">OPPO</a></li>
                                    <li><a href="{{ route('produk.search', ['query' => 'Vivo', 'kategori' => 'smartphone|second']) }}#produk" class="text-gray-600 hover:text-blue-600 transition-all hover:translate-x-1 inline-block">Vivo</a></li>
                                </ul>



                                </ul>
                                <a href="#produk" class="mt-4 inline-block text-sm text-blue-600 hover:text-green-500 hover:underline transition-all group">
                                    Lihat Semua
                                    <span class="inline-block transition-transform duration-300 group-hover:translate-x-1">→</span>
                                </a>

                            </div>

                            <!-- tablet -->
                            <div class="transition-all duration-300 hover:bg-gray-50/70 p-4 rounded-lg" data-aos="zoom-in" data-aos-delay="300">
                                <h4 class="text-blue-600 font-semibold mb-3 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    Tablet
                                </h4>
                                <ul class="space-y-2">
                                    <li><a href="{{ route('produk.search', ['query' => 'iphone', 'kategori' => 'tablet']) }}#produk" class="text-gray-600 hover:text-blue-600 transition-all hover:translate-x-1 inline-block">iPhone</a></li>
                                    <li><a href="{{ route('produk.search', ['query' => 'samsung', 'kategori' => 'tablet']) }}#produk" class="text-gray-600 hover:text-blue-600 transition-all hover:translate-x-1 inline-block">Samsung</a></li>
                                    <li><a href="{{ route('produk.search', ['query' => 'Xiaomi', 'kategori' => 'tablet']) }}#produk" class="text-gray-600 hover:text-blue-600 transition-all hover:translate-x-1 inline-block">Xiaomi</a></li>
                                    <li><a href="{{ route('produk.search', ['query' => 'OPPO', 'kategori' => 'tablet']) }}#produk" class="text-gray-600 hover:text-blue-600 transition-all hover:translate-x-1 inline-block">OPPO</a></li>
                                    <li><a href="{{ route('produk.search', ['query' => 'Vivo', 'kategori' => 'tablet']) }}#produk" class="text-gray-600 hover:text-blue-600 transition-all hover:translate-x-1 inline-block">Vivo</a></li>
                                </ul>

                                <a href="#produk" class="mt-4 inline-block text-sm text-blue-600 hover:text-green-500 hover:underline transition-all group">
                                    Lihat Semua
                                    <span class="inline-block transition-transform duration-300 group-hover:translate-x-1">→</span>
                                </a>
                            </div>

                            <!-- Aksesoris -->
                            <div class="transition-all duration-300 hover:bg-gray-50/70 p-4 rounded-lg" data-aos="zoom-in" data-aos-delay="300">
                                <h4 class="text-blue-600 font-semibold mb-3 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Aksesoris
                                </h4>
                                <ul class="space-y-2">
                                    <li><a href="{{ route('produk.search', ['kategori' => 'aksesoris', 'query' => 'headphone']) }}#produk" class="text-gray-600 hover:text-blue-600 transition-all hover:translate-x-1 inline-block">Headphone</a></li>
                                    <li><a href="{{ route('produk.search', ['kategori' => 'aksesoris', 'query' => 'casing hp']) }}#produk" class="text-gray-600 hover:text-blue-600 transition-all hover:translate-x-1 inline-block">Casing HP</a></li>
                                    <li><a href="{{ route('produk.search', ['kategori' => 'aksesoris', 'query' => 'charger']) }}#produk" class="text-gray-600 hover:text-blue-600 transition-all hover:translate-x-1 inline-block">Charger</a></li>
                                    <li><a href="{{ route('produk.search', ['kategori' => 'aksesoris', 'query' => 'power bank']) }}#produk" class="text-gray-600 hover:text-blue-600 transition-all hover:translate-x-1 inline-block">Power Bank</a></li>
                                    <li><a href="{{ route('produk.search', ['kategori' => 'aksesoris', 'query' => 'screen protector']) }}#produk" class="text-gray-600 hover:text-blue-600 transition-all hover:translate-x-1 inline-block">Screen Protector</a></li>
                                </ul>
                                <a href="#produk" class="mt-4 inline-block text-sm text-blue-600 hover:text-green-500 hover:underline transition-all group">
                                    Lihat Semua
                                    <span class="inline-block transition-transform duration-300 group-hover:translate-x-1">→</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('user.dashboard') }}#kategori" class="px-4 py-2 text-gray-700 hover:text-blue-600 font-medium transition-all relative group rounded-md hover:bg-gray-50/80">
                        Kategori
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-green-500 transition-all duration-300 group-hover:w-4/5"></span>
                    </a>

                    <a href="#promo" class="px-4 py-2 text-gray-700 hover:text-blue-600 font-medium transition-all relative group rounded-md hover:bg-gray-50/80">
                        Promo
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-green-500 transition-all duration-300 group-hover:w-4/5"></span>
                    </a>

                    <a href="{{ route('user.dashboard') }}#tentang" class="px-4 py-2 text-gray-700 hover:text-blue-600 font-medium transition-all relative group rounded-md hover:bg-gray-50/80">
                        Tentang
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-green-500 transition-all duration-300 group-hover:w-4/5"></span>
                    </a>

                    <a href="{{ route('user.dashboard') }}#kontak" class="px-4 py-2 text-gray-700 hover:text-blue-600 font-medium transition-all relative group rounded-md hover:bg-gray-50/80">
                        Kontak
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-green-500 transition-all duration-300 group-hover:w-4/5"></span>
                    </a>
                </div>

                <!-- Right side icons -->
                <div class="flex items-center space-x-4">
                    <!-- Search -->
                    <div class="hidden md:block left-1 relative group">
                        <form action="{{ route('produk.search') }}#produk" method="GET">
                            <input type="text" name="query" placeholder="Cari produk..." class="pl-10 pr-4 py-2 rounded-full border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent w-64 transition-all bg-gray-50/70 group-hover:bg-white">
                            <button type="submit" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 group-hover:text-blue-500 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>
                        </form>
                    </div>

                    <!-- User and Cart -->
                    <div class="flex items-center space-x-3">
                        @if(Auth::check())
                        <div class="relative group">
                            <button class="flex items-center space-x-1 hover:scale-105 transition-transform">
                                <div class="w-9 h-9 rounded-full bg-gradient-to-r from-blue-500 to-green-400 p-0.5">
                                    <div class="w-full h-full rounded-full bg-white flex items-center justify-center text-blue-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                <span class="hidden md:inline text-gray-700 font-medium">{{ Auth::user()->name }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500 hidden md:inline transition-transform duration-300 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="absolute right-0 mt-2 w-56 bg-white/95 backdrop-blur-md rounded-xl shadow-lg py-2 z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 border border-gray-100">
                                <div class="px-4 py-2 border-b border-gray-100">
                                    <p class="text-sm text-gray-500">Selamat datang,</p>
                                    <p class="font-medium text-gray-800 truncate">{{ Auth::user()->name }}</p>
                                </div>
                                <a href="" class="flex items-center px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    Profil Saya
                                </a>
                                <a href="{{ route('user.favorit') }}" class="flex items-center px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-all rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                    Favorit
                                </a>
                                @if(auth()->user()->role === 'admin' || auth()->user()->role === 'superadmin')
                                <a href="{{ route('admin.produk.index') }}" class="flex items-center px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Admin Panel
                                </a>
                                @endif
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="flex items-center w-full text-left px-4 py-2.5 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-all">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                        </svg>
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                        @else
                        <div class="flex items-center space-x-2">
                            <a href="{{ route('login') }}" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 transition-all hover:scale-105">Login</a>
                            <a href="{{ route('register') }}" class="px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-700 hover:to-blue-600 rounded-full shadow-sm hover:shadow transition-all hover:scale-105">Daftar</a>
                        </div>
                        @endif


                        <!-- Mobile menu button -->
                        <button class="lg:hidden focus:outline-none hover:scale-105 transition-transform">
                            <div class="w-9 h-9 rounded-full bg-gradient-to-r from-blue-500 to-green-400 p-0.5">
                                <div class="w-full h-full rounded-full bg-white flex items-center justify-center text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                                    </svg>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-24 pb-12 px-4">
        <div class="max-w-6xl mx-auto">

            <!-- Breadcrumb -->
            <div class="flex items-center mb-6 text-sm text-gray-600">
                <a href="{{ route('user.dashboard') }}" class="hover:text-blue-600">Beranda</a>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <a href="{{ route('user.dashboard') }}#produk" class="hover:text-blue-600">Katalog</a>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <span class="text-blue-600 font-medium">Detail Produk</span>
            </div>
            <!-- Product Detail Card -->
            <div class="gradient-border">
                <div class="gradient-border-content">
                    <div class="flex flex-col md:flex-row">
                        <!-- Product Image -->
                        <div class="md:w-2/5 p-6">
                            <div class="rounded-xl overflow-hidden shadow-lg aspect-square">
                                @if ($produk->gambar)
                                <img src="{{ asset('storage/' . $produk->gambar) }}"
                                    alt="{{ $produk->nama_produk }}"
                                    class="w-full h-full object-cover product-image-zoom">
                                @else
                                <div class="w-full h-full bg-gray-50 flex items-center justify-center">
                                    <i class="fas fa-image text-4xl text-gray-300"></i>
                                </div>
                                @endif
                            </div>

                            <!-- Image Thumbnails -->
                            <div class="flex justify-center space-x-2 mt-4">
                                @if ($produk->gambar)
                                <button class="w-12 h-12 rounded-lg bg-blue-100 border-2 border-blue-400 overflow-hidden aspect-square">
                                    <img src="{{ asset('storage/' . $produk->gambar) }}"
                                        class="w-full h-full object-cover"
                                        alt="thumbnail">
                                </button>
                                @endif
                            </div>
                        </div>

                        <!-- Product Details -->
                        <div class="md:w-3/5 p-6 flex flex-col">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h1 class="text-3xl font-bold text-gray-800 mb-2">{{ $produk->nama_produk }}</h1>
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        <span class="inline-block bg-gradient-to-r from-blue-100 to-blue-200 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full">{{ $produk->kategori }}</span>
                                        <span class="inline-block bg-gradient-to-r from-amber-100 to-amber-200 text-amber-700 text-xs font-semibold px-3 py-1 rounded-full">{{ $produk->kondisi }}</span>
                                        @if($produk->is_promo)
                                        <span class="inline-block bg-gradient-to-r from-green-100 to-green-200 text-green-700 text-xs font-semibold px-3 py-1 rounded-full">Promo</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <!-- Price Section -->
                            <div class="bg-gradient-soft rounded-xl p-4 flex items-center justify-between mb-6">
                                <div>
                                    @if($produk->harga_promo)
                                    <span class="text-gray-500 text-sm line-through">Rp {{ number_format($produk->harga, 0, ',', '.') }}</span>
                                    <div class="flex items-center">
                                        <span class="text-3xl font-bold text-indigo-700">Rp {{ number_format($produk->harga_promo, 0, ',', '.') }}</span>
                                        <span class="ml-2 bg-red-100 text-red-600 text-xs font-semibold px-2 py-1 rounded">-{{ round((($produk->harga - $produk->harga_promo) / $produk->harga) * 100) }}%</span>
                                    </div>
                                    @else
                                    <div class="flex items-center">
                                        <span class="text-3xl font-bold text-indigo-700">Rp {{ number_format($produk->harga, 0, ',', '.') }}</span>
                                    </div>
                                    @endif
                                </div>
                                <div class="text-green-600 flex items-center">
                                    <i class="fas fa-check-circle mr-1"></i>
                                    <span class="font-medium">{{ $produk->stok > 0 ? 'Tersedia' : 'Stok Habis' }}</span>
                                </div>
                            </div>

                            <!-- Product Specifications -->
                            <div class="space-y-3 mb-6 flex-grow">
                                <div class="feature-badge">
                                    <h2 class="font-semibold text-gray-700 mb-1">Deskripsi</h2>
                                    <p class="text-gray-600 text-justify">{{ $produk->deskripsi }}</p>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="grid grid-cols-12 gap-2">
                                <a href="https://wa.me/62881036357795?text=Halo%20Berkah%20Gadget,%20saya%20ingin%20memesan%20produk:%20{{ urlencode($produk->nama_produk) }}%20dengan%20harga%20Rp%20{{ number_format($produk->harga, 0, ',', '.') }}.%20Apakah%20produk%20ini%20tersedia?" class="col-span-8 bg-gradient-to-r from-green-500 to-green-600 text-white text-center py-3 px-4 rounded-lg hover:shadow-lg transition-all font-semibold flex items-center justify-center pulse-animation">
                                    <i class="fab fa-whatsapp mr-2 text-xl"></i>
                                    <span>Pesan Sekarang</span>
                                </a>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabs Section -->
            <div class="mt-8">
                <div class="flex border-b border-gray-200 mb-4">
                    <button id="detail-tab" class="px-6 py-3 font-medium text-blue-600 border-b-2 border-blue-600 transition-colors duration-200">Detail</button>
                    <button id="specs-tab" class="px-6 py-3 font-medium text-gray-500 hover:text-gray-700 transition-colors duration-200">Cara Order</button>

                </div>

                <div class="relative overflow-hidden">
                    <!-- Detail Content -->
                    <div id="detail-content" class="bg-white rounded-xl shadow-md p-6 transition-all duration-300 transform translate-x-0">
                        <div class="mb-8">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">Detail Produk</h3>
                            <p class="text-gray-600 mb-4">
                                <?php echo htmlspecialchars($produk['deskripsi'] ?? 'Deskripsi produk tidak tersedia'); ?>
                            </p>

                            <?php if (!empty($produk['kekurangan'])): ?>
                                <div class="mt-6">
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Kekurangan:</h4>
                                    <p class="text-gray-600"><?php echo htmlspecialchars($produk['kekurangan']); ?></p>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($produk['kelengkapan'])): ?>
                                <div class="mt-6">
                                    <h4 class="text-lg font-semibold text-gray-800 mb-2">Kelengkapan:</h4>
                                    <p class="text-gray-600"><?php echo htmlspecialchars($produk['kelengkapan']); ?></p>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800 mb-4">Spesifikasi Umum</h3>
                                <ul class="space-y-2">
                                    <li class="flex justify-between pb-2 border-b border-gray-100">
                                        <span class="text-gray-600">Nama Produk</span>
                                        <span class="font-medium text-gray-800"><?php echo htmlspecialchars($produk['nama_produk'] ?? 'N/A'); ?></span>
                                    </li>
                                    <li class="flex justify-between pb-2 border-b border-gray-100">
                                        <span class="text-gray-600">Kategori</span>
                                        <span class="font-medium text-gray-800"><?php echo htmlspecialchars($produk['kategori'] ?? 'N/A'); ?></span>
                                    </li>

                                    <li class="flex justify-between pb-2 border-b border-gray-100">
                                        <span class="text-gray-600">Tanggal Update</span>
                                        <span class="font-medium text-gray-800"><?php echo date('d M Y', strtotime($produk['updated_at'] ?? 'now')); ?></span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Bagian yang diubah - menambahkan margin kiri -->
                            <div class="ml-8">
                                <h3 class="text-lg font-semibold text-gray-800 mb-4">Informasi Tambahan</h3>
                                <div class="space-y-3">
                                    <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-800">Garansi Personal 1 Bulan</h4>
                                            <p class="text-sm text-gray-600">Berlaku untuk kerusakan fungsi utama</p>
                                        </div>
                                    </div>

                                    <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-800">Cicilan 0%</h4>
                                            <p class="text-sm text-gray-600">Tersedia untuk kartu kredit tertentu</p>
                                        </div>
                                    </div>

                                    <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <div>
                                            <h4 class="font-medium text-gray-800">Pengiriman Cepat</h4>
                                            <p class="text-sm text-gray-600">Dikirim dalam 1-2 hari kerja</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Spesifikasi Content (hidden by default) -->
                    <div id="specs-content" class="bg-white rounded-xl shadow-md p-6 absolute top-0 left-0 w-full transition-all duration-300 transform translate-x-full">
                        <div class="mb-8">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">Cara Order</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h4 class="text-lg font-medium text-gray-800 mb-3">Pemesanan Online</h4>
                                    <ul class="space-y-2">
                                        <li class="flex justify-between pb-2 border-b border-gray-100">
                                            <span class="text-gray-600">Website Resmi</span>
                                            <span class="font-medium text-gray-800">www.tokokita.com</span>
                                        </li>
                                        <li class="flex justify-between pb-2 border-b border-gray-100">
                                            <span class="text-gray-600">Aplikasi Mobile</span>
                                            <span class="font-medium text-gray-800">Tokokita App (iOS/Android)</span>
                                        </li>
                                        <li class="flex justify-between pb-2 border-b border-gray-100">
                                            <span class="text-gray-600">Marketplace</span>
                                            <span class="font-medium text-gray-800">Shopee, Tokopedia, Lazada</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="text-lg font-medium text-gray-800 mb-3">Pembayaran</h4>
                                    <ul class="space-y-2">
                                        <li class="flex justify-between pb-2 border-b border-gray-100">
                                            <span class="text-gray-600">Transfer Bank</span>
                                            <span class="font-medium text-gray-800">BCA, Mandiri, BNI, BRI</span>
                                        </li>
                                        <li class="flex justify-between pb-2 border-b border-gray-100">
                                            <span class="text-gray-600">E-Wallet</span>
                                            <span class="font-medium text-gray-800">OVO, Dana, Gopay, ShopeePay</span>
                                        </li>
                                        <li class="flex justify-between pb-2 border-b border-gray-100">
                                            <span class="text-gray-600">Kredit</span>
                                            <span class="font-medium text-gray-800">Kartu Kredit (0% cicilan)</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="text-lg font-medium text-gray-800 mb-3">Pengiriman</h4>
                                    <ul class="space-y-2">
                                        <li class="flex justify-between pb-2 border-b border-gray-100">
                                            <span class="text-gray-600">Kurir</span>
                                            <span class="font-medium text-gray-800">JNE, J&T, SiCepat, Ninja</span>
                                        </li>
                                        <li class="flex justify-between pb-2 border-b border-gray-100">
                                            <span class="text-gray-600">Pickup Store</span>
                                            <span class="font-medium text-gray-800">Gratis biaya pengambilan</span>
                                        </li>
                                        <li class="flex justify-between pb-2 border-b border-gray-100">
                                            <span class="text-gray-600">Same Day Delivery</span>
                                            <span class="font-medium text-gray-800">Jakarta & Sekitarnya</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="text-lg font-medium text-gray-800 mb-3">Layanan Pelanggan</h4>
                                    <ul class="space-y-2">
                                        <li class="flex justify-between pb-2 border-b border-gray-100">
                                            <span class="text-gray-600">WhatsApp</span>
                                            <span class="font-medium text-gray-800">0812-3456-7890</span>
                                        </li>
                                        <li class="flex justify-between pb-2 border-b border-gray-100">
                                            <span class="text-gray-600">Email</span>
                                            <span class="font-medium text-gray-800">cs@tokokita.com</span>
                                        </li>
                                        <li class="flex justify-between pb-2 border-b border-gray-100">
                                            <span class="text-gray-600">Jam Operasional</span>
                                            <span class="font-medium text-gray-800">08:00 - 21:00 WIB</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                const detailTab = document.getElementById('detail-tab');
                const specsTab = document.getElementById('specs-tab');
                const detailContent = document.getElementById('detail-content');
                const specsContent = document.getElementById('specs-content');

                detailTab.addEventListener('click', () => {
                    // Update tab styles
                    detailTab.classList.add('text-blue-600', 'border-b-2', 'border-blue-600');
                    detailTab.classList.remove('text-gray-500');
                    specsTab.classList.add('text-gray-500');
                    specsTab.classList.remove('text-blue-600', 'border-b-2', 'border-blue-600');

                    // Slide content
                    detailContent.classList.remove('translate-x-full');
                    specsContent.classList.add('translate-x-full');
                });

                specsTab.addEventListener('click', () => {
                    // Update tab styles
                    specsTab.classList.add('text-blue-600', 'border-b-2', 'border-blue-600');
                    specsTab.classList.remove('text-gray-500');
                    detailTab.classList.add('text-gray-500');
                    detailTab.classList.remove('text-blue-600', 'border-b-2', 'border-blue-600');

                    // Slide content
                    detailContent.classList.add('translate-x-full');
                    specsContent.classList.remove('translate-x-full');
                });
            </script>

            <!-- Related Products -->
            @if($related_produks->isNotEmpty())
            <div class="mt-12 mb-8">
                <h3 class="text-2xl font-bold mb-6 text-gray-800 border-b pb-2">Produk Terkait</h3>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @foreach ($related_produks as $item)
                    <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 border border-gray-100">
                        <a href="{{ route('user.produk.detail', $item->id) }}" class="block h-full">
                            <div class="relative">
                                @if($item->gambar)
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_produk }}"
                                    class="w-full h-48 object-cover">
                                @else
                                <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                @endif

                                <!-- Badge harga -->
                                <div class="absolute bottom-0 right-0 bg-gradient-to-r from-blue-500 to-indigo-600 text-white py-1 px-3 m-2 rounded-full text-sm font-semibold shadow-md">
                                    Rp{{ number_format($item->harga, 0, ',', '.') }}
                                </div>
                            </div>

                            <div class="p-4">
                                <h4 class="text-lg font-semibold text-gray-800 mb-2 line-clamp-2">{{ $item->nama_produk }}</h4>

                                @if(isset($item->kategori))
                                <span class="inline-block text-xs text-blue-600 bg-blue-50 px-3 py-1 rounded-full font-medium transform hover:scale-105 transition-transform duration-300">
                                    {{ $item->kategori }}
                                </span>
                                @endif

                                <div class="flex justify-between items-center mt-3">
                                    <div class="text-sm text-gray-500">
                                        <i class="fas fa-eye mr-1"></i> {{ $item->views ?? 0 }}
                                    </div>
                                    <button class="text-sm text-white bg-blue-600 hover:bg-blue-700 px-3 py-1 rounded transition">
                                        Lihat Detail
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            @else
            <div class="mt-8 p-6 bg-gray-50 rounded-lg border border-gray-100 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                </svg>
                <p class="text-gray-600 font-medium">Tidak ada produk terkait saat ini.</p>
            </div>
            @endif
        </div>
    </main>
    <footer class="bg-gradient-to-b from-gray-800 to-gray-900 text-gray-300 py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 mb-12">
                <div class="lg:col-span-2">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="bg-white p-2 rounded-lg shadow-md">
                            <img src="{{ asset('storage/images/LOGO.png') }}" alt="Berkah Gadget" class="w-10 h-10">
                        </div>
                        <span class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-green-400">Berkah Gadget</span>
                    </div>
                    <p class="mb-6 text-sm md:text-base">Toko gadget terpercaya di Madiun dengan produk berkualitas, harga bersaing, dan layanan pelanggan terbaik sejak 2020.</p>

                    <div class="space-y-3 mb-6">
                        <div class="flex items-start space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-0.5 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <p>Jl. Imam Bonjol No.4, Rejomulyo, Kec. Kartoharjo, Kota Madiun, Jawa Timur 63111</p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-0.5 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <p>+62 878-6140-0744</p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-0.5 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <p>info@berkahgadget.com</p>
                        </div>
                    </div>

                    <div class="mb-6">
                        <h4 class="text-white font-medium mb-2">Jam Operasional:</h4>
                        <p>Senin - Sabtu: 09.00 - 21.00 WIB</p>
                        <p>Minggu: 10.00 - 20.00 WIB</p>
                    </div>

                    <div>
                        <h4 class="text-white font-medium mb-3">Ikuti Kami:</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="bg-gray-700 hover:bg-blue-600 p-2 rounded-full transition-all duration-300" aria-label="Facebook">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="#" class="bg-gray-700 hover:bg-sky-500 p-2 rounded-full transition-all duration-300" aria-label="Twitter">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                                </svg>
                            </a>
                            <a href="#" class="bg-gray-700 hover:bg-pink-600 p-2 rounded-full transition-all duration-300" aria-label="Instagram">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="#" class="bg-gray-700 hover:bg-red-600 p-2 rounded-full transition-all duration-300" aria-label="YouTube">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="https://wa.me/62881036357795" class="bg-gray-700 hover:bg-green-600 p-2 rounded-full transition-all duration-300" aria-label="WhatsApp">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M21.105 4.893C18.861 2.65 15.872 1.401 12.694 1.4 6.112 1.4 0.76 6.753 0.759 13.335c0 2.096.546 4.142 1.585 5.945L0.691 24l4.848-1.575c1.733.926 3.684 1.414 5.666 1.415h.005c6.581 0 11.934-5.354 11.935-11.937.001-3.179-1.249-6.168-3.492-8.413l.452.403zm-8.411 18.341h-.004c-1.782 0-3.527-.469-5.057-1.359l-.363-.211-3.759 1.22 1.246-3.699-.235-.367a9.892 9.892 0 0 1-1.514-5.26c.001-5.466 4.455-9.92 9.926-9.92 2.65.001 5.142 1.033 7.014 2.906 1.871 1.873 2.901 4.363 2.9 7.011-.001 5.467-4.455 9.921-9.923 9.921l-.231-.242zm5.441-7.431c-.298-.149-1.766-.872-2.04-.971-.274-.099-.474-.148-.673.15-.2.298-.771.97-.945 1.17-.173.197-.347.223-.644.074-.298-.149-1.255-.463-2.39-1.475-.882-.788-1.478-1.761-1.652-2.059-.173-.298-.019-.458.131-.606.133-.133.297-.347.446-.522.149-.172.198-.296.297-.496.1-.198.05-.371-.025-.521-.075-.148-.672-1.62-.921-2.218-.241-.584-.487-.505-.672-.514-.173-.009-.372-.011-.571-.011-.198 0-.52.074-.792.371-.272.298-1.04 1.017-1.04 2.479 0 1.463 1.064 2.873 1.213 3.074.148.198 2.095 3.2 5.076 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.57-.085 1.758-.719 2.006-1.413.247-.694.247-1.29.173-1.413-.074-.124-.273-.198-.57-.347l-.461.242z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-white font-semibold text-lg mb-5 relative">
                        <span class="relative z-10">Tautan Cepat</span>
                        <span class="absolute bottom-0 left-0 w-12 h-1 bg-green-400 rounded-full"></span>
                    </h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="#" class="hover:text-white transition-all duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                Beranda
                            </a>
                        </li>
                        <li>
                            <a href="#produk" class="hover:text-white transition-all duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                Produk
                            </a>
                        </li>
                        <li>
                            <a href="#promo" class="hover:text-white transition-all duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                Promo
                            </a>
                        </li>
                        <li>
                            <a href="#tentang" class="hover:text-white transition-all duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                Tentang Kami
                            </a>
                        </li>
                        <li>
                            <a href="#kontak" class="hover:text-white transition-all duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                Kontak
                            </a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-white font-semibold text-lg mb-5 relative">
                        <span class="relative z-10">Kategori</span>
                        <span class="absolute bottom-0 left-0 w-12 h-1 bg-green-400 rounded-full"></span>
                    </h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="#" class="hover:text-white transition-all duration-300 flex items-center group">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                Smartphone
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white transition-all duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                Laptop
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white transition-all duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                Tablet
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white transition-all duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                Smartwatch
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white transition-all duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                Aksesoris
                            </a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-white font-semibold text-lg mb-5 relative">
                        <span class="relative z-10">Layanan Pelanggan</span>
                        <span class="absolute bottom-0 left-0 w-12 h-1 bg-green-400 rounded-full"></span>
                    </h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="#" class="hover:text-white transition-all duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                FAQ
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white transition-all duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                Cara Pembelian
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white transition-all duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                Pengiriman
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white transition-all duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                Garansi & Pengembalian
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white transition-all duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                Pembayaran
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mb-12">
                <h3 class="text-white font-semibold text-lg mb-5 text-center">Metode Pembayaran</h3>
                <div class="flex flex-wrap justify-center gap-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bank_Central_Asia.svg/960px-Bank_Central_Asia.svg.png" alt="BCA" class="h-8 bg-white rounded-md p-1">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/ad/Bank_Mandiri_logo_2016.svg" alt="Mandiri" class="h-8 bg-white rounded-md p-1">
                    <img src="https://upload.wikimedia.org/wikipedia/id/thumb/5/55/BNI_logo.svg/1200px-BNI_logo.svg.png" alt="BNI" class="h-8 bg-white rounded-md p-1">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/BANK_BRI_logo.svg/2560px-BANK_BRI_logo.svg.png" alt="BRI" class="h-8 bg-white rounded-md p-1">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Logo_ovo_purple.svg/2560px-Logo_ovo_purple.svg.png" alt="OVO" class="h-8 bg-white rounded-md p-1">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/86/Gopay_logo.svg/2560px-Gopay_logo.svg.png" alt="GoPay" class="h-8 bg-white rounded-md p-1">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Logo_QRIS.svg/163px-Logo_QRIS.svg.png" alt="QRIS" class="h-8 bg-white rounded-md p-1">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9d/Logo_Indomaret.png" alt="Indomaret" class="h-8 bg-white rounded-md p-1">
                </div>
            </div>


            <div class="mb-12">
                <h3 class="text-white font-semibold text-lg mb-5 text-center">Mitra Pengiriman</h3>
                <div class="flex flex-wrap justify-center gap-4">
                    <img src="https://www.jne.co.id/cfind/source/images/logo.svg" alt="JNE" class="h-8 bg-white rounded-md p-1">
                    <img src="https://i.pinimg.com/736x/72/23/3c/72233c7d51fe3ffde3cb3c345a7f7731.jpg" alt="J&T" class="h-8 bg-white rounded-md p-1">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtxolCwnRdHqegP65Kis62axTDA5E2yCWkoQ&s" alt="SiCepat" class="h-8 bg-white rounded-md p-1">
                    <img src="https://anteraja.id/id/assets/img/icons/logo-anteraja.png" alt="AnterAja" class="h-8 bg-white rounded-md p-1">
                </div>
            </div>
        </div>

        <a href="https://wa.me/62881036357795" class="fixed bottom-6 right-6 w-12 h-12 bg-green-500 text-white rounded-full flex items-center justify-center shadow-lg hover:bg-green-600 transition-all transform hover:scale-110">
            <i class="fab fa-whatsapp text-xl"></i>
        </a>

        <a class="fixed bottom-20 right-6 w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center shadow-lg hover:bg-blue-700 transition-all transform hover:scale-110"
            id="back-to-top">
            <i class="fas fa-arrow-up"></i>
        </a>
    </footer>


    <script>
        // Back to top button
        document.getElementById('back-to-top').addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Show/hide back to top button based on scroll position
        window.addEventListener('scroll', function() {
            const backToTop = document.getElementById('back-to-top');
            if (window.pageYOffset > 300) {
                backToTop.classList.add('opacity-100', 'visible');
                backToTop.classList.remove('opacity-0', 'invisible');
            } else {
                backToTop.classList.add('opacity-0', 'invisible');
                backToTop.classList.remove('opacity-100', 'visible');
            }
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Animation on scroll
        function animateOnScroll() {
            const elements = document.querySelectorAll('.animate-fade-in, .animate-slide-up');

            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.2;

                if (elementPosition < screenPosition) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }
            });
        }

        // Initialize animations
        window.addEventListener('load', animateOnScroll);
        window.addEventListener('scroll', animateOnScroll);

        // Dropdown menu for mobile
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('.lg\\:hidden');
            const mobileMenu = document.querySelector('.mobile-menu');

            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>
</body>

</html>