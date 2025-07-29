<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-full mx-auto">

        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
                <i data-lucide="sparkles" class="w-10 h-10 md:w-12 md:h-12"></i>
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">
                    Hero Section Inovatif
                </h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">
                    Slider Interaktif yang Memukau dengan Animasi Dinamis.
                </p>
            </div>
        </div>

        <section class="mt-16 pt-10 mb-10 md:mb-12">
            <div class="relative w-full h-[450px] md:h-[550px] lg:h-[650px] overflow-hidden rounded-xl shadow-2xl hero-section-main group">
                <div id="splide-hero-main" class="splide h-full">
                    <div class="splide__track h-full">
                        <ul class="splide__list h-full">
                            <!-- SLIDE 1: Inovasi (Rata Kiri) -->
                            <li class="splide__slide">
                                <img data-splide-lazy="https://placehold.co/1920x650/4f46e5/ffffff?text=Inovasi+Masa+Depan" alt="Inovasi Masa Depan" class="splide-img w-full h-full object-cover transition-transform duration-1000 ease-out">
                                <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-transparent flex flex-col justify-center items-start text-white p-8 md:p-12 lg:p-20 text-left splide-caption opacity-0 transition-opacity duration-500">
                                    <i data-lucide="lightbulb" class="w-12 h-12 md:w-16 md:h-16 text-yellow-300 mb-4 hero-icon"></i>
                                    <h2 class="text-4xl md:text-6xl font-extrabold mb-4 drop-shadow-lg hero-heading">EazZy UI: Inovasi Tanpa Batas</h2>
                                    <p class="text-lg md:text-xl max-w-3xl mb-8 drop-shadow-md hero-text">Wujudkan ide-ide terliar Anda dengan komponen UI yang intuitif dan fungsional.</p>
                                    <a href="#" class="inline-flex items-center gap-2 bg-blue-600 text-white font-bold px-8 py-4 rounded-full text-lg hover:bg-blue-700 transition-colors duration-300 shadow-lg transform hover:scale-105 hero-cta">
                                        Jelajahi Solusi <i data-lucide="arrow-right" class="w-5 h-5"></i>
                                    </a>
                                </div>
                            </li>
                            <!-- SLIDE 2: Desain (Rata Tengah) -->
                            <li class="splide__slide">
                                <img data-splide-lazy="https://placehold.co/1920x650/ef4444/ffffff?text=Desain+Intuitif" alt="Desain Intuitif" class="splide-img w-full h-full object-cover transition-transform duration-1000 ease-out">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent flex flex-col items-center justify-center text-white text-center p-8 md:p-12 lg:p-20 splide-caption opacity-0 transition-opacity duration-500">
                                    <i data-lucide="layout-grid" class="w-12 h-12 md:w-16 md:h-16 text-blue-300 mb-4 hero-icon"></i>
                                    <h2 class="text-4xl md:text-6xl font-extrabold mb-4 drop-shadow-lg hero-heading">Pengalaman Pengguna Prioritas Utama</h2>
                                    <p class="text-lg md:text-xl max-w-3xl mb-8 drop-shadow-md hero-text">Bangun aplikasi yang tidak hanya indah, tetapi juga mudah digunakan.</p>
                                    <a href="#" class="inline-flex items-center gap-2 bg-green-500 text-white font-bold px-8 py-4 rounded-full text-lg hover:bg-green-600 transition-colors duration-300 shadow-lg transform hover:scale-105 hero-cta">
                                        Pelajari Desain <i data-lucide="sparkles" class="w-5 h-5"></i>
                                    </a>
                                </div>
                            </li>
                            <!-- SLIDE 3: Pengembangan (Rata Kanan) -->
                            <li class="splide__slide">
                                <img data-splide-lazy="https://placehold.co/1920x650/06b6d4/ffffff?text=Pengembangan+Cepat" alt="Pengembangan Cepat" class="splide-img w-full h-full object-cover transition-transform duration-1000 ease-out">
                                <div class="absolute inset-0 bg-gradient-to-l from-black/70 to-transparent flex flex-col justify-center items-end text-white p-8 md:p-12 lg:p-20 text-right splide-caption opacity-0 transition-opacity duration-500">
                                    <i data-lucide="rocket" class="w-12 h-12 md:w-16 md:h-16 text-red-300 mb-4 hero-icon"></i>
                                    <h2 class="text-4xl md:text-6xl font-extrabold mb-4 drop-shadow-lg hero-heading">Akselerasi Proyek Anda</h2>
                                    <p class="text-lg md:text-xl max-w-3xl mb-8 drop-shadow-md hero-text">Hemat waktu berjam-jam dengan aset UI/UX yang siap pakai dan modular.</p>
                                    <a href="#" class="inline-flex items-center gap-2 border-2 border-white text-white font-bold px-8 py-4 rounded-full text-lg hover:bg-white hover:text-blue-600 transition-colors duration-300 shadow-lg transform hover:scale-105 hero-cta">
                                        Mulai Sekarang <i data-lucide="chevron-right" class="w-5 h-5"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<script src="/assets/vendor/splide/splide.min.js" defer></script>
<script src="/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js" defer></script>