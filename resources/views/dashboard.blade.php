@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="max-w-5xl mx-auto space-y-8 pb-10 px-4">

    <!-- 1. BANNER UTAMA (Dibuat Lebih Bersih & Tulisan Lebih Jelas) -->
    <div class="relative overflow-hidden bg-slate-950 rounded-[2rem] p-8 md:p-12 shadow-xl border border-slate-800">
        <div class="absolute top-0 right-0 -mt-10 -mr-10 w-64 h-64 bg-emerald-500/10 rounded-full blur-3xl"></div>

        <div class="relative flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="text-center md:text-left w-full">
                <h2 class="text-3xl md:text-5xl font-black text-white tracking-tight mb-4">
                    Selamat Datang, {{ auth()->user()->name }}! 👋
                </h2>
                <!-- Ukuran teks dinaikkan ke text-lg agar mudah dibaca tanpa kacamata -->
                <p class="text-slate-300 text-lg md:text-xl max-w-2xl leading-relaxed">
                    Aplikasi ini membantu Anda memantau kesehatan dan kondisi gizi lansia dengan cepat. Cukup masukkan data kesehatan, hasil akan langsung keluar.
                </p>

                <!-- Tombol Dibuat Besar, Tebal, dan Mudah Ditekan Jempol -->
                <div class="mt-8 grid grid-cols-1 sm:flex sm:flex-row gap-4 justify-stretch">
                    <!-- Tombol Utama Hijau Menyala -->
                    <a href="/klasifikasi" class="px-8 py-5 bg-emerald-500 hover:bg-emerald-600 text-slate-950 font-black text-lg rounded-2xl transition-all shadow-lg shadow-emerald-500/25 flex items-center justify-center gap-3 group">
                        <i class="fa-solid fa-circle-play text-xl"></i>
                        MULAI CEK GIZI SEKARANG
                    </a>

                    <!-- Tombol Panduan Aplikasi (Sangat Jelas) -->
                    <a href="/cara-penggunaan" class="px-8 py-5 bg-slate-800 hover:bg-slate-700 text-white font-bold text-base rounded-2xl border-2 border-slate-700 transition-all flex items-center justify-center gap-3">
                        <i class="fa-solid fa-book text-blue-400"></i>
                        Baca Panduan Cara Pakai
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. PILIHAN MENU (Diubah Menjadi Format Card Tombol Tebal yang Tegas) -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Menu Riwayat (Warna Biru yang Terang & Kontras) -->
        <div class="bg-white p-6 sm:p-8 rounded-[2rem] shadow-md border-2 border-slate-100 flex flex-col justify-between hover:border-blue-200 transition-all">
            <div class="mb-6">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 bg-blue-100 text-blue-700 rounded-2xl flex items-center justify-center text-2xl shrink-0">
                        <i class="fa-solid fa-folder-open"></i>
                    </div>
                    <!-- Judul Menggunakan Text-XL agar Tegas -->
                    <h3 class="text-xl font-extrabold text-slate-900 tracking-tight">Catatan & Riwayat Cek</h3>
                </div>
                <p class="text-base text-slate-700 leading-relaxed">
                    Melihat kembali daftar hasil pemeriksaan gizi dan data kesehatan lansia yang sudah Anda masukkan sebelumnya.
                </p>
            </div>
            <!-- Tombol Aksi Lebar dan Berwarna Kontras -->
            <a href="/lansia" class="w-full text-center text-base font-black text-blue-700 bg-blue-50 hover:bg-blue-100 px-5 py-4 rounded-xl border border-blue-200 transition-colors flex items-center justify-center gap-2">
                Lihat Catatan Riwayat <i class="fa-solid fa-arrow-right text-sm"></i>
            </a>
        </div>

        <!-- Menu Informasi Gizi (Warna Hijau yang Terang & Kontras) -->
        <div class="bg-white p-6 sm:p-8 rounded-[2rem] shadow-md border-2 border-slate-100 flex flex-col justify-between hover:border-emerald-200 transition-all">
            <div class="mb-6">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 bg-emerald-100 text-emerald-700 rounded-2xl flex items-center justify-center text-2xl shrink-0">
                        <i class="fa-solid fa-book-open-reader"></i>
                    </div>
                    <h3 class="text-xl font-extrabold text-slate-900 tracking-tight">Penjelasan & Tips Gizi</h3>
                </div>
                <p class="text-base text-slate-700 leading-relaxed">
                    Kumpulan informasi bermanfaat seputar standar makanan sehat, berat badan ideal, dan cara menjaga kebugaran tubuh lansia.
                </p>
            </div>
            <!-- Tombol Aksi Lebar dan Berwarna Kontras -->
            <a href="/penjelasan-lansia" class="w-full text-center text-base font-black text-emerald-700 bg-emerald-50 hover:bg-emerald-100 px-5 py-4 rounded-xl border border-emerald-200 transition-colors flex items-center justify-center gap-2">
                Buka Artikel & Tips <i class="fa-solid fa-arrow-right text-sm"></i>
            </a>
        </div>

    </div>

    <!-- 3. INFO BAR (Menggunakan Kontras Tinggi Gelap-Terang Agar Nyaman di Mata) -->
    <div class="bg-slate-900 rounded-[2rem] p-6 text-white shadow-lg border border-slate-800 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
        <div class="flex items-start sm:items-center gap-4">
            <div class="text-3xl bg-slate-800 w-12 h-12 rounded-xl flex items-center justify-center shrink-0 border border-slate-700">
                💡
            </div>
            <div>
                <span class="text-xs font-bold tracking-wider uppercase text-emerald-400">Tips Kesehatan Hari Ini:</span>
                <!-- Ukuran teks dinaikkan menjadi text-base -->
                <p class="text-base text-slate-200 italic mt-0.5 leading-relaxed">
                    "Penurunan indera pengecap sering membuat nafsu makan lansia berkurang. Sajikan makanan dengan warna menarik untuk merangsang selera makan mereka."
                </p>
            </div>
        </div>
        <div class="text-xs text-slate-400 bg-slate-800 px-3 py-1.5 rounded-lg border border-slate-700 whitespace-nowrap self-end sm:self-center">
            Sumber: Kemenkes RI
        </div>
    </div>

</div>
@endsection
