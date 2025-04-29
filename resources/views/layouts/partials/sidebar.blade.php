<div id="sidebar" class="sidebar bg-gradient-to-br from-blue-800 via-indigo-800 to-blue-900 text-white w-64 min-h-screen fixed border-r border-blue-700 z-30 transform transition-transform duration-300 -translate-x-full md:translate-x-0">
    <div class="p-5 border-b border-blue-700">
        <div class="flex items-center space-x-3">
            <button id="sidebarToggle" class="h-10 w-10 text-indigo-400 hover:text-yellow-300 focus:outline-none transition-all duration-300">
                <i class="fas fa-bars text-2xl"></i>
            </button>
            <h1 class="text-xl font-bold bg-gradient-to-r from-blue-300 to-indigo-200 bg-clip-text text-transparent">Panel Admin</h1>
        </div>
    </div>

    <div class="px-3 py-4">
        <nav>
            <!-- Menu Sidebar -->
            <div class="mb-4">
                <p class="text-indigo-300 text-xs uppercase tracking-wider ml-4 mb-2 font-semibold">Menu Utama</p>
                <a href="{{ route('user.dashboard') }}" class="flex items-center space-x-3 text-white p-3 rounded-lg mb-1 hover:bg-indigo-700 hover:text-yellow-300 transition-all duration-300 group">
                    <div class="w-8 h-8 flex items-center justify-center rounded-md bg-indigo-700 group-hover:bg-indigo-600 transition-all duration-300">
                        <i class="fas fa-home text-lg"></i>
                    </div>
                    <span class="font-medium">Dashboard</span>
                </a>
            </div>

            <div class="mb-4">
                <p class="text-indigo-300 text-xs uppercase tracking-wider ml-4 mb-2 font-semibold">Produk</p>
                <a href="{{ route('admin.produk.index') }}" class="flex items-center space-x-3 {{ request()->routeIs('admin.produk.index') ? 'bg-indigo-700 text-yellow-300' : 'text-white hover:bg-indigo-700 hover:text-yellow-300' }} p-3 rounded-lg mb-1 transition-all duration-300 group">
                    <div class="w-8 h-8 flex items-center justify-center rounded-md {{ request()->routeIs('admin.produk.index') ? 'bg-indigo-600' : 'bg-indigo-700 group-hover:bg-indigo-600' }} transition-all duration-300">
                        <i class="fas fa-box text-lg"></i>
                    </div>
                    <span class="font-medium">Daftar Produk</span>
                </a>
                <a href="{{ route('admin.produk.create') }}" class="flex items-center space-x-3 {{ request()->routeIs('admin.produk.create') ? 'bg-indigo-700 text-yellow-300' : 'text-white hover:bg-indigo-700 hover:text-yellow-300' }} p-3 rounded-lg mb-1 transition-all duration-300 group">
                    <div class="w-8 h-8 flex items-center justify-center rounded-md {{ request()->routeIs('admin.produk.create') ? 'bg-indigo-600' : 'bg-indigo-700 group-hover:bg-indigo-600' }} transition-all duration-300">
                        <i class="fas fa-plus-circle text-lg"></i>
                    </div>
                    <span class="font-medium">Tambah Produk</span>
                </a>
            </div>

            <div class="mb-4">
                <p class="text-indigo-300 text-xs uppercase tracking-wider ml-4 mb-2 font-semibold">Management User</p>
                <a href="{{ route('admin.users.index') }}" class="flex items-center space-x-3 {{ request()->routeIs('admin.users.index') ? 'bg-indigo-700 text-yellow-300' : 'text-white hover:bg-indigo-700 hover:text-yellow-300' }} p-3 rounded-lg mb-1 transition-all duration-300 group">
                    <div class="w-8 h-8 flex items-center justify-center rounded-md {{ request()->routeIs('admin.users.index') ? 'bg-indigo-600' : 'bg-indigo-700 group-hover:bg-indigo-600' }} transition-all duration-300">
                        <i class="fas fa-users text-lg"></i>
                    </div>
                    <span class="font-medium">Daftar User</span>
                </a>
                @if(Auth::user()->role === 'superadmin')
                <a href="{{ route('admin.produk.tambah_admin') }}" class="flex items-center space-x-3 {{ request()->routeIs('admin.produk.tambah_admin') ? 'bg-indigo-700 text-yellow-300' : 'text-white hover:bg-indigo-700 hover:text-yellow-300' }} p-3 rounded-lg mb-1 transition-all duration-300 group">
                    <div class="w-8 h-8 flex items-center justify-center rounded-md {{ request()->routeIs('admin.produk.tambah_admin') ? 'bg-indigo-600' : 'bg-indigo-700 group-hover:bg-indigo-600' }} transition-all duration-300">
                        <i class="fas fa-user-shield text-lg"></i>
                    </div>
                    <span class="font-medium">Tambah Admin</span>
                </a>
                @endif
            </div>
        </nav>
    </div>

    <div class="absolute bottom-0 left-0 right-0 p-4 border-t border-blue-700 bg-blue-900 bg-opacity-70 backdrop-blur-sm">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <div class="h-10 w-10 rounded-full bg-gradient-to-r from-yellow-400 to-orange-500 flex items-center justify-center text-white font-medium text-sm shadow-lg">
                    {{ substr(Auth::user()->name, 0, 1) }}
                </div>
                <div>
                    <p class="text-sm font-medium text-white">{{ Auth::user()->name }}</p>
                    <p class="text-xs text-indigo-300">{{ Auth::user()->role }}</p>
                </div>
            </div>
            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="text-indigo-300 hover:text-red-400 transition-colors duration-300" title="Keluar">
                    <i class="fas fa-sign-out-alt"></i>
                </button>
            </form>
        </div>
    </div>
</div>