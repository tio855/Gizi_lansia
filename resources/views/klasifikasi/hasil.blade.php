@extends('layouts.app')

@section('title', 'Hasil Klasifikasi')

@section('content')
<div class="max-w-5xl mx-auto mt-10 px-4">

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <!-- 🔹 KIRI (DATA LANSIA + BIODATA) -->
        <div class="bg-white shadow-xl rounded-2xl p-6">

            <!-- 🔥 BIODATA -->
            <h3 class="font-bold text-blue-600 mb-4">Biodata</h3>

            <div class="space-y-2 text-sm text-gray-600 mb-6">
                <p><b>Nama:</b> {{ $data['nama'] ?? '-' }}</p>
                <p><b>Alamat:</b> {{ $data['alamat'] ?? '-' }}</p>
                <p><b>Pekerjaan:</b> {{ $data['pekerjaan'] ?? '-' }}</p>
            </div>

            <!-- 🔥 DATA LANSIA -->
            <h3 class="font-bold text-green-600 mb-4">Data Lansia</h3>

            <div class="space-y-2 text-sm text-gray-600">
                <p><b>Jenis Kelamin:</b> {{ $data['jk'] == 1 ? 'Laki-laki' : 'Perempuan' }}</p>
                <p><b>Usia:</b> {{ $data['usia'] }} tahun</p>
                <p><b>Berat:</b> {{ $data['bb'] }} kg</p>
                <p><b>Tinggi:</b> {{ $data['tb'] }} cm</p>
                <p><b>Sistolik:</b> {{ $data['sistolik'] }}</p>
                <p><b>Diastolik:</b> {{ $data['diastolik'] }}</p>
                <p><b>Nadi:</b> {{ $data['nadi'] }}</p>
                <p><b>Pernapasan:</b> {{ $data['pernapasan'] }}</p>
            </div>

        </div>

        <!-- 🔹 KANAN (HASIL) -->
        <div class="md:col-span-2 bg-white shadow-xl rounded-2xl p-6">

            <h2 class="text-2xl font-bold text-gray-800 mb-2">
                Hasil Klasifikasi
            </h2>

            <p class="text-sm text-gray-500 mb-4">
                Status Gizi Anda:

                <span class="font-bold text-lg
                    @if($hasil == 'Kurang') text-red-500
                    @elseif($hasil == 'Normal') text-green-500
                    @else text-yellow-500
                    @endif">

                    {{ strtoupper($hasil) }}

                </span>
            </p>

            <!-- 🔥 DESKRIPSI -->
            <div class="bg-blue-50 p-4 rounded-xl text-sm text-gray-700 mb-4">
                <b>Deskripsi:</b><br>
                {{ $status->deskripsi ?? '-' }}
            </div>

            <!-- 🔥 SARAN -->
            <div class="bg-gray-50 p-4 rounded-xl text-sm text-gray-600 mb-4">
                <b>Saran:</b><br>
                {{ $status->solusi ?? '-' }}
            </div>

            <!-- 🔥 BUTTON -->
            <a href="/klasifikasi"
               class="mt-6 inline-block bg-green-600 text-white px-6 py-3 rounded-xl">
                Kembali ke Form
            </a>

        </div>

    </div>

</div>
@endsection
