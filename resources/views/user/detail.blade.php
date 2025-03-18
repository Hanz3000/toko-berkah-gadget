<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <a href="{{ route('user.dashboard') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 mb-4 inline-block">
            Kembali ke Katalog
        </a>

        <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col md:flex-row">
            <div class="w-full md:w-1/2">
                @if ($produk->gambar)
                <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama_produk }}" class="w-full h-96 object-cover rounded-lg">
                @else
                <span class="text-gray-500">Tidak ada gambar</span>
                @endif
            </div>

            <div class="w-full md:w-1/2 md:pl-6">
                <h1 class="text-3xl font-bold mb-2">{{ $produk->nama_produk }}</h1>
                <p class="text-gray-500 mb-2">{{ $produk->kategori }}</p>
                <p class="text-xl font-bold text-red-600 mb-4">Rp {{ number_format($produk->harga, 0, ',', '.') }}</p>

                <h2 class="text-lg font-semibold">Deskripsi:</h2>
                <p class="text-gray-700 mb-4">{{ $produk->deskripsi }}</p>

                <h2 class="text-lg font-semibold">Kekurangan:</h2>
                <p class="text-gray-700 mb-4">{{ $produk->kekurangan }}</p>

                <h2 class="text-lg font-semibold">Kelengkapan:</h2>
                <p class="text-gray-700 mb-4">{{ $produk->kelengkapan }}</p>

                <a href="https://wa.me/62xxxxxxxxxx?text=Saya%20tertarik%20dengan%20{{ urlencode($produk->nama_produk) }}" target="_blank"
                    class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 text-center block mt-4">
                    Hubungi via WhatsApp
                </a>
            </div>
        </div>
    </div>
</body>

</html>