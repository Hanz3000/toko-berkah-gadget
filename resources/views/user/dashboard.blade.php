<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard User</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .card-img-wrapper {
            position: relative;
            overflow: hidden;
            height: 200px;
        }

        .card-img-wrapper img {
            transition: transform 0.5s ease;
            height: 100%;
            object-fit: cover;
        }

        .card:hover .card-img-wrapper img {
            transform: scale(1.05);
        }

        .promo-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 10;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }

        .hero-section {
            background: linear-gradient(135deg, #007bff, #6610f2);
            color: white;
            padding: 3rem 0;
            margin-bottom: 2rem;
            border-radius: 0 0 20px 20px;
        }

        .price {
            font-size: 1.25rem;
            font-weight: 700;
            color: #dc3545;
        }

        .category-badge {
            position: absolute;
            bottom: 10px;
            left: 10px;
            z-index: 10;
        }

        .btn-view {
            background-color: #007bff;
            border-color: #007bff;
            transition: all 0.3s ease;
        }

        .btn-view:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>

<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-shopping-bag me-2"></i>Toko Berkah Gadget</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="fas fa-home me-1"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-tag me-1"></i>Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-star me-1"></i>Promo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-info-circle me-1"></i>Tentang Kami</a>
                    </li>
                </ul>

                @if(Auth::check())
                <div class="d-flex align-items-center">
                    <div class="dropdown me-3">
                        <button class="btn btn-light dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle me-1"></i>{{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i>Profil</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-history me-2"></i>Riwayat Pembelian</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger"><i class="fas fa-sign-out-alt me-2"></i>Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-light position-relative">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            0
                        </span>
                    </a>
                </div>
                @else
                <div class="d-flex">
                    <a href="{{ route('login') }}" class="btn btn-outline-light me-2"><i class="fas fa-sign-in-alt me-1"></i>Login</a>
                    <a href="{{ route('register') }}" class="btn btn-light"><i class="fas fa-user-plus me-1"></i>Register</a>
                </div>
                @endif
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">Koleksi Produk Terbaik</h1>
            <p class="lead mb-4">Temukan berbagai produk berkualitas dengan harga terbaik</p>
            <form class="d-flex justify-content-center">
                <div class="input-group mb-3" style="max-width: 500px;">
                    <input type="text" class="form-control" placeholder="Cari produk..." aria-label="Cari produk">
                    <button class="btn btn-light" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
    </section>

    <div class="container py-4">
        <!-- Admin Management Button -->
        @if(Auth::check() && Auth::user()->role === 'admin')
        <div class="d-flex justify-content-end mb-4">
            <a href="{{ route('admin.produk.index') }}" class="btn btn-success btn-lg">
                <i class="fas fa-cogs me-2"></i>Manajemen Produk
            </a>
        </div>
        @endif

        <!-- Category Filter Buttons -->
        <div class="mb-4">
            <div class="d-flex flex-wrap justify-content-center gap-2">
                <button class="btn btn-outline-primary active">Semua</button>
                <button class="btn btn-outline-primary">Elektronik</button>
                <button class="btn btn-outline-primary">Fashion</button>
                <button class="btn btn-outline-primary">Makanan</button>
                <button class="btn btn-outline-primary">Kesehatan</button>
                <button class="btn btn-outline-primary">Lainnya</button>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="row g-4">
            @foreach ($produk as $item)
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-img-wrapper">
                        @if ($item->gambar)
                        <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top w-100" alt="{{ $item->nama_produk }}">
                        @else
                        <div class="bg-light d-flex justify-content-center align-items-center h-100">
                            <i class="fas fa-image text-secondary fa-3x"></i>
                        </div>
                        @endif
                        <span class="promo-badge badge bg-danger"><i class="fas fa-fire me-1"></i>Promo</span>
                        <span class="category-badge badge bg-primary">{{ $item->kategori }}</span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->nama_produk }}</h5>
                        <div class="mb-2">
                            <div class="d-flex text-warning mb-1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="ms-1 text-muted">(4.5)</span>
                            </div>
                        </div>
                        <p class="price mb-0">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                    </div>
                    <div class="card-footer bg-white border-0 pt-0">
                        <div class="d-grid gap-2">
                            <a href="{{ route('user.produk.detail', $item->id) }}" class="btn btn-view text-white">
                                <i class="fas fa-eye me-1"></i>Lihat Detail
                            </a>
                            <button class="btn btn-outline-primary">
                                <i class="fas fa-cart-plus me-1"></i>Tambah ke Keranjang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <nav class="my-5">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="fas fa-chevron-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h5 class="mb-3">Toko Online</h5>
                    <p class="text-muted">Menyediakan berbagai produk berkualitas dengan harga terbaik untuk Anda.</p>
                    <div class="d-flex gap-3 mt-4">
                        <a href="#" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-youtube fa-lg"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h5 class="mb-3">Kategori</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Elektronik</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Fashion</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Makanan</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Kesehatan</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h5 class="mb-3">Layanan</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Bantuan</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Pengiriman</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Pengembalian</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h5 class="mb-3">Hubungi Kami</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2 text-muted"><i class="fas fa-map-marker-alt me-2"></i>Jl. Contoh No. 123, Kota, Indonesia</li>
                        <li class="mb-2 text-muted"><i class="fas fa-phone me-2"></i>+62 123 4567 890</li>
                        <li class="mb-2 text-muted"><i class="fas fa-envelope me-2"></i>info@tokoonline.com</li>
                    </ul>
                    <div class="mt-3">
                        <h6>Berlangganan Newsletter</h6>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Email Anda">
                            <button class="btn btn-primary" type="button">Daftar</button>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2025 Toko Online. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="text-muted text-decoration-none me-3">Syarat & Ketentuan</a>
                    <a href="#" class="text-muted text-decoration-none">Kebijakan Privasi</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>