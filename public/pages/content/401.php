<?php
/**
 * page/content/401.php
 *
 * File ini berisi konten untuk halaman "Unauthorized" (401) EazZy Project.
 * Halaman ini akan ditampilkan ketika pengguna mencoba mengakses sumber daya
 * yang memerlukan autentikasi, tetapi belum memberikan kredensial yang valid.
 * Konten ini akan di-include oleh page/switch.php.
 */
?>

<main class="flex-1 container mx-auto p-6 md:p-10">
<!-- Konten utama halaman Anda akan ditempatkan di sini. -->

<section class="flex items-center justify-center min-h-[calc(100vh-160px)] bg-gray-50 py-20">
    <div class="container mx-auto px-6 text-center">
        <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-xl">
            <!-- Ikon Lucide untuk tidak sah -->
            <div class="mb-6">
                <i data-lucide="user-x" class="w-24 h-24 mx-auto text-yellow-600"></i>
            </div>
            <h2 class="text-6xl font-extrabold text-yellow-600 mb-4">401</h2>
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Tidak Sah</h1>
            <p class="text-lg text-gray-600 mb-8">
                Maaf, Anda perlu masuk atau memberikan kredensial yang valid untuk mengakses halaman ini.
            </p>
            <a href="https://mirror.eazzy-project.com/" class="inline-block bg-blue-600 text-white font-bold px-8 py-3 rounded-lg text-lg hover:bg-blue-700 transition-colors duration-300">
                Kembali ke Beranda
            </a>
        </div>
    </div>
</section>
</main>