@extends('layouts.app')

@section('title', 'Panduan Penggunaan')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-10">

    <!-- Satu Card Utama yang Lebar -->
    <div class="bg-white rounded-3xl border border-slate-100 shadow-xl shadow-slate-100/50 p-6 sm:p-10 relative overflow-hidden">

        <!-- Aksen Dekorasi Lembut di Pojok Card -->
        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-blue-50 to-indigo-50 rounded-bl-full -z-10 pointer-events-none"></div>

        <!-- Header Card -->
        <div class="border-b border-slate-100 pb-6 mb-8 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
            <div>
                <h2 class="text-xl font-black text-slate-800 uppercase tracking-tight">Panduan Sistem</h2>
                <p class="text-sm text-slate-500 mt-0.5">Alur langkah pemeriksaan kondisi gizi lansia secara berkala.</p>
            </div>
        </div>

        <!-- List Menurun Penuh (Single Column) -->
        <div class="space-y-6">

            <!-- Langkah 1 -->
            <div class="flex items-start space-x-4 group p-3 rounded-2xl hover:bg-slate-50/80 transition-colors duration-200">
                <span class="flex-shrink-0 text-xs font-black text-blue-600 bg-blue-50 border border-blue-100 w-8 h-8 flex items-center justify-center rounded-xl group-hover:bg-blue-600 group-hover:text-white transition-colors duration-200">01</span>
                <div>
                    <h4 class="text-sm font-bold text-slate-800 transition-colors duration-200 group-hover:text-blue-600">Buka Menu Klasifikasi</h4>
                    <p class="text-xs text-slate-500 mt-0.5 leading-relaxed">Pilih menu <span class="font-medium text-slate-700">"Klasifikasi Gizi"</span> pada navigasi untuk memulai.</p>
                </div>
            </div>

            <!-- Langkah 2 -->
            <div class="flex items-start space-x-4 group p-3 rounded-2xl hover:bg-slate-50/80 transition-colors duration-200">
                <span class="flex-shrink-0 text-xs font-black text-blue-600 bg-blue-50 border border-blue-100 w-8 h-8 flex items-center justify-center rounded-xl group-hover:bg-blue-600 group-hover:text-white transition-colors duration-200">02</span>
                <div>
                    <h4 class="text-sm font-bold text-slate-800 transition-colors duration-200 group-hover:text-blue-600">Isi Data Diri Lansia</h4>
                    <p class="text-xs text-slate-500 mt-0.5 leading-relaxed">Masukkan identitas dasar seperti nama, alamat, jenis kelamin, dan pekerjaan.</p>
                </div>
            </div>

            <!-- Langkah 3 (Gabungan Antropometri & Kesehatan fisik) -->
            <div class="flex items-start space-x-4 group p-3 rounded-2xl hover:bg-slate-50/80 transition-colors duration-200">
                <span class="flex-shrink-0 text-xs font-black text-blue-600 bg-blue-50 border border-blue-100 w-8 h-8 flex items-center justify-center rounded-xl group-hover:bg-blue-600 group-hover:text-white transition-colors duration-200">03</span>
                <div>
                    <h4 class="text-sm font-bold text-slate-800 transition-colors duration-200 group-hover:text-blue-600">Input Data Medis & Fisik</h4>
                    <p class="text-xs text-slate-500 mt-0.5 leading-relaxed">Lengkapi angka usia, berat badan (BB), tinggi badan (TB), tekanan darah (sistolik/diastolik), denyut nadi, serta frekuensi pernapasan.</p>
                </div>
            </div>

            <!-- Langkah 4 -->
            <div class="flex items-start space-x-4 group p-3 rounded-2xl hover:bg-slate-50/80 transition-colors duration-200">
                <span class="flex-shrink-0 text-xs font-black text-blue-600 bg-blue-50 border border-blue-100 w-8 h-8 flex items-center justify-center rounded-xl group-hover:bg-blue-600 group-hover:text-white transition-colors duration-200">04</span>
                <div>
                    <h4 class="text-sm font-bold text-slate-800 transition-colors duration-200 group-hover:text-blue-600">Lakukan Prediksi</h4>
                    <p class="text-xs text-slate-500 mt-0.5 leading-relaxed">Klik tombol <span class="font-medium text-slate-700">"Prediksi Sekarang"</span> untuk mengaktifkan proses kalkulasi metode klasifikasi pada sistem.</p>
                </div>
            </div>

            <!-- Langkah 5 -->
            <div class="flex items-start space-x-4 group p-3 rounded-2xl hover:bg-slate-50/80 transition-colors duration-200">
                <span class="flex-shrink-0 text-xs font-black text-blue-600 bg-blue-50 border border-blue-100 w-8 h-8 flex items-center justify-center rounded-xl group-hover:bg-blue-600 group-hover:text-white transition-colors duration-200">05</span>
                <div>
                    <h4 class="text-sm font-bold text-slate-800 transition-colors duration-200 group-hover:text-blue-600">Lihat Hasil Klasifikasi</h4>
                    <p class="text-xs text-slate-500 mt-0.5 leading-relaxed">Sistem akan langsung menampilkan kesimpulan status gizi lansia (seperti Kurang, Normal, atau lainnya) beserta informasi pendukung.</p>
                </div>
            </div>

            <!-- Langkah 6 -->
            <div class="flex items-start space-x-4 group p-3 rounded-2xl hover:bg-slate-50/80 transition-colors duration-200">
                <span class="flex-shrink-0 text-xs font-black text-blue-600 bg-blue-50 border border-blue-100 w-8 h-8 flex items-center justify-center rounded-xl group-hover:bg-blue-600 group-hover:text-white transition-colors duration-200">06</span>
                <div>
                    <h4 class="text-sm font-bold text-slate-800 transition-colors duration-200 group-hover:text-blue-600">Periksa Riwayat Prediksi</h4>
                    <p class="text-xs text-slate-500 mt-0.5 leading-relaxed">Buka menu <span class="font-medium text-slate-700">"Riwayat"</span> untuk memantau kembali daftar hasil klasifikasi yang sudah dilakukan sebelumnya.</p>
                </div>
            </div>

            <!-- Langkah 7 -->
            <div class="flex items-start space-x-4 group p-3 rounded-2xl hover:bg-slate-50/80 transition-colors duration-200">
                <span class="flex-shrink-0 text-xs font-black text-slate-500 bg-slate-100 border border-slate-200 w-8 h-8 flex items-center justify-center rounded-xl group-hover:bg-slate-800 group-hover:text-white transition-colors duration-200">07</span>
                <div>
                    <h4 class="text-sm font-bold text-slate-800 transition-colors duration-200 group-hover:text-blue-600">Kelola Data Berkala</h4>
                    <p class="text-xs text-slate-500 mt-0.5 leading-relaxed">Lakukan pemeriksaan kembali kapan saja secara rutin dengan data paling baru agar hasil pantauan selalu sesuai kondisi aktual.</p>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
