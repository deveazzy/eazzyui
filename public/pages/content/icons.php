<?php
/**
 * @[EazZy Project] Copyright (c) [2025] [EazZy Project] license
 * @https://opensource.org/licenses/MIT MIT License
 * @path public/pages/icons.php
 * @author EazZy Project
 *
 * File ini berisi konten utama untuk halaman "Komponen Ikon" EazZy Project.
 * Logika JavaScript untuk halaman ini sekarang ada di file terpisah (icons.js).
 */
?>

<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <div id="main-content-container" class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-7xl mx-auto relative">

        <!-- Header Halaman -->
        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
                <i data-lucide="palette" class="w-10 h-10 md:w-12 md:h-12"></i>
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">Galeri Ikon Lucide</h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">Kumpulan ikon yang siap digunakan untuk proyek Anda, sekarang dikategorikan.</p>
            </div>
        </div>

        <!-- Search & Guide Section -->
        <section id="sticky-search-section" class="mb-12 bg-gray-50/80 backdrop-blur-sm py-4 z-10">
            <div class="relative mb-6">
                <label for="icon-search" class="sr-only">Cari ikon</label>
                <input type="text" id="icon-search" name="icon_search" placeholder="Cari ikon (misal: 'home', 'wallet', 'facebook')" class="w-full px-4 py-3 pl-12 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <i data-lucide="search" class="absolute top-1/2 left-4 -translate-y-1/2 w-5 h-5 text-gray-400"></i>
            </div>
            <details class="bg-white rounded-lg shadow-sm border p-4">
                <summary class="cursor-pointer font-semibold text-gray-700">Lihat Panduan Penggunaan</summary>
                <div class="mt-4 space-y-6 p-4 border-t border-gray-200">
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Langkah 1: Pemanggilan Script</h3>
                        <p class="text-gray-600 mb-3">Pastikan Anda telah memanggil script Lucide Icons di dalam tag `<head>` pada file HTML Anda.</p>
                        <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code>&lt;!-- Tailwind CSS CDN --&gt;&lt;script src="https://cdn.tailwindcss.com"&gt;&lt;/script&gt;
&lt;!-- Lucide Icons --&gt;&lt;script src="https://unpkg.com/lucide@latest"&gt;&lt;/script&gt;</code></pre>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Langkah 2: Inisialisasi Ikon</h3>
                        <p class="text-gray-600 mb-3">Setelah memanggil script, tambahkan kode JavaScript ini sebelum tag penutup `</body>` untuk merender semua ikon.</p>
                        <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code>&lt;script&gt;
 lucide.createIcons();
&lt;/script&gt;</code></pre>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Langkah 3: Penggunaan</h3>
                        <p class="text-gray-600 mb-3">Klik ikon di galeri untuk menyalin namanya, lalu gunakan tag `<i>` dengan atribut `data-lucide`. Anda bisa menambahkan kelas utilitas Tailwind CSS untuk kustomisasi.</p>
                        <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code>&lt;i data-lucide="home" class="w-6 h-6 text-blue-500"&gt;&lt;/i&gt;</code></pre>
                    </div>
                </div>
            </details>
        </section>
        
        <!-- Placeholder untuk menjaga layout saat search bar menjadi sticky -->
        <div id="sticky-placeholder" style="display: none;"></div>

        <!-- Galeri Ikon Lucide -->
        <section id="icon-gallery" class="mb-10 md:mb-12 pt-10 border-t border-gray-200">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Galeri Ikon</h2>
            <!-- Kontainer utama untuk kategori ikon. JavaScript akan mengisi ini. -->
            <div id="icon-grid">
                <!-- Kategori dan ikon akan di-generate secara dinamis oleh js/icons.js -->
            </div>
            <div class="text-center mt-8">
                <p class="text-gray-600 text-base md:text-lg">Dapatkan lebih banyak ikon dan dokumentasi lengkap di situs resmi
                <a href="https://lucide.dev/" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline font-semibold">Lucide</a>.</p>
            </div>
        </section>

        <!-- Notifikasi "Copied" -->
        <div id="copy-notification" class="fixed bottom-5 right-5 bg-blue-600 text-white px-4 py-2 rounded-lg shadow-lg opacity-0 transform translate-y-4 transition-all duration-300 ease-out">
            Nama ikon disalin!
        </div>

    </div>
</main>
