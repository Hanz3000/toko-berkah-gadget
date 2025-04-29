@extends('layouts.template')

@section('title', 'Panel Admin - Daftar User')

@section('header-title', 'Daftar User')
@section('header-subtitle', 'Kelola semua pengguna terdaftar')

@section('content')
<!-- User Management Section -->
<div class="bg-white rounded-xl shadow-md border border-indigo-100 overflow-hidden hover:shadow-lg transition-all duration-300">
    <div class="flex items-center justify-between p-6 border-b border-indigo-100 bg-gradient-to-r from-indigo-50 to-white">
        <div>
            <h3 class="font-semibold text-indigo-900">Daftar User Terdaftar</h3>
            <p class="text-sm text-indigo-600 mt-1">Kelola dan monitor semua pengguna sistem</p>
        </div>
        <div class="flex items-center space-x-3">
            <div class="relative">
                <select class="bg-indigo-50 text-sm rounded-lg pl-3 pr-8 py-2 border border-indigo-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 appearance-none text-indigo-700">
                    <option>Semua Role</option>
                    <option>Admin</option>
                    <option>User</option>
                    <option>Superadmin</option>
                </select>
                <i class="fas fa-chevron-down text-xs absolute right-3 top-3 text-indigo-500 pointer-events-none"></i>
            </div>
            @if(Auth::user()->role === 'superadmin')
            <a href="{{ route('admin.produk.tambah_admin') }}" class="px-4 py-2 bg-gradient-to-r from-indigo-600 to-blue-600 text-white text-sm rounded-lg hover:from-indigo-700 hover:to-blue-700 btn-effect flex items-center space-x-1 shadow-md">
                <i class="fas fa-user-plus"></i>
                <span>Tambah Admin</span>
            </a>
            @endif
        </div>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="min-w-full table-hover">
            <thead>
                <tr class="bg-indigo-50 text-indigo-700 text-sm border-b border-indigo-100">
                    <th class="py-4 px-6 font-medium text-left">No</th>
                    <th class="py-4 px-6 font-medium text-left">Nama</th>
                    <th class="py-4 px-6 font-medium text-left">Email</th>
                    <th class="py-4 px-6 font-medium text-left">Role</th>
                    <th class="py-4 px-6 font-medium text-left">Terdaftar Sejak</th>
                    <th class="py-4 px-6 font-medium text-right">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                <tr class="border-b border-indigo-50 hover:bg-indigo-50 transition-colors">
                    <td class="py-4 px-6 text-sm text-indigo-600">{{ $loop->iteration }}</td>
                    <td class="py-4 px-6">
                        <div class="flex items-center">
                            <div class="h-10 w-10 rounded-full bg-gradient-to-r from-indigo-500 to-blue-500 flex items-center justify-center text-white font-medium text-sm shadow-md mr-3">
                                {{ substr($user->name, 0, 1) }}
                            </div>
                            <div>
                                <p class="font-medium text-indigo-900">{{ $user->name }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-4 px-6 text-indigo-800">{{ $user->email }}</td>
                    <td class="py-4 px-6">
                        @if($user->role === 'superadmin')
                        <span class="px-3 py-1.5 bg-purple-100 text-purple-700 rounded-full text-xs font-medium shadow-sm">Superadmin</span>
                        @elseif($user->role === 'admin')
                        <span class="px-3 py-1.5 bg-blue-100 text-blue-700 rounded-full text-xs font-medium shadow-sm">Admin</span>
                        @else
                        <span class="px-3 py-1.5 bg-green-100 text-green-700 rounded-full text-xs font-medium shadow-sm">User</span>
                        @endif
                    </td>
                    <td class="py-4 px-6 text-indigo-800">{{ $user->created_at->format('d M Y') }}</td>
                    <td class="py-4 px-6 text-right">
                        <div class="flex items-center justify-end space-x-3">
                            <a href="#" class="p-2 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 transition-colors shadow-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            @if(Auth::user()->role === 'superadmin' && Auth::id() !== $user->id)
                            <form action="#" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Yakin ingin menghapus user ini?')" class="p-2 bg-red-100 text-red-700 rounded-lg hover:bg-red-200 transition-colors shadow-sm">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                            @endif
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="p-6 text-center text-indigo-500">Belum ada user yang terdaftar.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection