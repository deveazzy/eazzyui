<?php
/*
* @author  [EazZy Project]icons
* @copyright Copyright (c) [2025] [EazZy Project]
* @license   https://opensource.org/licenses/MIT MIT License
*/

// Anda bisa menambahkan meta title dan description spesifik untuk halaman ini di sini
// $page_title = "Dokumentasi NProgress";
// $page_description = "Panduan, manfaat, dan contoh penggunaan NProgress dalam proyek.";
?>

<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <div class="bg-white p-6 rounded-lg shadow-xl max-w-7xl mx-auto">

        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
                <i data-lucide="refresh-ccw" class="w-10 h-10 md:w-12 md:h-12"></i>
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">
                    <a href="https://github.com/rstacruz/nprogress" target="_blank" rel="noopener noreferrer" class="hover:text-blue-600 transition-colors duration-300">NProgress</a>
                </h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">
                    Panduan lengkap untuk progress bar yang realistis dan menarik.
                </p>
            </div>
        </div>

        <section class="mb-10">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">
                Apa itu NProgress?
            </h2>
            <p class="text-gray-700 leading-relaxed">
                <strong class="text-blue-600"><a href="https://github.com/rstacruz/nprogress" target="_blank">NProgress</a></strong> adalah library JavaScript yang sangat ringan untuk membuat progress bar di bagian atas halaman Anda. Tujuannya adalah untuk memberikan umpan balik visual yang cepat kepada pengguna saat halaman sedang dimuat atau saat ada proses latar belakang (seperti panggilan AJAX). Ini menciptakan ilusi bahwa sesuatu sedang terjadi, membuat waktu tunggu terasa lebih singkat dan aplikasi terasa lebih responsif.
            </p>
        </section>

        <section class="mb-10">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">
                Panduan Pemasangan
            </h2>
            <p class="text-gray-700 mb-4">Cara tercepat adalah menggunakan CDN. Sisipkan kode berikut di template utama Anda.</p>
            <h3 class="text-lg font-semibold text-gray-600 mb-2">1. Sisipkan CSS di dalam &lt;head&gt;</h3>
            <pre class="bg-gray-800 text-white p-4 rounded-lg overflow-x-auto mb-4"><code>&lt;link rel="stylesheet" href="https://unpkg.com/nprogress@0.2.0/nprogress.css"/&gt;</code></pre>
            
            <h3 class="text-lg font-semibold text-gray-600 mb-2">2. Sisipkan JS sebelum &lt;/body&gt;</h3>
            <pre class="bg-gray-800 text-white p-4 rounded-lg overflow-x-auto"><code>&lt;script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"&gt;&lt;/script&gt;</code></pre>
        </section>

        <section class="mb-10 md:mb-12 pt-10 ">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Manfaat NProgress</h2>
            <ul class="space-y-4">
                <li class="flex items-start">
                    <i data-lucide="user-check" class="w-6 h-6 text-yellow-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Meningkatkan Pengalaman Pengguna (UX)</h3>
                        <p class="text-gray-600 text-base md:text-lg">Memberikan feedback instan bahwa aplikasi sedang bekerja, mengurangi ketidakpastian pengguna.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="award" class="w-6 h-6 text-purple-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Estetika Modern & Profesional</h3>
                        <p class="text-gray-600 text-base md:text-lg">Memberikan tampilan profesional seperti yang ditemukan di situs-situs besar (YouTube, Medium, dll).</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="feather" class="w-6 h-6 text-green-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Sangat Ringan</h3>
                        <p class="text-gray-600 text-base md:text-lg">Ukuran file yang kecil memastikan library ini tidak memperlambat aplikasi Anda.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="code" class="w-6 h-6 text-blue-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Mudah Diimplementasikan</h3>
                        <p class="text-gray-600 text-base md:text-lg">Hanya memerlukan beberapa baris kode untuk memulai dan menghentikan progress bar.</p>
                    </div>
                </li>
            </ul>
        </section>

        <section>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">
                Contoh Interaktif
            </h2>
            <div class="bg-gray-100 p-8 rounded-lg border border-gray-200 text-center">
                <p class="mb-4 text-gray-600">Klik tombol di bawah untuk melihat NProgress beraksi.</p>
                <div class="flex justify-center space-x-4">
                    <button id="startButton" class="bg-blue-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors">
                        Mulai (Start)
                    </button>
                    <button id="doneButton" class="bg-green-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-green-700 transition-colors">
                        Selesai (Done)
                    </button>
                </div>
            </div>
        </section>

    </div>
</main>