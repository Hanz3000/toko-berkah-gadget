<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-blue-100 to-purple-100 p-8">
    <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-xl">
        <h1 class="text-3xl font-bold text-indigo-700 mb-6">Edit Produk</h1>

        <form action="{{ route('admin.produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')


            <div>
                <label for="nama_produk" class="block text-sm font-medium text-gray-700">Nama Produk:</label>
                <input type="text" name="nama_produk" id="nama_produk" value="{{ $produk->nama_produk }}" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2">
            </div>

            <div>
                <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori:</label>
                <select name="kategori" id="kategori"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2">
                    <option value="smartphone" {{ $produk->kategori == 'smartphone' ? 'selected' : '' }}>Smartphone</option>
                    <option value="tablet" {{ $produk->kategori == 'tablet' ? 'selected' : '' }}>Tablet</option>
                    <option value="smartwatch" {{ $produk->kategori == 'smartwatch' ? 'selected' : '' }}>Smartwatch</option>
                    <option value="aksesoris" {{ $produk->kategori == 'aksesoris' ? 'selected' : '' }}>Aksesoris</option>
                    <option value="second" {{ $produk->kategori == 'second' ? 'selected' : '' }}>Second</option>
                </select>
            </div>

            <div>
                <label for="harga" class="block text-sm font-medium text-gray-700">Harga:</label>
                <input type="number" name="harga" id="harga" value="{{ $produk->harga }}" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2">
            </div>

            <div>
                <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi:</label>
                <textarea name="deskripsi" id="deskripsi"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2">{{ $produk->deskripsi }}</textarea>
            </div>

            <div>
                <label for="kekurangan" class="block text-sm font-medium text-gray-700">Kekurangan:</label>
                <textarea name="kekurangan" id="kekurangan"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2">{{ $produk->kekurangan }}</textarea>
            </div>

            <div>
                <label for="kelengkapan" class="block text-sm font-medium text-gray-700">Kelengkapan:</label>
                <textarea name="kelengkapan" id="kelengkapan"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2">{{ $produk->kelengkapan }}</textarea>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Gambar:</label>
                <input type="file" name="gambar" id="gambar"
                    class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                @if ($produk->gambar)
                <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama_produk }}"
                    class="mt-2 w-24 h-24 object-cover rounded-md shadow-md">
                @else
                <p class="mt-2 text-gray-500">Tidak ada gambar</p>
                @endif
            </div>

            <div>
                <button type="submit"
                    class="w-full py-3 px-4 rounded-md shadow-lg text-white font-semibold bg-gradient-to-r from-indigo-500 to-blue-500 hover:from-indigo-600 hover:to-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</body>

</html>