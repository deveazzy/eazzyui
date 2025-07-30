<?php
/*
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 */
?>
<style>
/* Styles for Hero Section v2: Efek Latar Bentuk Abstrak */
.shape-item {
    position: absolute;
    background-color: transparent;
    border: 3px solid rgba(147, 197, 253, 0.8);
    border-radius: 50%;
    opacity: 0;
    transform: scale(0);
    transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}
.shape-item.is-visible {
    opacity: 1;
    transform: scale(1);
}

/* Styles for Hero Section v3 & v4: Efek Latar Sirkuit */
.line-item {
    position: absolute;
    background-color: rgba(255, 255, 255, 0.3);
    box-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
    opacity: 0;
    transition: all 1.5s cubic-bezier(0.25, 1, 0.5, 1);
}
.line-item.is-visible {
    opacity: 1;
}

/* Styles for Hero Section v4: Navigasi Thumbnail */
#hero-thumbnails-container-v4 {
    position: relative;
    width: 330px;
    max-width: 90%;
    margin: -64px auto 0 auto;
    overflow: hidden;
    padding-top: 15px;
    padding-bottom: 15px;
    margin-left: 0;
    margin-right: 0;
}
.thumbnail-track {
    display: flex;
    align-items: center;
    transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1);
}
.thumbnail-item {
    width: 80px;
    height: 60px;
    background-color: rgba(255, 255, 255, 0.2);
    border: 2px solid rgba(255, 255, 255, 0.4);
    border-radius: 10px;
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    opacity: 0.6;
    transform: scale(0.8);
    transition: all 0.4s cubic-bezier(0.25, 1, 0.5, 1);
    backdrop-filter: blur(5px);
    -webkit-backdrop-filter: blur(5px);
    flex-shrink: 0;
    margin: 0 10px;
}
.thumbnail-item:hover {
    opacity: 1;
    transform: scale(0.95) translateY(-5px);
    border-color: white;
}
.thumbnail-item.is-active {
    opacity: 1;
    transform: scale(1.2);
    border: 3px solid white;
    background-color: rgba(255, 255, 255, 0.4);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
}
.thumbnail-item i {
    width: 32px;
    height: 32px;
}
</style>

