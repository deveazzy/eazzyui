<?php
/**
 * page/content/alerts-and-notifications.php
 *
 * Halaman ini berfungsi sebagai showcase untuk berbagai komponen alert
 * dan notifikasi yang digunakan dalam EazZy Project.
 * Menggunakan: Tailwind CSS, Lucide Icons, dan PNotify.
 */
?>

<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <!-- Kontainer utama halaman, disesuaikan agar seragam dengan halaman lain -->
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-7xl mx-auto">

        <!-- Judul Halaman - disesuaikan agar seragam -->
        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
                <i data-lucide="bell-ring" class="w-10 h-10 md:w-12 md:h-12"></i> <!-- Menggunakan ikon bell-ring yang lebih relevan -->
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">
                    Alerts & Notifications
                </h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">
                    Koleksi komponen pesan dan notifikasi untuk berbagai keperluan.
                </p>
            </div>
        </div>

        <!-- Bagian 1: Alert Statis (Tailwind CSS) -->
        <section class="mb-10 md:mb-12">
            <!-- Judul bagian - disesuaikan agar seragam -->
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Static Alerts</h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-8 max-w-2xl">
                Alert ini dibuat murni dengan Tailwind CSS dan Lucide. Cocok untuk pesan yang perlu tetap terlihat di dalam konten halaman, seperti di atas formulir atau dalam sebuah panel.
            </p>

            <div class="space-y-6">
                <!-- Alert: Success - ditambahkan shadow-md -->
                <div class="p-4 rounded-lg bg-green-50 border border-green-200 flex items-start gap-4 shadow-md">
                    <div class="flex-shrink-0 text-green-600">
                        <i data-lucide="check-circle-2" class="w-6 h-6"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-semibold text-green-800">Success</h3>
                        <p class="text-sm text-green-700">Data Anda telah berhasil disimpan.</p>
                    </div>
                    <button class="text-green-800 hover:text-green-900 hover:bg-green-100 rounded-md p-1">
                        <i data-lucide="x" class="w-5 h-5"></i>
                    </button>
                </div>

                <!-- Alert: Info - ditambahkan shadow-md -->
                <div class="p-4 rounded-lg bg-blue-50 border border-blue-200 flex items-start gap-4 shadow-md">
                    <div class="flex-shrink-0 text-blue-600">
                         <i data-lucide="info" class="w-6 h-6"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-semibold text-blue-800">Information</h3>
                        <p class="text-sm text-blue-700">Update baru akan tersedia pada tanggal 1 Agustus 2025.</p>
                    </div>
                     <button class="text-blue-800 hover:text-blue-900 hover:bg-blue-100 rounded-md p-1">
                        <i data-lucide="x" class="w-5 h-5"></i>
                    </button>
                </div>

                <!-- Alert: Warning - ditambahkan shadow-md -->
                <div class="p-4 rounded-lg bg-yellow-50 border border-yellow-200 flex items-start gap-4 shadow-md">
                    <div class="flex-shrink-0 text-yellow-600">
                        <i data-lucide="alert-triangle" class="w-6 h-6"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-semibold text-yellow-800">Warning</h3>
                        <p class="text-sm text-yellow-700">Sesi Anda akan berakhir dalam 5 menit. Harap simpan pekerjaan Anda.</p>
                    </div>
                     <button class="text-yellow-800 hover:text-yellow-900 hover:bg-yellow-100 rounded-md p-1">
                        <i data-lucide="x" class="w-5 h-5"></i>
                    </button>
                </div>

                <!-- Alert: Error - ditambahkan shadow-md -->
                <div class="p-4 rounded-lg bg-red-50 border border-red-200 flex items-start gap-4 shadow-md">
                    <div class="flex-shrink-0 text-red-600">
                        <i data-lucide="alert-circle" class="w-6 h-6"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-semibold text-red-800">Error</h3>
                        <p class="text-sm text-red-700">Gagal terhubung ke server. Silakan periksa koneksi internet Anda.</p>
                    </div>
                     <button class="text-red-800 hover:text-red-900 hover:bg-red-100 rounded-md p-1">
                        <i data-lucide="x" class="w-5 h-5"></i>
                    </button>
                </div>
            </div>
        </section>

        <!-- Bagian Baru: Apa itu PNotify? -->
        <section class="mb-10 md:mb-12 pt-10 ">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Apa itu PNotify?</h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg">
                PNotify adalah pustaka JavaScript ringan yang menyediakan notifikasi non-blokir yang dapat disesuaikan sepenuhnya untuk aplikasi web. Ini memungkinkan Anda menampilkan pesan yang menarik secara visual kepada pengguna tanpa mengganggu alur kerja mereka.
            </p>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mt-4">
                Dengan berbagai jenis notifikasi (sukses, info, peringatan, error, dan notice), PNotify sangat ideal untuk memberikan umpan balik instan setelah tindakan pengguna, seperti pengiriman formulir, pembaruan data, atau indikasi kesalahan.
            </p>
            <!-- Menambahkan backlink PNotify -->
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mt-4">
                Pelajari lebih lanjut tentang PNotify dan jelajahi dokumentasinya di situs resmi mereka: 
                <a href="http://sciactive.com/pnotify/" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline font-semibold">sciactive.com/pnotify</a>.
            </p>
        </section>

        <!-- Bagian Baru: Panduan Pemasangan PNotify -->
        <section class="mb-10 md:mb-12 pt-10 ">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Panduan Pemasangan PNotify</h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-4">
                Berikut adalah langkah-langkah untuk memasang dan mengkonfigurasi PNotify di dalam proyek ini:
            </p>
            <ol class="list-decimal list-inside space-y-6 text-gray-600 text-base md:text-lg">
                <li>
                    <strong>Instalasi via npm (Disarankan):</strong>
                    <p class="mt-1">Buka terminal di direktori root proyek dan jalankan perintah berikut. Ini akan mengunduh library PNotify ke dalam folder `node_modules`.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-bash">npm install pnotify</code></pre>
                </li>
                <li>
                    <strong>Muat Script dan CSS di Halaman:</strong>
                    <p class="mt-1">Tambahkan tag script dan link stylesheet PNotify di bagian `<head>` atau sebelum penutup `</body>` di file PHP Anda.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-html">
