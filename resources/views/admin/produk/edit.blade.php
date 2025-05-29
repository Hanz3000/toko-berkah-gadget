@extends('layouts.template')

@section('title', 'Edit Produk')

@section('header-title', 'Edit Produk')
@section('header-subtitle', 'Perbarui informasi produk Anda')

@section('content')
<div class="max-w-5xl mx-auto p-6">
    <div class="bg-gradient-to-br from-indigo-50 to-blue-50 rounded-2xl shadow-lg p-8 animate-fadeIn border border-indigo-100">
        <div class="flex items-center justify-between mb-8">
            <div class="flex items-center gap-3">
                <div class="bg-indigo-600 p-2 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-800">Edit Produk</h2>
            </div>
        </div>

        <form action="{{ route('admin.produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="p-6 border border-gray-100 rounded-xl bg-gray-50">
                <h3 class="font-semibold text-lg text-gray-700 mb-4 flex items-center">
                    <span class="bg-indigo-600 text-white rounded-full w-6 h-6 flex items-center justify-center mr-2 text-sm">1</span>
                    Informasi Produk
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="form-group">
                        <label for="nama_produk" class="block mb-2 text-sm font-medium text-gray-700">Nama Produk</label>
                        <div class="relative">
                            <input type="text" name="nama_produk" id="nama_produk" value="{{ $produk->nama_produk }}" required
                                class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 pl-10"
                                placeholder="Masukkan nama produk">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="kategori" class="block mb-2 text-sm font-medium text-gray-700">Kategori</label>
                        <div class="relative">
                            <select name="kategori" id="kategori"
                                class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 pl-10 appearance-none">
                                <option value="smartphone" {{ $produk->kategori == 'smartphone' ? 'selected' : '' }}>Smartphone</option>
                                <option value="tablet" {{ $produk->kategori == 'tablet' ? 'selected' : '' }}>Tablet</option>
                                <option value="smartwatch" {{ $produk->kategori == 'smartwatch' ? 'selected' : '' }}>Smartwatch</option>
                                <option value="aksesoris" {{ $produk->kategori == 'aksesoris' ? 'selected' : '' }}>Aksesoris</option>
                                <option value="second" {{ $produk->kategori == 'second' ? 'selected' : '' }}>Second</option>
                            </select>
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6">
                    <label for="harga" class="block mb-2 text-sm font-medium text-gray-700">Harga (Rp)</label>
                    <div class="relative">
                        <input type="number" name="harga" id="harga" value="{{ $produk->harga }}" required
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500 pl-10"
                            placeholder="Masukkan harga produk">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="mt-6">
                    <label for="warna" class="block mb-2 text-sm font-medium text-gray-700">Warna</label>
                    <input type="text" name="warna" id="warna" value="{{ $produk->warna }}" placeholder="Masukkan warna produk, contoh: black, red, #FF0000"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    <p class="mt-1 text-xs text-gray-500">Masukkan nama warna (misal: black, red) atau kode warna hex (misal: #FF0000)</p>
                </div>


                <div class="mt-6">
                    <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-700">Deskripsi Produk</label>
                    <textarea name="deskripsi" id="deskripsi" rows="4"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        placeholder="Deskripsikan produk secara detail...">{{ $produk->deskripsi }}</textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                    <div class="form-group">
                        <label for="kekurangan" class="block mb-2 text-sm font-medium text-gray-700">Kekurangan</label>
                        <textarea name="kekurangan" id="kekurangan" rows="4"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            placeholder="Tambahkan kekurangan produk jika ada...">{{ $produk->kekurangan }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="kelengkapan" class="block mb-2 text-sm font-medium text-gray-700">Kelengkapan</label>
                        <textarea name="kelengkapan" id="kelengkapan" rows="4"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            placeholder="Masukkan kelengkapan produk...">{{ $produk->kelengkapan }}</textarea>
                    </div>
                </div>

                <div class="mt-6">
                    <label class="block mb-2 text-sm font-medium text-gray-700">Gambar Produk</label>
                    <div class="mt-1 flex items-center space-x-4">
                        @if ($produk->gambar)
                        <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama_produk }}"
                            class="w-24 h-24 object-cover rounded-lg border border-gray-200 shadow-sm">
                        @endif
                        <div class="flex-1">
                            <input type="file" name="gambar" id="gambar"
                                class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                            <p class="mt-1 text-xs text-gray-500">Format: JPG, PNG. Ukuran max: 2MB</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-end space-x-4 mt-8">
                <a href="{{ route('admin.produk.index') }}"
                    class="px-6 py-3 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                    Batal
                </a>
                <button type="submit"
                    class="px-6 py-3 bg-gradient-to-r from-indigo-500 to-blue-500 text-white rounded-lg hover:from-indigo-600 hover:to-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-lg">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection