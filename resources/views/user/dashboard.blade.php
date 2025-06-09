<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berkah Gadget - Toko Gadget Modern</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

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
        /* Your custom CSS for animations and effects */
        @keyframes slideUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .modal-enter {
            animation: fadeIn 0.3s ease-out;
        }

        .modal-content-enter {
            animation: slideUp 0.3s ease-out;
        }

        .share-button {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .share-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .glass-effect {
            backdrop-filter: blur(20px);
            background: rgba(255, 255, 255, 0.9);
        }

        /* Additional styles from your product card snippet */
        .animate-slide-up {
            animation: slideUp 0.5s ease-out forwards;
        }
    </style>
    <style>
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        /* Parallax effect */
        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            transform: translateZ(0);
            -webkit-transform: translateZ(0);
        }

        /* Custom animation classes */
        [data-aos="custom-fade-up"] {
            opacity: 0;
            transform: translateY(100px);
            transition-property: transform, opacity;
        }

        [data-aos="custom-fade-up"].aos-animate {
            opacity: 1;
            transform: translateY(0);
        }

        /* Staggered animation helper classes */
        .stagger-item:nth-child(1) {
            transition-delay: 100ms;
        }

        .stagger-item:nth-child(2) {
            transition-delay: 200ms;
        }

        .stagger-item:nth-child(3) {
            transition-delay: 300ms;
        }

        .stagger-item:nth-child(4) {
            transition-delay: 400ms;
        }

        .stagger-item:nth-child(5) {
            transition-delay: 500ms;
        }

        /* Custom Shape Divider */
        .custom-shape-divider-bottom-1591961042 {
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            transform: rotate(180deg);
        }

        /* gelombang */
        .custom-shape-divider-bottom-1591961042 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 90px;
        }

        .custom-shape-divider-bottom-1591961042 .shape-fill {
            fill: #FFFFFF;
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

        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1),
                0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        /* Button hover effect */
        .btn-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        /* Loading button effect */
        .btn-loading {
            position: relative;
            overflow: hidden;
        }

        .btn-loading::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            animation: btn-loading 1.5s infinite;
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

        @keyframes shine {
            0% {
                background-position: -100% 0;
            }

            100% {
                background-position: 100% 0;
            }
        }

        @keyframes pulse-glow {

            0%,
            100% {
                box-shadow: 0 0 15px rgba(59, 130, 246, 0.5);
            }

            50% {
                box-shadow: 0 0 30px rgba(59, 130, 246, 0.8);
            }
        }

        @keyframes slide-in {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes btn-loading {
            100% {
                left: 100%;
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

        /* Carousel Styles */
        .carousel-container {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
        }

        .slides-container {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            min-width: 100%;
            padding: 1rem;
        }

        .carousel-arrow {
            opacity: 0.7;
            transition: all 0.3s ease;
        }

        .carousel-arrow:hover {
            opacity: 1;
            transform: translateY(-50%) scale(1.1);
        }

        .indicator {
            transition: all 0.3s ease;
        }

        .indicator-active {
            transform: scale(1.2);
            background-color: rgb(14 165 233);
            /* primary-500 color value */
        }

        /* Touch-friendly styles */
        .carousel-container {
            touch-action: pan-y;
        }

        /* Navbar hide on scroll */
        .nav-scroll-up {
            transform: translateY(-100%);
        }

        .nav-scroll-down {
            transform: translateY(0);
        }

        .navbar-glass {
            transition: transform 0.3s ease-in-out;
        }

        .bg-pattern-dots {
            background-image: url("data:image/svg+xml,%3Csvg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%239C92AC' fill-opacity='0.05' fill-rule='evenodd'%3E%3Ccircle cx='3' cy='3' r='3'/%3E%3C/g%3E%3C/svg%3E");
        }

        .bg-blob {
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill='%23F472B6' d='M48.4,-64.5C62.9,-55.4,74.8,-41.6,79.8,-25.9C84.8,-10.2,83,7.4,76.9,22.9C70.9,38.4,60.7,51.9,47.1,60.5C33.4,69.1,16.7,72.9,0,72.9C-16.7,72.9,-33.4,69.1,-47.7,60.4C-62,51.7,-73.8,38,-80.3,21.1C-86.8,4.3,-87.8,-15.8,-80.9,-32.3C-74,-48.9,-59.1,-61.8,-43.4,-70.4C-27.6,-79,-13.8,-83.2,1,-84.4C15.8,-85.7,31.5,-83,48.4,-64.5Z' transform='translate(100 100)'/%3E%3C/svg%3E");
        }

        @keyframes slide-up {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-slide-up {
            animation: slide-up 0.6s ease forwards;
        }

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>

</head>

<body class="font-sans bg-gray-50 text-gray-800 antialiased">
    <!-- Navigation -->
    <nav id="mainNav"
        class="navbar-glass fixed w-full z-50 backdrop-blur-md bg-white/70 transition-all duration-300 border-b border-gray-100 shadow-sm">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">

                <!-- Logo -->
                <div class="flex items-center justify-start" data-aos="fade-right">
                    <span
                        class="whitespace-nowrap text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 via-blue-500 to-green-500 mr-3 hover:scale-105 transition-transform duration-300">
                        Berkah Gadget
                    </span>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-1" data-aos="fade-left" data-aos-delay="10">
                    <a href="{{ route('user.dashboard') }}"
                        class="px-4 py-2 text-gray-700 hover:text-blue-600 font-medium transition-all relative group rounded-md hover:bg-gray-50/80">
                        Beranda
                        <span
                            class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-green-500 transition-all duration-300 group-hover:w-4/5"></span>
                    </a>

                    <!-- Produk Dropdown -->
                    <div class="relative group">
                        <button
                            class="px-4 py-2 text-gray-700 hover:text-blue-600 font-medium transition-all flex items-center group rounded-md hover:bg-gray-50/80">
                            Produk
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 ml-1 transform transition-transform duration-300 group-hover:rotate-180"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                            <span
                                class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-green-500 transition-all duration-300 group-hover:w-4/5"></span>
                        </button>

                        <!-- Mega Menu -->
                        <div
                            class="absolute left-0 mt-2 bg-white/95 backdrop-blur-md rounded-xl shadow-xl py-6 px-8 grid grid-cols-3 gap-8 invisible opacity-0 translate-y-4 group-hover:visible group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 z-50 border border-gray-100 min-w-[768px] max-w-max">
                            <!-- Smartphone -->
                            <div class="transition-all duration-300 hover:bg-gray-50/70 p-4 rounded-lg"
                                data-aos="zoom-in" data-aos-delay="300">
                                <h4 class="text-blue-600 font-semibold mb-3 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                    </svg>
                                    Smartphone
                                </h4>
                                <ul class="space-y-2">
                                    <li><a href="{{ route('produk.search', ['query' => 'iphone', 'kategori' => 'smartphone|second']) }}#produk"
                                            class="text-gray-600 hover:text-blue-600 transition-all hover:translate-x-1 inline-block">iPhone</a>
                                    </li>
                                    <li><a href="{{ route('produk.search', ['query' => 'samsung', 'kategori' => 'smartphone|second']) }}#produk"
                                            class="text-gray-600 hover:text-blue-600 transition-all hover:translate-x-1 inline-block">Samsung</a>
                                    </li>
                                    <li><a href="{{ route('produk.search', ['query' => 'Xiaomi', 'kategori' => 'smartphone|second']) }}#produk"
                                            class="text-gray-600 hover:text-blue-600 transition-all hover:translate-x-1 inline-block">Xiaomi</a>
                                    </li>
                                    <li><a href="{{ route('produk.search', ['query' => 'OPPO', 'kategori' => 'smartphone|second']) }}#produk"
                                            class="text-gray-600 hover:text-blue-600 transition-all hover:translate-x-1 inline-block">OPPO</a>
                                    </li>
                                    <li><a href="{{ route('produk.search', ['query' => 'Vivo', 'kategori' => 'smartphone|second']) }}#produk"
                                            class="text-gray-600 hover:text-blue-600 transition-all hover:translate-x-1 inline-block">Vivo</a>
                                    </li>
                                </ul>



                                </ul>
                                <a href="#produk"
                                    class="mt-4 inline-block text-sm text-blue-600 hover:text-green-500 hover:underline transition-all group">
                                    Lihat Semua
                                    <span
                                        class="inline-block transition-transform duration-300 group-hover:translate-x-1">→</span>
                                </a>

                            </div>

                            <!-- tablet -->
                            <div class="transition-all duration-300 hover:bg-gray-50/70 p-4 rounded-lg"
                                data-aos="zoom-in" data-aos-delay="300">
                                <h4 class="text-blue-600 font-semibold mb-3 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    Tablet
                                </h4>
                                <ul class="space-y-2">
                                    <li><a href="{{ route('produk.search', ['query' => 'ipad', 'kategori' => 'tablet']) }}#produk"
                                            class="text-gray-600 hover:text-blue-600 transition-all hover:translate-x-1 inline-block">iPad</a>
                                    </li>
                                    <li><a href="{{ route('produk.search', ['query' => 'samsung galaxy tab', 'kategori' => 'tablet']) }}#produk"
                                            class="text-gray-600 hover:text-blue-600 transition-all hover:translate-x-1 inline-block">Samsung
                                            Galaxy Tab</a></li>
                                    <li><a href="{{ route('produk.search', ['query' => 'xiaomi pad', 'kategori' => 'tablet']) }}#produk"
                                            class="text-gray-600 hover:text-blue-600 transition-all hover:translate-x-1 inline-block">Xiaomi
                                            Pad</a></li>
                                    <li><a href="{{ route('produk.search', ['query' => 'lenovo tab', 'kategori' => 'tablet']) }}#produk"
                                            class="text-gray-600 hover:text-blue-600 transition-all hover:translate-x-1 inline-block">Lenovo
                                            Tab</a></li>
                                    <li><a href="{{ route('produk.search', ['query' => 'huawei matepad', 'kategori' => 'tablet']) }}#produk"
                                            class="text-gray-600 hover:text-blue-600 transition-all hover:translate-x-1 inline-block">Huawei
                                            MatePad</a></li>
                                </ul>

                                <a href="#produk"
                                    class="mt-4 inline-block text-sm text-blue-600 hover:text-green-500 hover:underline transition-all group">
                                    Lihat Semua
                                    <span
                                        class="inline-block transition-transform duration-300 group-hover:translate-x-1">→</span>
                                </a>
                            </div>

                            <!-- Aksesoris -->
                            <div class="transition-all duration-300 hover:bg-gray-50/70 p-4 rounded-lg"
                                data-aos="zoom-in" data-aos-delay="300">
                                <h4 class="text-blue-600 font-semibold mb-3 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Aksesoris
                                </h4>
                                <ul class="space-y-2">
                                    <li><a href="{{ route('produk.search', ['kategori' => 'aksesoris', 'query' => 'headphone']) }}#produk"
                                            class="text-gray-600 hover:text-blue-600 transition-all hover:translate-x-1 inline-block">Headphone</a>
                                    </li>
                                    <li><a href="{{ route('produk.search', ['kategori' => 'aksesoris', 'query' => 'casing hp']) }}#produk"
                                            class="text-gray-600 hover:text-blue-600 transition-all hover:translate-x-1 inline-block">Casing
                                            HP</a></li>
                                    <li><a href="{{ route('produk.search', ['kategori' => 'aksesoris', 'query' => 'charger']) }}#produk"
                                            class="text-gray-600 hover:text-blue-600 transition-all hover:translate-x-1 inline-block">Charger</a>
                                    </li>
                                    <li><a href="{{ route('produk.search', ['kategori' => 'aksesoris', 'query' => 'power bank']) }}#produk"
                                            class="text-gray-600 hover:text-blue-600 transition-all hover:translate-x-1 inline-block">Power
                                            Bank</a></li>
                                    <li><a href="{{ route('produk.search', ['kategori' => 'aksesoris', 'query' => 'screen protector']) }}#produk"
                                            class="text-gray-600 hover:text-blue-600 transition-all hover:translate-x-1 inline-block">Screen
                                            Protector</a></li>
                                </ul>
                                <a href="#produk"
                                    class="mt-4 inline-block text-sm text-blue-600 hover:text-green-500 hover:underline transition-all group">
                                    Lihat Semua
                                    <span
                                        class="inline-block transition-transform duration-300 group-hover:translate-x-1">→</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <a href="#kategori"
                        class="px-4 py-2 text-gray-700 hover:text-blue-600 font-medium transition-all relative group rounded-md hover:bg-gray-50/80">
                        Kategori
                        <span
                            class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-green-500 transition-all duration-300 group-hover:w-4/5"></span>
                    </a>

                    <a href="#carousel"
                        class="px-4 py-2 text-gray-700 hover:text-blue-600 font-medium transition-all relative group rounded-md hover:bg-gray-50/80">
                        Promo
                        <span
                            class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-green-500 transition-all duration-300 group-hover:w-4/5"></span>
                    </a>

                    <a href="#tentang"
                        class="px-4 py-2 text-gray-700 hover:text-blue-600 font-medium transition-all relative group rounded-md hover:bg-gray-50/80">
                        Tentang
                        <span
                            class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-green-500 transition-all duration-300 group-hover:w-4/5"></span>
                    </a>

                    <a href="#kontak"
                        class="px-4 py-2 text-gray-700 hover:text-blue-600 font-medium transition-all relative group rounded-md hover:bg-gray-50/80">
                        Kontak
                        <span
                            class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-blue-600 to-green-500 transition-all duration-300 group-hover:w-4/5"></span>
                    </a>
                </div>

                <!-- Right side icons -->
                <div class="flex items-center space-x-4">
                    <!-- Search -->
                    <div class="hidden md:block left-1 relative group">
                        <form action="{{ route('produk.search') }}#produk" method="GET">
                            <input type="text" name="query" placeholder="Cari produk..."
                                class="pl-10 pr-4 py-2 rounded-full border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent w-64 transition-all bg-gray-50/70 group-hover:bg-white">
                            <button type="submit"
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 group-hover:text-blue-500 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
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
                                    <div
                                        class="w-full h-full rounded-full bg-white flex items-center justify-center text-blue-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                <span class="hidden md:inline text-gray-700 font-medium">{{ Auth::user()->name }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 text-gray-500 hidden md:inline transition-transform duration-300 group-hover:rotate-180"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div
                                class="absolute right-0 mt-2 w-56 bg-white/95 backdrop-blur-md rounded-xl shadow-lg py-2 z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0 border border-gray-100">
                                <div class="px-4 py-2 border-b border-gray-100">
                                    <p class="text-sm text-gray-500">Selamat datang,</p>
                                    <p class="font-medium text-gray-800 truncate">{{ Auth::user()->name }}</p>
                                </div>

                                <a href="{{ route('user.favorit') }}"
                                    class="flex items-center px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-all rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                    Favorit
                                </a>

                                @if(auth()->user()->role === 'admin' || auth()->user()->role === 'superadmin')
                                <a href="{{ route('admin.produk.index') }}"
                                    class="flex items-center px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Admin Panel
                                </a>
                                @endif
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="flex items-center w-full text-left px-4 py-2.5 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-all">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                        </svg>
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                        @else
                        <div class="flex items-center space-x-2">
                            <a href="{{ route('login') }}"
                                class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 transition-all hover:scale-105">Login</a>
                            <a href="{{ route('register') }}"
                                class="px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-700 hover:to-blue-600 rounded-full shadow-sm hover:shadow transition-all hover:scale-105">Daftar</a>
                        </div>
                        @endif

                        <a href="{{ route('user.katalog-produk') }}" target="_blank" class="relative hover:scale-105 transition-transform">
                            <div class="w-9 h-9 rounded-full bg-gradient-to-r from-blue-500 to-green-400 p-0.5">
                                <div
                                    class="w-full h-full rounded-full bg-white flex items-center justify-center text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                            </div>
                            <span
                                class="absolute -top-1 -right-1 bg-gradient-to-r from-green-500 to-green-400 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center shadow-sm">3</span>
                        </a>


                        <!-- Mobile menu button -->
                        <button class="lg:hidden focus:outline-none hover:scale-105 transition-transform">
                            <div class="w-9 h-9 rounded-full bg-gradient-to-r from-blue-500 to-green-400 p-0.5">
                                <div
                                    class="w-full h-full rounded-full bg-white flex items-center justify-center text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 12h16m-7 6h7" />
                                    </svg>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
    </nav>

    <!-- Mobile Navigation Menu (Hidden by default) -->
    <div class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden" id="mobileMenu">
        <div class="bg-white h-full w-4/5 max-w-sm p-5 transform transition-transform duration-300 translate-x-0">
            <div class="flex justify-between items-center mb-6">
                <span
                    class="whitespace-nowrap text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-green-500">
                    Berkah Gadget
                </span>
                <button id="closeMobileMenu" class="p-2 rounded-full hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <nav class="space-y-1">
                <a href="#"
                    class="block px-4 py-3 rounded-lg hover:bg-blue-50 text-gray-700 hover:text-blue-600 font-medium transition-all">Beranda</a>

                <!-- Mobile Accordion Menu -->
                <div class="border-b border-gray-100">
                    <button
                        class="flex justify-between items-center w-full px-4 py-3 rounded-lg hover:bg-blue-50 text-gray-700 hover:text-blue-600 font-medium transition-all"
                        onclick="toggleMobileSubmenu('produkSubmenu')">
                        <span>Produk</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-transform" id="produkChevron"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="hidden pl-4 pb-3 space-y-2" id="produkSubmenu">
                        <a href="#"
                            class="block px-4 py-2 rounded-lg hover:bg-blue-50 text-gray-600 hover:text-blue-600 transition-all">Smartphone</a>
                        <a href="#"
                            class="block px-4 py-2 rounded-lg hover:bg-blue-50 text-gray-600 hover:text-blue-600 transition-all">Laptop</a>
                        <a href="#"
                            class="block px-4 py-2 rounded-lg hover:bg-blue-50 text-gray-600 hover:text-blue-600 transition-all">Aksesoris</a>
                    </div>
                </div>

                <a href="#kategori"
                    class="block px-4 py-3 rounded-lg hover:bg-blue-50 text-gray-700 hover:text-blue-600 font-medium transition-all">Kategori</a>
                <a href="#promo"
                    class="block px-4 py-3 rounded-lg hover:bg-blue-50 text-gray-700 hover:text-blue-600 font-medium transition-all">Promo</a>
                <a href=" #tentang"
                    class="block px-4 py-3 rounded-lg hover:bg-blue-50 text-gray-700 hover:text-blue-600 font-medium transition-all">Tentang</a>
                <a href="#kontak"
                    class="block px-4 py-3 rounded-lg hover:bg-blue-50 text-gray-700 hover:text-blue-600 font-medium transition-all">Kontak</a>
            </nav>

            <!-- Mobile user options -->
            <div class="mt-6 pt-6 border-t border-gray-100">
                @if(Auth::check())
                <div class="px-4 py-2">
                    <p class="text-sm text-gray-500">Selamat datang,</p>
                    <p class="font-medium text-gray-800">{{ Auth::user()->name }}</p>
                </div>
                <div class="mt-3 space-y-1">
                    <a href="#"
                        class="flex items-center px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-all rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Profil Saya
                    </a>
                    <a href="#"
                        class="flex items-center px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-all rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                        Pesanan
                    </a>
                    <a href="#"
                        class="flex items-center px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-all rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        Keranjang Saya
                    </a>
                    @if(auth()->user()->role === 'admin' || auth()->user()->role === 'superadmin')
                    <a href="{{ route('admin.produk.index') }}"
                        class="flex items-center px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-all rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        Admin Panel
                    </a>
                    @endif
                    <form action="{{ route('logout') }}" method="POST" class="w-full">
                        @csrf
                        <button type="submit"
                            class="flex items-center w-full text-left px-4 py-2.5 text-sm text-gray-700 hover:bg-red-50 hover:text-red-600 transition-all rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            Logout
                        </button>
                    </form>
                </div>
                @else
                <div class="px-4 py-3 space-y-3">
                    <a href="{{ route('login') }}"
                        class="block w-full py-2.5 text-center text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-50 transition-all font-medium">Login</a>
                    <a href="{{ route('register') }}"
                        class="block w-full py-2.5 text-center text-white bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-700 hover:to-blue-600 rounded-lg shadow-sm transition-all font-medium">Daftar</a>
                </div>
                @endif
            </div>
        </div>
    </div>

    <!-- JavaScript for mobile menu -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu toggle
            const mobileMenu = document.getElementById('mobileMenu');
            const mobileMenuButton = document.querySelector('.lg\\:hidden button');
            const closeMobileMenu = document.getElementById('closeMobileMenu');

            if (mobileMenuButton && mobileMenu && closeMobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.remove('hidden');
                    document.body.style.overflow = 'hidden';
                });

                closeMobileMenu.addEventListener('click', function() {
                    mobileMenu.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                });
            }

            // For clicking outside to close
            mobileMenu.addEventListener('click', function(e) {
                if (e.target === mobileMenu) {
                    mobileMenu.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                }
            });
        });

        // Function to toggle mobile submenu
        function toggleMobileSubmenu(id) {
            const submenu = document.getElementById(id);
            const chevron = document.getElementById(id.replace('Submenu', 'Chevron'));

            if (submenu.classList.contains('hidden')) {
                submenu.classList.remove('hidden');
                chevron.classList.add('rotate-180');
            } else {
                submenu.classList.add('hidden');
                chevron.classList.remove('rotate-180');
            }
        }
        let lastScroll = 0;
        const navbar = document.getElementById('mainNav');

        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;

            if (currentScroll <= 0) {
                navbar.classList.remove('nav-scroll-up');
                return;
            }

            if (currentScroll > lastScroll && !navbar.classList.contains('nav-scroll-up')) {
                // Scroll ke bawah
                navbar.classList.add('nav-scroll-up');
            } else if (currentScroll < lastScroll && navbar.classList.contains('nav-scroll-up')) {
                // Scroll ke atas
                navbar.classList.remove('nav-scroll-up');
            }

            lastScroll = currentScroll;
        });
    </script>



    <!-- Hero Section -->
    <section class="relative flex items-center pt-16 pb-20 md:pt-24 md:pb-20 overflow-hidden">
        <!-- Dynamic Background with Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-primary-900/90 via-primary-800/85 to-secondary-900/80 z-0"
            style="height: -600px;"></div>

        <!-- Animated Particles Background -->
        <div class="absolute inset-0 z-0 opacity-90" id="particles-js"></div>

        <!-- Custom Shape Divider Bottom -->
        <div class="custom-shape-divider-bottom-1591961042">
            <svg data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 140"
                preserveAspectRatio="none" width="2400" height="280">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="shape-fill"></path>
            </svg>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-8">
                <!-- Left Content -->
                <div class="lg:w-1/2 mb-10 lg:mb-0 text-center lg:text-left">
                    <!-- Animated Badge -->
                    <div class="inline-block mb-4">
                        <span
                            class="bg-accent-500 text-white text-sm font-medium px-4 py-1 rounded-full animate-pulse-slow">
                            Promo Minggu Ini! Diskon hingga 30%
                        </span>
                    </div>

                    <!-- Main Heading with Gradient Effect -->
                    <h1
                        class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 leading-tight animate-fade-in">
                        Temukan Gadget Terbaik Untuk Gaya Hidup Digital
                    </h1>

                    <p class="text-lg md:text-xl text-gray-100 mb-6 max-w-lg animate-slide-up opacity-0"
                        style="animation-delay: 0.3s">
                        Koleksi terlengkap smartphone, laptop, dan aksesoris dengan harga terbaik dan garansi resmi
                        untuk menemani produktivitas Anda.
                    </p>

                    <!-- Search Bar -->
                    <div class="relative mb-8 max-w-lg mx-auto lg:mx-0 animate-slide-up opacity-0"
                        style="animation-delay: 0.5s">
                        <form action="{{ route('produk.search') }}#produk" method="GET">
                            <input type="text" name="query" placeholder="Cari produk atau brand favorit Anda..."
                                class="w-full px-5 py-4 pr-12 rounded-full bg-white/90 backdrop-blur-sm border-0 focus:ring-2 focus:ring-primary-400 shadow-lg text-gray-700 placeholder-gray-400">
                            <button type="submit"
                                class="absolute right-3 top-1/2 transform -translate-y-1/2 text-primary-500 hover:text-primary-700 transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>
                        </form>
                    </div>


                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4 justify-center lg:justify-start animate-slide-up opacity-0"
                        style="animation-delay: 0.7s">
                        <a href="#produk"
                            class="btn-loading group px-8 py-4 bg-gradient-to-r from-primary-500 to-primary-600 text-white font-medium rounded-full shadow-lg hover:shadow-primary-500/50 transition-all transform hover:-translate-y-1 duration-300 flex items-center justify-center">
                            <span>Belanja Sekarang</span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 ml-2 transform group-hover:translate-x-1 transition-transform"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                        <a href="#carousel"
                            class="px-8 py-4 border-2 border-white/80 backdrop-blur-sm bg-white/10 text-white font-medium rounded-full hover:bg-white hover:text-primary-600 transition-all transform hover:-translate-y-1 duration-300">
                            Lihat Promo
                        </a>
                    </div>

                    <!-- Trust Badges -->
                    <div class="mt-8 flex flex-wrap justify-center lg:justify-start gap-6 animate-slide-up opacity-0"
                        style="animation-delay: 0.9s">
                        <div class="flex items-center text-white/90">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="text-sm">Garansi Resmi</span>
                        </div>
                        <div class="flex items-center text-white/90">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-sm">24 Jam Support</span>
                        </div>
                        <div class="flex items-center text-white/90">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                            </svg>
                            <span class="text-sm">Pembayaran Aman</span>
                        </div>
                    </div>
                </div>

                <!-- Right Content - Enhanced Dynamic Product Showcase -->
                <div class="lg:w-1/3 w-full px-12 sm:px-3 relative z-10 transform lg:translate-x-16">
                    <!-- Decorative Background Elements animasi -->
                    <div
                        class="absolute -z-10 top-0 right-0 w-64 h-64 bg-gradient-to-br from-accent-400/30 to-primary-500/20 rounded-full filter blur-3xl animate-pulse-slow">
                    </div>
                    <div class="absolute -z-10 bottom-20 left-10 w-40 h-40 bg-gradient-to-tr from-secondary-500/30 to-primary-400/20 rounded-full filter blur-3xl animate-pulse-slow"
                        style="animation-delay: 1.5s"></div>

                    <!-- 3D Perspective Container dengan efek lebih halus -->
                    <div class="relative lg:perspective-1000 transform-gpu">
                        <!-- Floating Card dengan Glass Effect yang ditingkatkan -->
                        <div
                            class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-3xl p-2 sm:p-4 shadow-2xl hover:shadow-primary-500/30 transition-all duration-700 ease-in-out transform hover:-rotate-2 hover:scale-105 hover:translate-y-[-10px]">
                            <!-- Carousel Container dengan Styling yang Ditingkatkan -->
                            <div class="carousel-container overflow-hidden relative rounded-2xl">
                                <!-- Progress Bar -->
                                <div class="absolute top-0 left-0 right-0 z-30 h-1 bg-white/20">
                                    <div
                                        class="carousel-progress h-full bg-gradient-to-r from-primary-400 to-accent-500 w-1/3 transition-all duration-1000 ease-in-out">
                                    </div>
                                </div>

                                <!-- Slides Container dengan Transisi yang Lebih Halus -->
                                <div id="carousel"
                                    class="slides-container flex transition-all duration-1000 ease-[cubic-bezier(0.45,0.05,0.55,0.95)]">
                                    @foreach($carousels as $key => $carousel)
                                    <div
                                        class="slide min-w-full p-4 sm:p-8 h-[400px] sm:h-[550px] flex items-center justify-center transition-opacity duration-500">
                                        <div
                                            class="relative z-10 transform-gpu max-w-xs w-full transition-all duration-500 ease-out">
                                            <!-- Product Image dengan Tag New dan Promo -->
                                            <div
                                                class="relative group h-56 sm:h-72 flex items-center justify-center overflow-hidden">
                                                <!-- Tag New -->
                                                <div class="absolute top-0 left-0 z-20">
                                                    <div
                                                        class="bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-br-lg rounded-tl-lg shadow-lg animate-pulse">
                                                        New!
                                                    </div>
                                                </div>
                                                <!-- Poduct Image dengan Enhanced Effects -->
                                                <img src="{{ asset('storage/' . $carousel->gambar) }}"
                                                    alt="{{ $carousel->judul }}"
                                                    class="max-h-48 sm:max-h-64 max-w-xs mx-auto drop-shadow-2xl transition-all duration-700 ease-out transform group-hover:scale-110 group-hover:rotate-1 object-contain">
                                            </div>

                                            <!-- Product Info dengan Animasi yang Lebih Halus -->
                                            <div
                                                class="mt-4 text-center transform transition-all duration-500 ease-out">
                                                <h3
                                                    class="text-white font-bold text-lg sm:text-xl hover:text-primary-300 transition-colors duration-300">
                                                    {{ $carousel->judul }}
                                                </h3>

                                                <!-- Rating Stars dengan Efek Hover -->
                                                <div class="flex items-center justify-center mt-2">
                                                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400"
                                                        fill="currentColor" viewBox="0 0 20 20">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                    </svg>
                                                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400"
                                                        fill="currentColor" viewBox="0 0 20 20">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                    </svg>
                                                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400"
                                                        fill="currentColor" viewBox="0 0 20 20">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                    </svg>
                                                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400"
                                                        fill="currentColor" viewBox="0 0 20 20">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                    </svg>
                                                    <span class="ml-2 text-white text-xs sm:text-sm">(400
                                                        reviews)</span>
                                                </div>

                                                <!-- Price dengan Animasi dan Tag Diskon -->
                                                <div class="mt-3 mb-4 relative">
                                                    <!-- Diskon Tag -->
                                                    <div
                                                        class="absolute -top-3 -right-2 bg-gradient-to-r from-pink-500 to-red-500 text-white text-xs font-bold px-2 py-1 rounded-full transform rotate-12 shadow-lg">
                                                        -{{ round((($carousel->harga_normal - $carousel->harga_diskon) / $carousel->harga_normal) * 100) }}%
                                                    </div>
                                                    <span
                                                        class="text-gray-300 line-through text-xs sm:text-sm">Rp{{ number_format($carousel->harga_normal, 0, ',', '.') }}</span>
                                                    <span
                                                        class="text-white font-bold text-lg sm:text-xl ml-2 bg-gradient-to-r from-primary-400 to-accent-400 bg-clip-text text-transparent">Rp{{ number_format($carousel->harga_diskon, 0, ',', '.') }}</span>
                                                </div>

                                                <!-- Action Buttons for each slide -->
                                                <div
                                                    class="flex items-center justify-center space-x-2 sm:space-x-3 mt-4">
                                                    <!-- Wishlist Button -->
                                                    <button
                                                        class="min-w-[80px] sm:min-w-[100px] px-3 py-1 sm:px-4 sm:py-2 bg-primary-500 hover:bg-primary-600 rounded-full text-white text-xs sm:text-sm flex items-center justify-center space-x-1 transition-all duration-300 shadow-lg hover:shadow-primary-500/50">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="h-3 w-3 sm:h-4 sm:w-4" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                        </svg>
                                                        <span>Wishlist</span>
                                                    </button>

                                                    <!-- Tombol Share dengan fungsi modal -->
                                                    <button
                                                        onclick="openShareModal('{{ $carousel->judul }}', '{{ url()->current() }}')"
                                                        class="min-w-[80px] sm:min-w-[100px] px-3 py-1 sm:px-4 sm:py-2 bg-white/10 hover:bg-white/20 rounded-full text-white text-xs sm:text-sm flex items-center justify-center space-x-1 backdrop-blur-sm transition-all duration-300 border border-white/10 hover:border-white/30 shadow-lg">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="h-3 w-3 sm:h-4 sm:w-4" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                                                        </svg>
                                                        <span>Share</span>
                                                    </button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                                <!-- Enhanced Navigation Arrows -->
                                <button
                                    class="carousel-arrow prev absolute top-1/2 left-1 sm:left-2 transform -translate-y-1/2 bg-white/10 hover:bg-white/90 text-primary-600 rounded-full p-2 sm:p-3 shadow-lg z-20 transition-all duration-300 backdrop-blur-sm hover:scale-110 border border-white/30">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 19l-7-7 7-7" />
                                    </svg>
                                </button>
                                <button
                                    class="carousel-arrow next absolute top-1/2 right-1 sm:right-2 transform -translate-y-1/2 bg-white/10 hover:bg-white/90 text-primary-600 rounded-full p-2 sm:p-3 shadow-lg z-20 transition-all duration-300 backdrop-blur-sm hover:scale-110 border border-white/30">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        let currentSlide = 0;
                        const slides = document.querySelectorAll('.slide');
                        const totalSlides = slides.length;
                        const slidesContainer = document.querySelector('.slides-container');
                        const progressBar = document.querySelector('.carousel-progress');
                        const prevButton = document.querySelector('.carousel-arrow.prev');
                        const nextButton = document.querySelector('.carousel-arrow.next');
                        let slidingDirection = 1; // 1 for forward, -1 for backward
                        let autoSlideInterval;
                        let touchStartX = 0;
                        let touchEndX = 0;

                        function updateSlidePosition() {
                            slidesContainer.style.transform = `translateX(-${currentSlide * 100}%)`;
                            progressBar.style.width = `${((currentSlide + 1) / totalSlides) * 100}%`;
                        }

                        function moveSlide(direction) {
                            // Store the current direction
                            slidingDirection = direction;

                            // Update current slide with direction
                            currentSlide = (currentSlide + direction + totalSlides) % totalSlides;

                            // Update UI
                            updateSlidePosition();
                        }

                        function startAutoSlide() {
                            // Clear any existing interval
                            clearInterval(autoSlideInterval);

                            // Set new interval - goes through all slides from start to end, then back to start
                            autoSlideInterval = setInterval(() => {
                                // If we're at the last slide and going forward, change direction
                                if (currentSlide === totalSlides - 1 && slidingDirection === 1) {
                                    slidingDirection = -1;
                                }
                                // If we're at the first slide and going backward, change direction
                                else if (currentSlide === 0 && slidingDirection === -1) {
                                    slidingDirection = 1;
                                }

                                // Move in the current direction
                                moveSlide(slidingDirection);
                            }, 7000); // Longer interval (7 seconds) for better viewing experience
                        }

                        // Add event listeners to arrows
                        prevButton.addEventListener('click', function() {
                            moveSlide(-1);
                            slidingDirection = -1; // Update direction when manually clicked
                        });

                        nextButton.addEventListener('click', function() {
                            moveSlide(1);
                            slidingDirection = 1; // Update direction when manually clicked
                        });

                        // Start the auto-slide
                        startAutoSlide();

                        // Pause auto-slide when interacting with arrows
                        prevButton.addEventListener('mouseenter', () => clearInterval(autoSlideInterval));
                        nextButton.addEventListener('mouseenter', () => clearInterval(autoSlideInterval));

                        // Resume auto-slide when mouse leaves
                        prevButton.addEventListener('mouseleave', startAutoSlide);
                        nextButton.addEventListener('mouseleave', startAutoSlide);

                        // Touch events for mobile
                        slidesContainer.addEventListener('touchstart', e => {
                            touchStartX = e.changedTouches[0].screenX;
                            // Pause auto-slide on touch
                            clearInterval(autoSlideInterval);
                        }, {
                            passive: true
                        });

                        slidesContainer.addEventListener('touchmove', e => {
                            // Prevent scrolling while swiping
                            if (Math.abs(e.changedTouches[0].screenX - touchStartX) > 10) {
                                e.preventDefault();
                            }
                        }, {
                            passive: false
                        });

                        slidesContainer.addEventListener('touchend', e => {
                            touchEndX = e.changedTouches[0].screenX;
                            if (touchStartX - touchEndX > 50) {
                                moveSlide(1); // Slide right
                                slidingDirection = 1; // Update direction
                            } else if (touchEndX - touchStartX > 50) {
                                moveSlide(-1); // Slide left
                                slidingDirection = -1; // Update direction
                            }
                            // Resume auto-slide after touch
                            startAutoSlide();
                        }, {
                            passive: true
                        });
                    });
                </script>
    </section>

    <!-- Add Particles.js script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Load particles.js script if it doesn't exist
            if (typeof particlesJS === 'undefined') {
                const script = document.createElement('script');
                script.src = 'https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js';
                script.onload = initParticles;
                document.head.appendChild(script);
            } else {
                initParticles();
            }

            function initParticles() {
                particlesJS('particles-js', {
                    particles: {
                        number: {
                            value: 80,
                            density: {
                                enable: true,
                                value_area: 800
                            }
                        },
                        color: {
                            value: "#ffffff"
                        },
                        shape: {
                            type: "circle"
                        },
                        opacity: {
                            value: 0.5,
                            random: true
                        },
                        size: {
                            value: 3,
                            random: true
                        },
                        line_linked: {
                            enable: true,
                            distance: 150,
                            color: "#ffffff",
                            opacity: 0.4,
                            width: 1
                        },
                        move: {
                            enable: true,
                            speed: 2,
                            direction: "none",
                            random: true,
                            straight: false,
                            out_mode: "out",
                            bounce: false
                        }
                    },
                    interactivity: {
                        detect_on: "canvas",
                        events: {
                            onhover: {
                                enable: true,
                                mode: "grab"
                            },
                            onclick: {
                                enable: true,
                                mode: "push"
                            }
                        },
                        modes: {
                            grab: {
                                distance: 140,
                                line_linked: {
                                    opacity: 1
                                }
                            },
                            push: {
                                particles_nb: 4
                            }
                        }
                    },
                    retina_detect: true
                });
            }
        });
    </script>

    <!-- Carousel Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slidesContainer = document.querySelector('.slides-container');
            const slides = document.querySelectorAll('.slide');
            const prevButton = document.querySelector('.carousel-arrow.prev');
            const nextButton = document.querySelector('.carousel-arrow.next');
            const indicators = document.querySelectorAll('.indicator');

            let currentSlide = 0;
            const slideCount = slides.length;

            // Tambahkan class untuk indikator aktif
            function updateIndicators() {
                indicators.forEach((indicator, index) => {
                    if (index === currentSlide) {
                        indicator.classList.add('bg-primary-500');
                        indicator.classList.add('indicator-active');
                    } else {
                        indicator.classList.remove('bg-primary-500');
                        indicator.classList.remove('indicator-active');
                    }
                });
            }

            // Fungsi untuk menggeser slide
            function goToSlide(slideIndex) {
                if (slideIndex < 0) {
                    slideIndex = slideCount - 1;
                } else if (slideIndex >= slideCount) {
                    slideIndex = 0;
                }

                currentSlide = slideIndex;
                const translateValue = -currentSlide * 100 + '%';
                slidesContainer.style.transform = `translateX(${translateValue})`;
                updateIndicators();
            }

            // Event listener untuk tombol navigasi
            prevButton.addEventListener('click', () => {
                goToSlide(currentSlide - 1);
            });

            nextButton.addEventListener('click', () => {
                goToSlide(currentSlide + 1);
            });

            // Event listener untuk indikator
            indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', () => {
                    goToSlide(index);
                });
            });

            // Auto slide setiap 5 detik
            let autoSlideInterval = setInterval(() => {
                goToSlide(currentSlide + 1);
            }, 5000);

            // Hentikan auto slide saat user berinteraksi dengan carousel
            const carouselContainer = document.querySelector('.carousel-container');
            carouselContainer.addEventListener('mouseenter', () => {
                clearInterval(autoSlideInterval);
            });

            carouselContainer.addEventListener('mouseleave', () => {
                autoSlideInterval = setInterval(() => {
                    goToSlide(currentSlide + 1);
                }, 5000);
            });

            // Tambahkan dukungan untuk swipe pada perangkat mobile
            let touchStartX = 0;
            let touchEndX = 0;

            carouselContainer.addEventListener('touchstart', (e) => {
                touchStartX = e.changedTouches[0].screenX;
            });

            carouselContainer.addEventListener('touchend', (e) => {
                touchEndX = e.changedTouches[0].screenX;
                handleSwipe();
            });

            function handleSwipe() {
                const swipeThreshold = 50;
                if (touchEndX < touchStartX - swipeThreshold) {
                    // Swipe kiri
                    goToSlide(currentSlide + 1);
                } else if (touchEndX > touchStartX + swipeThreshold) {
                    // Swipe kanan
                    goToSlide(currentSlide - 1);
                }
            }

            // Inisialisasi carousel
            updateIndicators();
        });
    </script>


    <!-- Categories Section -->
    <section id="kategori" class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 animate-fade-in">
                <h2 class="text-3xl font-bold mb-4">Kategori Produk</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Temukan produk terbaik dalam berbagai kategori pilihan kami
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Category 1 -->
                <a href="#"
                    class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300 card-hover animate-slide-up">
                    <div class="relative h-40 overflow-hidden">
                        <img src="{{ asset('storage/images/slide3.jpg') }}" alt="Smartphone"
                            class="w-full h-full object-cover transition-all duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-4">
                            <h3 class="text-white font-semibold text-lg">Smartphone</h3>
                        </div>
                    </div>
                </a>

                <!-- Category 2 -->
                <a href="#"
                    class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300 card-hover animate-slide-up animation-delay-100">
                    <div class="relative h-40 overflow-hidden">
                        <img src="https://down-id.img.susercontent.com/file/26d6180af810d175d9bd56bf0ccb22a6"
                            alt="Laptop" class="w-full h-full object-cover transition-all duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-4">
                            <h3 class="text-white font-semibold text-lg">Smartwatch</h3>
                        </div>
                    </div>
                </a>

                <!-- Category 3 -->
                <a href="#"
                    class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300 card-hover animate-slide-up animation-delay-200">
                    <div class="relative h-40 overflow-hidden">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXJLT8ZoJKE_vDN0SUlqV34jIsJQmQHBK6Kw&s"
                            alt="Tablet" class="w-full h-full object-cover transition-all duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-4">
                            <h3 class="text-white font-semibold text-lg">Tablet</h3>
                        </div>
                    </div>
                </a>

                <!-- Category 4 -->
                <a href="#"
                    class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300 card-hover animate-slide-up animation-delay-300">
                    <div class="relative h-40 overflow-hidden">
                        <img src="https://mirage-online.com/wp-content/uploads/2023/04/Spare-Part-Aksesoris-HP-Lengkap.jpg"
                            alt="Aksesoris"
                            class="w-full h-full object-cover transition-all duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-4">
                            <h3 class="text-white font-semibold text-lg">Aksesoris</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="produk" class="py-16 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-50 via-white to-primary-50 opacity-80 z-0"></div>
        <div class="absolute top-0 left-0 w-full h-64 bg-pattern-dots opacity-5 z-0"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-blob opacity-10 z-0"></div>
        <div class="absolute -left-12 top-1/3 w-48 h-48 rounded-full bg-accent-100 opacity-20 blur-2xl z-0"></div>
        <div class="absolute -right-16 bottom-1/4 w-64 h-64 rounded-full bg-primary-100 opacity-20 blur-3xl z-0"></div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Header Section with Enhanced Animation -->
            <div class="flex flex-col md:flex-row justify-between items-center mb-16 opacity-0 animate-fade-in">
                <div class="relative">
                    <span
                        class="absolute -left-3 -top-3 w-12 h-12 rounded-lg bg-primary-100 opacity-50 transform rotate-12"></span>
                    <span class="absolute -right-2 bottom-0 w-8 h-8 rounded-full bg-accent-100 opacity-70"></span>

                    <h3 class="text-3xl font-bold mb-3 relative z-10">
                        Katalog Produk
                    </h3>
                </div>

                <!-- View Button -->
                <a href="{{ route('user.dashboard') }}#produk"
                    class="group flex items-center justify-center h-12 px-8 py-3 border-2 border-primary-600 text-primary-600 rounded-full hover:text-white transition-all duration-300 relative overflow-hidden font-medium shadow-sm hover:shadow-md">
                    <span
                        class="relative z-10 transition-transform duration-300 group-hover:transform flex items-center">
                        Lihat Semua Produk
                        <i
                            class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform duration-300"></i>
                    </span>
                    <div
                        class="absolute inset-0 rounded-full bg-primary-600 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300 ease-out">
                    </div>
                </a>
            </div>
            <!-- Pesan jika produk tidak ditemukan -->
            @if(request()->has('query') && $produk->isEmpty())
            <div class="text-center mt-16">
                <p class="text-red-600 text-2xl font-bold tracking-wide animate-pulse">❌ Produk yang Anda cari tidak ditemukan.</p>
            </div>
            @endif

            <!-- Hasil pencarian -->
            @if(!empty($query))
            <div class="text-center mt-10">
                <h3 class="text-gray-600 text-lg mb-1 tracking-wide">Hasil pencarian untuk:</h3>
                <p class="text-2xl font-extrabold text-blue-700 italic">"{{ $query }}"</p>
            </div>
            @endif

            <!-- Pesan jika produk tidak ditemukan -->
            @if(request()->has('query') && $produk->isEmpty())
            <div class="text-center mt-16">
                <p class="text-red-600 text-2xl font-bold tracking-wide animate-pulse">❌ Produk yang Anda cari tidak ditemukan.</p>
            </div>
            @endif

            <!-- Hasil pencarian -->
            @if(!empty($query))
            <div class="text-center mt-10">
                <h3 class="text-gray-600 text-lg mb-1 tracking-wide">Hasil pencarian untuk:</h3>
                <p class="text-2xl font-extrabold text-blue-700 italic">"{{ $query }}"</p>
            </div>
            @endif

            <!-- Products Grid with Enhanced Animations -->
            <div id="produk-container" class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 lg:gap-6">
                @foreach ($produk as $item)
                <div class="group bg-gradient-to-br from-white via-gray-50 to-gray-100 rounded-2xl overflow-hidden product-card produk-item relative opacity-0 animate-slide-up transform transition-transform duration-500 hover:-translate-y-2 hover:rotate-[0.5deg] hover:scale-[1.03] border-2 border-gray-200 hover:border-primary-500"
                    data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    @if($item->is_new)
                    <div class="absolute -right-8 top-4 z-20 w-28 transform rotate-45">
                        <div class="py-1 bg-accent-500 text-white text-xs font-bold text-center shadow-md">
                            Baru!
                        </div>
                    </div>
                    @endif

                    <div class="relative h-41 overflow-hidden bg-gradient-to-br from-gray-50 to-gray-100">
                        @if ($item->gambar)
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_produk }}"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        @else
                        <div
                            class="w-full h-full bg-gradient-to-br from-gray-50 to-gray-100 flex items-center justify-center">
                            <i class="fas fa-image text-4xl text-gray-300"></i>
                        </div>
                        @endif

                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/40 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex flex-col items-center justify-center gap-3">
                            <a href="{{ route('user.produk.detail', $item->id) }}"
                                class="px-4 py-2 bg-white/90 text-primary-600 rounded-full text-sm font-medium transform -translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 hover:bg-primary-600 hover:text-white border border-primary-100">
                                {{-- ✅ ubah shadow-lg jadi border --}}
                                <i class="fas fa-eye mr-2"></i>Detail
                            </a>

                            <div
                                class="flex gap-3 transform translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 delay-100">
                                <button type="button" data-url="{{ route('favorit.toggle', $item->id) }}"
                                    class="toggle-favorit w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-primary-50 transition-all duration-300 border border-gray-300">
                                    {{-- ✅ ubah shadow-md jadi border --}}
                                    @if(auth()->check() && auth()->user()->favorit->contains('id', $item->id))
                                    <i class="fas fa-heart text-red-500"></i>
                                    @else
                                    <i class="far fa-heart text-gray-700 hover:text-primary-600"></i>
                                    @endif
                                </button>

                                <button
                                    onclick="openShareModal('{{ $item->nama_produk }}', '{{ number_format($item->harga, 0, ',', '.') }}', '{{ route('user.produk.detail', $item->id) }}')"
                                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-primary-50 transition-all duration-300 border border-gray-300">
                                    {{-- ✅ ubah shadow-md jadi border --}}
                                    <i class="fas fa-share-alt text-gray-700 hover:text-primary-600"></i>
                                </button>
                            </div>
                        </div>
                        <div
                            class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-black/30 to-transparent pointer-events-none">
                        </div>
                    </div>

                    <div class="p-4 bg-white/90 backdrop-blur-sm border-t border-gray-100">
                        <div class="flex justify-between items-start mb-2">
                            <div>
                                <span
                                    class="inline-flex items-center text-[12px] text-primary-700 bg-gradient-to-r from-primary-50 to-primary-100 px-2 py-0.5 rounded-full font-medium hover:from-primary-100 hover:to-primary-200 transition-all duration-300 shadow-sm border border-primary-200/30">
                                    <i class="fas fa-tag mr-1 text-primary-500"></i>
                                    {{ $item->kategori }}
                                </span>
                                <h3
                                    class="font-semibold text-base mt-1.5 text-gray-800 group-hover:text-primary-600 transition-colors duration-300 line-clamp-2">
                                    {{ $item->nama_produk }}
                                </h3>

                                @if(!empty($item->warna))
                                <div class="flex items-center gap-1.5 mt-1.5">
                                    <span class="text-[14px] text-gray-500">Warna:</span>
                                    <div class="flex items-center gap-1">
                                        @foreach(explode(',', $item->warna) as $warna)
                                        <span class="w-3 h-3 rounded-full border border-gray-300"
                                            style="background-color: {{ trim(strtolower($warna)) }}"></span>
                                        @endforeach
                                    </div>
                                </div>
                                @else
                                <div class="flex items-center gap-1.5 mt-1.5">
                                    <span class="text-[14px] text-gray-500">Warna: -</span>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-0">
                            <div class="space-y-0.5">
                                <p class="text-base font-bold text-primary-600">
                                    Rp {{ number_format($item->harga, 0, ',', '.') }}
                                </p>
                                @if($item->harga_diskon)
                                <div class="flex items-center gap-1">
                                    <p class="text-[10px] text-gray-400 line-through">
                                        Rp {{ number_format($item->harga_diskon, 0, ',', '.') }}
                                    </p>
                                    <span
                                        class="text-[12px] font-bold bg-accent-500/10 text-accent-600 px-1.5 py-0.5 rounded">
                                        -{{ round((1 - $item->harga/$item->harga_diskon) * 100) }}%
                                    </span>
                                </div>
                                @endif
                            </div>

                            <button
                                class="flex items-center justify-center w-11 h-11 bg-primary-600 text-white rounded-full group/cart hover:bg-primary-700 transition-all duration-300 transform hover:scale-105 border-2 border-primary-500">
                                {{-- ✅ ubah shadow-lg jadi border --}}
                                <i
                                    class="fas fa-shopping-cart text-sm transform group-hover/cart:rotate-12 transition-transform duration-300"></i>
                            </button>
                        </div>

                        <div class="mt-2 pt-0 border-t border-gray-100 flex justify-between text-[12px] text-gray-500">
                            <div class="flex items-center">
                                <span class="inline-block w-1.5 h-1.5 rounded-full bg-green-500 mr-1.5"></span>
                                <span>Stok Tersedia</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div id="shareModal"
                class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4 modal-enter">
                <div
                    class="glass-effect rounded-2xl max-w-xs w-full mx-4 overflow-hidden shadow-2xl modal-content-enter">
                    <div class="gradient-bg p-4 text-white relative">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-lg font-bold">Bagikan</h3>
                                <p class="text-blue-100 text-xs mt-1" id="shareModalProductName">Produk berkah gadget
                                </p>
                            </div>
                            <button onclick="closeShareModal()"
                                class="w-7 h-7 rounded-full bg-white bg-opacity-20 flex items-center justify-center hover:bg-opacity-30 transition-all">
                                <i class="fas fa-times text-white text-xs"></i>
                            </button>
                        </div>

                        <div class="absolute -top-2 -right-2 w-12 h-12 bg-white bg-opacity-10 rounded-full"></div>
                        <div class="absolute -bottom-1 -left-1 w-8 h-8 bg-white bg-opacity-10 rounded-full"></div>
                    </div>

                    <div class="p-4">
                        <div class="grid grid-cols-2 gap-3 mb-4">
                            <button onclick="shareToWhatsApp()"
                                class="share-button flex flex-col items-center p-3 rounded-xl border-2 border-gray-100 hover:border-green-200 hover:bg-green-50 group">
                                <div
                                    class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center mb-2 group-hover:scale-110 transition-transform">
                                    <i class="fab fa-whatsapp text-white text-lg"></i>
                                </div>
                                <span
                                    class="text-xs font-medium text-gray-700 group-hover:text-green-700">WhatsApp</span>
                            </button>

                            <button onclick="shareToFacebook()"
                                class="share-button flex flex-col items-center p-3 rounded-xl border-2 border-gray-100 hover:border-blue-200 hover:bg-blue-50 group">
                                <div
                                    class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center mb-2 group-hover:scale-110 transition-transform">
                                    <i class="fab fa-facebook-f text-white text-lg"></i>
                                </div>
                                <span
                                    class="text-xs font-medium text-gray-700 group-hover:text-blue-700">Facebook</span>
                            </button>

                            <button onclick="shareToInstagram()"
                                class="share-button flex flex-col items-center p-3 rounded-xl border-2 border-gray-100 hover:border-purple-200 hover:bg-purple-50 group">
                                <div
                                    class="w-10 h-10 bg-gradient-to-tr from-yellow-400 via-red-500 to-purple-600 rounded-full flex items-center justify-center mb-2 group-hover:scale-110 transition-transform">
                                    <i class="fab fa-instagram text-white text-lg"></i>
                                </div>
                                <span
                                    class="text-xs font-medium text-gray-700 group-hover:text-purple-700">Instagram</span>
                            </button>

                            <button onclick="shareToTelegram()"
                                class="share-button flex flex-col items-center p-3 rounded-xl border-2 border-gray-100 hover:border-blue-200 hover:bg-blue-50 group">
                                <div
                                    class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center mb-2 group-hover:scale-110 transition-transform">
                                    <i class="fab fa-telegram-plane text-white text-lg"></i>
                                </div>
                                <span
                                    class="text-xs font-medium text-gray-700 group-hover:text-blue-700">Telegram</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SVG Patterns and Shapes (hidden by default, add as needed) -->
        <svg width="0" height="0" class="hidden">
            <defs>
                <pattern id="pattern-dots" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <circle cx="3" cy="3" r="1" fill="currentColor" />
                </pattern>
                <path id="blob"
                    d="M48.4,-64.5C62.9,-55.4,74.8,-41.6,79.8,-25.9C84.8,-10.2,83,7.4,76.9,22.9C70.9,38.4,60.7,51.9,47.1,60.5C33.4,69.1,16.7,72.9,0,72.9C-16.7,72.9,-33.4,69.1,-47.7,60.4C-62,51.7,-73.8,38,-80.3,21.1C-86.8,4.3,-87.8,-15.8,-80.9,-32.3C-74,-48.9,-59.1,-61.8,-43.4,-70.4C-27.6,-79,-13.8,-83.2,1,-84.4C15.8,-85.7,31.5,-83,48.4,-64.5Z" />
            </defs>
        </svg>
    </section>

    <!-- Features Section -->




    <!-- CTA Section -->
    <section class="py-16 bg-primary-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4 animate-fade-in">Siap Memulai Belanja?</h2>
            <p class="text-xl text-gray-100 mb-8 max-w-2xl mx-auto animate-fade-in animation-delay-200">Daftar sekarang
                dan dapatkan diskon 10% untuk pembelian pertama Anda!</p>
            <div
                class="flex flex-col sm:flex-row justify-center space-y-3 sm:space-y-0 sm:space-x-4 animate-slide-up animation-delay-400">
                <a href="{{ route('register') }}"
                    class="px-8 py-3 bg-white text-primary-600 font-medium rounded-full hover:bg-gray-100 transition-all btn-hover">
                    Daftar Sekarang
                </a>
                <a href="#produk"
                    class="px-8 py-3 border-2 border-white text-white font-medium rounded-full hover:bg-white hover:text-primary-600 transition-all btn-hover">
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
                <p class="text-gray-600 max-w-2xl mx-auto">Punya pertanyaan atau butuh bantuan? Tim kami siap membantu
                    Anda</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Form Kirim Pesan -->
                <div class="bg-white p-8 rounded-xl shadow-sm animate-slide-up">
                    <h3 class="text-xl font-semibold mb-6">Kirim Pesan</h3>
                    <form action="{{ route('kontak.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="nama" class="block text-gray-700 mb-2">Nama Lengkap</label>
                            <input type="text" id="nama" name="nama"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            @error('nama') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 mb-2">Email</label>
                            <input type="email" id="email" name="email"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            @error('email') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                        </div>
                        <div class="mb-4">
                            <label for="pesan" class="block text-gray-700 mb-2">Pesan</label>
                            <textarea id="pesan" name="pesan" rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                            @error('pesan') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                        </div>
                        <button type="submit"
                            class="w-full px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-all">
                            Kirim Pesan
                        </button>
                    </form>
                </div>

                <!-- Informasi Kontak -->
                <div class="bg-white p-8 rounded-xl shadow-sm animate-slide-up">
                    <h3 class="text-xl font-semibold mb-6">Informasi Kontak</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-3 rounded-full mr-4">
                                <i class="fas fa-map-marker-alt text-blue-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Alamat</h4>
                                <p class="text-gray-600">Dekat Jl. Letkol Suwarno, Kanigoro, Kec. Kartoharjo, Kota Madiun, Jawa Timur 63118</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-3 rounded-full mr-4">
                                <i class="fas fa-phone-alt text-blue-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Telepon</h4>
                                <p class="text-gray-600">+62 812-3456-7890</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-3 rounded-full mr-4">
                                <i class="fas fa-envelope text-blue-600"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-800">Email</h4>
                                <p class="text-gray-600">info@berkahgadget.com</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-3 rounded-full mr-4">
                                <i class="fas fa-clock text-blue-600"></i>
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
                            <a href="https://www.facebook.com" target="_blank"
                                class="w-10 h-10 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center hover:bg-blue-600 hover:text-white transition-all">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.twitter.com" target="_blank"
                                class="w-10 h-10 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center hover:bg-blue-600 hover:text-white transition-all">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.instagram.com" target="_blank"
                                class="w-10 h-10 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center hover:bg-blue-600 hover:text-white transition-all">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://wa.me/6281234567890" target="_blank"
                                class="w-10 h-10 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center hover:bg-blue-600 hover:text-white transition-all">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
    </section>

    @php
    use Illuminate\Support\Facades\DB;
    $pesans = DB::table('kontaks')->select('nama', 'pesan', 'created_at')->latest()->take(15)->get();
    @endphp

    <div class="relative py-20 px-4 sm:px-6 lg:px-8 bg-gray-50 overflow-hidden font-sans">
        <!-- Dynamic glowing animated background -->
        <div class="absolute inset-0 -z-10 overflow-hidden">
            <div
                class="absolute top-[-8rem] left-[-6rem] w-[30rem] h-[30rem] bg-blue-300 rounded-full opacity-20 blur-[160px] animate-pulse-slow">
            </div>
            <div
                class="absolute bottom-[-8rem] right-[-6rem] w-[40rem] h-[40rem] bg-indigo-400 rounded-full opacity-25 blur-[180px] animate-float-slow">
            </div>
        </div>

        <div class="max-w-7xl mx-auto relative z-10">
            @if($pesans->count())
            <div class="text-center mb-16 animate-fade-in-down">
                <h2
                    class="text-4xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-indigo-700 tracking-tight drop-shadow-sm">
                    Pesan Pengunjung
                </h2>
                <p class="mt-3 text-gray-500 text-sm">Apa kata mereka tentang situs kamu?</p>
                <div class="w-24 h-1.5 bg-gradient-to-r from-blue-500 to-indigo-600 mx-auto mt-4 rounded-full shadow">
                </div>
            </div>
            @endif

            @if($pesans->count())
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($pesans as $index => $pesan)
                <div class="bg-white rounded-3xl p-5 border border-transparent shadow-lg transform transition duration-500 hover:shadow-2xl hover:-translate-y-2 hover:scale-[1.02] hover:border-blue-200 group tilt-card"
                    x-data="{ show: false }" x-init="setTimeout(() => show = true, {{ $index * 150 }})" x-show="show"
                    x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 translate-y-6 scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 scale-100">
                    <div class="flex items-start space-x-4">
                        <div
                            class="w-12 h-12 rounded-full bg-gradient-to-tr from-blue-500 to-indigo-600 text-white flex items-center justify-center font-bold shadow-inner text-lg animate-pop">
                            {{ strtoupper(substr($pesan->nama, 0, 1)) }}
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold text-gray-800">{{ $pesan->nama }}</h4>
                            <p class="text-xs text-gray-400">
                                {{ \Carbon\Carbon::parse($pesan->created_at)->diffForHumans() }}
                            </p>
                            <p
                                class="mt-2 text-sm text-gray-700 line-clamp-3 group-hover:text-gray-900 transition-all duration-300 ease-in-out">
                                {{ $pesan->pesan }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <div class="text-center py-16 animate-fade-in-up">
                <div
                    class="inline-flex h-16 w-16 bg-blue-100 rounded-full items-center justify-center mb-4 shadow-md animate-pop">
                    <svg class="h-8 w-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Belum ada pesan</h3>
                <a href="/kontak"
                    class="inline-block mt-4 px-5 py-2.5 text-sm font-medium text-white bg-gradient-to-r from-blue-500 to-indigo-600 rounded-lg shadow hover:from-blue-600 hover:to-indigo-700 transition">
                    Kirim Pesan Pertama
                </a>
            </div>
            @endif
        </div>
    </div>

    <style>
        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-12px);
            }
        }

        @keyframes float-slow {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-6px);
            }
        }

        @keyframes pulse-slow {

            0%,
            100% {
                opacity: 0.15;
                transform: scale(1);
            }

            50% {
                opacity: 0.25;
                transform: scale(1.1);
            }
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pop {
            0% {
                transform: scale(0.9);
                opacity: 0;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        .animate-float {
            animation: float 10s ease-in-out infinite;
        }

        .animate-float-slow {
            animation: float-slow 16s ease-in-out infinite;
        }

        .animate-pulse-slow {
            animation: pulse-slow 12s ease-in-out infinite;
        }

        .animate-fade-in-down {
            animation: fadeInDown 1s ease-out both;
        }

        .animate-fade-in-up {
            animation: fadeInUp 1s ease-out both;
        }

        .animate-pop {
            animation: pop 0.6s ease-out both;
        }

        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Tilt effect (opsional jika ingin efek 3D hover ringan) */
        .tilt-card:hover {
            transform: perspective(1000px) rotateX(2deg) rotateY(-2deg) scale(1.02);
        }
    </style>


    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- About Section -->
    <section id="tentang" class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0 animate-fade-in">

                    <!-- Judul lokasi dinamis -->
                    <h3 id="location-title" class="text-2xl font-semibold mb-4 text-center">
                        Lokasi Toko Utama
                    </h3>

                    <!-- Swiper -->
                    <div class="swiper mySwiper rounded-xl overflow-hidden shadow-lg">
                        <div class="swiper-wrapper">
                            <!-- Slide 1: Toko Utama -->
                            <div class="swiper-slide">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.3833824570593!2d111.51923421431623!3d-7.633422994363497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79aefd94bc1f63%3A0x4c7b8d3d9b7fa55d!2sToko%20Berkah%20Gadget%20Madiun!5e0!3m2!1sen!2sid!4v1685794846427!5m2!1sen!2sid"
                                    width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade" title="Lokasi Toko Utama"></iframe>
                            </div>

                            <!-- Slide 2: Cabang 1 -->
                            <div class="swiper-slide">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.1234567890!2d111.5300000000!3d-7.6400000000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79ae1234567890%3A0x123456789abcdef0!2sToko%20Berkah%20Gadget%20Cabang%201!5e0!3m2!1sen!2sid!4v0000000000000!5m2!1sen!2sid"
                                    width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade" title="Lokasi Toko Cabang 1"></iframe>
                            </div>


                        </div>

                        <!-- Navigation -->
                        <div class="swiper-button-next text-primary-600" style="color: #2563eb;"></div>
                        <div class="swiper-button-prev text-primary-600" style="color: #2563eb;"></div>

                        <!-- Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>

                </div>

                <div class="md:w-1/2 md:pl-12 animate-slide-up">
                    <h2 class="text-3xl font-bold mb-6">Tentang Toko Berkah Gadget</h2>
                    <p class="text-gray-600 mb-4">
                        Toko Berkah Gadget Madiun adalah pusat penjualan gadget terpercaya di
                        Madiun. Kami menyediakan berbagai produk berkualitas mulai dari
                        smartphone, tablet, aksesoris, hingga kebutuhan teknologi lainnya.
                    </p>
                    <p class="text-gray-600 mb-6">
                        Dengan pelayanan yang ramah, harga bersaing, dan garansi resmi, kami
                        berkomitmen untuk memberikan pengalaman belanja terbaik bagi
                        pelanggan.
                    </p>
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
        </div>
        </div>
    </section>



    <!-- Footer Baru dengan Peningkatan UI dan UX -->
    <footer class="bg-gradient-to-b from-gray-800 to-gray-900 text-gray-300 py-16">
        <div class="container mx-auto px-4">
            <!-- Bagian Atas Footer -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 mb-12">
                <!-- Kolom Brand -->
                <div class="lg:col-span-2">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="bg-white p-2 rounded-lg shadow-md">
                            <img src="{{ asset('storage/images/LOGO.png') }}" alt="Berkah Gadget" class="w-10 h-10">
                        </div>
                        <span
                            class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-green-400">Berkah
                            Gadget</span>
                    </div>
                    <p class="mb-6 text-sm md:text-base">Toko gadget terpercaya di Madiun dengan produk berkualitas,
                        harga bersaing, dan layanan pelanggan terbaik sejak 2020.</p>

                    <!-- Informasi Kontak -->
                    <div class="space-y-3 mb-6">
                        <div class="flex items-start space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-0.5 text-green-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <p>Dekat Jl. Letkol Suwarno, Kanigoro, Kec. Kartoharjo, Kota Madiun, Jawa Timur 63118</p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-0.5 text-green-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <p>+62 823-4567-8901</p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-0.5 text-green-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <p>info@berkahgadget.com</p>
                        </div>
                    </div>

                    <!-- Jam Operasional -->
                    <div class="mb-6">
                        <h4 class="text-white font-medium mb-2">Jam Operasional:</h4>
                        <p>Senin - Sabtu: 09.00 - 21.00 WIB</p>
                        <p>Minggu: 10.00 - 20.00 WIB</p>
                    </div>

                    <!-- Media Sosial -->
                    <div>
                        <h4 class="text-white font-medium mb-3">Ikuti Kami:</h4>
                        <div class="flex space-x-4">
                            <a href="#"
                                class="bg-gray-700 hover:bg-blue-600 p-2 rounded-full transition-all duration-300"
                                aria-label="Facebook">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="#"
                                class="bg-gray-700 hover:bg-sky-500 p-2 rounded-full transition-all duration-300"
                                aria-label="Twitter">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                                    </path>
                                </svg>
                            </a>
                            <a href="#"
                                class="bg-gray-700 hover:bg-pink-600 p-2 rounded-full transition-all duration-300"
                                aria-label="Instagram">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="#"
                                class="bg-gray-700 hover:bg-red-600 p-2 rounded-full transition-all duration-300"
                                aria-label="YouTube">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <a href="#"
                                class="bg-gray-700 hover:bg-green-600 p-2 rounded-full transition-all duration-300"
                                aria-label="WhatsApp">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M21.105 4.893C18.861 2.65 15.872 1.401 12.694 1.4 6.112 1.4 0.76 6.753 0.759 13.335c0 2.096.546 4.142 1.585 5.945L0.691 24l4.848-1.575c1.733.926 3.684 1.414 5.666 1.415h.005c6.581 0 11.934-5.354 11.935-11.937.001-3.179-1.249-6.168-3.492-8.413l.452.403zm-8.411 18.341h-.004c-1.782 0-3.527-.469-5.057-1.359l-.363-.211-3.759 1.22 1.246-3.699-.235-.367a9.892 9.892 0 0 1-1.514-5.26c.001-5.466 4.455-9.92 9.926-9.92 2.65.001 5.142 1.033 7.014 2.906 1.871 1.873 2.901 4.363 2.9 7.011-.001 5.467-4.455 9.921-9.923 9.921l-.231-.242zm5.441-7.431c-.298-.149-1.766-.872-2.04-.971-.274-.099-.474-.148-.673.15-.2.298-.771.97-.945 1.17-.173.197-.347.223-.644.074-.298-.149-1.255-.463-2.39-1.475-.882-.788-1.478-1.761-1.652-2.059-.173-.298-.019-.458.131-.606.133-.133.297-.347.446-.522.149-.172.198-.296.297-.496.1-.198.05-.371-.025-.521-.075-.148-.672-1.62-.921-2.218-.241-.584-.487-.505-.672-.514-.173-.009-.372-.011-.571-.011-.198 0-.52.074-.792.371-.272.298-1.04 1.017-1.04 2.479 0 1.463 1.064 2.873 1.213 3.074.148.198 2.095 3.2 5.076 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.57-.085 1.758-.719 2.006-1.413.247-.694.247-1.29.173-1.413-.074-.124-.273-.198-.57-.347l-.461.242z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Tautan Cepat -->
                <div>
                    <h3 class="text-white font-semibold text-lg mb-5 relative">
                        <span class="relative z-10">Tautan Cepat</span>
                        <span class="absolute bottom-0 left-0 w-12 h-1 bg-green-400 rounded-full"></span>
                    </h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="#" class="hover:text-white transition-all duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-green-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Beranda
                            </a>
                        </li>
                        <li>
                            <a href="#produk" class="hover:text-white transition-all duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-green-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Produk
                            </a>
                        </li>
                        <li>
                            <a href="#promo" class="hover:text-white transition-all duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-green-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Promo
                            </a>
                        </li>
                        <li>
                            <a href="#tentang" class="hover:text-white transition-all duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-green-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Tentang Kami
                            </a>
                        </li>
                        <li>
                            <a href="#kontak" class="hover:text-white transition-all duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-green-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Kontak
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Kategori Produk -->
                <div>
                    <h3 class="text-white font-semibold text-lg mb-5 relative">
                        <span class="relative z-10">Kategori</span>
                        <span class="absolute bottom-0 left-0 w-12 h-1 bg-green-400 rounded-full"></span>
                    </h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="#" class="hover:text-white transition-all duration-300 flex items-center group">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-green-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Smartphone
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white transition-all duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-green-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Laptop
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white transition-all duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-green-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Tablet
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white transition-all duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-green-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Smartwatch
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white transition-all duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-green-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Aksesoris
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Layanan Pelanggan -->
                <div>
                    <h3 class="text-white font-semibold text-lg mb-5 relative">
                        <span class="relative z-10">Layanan Pelanggan</span>
                        <span class="absolute bottom-0 left-0 w-12 h-1 bg-green-400 rounded-full"></span>
                    </h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="#" class="hover:text-white transition-all duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-green-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                FAQ
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white transition-all duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-green-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Cara Pembelian
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white transition-all duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-green-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Pengiriman
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white transition-all duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-green-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Pembayaran
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hover:text-white transition-all duration-300 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2 text-green-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Garansi & Pengembalian
                            </a>
                        </li>
                    </ul>
                </div>
            </div>



            <!-- Metode Pembayaran -->
            <div class="mb-12">
                <h3 class="text-white font-semibold text-lg mb-5 text-center">Metode Pembayaran</h3>
                <div class="flex flex-wrap justify-center gap-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bank_Central_Asia.svg/960px-Bank_Central_Asia.svg.png"
                        alt="BCA" class="h-8 bg-white rounded-md p-1">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/ad/Bank_Mandiri_logo_2016.svg"
                        alt="Mandiri" class="h-8 bg-white rounded-md p-1">
                    <img src="https://upload.wikimedia.org/wikipedia/id/thumb/5/55/BNI_logo.svg/1200px-BNI_logo.svg.png"
                        alt="BNI" class="h-8 bg-white rounded-md p-1">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/BANK_BRI_logo.svg/2560px-BANK_BRI_logo.svg.png"
                        alt="BRI" class="h-8 bg-white rounded-md p-1">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Logo_ovo_purple.svg/2560px-Logo_ovo_purple.svg.png"
                        alt="OVO" class="h-8 bg-white rounded-md p-1">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/86/Gopay_logo.svg/2560px-Gopay_logo.svg.png"
                        alt="GoPay" class="h-8 bg-white rounded-md p-1">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Logo_QRIS.svg/163px-Logo_QRIS.svg.png"
                        alt="QRIS" class="h-8 bg-white rounded-md p-1">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9d/Logo_Indomaret.png" alt="Indomaret"
                        class="h-8 bg-white rounded-md p-1">
                </div>
            </div>

            <!-- Mitra Pengiriman -->
            <div class="mb-12">
                <h3 class="text-white font-semibold text-lg mb-5 text-center">Mitra Pengiriman</h3>
                <div class="flex flex-wrap justify-center gap-4">
                    <img src="https://www.jne.co.id/cfind/source/images/logo.svg" alt="JNE"
                        class="h-8 bg-white rounded-md p-1">
                    <img src="https://i.pinimg.com/736x/72/23/3c/72233c7d51fe3ffde3cb3c345a7f7731.jpg" alt="J&T"
                        class="h-8 bg-white rounded-md p-1">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtxolCwnRdHqegP65Kis62axTDA5E2yCWkoQ&s"
                        alt="SiCepat" class="h-8 bg-white rounded-md p-1">
                    <img src="https://anteraja.id/id/assets/img/icons/logo-anteraja.png" alt="AnterAja"
                        class="h-8 bg-white rounded-md p-1">

                    <!-- WhatsApp Float Button (di bawah tombol scroll atas) -->
                    <a href="https://wa.me/62881036357795"
                        class="fixed bottom-6 right-6 w-12 h-12 bg-green-500 text-white rounded-full flex items-center justify-center shadow-lg hover:bg-green-600 transition-all transform hover:scale-110">
                        <i class="fab fa-whatsapp text-xl"></i>
                    </a>

                    <!-- Scroll to Top Button (lebih atas dari WA) -->
                    <a href="dashboard.blade.php"
                        class="fixed bottom-20 right-6 w-12 h-12 bg-primary-600 text-white rounded-full flex items-center justify-center shadow-lg hover:bg-primary-700 transition-all transform hover:scale-110"
                        id="back-to-top">
                        <i class="fas fa-arrow-up"></i>
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
                    <script>
                        AOS.init({
                            duration: 1000,
                            once: true,
                            offset: 100,
                            delay: 100
                        });
                    </script>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            if (document.getElementById('search-results')) {
                                document.getElementById('search-results').scrollIntoView({
                                    behavior: 'smooth'
                                });
                            }
                        });
                    </script>

                    @push('scripts')
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            new Swiper('.swiper-container', {
                                loop: true,
                                autoplay: {
                                    delay: 5000,
                                },
                                pagination: {
                                    el: '.swiper-pagination',
                                    clickable: true,
                                },
                                navigation: {
                                    nextEl: '.swiper-button-next',
                                    prevEl: '.swiper-button-prev',
                                },
                            });
                        });
                    </script>
                    @endpush

                    <script>
                        document.querySelectorAll('.toggle-favorit').forEach(button => {
                            button.addEventListener('click', async () => {
                                const url = button.getAttribute('data-url');

                                try {
                                    const response = await fetch(url, {
                                        method: 'POST',
                                        headers: {
                                            'X-CSRF-TOKEN': document.querySelector(
                                                'meta[name="csrf-token"]').getAttribute(
                                                'content'),
                                            'Accept': 'application/json',
                                        },
                                    });

                                    if (response.status === 401) {
                                        const data = await response.json();
                                        console.log('401 response:', data);
                                        if (data.redirect) {
                                            window.location.href = data.redirect;
                                        } else {
                                            window.location.href = '/login';
                                        }
                                        return;
                                    }

                                    const data = await response.json();
                                    const icon = button.querySelector('i');
                                    if (data.status === 'added') {
                                        icon.className = 'fas fa-heart text-red-500';
                                    } else if (data.status === 'removed') {
                                        icon.className =
                                            'far fa-heart text-gray-700 hover:text-primary-600';
                                    }

                                } catch (error) {
                                    console.error(error);
                                    alert('Gagal mengirim permintaan.');
                                }
                            });
                        });

                        // bagikan
                        let currentShareProductName = '';
                        let currentShareProductPrice = '';
                        let currentShareProductUrl = '';

                        function openShareModal(productName, productPrice, productUrl) {
                            currentShareProductName = productName;
                            currentShareProductPrice = productPrice;
                            currentShareProductUrl = productUrl;

                            const modal = document.getElementById('shareModal');
                            document.getElementById('shareModalProductName').textContent = `Produk ${productName}`;
                            modal.classList.remove('hidden');
                        }

                        function closeShareModal() {
                            const modal = document.getElementById('shareModal');
                            modal.classList.add('hidden');
                        }

                        function getShareText() {
                            return encodeURIComponent(
                                `Lihat produk ${currentShareProductName} dengan harga Rp ${currentShareProductPrice} di Berkah Gadget!`
                            );
                        }

                        function getShareUrl() {
                            return encodeURIComponent(currentShareProductUrl);
                        }

                        function shareToWhatsApp() {
                            window.open(`https://wa.me/?text=${getShareText()}%20${getShareUrl()}`, '_blank');
                            closeShareModal();
                            showToast('Membuka WhatsApp...');
                        }

                        function shareToFacebook() {
                            window.open(`https://www.facebook.com/sharer/sharer.php?u=${getShareUrl()}`, '_blank');
                            closeShareModal();
                            showToast('Membuka Facebook...');
                        }

                        function shareToInstagram() {
                            window.open(`https://www.instagram.com/`, '_blank'); // Opens Instagram website
                            showToast('Buka Instagram dan tempel tautan produk secara manual.');
                            closeShareModal();
                        }


                        function shareToTelegram() {
                            window.open(`https://t.me/share/url?url=${getShareUrl()}&text=${getShareText()}`, '_blank');
                            closeShareModal();
                            showToast('Membuka Telegram...');
                        }

                        // Close modal when clicking outside
                        document.getElementById('shareModal').addEventListener('click', function(e) {
                            if (e.target === this) {
                                closeShareModal();
                            }
                        });

                        // Close modal with Escape key
                        document.addEventListener('keydown', function(e) {
                            if (e.key === 'Escape') {
                                closeShareModal();
                            }
                        });
                    </script>
                    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

                    <script>
                        const locationTitle = document.getElementById("location-title");

                        const titles = [
                            "Lokasi Toko Utama",
                            "Lokasi Toko Cabang ",

                        ];

                        var swiper = new Swiper(".mySwiper", {
                            navigation: {
                                nextEl: ".swiper-button-next",
                                prevEl: ".swiper-button-prev",
                            },
                            pagination: {
                                el: ".swiper-pagination",
                                clickable: true,
                            },
                            on: {
                                slideChange: function() {
                                    // Update judul sesuai index slide aktif
                                    const currentIndex = this.activeIndex;
                                    locationTitle.textContent = titles[currentIndex] || "Lokasi Toko";
                                },
                            },
                        });
                    </script>

</body>

</html>