<?php
/**
 * @[EazZy Project] Copyright (c) [2025] [EazZy Project] license
 * @https://opensource.org/licenses/MIT MIT License
 * @path public/pages/atoms.php
 * @author EazZy Project
 *
 * File ini berisi konten utama untuk halaman "Template Elemen Dasar (Atoms)" EazZy Project.
 * Ini mencakup berbagai komponen UI dasar seperti tombol, input, tipografi, badge, avatar,
 * alert, toggle, dan progress bar.
 * Konten ini akan di-include oleh page/switch.php.
 */
?>

<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
<div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-7xl mx-auto">

    <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
        <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
            <i data-lucide="gallery-horizontal" class="w-10 h-10 md:w-12 md:h-12"></i> </div>
        <div>
            <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">
                <a href="https://splidejs.com/" target="_blank" rel="noopener noreferrer" class="hover:text-blue-600 transition-colors duration-300">Splide</a>
            </h1>
            <p class="text-lg md:text-xl text-gray-500 mt-1">Slider/Carousel Ringan, Fleksibel, dan Aksesibel.</p>
        </div>
    </div>

    <section class="mb-10 md:mb-12">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Apa itu Splide?</h2>
        <p class="text-gray-600 leading-relaxed text-base md:text-lg">
            Splide adalah library slider atau carousel yang ringan, kuat, dan fleksibel. Ditulis dalam JavaScript murni (Vanilla JS), Splide tidak memerlukan jQuery atau dependensi lainnya. Fokus utamanya adalah pada performa, aksesibilitas, dan pengalaman pengembang yang baik.
        </p>
        <p class="text-gray-600 leading-relaxed text-base md:text-lg mt-4">
            Dengan API yang kaya fitur dan desain modular, Splide memungkinkan Anda membuat slider sederhana hingga carousel yang kompleks dengan mudah, sambil memastikan ukurannya tetap kecil dan performanya tetap cepat.
        </p>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mt-4">
            Pelajari lebih lanjut dan jelajahi semua fiturnya di situs resmi: 
            <a href="https://splidejs.com/" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline font-semibold">splidejs.com</a>.
        </p>
    </section>

    <section class="mb-10 md:mb-12 pt-10 ">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Panduan Pemasangan</h2>
        <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-4">
            Ikuti langkah-langkah berikut untuk mengintegrasikan Splide ke dalam proyek Anda:
        </p>
        <ol class="list-decimal list-inside space-y-6 text-gray-600 text-base md:text-lg">
            <li>
                <strong>Instalasi via npm:</strong>
                <p class="mt-1">Buka terminal di direktori root proyek Anda dan jalankan perintah:</p>
                <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-bash">npm install @splidejs/splide</code></pre>
            </li>
            <li>
                <strong>Sertakan CSS Splide di HTML Anda:</strong>
                <p class="mt-1">Tambahkan file CSS Splide ke dalam tag `<head>` pada halaman Anda. Sesuaikan path jika perlu.</p>
                <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-html">
&lt;link rel="stylesheet" href="node_modules/@splidejs/splide/dist/css/splide.min.css"&gt;
                </code></pre>
                <p class="mt-2 text-sm text-gray-500">
                    *Anda juga dapat menyalin file ini ke direktori `public/assets/vendor/` agar lebih terstruktur.*
                </p>
            </li>
            <li>
                <strong>Buat Struktur HTML untuk Slider:</strong>
                <p class="mt-1">Siapkan struktur HTML dasar yang dibutuhkan oleh Splide.</p>
                <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-html">
&lt;section class="splide" aria-label="Contoh Slider"&gt;
&lt;div class="splide__track"&gt;
&lt;ul class="splide__list"&gt;
    &lt;li class="splide__slide"&gt;Slide 01&lt;/li&gt;
    &lt;li class="splide__slide"&gt;Slide 02&lt;/li&gt;
    &lt;li class="splide__slide"&gt;Slide 03&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
&lt;/section&gt;
                </code></pre>
            </li>
                <li>
                <strong>Inisialisasi dengan JavaScript:</strong>
                <p class="mt-1">Tambahkan skrip berikut sebelum tag penutup `&lt;/body&gt;` untuk mengaktifkan slider.</p>
                <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-javascript">
// Impor Splide jika menggunakan module bundler
// import Splide from '@splidejs/splide';

