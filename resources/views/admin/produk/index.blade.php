<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-8">
    <div class="container mx-auto bg-white p-6 shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold mb-4">Daftar Produk</h1>

        <!-- Tombol Kembali ke Dashboard -->
        <div class="mb-4">
            <a href="{{ route('user.dashboard') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">
                Kembali ke Dashboard
            </a>
            <a href="{{ route('admin.produk.create') }}" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-700 ml-2">
                Tambah Produk
            </a>
        </div>

        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 px-4 py-2">ID</th>
                    <th class="border border-gray-300 px-4 py-2">Nama Produk</th>
                    <th class="border border-gray-300 px-4 py-2">Kategori</th>
                    <th class="border border-gray-300 px-4 py-2">Harga</th>
                    <th class="border border-gray-300 px-4 py-2">Gambar</th>
                    <th class="border border-gray-300 px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produk as $item)
                <tr class="text-center">
                    <td class="border border-gray-300 px-4 py-2">{{ $item->id }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $item->nama_produk }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $item->kategori }}</td>
                    <td class="border border-gray-300 px-4 py-2">Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                        @if ($item->gambar)
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_produk }}" class="w-16 h-16 object-cover mx-auto">
                        @else
                        <span class="text-gray-500">Tidak ada gambar</span>
                        @endif
                    </td>
                    <td class="border border-gray-300 px-4 py-2">
                        <a href="{{ route('admin.produk.edit', $item->id) }}" class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-700">Edit</a>
                        <form action="{{ route('admin.produk.destroy', $item->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-700" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>