<div id="modalOverlay" class="fixed inset-0 z-[9999] hidden bg-nunyai-text/80 backdrop-blur-md flex items-center justify-center p-2 md:p-4 transition-opacity duration-300">
    <div class="bg-white w-full max-w-5xl max-h-[95vh] rounded-[2.5rem] md:rounded-[3.5rem] shadow-2xl overflow-y-auto md:overflow-hidden relative flex flex-col md:flex-row animate-modal-up border border-white/20">
        
        <button onclick="closeUmkmDetail()" class="fixed md:absolute top-4 right-4 z-[10000] bg-white w-10 h-10 md:w-12 md:h-12 rounded-full shadow-2xl flex items-center justify-center font-bold text-nunyai-brown hover:bg-red-500 hover:text-white transition-all active:scale-90 border border-gray-100">✕</button>

        <div class="w-full md:w-5/12 bg-gray-50 p-6 md:p-10 flex flex-col justify-center items-center space-y-4 border-r border-gray-100">
            <div class="flex items-center gap-2 self-start mb-2">
                <span class="w-1.5 h-4 bg-nunyai-brown rounded-full"></span>
                <span id="sliderLabel" class="text-[10px] font-black text-nunyai-brown/50 uppercase tracking-[0.2em]">Foto Produk</span>
            </div>
            <div class="relative w-full group">
                <div class="relative overflow-hidden rounded-[2rem] shadow-lg border-4 border-white aspect-square bg-white">
                    <div id="imageSlider" class="flex transition-transform duration-500 ease-in-out h-full cursor-grab active:cursor-grabbing"></div>
                    
                    <button onclick="changeSlide(-1)" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white/90 text-nunyai-brown p-3 rounded-full shadow-lg transition-all active:scale-75 flex z-10 md:opacity-0 md:group-hover:opacity-100">❮</button>
                    <button onclick="changeSlide(1)" class="absolute right-3 top-1/2 -translate-y-1/2 bg-white/90 text-nunyai-brown p-3 rounded-full shadow-lg transition-all active:scale-75 flex z-10 md:opacity-0 md:group-hover:opacity-100">❯</button>
                </div>
                <div id="sliderDots" class="flex justify-center gap-2 mt-4"></div>
            </div>
        </div>

        <div class="w-full md:w-7/12 p-8 md:p-14 bg-white flex flex-col">
            <div class="flex items-center gap-5 mb-8 border-b border-nunyai-bg/20 pb-8">
                <div class="relative flex-shrink-0">
                    <img id="detOwnerImg" src="" class="w-16 h-16 md:w-24 md:h-24 rounded-full object-cover border-4 border-nunyai-bg shadow-xl">
                </div>
                <div class="flex flex-col">
                    <h4 id="detBusinessName" class="text-xl md:text-3xl font-black text-nunyai-brown leading-tight tracking-tighter"></h4>
                    <p id="detOwnerName" class="text-[10px] md:text-xs text-nunyai-green font-black uppercase tracking-widest mt-1"></p>
                </div>
            </div>

            <div class="space-y-8 flex-grow">
                <div>
                    <h5 class="text-[10px] font-black uppercase text-gray-300 tracking-[0.3em] mb-3 flex items-center gap-2">Deskripsi <span class="h-px bg-gray-100 flex-grow"></span></h5>
                    <p id="detDescription" class="text-nunyai-text/80 leading-relaxed text-sm md:text-base font-medium"></p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 bg-nunyai-bg/10 p-5 md:p-8 rounded-[2.5rem]">
                    <div class="flex items-start gap-3 text-sm group">
                        <span class="bg-white p-2.5 rounded-xl shadow-sm">📍</span>
                        <div class="flex flex-col">
                            <span class="text-[9px] font-black text-gray-400 uppercase tracking-widest leading-none mb-1">Alamat</span>
                            <span id="detAddress" class="font-bold text-nunyai-text leading-tight text-xs"></span>
                        </div>
                    </div>

                    <div class="flex items-center gap-3 text-sm group">
                        <span class="bg-white p-2.5 rounded-xl shadow-sm">⏰</span>
                        <div class="flex flex-col">
                            <span class="text-[9px] font-black text-gray-400 uppercase tracking-widest leading-none mb-1">Operasional</span>
                            <span id="detHours" class="font-bold text-nunyai-text text-xs"></span>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-3 text-sm group">
                        <span class="bg-white p-2.5 rounded-xl shadow-sm">💳</span>
                        <div class="flex flex-col">
                            <span class="text-[9px] font-black text-gray-400 uppercase tracking-widest leading-none mb-1">Pembayaran</span>
                            <span id="detPayment" class="font-black text-nunyai-brown uppercase text-xs"></span>
                        </div>
                    </div>

                    <div class="flex items-center gap-3 text-sm group">
                        <span class="bg-white p-2.5 rounded-xl shadow-sm">🗺️</span>
                        <div class="flex flex-col">
                            <span class="text-[9px] font-black text-gray-400 uppercase tracking-widest leading-none mb-1">Navigasi</span>
                            <a id="detMapsLink" href="#" target="_blank" class="font-bold text-nunyai-green hover:underline text-xs flex items-center gap-1">Buka di Maps</a>
                            <span id="detMapsEmpty" class="hidden font-bold text-gray-400 italic text-xs">-</span>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2 md:col-span-2">
                        <span class="text-[9px] font-black text-gray-400 uppercase tracking-widest leading-none mb-2 ml-1">Sosial Media & Platform</span>
                        <div id="detLinksContainer" class="flex flex-wrap gap-2"></div>
                    </div>
                </div>
            </div>

            <div class="mt-8 pt-6 border-t border-gray-50">
                <a id="modalWaBtn" href="#" target="_blank" class="w-full bg-nunyai-green text-white py-4 rounded-2xl font-black text-[11px] md:text-xs uppercase tracking-[0.2em] shadow-xl hover:bg-nunyai-brown transition-all duration-300 flex justify-center items-center gap-3 active:scale-95">Hubungi via WhatsApp</a>
            </div>
        </div>
    </div>
