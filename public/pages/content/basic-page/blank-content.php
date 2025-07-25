<?php
/**
 * @Copyright (c) [2025] [EazZy Project] MIT License
 * @https://opensource.org/licenses/MIT 
 * @path public/pages/content/blank-content.php
 * @author EazZy Project
 *
 * File ini berisi konten utama untuk halaman "Komponen Splide.js".
 * Halaman ini mendemonstrasikan berbagai jenis slider menggunakan library Splide.js.
 */
?>

<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-7xl mx-auto">

        <!-- =================================================================
        1. HEADER HALAMAN
        Ganti ikon, judul, dan deskripsi sesuai dengan komponen Anda.
        ================================================================== -->
        <section class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
                <!-- [TODO:] Ganti ikon Lucide di sini -->
                <i data-lucide="box" class="w-10 h-10 md:w-12 md:h-12"></i>
            </div>
            <div>
                <!-- [TODO:] Ganti judul dan deskripsi komponen di sini -->
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">Nama Komponen</h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">Deskripsi singkat tentang apa itu komponen ini dan fungsi utamanya.</p>
            </div>
        </section>

        <!-- =================================================================
        2. PENJELASAN & MANFAAT
        Jelaskan secara detail apa fungsi komponen ini dan mengapa ini berguna.
        ================================================================== -->
        <section class="mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Penjelasan</h2>
            <p class="text-gray-700 leading-relaxed mb-6">
                <!-- [TODO:] Tulis penjelasan mendalam tentang komponen di sini. -->
                Di sini Anda dapat menulis penjelasan mendalam mengenai komponen yang sedang Anda dokumentasikan. Jelaskan cara kerjanya, kasus penggunaan yang umum, dan detail teknis lainnya yang relevan agar pengguna lain dapat memahaminya dengan mudah.
            </p>

            <h3 class="text-xl font-semibold text-gray-800 mb-3">Manfaat Utama</h3>
            <ul class="list-disc list-inside space-y-2 text-gray-700">
                <!-- [TODO:] Ganti dengan manfaat atau fitur utama dari komponen Anda. -->
                <li><strong>Responsif:</strong> Jelaskan bagaimana komponen ini beradaptasi di berbagai ukuran layar.</li>
                <li><strong>Mudah Dikonfigurasi:</strong> Sebutkan opsi atau atribut yang bisa digunakan untuk kustomisasi.</li>
                <li><strong>Ringan:</strong> Beri gambaran tentang dampak performa komponen ini.</li>
                <li><strong>Aksesibel:</strong> Jelaskan dukungan untuk standar aksesibilitas web (WAI-ARIA) jika ada.</li>
            </ul>
        </section>

        <!-- =================================================================
        3. PANDUAN IMPLEMENTASI
        Berikan panduan langkah-demi-langkah cara menggunakan komponen ini.
        ================================================================== -->
        <section class="mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Panduan Implementasi</h2>
            
            <div class="space-y-6">
                <!-- Langkah 1: HTML -->
                <div>
                    <h3 class="text-lg font-semibold mb-2">Langkah 1: Struktur HTML</h3>
                    <p class="text-gray-600 mb-3">Salin dan tempel struktur HTML berikut ke dalam file Anda. Pastikan ID unik jika diperlukan.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code>&lt;!-- [TODO:] Ganti dengan struktur HTML komponen Anda --&gt;
&lt;div id="my-unique-component-id" class="my-component-class"&gt;
  Konten komponen Anda di sini.
&lt;/div&gt;</code></pre>
                </div>

                <!-- Langkah 2: JavaScript -->
                <div>
                    <h3 class="text-lg font-semibold mb-2">Langkah 2: Inisialisasi JavaScript (Jika Perlu)</h3>
                    <p class="text-gray-600 mb-3">Jika komponen memerlukan JavaScript, buat file baru (misal: `js/nama-komponen.js`) dan panggil setelah library yang dibutuhkan.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code>// [TODO:] Ganti dengan kode inisialisasi komponen Anda
document.addEventListener('DOMContentLoaded', () => {
  const myComponent = document.getElementById('my-unique-component-id');
  if(myComponent) {
    // Logika inisialisasi...
    console.log('Komponen berhasil dimuat!');
  }
});</code></pre>
                </div>
                 <!-- Langkah 3: Pemanggilan Script -->
                 <div>
                    <h3 class="text-lg font-semibold mb-2">Langkah 3: Pemanggilan Script di Halaman</h3>
                    <p class="text-gray-600 mb-3">Terakhir, panggil semua script yang diperlukan di bagian bawah halaman HTML Anda.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code>&lt;!-- [TODO:] (Opsional) Panggil library eksternal jika ada --&gt;
&lt;script src="path/to/library.js"&gt;&lt;/script&gt;

&lt;!-- Panggil script kustom Anda --&gt;
&lt;script type="module" src="js/nama-komponen.js"&gt;&lt;/script&gt;</code></pre>
                </div>
            </div>
        </section>

        <!-- =================================================================
        4. CONTOH LIVE
        Tampilkan contoh komponen yang berfungsi di sini.
        ================================================================== -->
        <section>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Contoh Live</h2>
            <div class="bg-gray-100 p-8 rounded-lg border border-gray-200">
                <!-- [TODO:] Tempatkan implementasi HTML dari komponen Anda di sini untuk demo. -->
                <div class="text-center text-gray-500">
                    Area demo untuk komponen Anda.
                </div>
            </div>
        </section>

    </div>
</main>
