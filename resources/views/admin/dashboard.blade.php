@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container mx-auto px-4 py-8">

    <!-- Header Section -->
    <div class="mb-8">
        <h1 class="text-3xl font-extrabold text-gray-800 tracking-tight">Dashboard Admin</h1>
        <p class="text-sm text-gray-500 mt-1">Selamat datang kembali! Berikut adalah ringkasan data statistik hari ini.</p>
    </div>

    <!-- Stats Grid -->
    <div class="grid sm:grid-cols-2 gap-6">

        <!-- Card Total User -->
        <div class="relative overflow-hidden bg-white p-6 rounded-2xl shadow-sm border border-gray-100 transition-all duration-300 hover:shadow-md hover:-translate-y-1 group">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-400 uppercase tracking-wider">Total User</p>
                    <h3 class="text-4xl font-black text-gray-800 mt-2 group-hover:text-blue-600 transition-colors">
                        {{ number_format($totalUser) }}
                    </h3>
                </div>
                <!-- Icon Placeholder (Blue) -->
                <div class="p-4 bg-blue-50 text-blue-600 rounded-xl group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
            </div>
            <!-- Decorative Bottom Line -->
            <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-400 to-blue-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
        </div>

        <!-- Card Total Prediksi -->
        <div class="relative overflow-hidden bg-white p-6 rounded-2xl shadow-sm border border-gray-100 transition-all duration-300 hover:shadow-md hover:-translate-y-1 group">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-400 uppercase tracking-wider">Total Prediksi</p>
                    <h3 class="text-4xl font-black text-gray-800 mt-2 group-hover:text-emerald-600 transition-colors">
                        {{ number_format($totalPrediksi) }}
                    </h3>
                </div>
                <!-- Icon Placeholder (Emerald/Green) -->
                <div class="p-4 bg-emerald-50 text-emerald-600 rounded-xl group-hover:bg-emerald-600 group-hover:text-white transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
            </div>
            <!-- Decorative Bottom Line -->
            <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-emerald-400 to-emerald-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
        </div>

    </div>
</div>
@endsection
