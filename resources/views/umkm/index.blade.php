@extends('layouts.main')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-12 md:py-20">
    {{-- Header Section --}}
    <div class="flex flex-col items-center text-center mb-16 md:mb-24 relative">
        <span class="text-nunyai-green font-black text-[10px] md:text-xs tracking-[0.4em] uppercase mb-4 block">Pusat Ekonomi Kreatif</span>
        <h1 class="text-4xl md:text-6xl font-black text-nunyai-text mb-6 uppercase tracking-tighter leading-none">
            Katalog <span class="text-nunyai-brown italic">UMKM</span> Nunyai
        </h1>
        <p class="text-nunyai-text/50 text-xs md:text-sm font-medium max-w-lg leading-relaxed uppercase tracking-wider">
            Menjelajahi potensi lokal melalui kurasi usaha mikro, kecil, dan menengah terbaik di wilayah Kelurahan Nunyai.
        </p>
        <div class="absolute -bottom-8 left-1/2 -translate-x-1/2 w-12 h-1 bg-nunyai-green/20 rounded-full"></div>
    </div>

    {{-- Grid Layout --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-12">
        @foreach($umkms as $umkm)
        <div class="group bg-white rounded-[3rem] overflow-hidden shadow-[0_10px_40px_-15px_rgba(68,45,28,0.1)] hover:shadow-[0_20px_60px_-10px_rgba(114,137,27,0.2)] transition-all duration-700 flex flex-col border border-white">
            
            {{-- Image & Category Tag --}}
            <div class="relative h-64 md:h-72 overflow-hidden">
                <img src="{{ asset('storage/umkm/tempat/' . ($umkm->store_photo ?? 'default.jpg')) }}" 
                    class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110 group-hover:rotate-1"
                    alt="{{ $umkm->business_name }}">
                
                {{-- Floating Badge --}}
                <div class="absolute top-6 left-6">
                    <div class="bg-white/80 backdrop-blur-xl border border-white/20 text-nunyai-brown px-5 py-2 rounded-2xl text-[10px] font-black uppercase tracking-[0.2em] shadow-xl">
                        {{ $umkm->category }}
                    </div>
                </div>
            </div>

            {{-- Card Body --}}
            <div class="p-8 md:p-10 flex flex-col flex-grow">
                {{-- Business Title & Hours --}}
                <div class="mb-6">
                    <h3 class="text-2xl md:text-3xl font-black text-nunyai-text mb-3 group-hover:text-nunyai-green transition-colors leading-none tracking-tight">
                        {{ $umkm->business_name }}
                    </h3>
                    <div class="inline-flex items-center gap-2 bg-nunyai-bg/30 px-3 py-1.5 rounded-xl">
                        <span class="text-[10px] font-extrabold text-nunyai-brown uppercase tracking-wider">
                            ⏰ {{ $umkm->operational_hours ?? 'Jam tidak tersedia' }}
                        </span>
                    </div>
                </div>

                {{-- Description --}}
                <p class="text-nunyai-text/60 text-sm leading-relaxed mb-8 line-clamp-3 font-medium">
                    {{ $umkm->description }}
                </p>

                {{-- Owner Profile Signature --}}
                <div class="flex items-center gap-4 mb-10 border-t border-nunyai-bg/20 pt-8">
                    <div class="relative">
                        <img src="{{ asset('storage/umkm/owner/' . ($umkm->owner_photo ?? 'default_owner.jpg')) }}" 
                             class="w-12 h-12 rounded-2xl border-2 border-white object-cover shadow-md rotate-3 group-hover:rotate-0 transition-transform">
                        <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-nunyai-green border-2 border-white rounded-full"></div>
                    </div>
                    <div class="flex flex-col text-left">
                        <span class="text-[9px] text-nunyai-brown/40 font-black uppercase tracking-widest leading-none mb-1">Owner</span>
                        <span class="text-sm font-black text-nunyai-text tracking-tight">{{ $umkm->owner_name }}</span>
                    </div>
                </div>

                {{-- Action Buttons --}}
                <div class="grid grid-cols-2 gap-4 mt-auto">
                    <button onclick="showUmkmDetail({{ $umkm->id }})" 
                            class="bg-nunyai-bg/50 text-nunyai-brown hover:bg-nunyai-brown hover:text-white py-4 rounded-[1.5rem] font-black text-[10px] transition-all uppercase tracking-[0.2em] border border-nunyai-brown/10 active:scale-90">
                        Detail
                    </button>
                    <a href="https://wa.me/{{ '62' . ltrim(preg_replace('/[^0-9]/', '', $umkm->contact), '0') }}" 
                       target="_blank" 
                       class="bg-nunyai-green text-white hover:bg-nunyai-text py-4 rounded-[1.5rem] font-black text-[10px] transition-all text-center shadow-xl shadow-nunyai-green/20 uppercase tracking-[0.2em] active:scale-90">
                        Kontak
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@push('modals')
    @include('umkm.details')
@endpush
@endsection