<?php
/**
 * page/content/animate-style.php
 *
 * Halaman ini berfungsi sebagai dokumentasi untuk pustaka Animate.css
 * dalam EazZy Project.
 * Menggunakan: Tailwind CSS, Lucide Icons, dan Animate.css.
 */
?>

<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <!-- Kontainer utama halaman, disesuaikan agar seragam dengan halaman lain -->
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-7xl mx-auto">

        <!-- Judul Halaman -->
        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
                <i data-lucide="sparkles" class="w-10 h-10 md:w-12 md:h-12"></i> <!-- Ikon relevan untuk animasi -->
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">
                    Animate.css
                </h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">
                    Pustaka CSS Siap Pakai untuk Animasi Web.
                </p>
            </div>
        </div>

        <!-- Bagian: Apa itu Animate.css? -->
        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Apa itu Animate.css?</h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg">
                Animate.css adalah pustaka CSS yang sangat populer dan mudah digunakan yang menyediakan koleksi animasi CSS siap pakai. Dengan Animate.css, Anda dapat menambahkan efek animasi yang menarik ke elemen HTML Anda hanya dengan menambahkan kelas CSS yang sesuai. Ini adalah solusi yang cepat dan efisien untuk membuat antarmuka pengguna Anda lebih dinamis dan interaktif tanpa perlu menulis kode JavaScript yang kompleks.
            </p>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mt-4">
                Pustaka ini sangat ringan dan kompatibel dengan semua browser modern, menjadikannya pilihan ideal untuk proyek web dari berbagai skala.
            </p>
            <!-- Backlink ke Animate.css -->
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mt-4">
                Kunjungi situs resmi Animate.css untuk melihat semua animasi yang tersedia dan dokumentasi lengkapnya: 
                <a href="https://animate.style/" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline font-semibold">animate.style</a>.
            </p>
        </section>

        <!-- Bagian: Panduan Pemasangan Animate.css -->
        <section class="mb-10 md:mb-12 pt-10 ">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Panduan Pemasangan Animate.css</h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-4">
                Berikut adalah langkah-langkah untuk memasang dan menggunakan Animate.css di proyek Anda:
            </p>
            <ol class="list-decimal list-inside space-y-6 text-gray-600 text-base md:text-lg">
                <li>
                    <strong>Instalasi via npm (Disarankan):</strong>
                    <p class="mt-1">Buka terminal di direktori root proyek dan jalankan perintah berikut:</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-bash">npm install animate.css --save</code></pre>
                </li>
                <li>
                    <strong>Muat CSS di Halaman Anda:</strong>
                    <p class="mt-1">Sertakan file CSS Animate.css di bagian `<head>` dokumen HTML Anda. Jika Anda menggunakan bundler seperti Webpack, Anda bisa mengimpornya langsung di JavaScript utama Anda.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-html">
&lt;!-- Menggunakan CDN (opsi cepat) --&gt;
&lt;link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/&gt;

&lt;!-- Atau jika diinstal via npm dan disalin ke public/css/ --&gt;
&lt;link rel="stylesheet" href="public/css/_animate.css"/&gt;
                    </code></pre>
                    <p class="mt-2 text-sm text-gray-500">
                        *Catatan: Anda sudah memiliki file `_animate.css` di `public/css/`, jadi Anda bisa menggunakan jalur relatif ke file tersebut.*
                    </p>
                </li>
                <li>
                    <strong>Tambahkan Kelas Animasi ke Elemen HTML:</strong>
                    <p class="mt-1">Untuk menganimasikan elemen, tambahkan kelas `animate__animated` dan kelas animasi spesifik (misalnya `animate__bounce`) ke elemen HTML Anda.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-html">
&lt;h1 class="animate__animated animate__bounce"&gt;Halo Dunia!&lt;/h1&gt;
                    </code></pre>
                </li>
                 <li>
                    <strong>Memicu Animasi dengan JavaScript (Opsional):</strong>
                    <p class="mt-1">Untuk memicu animasi saat suatu peristiwa terjadi (misalnya klik tombol), Anda dapat menambahkan dan menghapus kelas dengan JavaScript.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-javascript">
const element = document.querySelector('.my-element');
element.classList.add('animate__animated', 'animate__bounceOut'); // Tambahkan animasi keluar

element.addEventListener('animationend', () => {
  element.classList.remove('animate__bounceOut'); // Hapus kelas setelah animasi selesai
});
                    </code></pre>
                </li>
            </ol>
        </section>

        <!-- Bagian: Manfaat Animate.css -->
        <section class="mb-10 md:mb-12 pt-10 ">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Manfaat Animate.css</h2>
            <ul class="space-y-4">
                <li class="flex items-start">
                    <i data-lucide="bolt" class="w-6 h-6 text-yellow-500 mr-3 mt-1 flex-shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Implementasi Cepat</h3>
                        <p class="text-gray-600 text-base md:text-lg">Tambahkan animasi kompleks hanya dengan beberapa kelas CSS, menghemat waktu pengembangan.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="library" class="w-6 h-6 text-purple-500 mr-3 mt-1 flex-shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Koleksi Animasi Luas</h3>
                        <p class="text-gray-600 text-base md:text-lg">Menyediakan puluhan efek animasi masuk, keluar, perhatian, dan efek khusus lainnya.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="brush" class="w-6 h-6 text-green-500 mr-3 mt-1 flex-shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Dapat Disesuaikan</h3>
                        <p class="text-gray-600 text-base md:text-lg">Meskipun siap pakai, durasi, delay, dan iterasi animasi dapat dengan mudah disesuaikan.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="globe" class="w-6 h-6 text-blue-500 mr-3 mt-1 flex-shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Kompatibilitas Lintas Browser</h3>
                        <p class="text-gray-600 text-base md:text-lg">Bekerja dengan baik di sebagian besar browser modern tanpa masalah kompatibilitas.</p>
                    </div>
                </li>
            </ul>
        </section>

        <!-- Bagian: Contoh Penerapan Animate.css -->
        <section class="mt-16 pt-10 ">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Contoh Penerapan</h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-8 max-w-2xl">
                Klik tombol di bawah untuk melihat elemen-elemen dianimasikan.
            </p>

            <div class="flex flex-col items-center space-y-6">
                <div id="animatedElement" class="text-5xl font-extrabold text-blue-600 p-8 bg-blue-50 rounded-lg shadow-lg">
                    Animate Me!
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 w-full max-w-2xl">
                    <button id="bounceBtn" class="bg-blue-600 text-white font-bold py-3 px-6 rounded-lg shadow-md hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">
                        Bounce
                    </button>
                    <button id="fadeInUpBtn" class="bg-green-600 text-white font-bold py-3 px-6 rounded-lg shadow-md hover:bg-green-700 transition-all duration-300 transform hover:scale-105">
                        Fade In Up
                    </button>
                    <button id="shakeXBtn" class="bg-yellow-500 text-white font-bold py-3 px-6 rounded-lg shadow-md hover:bg-yellow-600 transition-all duration-300 transform hover:scale-105">
                        Shake X
                    </button>
                    <button id="tadaBtn" class="bg-purple-600 text-white font-bold py-3 px-6 rounded-lg shadow-md hover:bg-purple-700 transition-all duration-300 transform hover:scale-105">
                        Tada
                    </button>
                </div>
            </div>
        </section>

    </div>
</main>