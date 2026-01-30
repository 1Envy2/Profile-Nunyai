<div id="modalOverlay" class="fixed inset-0 z-[9999] hidden bg-[#442D1C]/95 backdrop-blur-md flex items-center justify-center p-2 md:p-6 transition-opacity duration-300">
    
    <div class="bg-white w-full max-w-6xl h-[90vh] md:h-[85vh] rounded-[2.5rem] md:rounded-[3.5rem] shadow-2xl overflow-hidden relative flex flex-col md:flex-row border border-white/20 animate-modal-up">
        
        <button onclick="closeUmkmDetail()" class="absolute top-3 right-3 md:top-6 md:right-6 z-[10000] bg-white/90 w-10 h-10 md:w-12 md:h-12 rounded-xl shadow-xl flex items-center justify-center font-black text-[#442D1C] hover:bg-red-500 hover:text-white transition-all active:scale-90">✕</button>

        <div class="w-full md:w-5/12 bg-[#E8D1A7]/20 p-4 md:p-12 flex flex-col justify-center items-center flex-shrink-0 border-b md:border-b-0 md:border-r border-[#442D1C]/5">
            <div class="relative w-full max-w-[260px] md:max-w-none">
                
                <div class="flex items-center gap-2 mb-3 bg-white/50 w-fit px-3 py-1 rounded-full">
                    <span class="w-1.5 h-1.5 bg-[#72891B] rounded-full animate-pulse"></span>
                    <span id="sliderLabel" class="text-[9px] font-black text-[#84592B] uppercase tracking-[0.2em]">Galeri</span>
                </div>

                <div id="sliderFrame" class="relative overflow-hidden rounded-[1.5rem] md:rounded-[2.5rem] shadow-xl border-4 md:border-8 border-white aspect-[4/3] md:aspect-square bg-white">
                    <div id="imageSlider" class="flex transition-transform duration-500 h-full w-full"></div>

                    <button onclick="changeSlide(-1)" class="absolute left-2 top-1/2 -translate-y-1/2 bg-white/80 backdrop-blur-sm text-[#442D1C] w-9 h-9 md:w-11 md:h-11 rounded-lg flex items-center justify-center shadow-lg active:scale-75 transition-all z-20">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                    <button onclick="changeSlide(1)" class="absolute right-2 top-1/2 -translate-y-1/2 bg-white/80 backdrop-blur-sm text-[#442D1C] w-9 h-9 md:w-11 md:h-11 rounded-lg flex items-center justify-center shadow-lg active:scale-75 transition-all z-20">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                </div>

                <div id="sliderDots" class="flex justify-center gap-1.5 mt-4"></div>
            </div>
        </div>

        <div class="w-full md:w-7/12 flex flex-col h-full bg-white overflow-hidden">
            
            <div class="p-5 md:p-12 pb-3 md:pb-8 flex items-center gap-3 md:gap-6 border-b border-[#E8D1A7]/30 flex-shrink-0">
                <img id="detOwnerImg" src="" class="w-12 h-12 md:w-24 md:h-24 rounded-xl md:rounded-[2rem] object-cover border-2 md:border-4 border-[#E8D1A7] shadow-lg rotate-2">
                <div class="flex flex-col text-left">
                    <h4 id="detBusinessName" class="text-lg md:text-3xl font-black text-[#442D1C] leading-none tracking-tighter italic uppercase"></h4>
                    <p id="detOwnerName" class="text-[8px] md:text-xs text-[#72891B] font-black uppercase tracking-widest mt-0.5 md:mt-1"></p>
                </div>
            </div>

            <div class="flex-1 overflow-y-auto min-h-0 p-5 md:p-12 pt-4 custom-scrollbar">
                <div class="space-y-6">
                    <div>
                        <h5 class="text-[9px] md:text-[11px] font-black uppercase text-[#84592B]/40 tracking-[0.4em] mb-2 flex items-center gap-2 italic">
                            PROFIL <span class="h-px bg-[#E8D1A7] flex-grow opacity-30"></span>
                        </h5>
                        <p id="detDescription" class="text-[#442D1C]/80 leading-snug text-xs md:text-base font-medium italic"></p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 bg-[#E8D1A7]/10 p-4 md:p-8 rounded-[1.5rem] md:rounded-[2.5rem]">
                        <div class="flex items-start gap-3">
                            <span class="bg-white p-2 rounded-xl shadow-sm">📍</span>
                            <div class="flex flex-col">
                                <span class="text-[7px] md:text-[9px] font-black text-[#84592B]/50 uppercase tracking-widest leading-none mb-1">Alamat</span>
                                <span id="detAddress" class="font-bold text-[#442D1C] text-[10px] md:text-xs leading-tight"></span>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="bg-white p-2 rounded-xl shadow-sm">⏰</span>
                            <div class="flex flex-col">
                                <span class="text-[7px] md:text-[9px] font-black text-[#84592B]/50 uppercase tracking-widest leading-none mb-1">Operasional</span>
                                <span id="detHours" class="font-bold text-[#442D1C] text-[10px] md:text-xs"></span>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="bg-white p-2 rounded-xl shadow-sm">💳</span>
                            <div class="flex flex-col">
                                <span class="text-[7px] md:text-[9px] font-black text-[#84592B]/50 uppercase tracking-widest leading-none mb-1">Bayar</span>
                                <span id="detPayment" class="font-black text-[#72891B] uppercase text-[10px] md:text-xs"></span>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="bg-white p-2 rounded-xl shadow-sm">🗺️</span>
                            <div class="flex flex-col">
                                <span class="text-[7px] md:text-[9px] font-black text-[#84592B]/50 uppercase tracking-widest leading-none mb-1">Peta</span>
                                <a id="detMapsLink" href="#" target="_blank" class="font-bold text-[#442D1C] underline text-[10px] md:text-xs italic">Buka Navigasi</a>
                            </div>
                        </div>

                        <div class="flex flex-col gap-2 md:col-span-2 mt-2 pt-4 border-t border-[#442D1C]/5 text-left">
                            <span class="text-[8px] md:text-[10px] font-black text-[#84592B]/50 uppercase tracking-widest italic">Link Digital</span>
                            <div id="detLinksContainer" class="flex flex-wrap gap-2"></div>
                        </div>
                    </div>
                </div>
                <div class="h-10 md:hidden"></div> </div>

            <div class="p-5 md:p-12 pt-3 md:pt-6 border-t border-[#E8D1A7]/30 flex-shrink-0 bg-white">
                <a id="modalWaBtn" href="#" target="_blank" class="w-full bg-[#72891B] text-white py-4 md:py-5 rounded-xl md:rounded-2xl font-black text-[10px] md:text-xs uppercase tracking-[0.2em] shadow-xl flex justify-center items-center gap-3 active:scale-95 transition-all">
                    Hubungi via WhatsApp
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    const allUmkm = {!! json_encode($umkms) !!};
    let currentSlideIndex = 0;
    let totalSlides = 0;

    function showUmkmDetail(id) {
        const data = allUmkm.find(u => u.id === id);
        if (!data) return;

        document.getElementById('detBusinessName').innerText = data.business_name || '-';
        document.getElementById('detOwnerName').innerText = "MILIK: " + (data.owner_name || '-');
        document.getElementById('detDescription').innerText = data.description || 'Informasi sedang diperbarui.';
        document.getElementById('detAddress').innerText = data.address || '-';
        document.getElementById('detHours').innerText = data.operational_hours || '-';
        document.getElementById('detPayment').innerText = data.payment_method || '-';

        setupMapsAndWA(data);
        setupSlider(data);
        setupLinks(data);

        document.getElementById('detOwnerImg').src = `/storage/umkm/owner/${data.owner_photo || 'default_owner.jpg'}`;
        document.getElementById('modalOverlay').classList.replace('hidden', 'flex');
        document.body.style.overflow = 'hidden'; 
    }

    function setupSlider(data) {
        const sliderContainer = document.getElementById('imageSlider');
        const dotsContainer = document.getElementById('sliderDots');
        sliderContainer.innerHTML = ''; dotsContainer.innerHTML = '';
        
        let images = [{ src: `/storage/umkm/tempat/${data.store_photo || 'default.jpg'}`, label: 'Tempat' }];
        if (data.photos) data.photos.forEach((p, idx) => images.push({ src: `/storage/umkm/produk/${p.photo_path}`, label: `Produk ${idx+1}` }));
        
        totalSlides = images.length; 
        currentSlideIndex = 0;

        images.forEach((img, idx) => {
            sliderContainer.innerHTML += `<img src="${img.src}" class="w-full h-full object-cover flex-shrink-0 select-none" data-label="${img.label}">`;
            dotsContainer.innerHTML += `<div class="dot-item w-1.5 h-1.5 rounded-full transition-all duration-300 ${idx === 0 ? 'bg-[#84592B] w-4' : 'bg-gray-200'}"></div>`;
        });
        
        goToSlide(0);
    }

    function goToSlide(idx) {
        currentSlideIndex = idx;
        const slider = document.getElementById('imageSlider');
        slider.style.transform = `translateX(-${currentSlideIndex * 100}%)`;

        const dots = document.getElementById('sliderDots').children;
        for (let i = 0; i < dots.length; i++) {
            dots[i].className = `dot-item w-1.5 h-1.5 rounded-full transition-all duration-300 ${i === currentSlideIndex ? 'bg-[#84592B] w-4' : 'bg-gray-200'}`;
        }
        
        const activeImg = slider.children[idx];
        if(activeImg) document.getElementById('sliderLabel').innerText = activeImg.getAttribute('data-label');
    }

    function changeSlide(direction) {
        let next = currentSlideIndex + direction;
        if (next < 0) next = totalSlides - 1;
        if (next >= totalSlides) next = 0;
        goToSlide(next);
    }

    function setupMapsAndWA(data) {
        const mapsLink = document.getElementById('detMapsLink');
        if (data.google_maps_status && data.google_maps_status.startsWith('http')) {
            mapsLink.href = data.google_maps_status;
            mapsLink.classList.remove('hidden');
        } else {
            mapsLink.classList.add('hidden');
        }
        let rawContact = data.contact.replace(/[^0-9]/g, '');
        if (rawContact.startsWith('0')) rawContact = '62' + rawContact.substring(1);
        else if (rawContact.startsWith('8')) rawContact = '62' + rawContact;
        document.getElementById('modalWaBtn').href = `https://wa.me/${rawContact}`;
    }

    function setupLinks(data) {
        const container = document.getElementById('detLinksContainer');
        container.innerHTML = '';
        if (data.links && data.links.length > 0) {
            data.links.forEach(link => {
                let url = link.url;
                if (!url.startsWith('http') && link.platform_name.toLowerCase() === 'instagram') url = `https://www.instagram.com/${url.replace('@', '')}/`;
                container.innerHTML += `<a href="${url}" target="_blank" class="px-3 py-1 bg-[#E8D1A7]/30 rounded-lg text-[8px] font-black text-[#442D1C] uppercase tracking-wider italic"><span>${link.platform_name}</span></a>`;
            });
        }
    }

    function closeUmkmDetail() { 
        document.getElementById('modalOverlay').classList.replace('flex', 'hidden'); 
        document.body.style.overflow = 'auto'; 
    }
</script>