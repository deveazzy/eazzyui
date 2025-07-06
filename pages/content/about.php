<?php
/**
 * page/content/about.php
 *
 * File ini berisi konten untuk halaman "Tentang" EazZy Project.
 * Ini menjelaskan visi, misi, dan tujuan aplikasi.
 * Konten ini akan di-include oleh page/switch.php.
 */
?>

<main class="flex-1 container mx-auto p-6 md:p-10">
<!-- Tambahkan overflow-x-hidden untuk mencegah scrollbar horizontal saat animasi dari samping berjalan -->
<section class="py-12 md:py-20 bg-white overflow-x-hidden">
    <div class="container mx-auto px-6 text-center">
        <!-- Kecepatan animasi diperlambat dan delay diatur ulang untuk efek yang lebih elegan -->
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4 animated-on-scroll animate__animated animate__bounceInDown animate__slow">Tentang EazZy Project</h1>
        <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-10 animated-on-scroll animate__animated animate__fadeInUp animate__slower">
            Kami adalah tim yang bersemangat dalam mengembangkan solusi teknologi untuk membantu pertumbuhan bisnis.
        </p>
        <p class="text-sm text-gray-600 max-w-3xl mx-auto mb-12 animated-on-scroll animate__animated animate__fadeInUp animate__slower animate__delay-1s">
            Proyek ini dibangun dengan semangat <strong class="font-semibold text-gray-700">open-source</strong>. Kami percaya pada kekuatan kolaborasi dan transparansi. Anda dapat melihat, menggunakan, dan berkontribusi pada kode kami melalui 
            <a href="#" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 font-semibold text-blue-600 hover:text-blue-800 hover:underline transition-colors">
                <span>repositori GitHub kami</span>
                <i data-lucide="github" class="w-4 h-4"></i>
            </a>.
        </p>

        <!-- Bagian Visi: Teks masuk dari kiri, gambar dari kanan dengan kecepatan lambat -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center text-left">
            <div class="space-y-6 animated-on-scroll animate__animated animate__fadeInLeft animate__slow">
                <h2 class="text-3xl font-bold text-blue-600">Visi Kami</h2>
                <p class="text-gray-700 leading-relaxed">
                    Menjadi platform aplikasi bisnis terkemuka yang memberdayakan UMKM dan usaha kecil untuk berinovasi, bersaing, dan berkembang di era digital, tanpa hambatan biaya. Kami percaya bahwa setiap bisnis, besar maupun kecil, berhak mendapatkan akses ke alat-alat canggih untuk mencapai potensi penuhnya.
                </p>
                <p class="text-gray-700 leading-relaxed">
                    Dengan EazZy Project, kami membayangkan ekosistem di mana manajemen bisnis menjadi lebih mudah, lebih cerdas, dan lebih terjangkau bagi semua orang.
                </p>
            </div>
            <div class="animated-on-scroll animate__animated animate__fadeInRight animate__slow">
                <img src="https://placehold.co/600x400/93C5FD/1E40AF?text=Visi+Kami" alt="Gambar Visi Kami" class="rounded-lg shadow-lg w-full h-auto object-cover">
            </div>
        </div>

        <!-- Bagian Misi: Animasi diperlambat (slower) dan diberi delay 1 detik -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center text-left mt-16">
            <div class="animated-on-scroll animate__animated animate__fadeInLeft animate__slower animate__delay-1s">
                <img src="https://placehold.co/600x400/A7F3D0/065F46?text=Misi+Kami" alt="Gambar Misi Kami" class="rounded-lg shadow-lg w-full h-auto object-cover">
            </div>
            <div class="space-y-6 animated-on-scroll animate__animated animate__fadeInRight animate__slower animate__delay-1s">
                <h2 class="text-3xl font-bold text-green-600">Misi Kami</h2>
                <ul class="list-disc list-inside text-gray-700 leading-relaxed space-y-2">
                    <li>Menyediakan aplikasi bisnis gratis yang intuitif dan kaya fitur.</li>
                    <li>Meningkatkan efisiensi operasional dan pengambilan keputusan bagi pelaku usaha.</li>
                    <li>Membangun komunitas yang mendukung dan berkolaborasi.</li>
                    <li>Terus berinovasi untuk memenuhi kebutuhan pasar yang berkembang.</li>
                </ul>
            </div>
        </div>

        <!-- Bagian Pengembang: Animasi diperlambat dan diberi delay 2 detik agar muncul paling akhir -->
        <div class="mt-16 pt-10 border-t border-gray-200">
            <h2 class="text-3xl font-bold text-gray-900 mb-6 animated-on-scroll animate__animated animate__fadeInUp animate__slower animate__delay-2s">Pengembang</h2>
            <div class="flex flex-wrap justify-center gap-8">
                <div class="flex flex-col items-center text-center animated-on-scroll animate__animated animate__zoomIn animate__slower animate__delay-2s">
                    <img src="https://placehold.co/120x120/E0F2F7/000000?text=EazZy" alt="Logo EazZy Project" class="w-32 h-32 rounded-full object-cover mb-3 shadow-md">
                    <h3 class="text-lg font-semibold text-gray-800">EazZy Project</h3>
                    <p class="text-sm text-gray-500">EazZy Apps - Smart Apps Free For Everyone</p>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
