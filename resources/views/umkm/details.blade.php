<div id="modalOverlay" class="fixed inset-0 z-[9999] hidden bg-[#442D1C]/90 backdrop-blur-md flex items-center justify-center p-2 md:p-6 transition-opacity duration-300">
    
    <div class="bg-white w-full max-w-6xl h-full max-h-[90vh] rounded-[2.5rem] md:rounded-[3.5rem] shadow-2xl overflow-hidden relative flex flex-col md:flex-row border border-white/20 animate-modal-up">
        
        <button onclick="closeUmkmDetail()" class="absolute top-4 right-4 md:top-6 md:right-6 z-[10000] bg-white w-10 h-10 md:w-12 md:h-12 rounded-2xl shadow-xl flex items-center justify-center font-black text-[#442D1C] hover:bg-red-500 hover:text-white transition-all active:scale-90 border border-gray-100">✕</button>

        <div class="w-full md:w-5/12 bg-[#E8D1A7]/20 p-6 md:p-10 flex flex-col justify-center items-center space-y-4 border-b md:border-b-0 md:border-r border-[#442D1C]/5 flex-shrink-0">
            <div class="flex items-center gap-2 self-start mb-2 bg-white/50 px-3 py-1.5 rounded-full">
                <span class="w-1.5 h-1.5 bg-[#72891B] rounded-full animate-ping"></span>
                <span id="sliderLabel" class="text-[9px] font-black text-[#84592B] uppercase tracking-[0.2em]">Galeri Foto</span>
            </div>
            <div class="relative w-full group">
                <div class="relative overflow-hidden rounded-[2rem] shadow-xl border-4 border-white aspect-square bg-white">
                    <div id="imageSlider" class="flex transition-transform duration-500 ease-in-out h-full cursor-grab active:cursor-grabbing"></div>
                    <button onclick="changeSlide(-1)" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white/90 text-[#84592B] p-2.5 rounded-xl shadow-lg transition-all active:scale-75 flex z-10 opacity-0 group-hover:opacity-100">❮</button>
                    <button onclick="changeSlide(1)" class="absolute right-3 top-1/2 -translate-y-1/2 bg-white/90 text-[#84592B] p-2.5 rounded-xl shadow-lg transition-all active:scale-75 flex z-10 opacity-0 group-hover:opacity-100">❯</button>
                </div>
                <div id="sliderDots" class="flex justify-center gap-2 mt-4"></div>
            </div>
        </div>

        <div class="w-full md:w-7/12 flex flex-col h-full overflow-hidden bg-white">
            
            <div class="p-8 md:p-12 pb-6 flex items-center gap-5 border-b border-[#E8D1A7]/30 flex-shrink-0">
                <div class="relative flex-shrink-0">
                    <img id="detOwnerImg" src="" class="w-16 h-16 md:w-24 md:h-24 rounded-[1.5rem] object-cover border-4 border-[#E8D1A7] shadow-xl rotate-2">
                </div>
                <div class="flex flex-col">
                    <h4 id="detBusinessName" class="text-xl md:text-3xl font-black text-[#442D1C] leading-tight tracking-tighter"></h4>
                    <p id="detOwnerName" class="text-[10px] md:text-xs text-[#72891B] font-black uppercase tracking-widest mt-1"></p>
                </div>
            </div>

            <div class="flex-1 overflow-y-auto min-h-0 p-8 md:p-12 pt-4 custom-scrollbar">
                <div class="space-y-8">
                    <div>
                        <h5 class="text-[10px] font-black uppercase text-[#84592B]/40 tracking-[0.3em] mb-3 flex items-center gap-2">
                            Profil Usaha <span class="h-px bg-[#E8D1A7]/50 flex-grow"></span>
                        </h5>
                        <p id="detDescription" class="text-[#442D1C]/80 leading-relaxed text-sm md:text-base font-medium italic"></p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 bg-[#E8D1A7]/10 p-5 md:p-8 rounded-[2.5rem]">
                        <div class="flex items-start gap-3">
                            <span class="bg-white p-2 rounded-xl shadow-sm text-sm">📍</span>
                            <div class="flex flex-col">
                                <span class="text-[9px] font-black text-gray-400 uppercase tracking-widest leading-none mb-1">Alamat</span>
                                <span id="detAddress" class="font-bold text-[#442D1C] text-xs leading-tight"></span>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="bg-white p-2 rounded-xl shadow-sm text-sm">⏰</span>
                            <div class="flex flex-col">
                                <span class="text-[9px] font-black text-gray-400 uppercase tracking-widest leading-none mb-1">Operasional</span>
                                <span id="detHours" class="font-bold text-[#442D1C] text-xs"></span>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="bg-white p-2 rounded-xl shadow-sm text-sm">💳</span>
                            <div class="flex flex-col">
                                <span class="text-[9px] font-black text-gray-400 uppercase tracking-widest leading-none mb-1">Pembayaran</span>
                                <span id="detPayment" class="font-black text-[#72891B] uppercase text-xs"></span>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="bg-white p-2 rounded-xl shadow-sm text-sm">🗺️</span>
                            <div class="flex flex-col">
                                <span class="text-[9px] font-black text-gray-400 uppercase tracking-widest leading-none mb-1">Navigasi</span>
                                <a id="detMapsLink" href="#" target="_blank" class="font-bold text-[#442D1C] hover:text-[#72891B] underline text-xs">Petunjuk Jalan</a>
                                <span id="detMapsEmpty" class="hidden font-bold text-gray-400 italic text-xs">-</span>
                            </div>
                        </div>

                        <div class="flex flex-col gap-3 md:col-span-2 mt-4 pt-6 border-t border-[#442D1C]/5">
                            <span class="text-[9px] font-black text-gray-400 uppercase tracking-widest mb-1">Tautan & Platform Digital</span>
                            <div id="detLinksContainer" class="flex flex-wrap gap-2"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-8 md:p-12 pt-6 border-t border-[#E8D1A7]/30 flex-shrink-0 bg-white">
                <a id="modalWaBtn" href="#" target="_blank" class="w-full bg-[#72891B] text-white py-4 rounded-2xl font-black text-[11px] md:text-xs uppercase tracking-[0.2em] shadow-xl hover:bg-[#442D1C] transition-all flex justify-center items-center gap-3 active:scale-95">
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
    let touchStartX = 0;
    let touchEndX = 0;

    function initSwipeFeature() {
        const slider = document.getElementById('imageSlider');
        slider.addEventListener('touchstart', e => { touchStartX = e.changedTouches[0].screenX; }, {passive: true});
        slider.addEventListener('touchend', e => { touchEndX = e.changedTouches[0].screenX; handleSwipeGesture(); }, {passive: true});
    }

    function handleSwipeGesture() {
        const threshold = 50;
        if (touchStartX - touchEndX > threshold) changeSlide(1);
        if (touchEndX - touchStartX > threshold) changeSlide(-1);
    }

    function showUmkmDetail(id) {
        const data = allUmkm.find(u => u.id === id);
        if (!data) return;

        document.getElementById('detBusinessName').innerText = data.business_name || '-';
        document.getElementById('detOwnerName').innerText = "Milik: " + (data.owner_name || '-');
        document.getElementById('detDescription').innerText = data.description || 'Tidak ada deskripsi.';
        document.getElementById('detAddress').innerText = data.address || '-';
        document.getElementById('detHours').innerText = data.operational_hours || '-';
        document.getElementById('detPayment').innerText = data.payment_method || '-';

        setupMapsAndWA(data);
        setupSlider(data);
        setupLinks(data);
        initSwipeFeature();

        document.getElementById('detOwnerImg').src = `/storage/umkm/owner/${data.owner_photo || 'default_owner.jpg'}`;
        document.getElementById('modalOverlay').classList.replace('hidden', 'flex');
        document.body.style.overflow = 'hidden'; 
    }

    function setupMapsAndWA(data) {
        const mapsLink = document.getElementById('detMapsLink');
        const mapsEmpty = document.getElementById('detMapsEmpty');
        if (data.google_maps_status && data.google_maps_status.startsWith('http')) {
            mapsLink.href = data.google_maps_status;
            mapsLink.classList.remove('hidden');
            mapsEmpty.classList.add('hidden');
        } else {
            mapsLink.classList.add('hidden');
            mapsEmpty.classList.remove('hidden');
        }
        let rawContact = data.contact.replace(/[^0-9]/g, '');
        if (rawContact.startsWith('0')) rawContact = '62' + rawContact.substring(1);
        else if (rawContact.startsWith('8')) rawContact = '62' + rawContact;
        document.getElementById('modalWaBtn').href = `https://wa.me/${rawContact}`;
    }

    function setupSlider(data) {
        const sliderContainer = document.getElementById('imageSlider');
        const dotsContainer = document.getElementById('sliderDots');
        sliderContainer.innerHTML = ''; dotsContainer.innerHTML = '';
        let images = [{ src: `/storage/umkm/tempat/${data.store_photo || 'default.jpg'}`, label: 'Tampilan Utama' }];
        if (data.photos) data.photos.forEach((photo, idx) => images.push({ src: `/storage/umkm/produk/${photo.photo_path}`, label: photo.caption || `Foto ${idx+1}` }));
        totalSlides = images.length; currentSlideIndex = 0;
        images.forEach((img, idx) => {
            sliderContainer.innerHTML += `<img src="${img.src}" class="w-full h-full object-cover flex-shrink-0 select-none pointer-events-none" data-label="${img.label}">`;
            dotsContainer.innerHTML += `<button onclick="goToSlide(${idx})" class="w-2 h-2 rounded-full transition-all duration-300 ${idx === 0 ? 'bg-[#84592B] w-6' : 'bg-gray-200'}"></button>`;
        });
        updateSliderPosition();
    }

    function setupLinks(data) {
        const container = document.getElementById('detLinksContainer');
        container.innerHTML = '';
        if (data.links && data.links.length > 0) {
            data.links.forEach(link => {
                let url = link.url;
                if (!url.startsWith('http') && link.platform_name.toLowerCase() === 'instagram') url = `https://www.instagram.com/${url.replace('@', '')}/`;
                container.innerHTML += `<a href="${url}" target="_blank" class="flex items-center gap-2 px-3 py-1.5 bg-[#E8D1A7]/20 rounded-xl border border-transparent hover:border-[#72891B] hover:bg-white transition-all text-[9px] font-black text-[#442D1C] uppercase tracking-widest italic"><span>${link.platform_name}</span></a>`;
            });
        } else {
            container.innerHTML = '<span class="text-[10px] text-gray-300 italic">Belum ada tautan tambahan</span>';
        }
    }

    function changeSlide(direction) { currentSlideIndex = (currentSlideIndex + direction + totalSlides) % totalSlides; updateSliderPosition(); }
    function goToSlide(idx) { currentSlideIndex = idx; updateSliderPosition(); }
    function updateSliderPosition() {
        const slider = document.getElementById('imageSlider');
        const dots = document.getElementById('sliderDots').children;
        const label = document.getElementById('sliderLabel');
        slider.style.transform = `translateX(-${currentSlideIndex * 100}%)`;
        for (let i = 0; i < dots.length; i++) dots[i].className = `w-2 h-2 rounded-full transition-all duration-300 ${i === currentSlideIndex ? 'bg-[#84592B] w-6' : 'bg-gray-200'}`;
        const activeImg = slider.children[currentSlideIndex];
        if(activeImg) label.innerText = activeImg.getAttribute('data-label');
    }

    function closeUmkmDetail() { document.getElementById('modalOverlay').classList.replace('flex', 'hidden'); document.body.style.overflow = 'auto'; }
</script>