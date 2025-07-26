<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-7xl mx-auto">

        <!-- Bagian Header / Judul Halaman -->
        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
                <!-- Ikon Halaman (ganti sesuai konteks) -->
                <i data-lucide="chevrons-down" class="w-10 h-10 md:w-12 md:h-12"></i>
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">
                    Accordion
                </h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">
                    Komponen yang dapat diperluas untuk menampilkan dan menyembunyikan konten.
                </p>
            </div>
        </div>

        <!-- Bagian 1: Penjelasan -->
        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">
                Apa itu Accordion?
            </h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg">
                Accordion adalah komponen antarmuka pengguna yang memungkinkan Anda mengorganisir konten ke dalam bagian-bagian yang dapat diperluas dan diciutkan. Setiap bagian (panel) biasanya memiliki header yang dapat diklik untuk menampilkan atau menyembunyikan konten di dalamnya. Ini sangat berguna untuk menyajikan banyak informasi dalam ruang yang ringkas, seperti FAQ, daftar fitur, atau detail produk yang panjang.
            </p>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mt-4">
                Penggunaan accordion membantu mengurangi *clutter* visual, mempermudah navigasi, dan memungkinkan pengguna untuk fokus pada informasi yang relevan bagi mereka tanpa harus *scrolling* terlalu banyak.
            </p>
        </section>

        <!-- Bagian 2: Contoh Penerapan -->
        <section class="mt-16 pt-10">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">
                Contoh Penerapan
            </h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-8 max-w-2xl">
                Berikut adalah beberapa gaya dan contoh penerapan komponen Accordion.
            </p>

            <div class="space-y-6">
                <!-- Accordion Gaya Dasar -->
                <div class="accordion-container" data-accordion-group="basic-accordion">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Gaya Dasar</h3>
                    <div class="accordion-item bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden">
                        <button class="accordion-header flex justify-between items-center w-full p-4 md:p-6 text-left font-semibold text-lg text-gray-800 bg-gray-50 hover:bg-gray-100 transition-colors duration-200" aria-expanded="true" aria-controls="basic-panel-1">
                            <span>Bagian 1: Pengenalan</span>
                            <i data-lucide="chevron-down" class="w-6 h-6 transform transition-transform duration-200"></i>
                        </button>
                        <div id="basic-panel-1" class="accordion-content border-t border-gray-200 p-4 md:p-6">
                            <p class="text-gray-600">Ini adalah konten untuk Bagian 1. Anda dapat menempatkan teks, gambar, atau elemen HTML lainnya di sini. Accordion ini dirancang untuk hanya membuka satu panel pada satu waktu.</p>
                        </div>
                    </div>
                    <div class="accordion-item bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden mt-4">
                        <button class="accordion-header flex justify-between items-center w-full p-4 md:p-6 text-left font-semibold text-lg text-gray-800 bg-gray-50 hover:bg-gray-100 transition-colors duration-200" aria-expanded="false" aria-controls="basic-panel-2">
                            <span>Bagian 2: Fitur Utama</span>
                            <i data-lucide="chevron-down" class="w-6 h-6 transform transition-transform duration-200"></i>
                        </button>
                        <div id="basic-panel-2" class="accordion-content border-t border-gray-200 p-4 md:p-6 hidden">
                            <ul class="list-disc list-inside text-gray-600 space-y-2">
                                <li>Desain responsif untuk semua perangkat.</li>
                                <li>Mudah diintegrasikan dengan proyek Tailwind CSS.</li>
                                <li>Meningkatkan keterbacaan konten yang padat.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="accordion-item bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden mt-4">
                        <button class="accordion-header flex justify-between items-center w-full p-4 md:p-6 text-left font-semibold text-lg text-gray-800 bg-gray-50 hover:bg-gray-100 transition-colors duration-200" aria-expanded="false" aria-controls="basic-panel-3">
                            <span>Bagian 3: Cara Penggunaan</span>
                            <i data-lucide="chevron-down" class="w-6 h-6 transform transition-transform duration-200"></i>
                        </button>
                        <div id="basic-panel-3" class="accordion-content border-t border-gray-200 p-4 md:p-6 hidden">
                            <p class="text-gray-600">Untuk menggunakan accordion ini, cukup tambahkan struktur HTML yang sesuai dan inisialisasi dengan JavaScript yang disediakan.</p>
                        </div>
                    </div>
                </div>

                <!-- Accordion dengan Ikon -->
                <div class="accordion-container" data-accordion-group="icon-accordion">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4 pt-10">Dengan Ikon</h3>
                    <div class="accordion-item bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden">
                        <button class="accordion-header flex justify-between items-center w-full p-4 md:p-6 text-left font-semibold text-lg text-gray-800 bg-gray-50 hover:bg-gray-100 transition-colors duration-200" aria-expanded="false" aria-controls="icon-panel-1">
                            <span class="flex items-center"><i data-lucide="user-circle" class="w-5 h-5 mr-3 text-blue-600"></i> Profil Pengguna</span>
                            <i data-lucide="chevron-down" class="w-6 h-6 transform transition-transform duration-200"></i>
                        </button>
                        <div id="icon-panel-1" class="accordion-content border-t border-gray-200 p-4 md:p-6 hidden">
                            <p class="text-gray-600">Informasi detail profil pengguna dapat ditempatkan di sini.</p>
                        </div>
                    </div>
                    <div class="accordion-item bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden mt-4">
                        <button class="accordion-header flex justify-between items-center w-full p-4 md:p-6 text-left font-semibold text-lg text-gray-800 bg-gray-50 hover:bg-gray-100 transition-colors duration-200" aria-expanded="true" aria-controls="icon-panel-2">
                            <span class="flex items-center"><i data-lucide="settings" class="w-5 h-5 mr-3 text-green-600"></i> Pengaturan Akun</span>
                            <i data-lucide="chevron-down" class="w-6 h-6 transform transition-transform duration-200 rotate-180"></i>
                        </button>
                        <div id="icon-panel-2" class="accordion-content border-t border-gray-200 p-4 md:p-6">
                            <p class="text-gray-600">Berbagai opsi pengaturan akun seperti bahasa, zona waktu, dan notifikasi.</p>
                        </div>
                    </div>
                </div>

                <!-- Accordion "Always Open" (Multiple Open) -->
                <div class="accordion-container" data-accordion-group="multiple-accordion">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4 pt-10">Banyak Panel Terbuka (FAQ)</h3>
                    <div class="accordion-item bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden">
                        <button class="accordion-header flex justify-between items-center w-full p-4 md:p-6 text-left font-semibold text-lg text-gray-800 bg-gray-50 hover:bg-gray-100 transition-colors duration-200" aria-expanded="true" aria-controls="multi-panel-1">
                            <span>Apa itu Eazzy Project?</span>
                            <i data-lucide="chevron-down" class="w-6 h-6 transform transition-transform duration-200 rotate-180"></i>
                        </button>
                        <div id="multi-panel-1" class="accordion-content border-t border-gray-200 p-4 md:p-6">
                            <p class="text-gray-600">Eazzy Project adalah platform pengembangan perangkat lunak yang menyediakan solusi intuitif dan cepat untuk berbagai kebutuhan bisnis.</p>
                        </div>
                    </div>
                    <div class="accordion-item bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden mt-4">
                        <button class="accordion-header flex justify-between items-center w-full p-4 md:p-6 text-left font-semibold text-lg text-gray-800 bg-gray-50 hover:bg-gray-100 transition-colors duration-200" aria-expanded="true" aria-controls="multi-panel-2">
                            <span>Bagaimana cara memulai?</span>
                            <i data-lucide="chevron-down" class="w-6 h-6 transform transition-transform duration-200 rotate-180"></i>
                        </button>
                        <div id="multi-panel-2" class="accordion-content border-t border-gray-200 p-4 md:p-6">
                            <p class="text-gray-600">Anda bisa memulai dengan mendaftar akun gratis dan menjelajahi fitur-fitur yang tersedia di dashboard kami.</p>
                        </div>
                    </div>
                    <div class="accordion-item bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden mt-4">
                        <button class="accordion-header flex justify-between items-center w-full p-4 md:p-6 text-left font-semibold text-lg text-gray-800 bg-gray-50 hover:bg-gray-100 transition-colors duration-200" aria-expanded="false" aria-controls="multi-panel-3">
                            <span>Apakah ada dukungan teknis?</span>
                            <i data-lucide="chevron-down" class="w-6 h-6 transform transition-transform duration-200"></i>
                        </button>
                        <div id="multi-panel-3" class="accordion-content border-t border-gray-200 p-4 md:p-6 hidden">
                            <p class="text-gray-600">Ya, kami menyediakan dukungan teknis 24/7 melalui email dan live chat untuk semua pengguna.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>