<?php
// Tidak ada Lisensi MIT untuk file PHP
?>
<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-7xl mx-auto">

        <!-- Bagian Header / Judul Halaman -->
        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
                <!-- Ikon Halaman (ganti sesuai konteks) -->
                <i data-lucide="layout-grid" class="w-10 h-10 md:w-12 md:h-12"></i>
            </div>
            <div>
                <h1 class="text-4xl md:text-4xl font-bold text-gray-800 leading-tight">
                    <a href="https://masonry.desandro.com/" target="_blank" rel="noopener noreferrer" class="hover:text-blue-600 transition-colors duration-300">Masonry</a>
                </h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">Tata Letak Grid Responsif Berbasis Kolom.</p>
            </div>
        </div>

        <!-- Bagian 1: Penjelasan -->
        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">
                Apa itu Masonry?
            </h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg">
                Masonry adalah *library* tata letak grid JavaScript yang sangat populer. Berbeda dengan grid tradisional yang mengatur item dalam baris dan kolom yang kaku, Masonry mengatur elemen-elemen dalam tata letak seperti "batu bata" yang tersusun rapi. Ini sangat berguna untuk menampilkan koleksi item dengan tinggi yang bervariasi, seperti gambar galeri atau kartu berita, sehingga tidak ada ruang kosong yang mengganggu di antara baris.
            </p>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mt-4">
                Masonry bekerja dengan menempatkan elemen di posisi vertikal berikutnya yang tersedia dalam grid, mirip dengan seorang tukang batu yang mengisi ruang kosong. Hasilnya adalah tata letak yang padat dan efisien secara visual, yang secara otomatis menyesuaikan diri dengan lebar layar (responsif).
            </p>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mt-4">
                Kunjungi situs resmi Masonry untuk melihat semua fitur, demo, dan dokumentasi lengkapnya:
                <a href="https://masonry.desandro.com/" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline font-semibold">Masonry</a>.
            </p>
        </section>

        <!-- Bagian 2: Panduan Pemasangan -->
        <section class="mb-10 md:mb-12 pt-10 ">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">
                Panduan Pemasangan
            </h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-4">
                Ikuti langkah-langkah berikut untuk mengintegrasikan Masonry ke dalam proyek Anda:
            </p>
            <ol class="list-decimal list-inside space-y-6 text-gray-600 text-base md:text-lg">
                <li>
                    <strong>Instalasi via npm:</strong>
                    <p class="mt-1">Buka terminal di direktori root proyek Anda dan jalankan perintah:</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-bash">npm install masonry-layout</code></pre>
                </li>
                <li>
                    <strong>Struktur HTML:</strong>
                    <p class="mt-1">Buat kontainer untuk grid Anda dengan kelas `grid` dan elemen untuk setiap item dengan kelas `grid-item`. Anda juga dapat menambahkan elemen `grid-sizer` untuk mengontrol lebar kolom.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-html">
&lt;div class="grid"&gt;
    &lt;div class="grid-sizer"&gt;&lt;/div&gt; &lt;!-- Opsional: Untuk mengontrol lebar kolom --&gt;
    &lt;div class="grid-item"&gt;...&lt;/div&gt;
    &lt;div class="grid-item"&gt;...&lt;/div&gt;
    &lt;!-- Tambahkan item grid lainnya --&gt;
&lt;/div&gt;
                    </code></pre>
                </li>
                <li>
                    <strong>Inisialisasi dengan JavaScript:</strong>
                    <p class="mt-1">Gunakan JavaScript untuk menginisialisasi Masonry pada kontainer grid Anda. Penting untuk memastikan semua gambar (atau media lain) dalam grid telah dimuat sebelum menginisialisasi Masonry. Anda dapat menggunakan ImagesLoaded untuk ini.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-javascript">
// Impor library
import Masonry from 'masonry-layout';
import imagesLoaded from 'imagesloaded'; // Opsional: Pastikan ImagesLoaded juga diimpor jika diperlukan

