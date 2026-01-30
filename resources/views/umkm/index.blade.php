@extends('layouts.main')

@section('content')
<div class="max-w-7xl mx-auto px-4 md:px-6 py-12 md:py-20">
    {{-- 1. Header Section --}}
    <div class="flex flex-col items-center text-center mb-10 md:mb-16 relative">
        <span class="text-nunyai-green font-black text-[10px] md:text-xs tracking-[0.4em] uppercase mb-4 block animate-fade-in">Pusat Ekonomi Kreatif</span>
        <h1 class="text-3xl md:text-6xl font-black text-nunyai-text mb-6 uppercase tracking-tighter leading-none">
            Katalog <span class="text-nunyai-brown italic">UMKM</span> Nunyai
        </h1>
        <div class="absolute -bottom-4 left-1/2 -translate-x-1/2 w-12 h-1 bg-nunyai-green/20 rounded-full"></div>
    </div>

{{-- Filter Kategori --}}
<div class="flex justify-start md:justify-center overflow-x-auto pb-8 mb-4 gap-2 no-scrollbar">
    @php
        // Kategori yang sudah distandarisasi
        $categories = ['Semua', 'Kuliner', 'Toko Kelontong', 'Jasa', 'Kerajinan', 'Depot Air', 'Petshop'];
    @endphp
    @foreach($categories as $cat)
    <button onclick="filterCategory('{{ $cat }}')" 
            class="filter-btn whitespace-nowrap px-6 py-2.5 rounded-full border-2 border-nunyai-brown/10 text-[10px] font-black uppercase tracking-widest transition-all hover:bg-nunyai-brown hover:text-white active:scale-95 {{ $cat == 'Semua' ? 'bg-nunyai-brown text-white' : 'bg-white text-nunyai-brown' }}"
            data-category="{{ $cat }}">
        {{ $cat }}
    </button>
    @endforeach