<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-full mx-auto">

        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-indigo-100 text-indigo-600 p-4 rounded-full mb-4 md:mb-0">
                <i data-lucide="layout-template" class="w-10 h-10 md:w-12 md:h-12"></i>
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">
                    Hero Sections
                </h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">
                    Koleksi slider hero yang interaktif dan memukau dengan berbagai efek animasi.
                </p>
            </div>
        </div>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Apa Itu Hero Section?</h2>
            <p class="text-gray-600 leading-relaxed mb-4">
                Hero Section adalah bagian paling atas dari sebuah halaman web, dirancang untuk menarik perhatian pengunjung secara instan dan menyampaikan pesan inti situs. Ini sering kali menjadi kesan pertama yang didapat pengguna, sehingga penting untuk membuatnya menarik, informatif, dan relevan. Hero section biasanya mencakup judul besar, deskripsi singkat, gambar atau video latar belakang, dan ajakan bertindak (Call-to-Action/CTA).
            </p>
            <p class="text-gray-600 leading-relaxed">
                Tujuan utama hero section adalah untuk mengkomunikasikan nilai proposisi utama situs Anda dengan cepat dan mendorong pengguna untuk menjelajahi lebih lanjut atau melakukan tindakan tertentu. Berbagai efek visual dan animasi dapat ditambahkan untuk meningkatkan daya tarik dan pengalaman pengguna.
            </p>
        </section>

        <div class="space-y-16">

            <section>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-8">Hero Section v1: Animasi Teks & Gambar Dinamis</h2>
                <div class="relative w-full h-[450px] md:h-[550px] lg:h-[650px] overflow-hidden rounded-xl shadow-2xl hero-section-main group">
                    <div id="splide-hero-main" class="splide h-full">
                        <div class="splide__track h-full">
                            <ul class="splide__list h-full">
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

            <section>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-8">Hero Section v2: Efek Latar Bentuk Abstrak</h2>
                <div class="relative w-full h-[450px] md:h-[550px] lg:h-[650px] overflow-hidden rounded-xl shadow-2xl hero-section-main group">
                    <div id="splide-hero-main-v2" class="splide h-full">
                        <div class="splide__track h-full">
                            <ul class="splide__list h-full">
                                <li class="splide__slide" data-shape-color="rgba(0, 0, 0, 0.2)" style="background-image: linear-gradient(to right, #2563EB, #1D4ED8);">
                                    <div class="splide-caption absolute inset-0 flex flex-col justify-center items-start p-8 md:p-12 lg:p-20 text-left">
                                        <div class="shape-container absolute inset-0 overflow-hidden"></div>
                                        <div class="relative z-10 text-white">
                                            <i data-lucide="lightbulb" class="w-12 h-12 md:w-16 md:h-16 text-white mb-4 hero-icon"></i>
                                            <h2 class="text-4xl md:text-6xl font-extrabold mb-4 drop-shadow-lg hero-heading">EazZy UI: Inovasi Tanpa Batas</h2>
                                            <p class="text-lg md:text-xl max-w-3xl mb-8 drop-shadow-md hero-text">Wujudkan ide-ide terliar Anda dengan komponen UI yang intuitif dan fungsional.</p>
                                            <a href="#" class="inline-flex items-center gap-2 bg-black text-white font-bold px-8 py-4 rounded-full text-lg hover:bg-gray-800 transition-colors duration-300 shadow-lg transform hover:scale-105 hero-cta">
                                                Jelajahi Solusi <i data-lucide="arrow-right" class="w-5 h-5"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide" data-shape-color="rgba(0, 0, 0, 0.3)" style="background-image: linear-gradient(to right, #2563EB, #1D4ED8);">
                                    <div class="splide-caption absolute inset-0 flex flex-col items-center justify-center text-white text-center p-8 md:p-12 lg:p-20">
                                        <div class="shape-container absolute inset-0 overflow-hidden"></div>
                                        <div class="relative z-10 text-white">
                                            <i data-lucide="layout-grid" class="w-12 h-12 md:w-16 md:h-16 text-white mb-4 hero-icon"></i>
                                            <h2 class="text-4xl md:text-6xl font-extrabold mb-4 drop-shadow-lg hero-heading">Pengalaman Pengguna Prioritas Utama</h2>
                                            <p class="text-lg md:text-xl max-w-3xl mb-8 drop-shadow-md hero-text">Bangun aplikasi yang tidak hanya indah, tetapi juga mudah digunakan.</p>
                                            <a href="#" class="inline-flex items-center gap-2 bg-black text-white font-bold px-8 py-4 rounded-full text-lg hover:bg-gray-800 transition-colors duration-300 shadow-lg transform hover:scale-105 hero-cta">
                                                Pelajari Desain <i data-lucide="sparkles" class="w-5 h-5"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide" data-shape-color="rgba(0, 0, 0, 0.2)" style="background-image: linear-gradient(to right, #2563EB, #1D4ED8);">
                                    <div class="splide-caption absolute inset-0 flex flex-col justify-center items-end text-right p-8 md:p-12 lg:p-20">
                                        <div class="shape-container absolute inset-0 overflow-hidden"></div>
                                        <div class="relative z-10 text-white">
                                            <i data-lucide="rocket" class="w-12 h-12 md:w-16 md:h-16 text-white mb-4 hero-icon"></i>
                                            <h2 class="text-4xl md:text-6xl font-extrabold mb-4 drop-shadow-lg hero-heading">Akselerasi Proyek Anda</h2>
                                            <p class="text-lg md:text-xl max-w-3xl mb-8 drop-shadow-md hero-text">Hemat waktu berjam-jam dengan aset UI/UX yang siap pakai dan modular.</p>
                                            <a href="#" class="inline-flex items-center gap-2 border-2 border-white text-white font-bold px-8 py-4 rounded-full text-lg hover:bg-white hover:text-black transition-colors duration-300 shadow-lg transform hover:scale-105 hero-cta">
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

            <section>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-8">Hero Section v3: Efek Latar Garis</h2>
                <div class="relative w-full h-[450px] md:h-[550px] lg:h-[650px] overflow-hidden rounded-xl shadow-2xl hero-section-main group">
                    <div id="splide-hero-main-v3" class="splide h-full">
                        <div class="splide__track h-full">
                            <ul class="splide__list h-full">
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

            <section>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-8">Hero Section v4: Garis dengan Navigasi Thumbnail</h2>
                <div class="relative w-full h-[450px] md:h-[550px] lg:h-[650px] overflow-hidden rounded-xl shadow-2xl hero-section-main group">
                    <div id="splide-hero-main-v4" class="splide h-full">
                        <div class="splide__track h-full">
                             <ul class="splide__list h-full">
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
                <div class="w-full flex justify-center -mt-16">
                    <div id="hero-thumbnails-container-v4" class="relative z-20">
                        </div>
                </div>
            </section>
        </div>
    </div>
</main>

<script src="/assets/vendor/splide/splide.min.js" defer></script>
<script src="/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js" defer></script>