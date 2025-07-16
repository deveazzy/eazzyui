<?php
/**
 * @[EazZy Project] Copyright (c) [2025] [EazZy Project] license
 * @https://opensource.org/licenses/MIT MIT License
 * @path public/pages/flatpickr.php
 * @author EazZy Project
 *
 * File ini berisi konten untuk halaman dokumentasi "flatpickr".
 * Halaman ini menjelaskan apa itu flatpickr, cara instalasi, dan contoh penggunaannya
 * dalam EazZy Project.
 * Konten ini akan di-include oleh page/switch.php.
 */
?>

<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-7xl mx-auto">

        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
                <i data-lucide="calendar-days" class="w-10 h-10 md:w-12 md:h-12"></i>
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">
                    <a href="https://flatpickr.js.org/" target="_blank" rel="noopener noreferrer" class="hover:text-blue-600 transition-colors duration-300">flatpickr</a>
                </h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">Datepicker JavaScript yang Ringan dan Kuat.</p>
            </div>
        </div>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Apa itu flatpickr?</h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg">
                flatpickr adalah library datepicker yang ringan, kuat, dan tidak memiliki dependensi. Ia menawarkan pengalaman pengguna yang luar biasa dengan desain yang bersih dan modern. Library ini sangat bisa dikustomisasi, mendukung tema, dan memiliki banyak plugin untuk fungsionalitas tambahan seperti pemilihan rentang tanggal.
            </p>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mt-4">
                Dalam proyek ini, flatpickr digunakan pada halaman <a href="?page=atoms#inputs" class="text-blue-600 font-semibold hover:underline">Elemen Dasar (Atoms)</a> untuk mendemonstrasikan input tanggal yang interaktif.
            </p>
        </section>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Instalasi</h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-4">
                flatpickr dapat diinstal dengan mudah melalui npm dan sudah termasuk dalam `package.json` proyek ini.
            </p>

            <ol class="list-decimal list-inside space-y-6 text-gray-600 text-base md:text-lg">
                <li>
                    <strong>Instalasi via npm:</strong>
                    <p class="mt-1">Buka terminal di direktori root proyek Anda dan jalankan perintah:</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-bash">npm install flatpickr</code></pre>
                </li>
                <li>
                    <strong>Impor CSS:</strong>
                    <p class="mt-1">Pastikan Anda mengimpor file CSS flatpickr ke dalam file CSS utama Anda. Dalam proyek ini, impor dilakukan di `css/output.css`.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-css">@import url('/js/vendor/flatpickr/flatpickr.css');</code></pre>
                </li>
                <li>
                    <strong>Inisialisasi dengan JavaScript:</strong>
                    <p class="mt-1">Gunakan JavaScript untuk menginisialisasi flatpickr pada elemen input yang Anda inginkan. Anda bisa menargetkan elemen berdasarkan ID atau kelas.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-javascript">// Impor library
import flatpickr from "flatpickr";

// Inisialisasi pada input dengan ID #date-picker
document.addEventListener('DOMContentLoaded', function() {
    flatpickr("#date-picker", {
      // Opsi konfigurasi di sini
      altInput: true,
      altFormat: "F j, Y",
      dateFormat: "Y-m-d",
    });

    // Contoh untuk rentang tanggal
    flatpickr("#date-range-picker", {
      mode: "range",
      dateFormat: "Y-m-d",
      altInput: true,
      altFormat: "F j, Y",
    });
});
</code></pre>
                </li>
            </ol>
        </section>

         <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Manfaat flatpickr</h2>
            <ul class="space-y-4">
                <li class="flex items-start">
                    <i data-lucide="feather" class="w-6 h-6 text-green-500 mr-3 mt-1 flex-shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Ringan & Cepat</h3>
                        <p class="text-gray-600 text-base md:text-lg">Tidak ada dependensi (seperti jQuery) dan memiliki ukuran yang sangat kecil, memastikan performa yang cepat.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="palette" class="w-6 h-6 text-purple-500 mr-3 mt-1 flex-shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Dapat Disesuaikan</h3>
                        <p class="text-gray-600 text-base md:text-lg">Mendukung berbagai tema dan opsi konfigurasi yang luas untuk menyesuaikan tampilan dan perilaku.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="smartphone" class="w-6 h-6 text-red-500 mr-3 mt-1 flex-shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Mobile Friendly</h3>
                        <p class="text-gray-600 text-base md:text-lg">Desainnya responsif dan bekerja dengan baik di perangkat mobile, memberikan pengalaman yang konsisten.</p>
                    </div>
                </li>
            </ul>
        </section>

    </div>
</main>