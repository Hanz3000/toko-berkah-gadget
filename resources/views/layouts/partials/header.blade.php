<div class="bg-gradient-to-r from-indigo-900 to-blue-800 px-6 py-4 flex items-center justify-between shadow-md sticky top-0 z-20">
    <div class="flex items-center">
        <div>
            <h2 class="text-xl font-semibold text-white">@yield('header-title', 'Dashboard')</h2>
            <p class="text-sm text-indigo-200">@yield('header-subtitle', 'Welcome to your dashboard')</p>
        </div>
    </div>
    <div class="flex items-center space-x-4">
        @hasSection('search-form')
        @yield('search-form')
        @else
        <form action="{{ url()->current() }}" method="GET" class="relative">
            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Search..."
                class="bg-indigo-800 bg-opacity-50 text-sm rounded-lg pl-10 pr-4 py-2 border border-indigo-700 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 w-64 transition-all text-white placeholder-indigo-300">
            <i class="fas fa-search text-indigo-300 absolute left-3 top-2.5"></i>
        </form>
        @endif


    </div>
</div>