&lt;!-- PNotify CSS --&gt;
&lt;link href="/node_modules/pnotify/dist/PNotifyBrightTheme.css" rel="stylesheet" type="text/css" /&gt;
&lt;!-- PNotify JS --&gt;
&lt;script src="/node_modules/pnotify/dist/iife/PNotify.js"&gt;&lt;/script&gt;
&lt;script src="/node_modules/pnotify/dist/iife/PNotifyButtons.js"&gt;&lt;/script&gt;
&lt;script src="/node_modules/pnotify/dist/iife/PNotifyMobile.js"&gt;&lt;/script&gt;
                    </code></pre>
                    <p class="mt-2 text-sm text-gray-500">
                        *Catatan: Sesuaikan jalur `/node_modules/` jika Anda menyalin file PNotify ke folder `public/assets/vendor/` Anda.*
                    </p>
                </li>
                <li>
                    <strong>Inisialisasi Notifikasi dengan JavaScript:</strong>
                    <p class="mt-1">Gunakan objek `PNotify` untuk menampilkan notifikasi. Anda dapat menyesuaikan tipe, judul, dan teks pesan.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-javascript">
new PNotify({
    title: 'Notifikasi Sukses',
    text: 'Operasi berhasil diselesaikan!',
    type: 'success',
    delay: 3000 // Notifikasi akan hilang setelah 3 detik
});
                    </code></pre>
                </li>
            </ol>
        </section>

        <!-- Bagian Baru: Manfaat PNotify -->
        <section class="mb-10 md:mb-12 pt-10 ">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Manfaat PNotify</h2>
            <ul class="space-y-4">
                <li class="flex items-start">
                    <i data-lucide="bell" class="w-6 h-6 text-blue-500 mr-3 mt-1 flex-shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Non-Blokir & Tidak Mengganggu</h3>
                        <p class="text-gray-600 text-base md:text-lg">Menyampaikan informasi penting tanpa mengganggu alur kerja pengguna atau memerlukan interaksi langsung.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="palette" class="w-6 h-6 text-purple-500 mr-3 mt-1 flex-shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Sangat Dapat Disesuaikan</h3>
                        <p class="text-gray-600 text-base md:text-lg">Fleksibilitas tinggi dalam tampilan, posisi, animasi, dan perilaku notifikasi agar sesuai dengan desain aplikasi Anda.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="zap" class="w-6 h-6 text-yellow-500 mr-3 mt-1 flex-shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Umpan Balik Instan</h3>
                        <p class="text-gray-600 text-base md:text-lg">Memberikan konfirmasi atau peringatan segera setelah tindakan pengguna, meningkatkan responsivitas aplikasi.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="smartphone" class="w-6 h-6 text-green-500 mr-3 mt-1 flex-shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Responsif & Ramah Seluler</h3>
                        <p class="text-gray-600 text-base md:text-lg">Dirancang untuk bekerja dengan baik di berbagai ukuran layar, termasuk perangkat seluler.</p>
                    </div>
                </li>
            </ul>
        </section>

        <!-- Bagian 2: Notifikasi Dinamis (PNotify) - ini adalah bagian yang sudah ada sebelumnya -->
        <section class="mt-16 pt-10 ">
             <!-- Judul bagian - disesuaikan agar seragam -->
             <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Contoh Notifikasi Dinamis</h2>
             <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-8 max-w-2xl">
                Berikut adalah contoh notifikasi yang dapat dipicu secara dinamis. Klik tombol di bawah untuk melihat berbagai jenis notifikasi PNotify.
            </p>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                <!-- Tombol untuk memicu notifikasi -->
                <button id="notify-success" class="bg-green-600 text-white font-bold py-3 px-6 rounded-lg shadow-md hover:bg-green-700 transition-all duration-300 transform hover:scale-105">
                    Show Success
                </button>
                <button id="notify-info" class="bg-blue-600 text-white font-bold py-3 px-6 rounded-lg shadow-md hover:bg-blue-700 transition-all duration-300 transform hover:scale-105">
                    Show Info
                </button>
                <button id="notify-error" class="bg-red-600 text-white font-bold py-3 px-6 rounded-lg shadow-md hover:bg-red-700 transition-all duration-300 transform hover:scale-105">
                    Show Error
                </button>
                 <button id="notify-notice" class="bg-yellow-500 text-white font-bold py-3 px-6 rounded-lg shadow-md hover:bg-yellow-600 transition-all duration-300 transform hover:scale-105">
                    Show Notice
                </button>
            </div>
        </section>

    </div>
</main>
