<style>
.line-item {
  position: absolute;
  background-color: rgba(255, 255, 255, 0.3); /* Warna garis putih semi-transparan */
  box-shadow: 0 0 5px rgba(255, 255, 255, 0.5); /* Memberi efek sedikit bersinar */
  opacity: 0;
  transition: all 1.5s cubic-bezier(0.25, 1, 0.5, 1); /* Transisi untuk semua properti */
}

.line-item.is-visible {
  opacity: 1;
}
</style>
<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-full mx-auto">

        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-teal-100 text-teal-600 p-4 rounded-full mb-4 md:mb-0">
                <i data-lucide="cpu" class="w-10 h-10 md:w-12 md:h-12"></i>
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">
                    Hero Section v3: Tech Circuit
                </h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">
                    Variasi dengan animasi ikon energik dan efek latar sirkuit elektronik.
                </p>
            </div>
        </div>

        <section class="mt-16 pt-10 mb-10 md:mb-12">
            <div class="relative w-full h-[450px] md:h-[550px] lg:h-[650px] overflow-hidden rounded-xl shadow-2xl hero-section-main group">
                <div id="splide-hero-main-v3" class="splide h-full">
                    <div class="splide__track h-full">
                        <ul class="splide__list h-full">
                            <!-- SLIDE 1 -->
                            <li class="splide__slide" style="background-color: #2563EB;">
                                <div class="splide-caption absolute inset-0 flex flex-col justify-center items-start p-8 md:p-12 lg:p-20 text-left">
                                    <div class="circuit-container absolute inset-0 overflow-hidden"></div>
                                    <div class="relative z-10 text-white">
                                        <i data-lucide="lightbulb" class="w-12 h-12 md:w-16 md:h-16 mb-4 hero-icon"></i>
                                        <h2 class="text-4xl md:text-6xl font-extrabold mb-4 drop-shadow-lg hero-heading">EazZy UI: Inovasi Tanpa Batas</h2>
                                        <p class="text-lg md:text-xl max-w-3xl mb-8 drop-shadow-md hero-text">Wujudkan ide-ide terliar Anda.</p>
                                        <a href="#" class="inline-flex items-center gap-2 bg-white text-blue-600 font-bold px-8 py-4 rounded-full text-lg hover:bg-gray-200 transition-colors duration-300 shadow-lg transform hover:scale-105 hero-cta">
                                            Jelajahi Solusi <i data-lucide="arrow-right" class="w-5 h-5"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!-- SLIDE 2 -->
                            <li class="splide__slide" style="background-color: #2563EB;">
                                <div class="splide-caption absolute inset-0 flex flex-col items-center justify-center text-white text-center p-8 md:p-12 lg:p-20">
                                    <div class="circuit-container absolute inset-0 overflow-hidden"></div>
                                    <div class="relative z-10 text-white">
                                        <i data-lucide="layout-grid" class="w-12 h-12 md:w-16 md:h-16 mb-4 hero-icon"></i>
                                        <h2 class="text-4xl md:text-6xl font-extrabold mb-4 drop-shadow-lg hero-heading">Pengalaman Pengguna Prioritas</h2>
                                        <p class="text-lg md:text-xl max-w-3xl mb-8 drop-shadow-md hero-text">Bangun aplikasi yang indah dan mudah digunakan.</p>
                                        <a href="#" class="inline-flex items-center gap-2 bg-white text-blue-600 font-bold px-8 py-4 rounded-full text-lg hover:bg-gray-200 transition-colors duration-300 shadow-lg transform hover:scale-105 hero-cta">
                                            Pelajari Desain <i data-lucide="sparkles" class="w-5 h-5"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!-- SLIDE 3 -->
                            <li class="splide__slide" style="background-color: #2563EB;">
                                <div class="splide-caption absolute inset-0 flex flex-col justify-center items-end text-right p-8 md:p-12 lg:p-20">
                                    <div class="circuit-container absolute inset-0 overflow-hidden"></div>
                                    <div class="relative z-10 text-white">
                                        <i data-lucide="rocket" class="w-12 h-12 md:w-16 md:h-16 mb-4 hero-icon"></i>
                                        <h2 class="text-4xl md:text-6xl font-extrabold mb-4 drop-shadow-lg hero-heading">Akselerasi Proyek Anda</h2>
                                        <p class="text-lg md:text-xl max-w-3xl mb-8 drop-shadow-md hero-text">Hemat waktu dengan aset UI/UX siap pakai.</p>
                                        <a href="#" class="inline-flex items-center gap-2 border-2 border-white text-white font-bold px-8 py-4 rounded-full text-lg hover:bg-white hover:text-blue-600 transition-colors duration-300 shadow-lg transform hover:scale-105 hero-cta">
                                            Mulai Sekarang <i data-lucide="chevron-right" class="w-5 h-5"></i>
                                        </a>
                                    </div>
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