<?php
/**
 * page/content/icons.php
 *
 * File ini berisi konten utama untuk halaman "Komponen Ikon" EazZy Project.
 * Ini mencakup header halaman, kolom pencarian, panduan penggunaan,
 * dan kontainer untuk menampilkan ikon-ikon Lucide yang sekarang dikategorikan.
 * Konten ini akan di-include oleh page/switch.php.
 */
?>

<main class="flex-1 container mx-auto p-6 md:p-10">
<!-- Konten utama halaman Anda akan ditempatkan di sini. -->

<header class="mb-10 text-center">
    <h1 class="text-4xl font-bold text-gray-900">Galeri Ikon Lucide</h1>
    <p class="mt-2 text-lg text-gray-600">Kumpulan ikon yang siap digunakan untuk proyek Anda, sekarang dikategorikan.</p>
</header>

<!-- Search & Guide -->
<section class="mb-12 sticky top-[88px] bg-gray-50/80 backdrop-blur-sm py-4 z-10">
    <div class="relative mb-6">
        <!-- Menambahkan label untuk input pencarian dan atribut name -->
        <label for="icon-search" class="sr-only">Cari ikon</label>
        <input type="text" id="icon-search" name="icon_search" placeholder="Cari ikon (misal: 'home', 'wallet', 'facebook')" class="w-full px-4 py-3 pl-12 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
        <i data-lucide="search" class="absolute top-1/2 left-4 -translate-y-1/2 w-5 h-5 text-gray-400"></i>
    </div>
    <details class="bg-white rounded-lg shadow-sm border p-4">
        <summary class="cursor-pointer font-semibold text-gray-700">Lihat Panduan Penggunaan</summary>
        <div class="mt-4 space-y-6 p-4 border-t">
            <div>
                <h3 class="text-lg font-semibold mb-2">Langkah 1: Pemanggilan Script</h3>
                <p class="text-gray-600 mb-3">Pastikan Anda telah memanggil script Lucide Icons di dalam tag `<head>` pada file HTML Anda.</p>
                <pre class="bg-gray-800 text-white p-4 rounded-lg overflow-x-auto"><code>&lt;!-- Tailwind CSS CDN --&gt;&lt;script src="https://cdn.tailwindcss.com"&gt;&lt;/script&gt;
&lt;!-- Lucide Icons --&gt;&lt;script src="https://unpkg.com/lucide@latest"&gt;&lt;/script&gt;</code></pre>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-2">Langkah 2: Inisialisasi Ikon</h3>
                <p class="text-gray-600 mb-3">Setelah memanggil script, tambahkan kode JavaScript ini sebelum tag penutup `</body>` untuk merender semua ikon.</p>
                <pre class="bg-gray-800 text-white p-4 rounded-lg overflow-x-auto"><code>&lt;script&gt;
 lucide.createIcons();
&lt;/script&gt;</code></pre>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-2">Langkah 3: Penggunaan</h3>
                <p class="text-gray-600 mb-3">Klik ikon di galeri untuk menyalin namanya, lalu gunakan tag `<i>` dengan atribut `data-lucide`. Anda bisa menambahkan kelas utilitas Tailwind CSS untuk kustomisasi.</p>
                <pre class="bg-gray-800 text-white p-4 rounded-lg overflow-x-auto"><code>&lt;i data-lucide="home" class="w-6 h-6 text-blue-500"&gt;&lt;/i&gt;</code></pre>
            </div>
        </div>
    </details>
</section>

<!-- Galeri Ikon Lucide -->
<section id="icon-gallery">
    <h2 class="text-2xl font-bold text-gray-800 border-b pb-2 mb-6">Galeri Ikon</h2>
    <!-- Kontainer utama untuk kategori ikon. JavaScript akan mengisi ini. -->
    <div id="icon-grid">
        <!-- Kategori dan ikon akan di-generate secara dinamis oleh js/icons.js -->
        <!-- Setiap kategori akan menjadi div terpisah dengan judul dan grid ikonnya sendiri -->
    </div>
    <div class="text-center mt-8">
        <p class="text-gray-500"><a href="https://lucide.dev/" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline font-semibold">Lucide</a></p>
    </div>
</section>

<!-- Notifikasi "Copied" -->
<div id="copy-notification" class="fixed bottom-5 right-5 bg-blue-600 text-white px-4 py-2 rounded-lg shadow-lg opacity-0 transform translate-y-4">
    Nama ikon disalin!
</div>
</main>
