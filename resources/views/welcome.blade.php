<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Gizi Lansia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
    <link rel="manifest" href="/manifest.json">
<meta name="theme-color" content="#2563eb">
</head>
<body class="bg-[#F8FAFC] min-h-screen flex items-center justify-center p-4 relative overflow-hidden">

    <div class="absolute top-0 left-0 w-full h-full overflow-hidden -z-10">
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-blue-100 rounded-full blur-[120px] opacity-60"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-emerald-100 rounded-full blur-[120px] opacity-60"></div>
    </div>

    <div class="max-w-4xl w-full grid md:grid-cols-2 gap-12 items-center">

        <div class="hidden md:block space-y-6">
            <div class="inline-flex items-center gap-2 bg-white px-4 py-2 rounded-2xl shadow-sm border border-slate-100">
                <span class="flex h-2 w-2 rounded-full bg-emerald-500"></span>
                <span class="text-xs font-bold text-slate-600 uppercase tracking-wider">Teknologi Analisis Terbaru</span>
            </div>

            <h2 class="text-5xl font-extrabold text-slate-800 leading-[1.1]">
                Pantau Gizi <br>
                <span class="text-blue-600">Lebih Akurat.</span>
            </h2>

            <p class="text-slate-500 text-lg leading-relaxed">
                Membantu keluarga dan tenaga medis memantau kesehatan lansia dengan hasil analisis yang instan dan mudah dipahami.
            </p>

            <div class="grid grid-cols-2 gap-4 pt-4">
                <div class="bg-white p-4 rounded-2xl border border-slate-100 shadow-sm">
                    <i class="fa-solid fa-shield-check text-blue-500 mb-2 text-xl"></i>
                    <h4 class="font-bold text-slate-800 text-sm">Data Aman</h4>
                    <p class="text-xs text-slate-400">Privasi terjaga aman.</p>
                </div>
                <div class="bg-white p-4 rounded-2xl border border-slate-100 shadow-sm">
                    <i class="fa-solid fa-bolt text-amber-500 mb-2 text-xl"></i>
                    <h4 class="font-bold text-slate-800 text-sm">Hasil Cepat</h4>
                    <p class="text-xs text-slate-400">Hitungan detik saja.</p>
                </div>
            </div>
        </div>

        <div class="bg-white p-8 md:p-10 rounded-[3rem] shadow-2xl shadow-blue-100 border border-slate-50 relative">
            <div class="absolute -top-10 left-1/2 -translate-x-1/2 md:left-10 md:translate-x-0">
                <div class="bg-blue-600 w-20 h-20 rounded-3xl flex items-center justify-center shadow-2xl shadow-blue-300 rotate-6">
                    <i class="fa-solid fa-heart-pulse text-white text-3xl"></i>
                </div>
            </div>

            <div class="mt-8 text-center md:text-left">
                <h1 class="text-2xl font-black text-slate-800 mb-2 uppercase tracking-tight">
                    Selamat Datang
                </h1>
                <p class="text-slate-500 text-sm mb-8">
                    Silakan masuk atau daftar untuk mulai memantau kesehatan gizi.
                </p>

                <div class="space-y-4">
                    <a href="/login" class="flex items-center justify-center gap-3 w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 rounded-2xl shadow-lg shadow-blue-200 transition-all active:scale-[0.98] text-lg group">
                        Masuk ke Aplikasi
                        <i class="fa-solid fa-arrow-right text-sm transition-transform group-hover:translate-x-1"></i>
                    </a>

                    <a href="/register" class="block w-full bg-white hover:bg-slate-50 text-slate-700 font-bold py-4 rounded-2xl border-2 border-slate-100 transition-all active:scale-[0.98] text-lg text-center">
                        Daftar Akun Baru
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('/sw.js')
            .then(() => console.log('PWA Aktif'))
            .catch(err => console.log('PWA Failed', err));
    });
}
    </script>
</body>
</html>