document.addEventListener('DOMContentLoaded', function() {
    var grid = document.querySelector('.grid');

    // Pastikan media dimuat sebelum inisialisasi Masonry
    // Direkomendasikan menggunakan ImagesLoaded untuk konten dengan gambar
    imagesLoaded( grid, function() { // Gunakan imagesLoaded jika ada gambar
        var msnry = new Masonry( grid, {
            itemSelector: '.grid-item',
            columnWidth: '.grid-sizer',
            percentPosition: true,
            gutter: 10
        });
        console.log('Masonry diinisialisasi setelah media dimuat!');
    });

    // Jika tidak ada gambar atau media yang perlu dimuat, bisa langsung inisialisasi:
    // var msnry = new Masonry( grid, {
    //   itemSelector: '.grid-item',
    //   columnWidth: '.grid-sizer',
    //   percentPosition: true,
    //   gutter: 10
    // });
});
                    </code></pre>
                </li>
            </ol>
        </section>

        <!-- Bagian 3: Manfaat -->
        <section class="mb-10 md:mb-12 pt-10 ">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Manfaat Masonry</h2>
            <ul class="space-y-4">
                <li class="flex items-start">
                    <i data-lucide="layout-grid" class="w-6 h-6 text-green-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Tata Letak Adaptif</h3>
                        <p class="text-gray-600 text-base md:text-lg">Mengatur item dengan tinggi bervariasi secara otomatis, mengisi ruang kosong untuk tampilan yang padat dan efisien.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="smartphone" class="w-6 h-6 text-blue-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Responsif Penuh</h3>
                        <p class="text-gray-600 text-base md:text-lg">Menyesuaikan diri dengan sempurna pada berbagai ukuran layar, dari desktop hingga perangkat seluler.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="brush" class="w-6 h-6 text-purple-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Estetika Visual</h3>
                        <p class="text-gray-600 text-base md:text-lg">Menciptakan tampilan galeri atau koleksi yang menarik dan profesional, menghilangkan area kosong yang tidak diinginkan.</p>
                    </div>
                </li>
            </ul>
        </section>

        <!-- Bagian 4: Contoh Penerapan -->
        <section class="mt-16 pt-10 ">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">
                Contoh Penerapan
            </h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-8 max-w-2xl">
                Berikut adalah contoh tata letak Masonry. Perhatikan bagaimana item-item dengan tinggi yang berbeda tersusun rapi tanpa celah kosong.
            </p>

            <div class="bg-gray-100 p-8 rounded-lg border border-gray-200">
                <style>
                    /* Contoh CSS untuk Masonry Layout */
                    .grid {
                        background: #ffffff;
                        padding: 20px;
                        border-radius: 8px;
                        position: relative; /* Penting untuk Masonry */
                        margin: 0 auto;
                        min-height: 300px; /* Contoh min-height agar grid terlihat */
                    }
                    .grid-sizer,
                    .grid-item {
                        width: 30%; /* Contoh lebar item */
                    }
                    .grid-item {
                        margin-bottom: 10px; /* Jarak vertikal antar item */
                        background: #f0f0f0;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        padding: 15px;
                        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
                        text-align: left;
                        word-wrap: break-word;
                    }
                    .grid-item--width2 {
                        width: 65%;
                    }

                    /* Hapus fixed height untuk membiarkan Masonry mengatur */
                    /* .grid-item:nth-child(3n+1) { height: 120px; } */
                    /* .grid-item:nth-child(3n+2) { height: 180px; } */
                    /* .grid-item:nth-child(3n) { height: 150px; } */

                    /* Sesuaikan tinggi item untuk demo agar terlihat bervariasi */
                    .grid-item:nth-child(1) { min-height: 100px; }
                    .grid-item:nth-child(2) { min-height: 180px; }
                    .grid-item:nth-child(3) { min-height: 120px; }
                    .grid-item:nth-child(4) { min-height: 150px; }
                    .grid-item:nth-child(5) { min-height: 200px; }
                    .grid-item:nth-child(6) { min-height: 100px; }


                    /* Responsif */
                    @media (max-width: 768px) {
                        .grid-sizer,
                        .grid-item { width: 48%; }
                        .grid-item--width2 { width: 98%; }
                    }
                    @media (max-width: 480px) {
                        .grid-sizer,
                        .grid-item { width: 98%; }
                        .grid-item--width2 { width: 98%; }
                    }
                </style>
                <div class="grid" id="my-masonry-grid">
                    <div class="grid-sizer"></div> <!-- Penting untuk lebar kolom -->
                    <div class="grid-item">
                        <h4 class="font-semibold text-gray-700 mb-2">Item 1</h4>
                        <p class="text-gray-600 text-sm">Ini adalah konten untuk item pertama yang lebih pendek.</p>
                    </div>
                    <div class="grid-item grid-item--width2">
                        <h4 class="font-semibold text-gray-700 mb-2">Item 2 (Lebar)</h4>
                        <p class="text-gray-600 text-sm">Konten yang lebih panjang untuk item yang lebih besar, menunjukkan bagaimana Masonry akan menyusunnya dengan rapi di dalam grid yang ada.</p>
                    </div>
                    <div class="grid-item">
                        <h4 class="font-semibold text-gray-700 mb-2">Item 3</h4>
                        <p class="text-gray-600 text-sm">Item ini juga memiliki konten yang ringkas.</p>
                    </div>
                    <div class="grid-item">
                        <h4 class="font-semibold text-gray-700 mb-2">Item 4</h4>
                        <p class="text-gray-600 text-sm">Konten di sini.</p>
                    </div>
                    <div class="grid-item">
                        <h4 class="font-semibold text-gray-700 mb-2">Item 5</h4>
                        <p class="text-gray-600 text-sm">Item ini agak tinggi karena teksnya lumayan panjang untuk contoh.</p>
                        <p class="text-gray-600 text-sm mt-1">Anda dapat melihat bagaimana Masonry akan menyusun ini dengan item lain.</p>
                    </div>
                    <div class="grid-item">
                        <h4 class="font-semibold text-gray-700 mb-2">Item 6</h4>
                        <p class="text-gray-600 text-sm">Item grid terakhir.</p>
                    </div>
                </div>
                <p class="text-gray-600 mt-4">Grid akan menyesuaikan diri secara responsif saat Anda mengubah ukuran jendela browser.</p>
            </div>

            <p class="mt-8 text-gray-600 leading-relaxed text-base md:text-lg">
                Untuk menginisialisasi contoh Masonry di atas, gunakan kode JavaScript berikut. Pastikan Anda sudah mengimpor Masonry dan semua gambar dalam grid sudah dimuat (misalnya, menggunakan ImagesLoaded) sebelum memanggil inisialisasi Masonry.
            </p>
        </section>

    </div>
</main>

<script src="/assets/vendor/masonry/masonry.pkgd.min.js" defer></script>
