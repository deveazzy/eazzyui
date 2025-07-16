<?php
/**
 * page/content/tailwind-css.php
 *
 * Halaman ini berfungsi sebagai dokumentasi untuk framework Tailwind CSS
 * dalam EazZy Project.
 * Menggunakan: Tailwind CSS, Lucide Icons.
 */
?>

<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <!-- Kontainer utama halaman, disesuaikan agar seragam dengan halaman lain -->
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-7xl mx-auto">

        <!-- Judul Halaman - disesuaikan agar seragam dan terpusat -->
        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
                <i data-lucide="wind" class="w-10 h-10 md:w-12 md:h-12"></i> <!-- Ikon relevan untuk Tailwind -->
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">
                    <a href="https://tailwindcss.com/" target="_blank" rel="noopener noreferrer" class="hover:text-blue-600 transition-colors duration-300">Tailwind CSS</a>
                </h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">Framework CSS Utility-First untuk Pengembangan Cepat.</p>
            </div>
        </div>

        <!-- Bagian: Apa itu Tailwind CSS? -->
        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Apa itu Tailwind CSS?</h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg">
                Tailwind CSS adalah framework CSS utility-first yang memungkinkan Anda membangun desain kustom dengan cepat tanpa meninggalkan HTML Anda. Alih-alih menggunakan kelas-kelas yang sudah jadi untuk komponen (seperti `btn` atau `card`), Tailwind menyediakan kelas-kelas utility tingkat rendah seperti `flex`, `pt-4`, `text-center`, dan `rotate-90` yang dapat Anda gabungkan langsung di markup Anda untuk membuat gaya yang unik.
            </p>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mt-4">
                Pendekatan ini menghasilkan CSS yang sangat kecil dan dioptimalkan, karena Anda hanya menggunakan utilitas yang benar-benar Anda butuhkan. Ini sangat cocok untuk proyek yang membutuhkan desain yang sangat spesifik dan fleksibilitas tinggi.
            </p>
            <!-- Backlink ke Tailwind CSS -->
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mt-4">
                Pelajari lebih lanjut tentang Tailwind CSS dan jelajahi dokumentasinya di situs resmi mereka: 
                <a href="https://tailwindcss.com/" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline font-semibold">tailwindcss.com</a>.
            </p>
        </section>

        <!-- Bagian: Panduan Pemasangan Tailwind CSS -->
        <section class="mb-10 md:mb-12 pt-10 ">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Panduan Pemasangan Tailwind CSS</h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-4">
                Berikut adalah langkah-langkah dasar untuk memasang dan mengkonfigurasi Tailwind CSS di proyek Anda:
            </p>
            <ol class="list-decimal list-inside space-y-6 text-gray-600 text-base md:text-lg">
                <li>
                    <strong>Instalasi via npm:</strong>
                    <p class="mt-1">Buka terminal di direktori root proyek dan instal Tailwind CSS serta dependensi lainnya:</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-bash">npm install -D tailwindcss postcss autoprefixer</code></pre>
                </li>
                <li>
                    <strong>Inisialisasi Tailwind CSS:</strong>
                    <p class="mt-1">Jalankan perintah ini untuk membuat `tailwind.config.js` dan `postcss.config.js`:</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-bash">npx tailwindcss init -p</code></pre>
                </li>
                <li>
                    <strong>Konfigurasi File `tailwind.config.js`:</strong>
                    <p class="mt-1">Edit file `tailwind.config.js` untuk mengkonfigurasi jalur file template Anda agar Tailwind dapat memindai kelas-kelas utility yang digunakan:</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-javascript">
// tailwind.config.js
module.exports = {
  content: [
    "./public/**/*.{html,js,php}", // Sesuaikan dengan struktur proyek Anda
    "./app/Views/**/*.php",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
                    </code></pre>
                </li>
                 <li>
                    <strong>Tambahkan Direktif Tailwind ke CSS Anda:</strong>
                    <p class="mt-1">Buat file CSS input (misalnya `input.css` di `public/css/`) dan tambahkan direktif Tailwind:</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-css">
/* public/css/input.css */
@tailwind base;
@tailwind components;
@tailwind utilities;
                    </code></pre>
                </li>
                <li>
                    <strong>Compile CSS Anda:</strong>
                    <p class="mt-1">Jalankan perintah ini untuk mengkompilasi CSS input Anda menjadi file output (misalnya `style.css` di `public/css/`) yang siap digunakan di browser:</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-bash">npx tailwindcss -i ./public/css/input.css -o ./public/css/style.css --watch</code></pre>
                    <p class="mt-2 text-sm text-gray-500">
                        *Gunakan `--watch` untuk mode pengembangan agar otomatis mengkompilasi ulang saat ada perubahan.*
                    </p>
                </li>
                 <li>
                    <strong>Sertakan CSS Output di HTML Anda:</strong>
                    <p class="mt-1">Sertakan file CSS yang sudah dikompilasi di bagian `<head>` dokumen HTML Anda:</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-html">
&lt;link href="public/css/style.css" rel="stylesheet"&gt;
                    </code></pre>
                </li>
            </ol>
        </section>

        <!-- Bagian: Manfaat Tailwind CSS -->
        <section class="mb-10 md:mb-12 pt-10 ">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Manfaat Tailwind CSS</h2>
            <ul class="space-y-4">
                <li class="flex items-start">
                    <i data-lucide="sparkles" class="w-6 h-6 text-yellow-500 mr-3 mt-1 flex-shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Desain Kustom Tanpa Batas</h3>
                        <p class="text-gray-600 text-base md:text-lg">Memberikan fleksibilitas penuh untuk membuat desain unik tanpa terikat pada komponen bawaan.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="package" class="w-6 h-6 text-green-500 mr-3 mt-1 flex-shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Ukuran File CSS Kecil</h3>
                        <p class="text-gray-600 text-base md:text-lg">Hanya menyertakan CSS yang benar-benar Anda gunakan, menghasilkan ukuran file yang sangat kecil dan performa cepat.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="code" class="w-6 h-6 text-blue-500 mr-3 mt-1 flex-shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Pengembangan Lebih Cepat</h3>
                        <p class="text-gray-600 text-base md:text-lg">Tidak perlu beralih antara file HTML dan CSS, memungkinkan alur kerja yang lebih cepat dan fokus.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="repeat" class="w-6 h-6 text-purple-500 mr-3 mt-1 flex-shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Konsistensi Desain</h3>
                        <p class="text-gray-600 text-base md:text-lg">Meskipun utility-first, sistem desain berbasis token membantu menjaga konsistensi di seluruh proyek.</p>
                    </div>
                </li>
            </ul>
        </section>

        <!-- Bagian: Contoh Penerapan Tailwind CSS -->
        <section class="mt-16 pt-10 ">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Contoh Penerapan</h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-8 max-w-2xl">
                Berikut adalah contoh komponen kartu sederhana yang dibuat sepenuhnya dengan kelas-kelas utility Tailwind CSS.
            </p>

            <div class="flex justify-center">
                <div class="max-w-sm rounded-lg overflow-hidden shadow-lg bg-white p-6">
                    <div class="font-bold text-xl mb-2 text-gray-800">Judul Kartu</div>
                    <p class="text-gray-700 text-base mb-4">
                        Ini adalah contoh teks deskripsi untuk kartu Anda. Anda bisa menggantinya dengan konten yang lebih relevan dan menarik.
                    </p>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full transition-colors duration-300">
                        Baca Selengkapnya
                    </button>
                </div>
            </div>
        </section>

    </div>
</main>
