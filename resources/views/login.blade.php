<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Gizi Lansia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="manifest" href="/manifest.json">
<meta name="theme-color" content="#2563eb">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl overflow-hidden relative">

        <a href="/" class="absolute top-4 left-4 bg-white/20 hover:bg-white/40 text-white p-2 rounded-full transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
        </a>

        <div class="bg-blue-600 p-8 text-center text-white pt-12">
            <h2 class="text-3xl font-bold">Selamat Datang</h2>
            <p class="text-blue-100 mt-2">Sistem Klasifikasi Gizi Lansia</p>
        </div>
        <div class="p-8">

        @if(session('error'))
        <div id="errorAlert"
            class="mb-4 p-3 bg-red-100 border border-red-400 text-red-700 rounded-xl">
            {{ session('error') }}
        </div>

        <script>
        setTimeout(() => {
            const alert = document.getElementById('errorAlert');
            if(alert){
                alert.remove();
            }
        }, 3000);
        </script>
        @endif

        <form method="POST" action="/login" class="space-y-6">
            @csrf

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                    <input type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="nama@email.com"
                        class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all"
                        required>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
                    <input type="password" name="password" placeholder="••••••••"
                        class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all" required>
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-xl shadow-lg transform active:scale-95 transition-all">
                    Masuk Sekarang
                </button>
            </form>

            <div class="mt-8 space-y-4 text-center">
                <p class="text-gray-600">Belum punya akun?
                    <a href="/register" class="text-blue-600 font-bold hover:underline">Daftar di sini</a>
                </p>

                <hr class="border-gray-200">

                <a href="/" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-blue-600 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>

</body>
</html>
