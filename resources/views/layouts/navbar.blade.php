<nav class="bg-nunyai-brown shadow-2xl sticky top-0 z-[60] border-b border-white/5">
    <div class="max-w-7xl mx-auto px-6 h-20 md:h-24 flex justify-between items-center">
        
        <a href="/" class="flex items-center space-x-3 group relative z-[70]">
            <div class="bg-nunyai-bg p-2 rounded-xl transition-all duration-500 group-hover:rotate-12 shadow-lg">
                <span class="text-nunyai-brown font-black text-xl md:text-2xl">N</span>
            </div>
            <div class="flex flex-col">
                <span class="text-nunyai-bg font-black text-lg md:text-xl tracking-tighter leading-none uppercase">Nunyai</span>
                <span class="text-nunyai-bg/60 font-bold text-[9px] tracking-[0.2em] uppercase mt-1">Profile</span>
            </div>
        </a>

        <button id="mobile-menu-button" class="md:hidden relative z-[70] text-nunyai-bg p-2 focus:outline-none">
            <svg id="hamburger-icon" class="w-8 h-8 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <svg id="close-icon" class="w-8 h-8 hidden transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <div id="nav-menu" class="fixed md:relative inset-0 md:inset-auto bg-nunyai-brown md:bg-transparent flex flex-col md:flex-row items-center justify-center md:justify-end space-y-8 md:space-y-0 md:space-x-10 transition-all duration-500 ease-in-out opacity-0 md:opacity-100 pointer-events-none md:pointer-events-auto transform translate-x-full md:translate-x-0 z-[65]">
            <a href="/" class="nav-underline relative text-nunyai-bg/80 text-lg md:text-xs font-black tracking-[0.2em] hover:text-white transition {{ Request::is('/') ? 'nav-active text-white' : '' }}">
                BERANDA
            </a>
            
            <a href="/umkm" class="bg-nunyai-green text-white px-10 md:px-8 py-4 md:py-3 rounded-full font-black text-base md:text-xs tracking-[0.2em] shadow-lg hover:bg-white hover:text-nunyai-green transition-all transform active:scale-95 shadow-nunyai-green/20">
                DATA UMKM
            </a>
        </div>
    </div>
</nav>

<script>
    const btn = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('nav-menu');
    const hIcon = document.getElementById('hamburger-icon');
    const cIcon = document.getElementById('close-icon');

    btn.addEventListener('click', () => {
        const isOpen = menu.classList.contains('translate-x-0');
        
        if (isOpen) {
            // Tutup Menu
            menu.classList.remove('opacity-100', 'translate-x-0', 'pointer-events-auto');
            menu.classList.add('opacity-0', 'translate-x-full', 'pointer-events-none');
            hIcon.classList.remove('hidden');
            cIcon.classList.add('hidden');
            document.body.style.overflow = 'auto';
        } else {
            // Buka Menu
            menu.classList.add('opacity-100', 'translate-x-0', 'pointer-events-auto');
            menu.classList.remove('opacity-0', 'translate-x-full', 'pointer-events-none');
            hIcon.classList.add('hidden');
            cIcon.classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Kunci scroll saat menu buka
        }
    });
</script>