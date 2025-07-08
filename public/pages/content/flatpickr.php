<?php
/**
 * page/content/flatpickr.php
 *
 * File ini berisi konten untuk halaman dokumentasi "flatpickr".
 * Halaman ini menjelaskan apa itu flatpickr, cara instalasi, dan contoh penggunaannya
 * dalam EazZy Project.
 * Konten ini akan di-include oleh page/switch.php.
 */
?>

<main class="container mx-auto p-6 md:p-10 flex-grow">
    <div class="bg-white p-8 rounded-lg shadow-lg">

        <!-- Judul Halaman -->
        <div class="flex items-center space-x-4 mb-8">
            <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
                <i data-lucide="calendar-days" class="w-8 h-8"></i>
            </div>
            <div>
                <h1 class="text-4xl font-bold text-gray-800">
                    <a href="https://flatpickr.js.org/" target="_blank" rel="noopener noreferrer" class="hover:text-blue-600 transition-colors duration-300">flatpickr</a>
                </h1>
                <p class="text-lg text-gray-500">Datepicker JavaScript yang Ringan dan Kuat.</p>
            </div>
        </div>

        <!-- Seksi: Apa itu flatpickr? -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold text-gray-700 border-b-2 border-blue-200 pb-2 mb-4">Apa itu flatpickr?</h2>
            <p class="text-gray-600 leading-relaxed">
                flatpickr adalah library datepicker yang ringan, kuat, dan tidak memiliki dependensi. Ia menawarkan pengalaman pengguna yang luar biasa dengan desain yang bersih dan modern. Library ini sangat bisa dikustomisasi, mendukung tema, dan memiliki banyak plugin untuk fungsionalitas tambahan seperti pemilihan rentang tanggal.
            </p>
            <p class="text-gray-600 leading-relaxed mt-4">
                Dalam proyek ini, flatpickr digunakan pada halaman <a href="?page=atoms#inputs" class="text-blue-600 font-semibold hover:underline">Elemen Dasar (Atoms)</a> untuk mendemonstrasikan input tanggal yang interaktif.
            </p>
        </section>

        <!-- Seksi: Instalasi -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold text-gray-700 border-b-2 border-blue-200 pb-2 mb-4">Instalasi</h2>
            <p class="text-gray-600 leading-relaxed mb-4">
                flatpickr dapat diinstal dengan mudah melalui npm dan sudah termasuk dalam `package.json` proyek ini.
            </p>
            
            <ol class="list-decimal list-inside space-y-4 text-gray-600">
                <li>
                    <strong>Instalasi via npm:</strong>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-bash">npm install flatpickr</code></pre>
                </li>
                <li>
                    <strong>Impor CSS:</strong>
                    <p class="mt-2">Pastikan Anda mengimpor file CSS flatpickr ke dalam file CSS utama Anda. Dalam proyek ini, impor dilakukan di `css/output.css`.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-css">@import url('/js/vendor/flatpickr/flatpickr.css');</code></pre>
                </li>
                <li>
                    <strong>Inisialisasi dengan JavaScript:</strong>
                    <p class="mt-2">Gunakan JavaScript untuk menginisialisasi flatpickr pada elemen input yang Anda inginkan. Anda bisa menargetkan elemen berdasarkan ID atau kelas.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-javascript">// Impor library
import flatpickr from "flatpickr";

// Inisialisasi pada input dengan ID #date-picker
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
});</code></pre>
                </li>
            </ol>
        </section>

         <!-- Seksi: Manfaat flatpickr -->
        <section>
            <h2 class="text-2xl font-semibold text-gray-700 border-b-2 border-blue-200 pb-2 mb-4">Manfaat flatpickr</h2>
            <ul class="space-y-4">
                <li class="flex items-start">
                    <i data-lucide="feather" class="w-6 h-6 text-green-500 mr-3 mt-1 flex-shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Ringan & Cepat</h3>
                        <p class="text-gray-600">Tidak ada dependensi (seperti jQuery) dan memiliki ukuran yang sangat kecil, memastikan performa yang cepat.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="palette" class="w-6 h-6 text-purple-500 mr-3 mt-1 flex-shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Dapat Disesuaikan</h3>
                        <p class="text-gray-600">Mendukung berbagai tema dan opsi konfigurasi yang luas untuk menyesuaikan tampilan dan perilaku.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="smartphone" class="w-6 h-6 text-red-500 mr-3 mt-1 flex-shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Mobile Friendly</h3>
                        <p class="text-gray-600">Desainnya responsif dan bekerja dengan baik di perangkat mobile, memberikan pengalaman yang konsisten.</p>
                    </div>
                </li>
            </ul>
        </section>

    </div>
</main>
