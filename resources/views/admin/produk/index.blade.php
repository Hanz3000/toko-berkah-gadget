@extends('layouts.template')

@section('title', 'Panel Admin - Daftar Produk')

@section('header-title', 'Daftar Produk')
@section('header-subtitle', 'Kelola semua produk Anda')


@section('search-form')
<form action="{{ route('admin.produk.index') }}" method="GET" class="relative">
    <input
        type="text"
        name="search"
        value="{{ request('search') }}"
        placeholder="Cari produk..."
        class="bg-indigo-800 bg-opacity-50 text-sm rounded-lg pl-10 pr-4 py-2 border border-indigo-700 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 w-64 transition-all text-white placeholder-indigo-300">
    <i class="fas fa-search text-indigo-300 absolute left-3 top-2.5"></i>
</form>
@endsection

@section('content')
<!-- Toast Notification Container -->
<div id="toast-container" class="fixed top-4 right-4 z-50 flex flex-col gap-3 max-w-xs"></div>

<!-- Main Content Container -->
<div class="bg-gradient-to-br from-indigo-100 to-blue-50 min-h-screen p-6 rounded-xl">
    <!-- Overview Section -->
    <div class="mb-8">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-lg font-semibold text-indigo-900">Ringkasan</h3>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-gradient-to-br from-indigo-50 to-white rounded-xl shadow-md p-6 border border-indigo-100 hover:shadow-lg transition-all duration-300">
                <div class="flex items-center justify-between mb-4">
                    <h4 class="text-indigo-700 font-medium">Total Produk</h4>
                    <div class=" w-9 h-9 flex items-center justify-center sp-2 rounded-lg bg-indigo-600 text-white shadow-md">
                        <i class="fas fa-box"></i>
                    </div>
                </div>
                <div class="flex items-end justify-between">
                    <div>
                        <h3 class="text-3xl font-bold text-indigo-900">{{ count($produk) }}</h3>
                    </div>
                    <div class="h-16 w-24">
                        <div class="flex items-end justify-between h-full">
                            <div class="w-3 bg-indigo-200 rounded-t-sm h-6"></div>
                            <div class="w-3 bg-indigo-300 rounded-t-sm h-8"></div>
                            <div class="w-3 bg-indigo-400 rounded-t-sm h-10"></div>
                            <div class="w-3 bg-indigo-500 rounded-t-sm h-7"></div>
                            <div class="w-3 bg-indigo-600 rounded-t-sm h-12"></div>
                            <div class="w-3 bg-indigo-700 rounded-t-sm h-14"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-gradient-to-br from-purple-50 to-white rounded-xl shadow-md p-6 border border-purple-100 hover:shadow-lg transition-all duration-300">
                <div class="flex items-center justify-between mb-4">
                    <h4 class="text-purple-700 font-medium">Kategori</h4>
                    <div class=" w-9 h-9 flex items-center justify-center p-2 rounded-lg bg-purple-600 text-white shadow-md">
                        <i class="fas fa-tags"></i>
                    </div>
                </div>
                <div class="flex items-end justify-between">
                    <div>
                        <h3 class="text-3xl font-bold text-purple-900">8</h3>
                    </div>
                    <div class="flex -space-x-2">
                        <div class="h-8 w-8 rounded-full bg-red-500 text-white flex items-center justify-center text-xs shadow-md">S</div>
                        <div class="h-8 w-8 rounded-full bg-green-500 text-white flex items-center justify-center text-xs shadow-md">T</div>
                        <div class="h-8 w-8 rounded-full bg-blue-500 text-white flex items-center justify-center text-xs shadow-md">S</div>
                        <div class="h-8 w-8 rounded-full bg-yellow-500 text-white flex items-center justify-center text-xs shadow-md">+5</div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-gradient-to-br from-amber-50 to-white rounded-xl shadow-md p-6 border border-amber-100 hover:shadow-lg transition-all duration-300">
                <div class="flex items-center justify-between mb-4">
                    <h4 class="text-amber-700 font-medium">Total Pengguna</h4>
                    <div class="w-9 h-9 flex items-center justify-center p-2 rounded-lg bg-amber-600 text-white shadow-md">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                <div class="flex items-end justify-between">
                    <div>
                        <h3 class="text-3xl font-bold text-amber-900">{{ $jumlahUser }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Management Section -->
    <div class="bg-white rounded-xl shadow-md border border-indigo-100 overflow-hidden hover:shadow-lg transition-all duration-300">
        <div class="flex items-center justify-between p-6 border-b border-indigo-100 bg-gradient-to-r from-indigo-50 to-white">
            <div>
                <h3 class="font-semibold text-indigo-900">Daftar Produk</h3>
                <p class="text-sm text-indigo-600 mt-1">Kelola dan monitor semua produk Anda</p>
            </div>
            <div class="flex items-center space-x-3">
                <div class="relative">
                    <select id="kategoriFilter" onchange="filterProduk()" class="bg-indigo-50 text-sm rounded-lg pl-3 pr-8 py-2 border border-indigo-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 appearance-none text-indigo-700">
                        <option value="semua">Semua Kategori</option>
                        <option value="Smartphone">Smartphone</option>
                        <option value="Smartwatch">Smartwatch</option>
                        <option value="Aksesoris">Aksesoris</option>
                        <option value="Second">Second</option>
                    </select>
                    <i class="fas fa-chevron-down text-xs absolute right-3 top-3 text-indigo-500 pointer-events-none"></i>
                </div>
                <a href="{{ route('admin.produk.create') }}" class="px-4 py-2 bg-gradient-to-r from-indigo-600 to-blue-600 text-white text-sm rounded-lg hover:from-indigo-700 hover:to-blue-700 btn-effect flex items-center space-x-1 shadow-md">
                    <i class="fas fa-plus"></i>
                    <span>Produk Baru</span>
                </a>
            </div>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full table-hover">
                <thead>
                    <tr class="bg-indigo-50 text-indigo-700 text-sm border-b border-indigo-100">
                        <th class="py-4 px-6 font-medium text-left">No</th>
                        <th class="py-4 px-6 font-medium text-left">Produk</th>
                        <th class="py-4 px-6 font-medium text-left">Kategori</th>
                        <th class="py-4 px-6 font-medium text-left">Harga</th>
                        <th class="py-4 px-6 font-medium text-left">Status</th>
                        <th class="py-4 px-6 font-medium text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $item)
                    <tr class="border-b border-indigo-50 hover:bg-indigo-50 transition-colors">
                        <td class="py-4 px-6 text-sm text-indigo-600">{{ $loop->iteration }}</td>
                        <td class="py-4 px-6">
                            <div class="flex items-center">
                                @if ($item->gambar)
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_produk }}" class="w-12 h-12 rounded-lg object-cover mr-4 border border-indigo-100 shadow-sm">
                                @else
                                <div class="w-12 h-12 rounded-lg bg-indigo-100 flex items-center justify-center mr-4 border border-indigo-200">
                                    <i class="fas fa-image text-indigo-400"></i>
                                </div>
                                @endif
                                <div>
                                    <p class="font-medium text-indigo-900">{{ $item->nama_produk }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-6">
                            <span class="px-3 py-1.5 bg-blue-100 text-blue-700 rounded-full text-xs font-medium shadow-sm">{{ $item->kategori }}</span>
                        </td>
                        <td class="py-4 px-6 font-medium text-indigo-900">Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                        <td class="py-4 px-6">
                            <span class="px-3 py-1.5 bg-green-100 text-green-700 rounded-full text-xs font-medium flex items-center w-fit space-x-1 shadow-sm">
                                <span class="h-1.5 w-1.5 rounded-full bg-green-500"></span>
                                <span>Tersedia</span>
                            </span>
                        </td>
                        <td class="py-4 px-6 text-right">
                            <div class="flex items-center justify-end space-x-3">
                                <a href="{{ route('admin.produk.edit', $item->id) }}"
                                    class="w-9 h-9 flex items-center justify-center bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 transition-colors shadow-sm">
                                    <i class="fas fa-edit text-sm"></i>
                                </a>
                                <form action="{{ route('admin.produk.destroy', $item->id) }}" method="POST" class="inline delete-form" data-product-name="{{ $item->nama_produk }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" onclick="confirmDelete(this)"
                                        class="w-9 h-9 flex items-center justify-center bg-red-100 text-red-700 rounded-lg hover:bg-red-200 transition-colors shadow-sm">
                                        <i class="fas fa-trash text-sm"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div id="deleteModal" class="fixed inset-0 z-50 flex items-center justify-center hidden">
    <div class="absolute inset-0 bg-black bg-opacity-30 backdrop-blur-sm" onclick="closeDeleteModal()"></div>
    <div class="bg-white rounded-xl shadow-lg p-6 max-w-md w-full mx-4 relative transform transition-all">
        <div class="text-center mb-4">
            <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-exclamation-triangle text-red-500 text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-2">Konfirmasi Hapus</h3>
            <p class="text-gray-600" id="deleteConfirmationText">Apakah Anda yakin ingin menghapus produk ini?</p>
        </div>
        <div class="flex space-x-3">
            <button onclick="closeDeleteModal()" class="flex-1 py-2 px-4 bg-gray-100 text-gray-700 rounded-lg font-medium hover:bg-gray-200 transition-colors">
                Batal
            </button>
            <button id="confirmDeleteBtn" class="flex-1 py-2 px-4 bg-red-600 text-white rounded-lg font-medium hover:bg-red-700 transition-colors">
                Ya, Hapus
            </button>
        </div>
    </div>
</div>

<script>
    // Filter products by category
    function filterProduk() {
        const kategori = document.getElementById('kategoriFilter').value.trim();
        const rows = document.querySelectorAll('tbody tr');

        rows.forEach(row => {
            const kategoriCell = row.querySelector('td:nth-child(3) span');
            const kategoriText = kategoriCell.textContent.trim();

            if (kategori.toLowerCase() === 'semua') {
                row.style.display = '';
            } else {
                if (kategoriText.toLowerCase() === kategori.toLowerCase()) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            }
        });
    }

    // Toast notification function
    function showToast(message, type = 'success') {
        const toastContainer = document.getElementById('toast-container');

        // Create toast element
        const toast = document.createElement('div');
        toast.className = 'flex items-center p-4 mb-3 rounded-lg shadow-lg transform transition-all duration-300 opacity-0 translate-y-2 max-w-xs';

        // Set background and icon based on type
        let iconClass, bgClass, borderClass;

        if (type === 'success') {
            bgClass = 'bg-gradient-to-r from-green-50 to-green-100';
            borderClass = 'border-l-4 border-green-500';
            iconClass = 'text-green-500 fas fa-check-circle';
        } else if (type === 'error') {
            bgClass = 'bg-gradient-to-r from-red-50 to-red-100';
            borderClass = 'border-l-4 border-red-500';
            iconClass = 'text-red-500 fas fa-exclamation-circle';
        } else if (type === 'warning') {
            bgClass = 'bg-gradient-to-r from-yellow-50 to-yellow-100';
            borderClass = 'border-l-4 border-yellow-500';
            iconClass = 'text-yellow-500 fas fa-exclamation-triangle';
        } else {
            bgClass = 'bg-gradient-to-r from-blue-50 to-blue-100';
            borderClass = 'border-l-4 border-blue-500';
            iconClass = 'text-blue-500 fas fa-info-circle';
        }

        toast.classList.add(...bgClass.split(' '), ...borderClass.split(' '));

        // Toast content
        toast.innerHTML = `
            <div class="flex items-center justify-between w-full">
                <div class="flex items-center">
                    <i class="${iconClass} text-xl mr-3"></i>
                    <p class="text-gray-800 font-medium text-sm">${message}</p>
                </div>
                <button onclick="this.parentElement.parentElement.remove()" class="text-gray-400 hover:text-gray-600 transition-colors ml-2">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        `;

        // Add to container
        toastContainer.appendChild(toast);

        // Trigger animation
        setTimeout(() => {
            toast.classList.remove('opacity-0', 'translate-y-2');
            toast.classList.add('opacity-100', 'translate-y-0');
        }, 10);

        // Auto remove after timeout
        setTimeout(() => {
            toast.classList.add('opacity-0', '-translate-y-2');
            setTimeout(() => {
                toast.remove();
            }, 300);
        }, 5000);
    }

    // Show delete confirmation modal
    function confirmDelete(button) {
        const form = button.closest('.delete-form');
        const productName = form.dataset.productName;
        const modal = document.getElementById('deleteModal');

        // Update confirmation text with product name
        document.getElementById('deleteConfirmationText').textContent = `Apakah Anda yakin ingin menghapus produk "${productName}"?`;

        // Set up the confirm button
        document.getElementById('confirmDeleteBtn').onclick = function() {
            // Submit the form
            form.submit();

            // Hide modal
            closeDeleteModal();

            // Show toast - this won't actually show until after redirect, so for real implementation
            // you would need backend flash message to show toast after redirect
            showToast(`Produk "${productName}" berhasil dihapus!`, 'success');
        };

        // Show modal
        modal.classList.remove('hidden');
    }

    // Close delete confirmation modal
    function closeDeleteModal() {
        const modal = document.getElementById('deleteModal');
        modal.classList.add('hidden');
    }

    document.addEventListener('DOMContentLoaded', function() {
        @if(session('success'))
        showToast(@json(session('success')), 'success');
        @endif

        @if(session('error'))
        showToast(@json(session('error')), 'error');
        @endif
    });
</script>
@endsection