<div class="bg-gradient-to-r from-indigo-900 to-blue-800 px-6 py-4 flex items-center justify-between shadow-md sticky top-0 z-20 transition-all duration-300"
    :class="{'ml-80': isSidebarOpen, 'ml-0': !isSidebarOpen}">
    <div class="flex items-center space-x-4">
        <!-- Tombol Toggle Sidebar -->
        <button
            @click="isSidebarOpen = !isSidebarOpen"
            class="p-2 rounded-lg text-white hover:bg-indigo-700/50 focus:outline-none focus:ring-2 focus:ring-yellow-400 transition-all duration-300">
            <svg
                class="w-6 h-6 transition-transform duration-300"
                :class="{'rotate-180': !isSidebarOpen}"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <div class="transition-all duration-300">
            <h2 class="text-xl font-semibold text-white truncate">@yield('header-title', 'Dashboard')</h2>
            <p class="text-sm text-indigo-200 truncate">@yield('header-subtitle', 'Welcome to your dashboard')</p>
        </div>
    </div>

    <div class="flex items-center space-x-4">
        @hasSection('search-form')
        @yield('search-form')
        @else
        <form action="{{ url()->current() }}" method="GET" class="relative hidden md:block">
            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Cari..."
                class="bg-indigo-800 bg-opacity-50 text-sm rounded-lg pl-10 pr-4 py-2 border border-indigo-700 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 w-64 transition-all text-white placeholder-indigo-300">
            <i class="fas fa-search text-indigo-300 absolute left-3 top-2.5"></i>
        </form>
        @endif

        <!-- Profile Button -->

    </div>
</div>