</div>

<script>
    const allUmkm = {!! json_encode($umkms) !!};
    let currentSlideIndex = 0;
    let totalSlides = 0;
    
    // Variabel Deteksi Swipe
    let touchStartX = 0;
    let touchEndX = 0;

    function initSwipeFeature() {
        const slider = document.getElementById('imageSlider');
        slider.addEventListener('touchstart', e => {
            touchStartX = e.changedTouches[0].screenX;
        }, {passive: true});

        slider.addEventListener('touchend', e => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipeGesture();
        }, {passive: true});
    }

    function handleSwipeGesture() {
        const threshold = 50; // Minimal geser 50px
        if (touchStartX - touchEndX > threshold) changeSlide(1); // Geser Kiri -> Next
        if (touchEndX - touchStartX > threshold) changeSlide(-1); // Geser Kanan -> Prev
    }

    function showUmkmDetail(id) {
        const data = allUmkm.find(u => u.id === id);
        if (!data) return;

        // Reset & Isi Data
        document.getElementById('detBusinessName').innerText = data.business_name || '-';
        document.getElementById('detOwnerName').innerText = "Milik: " + (data.owner_name || '-');
        document.getElementById('detDescription').innerText = data.description || 'Tidak ada deskripsi.';
        document.getElementById('detAddress').innerText = data.address || '-';
        document.getElementById('detHours').innerText = data.operational_hours || '-';
        document.getElementById('detPayment').innerText = data.payment_method || '-';

        // Gmaps & WA Logic
        setupMapsAndWA(data);

        // Setup Slider & Links
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
        if (data.google_maps_status) {
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
        
        let images = [{ src: `/storage/umkm/tempat/${data.store_photo || 'default.jpg'}`, label: 'Tempat Usaha' }];
        if (data.photos) data.photos.forEach((photo, idx) => images.push({ src: `/storage/umkm/produk/${photo.photo_path}`, label: photo.caption || `Produk ${idx+1}` }));
        
        totalSlides = images.length; currentSlideIndex = 0;
        images.forEach((img, idx) => {
            sliderContainer.innerHTML += `<img src="${img.src}" class="w-full h-full object-cover flex-shrink-0 select-none pointer-events-none" data-label="${img.label}">`;
            dotsContainer.innerHTML += `<button onclick="goToSlide(${idx})" class="w-2 h-2 rounded-full transition-all duration-300 ${idx === 0 ? 'bg-nunyai-brown w-6' : 'bg-gray-300'}"></button>`;
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
                container.innerHTML += `<a href="${url}" target="_blank" class="flex items-center gap-2 px-3 py-2 bg-white rounded-xl shadow-sm border border-gray-100 hover:bg-nunyai-green hover:text-white transition-all text-[10px] font-bold"><span>${link.platform_name}</span></a>`;
            });
        } else {
            container.innerHTML = '<span class="text-[10px] text-gray-400 italic">-</span>';
        }
    }

    function changeSlide(direction) { currentSlideIndex = (currentSlideIndex + direction + totalSlides) % totalSlides; updateSliderPosition(); }
    function goToSlide(idx) { currentSlideIndex = idx; updateSliderPosition(); }
    function updateSliderPosition() {
        const slider = document.getElementById('imageSlider');
        const dots = document.getElementById('sliderDots').children;
        const label = document.getElementById('sliderLabel');
        slider.style.transform = `translateX(-${currentSlideIndex * 100}%)`;
        for (let i = 0; i < dots.length; i++) dots[i].className = `w-2 h-2 rounded-full transition-all duration-300 ${i === currentSlideIndex ? 'bg-nunyai-brown w-6' : 'bg-gray-300'}`;
        const activeImg = slider.children[currentSlideIndex];
        if(activeImg) label.innerText = activeImg.getAttribute('data-label');
    }

    function closeUmkmDetail() { document.getElementById('modalOverlay').classList.replace('flex', 'hidden'); document.body.style.overflow = 'auto'; }
</script>