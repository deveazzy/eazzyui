<?php
// Tidak ada Lisensi MIT untuk file PHP
?>
<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-7xl mx-auto">

        <!-- Bagian Header / Judul Halaman -->
        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
                <!-- Ikon Halaman (ganti sesuai konteks) -->
                <i data-lucide="image" class="w-10 h-10 md:w-12 md:h-12"></i>
            </div>
            <div>
                <h1 class="text-4xl md:text-4xl font-bold text-gray-800 leading-tight">
                    <a href="https://imagesloaded.desandro.com/" target="_blank" rel="noopener noreferrer" class="hover:text-blue-600 transition-colors duration-300">ImagesLoaded</a>
                </h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">Deteksi Pemuatan Gambar untuk Tata Letak yang Sempurna.</p>
            </div>
        </div>

        <!-- Bagian 1: Penjelasan -->
        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">
                Apa itu ImagesLoaded?
            </h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg">
                ImagesLoaded adalah library JavaScript kecil yang mendeteksi kapan gambar dan elemen media lainnya dalam sebuah kontainer telah selesai dimuat sepenuhnya. Ini sangat penting untuk tata letak yang akurat dan mencegah "lompatan" visual (Cumulative Layout Shift) yang tidak diinginkan, terutama ketika bekerja dengan grid atau layout dinamis di mana dimensi elemen sangat bergantung pada ukuran gambar yang dimuat.
            </p>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mt-4">
                Dalam konteks halaman <a href="https://uiux.eazzy-project.com/gallery" class="text-blue-600 font-semibold hover:underline">Galeri</a> dan penggunaan Masonry, ImagesLoaded menjadi pasangan yang sempurna. Masonry membutuhkan ukuran item yang akurat untuk menghitung tata letak, dan ImagesLoaded memastikan bahwa semua gambar telah selesai dimuat sehingga Masonry dapat bekerja dengan data dimensi yang benar.
            </p>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mt-4">
                Kunjungi situs resmi ImagesLoaded untuk melihat semua fitur, demo, dan dokumentasi lengkapnya:
                <a href="https://imagesloaded.desandro.com/" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline font-semibold">ImagesLoaded</a>.
            </p>
        </section>

        <!-- Bagian 2: Panduan Pemasangan -->
        <section class="mb-10 md:mb-12 pt-10 ">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">
                Panduan Pemasangan
            </h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-4">
                Ikuti langkah-langkah berikut untuk mengintegrasikan ImagesLoaded ke dalam proyek Anda:
            </p>
            <ol class="list-decimal list-inside space-y-6 text-gray-600 text-base md:text-lg">
                <li>
                    <strong>Instalasi via npm:</strong>
                    <p class="mt-1">Buka terminal di direktori root proyek Anda dan jalankan perintah:</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-bash">npm install imagesloaded</code></pre>
                </li>
                <li>
                    <strong>Inisialisasi dengan JavaScript:</strong>
                    <p class="mt-1">Gunakan JavaScript untuk mendeteksi pemuatan gambar. Contoh di bawah menunjukkan bagaimana menggunakannya sebelum menginisialisasi Masonry atau melakukan tata letak lainnya.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-javascript">
// Impor library
import imagesLoaded from 'imagesloaded';
import Masonry from 'masonry-layout'; // Asumsi Masonry juga diimpor

