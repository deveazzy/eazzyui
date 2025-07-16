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

        <section class="text-center mb-12">
            <div class="inline-flex items-center justify-center bg-blue-100 text-blue-600 p-4 rounded-full mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                </svg>
            </div>
            <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800">Dokumentasi NProgress</h1>
            <p class="mt-2 text-gray-600">Panduan lengkap untuk progress bar yang realistis dan menarik.</p>
        </section>

        <section class="mb-10">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">
                Penjelasan
            </h2>
            <p class="text-gray-700 leading-relaxed">
                <strong class="text-blue-600"><a href="https://github.com/rstacruz/nprogress" target="_blank">NProgress</a></strong> adalah library JavaScript yang sangat ringan untuk membuat progress bar di bagian atas halaman Anda. Tujuannya adalah untuk memberikan umpan balik visual yang cepat kepada pengguna saat halaman sedang dimuat atau saat ada proses latar belakang (seperti panggilan AJAX). Ini menciptakan ilusi bahwa sesuatu sedang terjadi, membuat waktu tunggu terasa lebih singkat dan aplikasi terasa lebih responsif.
            </p>
        </section>

        <section class="mb-10">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">
                Manfaat Utama
            </h2>
            <ul class="list-disc list-inside space-y-2 text-gray-700">
                <li><strong>Meningkatkan Pengalaman Pengguna (UX):</strong> Memberikan feedback instan bahwa aplikasi sedang bekerja, mengurangi ketidakpastian pengguna.</li>
                <li><strong>Estetika Modern:</strong> Memberikan tampilan profesional seperti yang ditemukan di situs-situs besar (YouTube, Medium, dll).</li>
                <li><strong>Sangat Ringan:</strong> Ukuran file yang kecil memastikan library ini tidak memperlambat aplikasi Anda.</li>
                <li><strong>Mudah Diimplementasikan:</strong> Hanya memerlukan beberapa baris kode untuk memulai dan menghentikan progress bar.</li>
            </ul>
        </section>

        <section class="mb-10">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">
                Panduan Instalasi Cepat
            </h2>
            <p class="text-gray-700 mb-4">Cara tercepat adalah menggunakan CDN. Sisipkan kode berikut di template utama Anda.</p>
            <h3 class="text-lg font-semibold text-gray-600 mb-2">1. Sisipkan CSS di dalam &lt;head&gt;</h3>
            <pre class="bg-gray-800 text-white p-4 rounded-lg overflow-x-auto mb-4"><code>&lt;link rel="stylesheet" href="https://unpkg.com/nprogress@0.2.0/nprogress.css"/&gt;</code></pre>
            
            <h3 class="text-lg font-semibold text-gray-600 mb-2">2. Sisipkan JS sebelum &lt;/body&gt;</h3>
            <pre class="bg-gray-800 text-white p-4 rounded-lg overflow-x-auto"><code>&lt;script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"&gt;&lt;/script&gt;</code></pre>
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