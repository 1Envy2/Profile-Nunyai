@extends('layouts.main')

@section('content')
<div class="max-w-7xl mx-auto px-4 md:px-6 py-8 md:py-12">
    <div class="text-center mb-10 md:mb-16">
        <h1 class="text-3xl md:text-5xl font-black text-nunyai-text mb-4 uppercase tracking-tight leading-tight">
            Katalog <span class="text-nunyai-brown">UMKM Nunyai</span>
        </h1>
        <div class="w-20 h-1.5 bg-nunyai-green mx-auto rounded-full"></div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-10">
        @foreach($umkms as $umkm)
        <div class="group bg-white rounded-[2.5rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 flex flex-col border border-nunyai-brown/5">
            <div class="relative h-56 md:h-64 overflow-hidden">
                <img src="{{ asset('storage/umkm/tempat/' . ($umkm->store_photo ?? 'default.jpg')) }}" 
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute top-4 left-4">
                    <span class="bg-white/90 backdrop-blur-md text-nunyai-brown px-4 py-1.5 rounded-full text-[10px] font-black uppercase tracking-widest shadow-sm">
                        {{ $umkm->category }}
                    </span>
                </div>
            </div>

            <div class="p-6 md:p-8 flex flex-col flex-grow">
                <h3 class="text-xl md:text-2xl font-bold text-nunyai-text mb-2 group-hover:text-nunyai-green transition-colors leading-tight">
                    {{ $umkm->business_name }}
                </h3>

                <div class="flex items-center gap-1.5 mb-3">
                    <span class="text-[10px] font-bold text-nunyai-brown bg-nunyai-brown/5 px-2 py-0.5 rounded-md">
                        ⏰ {{ $umkm->operational_hours ?? 'Jam tidak tersedia' }}
                    </span>
                </div>

                <p class="text-nunyai-text/60 text-sm leading-relaxed mb-6 line-clamp-2">
                    {{ $umkm->description }}
                </p>

                <div class="flex items-center gap-3 mb-8 bg-nunyai-bg/10 p-2.5 rounded-2xl w-fit">
                    <img src="{{ asset('storage/umkm/owner/' . ($umkm->owner_photo ?? 'default_owner.jpg')) }}" 
                         class="w-9 h-9 rounded-full border-2 border-white object-cover shadow-sm">
                    <div class="flex flex-col text-left">
                        <span class="text-[9px] text-nunyai-brown/60 font-bold uppercase tracking-tighter leading-none mb-1">Pemilik</span>
                        <span class="text-xs font-bold text-nunyai-text leading-none">{{ $umkm->owner_name }}</span>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-3 mt-auto">
                    <button onclick="showUmkmDetail({{ $umkm->id }})" 
                            class="border-2 border-nunyai-brown text-nunyai-brown hover:bg-nunyai-brown hover:text-white py-3.5 rounded-2xl font-bold text-[10px] transition-all uppercase tracking-widest active:scale-95">
                        👁️ Detail
                    </button>
                    <a href="https://wa.me/{{ '62' . ltrim(preg_replace('/[^0-9]/', '', $umkm->contact), '0') }}" 
                       target="_blank" 
                       class="bg-nunyai-green text-white hover:bg-nunyai-brown py-3.5 rounded-2xl font-bold text-[10px] transition-all text-center shadow-lg shadow-nunyai-green/20 uppercase tracking-widest active:scale-95">
                        💬 Chat WA
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