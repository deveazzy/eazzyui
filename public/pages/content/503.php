<?php
/**
 * page/content/500.php
 *
 * File ini berisi konten untuk halaman "Internal Server Error" (500) EazZy Project.
 * Halaman ini akan ditampilkan ketika server mengalami kesalahan tak terduga.
 * Konten ini akan di-include oleh page/switch.php.
 */
?>

<main class="flex-1 container mx-auto p-6 md:p-10">
<!-- Konten utama halaman Anda akan ditempatkan di sini. -->

<section class="flex items-center justify-center min-h-[calc(100vh-160px)] bg-gray-50 py-20">
    <div class="container mx-auto px-6 text-center">
        <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-xl">
            <!-- Ikon Lucide untuk kesalahan server -->
            <div class="mb-6">
                <i data-lucide="server-crash" class="w-24 h-24 mx-auto text-red-700"></i>
            </div>
            <h2 class="text-6xl font-extrabold text-red-700 mb-4">500</h2>
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Kesalahan Server Internal</h1>
            <p class="text-lg text-gray-600 mb-8">
                Maaf, ada masalah di server kami. Kami sedang berupaya memperbaikinya.
            </p>
            <a href="https://mirror.eazzy-project.com/" class="inline-block bg-blue-600 text-white font-bold px-8 py-3 rounded-lg text-lg hover:bg-blue-700 transition-colors duration-300">
                Kembali ke Beranda
            </a>
        </div>
    </div>
</section>
</main>