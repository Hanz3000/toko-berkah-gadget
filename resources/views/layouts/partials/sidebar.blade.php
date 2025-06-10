<!-- Sidebar Admin yang Sudah Diperindah -->

<style>
    /* Custom scrollbar untuk sidebar */
    .sidebar-scroll {
        overflow-y: auto;
        scrollbar-width: thin;
        scrollbar-color: rgba(255, 255, 255, 0.2) rgba(255, 255, 255, 0.05);
    }

    /* Untuk Chrome, Edge, dan Safari */
    .sidebar-scroll::-webkit-scrollbar {
        width: 6px;
    }

    .sidebar-scroll::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 8px;
    }

    .sidebar-scroll::-webkit-scrollbar-thumb {
        background-color: rgba(255, 255, 255, 0.2);
        border-radius: 8px;
        transition: background-color 0.3s;
    }

    .sidebar-scroll::-webkit-scrollbar-thumb:hover {
        background-color: rgba(255, 255, 255, 0.35);
    }
</style>
<div
    x-transition:enter="transform transition-transform duration-300"
    x-transition:enter-start="-translate-x-full"
    x-transition:enter-end="translate-x-0"
    x-transition:leave="transform transition-transform duration-300"
    x-transition:leave-start="translate-x-0"
    x-transition:leave-end="-translate-x-full"
    x-show="isSidebarOpen"
    class="fixed inset-y-0 z-30 flex w-80 bg-indigo-800 text-white border-r border-blue-700 shadow-lg backdrop-blur-sm transform transition-transform duration-300 ease-in-out"
    style="filter: drop-shadow(10px 0 10px #00000030); font-family: 'Inter', sans-serif">
    <!-- Background Shape -->
    <svg class="absolute inset-0 w-full h-full text-white opacity-5 pointer-events-none" preserveAspectRatio="none"
        viewBox="0 0 309 800" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M268.487 0H0V800H247.32C207.957 725 207.975 492.294 268.487 367.647C329 243 314.906 53.4314 268.487 0Z" />
    </svg>

    <div class="z-10 flex flex-col flex-1 p-4 sidebar-scroll">
        <!-- Header -->
        <div class="flex items-center justify-between flex-shrink-0 p-2 mb-4">
            <a href="#" class="flex items-center space-x-3 group">
                <div
                    class="w-10 h-10 rounded-full bg-gradient-to-r from-yellow-400 to-orange-500 flex items-center justify-center text-white font-medium text-lg shadow-lg group-hover:shadow-orange-500/50 transition-all duration-300">
                    {{ substr(Auth::user()->name, 0, 1) }}
                </div>
                <span class="text-xl font-bold bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">
                    Admin Panel
                </span>
            </a>
            <button @click="isSidebarOpen = false"
                class="p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 hover:bg-indigo-700/50 transition-all duration-300">
                <svg class="w-6 h-6 text-indigo-300 hover:text-yellow-300 transition-colors duration-300"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12" />
                </svg>
                <span class="sr-only">Close sidebar</span>
            </button>
        </div>

        <!-- Navigation -->
        <nav class="flex flex-col flex-1 w-full space-y-4">

            <!-- Menu Utama -->
            <div>
                <p class="text-indigo-300 text-xs uppercase tracking-wider mb-3 font-semibold pl-3">Menu Utama</p>
                <a href="{{ route('admin.produk.index') }}"
                    class="relative flex items-center space-x-3 p-3 rounded-lg transition-all duration-300
                    {{ request()->routeIs('admin.produk.index') ? 'bg-indigo-700/70 backdrop-blur-sm ring-1 ring-white/10 text-yellow-300 shadow-lg shadow-indigo-700/50' : 'text-white hover:bg-indigo-700/50 hover:text-yellow-300' }}">
                    @if(request()->routeIs('admin.produk.index'))
                    <span class="w-1 h-6 bg-yellow-400 rounded-full absolute left-0 top-1/2 -translate-y-1/2"></span>
                    @endif
                    <div
                        class="w-8 h-8 flex items-center justify-center rounded-lg transform hover:scale-110 transition-transform duration-300
                        {{ request()->routeIs('admin.produk.index') ? 'bg-indigo-600' : 'bg-indigo-700/70' }}">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </div>
                    <span class="font-medium">Dashboard</span>
                </a>
            </div>

            <!-- Produk -->
            <div>
                <p class="text-indigo-300 text-xs uppercase tracking-wider mb-3 font-semibold pl-3">Produk</p>
                <a href="{{ route('admin.produk.create') }}"
                    class="relative flex items-center space-x-3 p-3 rounded-lg transition-all duration-300
                    {{ request()->routeIs('admin.produk.create') ? 'bg-indigo-700/70 backdrop-blur-sm ring-1 ring-white/10 text-yellow-300 shadow-lg shadow-indigo-700/50' : 'text-white hover:bg-indigo-700/50 hover:text-yellow-300' }}">
                    @if(request()->routeIs('admin.produk.create'))
                    <span class="w-1 h-6 bg-yellow-400 rounded-full absolute left-0 top-1/2 -translate-y-1/2"></span>
                    @endif
                    <div
                        class="w-8 h-8 flex items-center justify-center rounded-lg transform hover:scale-110 transition-transform duration-300
                        {{ request()->routeIs('admin.produk.create') ? 'bg-indigo-600' : 'bg-indigo-700/70' }}">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <span class="font-medium">Tambah Produk</span>

                </a>

                <a href="{{ route('admin.carousels.index') }}"
                    class="relative flex items-center space-x-3 p-3 rounded-lg transition-all duration-300
   {{ request()->routeIs('admin.carousels.index') ? 'bg-indigo-700/70 backdrop-blur-sm ring-1 ring-white/10 text-yellow-300 shadow-lg shadow-indigo-700/50' : 'text-white hover:bg-indigo-700/50 hover:text-yellow-300' }}">
                    @if(request()->routeIs('admin.carousels.index'))
                    <span class="w-1 h-6 bg-yellow-400 rounded-full absolute left-0 top-1/2 -translate-y-1/2"></span>
                    @endif
                    <div
                        class="w-8 h-8 flex items-center justify-center rounded-lg transform hover:scale-110 transition-transform duration-300
        {{ request()->routeIs('admin.carousels.index') ? 'bg-indigo-600' : 'bg-indigo-700/70' }}">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <span class="font-medium">Konten</span>
                </a>

            </div>

            <!-- Management User -->
            <div>
                <p class="text-indigo-300 text-xs uppercase tracking-wider mb-3 font-semibold pl-3">Management User</p>
                <a href="{{ route('admin.users.index') }}"
                    class="relative flex items-center space-x-3 p-3 rounded-lg transition-all duration-300
                    {{ request()->routeIs('admin.users.index') ? 'bg-indigo-700/70 backdrop-blur-sm ring-1 ring-white/10 text-yellow-300 shadow-lg shadow-indigo-700/50' : 'text-white hover:bg-indigo-700/50 hover:text-yellow-300' }}">
                    @if(request()->routeIs('admin.users.index'))
                    <span class="w-1 h-6 bg-yellow-400 rounded-full absolute left-0 top-1/2 -translate-y-1/2"></span>
                    @endif
                    <div
                        class="w-8 h-8 flex items-center justify-center rounded-lg transform hover:scale-110 transition-transform duration-300
                        {{ request()->routeIs('admin.users.index') ? 'bg-indigo-600' : 'bg-indigo-700/70' }}">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <span class="font-medium">Daftar User</span>
                </a>

                @if(Auth::user()->role === 'superadmin')
                <a href="{{ route('admin.produk.tambah_admin') }}"
                    class="relative flex items-center space-x-3 p-3 rounded-lg transition-all duration-300
                    {{ request()->routeIs('admin.produk.tambah_admin') ? 'bg-indigo-700/70 backdrop-blur-sm ring-1 ring-white/10 text-yellow-300 shadow-lg shadow-indigo-700/50' : 'text-white hover:bg-indigo-700/50 hover:text-yellow-300' }}">
                    @if(request()->routeIs('admin.produk.tambah_admin'))
                    <span class="w-1 h-6 bg-yellow-400 rounded-full absolute left-0 top-1/2 -translate-y-1/2"></span>
                    @endif
                    <div
                        class="w-8 h-8 flex items-center justify-center rounded-lg transform hover:scale-110 transition-transform duration-300
                        {{ request()->routeIs('admin.produk.tambah_admin') ? 'bg-indigo-600' : 'bg-indigo-700/70' }}">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <span class="font-medium">Tambah Admin</span>
                </a>
                @endif

                <a href="{{ route('admin.produk.pesan-pengunjung') }}"
                    class="relative flex items-center space-x-3 p-3 rounded-lg transition-all duration-300
    {{ request()->routeIs('admin.produk.pesan-pengunjung') ? 'bg-indigo-700/70 backdrop-blur-sm ring-1 ring-white/10 text-yellow-300 shadow-lg shadow-indigo-700/50' : 'text-white hover:bg-indigo-700/50 hover:text-yellow-300' }}">
                    @if(request()->routeIs('admin.produk.pesan-pengunjung'))
                    <span class="w-1 h-6 bg-yellow-400 rounded-full absolute left-0 top-1/2 -translate-y-1/2"></span>
                    @endif
                    <div
                        class="w-8 h-8 flex items-center justify-center rounded-lg transform hover:scale-110 transition-transform duration-300
        {{ request()->routeIs('admin.produk.pesan-pengunjung') ? 'bg-indigo-600' : 'bg-indigo-700/70' }}">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8h2a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V10a2 2 0 012-2h2M12 15l3-3m0 0l-3-3m3 3H9" />
                        </svg>
                    </div>
                    <span class="font-medium">Pesan Pengunjung</span>
                </a>

            </div>
        </nav>

        <!-- Footer -->
        <div class="flex-shrink-0 p-4 mt-4 border-t border-indigo-700/50">
            <form action="{{ route('logout') }}" method="POST" class="inline w-full">
                @csrf
                <button type="submit"
                    class="flex items-center space-x-3 w-full p-3 rounded-lg text-indigo-300 hover:text-red-400 hover:bg-red-500/10 hover:scale-105 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-red-500/50">
                    <div class="w-8 h-8 flex items-center justify-center rounded-lg bg-indigo-700/50">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                    </div>
                    <span class="font-medium">Logout</span>
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Inter Font -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

<!-- AlpineJS Init -->
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('setup', () => ({
            isSidebarOpen: true,
            toggleSidebar() {
                this.isSidebarOpen = !this.isSidebarOpen;
            }
        }));
    });
</script>