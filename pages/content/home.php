<?php
/**
 * content/home.php
 *
 * File ini berisi konten utama untuk halaman 'home' EazZy Project.
 * Ini mencakup bagian Hero, Roadmap/Timeline, dan Kontak.
 * Konten ini akan di-include oleh page/switch.php.
 */
?>

<main class="flex-1 container mx-auto p-6 md:p-10">
<!-- Konten utama halaman Anda akan ditempatkan di sini. -->
<!-- Hero Section -->
<section id="hero" class="bg-white">
    <div class="container mx-auto px-6 py-20 md:py-24 text-center">
        <h1 class="text-5xl md:text-7xl font-bold text-gray-900">EazZy Apps</h1>
        <p class="mt-2 text-xl md:text-2xl font-light text-gray-500">Smart App Free for Everyone</p>
        
        <p class="mt-8 text-base md:text-lg text-gray-600 max-w-2xl mx-auto">
            Kami sedang membangun sebuah aplikasi gratis khusus untuk para pelaku usaha agar dapat berkembang lebih mudah dan cepat. Daftar dan ikuti kami agar kamu menjadi yang pertama mendapatkan akses saat aplikasi ini diluncurkan.
        </p>

        <!-- Countdown Timer -->
        <div class="mt-10">
            <div id="countdown" class="flex justify-center items-end space-x-4 md:space-x-8">
                <!-- Konten akan diisi oleh JavaScript -->
            </div>
        </div>

        <a href="#contact" class="mt-10 inline-block bg-blue-600 text-white font-bold px-8 py-3 rounded-lg text-lg hover:bg-blue-700 transition-colors duration-300">
            Ikuti Perkembangan
        </a>
    </div>
</section>