</div>

    {{-- 3. Grid Layout (Hybrid: 2 Kolom Mobile, 3 Kolom Desktop) --}}
    <div id="umkm-grid" class="grid grid-cols-2 md:grid-cols-3 gap-3 md:gap-10">
        @foreach($umkms as $umkm)
        <div class="umkm-card group bg-white rounded-[2.2rem] md:rounded-[3.5rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-700 flex flex-col border border-white"
             data-category="{{ $umkm->category }}">
            
            {{-- Image & Category Badge --}}
            <div class="relative h-40 md:h-72 overflow-hidden">
                <img src="{{ asset('storage/umkm/tempat/' . ($umkm->store_photo ?? 'default.jpg')) }}" 
                    class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110"
                    alt="{{ $umkm->business_name }}">
                
                <div class="absolute top-3 left-3 md:top-6 md:left-6">
                    <div class="bg-white/80 backdrop-blur-xl border border-white/20 text-nunyai-brown px-3 py-1 md:px-5 md:py-2 rounded-xl text-[7px] md:text-[10px] font-black uppercase tracking-[0.1em] shadow-xl italic">
                        {{ $umkm->category }}
                    </div>
                </div>
            </div>

            {{-- Card Body --}}
            <div class="p-4 md:p-10 flex flex-col flex-grow">
                {{-- Nama Bisnis & Jam --}}
                <div class="mb-3 md:mb-6">
                    <h3 class="text-sm md:text-3xl font-black text-nunyai-text mb-1 md:mb-3 group-hover:text-nunyai-green transition-colors leading-tight tracking-tight line-clamp-1">
                        {{ $umkm->business_name }}
                    </h3>
                    <div class="inline-flex items-center gap-1 bg-nunyai-bg/30 px-2 py-1 rounded-lg">
                        <span class="text-[7px] md:text-[10px] font-extrabold text-nunyai-brown uppercase tracking-wider">
                            ⏰ {{ $umkm->operational_hours ?? 'Tutup' }}
                        </span>
                    </div>
                </div>

                {{-- PERBAIKAN DI SINI: Hapus 'md:block', gunakan 'md:line-clamp-2' --}}
                <p class="hidden md:line-clamp-2 text-nunyai-text/60 text-sm leading-relaxed mb-8 font-medium min-h-[3rem]">
                    {{ $umkm->description }}
                </p>

                {{-- OWNER PROFILE: Tampil di Desktop untuk kesan personal --}}
                <div class="hidden md:flex items-center gap-4 mb-10 border-t border-nunyai-bg/20 pt-8">
                    <div class="relative">
                        <img src="{{ asset('storage/umkm/owner/' . ($umkm->owner_photo ?? 'default_owner.jpg')) }}" 
                             class="w-12 h-12 rounded-2xl border-2 border-white object-cover shadow-md rotate-3 group-hover:rotate-0 transition-all">
                        <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-nunyai-green border-2 border-white rounded-full"></div>
                    </div>
                    <div class="flex flex-col text-left">
                        <span class="text-[9px] text-nunyai-brown/40 font-black uppercase tracking-widest leading-none mb-1">Owner</span>
                        <span class="text-sm font-black text-nunyai-text tracking-tight">{{ $umkm->owner_name }}</span>
                    </div>
                </div>

                {{-- Action Buttons: Adaptif untuk Grid 2 Kolom --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2 mt-auto">
                    <button onclick="showUmkmDetail({{ $umkm->id }})" 
                            class="bg-nunyai-bg/50 text-nunyai-brown hover:bg-nunyai-brown hover:text-white py-2.5 md:py-4 rounded-xl md:rounded-[1.5rem] font-black text-[8px] md:text-[10px] transition-all uppercase tracking-widest border border-nunyai-brown/10 active:scale-90">
                        Detail
                    </button>
                    <a href="https://wa.me/{{ '62' . ltrim(preg_replace('/[^0-9]/', '', $umkm->contact), '0') }}" 
                       target="_blank" 
                       class="bg-nunyai-green text-white hover:bg-nunyai-text py-2.5 md:py-4 rounded-xl md:rounded-[1.5rem] font-black text-[8px] md:text-[10px] transition-all text-center shadow-lg uppercase tracking-widest active:scale-90">
                        Kontak
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{-- 4. Empty State --}}
    <div id="empty-state" class="hidden flex-col items-center text-center py-20 animate-fade-in">
        <span class="text-6xl mb-4 block">📦</span>
        <h3 class="text-xl font-black text-nunyai-brown uppercase tracking-widest">Tidak ditemukan</h3>
        <p class="text-nunyai-text/40 text-sm mt-2">Belum ada UMKM untuk kategori ini.</p>
    </div>
</div>

@push('modals')
    @include('umkm.details')
@endpush

@push('scripts')
<script>
    function filterCategory(category) {
        const cards = document.querySelectorAll('.umkm-card');
        const buttons = document.querySelectorAll('.filter-btn');
        let found = 0;

        buttons.forEach(btn => {
            if(btn.getAttribute('data-category') === category) {
                btn.classList.add('bg-nunyai-brown', 'text-white');
                btn.classList.remove('bg-white', 'text-nunyai-brown');
            } else {
                btn.classList.remove('bg-nunyai-brown', 'text-white');
                btn.classList.add('bg-white', 'text-nunyai-brown');
            }
        });

        cards.forEach(card => {
            const cardCat = card.getAttribute('data-category');
            if (category === 'Semua' || cardCat.includes(category) || (category === 'Toko Kelontong' && cardCat.includes('Sembako'))) {
                card.style.display = 'flex';
                found++;
            } else {
                card.style.display = 'none';
            }
        });

        const emptyState = document.getElementById('empty-state');
        if (found === 0) {
            emptyState.classList.remove('hidden');
            emptyState.classList.add('flex');
        } else {
            emptyState.classList.add('hidden');
            emptyState.classList.remove('flex');
        }
    }
</script>
<style>
    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
</style>
@endpush
@endsection