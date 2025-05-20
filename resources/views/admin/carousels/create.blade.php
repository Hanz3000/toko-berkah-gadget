@extends('layouts.template')

@section('title', 'Kelola Konten Promosi')

@section('content')
<div class="bg-white rounded-xl shadow-md p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">Tambah Konten Promosi Baru</h1>
        <a href="{{ route('admin.carousels.index') }}" class="text-gray-600 hover:text-gray-800">
            <i class="fas fa-times"></i>
        </a>
    </div>

    <form action="{{ route('admin.carousels.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="space-y-6">
            <div class="form-group">
                <label for="judul" class="block text-sm font-medium text-gray-700 mb-2">Nama</label>
                <input type="text"
                    class="w-full px-4 py-2 bg-white border border-gray-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                    id="judul"
                    name="judul"
                    required>
            </div>

            <div class="form-group">
                <label for="gambar" class="block text-sm font-medium text-gray-700 mb-2">Gambar</label>
                <input type="file"
                    class="w-full px-4 py-2 bg-white border border-gray-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                    id="gambar"
                    name="gambar"
                    required>
            </div>

            <div class="form-group">
                <label for="harga_normal" class="block text-sm font-medium text-gray-700 mb-2">Harga Normal</label>
                <input type="number"
                    class="w-full px-4 py-2 bg-white border border-gray-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                    id="harga_normal"
                    name="harga_normal"
                    required>
            </div>

            <div class="form-group">
                <label for="harga_diskon" class="block text-sm font-medium text-gray-700 mb-2">Harga Diskon</label>
                <input type="number"
                    class="w-full px-4 py-2 bg-white border border-gray-300 rounded-lg focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                    id="harga_diskon"
                    name="harga_diskon">
                <small class="text-gray-500 mt-1 block">Kosongkan jika tidak ada diskon.</small>
            </div>

            <div class="flex justify-end space-x-3">
                <a href="{{ route('admin.carousels.index') }}"
                    class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors">
                    Batal
                </a>
                <button type="submit"
                    class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                    Simpan
                </button>
            </div>
        </div>
    </form>
</div>
@endsection