<?php
/**
 * @[EazZy Project] Copyright (c) [2025] [EazZy Project] license
 * @https://opensource.org/licenses/MIT MIT License
 * @path public/pages/about.php
 * @author EazZy Project
 *
 * File ini berisi konten untuk halaman "Tentang" EazZy Project.
 * Ini menjelaskan visi, misi, dan tujuan aplikasi.
 * Konten ini akan di-include oleh page/switch.php.
 */
?>

<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-7xl mx-auto">

        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
                <i data-lucide="file-text" class="w-10 h-10 md:w-12 md:h-12"></i>
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight animated-on-scroll animate__animated animate__bounceInDown animate__slow">Tentang EazZy Project</h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1 animated-on-scroll animate__animated animate__fadeInUp animate__slower">
                    Kami adalah tim yang bersemangat dalam mengembangkan solusi teknologi untuk membantu pertumbuhan bisnis.
                </p>
            </div>
        </div>

        <section class="mb-10 md:mb-12">
            <p class="text-gray-600 leading-relaxed text-base md:text-lg max-w-3xl mx-auto text-center animated-on-scroll animate__animated animate__fadeInUp animate__slower animate__delay-1s">
                Proyek ini dibangun dengan semangat <strong class="font-semibold text-gray-700">open-source</strong>. Kami percaya pada kekuatan kolaborasi dan transparansi. Anda dapat melihat, menggunakan, dan berkontribusi pada kode kami melalui
                <a href="https://github.com/deveazzy/EazZyProject" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 font-semibold text-blue-600 hover:text-blue-800 hover:underline transition-colors">
                    <span>repositori GitHub kami</span>
                    <i data-lucide="github" class="w-4 h-4"></i>
                </a>.
            </p>
        </section>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 pb-3 mb-6">Visi Kami</h2> <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center text-left">
                <div class="space-y-6 animated-on-scroll animate__animated animate__fadeInLeft animate__slow">
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        Menjadi platform aplikasi bisnis terkemuka yang memberdayakan UMKM dan usaha kecil untuk berinovasi, bersaing, dan berkembang di era digital, tanpa hambatan biaya. Kami percaya bahwa setiap bisnis, besar maupun kecil, berhak mendapatkan akses ke alat-alat canggih untuk mencapai potensi penuhnya.
                    </p>
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        Dengan EazZy Project, kami membayangkan ekosistem di mana manajemen bisnis menjadi lebih mudah, lebih cerdas, dan lebih terjangkau bagi semua orang.
                    </p>
                </div>
                <div class="animated-on-scroll animate__animated animate__fadeInRight animate__slow">
                    <img src="https://placehold.co/600x400/93C5FD/1E40AF?text=Visi+Kami" alt="Gambar Visi Kami" class="rounded-lg shadow-lg w-full h-auto object-cover">
                </div>
            </div>
        </section>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 pb-3 mb-6">Misi Kami</h2> <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center text-left">
                <div class="animated-on-scroll animate__animated animate__fadeInLeft animate__slower animate__delay-1s">
                    <img src="https://placehold.co/600x400/A7F3D0/065F46?text=Misi+Kami" alt="Gambar Misi Kami" class="rounded-lg shadow-lg w-full h-auto object-cover">
                </div>
                <div class="space-y-6 animated-on-scroll animate__animated animate__fadeInRight animate__slower animate__delay-1s">
                    <ul class="list-disc list-inside text-gray-700 leading-relaxed space-y-2 text-base md:text-lg">
                        <li>Menyediakan aplikasi bisnis gratis yang intuitif dan kaya fitur.</li>
                        <li>Meningkatkan efisiensi operasional dan pengambilan keputusan bagi pelaku usaha.</li>
                        <li>Membangun komunitas yang mendukung dan berkolaborasi.</li>
                        <li>Terus berinovasi untuk memenuhi kebutuhan pasar yang berkembang.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 pb-3 mb-6 text-center animated-on-scroll animate__animated animate__fadeInUp animate__slower animate__delay-2s">Pengembang</h2> <div class="flex flex-wrap justify-center gap-8">
                <div class="flex flex-col items-center text-center animated-on-scroll animate__animated animate__zoomIn animate__slower animate__delay-2s">
                    <img src="https://placehold.co/120x120/E0F2F7/000000?text=EazZy" alt="Logo EazZy Project" class="w-32 h-32 rounded-full object-cover mb-3 shadow-md">
                    <h3 class="text-lg font-semibold text-gray-800">EazZy Project</h3>
                    <p class="text-sm text-gray-500">EazZy Apps - Smart Apps Free For Everyone</p>
                </div>
            </div>
        </section>

    </div>
</main>