<!-- Timeline/Roadmap Section -->
<section id="timeline" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 md:px-0">
        <h3 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12">
            Roadmap
        </h3>
        
        <!-- Timeline Container -->
        <div class="relative wrap overflow-hidden p-4 md:p-10 h-full">
            <!-- Vertical Line -->
            <div class="border-2-2 absolute border-opacity-20 border-gray-700 h-full border left-8 md:left-1/2"></div>

            <!-- Timeline Item 1 -->
            <div class="timeline-item mb-8 flex md:justify-between md:items-center w-full md:right-timeline">
                <div class="hidden md:block order-1 w-5/12"></div>
                <div class="z-20 flex items-center order-1 bg-blue-600 shadow-xl w-12 h-12 rounded-full">
                    <i data-lucide="lightbulb" class="w-6 h-6 mx-auto text-white"></i>
                </div>
                <div class="order-1 bg-white rounded-lg shadow-xl w-full md:w-5/12 px-6 py-4 ml-8 md:ml-0">
                    <p class="text-sm font-medium text-green-600">Q1 Juni 2025</p>
                    <h4 class="font-bold text-lg mb-2">Konsep & Riset Pasar</h4>
                    <p class="text-sm leading-snug tracking-wide text-gray-600">
                        Mengidentifikasi kebutuhan pelaku usaha dan merumuskan konsep inti aplikasi.
                    </p>
                </div>
            </div>

            <!-- Timeline Item 2 -->
            <div class="timeline-item mb-8 flex md:justify-between md:flex-row-reverse md:items-center w-full md:left-timeline">
                <div class="hidden md:block order-1 w-5/12"></div>
                <div class="z-20 flex items-center order-1 bg-blue-600 shadow-xl w-12 h-12 rounded-full">
                    <i data-lucide="figma" class="w-6 h-6 mx-auto text-white"></i>
                </div>
                <div class="order-1 bg-white rounded-lg shadow-xl w-full md:w-5/12 px-6 py-4 ml-8 md:ml-0">
                    <p class="text-sm font-medium text-green-600">Q2 Juli 2025</p>
                    <h4 class="font-bold text-lg mb-2">Desain UI/UX & Perencanaan</h4>
                    <p class="text-sm leading-snug tracking-wide text-gray-600">
                        Merancang antarmuka yang intuitif dan menyusun arsitektur teknis aplikasi.
                    </p>
                </div>
            </div>

            <!-- Timeline Item 3 -->
            <div class="timeline-item mb-8 flex md:justify-between md:items-center w-full md:right-timeline">
                <div class="hidden md:block order-1 w-5/12"></div>
                <div class="z-20 flex items-center order-1 bg-blue-600 shadow-xl w-12 h-12 rounded-full">
                    <i data-lucide="code-2" class="w-6 h-6 mx-auto text-white"></i>
                </div>
                <div class="order-1 bg-white rounded-lg shadow-xl w-full md:w-5/12 px-6 py-4 ml-8 md:ml-0">
                    <p class="text-sm font-medium text-green-600">Q3 Agustus 2025</p>
                    <h4 class="font-bold text-lg mb-2">Pengembangan Inti</h4>
                    <p class="text-sm leading-snug tracking-wide text-gray-600">
                        Tim developer mulai membangun fitur-fitur utama dan fungsionalitas aplikasi.
                    </p>
                </div>
            </div>
            
            <!-- Timeline Item 4 -->
            <div class="timeline-item mb-8 flex md:justify-between md:flex-row-reverse md:items-center w-full md:left-timeline">
                <div class="hidden md:block order-1 w-5/12"></div>
                <div class="z-20 flex items-center order-1 bg-blue-600 shadow-xl w-12 h-12 rounded-full">
                    <i data-lucide="test-tube-2" class="w-6 h-6 mx-auto text-white"></i>
                </div>
                <div class="order-1 bg-white rounded-lg shadow-xl w-full md:w-5/12 px-6 py-4 ml-8 md:ml-0">
                    <p class="text-sm font-medium text-green-600">Q4 2025</p>
                    <h4 class="font-bold text-lg mb-2">Uji Coba Internal</h4>
                    <p class="text-sm leading-snug tracking-wide text-gray-600">
                        Melakukan alpha testing untuk memastikan stabilitas dan kualitas aplikasi.
                    </p>
                </div>
            </div>
            
            <!-- Timeline Item 5 -->
            <div class="timeline-item mb-8 flex md:justify-between md:items-center w-full md:right-timeline">
                <div class="hidden md:block order-1 w-5/12"></div>
                <div class="z-20 flex items-center order-1 bg-blue-600 shadow-xl w-12 h-12 rounded-full">
                    <i data-lucide="rocket" class="w-6 h-6 mx-auto text-white"></i>
                </div>
                <div class="order-1 bg-white rounded-lg shadow-xl w-full md:w-5/12 px-6 py-4 ml-8 md:ml-0">
                    <p class="text-sm font-medium text-green-600">Q1 2026</p>
                    <h4 class="font-bold text-lg mb-2">Peluncuran Beta & Rilis</h4>
                    <p class="text-sm leading-snug tracking-wide text-gray-600">
                        Aplikasi siap diluncurkan ke publik dan tersedia untuk diunduh.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="bg-white py-20">
    <div class="container mx-auto px-6 text-center">
           <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
            Jadi yang Pertama Tahu!
        </h3>
        <p class="text-lg text-gray-600 mb-8 max-w-xl mx-auto">
            Daftarkan email Anda untuk mendapatkan notifikasi eksklusif saat aplikasi kami rilis.
        </p>
        <!-- Form Pendaftaran Email (dapat ditambahkan di sini) -->
        <!-- <div class="flex flex-col md:flex-row justify-center items-center gap-2 max-w-md mx-auto">
            <input type="email" placeholder="Masukkan email Anda..." class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <button class="w-full md:w-auto bg-blue-600 text-white font-bold px-6 py-3 rounded-lg text-lg hover:bg-blue-700 transition-colors duration-300">Kirim</button>
        </div> -->
    </div>
</section>
</main>