@extends('layouts.main')

@section('content')
<div class="max-w-6xl mx-auto space-y-16 py-10">
    
    <section class="flex flex-col md:flex-row items-center gap-12 fade-in">
        <div class="md:w-1/2 space-y-6">
            <h1 class="text-5xl font-extrabold text-nunyai-brown leading-tight">
                Selamat Datang di <br>
                <span class="text-nunyai-green">Kelurahan Nunyai</span>
            </h1>
            <p class="text-lg text-nunyai-text/80 leading-relaxed">
                Pusat informasi resmi dan pemberdayaan ekonomi masyarakat Kelurahan Nunyai, Kecamatan Rajabasa, Kota Bandar Lampung. Kami berkomitmen untuk mewujudkan pelayanan publik yang transparan dan inovatif.
            </p>
            <div class="flex gap-4">
                <a href="/umkm" class="bg-nunyai-brown text-white px-8 py-3 rounded-xl font-bold hover:bg-nunyai-green transition shadow-lg">
                    Lihat UMKM Lokal
                </a>
                <button class="border-2 border-nunyai-brown text-nunyai-brown px-8 py-3 rounded-xl font-bold hover:bg-nunyai-brown hover:text-white transition">
                    Profil Kelurahan
                </button>
            </div>
        </div>

        <div class="md:w-1/2 relative">
            <div class="absolute -top-4 -left-4 w-full h-full border-4 border-nunyai-green rounded-2xl z-0"></div>
            <img src="https://images.unsplash.com/photo-1577495508048-b635879837f1?auto=format&fit=crop&q=80&w=800" 
                 alt="Kelurahan Nunyai" 
                 class="relative z-10 w-full rounded-2xl shadow-2xl grayscale-0 hover:grayscale transition duration-500">
        </div>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-2 gap-8 fade-in">
        <div class="bg-white p-10 rounded-3xl shadow-sm border-t-8 border-nunyai-brown hover:shadow-xl transition duration-300">
            <div class="bg-nunyai-bg w-12 h-12 rounded-lg flex items-center justify-center mb-6">
                <span class="text-2xl">🎯</span>
            </div>
            <h3 class="text-2xl font-bold text-nunyai-brown mb-4">Visi</h3>
            <p class="text-nunyai-text/70 italic">
                "Terwujudnya Kelurahan Nunyai yang mandiri, sejahtera, dan unggul dalam pelayanan publik yang berbasis digital di tahun 2026."
            </p>
        </div>

        <div class="bg-white p-10 rounded-3xl shadow-sm border-t-8 border-nunyai-green hover:shadow-xl transition duration-300">
            <div class="bg-nunyai-bg w-12 h-12 rounded-lg flex items-center justify-center mb-6">
                <span class="text-2xl">🚀</span>
            </div>
            <h3 class="text-2xl font-bold text-nunyai-green mb-4">Misi</h3>
            <ul class="space-y-3 text-nunyai-text/70">
                <li class="flex items-start">
                    <span class="mr-2 text-nunyai-green">✔</span> Meningkatkan kualitas SDM aparatur kelurahan.
                </li>
                <li class="flex items-start">
                    <span class="mr-2 text-nunyai-green">✔</span> Mendorong digitalisasi UMKM lokal Nunyai.
                </li>
                <li class="flex items-start">
                    <span class="mr-2 text-nunyai-green">✔</span> Mewujudkan lingkungan yang asri dan aman bagi warga.
                </li>
            </ul>
        </div>
    </section>

    <section class="bg-nunyai-brown rounded-3xl p-10 text-white shadow-2xl fade-in">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <p class="text-4xl font-extrabold">30+</p>
                <p class="text-sm opacity-70">UMKM Terdaftar</p>
            </div>
            <div>
                <p class="text-4xl font-extrabold">12</p>
                <p class="text-sm opacity-70">Lingkungan / RT</p>
            </div>
            <div>
                <p class="text-4xl font-extrabold">5rb+</p>
                <p class="text-sm opacity-70">Penduduk</p>
            </div>
            <div>
                <p class="text-4xl font-extrabold">24/7</p>
                <p class="text-sm opacity-70">Layanan Online</p>
            </div>
        </div>
    </section>

</div>
@endsection