<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gunung di Jawa Timur - Eksplorasi Pendakian</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-50 font-sans text-slate-800">

    <!-- Navigasi / Navbar -->
    <nav class="bg-white/80 backdrop-blur-md shadow-sm px-8 py-4 flex justify-between items-center sticky top-0 z-50">
        <h1 class="text-xl font-bold text-emerald-700 flex items-center gap-2">
            ⛰️ Jelajah Rimba
        </h1>
        <div class="space-x-6">
            <a href="/" class="text-slate-600 hover:text-emerald-600 transition">Tentang Alam</a>
            <a href="/gunung-jatim" class="text-emerald-600 font-semibold border-b-2 border-emerald-600 pb-1">Gunung Jatim</a>
        </div>
    </nav>

    <!-- Konten Utama -->
    <main class="max-w-6xl mx-auto mt-12 px-6 mb-20">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="text-3xl font-extrabold text-slate-900 mb-3">Jenis & Pilihan Gunung di Jawa Timur</h2>
            <p class="text-slate-600">Jawa Timur memiliki pesona alam pegunungan yang luar biasa, mulai dari kaldera vulkanik hingga puncak tertinggi di pulau Jawa.</p>
        </div>

        <!-- Grid Kartu Gunung dengan Gambar Lokal -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Gunung Semeru -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden border border-slate-100 hover:shadow-xl transition flex flex-col">
                <img src="{{ asset('images/semeru.jpg') }}" alt="Gunung Semeru" class="h-48 w-full object-cover">
                <div class="p-6 flex-1 flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-bold text-emerald-600 bg-emerald-50 px-2.5 py-1 rounded">3.676 MDPL</span>
                        <h3 class="text-xl font-bold text-slate-900 mt-2 mb-2">Gunung Semeru</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Gunung tertinggi di Pulau Jawa (Mahameru). Menawarkan pemandangan ikonik Ranu Kumbolo dan hamparan savana luas di Oro-oro Ombo.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Gunung Bromo -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden border border-slate-100 hover:shadow-xl transition flex flex-col">
                <img src="{{ asset('images/bromo.jpg') }}" alt="Gunung Bromo" class="h-48 w-full object-cover">
                <div class="p-6 flex-1 flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-bold text-amber-600 bg-amber-50 px-2.5 py-1 rounded">2.329 MDPL</span>
                        <h3 class="text-xl font-bold text-slate-900 mt-2 mb-2">Gunung Bromo</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Terkenal dengan kaldera lautan pasir yang luas dan panorama matahari terbit (sunrise) terindah yang menjadi daya tarik wisatawan dunia.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Gunung Arjuno -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden border border-slate-100 hover:shadow-xl transition flex flex-col">
                <img src="{{ asset('images/arjuno.jpg') }}" alt="Gunung Arjuno" class="h-48 w-full object-cover">
                <div class="p-6 flex-1 flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-bold text-slate-600 bg-slate-100 px-2.5 py-1 rounded">3.339 MDPL</span>
                        <h3 class="text-xl font-bold text-slate-900 mt-2 mb-2">Gunung Arjuno</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Gunung berapi kerucut yang berdampingan dengan Gunung Welirang. Dikenal memiliki jalur pendakian yang menantang serta situs purbakala.
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-12 text-center">
            <a href="/" class="text-emerald-600 font-semibold hover:underline">&larr; Kembali ke Halaman Tentang Alam</a>
        </div>
    </main>

</body>
</html>