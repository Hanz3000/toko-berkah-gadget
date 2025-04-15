<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Berkah Gadget</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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

        /* Additional styles for the hero slider */
        .hero-slider {
            height: auto;
            max-height: 500px;
        }

        .slider-container {
            width: 100%;
            height: 100%;
        }

        .slider-slide {
            padding: 2rem 0;
        }

        /* Transition animation for smoother sliding */
        .slider-container {
            transition: transform 0.5s ease-in-out;
        }

        /* Improve dot indicators */
        .slider-dot {
            transition: opacity 0.3s ease;
        }

        .slider-dot.opacity-100 {
            transform: scale(1.2);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .hero-slider {
                max-height: 700px;
            }

            .slider-slide {
                padding: 1rem 0;
            }
        }

        /* Improve arrow button visibility */
        .slider-prev,
        .slider-next {
            opacity: 0.7;
            transition: opacity 0.3s;
        }

        .slider-prev:hover,
        .slider-next:hover {
            opacity: 1;
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white shadow-md fixed w-full z-10">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <!-- Ganti dengan gambar logo -->
                    <img src="{{ asset('storage/images/LOGO.jpg') }}" alt="Logo Toko Berkah Gadget" class="w-8 h-8">
                    <span class="font-bold text-xl text-indigo-600">Berkah Gadget</span>
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

                                @if(auth()->user()->role === 'admin' || auth()->user()->role === 'superadmin')
                                <a href="{{ route('admin.produk.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Halaman Admin</a>
                                @endif

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

    <!-- Hero Section with Slider -->
    <section class="pt-24 pb-12 bg-gradient">
        <div class="container mx-auto px-4">
            <!-- Slider container -->
            <div class="hero-slider relative overflow-hidden rounded-lg shadow-lg">
                <!-- Slides container -->
                <div class="slider-container flex transition-transform duration-500 ease-in-out">
                    <!-- Slide 1 -->
                    <div class="slider-slide min-w-full">
                        <div class="flex flex-col md:flex-row items-center">
                            <div class="md:w-1/2 mb-8 md:mb-0">
                                <img src="{{ asset('storage/images/slide1.png') }}" alt="Hero Image" class="rounded-lg shadow-lg">
                            </div>
                            <div class="md:w-1/2 px-4">
                                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Temukan Gadget Impian Anda</h1>
                                <p class="text-lg text-gray-100 mb-6">Koleksi terlengkap smartphone, laptop, dan aksesoris dengan harga terbaik dan garansi resmi.</p>
                                <a href="#produk" class="px-6 py-3 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 inline-block">Lihat Produk</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="slider-slide min-w-full">
                        <div class="flex flex-col md:flex-row items-center">
                            <div class="md:w-1/2 mb-8 md:mb-0">
                                <img src="{{ asset('storage/images/slide2.png') }}" alt="Promo Special" class="rounded-lg shadow-lg">
                            </div>
                            <div class="md:w-1/2 px-4">
                                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Promo Spesial Bulan Ini</h1>
                                <p class="text-lg text-gray-100 mb-6">Dapatkan diskon hingga 30% untuk pembelian smartphone terbaru.</p>
                                <a href="#promo" class="px-6 py-3 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 inline-block">Lihat Promo</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="slider-slide min-w-full">
                        <div class="flex flex-col md:flex-row items-center">
                            <div class="md:w-1/2 mb-8 md:mb-0">
                                <img src="{{ asset('storage/images/slide3.jpg') }}" alt="Accessories" class="rounded-lg shadow-lg">
                            </div>
                            <div class="md:w-1/2 px-4">
                                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Aksesoris Premium</h1>
                                <p class="text-lg text-gray-100 mb-6">Lengkapi gadget Anda dengan aksesoris berkualitas tinggi.</p>
                                <a href="#aksesoris" class="px-6 py-3 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 inline-block">Lihat Aksesoris</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider controls -->
                <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-2">
                    <button class="slider-dot w-3 h-3 rounded-full bg-white opacity-50 focus:outline-none" data-slide="0"></button>
                    <button class="slider-dot w-3 h-3 rounded-full bg-white opacity-50 focus:outline-none" data-slide="1"></button>
                    <button class="slider-dot w-3 h-3 rounded-full bg-white opacity-50 focus:outline-none" data-slide="2"></button>
                </div>

                <!-- Prev/Next buttons -->
                <button class="slider-prev absolute top-1/2 left-4 transform -translate-y-1/2 bg-white bg-opacity-20 rounded-full p-2 focus:outline-none hover:bg-opacity-30">
                    <i class="fas fa-chevron-left text-white text-xl"></i>
                </button>
                <button class="slider-next absolute top-1/2 right-4 transform -translate-y-1/2 bg-white bg-opacity-20 rounded-full p-2 focus:outline-none hover:bg-opacity-30">
                    <i class="fas fa-chevron-right text-white text-xl"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- JavaScript for slider functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sliderContainer = document.querySelector('.slider-container');
            const slides = document.querySelectorAll('.slider-slide');
            const dots = document.querySelectorAll('.slider-dot');
            const prevButton = document.querySelector('.slider-prev');
            const nextButton = document.querySelector('.slider-next');

            let currentSlide = 0;
            const slideCount = slides.length;

            // Initialize the first dot as active
            dots[0].classList.add('opacity-100');

            // Function to go to a specific slide
            function goToSlide(slideIndex) {
                if (slideIndex < 0) {
                    slideIndex = slideCount - 1;
                } else if (slideIndex >= slideCount) {
                    slideIndex = 0;
                }

                sliderContainer.style.transform = `translateX(-${slideIndex * 100}%)`;

                // Update active dot
                dots.forEach(dot => dot.classList.remove('opacity-100'));
                dots[slideIndex].classList.add('opacity-100');

                currentSlide = slideIndex;
            }

            // Event listeners for dots
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    goToSlide(index);
                });
            });

            // Event listeners for prev/next buttons
            prevButton.addEventListener('click', () => {
                goToSlide(currentSlide - 1);
            });

            nextButton.addEventListener('click', () => {
                goToSlide(currentSlide + 1);
            });

            // Touch events for swiping on mobile
            let touchStartX = 0;
            let touchEndX = 0;

            const heroSlider = document.querySelector('.hero-slider');

            heroSlider.addEventListener('touchstart', e => {
                touchStartX = e.changedTouches[0].screenX;
            });

            heroSlider.addEventListener('touchend', e => {
                touchEndX = e.changedTouches[0].screenX;
                handleSwipe();
            });

            function handleSwipe() {
                const swipeThreshold = 50; // minimum distance for swipe

                if (touchStartX - touchEndX > swipeThreshold) {
                    // Swiped left - go to next slide
                    goToSlide(currentSlide + 1);
                } else if (touchEndX - touchStartX > swipeThreshold) {
                    // Swiped right - go to previous slide
                    goToSlide(currentSlide - 1);
                }
            }

            // Auto-slide functionality
            let slideInterval = setInterval(() => {
                goToSlide(currentSlide + 1);
            }, 5000); // Change slide every 5 seconds

            // Pause auto-slide when user interacts with slider
            heroSlider.addEventListener('mouseenter', () => {
                clearInterval(slideInterval);
            });

            heroSlider.addEventListener('mouseleave', () => {
                slideInterval = setInterval(() => {
                    goToSlide(currentSlide + 1);
                }, 5000);
            });

            // Also pause on touch
            heroSlider.addEventListener('touchstart', () => {
                clearInterval(slideInterval);
            });

            heroSlider.addEventListener('touchend', () => {
                slideInterval = setInterval(() => {
                    goToSlide(currentSlide + 1);
                }, 5000);
            });
        });
    </script>

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
                        <i class="fas fa-clock text-indigo-600 text-2xl"></i>
                    </div>
                    <h3 class="font-medium">Smartwatch</h3>
                </div>

                <div class="bg-gray-50 rounded-lg p-4 text-center hover:shadow-md transition duration-300">
                    <div class="bg-indigo-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-headphones text-indigo-600 text-2xl"></i>
                    </div>
                    <h3 class="font-medium">Aksesoris</h3>
                </div>
                <div class="bg-gray-50 rounded-lg p-4 text-center hover:shadow-md transition duration-300">
                    <div class="bg-indigo-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-tablet-alt text-indigo-600 text-2xl"></i>
                    </div>
                    <h3 class="font-medium">Tablet</h3>
                </div>
            </div>
        </div>
    </section>

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