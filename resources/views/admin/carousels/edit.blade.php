@extends('layouts.template')

@section('title', 'Panel Admin - Edit Konten')

@section('header-title', 'Edit Konten')
@section('header-subtitle', 'Perbarui informasi konten untuk halaman utama')

@section('content')
<div class="bg-white rounded-xl shadow-md border border-indigo-100 overflow-hidden hover:shadow-lg transition-all duration-300">
    <div class="p-6 border-b border-indigo-100 bg-gradient-to-r from-indigo-50 to-white">
        <h3 class="font-semibold text-indigo-900">Edit Konten Produk</h3>
        <p class="text-sm text-indigo-600 mt-1">Perbarui informasi produk yang akan ditampilkan di halaman utama</p>
    </div>

    <div class="p-6">
        @if ($errors->any())
        <div class="bg-red-50 text-red-700 p-4 rounded-lg mb-6">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('admin.carousels.update', $carousel->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="space-y-6">
                <div>
                    <label for="judul" class="block text-sm font-medium text-indigo-900 mb-2">Nama</label>
                    <input type="text" class="w-full px-4 py-2 border border-indigo-200 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                        id="judul" name="judul" value="{{ $carousel->judul }}" required>
                    <p class="text-sm text-red-600 mt-1">* Kolom nama tidak boleh kosong</p>
                </div>

                <div>
                    <label for="gambar" class="block text-sm font-medium text-indigo-900 mb-2">Gambar</label>
                    @if ($carousel->gambar)
                    <div class="mb-4">
                        <img src="{{ asset('storage/' . $carousel->gambar) }}" alt="{{ $carousel->judul }}"
                            class="w-48 h-32 object-cover rounded-lg border border-indigo-100 shadow-sm">
                        <p class="text-sm text-indigo-600 mt-2">Kosongkan jika tidak ingin mengubah gambar.</p>
                    </div>
                    @endif
                    <input type="file" class="w-full px-4 py-2 border border-indigo-200 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                        id="gambar" name="gambar">
                    <p class="text-sm text-red-600 mt-1">* Format gambar yang diperbolehkan: JPG, JPEG, PNG (Max: 2MB)</p>
                </div>

                <div>
                    <label for="harga_normal" class="block text-sm font-medium text-indigo-900 mb-2">Harga Normal</label>
                    <input type="number" class="w-full px-4 py-2 border border-indigo-200 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                        id="harga_normal" name="harga_normal" value="{{ $carousel->harga_normal }}" required>
                    <p class="text-sm text-red-600 mt-1">* Kolom harga normal tidak boleh kosong</p>
                </div>

                <div>
                    <label for="harga_diskon" class="block text-sm font-medium text-indigo-900 mb-2">Harga Diskon</label>
                    <input type="number" class="w-full px-4 py-2 border border-indigo-200 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                        id="harga_diskon" name="harga_diskon" value="{{ $carousel->harga_diskon }}">
                    <p class="text-sm text-indigo-600 mt-1">Kosongkan jika tidak ada diskon.</p>
                    <p class="text-sm text-red-600 mt-1">* Harga diskon harus lebih kecil dari harga normal</p>
                </div>



                <div class="flex justify-end space-x-3">
                    <a href="{{ route('admin.carousels.index') }}"
                        class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors">
                        Batal
                    </a>
                    <button type="submit"
                        class="px-4 py-2 bg-gradient-to-r from-indigo-600 to-blue-600 text-white rounded-lg hover:from-indigo-700 hover:to-blue-700 transition-colors">
                        Simpan Perubahan
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection