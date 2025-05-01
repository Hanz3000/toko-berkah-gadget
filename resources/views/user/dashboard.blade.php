<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berkah Gadget - Toko Gadget Modern</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        },
                        secondary: {
                            50: '#f5f3ff',
                            100: '#ede9fe',
                            200: '#ddd6fe',
                            300: '#c4b5fd',
                            400: '#a78bfa',
                            500: '#8b5cf6',
                            600: '#7c3aed',
                            700: '#6d28d9',
                            800: '#5b21b6',
                            900: '#4c1d95',
                        },
                        accent: {
                            50: '#fef2f2',
                            100: '#fee2e2',
                            200: '#fecaca',
                            300: '#fca5a5',
                            400: '#f87171',
                            500: '#ef4444',
                            600: '#dc2626',
                            700: '#b91c1c',
                            800: '#991b1b',
                            900: '#7f1d1d',
                        }
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                    animation: {
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'float': 'float 6s ease-in-out infinite',
                        'fade-in': 'fadeIn 0.5s ease-out forwards',
                        'slide-up': 'slideUp 0.6s ease-out forwards',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': {
                                opacity: '0'
                            },
                            '100%': {
                                opacity: '1'
                            },
                        },
                        slideUp: {
                            '0%': {
                                opacity: '0',
                                transform: 'translateY(20px)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateY(0)'
                            },
                        },
                        glow: {
                            '0%': {
                                'box-shadow': '0 0 0px rgba(59, 130, 246, 0.5)'
                            },
                            '100%': {
                                'box-shadow': '0 0 20px rgba(59, 130, 246, 0.8)'
                            },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, #3b82f6, #8b5cf6);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(to bottom, #2563eb, #7c3aed);
        }

        /* Smooth transitions */
        .transition-all {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Gradient text */
        .text-gradient {
            background: linear-gradient(to right, #3b82f6, #8b5cf6);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        /* Card hover effect */
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        /* Button hover effect */
        .btn-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        /* Floating animation */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        /* Hero section overlay */
        .hero-overlay {
            background: linear-gradient(to right, rgba(30, 64, 175, 0.8), rgba(109, 40, 217, 0.8));
        }

        /* Navbar glass effect */
        .navbar-glass {
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        /* Product card shine effect */
        .product-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 50%;
            height: 100%;
            background: linear-gradient(to right, transparent 0%, rgba(255, 255, 255, 0.1) 50%, transparent 100%);
            transition: all 0.7s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .product-card:hover::after {
            left: 100%;
        }
    </style>
</head>

<body class="font-sans bg-gray-50 text-gray-800 antialiased">
    <!-- Navigation -->
    <nav class="navbar-glass fixed w-full z-50 bg-white/80 shadow-sm">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('storage/images/LOGO.png') }}" alt="Berkah Gadget" class="w-10 h-10 rounded-full object-cover">
                    <span class="text-2xl font-bold text-gradient">Berkah Gadget</span>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="#" class="text-gray-700 hover:text-primary-600 font-medium transition-all relative group">
                        Beranda
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary-600 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#produk" class="text-gray-700 hover:text-primary-600 font-medium transition-all relative group">
                        Produk
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary-600 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#kategori" class="text-gray-700 hover:text-primary-600 font-medium transition-all relative group">
                        Kategori
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary-600 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#tentang" class="text-gray-700 hover:text-primary-600 font-medium transition-all relative group">
                        Tentang
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary-600 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#kontak" class="text-gray-700 hover:text-primary-600 font-medium transition-all relative group">
                        Kontak
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary-600 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </div>

                <!-- Right side icons -->
                <div class="flex items-center space-x-4">
                    <!-- Search -->
                    <div class="hidden md:block relative">
                        <input type="text" placeholder="Cari produk..." class="pl-10 pr-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent w-64 transition-all">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>

                    <!-- User and Cart -->
                    <div class="flex items-center space-x-3">
                        @if(Auth::check())
                        <div class="relative group">
                            <button class="flex items-center space-x-1">
                                <div class="w-8 h-8 rounded-full bg-primary-100 flex items-center justify-center text-primary-600">
                                    <i class="fas fa-user"></i>
                                </div>
                                <span class="hidden md:inline text-gray-700">{{ Auth::user()->name }}</span>
                                <i class="fas fa-chevron-down text-xs text-gray-500 hidden md:inline"></i>
                            </button>
                            <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600 transition-all">Profil Saya</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600 transition-all">Pesanan</a>
                                @if(auth()->user()->role === 'admin' || auth()->user()->role === 'superadmin')
                                <a href="{{ route('admin.produk.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600 transition-all">Admin Panel</a>
                                @endif
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-primary-50 hover:text-primary-600 transition-all">Logout</button>
                                </form>
                            </div>
                        </div>
                        @else
                        <a href="{{ route('login') }}" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-primary-600 transition-all">Login</a>
                        <a href="{{ route('register') }}" class="px-4 py-2 text-sm font-medium text-white bg-primary-600 rounded-full hover:bg-primary-700 transition-all btn-hover">Daftar</a>
                        @endif

                        <a href="#" class="relative">
                            <div class="w-8 h-8 rounded-full bg-primary-100 flex items-center justify-center text-primary-600 hover:bg-primary-200 transition-all">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <span class="absolute -top-1 -right-1 bg-accent-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                        </a>
                    </div>

                    <!-- Mobile menu button -->
                    <button class="lg:hidden focus:outline-none">
                        <i class="fas fa-bars text-gray-700 text-xl"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile search -->
            <div class="mt-3 lg:hidden">
                <div class="relative">
                    <input type="text" placeholder="Cari produk..." class="pl-10 pr-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent w-full transition-all">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative pt-24 pb-16 md:pt-32 md:pb-24 overflow-hidden">
        <div class="hero-overlay absolute inset-0"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 text-center md:text-left animate-fade-in">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 leading-tight">
                        Temukan Gadget <span class="text-gradient">Terbaik</span> Anda
                    </h1>
                    <p class="text-lg md:text-xl text-gray-100 mb-8 max-w-lg">
                        Koleksi terlengkap smartphone, laptop, dan aksesoris dengan harga terbaik dan garansi resmi.
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4 justify-center md:justify-start">
                        <a href="#produk" class="px-8 py-3 bg-white text-primary-600 font-medium rounded-full hover:bg-gray-100 transition-all btn-hover animation-delay-300 animate-slide-up">
                            Belanja Sekarang
                        </a>
                        <a href="#promo" class="px-8 py-3 border-2 border-white text-white font-medium rounded-full hover:bg-white hover:text-primary-600 transition-all btn-hover animation-delay-500 animate-slide-up">
                            Lihat Promo
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2 animate-float animation-delay-700">
                    <img src="{{ asset('storage/images/slide1.png') }}" alt="Hero Image" class="w-full max-w-md mx-auto">
                </div>
            </div>
        </div>

        <!-- Animated waves background -->
        <div class="absolute bottom-0 left-0 right-0 overflow-hidden">
            <svg viewBox="0 0 1200 120" preserveAspectRatio="none" class="w-full h-20">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="fill-current text-primary-800"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="fill-current text-primary-700"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="fill-current text-primary-600"></path>
            </svg>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 animate-fade-in">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-shipping-fast text-primary-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-2">Gratis Ongkir</h3>
                    <p class="text-gray-600 text-center">Gratis pengiriman untuk semua pesanan di atas Rp 500.000</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 animate-fade-in animation-delay-200">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-shield-alt text-primary-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-2">Garansi Resmi</h3>
                    <p class="text-gray-600 text-center">Semua produk kami bergaransi resmi dari distributor</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 animate-fade-in animation-delay-400">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-headset text-primary-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-2">Dukungan 24/7</h3>
                    <p class="text-gray-600 text-center">Tim support kami siap membantu kapan saja</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section id="kategori" class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 animate-fade-in">
                <h2 class="text-3xl font-bold mb-4">Kategori Produk</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Temukan produk terbaik dalam berbagai kategori pilihan kami</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Category 1 -->
                <a href="#" class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300 card-hover animate-slide-up">
                    <div class="relative h-40 overflow-hidden">
                        <img src="{{ asset('storage/images/slide3.jpg') }}" alt="Smartphone" class="w-full h-full object-cover transition-all duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-4">
                            <h3 class="text-white font-semibold text-lg">Smartphone</h3>
                        </div>
                    </div>
                </a>

                <!-- Category 2 -->
                <a href="#" class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300 card-hover animate-slide-up animation-delay-100">
                    <div class="relative h-40 overflow-hidden">
                        <img src="{{ asset('storage/images/category-laptop.jpg') }}" alt="Laptop" class="w-full h-full object-cover transition-all duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-4">
                            <h3 class="text-white font-semibold text-lg">Laptop</h3>
                        </div>
                    </div>
                </a>

                <!-- Category 3 -->
                <a href="#" class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300 card-hover animate-slide-up animation-delay-200">
                    <div class="relative h-40 overflow-hidden">
                        <img src="{{ asset('storage/images/category-tablet.jpg') }}" alt="Tablet" class="w-full h-full object-cover transition-all duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-4">
                            <h3 class="text-white font-semibold text-lg">Tablet</h3>
                        </div>
                    </div>
                </a>

                <!-- Category 4 -->
                <a href="#" class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300 card-hover animate-slide-up animation-delay-300">
                    <div class="relative h-40 overflow-hidden">
                        <img src="{{ asset('storage/images/category-accessories.jpg') }}" alt="Aksesoris" class="w-full h-full object-cover transition-all duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-4">
                            <h3 class="text-white font-semibold text-lg">Aksesoris</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="produk" class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center mb-8 animate-fade-in">
                <div>
                    <h2 class="text-3xl font-bold mb-2">Produk Terbaru</h2>
                    <p class="text-gray-600">Koleksi produk terbaru dengan kualitas terbaik</p>
                </div>
                <div class="mt-4 md:mt-0">
                    <a href="#" class="px-6 py-2 border border-primary-600 text-primary-600 rounded-full hover:bg-primary-600 hover:text-white transition-all btn-hover">
                        Lihat Semua Produk
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($produk as $item)
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 card-hover product-card relative animate-slide-up" style="animation-delay: {{ $loop->index * 100 }}ms">
                    <!-- Badge -->
                    @if($item->is_new)
                    <div class="absolute top-3 left-3 bg-accent-500 text-white text-xs font-bold px-2 py-1 rounded-full z-10">
                        Baru!
                    </div>
                    @endif

                    <!-- Product Image -->
                    <div class="relative h-48 overflow-hidden">
                        @if ($item->gambar)
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_produk }}" class="w-full h-full object-cover transition-all duration-500 hover:scale-110">
                        @else
                        <div class="w-full h-full bg-gray-100 flex items-center justify-center text-gray-400">
                            <i class="fas fa-image text-4xl"></i>
                        </div>
                        @endif
                        <!-- Quick View Button -->
                        <div class="absolute inset-0 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity duration-300 bg-black/30">
                            <a href="{{ route('user.produk.detail', $item->id) }}" class="px-4 py-2 bg-white text-primary-600 rounded-full font-medium hover:bg-primary-600 hover:text-white transition-all">
                                Lihat Detail
                            </a>
                        </div>
                    </div>

                    <!-- Product Info -->
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <div>
                                <span class="text-xs text-primary-600 bg-primary-100 px-2 py-1 rounded-full">{{ $item->kategori }}</span>
                                <h3 class="font-semibold text-lg mt-1 text-gray-800">{{ $item->nama_produk }}</h3>
                            </div>
                            <!-- Wishlist Button -->
                            <button class="text-gray-400 hover:text-accent-500 transition-all">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>

                        <div class="flex items-center justify-between mt-4">
                            <div>
                                <p class="text-xl font-bold text-primary-600">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                                @if($item->harga_diskon)
                                <p class="text-sm text-gray-500 line-through">Rp {{ number_format($item->harga_diskon, 0, ',', '.') }}</p>
                                @endif
                            </div>
                            <button class="w-10 h-10 bg-primary-600 text-white rounded-full flex items-center justify-center hover:bg-primary-700 transition-all btn-hover">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Promo Banner -->
    <section id="promo" class="py-12 bg-gradient-to-r from-primary-600 to-secondary-600">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="text-center md:text-left mb-6 md:mb-0 animate-fade-in">
                    <h2 class="text-3xl font-bold text-white mb-2">Promo Spesial Hari Ini!</h2>
                    <p class="text-gray-100 mb-4">Dapatkan diskon hingga 30% untuk produk pilihan</p>
                    <div class="flex items-center justify-center md:justify-start space-x-2">
                        <div class="bg-white/20 text-white px-3 py-1 rounded-lg">
                            <span class="font-bold text-xl">12</span>
                            <span class="text-sm">Hari</span>
                        </div>
                        <div class="bg-white/20 text-white px-3 py-1 rounded-lg">
                            <span class="font-bold text-xl">23</span>
                            <span class="text-sm">Jam</span>
                        </div>
                        <div class="bg-white/20 text-white px-3 py-1 rounded-lg">
                            <span class="font-bold text-xl">45</span>
                            <span class="text-sm">Menit</span>
                        </div>
                        <div class="bg-white/20 text-white px-3 py-1 rounded-lg">
                            <span class="font-bold text-xl">30</span>
                            <span class="text-sm">Detik</span>
                        </div>
                    </div>
                </div>
                <div class="animate-float">
                    <img src="{{ asset('storage/images/slide2.png') }}" alt="Promo" class="w-full max-w-xs md:max-w-sm">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 animate-fade-in">
                <h2 class="text-3xl font-bold mb-4">Apa Kata Pelanggan Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Testimoni dari pelanggan yang sudah berbelanja di toko kami</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 animate-slide-up">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                            <img src="{{ asset('storage/images/testimonial-1.jpg') }}" alt="Customer" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-semibold">Andi Wijaya</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"Produknya original dan pengirimannya cepat. Harga juga lebih murah dibanding toko lain. Recommended banget!"</p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 animate-slide-up animation-delay-200">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                            <img src="{{ asset('storage/images/testimonial-2.jpg') }}" alt="Customer" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-semibold">Siti Rahma</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"Pelayanannya ramah dan responsive. Barang sampai dengan aman dan sesuai pesanan. Akan belanja lagi di sini."</p>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 animate-slide-up animation-delay-400">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                            <img src="{{ asset('storage/images/testimonial-3.jpg') }}" alt="Customer" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-semibold">Budi Santoso</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"Garansi resmi membuat belanja lebih tenang. Sudah beberapa kali beli gadget di sini dan selalu puas."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="tentang" class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0 animate-fade-in">
                    <img src="{{ asset('storage/images/slide3.jpg') }}" alt="About Us" class="rounded-xl shadow-lg w-full max-w-lg mx-auto">
                </div>
                <div class="md:w-1/2 md:pl-12 animate-slide-up">
                    <h2 class="text-3xl font-bold mb-6">Tentang Toko Berkah Gadget</h2>
                    <p class="text-gray-600 mb-4">Toko Berkah Gadget Madiun adalah pusat penjualan gadget terpercaya di Madiun. Kami menyediakan berbagai produk berkualitas mulai dari smartphone, tablet, aksesoris, hingga kebutuhan teknologi lainnya.</p>
                    <p class="text-gray-600 mb-6">Dengan pelayanan yang ramah, harga bersaing, dan garansi resmi, kami berkomitmen untuk memberikan pengalaman belanja terbaik bagi pelanggan.</p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="bg-primary-100 p-2 rounded-full mr-4">
                                <i class="fas fa-check text-primary-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Produk Berkualitas</h4>
                                <p class="text-gray-600">Semua produk kami original dengan garansi resmi</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-primary-100 p-2 rounded-full mr-4">
                                <i class="fas fa-check text-primary-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Harga Terbaik</h4>
                                <p class="text-gray-600">Harga kompetitif dengan promo menarik setiap minggu</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-primary-100 p-2 rounded-full mr-4">
                                <i class="fas fa-check text-primary-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Layanan Profesional</h4>
                                <p class="text-gray-600">Tim kami siap membantu Anda dengan ramah dan profesional</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-primary-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4 animate-fade-in">Siap Memulai Belanja?</h2>
            <p class="text-xl text-gray-100 mb-8 max-w-2xl mx-auto animate-fade-in animation-delay-200">Daftar sekarang dan dapatkan diskon 10% untuk pembelian pertama Anda!</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-3 sm:space-y-0 sm:space-x-4 animate-slide-up animation-delay-400">
                <a href="{{ route('register') }}" class="px-8 py-3 bg-white text-primary-600 font-medium rounded-full hover:bg-gray-100 transition-all btn-hover">
                    Daftar Sekarang
                </a>
                <a href="#produk" class="px-8 py-3 border-2 border-white text-white font-medium rounded-full hover:bg-white hover:text-primary-600 transition-all btn-hover">
                    Lihat Produk
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="kontak" class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 animate-fade-in">
                <h2 class="text-3xl font-bold mb-4">Hubungi Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Punya pertanyaan atau butuh bantuan? Tim kami siap membantu Anda</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-sm animate-slide-up">
                    <h3 class="text-xl font-semibold mb-6">Kirim Pesan</h3>
                    <form>
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 mb-2">Nama Lengkap</label>
                            <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 mb-2">Email</label>
                            <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-gray-700 mb-2">Pesan</label>
                            <textarea id="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent"></textarea>
                        </div>
                        <button type="submit" class="w-full px-6 py-3 bg-primary-600 text-white rounded-lg hover:bg-primary-700 transition-all btn-hover">
                            Kirim Pesan
                        </button>
                    </form>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-sm animate-slide-up animation-delay-200">
                    <h3 class="text-xl font-semibold mb-6">Informasi Kontak</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="bg-primary-100 p-3 rounded-full mr-4">
                                <i class="fas fa-map-marker-alt text-primary-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Alamat</h4>
                                <p class="text-gray-600">Jl. Gadget No. 123, Madiun, Jawa Timur</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-primary-100 p-3 rounded-full mr-4">
                                <i class="fas fa-phone-alt text-primary-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Telepon</h4>
                                <p class="text-gray-600">+62 812-3456-7890</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-primary-100 p-3 rounded-full mr-4">
                                <i class="fas fa-envelope text-primary-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Email</h4>
                                <p class="text-gray-600">info@berkahgadget.com</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-primary-100 p-3 rounded-full mr-4">
                                <i class="fas fa-clock text-primary-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Jam Operasional</h4>
                                <p class="text-gray-600">Senin - Sabtu: 08.00 - 21.00 WIB</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h4 class="font-semibold text-gray-800 mb-4">Ikuti Kami</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 bg-primary-100 text-primary-600 rounded-full flex items-center justify-center hover:bg-primary-600 hover:text-white transition-all">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-primary-100 text-primary-600 rounded-full flex items-center justify-center hover:bg-primary-600 hover:text-white transition-all">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-primary-100 text-primary-600 rounded-full flex items-center justify-center hover:bg-primary-600 hover:text-white transition-all">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-primary-100 text-primary-600 rounded-full flex items-center justify-center hover:bg-primary-600 hover:text-white transition-all">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="py-12 bg-primary-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4 animate-fade-in">Berlangganan Newsletter</h2>
            <p class="text-xl text-gray-100 mb-8 max-w-2xl mx-auto animate-fade-in animation-delay-200">Dapatkan informasi promo dan produk terbaru langsung ke email Anda</p>
            <form class="max-w-md mx-auto flex animate-slide-up animation-delay-400">
                <input type="email" placeholder="Alamat email Anda" class="flex-1 px-4 py-3 rounded-l-lg focus:outline-none text-gray-800">
                <button type="submit" class="px-6 py-3 bg-secondary-600 text-white rounded-r-lg hover:bg-secondary-700 transition-all btn-hover">
                    Berlangganan
                </button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <img src="{{ asset('storage/images/LOGO.png') }}" alt="Berkah Gadget" class="w-10 h-10 rounded-full">
                        <span class="text-2xl font-bold text-gradient">Berkah Gadget</span>
                    </div>
                    <p class="mb-4">Toko gadget terpercaya dengan produk berkualitas dan harga terbaik di Madiun.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-all">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-all">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-all">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-all">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-white font-semibold text-lg mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white transition-all">Beranda</a></li>
                        <li><a href="#produk" class="hover:text-white transition-all">Produk</a></li>
                        <li><a href="#promo" class="hover:text-white transition-all">Promo</a></li>
                        <li><a href="#tentang" class="hover:text-white transition-all">Tentang Kami</a></li>
                        <li><a href="#kontak" class="hover:text-white transition-all">Kontak</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-white font-semibold text-lg mb-4">Kategori</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white transition-all">Smartphone</a></li>
                        <li><a href="#" class="hover:text-white transition-all">Laptop</a></li>
                        <li><a href="#" class="hover:text-white transition-all">Tablet</a></li>
                        <li><a href="#" class="hover:text-white transition-all">Smartwatch</a></li>
                        <li><a href="#" class="hover:text-white transition-all">Aksesoris</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-white font-semibold text-lg mb-4">Bantuan</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white transition-all">FAQ</a></li>
                        <li><a href="#" class="hover:text-white transition-all">Pengiriman</a></li>
                        <li><a href="#" class="hover:text-white transition-all">Pembayaran</a></li>
                        <li><a href="#" class="hover:text-white transition-all">Pengembalian</a></li>
                        <li><a href="#" class="hover:text-white transition-all">Kebijakan Privasi</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8 text-center">
                <p>&copy; 2025 Berkah Gadget. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="fixed bottom-6 right-6 w-12 h-12 bg-primary-600 text-white rounded-full flex items-center justify-center shadow-lg hover:bg-primary-700 transition-all transform hover:scale-110" id="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Whatsapp Float Button -->
    <a href="https://wa.me/6281234567890" class="fixed bottom-24 right-6 w-12 h-12 bg-green-500 text-white rounded-full flex items-center justify-center shadow-lg hover:bg-green-600 transition-all transform hover:scale-110">
        <i class="fab fa-whatsapp text-xl"></i>
    </a>

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