<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk | Toko Berkah Gadget</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-indigo-100 to-purple-200 min-h-screen py-8">
    <div class="max-w-5xl mx-auto px-4">
        <a href="{{ route('user.dashboard') }}" class="inline-flex items-center mb-6 text-sm text-indigo-600 hover:text-indigo-800">
            <i class="fas fa-arrow-left mr-2"></i> Kembali ke Katalog
        </a>

        <div class="bg-white rounded-2xl shadow-xl overflow-hidden flex flex-col md:flex-row">
            <!-- Gambar Produk -->
            <div class="md:w-1/2 p-4">
                @if ($produk->gambar)
                <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama_produk }}" class="rounded-xl w-full h-full object-cover">
                @else
                <div class="text-center text-gray-400 h-full flex items-center justify-center">Tidak ada gambar</div>
                @endif
            </div>

            <!-- Detail Produk -->
            <div class="md:w-1/2 p-6">
                <h1 class="text-3xl font-extrabold text-gray-800 mb-2">{{ $produk->nama_produk }}</h1>
                <span class="inline-block bg-indigo-100 text-indigo-600 text-xs font-semibold px-3 py-1 rounded-full mb-4">{{ $produk->kategori }}</span>

                <p class="text-2xl font-bold text-red-600 mb-4">Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>

                <div class="space-y-3 mb-6">
                    <div>
                        <h2 class="font-semibold text-gray-700">Deskripsi</h2>
                        <p class="text-gray-600">{{ $produk->deskripsi }}</p>
                    </div>
                    <div>
                        <h2 class="font-semibold text-gray-700">Kekurangan</h2>
                        <p class="text-gray-600">{{ $produk->kekurangan }}</p>
                    </div>
                    <div>
                        <h2 class="font-semibold text-gray-700">Kelengkapan</h2>
                        <p class="text-gray-600">{{ $produk->kelengkapan }}</p>
                    </div>
                </div>

                <a href="https://wa.me/62881036357795?text=Saya%20tertarik%20dengan%20{{ urlencode($produk->nama_produk) }}"
                    target="_blank"
                    class="inline-block w-full bg-green-500 text-white text-center py-3 rounded-lg hover:bg-green-600 transition-all font-semibold">
                    <i class="fab fa-whatsapp mr-2"></i>Hubungi via WhatsApp
                </a>
            </div>
        </div>
    </div>
</body>

</html>