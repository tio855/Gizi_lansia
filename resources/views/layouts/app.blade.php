<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'GiziLansia') - LANSIA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
    <link rel="manifest" href="/manifest.json">
<meta name="theme-color" content="#2563eb">
</head>

<body class="bg-slate-50 min-h-screen font-sans text-slate-900">

    <nav class="bg-white/90 backdrop-blur-md sticky top-0 z-50 border-b border-slate-200">
        <div class="container mx-auto px-4 h-20 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="bg-blue-600 p-2.5 rounded-2xl shadow-lg shadow-blue-100 text-white">
                    <i class="fa-solid fa-heart-pulse text-xl"></i>
                </div>
                <div>
                    <h1 class="text-lg font-black tracking-tight leading-none uppercase text-slate-800">GiziLansia</h1>
                    <p class="text-[10px] font-bold text-slate-400 mt-1 tracking-widest uppercase">
                        Cek Gizi Lansia dengan Mudah
                    </p>
                </div>
            </div>

            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="bg-red-50 hover:bg-red-500 p-3 rounded-2xl group transition-all">
                    <i class="fa-solid fa-power-off text-red-500 group-hover:text-white transition-colors"></i>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                    @csrf
                </form>
        </div>
    </nav>

    <div class="sticky top-[80px] z-40 py-4">
        <div class="container mx-auto px-4">
            <div class="bg-white p-2 rounded-3xl shadow-xl shadow-slate-200/50 border border-slate-100 overflow-x-auto no-scrollbar">
                <div class="flex items-center space-x-1 min-w-max">

                    <!-- DASHBOARD (SEMUA ROLE) -->
                    <a href="/dashboard"
                    class="flex items-center space-x-2 px-5 py-3 rounded-2xl transition-all
                    {{ request()->is('dashboard') ? 'bg-blue-600 text-white shadow-lg shadow-blue-200 font-bold' : 'text-slate-500 hover:bg-slate-50' }}">
                        <i class="fa-solid fa-house-chimney text-xs"></i>
                        <span class="text-sm">Beranda</span>
                    </a>

                    {{-- ================= ADMIN ================= --}}
                    @if(auth()->check() && auth()->user()->role == 'admin')

                        <a href="/admin/riwayat"
                        class="flex items-center space-x-2 px-5 py-3 rounded-2xl transition-all
                        {{ request()->is('admin/riwayat') ? 'bg-blue-600 text-white shadow-lg shadow-blue-200 font-bold' : 'text-slate-500 hover:bg-slate-50' }}">
                            <i class="fa-solid fa-database text-xs"></i>
                            <span class="text-sm">Kelola Riwayat</span>
                        </a>

                        <a href="/admin/users"
                        class="flex items-center space-x-2 px-5 py-3 rounded-2xl transition-all
                        {{ request()->is('admin/users') ? 'bg-blue-600 text-white shadow-lg shadow-blue-200 font-bold' : 'text-slate-500 hover:bg-slate-50' }}">
                            <i class="fa-solid fa-users text-xs"></i>
                            <span class="text-sm">Kelola User</span>
                        </a>

                    {{-- ================= USER ================= --}}
                    @else

                        <a href="/klasifikasi"
                        class="flex items-center space-x-2 px-5 py-3 rounded-2xl transition-all
                        {{ request()->is('klasifikasi') ? 'bg-blue-600 text-white shadow-lg shadow-blue-200 font-bold' : 'text-slate-500 hover:bg-slate-50' }}">
                            <i class="fa-solid fa-stethoscope text-xs"></i>
                            <span class="text-sm">Cek Gizi</span>
                        </a>

                        <a href="/penjelasan-lansia"
                        class="flex items-center space-x-2 px-5 py-3 rounded-2xl transition-all
                        {{ request()->is('penjelasan-lansia') ? 'bg-blue-600 text-white shadow-lg shadow-blue-200 font-bold' : 'text-slate-500 hover:bg-slate-50' }}">
                            <i class="fa-solid fa-person-cane text-xs"></i>
                            <span class="text-sm">Lansia</span>
                        </a>

                        <a href="/penjelasan-gizi"
                        class="flex items-center space-x-2 px-5 py-3 rounded-2xl transition-all
                        {{ request()->is('penjelasan-gizi') ? 'bg-blue-600 text-white shadow-lg shadow-blue-200 font-bold' : 'text-slate-500 hover:bg-slate-50' }}">
                            <i class="fa-solid fa-apple-whole text-xs"></i>
                            <span class="text-sm">Gizi Lansia</span>
                        </a>

                        <a href="/cara-penggunaan"
                        class="flex items-center space-x-2 px-5 py-3 rounded-2xl transition-all
                        {{ request()->is('cara-penggunaan') ? 'bg-blue-600 text-white shadow-lg shadow-blue-200 font-bold' : 'text-slate-500 hover:bg-slate-50' }}">
                            <i class="fa-solid fa-book-open-reader text-xs"></i>
                            <span class="text-sm">Panduan</span>
                        </a>

                        <a href="/riwayat"
                        class="flex items-center space-x-2 px-5 py-3 rounded-2xl transition-all
                        {{ request()->is('riwayat') ? 'bg-blue-600 text-white shadow-lg shadow-blue-200 font-bold' : 'text-slate-500 hover:bg-slate-50' }}">
                            <i class="fa-solid fa-clock-rotate-left text-xs"></i>
                            <span class="text-sm">Riwayat</span>
                        </a>

                    @endif

                </div>
            </div>
        </div>
    </div>

    <main class="container mx-auto px-4 pb-20">
        @yield('content')
    </main>
<footer class="bg-gradient-to-r from-blue-600 to-blue-500 text-white mt-16">
    <div class="container mx-auto px-4 py-10">

        <div class="grid md:grid-cols-3 gap-8 items-center">

            <!-- Brand -->
            <div>
                <div class="flex items-center space-x-3 mb-3">
                    <div class="bg-white/20 p-2 rounded-xl">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <h3 class="font-black text-lg">GiziLansia</h3>
                </div>
                <p class="text-sm text-blue-100 leading-relaxed">
                    Membantu memantau kondisi gizi lansia dengan cara yang mudah, cepat, dan akurat.
                </p>
            </div>

            <!-- Menu -->
            <div class="text-sm">

            </div>

            <!-- Icon / Sosial -->
            <div class="text-center md:text-right">
                <h4 class="font-bold mb-3">Dukung Kesehatan Lansia</h4>
                <div class="flex justify-center md:justify-end space-x-4 text-xl">
                    <i class="fa-solid fa-heart hover:scale-125 transition"></i>
                    <i class="fa-solid fa-apple-whole hover:scale-125 transition"></i>
                    <i class="fa-solid fa-user-nurse hover:scale-125 transition"></i>
                </div>
            </div>

        </div>

        <!-- Bottom -->
        <div class="border-t border-white/20 mt-8 pt-4 text-center text-sm text-blue-100">
            © {{ date('Y') }} GiziLansia • Dibuat untuk membantu kesehatan lansia
        </div>

    </div>
</footer>

</body>
</html>
