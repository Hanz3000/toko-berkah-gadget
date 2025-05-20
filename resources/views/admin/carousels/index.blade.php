@extends('layouts.template')

@section('title', 'Panel Admin - Daftar Carousel')

@section('header-title', 'Daftar Carousel')
@section('header-subtitle', 'Kelola semua carousel untuk halaman utama')

@section('content')
<!-- Carousel Management Section -->
<div class="bg-white rounded-xl shadow-md border border-indigo-100 overflow-hidden hover:shadow-lg transition-all duration-300">
    <div class="flex items-center justify-between p-6 border-b border-indigo-100 bg-gradient-to-r from-indigo-50 to-white">
        <div>
            <h3 class="font-semibold text-indigo-900">Daftar Carousel</h3>
            <p class="text-sm text-indigo-600 mt-1">Kelola dan monitor semua carousel untuk halaman utama</p>
        </div>
        <div class="flex items-center space-x-3">
            <a href="{{ route('admin.carousels.create') }}" class="px-4 py-2 bg-gradient-to-r from-indigo-600 to-blue-600 text-white text-sm rounded-lg hover:from-indigo-700 hover:to-blue-700 btn-effect flex items-center space-x-1 shadow-md">
                <i class="fas fa-plus"></i>
                <span>Tambah Baru</span>
            </a>
        </div>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="min-w-full table-hover">
            <thead>
                <tr class="bg-indigo-50 text-indigo-700 text-sm border-b border-indigo-100">
                    <th class="py-4 px-6 font-medium text-left">No</th>
                    <th class="py-4 px-6 font-medium text-left">Judul</th>
                    <th class="py-4 px-6 font-medium text-left">Gambar</th>
                    <th class="py-4 px-6 font-medium text-right">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($carousels) && count($carousels) > 0)
                @foreach ($carousels as $carousel)
                <tr class="border-b border-indigo-50 hover:bg-indigo-50 transition-colors">
                    <td class="py-4 px-6 text-sm text-indigo-600">{{ $loop->iteration }}</td>
                    <td class="py-4 px-6 font-medium text-indigo-900">{{ $carousel->judul }}</td>
                    <td class="py-4 px-6">
                        <img src="{{ asset('storage/' . $carousel->gambar) }}" alt="{{ $carousel->judul }}" class="w-24 h-16 object-cover rounded-lg border border-indigo-100 shadow-sm">
                    </td>
                    <td class="py-4 px-6 text-right">
                        <div class="flex items-center justify-end space-x-3">
                            <a href="{{ route('admin.carousels.edit', $carousel->id) }}" class="w-9 h-9 flex items-center justify-center bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 transition-colors shadow-sm">
                                <i class="fas fa-edit text-sm"></i>
                            </a>
                            <form action="{{ route('admin.carousels.destroy', $carousel->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus?')" class="w-9 h-9 flex items-center justify-center bg-red-100 text-red-700 rounded-lg hover:bg-red-200 transition-colors shadow-sm">
                                    <i class="fas fa-trash text-sm"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="4" class="p-6 text-center text-indigo-500">Tidak ada data carousel.</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection