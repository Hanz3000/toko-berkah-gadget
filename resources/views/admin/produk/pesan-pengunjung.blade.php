@extends('layouts.template')

@section('title', 'Pesan Pengunjung')

@section('header-title', 'Pesan Pengunjung')
@section('header-subtitle', 'Apa kata mereka tentang situs kamu?')

@section('content')

@if(session('success'))
<div class="max-w-5xl mx-auto p-4 mb-6 bg-green-100 border border-green-400 text-green-700 rounded-lg" role="alert">
    {{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="max-w-5xl mx-auto p-4 mb-6 bg-red-100 border border-red-400 text-red-700 rounded-lg" role="alert">
    {{ session('error') }}
</div>
@endif


<div class="max-w-5xl mx-auto p-6">
    <div class="bg-white rounded-2xl shadow-lg p-8 animate-fadeIn border border-gray-100">
        <div class="flex items-center justify-between mb-8">
            <div class="flex items-center gap-3">
                <div class="bg-indigo-600 p-2 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-800">Pesan Pengunjung</h2>
            </div>

        </div>

        @if($pesans->count())
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($pesans as $pesan)
            <div class="bg-white p-4 rounded-lg shadow border border-gray-100 relative">
                <div class="flex items-start space-x-3">
                    <div
                        class="w-10 h-10 aspect-square rounded-full bg-gradient-to-tr from-blue-500 to-indigo-600 text-white flex items-center justify-center font-bold text-md">
                        {{ strtoupper(substr($pesan->nama, 0, 1)) }}
                    </div>
                    <div class="flex-1">
                        <h4 class="text-sm font-semibold text-gray-800">{{ $pesan->nama }}</h4>
                        <p class="text-xs text-gray-500 mb-1">
                            {{ $pesan->email }}
                        </p>
                        <p class="text-xs text-gray-400">
                            {{ \Carbon\Carbon::parse($pesan->created_at)->diffForHumans() }}
                        </p>
                        <p class="mt-1 text-sm text-gray-700">
                            {{ $pesan->pesan }}
                        </p>
                    </div>
                </div>

                <!-- Tombol Hapus -->
                <form action="{{ route('pesan.hapus', $pesan->id) }}" method="POST" class="absolute top-2 right-2 delete-form">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="text-red-600 hover:text-red-800 focus:outline-none btn-delete">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </form>
            </div>
            @endforeach


        </div>
        @else
        <div class="text-center py-12 bg-gray-50 rounded-xl border border-gray-100">
            <p class="text-gray-500">Belum ada pesan dari pengunjung.</p>
        </div>
        @endif
    </div>
</div>
@endsection