document.addEventListener('DOMContentLoaded', function () {
new Splide('.splide').mount();
});
                </code></pre>
                    <p class="mt-2 text-sm text-gray-500">
                    *Jika tidak menggunakan `npm`, Anda bisa menyertakan file JS dari `node_modules/@splidejs/splide/dist/js/splide.min.js` melalui tag 
                </p>
            </li>
        </ol>
    </section>

    <section class="mb-10 md:mb-12 pt-10 ">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Manfaat Splide</h2>
        <ul class="space-y-4">
            <li class="flex items-start">
                <i data-lucide="zap" class="w-6 h-6 text-yellow-500 mr-3 mt-1 flex-shrink-0"></i>
                <div>
                    <h3 class="font-semibold text-lg">Sangat Ringan dan Cepat</h3>
                    <p class="text-gray-600 text-base md:text-lg">Ukuran file yang kecil dan performa yang dioptimalkan untuk pengalaman pengguna yang lancar.</p>
                </div>
            </li>
            <li class="flex items-start">
                <i data-lucide="unlink" class="w-6 h-6 text-red-500 mr-3 mt-1 flex-shrink-0"></i>
                <div>
                    <h3 class="font-semibold text-lg">Tanpa Ketergantungan (No Dependency)</h3>
                    <p class="text-gray-600 text-base md:text-lg">Dibangun dengan Vanilla JavaScript, tidak memerlukan jQuery, sehingga menjaga proyek tetap ramping.</p>
                </div>
            </li>
            <li class="flex items-start">
                <i data-lucide="accessibility" class="w-6 h-6 text-blue-500 mr-3 mt-1 flex-shrink-0"></i>
                <div>
                    <h3 class="font-semibold text-lg">Aksesibilitas Tinggi</h3>
                    <p class="text-gray-600 text-base md:text-lg">Dirancang dengan standar WAI-ARIA untuk memastikan dapat digunakan oleh semua orang.</p>
                </div>
            </li>
            <li class="flex items-start">
                <i data-lucide="settings-2" class="w-6 h-6 text-purple-500 mr-3 mt-1 flex-shrink-0"></i>
                <div>
                    <h3 class="font-semibold text-lg">Kaya Fitur dan Fleksibel</h3>
                    <p class="text-gray-600 text-base md:text-lg">Mendukung slider vertikal, thumbnail, lazy loading, video, dan banyak lagi melalui API yang mudah digunakan.</p>
                </div>
            </li>
        </ul>
    </section>

    <section class="mt-16 pt-10 ">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Contoh Penerapan</h2>
        <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-8 max-w-2xl">
            Berikut adalah contoh slider sederhana dengan beberapa opsi kustomisasi. Slider ini menampilkan 3 slide per halaman dan memiliki panah navigasi serta pagination.
        </p>

        <div id="contoh-slider" class="splide" role="group" aria-label="Contoh Splide Slider">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="h-48 md:h-64 flex items-center justify-center bg-blue-400 text-white text-2xl font-bold rounded-lg">1</div>
                    </li>
                    <li class="splide__slide">
                        <div class="h-48 md:h-64 flex items-center justify-center bg-purple-400 text-white text-2xl font-bold rounded-lg">2</div>
                    </li>
                    <li class="splide__slide">
                        <div class="h-48 md:h-64 flex items-center justify-center bg-teal-400 text-white text-2xl font-bold rounded-lg">3</div>
                    </li>
                    <li class="splide__slide">
                        <div class="h-48 md:h-64 flex items-center justify-center bg-orange-400 text-white text-2xl font-bold rounded-lg">4</div>
                    </li>
                        <li class="splide__slide">
                        <div class="h-48 md:h-64 flex items-center justify-center bg-red-400 text-white text-2xl font-bold rounded-lg">5</div>
                    </li>
                </ul>
            </div>
        </div>

        <p class="mt-8 text-gray-600 leading-relaxed text-base md:text-lg">
            Untuk membuat slider di atas, gunakan inisialisasi JavaScript berikut dengan beberapa opsi:
        </p>
        <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-javascript">
document.addEventListener('DOMContentLoaded', function () {
var splide = new Splide('#contoh-slider', {
type       : 'loop', // 'slide', 'loop', atau 'fade'
perPage    : 3,      // Tampilkan 3 slide sekaligus
perMove    : 1,      // Pindah 1 slide saat navigasi
gap        : '1rem', // Jarak antar slide
pagination : true,   // Tampilkan pagination dots
arrows     : true,   // Tampilkan panah navigasi
breakpoints: {
    768: { // Untuk layar tablet
    perPage: 2,
    },
    640: { // Untuk layar mobile
    perPage: 1,
    },
},
});
splide.mount();
});
        </code></pre>
    </section>

</div>
</main>