<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-full mx-auto">

        <!-- Header Halaman -->
        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
                <i data-lucide="gallery-thumbnails" class="w-10 h-10 md:w-12 md:h-12"></i>
            </div>
            <div>
                <h1 class="text-4xl md:text-4xl font-bold text-gray-800 leading-tight">
                    Galeri
                </h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">Tata Letak Masonry dengan Filter & Slider</p>
            </div>
        </div>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Fitur Galeri</h2>
            <ul class="list-disc list-inside space-y-2 text-gray-600 leading-relaxed text-base md:text-lg">
                <li><strong>Tata Letak Masonry:</strong> Grid dinamis yang menyusun gambar secara optimal.</li>
                <li><strong>Filter Kategori:</strong> Tombol untuk menyaring galeri berdasarkan kategori proyek.</li>
                <li><strong>Splide Slider:</strong> Tampilan gambar layar penuh dengan navigasi slider saat gambar di-klik.</li>
                <li><strong>Lazy Loading:</strong> Peningkatan performa dengan memuat gambar saat dibutuhkan, didukung oleh Splide.</li>
                <li><strong>Desain Responsif:</strong> Tampilan optimal di semua perangkat.</li>
            </ul>
        </section>

        <!-- Galeri -->
        <section class="mt-16 pt-10">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Koleksi Galeri</h2>
            
            <div id="gallery-filters" class="mb-8 flex flex-wrap justify-center gap-2">
                <button data-filter="*" class="is-checked bg-blue-600 text-white font-semibold py-2 px-5 rounded-full shadow-md hover:bg-blue-700 transition-colors">Semua</button>
                <button data-filter=".ui-ux" class="bg-gray-200 text-gray-700 font-semibold py-2 px-5 rounded-full hover:bg-gray-300 transition-colors">Desain UI/UX</button>
                <button data-filter=".web-dev" class="bg-gray-200 text-gray-700 font-semibold py-2 px-5 rounded-full hover:bg-gray-300 transition-colors">Web Development</button>
                <button data-filter=".apps" class="bg-gray-200 text-gray-700 font-semibold py-2 px-5 rounded-full hover:bg-gray-300 transition-colors">Aplikasi</button>
            </div>

            <div id="gallery-grid" class="gallery-container">
                <!-- Item galeri akan dirender di sini oleh JavaScript -->
            </div>
        </section>
    </div>

    <!-- Modal untuk Splide Slider (Diperbaiki) -->
    <div id="splide-modal" class="splide-modal fixed inset-0 z-[9999] flex items-center justify-center transition-opacity duration-300 opacity-0 invisible pointer-events-none p-4">
        <!-- Kontainer utama modal yang akan memiliki batas dan terpusat -->
        <div class="splide-modal-container relative w-full max-w-5xl max-h-[90vh] overflow-hidden flex flex-col">
            <div id="splide-main" class="splide flex-1 min-h-0">
                <div class="splide__track h-full">
                    <ul class="splide__list h-full">
                        <!-- Slide items akan dirender di sini oleh JavaScript -->
                    </ul>
                </div>
            </div>
            <!-- Tombol close dipindahkan ke akhir div agar berada di atas track slider -->
            <button id="splide-modal-close" class="absolute top-2 right-2 text-white hover:text-blue-200 z-50 p-1 bg-blue-600 bg-opacity-50 rounded-full hover:bg-opacity-75 transition-all duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>
    </div>
</main>

<!-- Dependensi Eksternal -->
<script src="/assets/vendor/masonry/masonry.pkgd.min.js" defer></script>
<script src="/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js" defer></script>
<script src="/assets/vendor/splide/splide.min.js" defer></script>