// Tunggu hingga DOM siap
document.addEventListener('DOMContentLoaded', function() {
    var grid = document.querySelector('.grid');

    // Gunakan imagesLoaded untuk mendeteksi saat semua gambar dalam grid selesai dimuat
    imagesLoaded( grid, function() {
      // Setelah semua gambar dimuat, baru inisialisasi Masonry
      var msnry = new Masonry( grid, {
        itemSelector: '.grid-item',
        percentPosition: true
      });
      console.log('Semua gambar dimuat dan Masonry diinisialisasi!');
    });
});
                    </code></pre>
                </li>
            </ol>
        </section>

        <!-- Bagian 3: Manfaat -->
        <section class="mb-10 md:mb-12 pt-10 ">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Manfaat ImagesLoaded</h2>
            <ul class="space-y-4">
                <li class="flex items-start">
                    <i data-lucide="check-circle" class="w-6 h-6 text-green-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Mencegah Layout Shift</h3>
                        <p class="text-gray-600 text-base md:text-lg">Memastikan tata letak dihitung setelah semua gambar memiliki dimensi yang tepat, menghindari pergeseran konten mendadak.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="scan" class="w-6 h-6 text-yellow-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Deteksi Media Komprehensif</h3>
                        <p class="text-gray-600 text-base md:text-lg">Tidak hanya gambar, tetapi juga elemen media lain seperti `&lt;video&gt;` dan `&lt;canvas&gt;`.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="link" class="w-6 h-6 text-blue-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Integrasi Mudah</h3>
                        <p class="text-gray-600 text-base md:text-lg">Dirancang untuk bekerja secara mulus dengan library tata letak seperti Masonry atau Isotope.</p>
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
                Contoh di bawah menunjukkan bagaimana ImagesLoaded digunakan untuk memastikan gambar-gambar dimuat sebelum memicu tata letak grid, yang krusial untuk galeri yang rapi. Video YouTube disertakan terpisah karena ImagesLoaded tidak mendeteksi pemuatan iframe.
            </p>

            <div class="bg-gray-100 p-8 rounded-lg border border-gray-200 text-center">
                <style>
                    /* Contoh CSS tambahan untuk demo ImagesLoaded */
                    .gallery-container {
                        display: flex;
                        flex-wrap: wrap;
                        gap: 10px;
                        justify-content: center;
                        background: #f0f0f0;
                        padding: 20px;
                        border-radius: 8px;
                    }
                    .gallery-item {
                        background-color: #e0e0e0;
                        border-radius: 4px;
                        overflow: hidden;
                        text-align: center;
                        /* Height auto agar menyesuaikan konten, terutama iframe */
                        height: auto;
                        display: flex;
                        flex-direction: column; /* Untuk menumpuk item jika ada teks di bawah media */
                        align-items: center;
                        justify-content: center;
                        color: #555;
                        font-style: italic;
                    }
                    /* Hanya gambar yang dianimasikan oleh ImagesLoaded */
                    .gallery-item img {
                        display: block;
                        width: 100%;
                        height: 100%;
                        opacity: 0; /* Sembunyikan media sampai dimuat */
                        transition: opacity 0.5s ease-in-out;
                    }
                    .gallery-item.loaded img {
                        opacity: 1;
                    }

                    /* Iframe YouTube selalu terlihat */
                    .gallery-item iframe {
                        display: block;
                        width: 100%;
                        height: 100%;
                    }

                    /* Rasio aspek untuk iframe YouTube */
                    .video-responsive {
                        position: relative;
                        width: 100%;
                        padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
                        height: 0;
                        overflow: hidden;
                    }
                    .video-responsive iframe {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                    }
                </style>
                <div class="gallery-container" id="my-gallery">
                    <div class="gallery-item" style="width: 180px;"><img src="https://placehold.co/180x100/A2E3FE/000?text=Gambar 1" alt="Gambar 1" onerror="this.src='https://placehold.co/180x100/E0E0E0/555?text=Error'"></div>
                    <div class="gallery-item" style="width: 220px;"><img src="https://placehold.co/220x150/B5EEA9/000?text=Gambar 2" alt="Gambar 2" onerror="this.src='https://placehold.co/220x150/E0E0E0/555?text=Error'"></div>
                    <!-- Contoh Elemen Video YouTube (menggunakan iframe) -->
                    <div class="gallery-item" style="width: 300px;">
                        <div class="video-responsive">
                            <iframe
                                src="https://www.youtube.com/embed/a8-yGm49kqk?rel=0"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                                style="width: 100%; height: 100%;"
                            ></iframe>
                        </div>
                        <p class="text-sm mt-2">Contoh Video YouTube</p>
                    </div>
                    <div class="gallery-item" style="width: 150px;"><img src="https://placehold.co/150x80/FFC99C/000?text=Gambar 3" alt="Gambar 3" onerror="this.src='https://placehold.co/150x80/E0E0E0/555?text=Error'"></div>
                    <div class="gallery-item" style="width: 200px;"><img src="https://placehold.co/200x120/E8BCEF/000?text=Gambar 4" alt="Gambar 4" onerror="this.src='https://placehold.co/200x120/E0E0E0/555?text=Error'"></div>
                    <div class="gallery-item" style="width: 190px;"><img src="https://placehold.co/190x130/B4E4D2/000?text=Gambar 5" alt="Gambar 5" onerror="this.src='https://placehold.co/190x130/E0E0E0/555?text=Error'"></div>
                </div>
                <p class="text-gray-600 mt-4">Perhatikan bagaimana gambar dan video muncul dengan mulus setelah dimuat.</p>
            </div>

            <p class="mt-8 text-gray-600 leading-relaxed text-base md:text-lg">
                Untuk melihat bagaimana ImagesLoaded bekerja, Anda bisa memantau konsol browser Anda. Event `always` akan terpicu setelah semua gambar dalam kontainer `my-gallery` selesai dimuat. Perlu diingat, ImagesLoaded mendeteksi pemuatan iframe itu sendiri, bukan konten video di dalamnya, dan kami telah memastikan iframe YouTube terlihat secara default.
            </p>
        </section>

    </div>
</main>
<script src="/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js" defer></script>
