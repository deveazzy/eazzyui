<?php
/**
 * page/content/404.php
 *
 * File ini berisi konten untuk halaman "Page Not Found" (404) EazZy Project.
 * Halaman ini akan ditampilkan ketika URL yang diminta tidak ditemukan atau tidak valid.
 * Konten ini akan di-include oleh page/switch.php.
 */
?>

<main class="flex-1 container mx-auto p-6 md:p-10">
<!-- Konten utama halaman Anda akan ditempatkan di sini. -->

<section class="flex items-center justify-center min-h-[calc(100vh-160px)] bg-gray-50 py-20">
    <div class="container mx-auto px-6 text-center">
        <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-xl">
            <div class="mb-6">
                <i data-lucide="alert-circle" class="w-24 h-24 mx-auto text-blue-600"></i>
            </div>
            <h2 class="text-6xl font-extrabold text-blue-600 mb-4">404</h2>
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Halaman Tidak Ditemukan</h1>
            <p class="text-lg text-gray-600 mb-8">
                Maaf, halaman yang Anda cari tidak dapat ditemukan. Mungkin alamat URL salah atau halaman telah dihapus.
            </p>
            <a href="https://mirror.eazzy-project.com/" class="inline-block bg-blue-600 text-white font-bold px-8 py-3 rounded-lg text-lg hover:bg-blue-700 transition-colors duration-300">
                Kembali ke Beranda
            </a>
        </div>
    </div>
</section>
</main>