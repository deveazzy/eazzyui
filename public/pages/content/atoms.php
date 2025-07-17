<?php
/**
 * @[EazZy Project] Copyright (c) [2025] [EazZy Project] license
 * @https://opensource.org/licenses/MIT MIT License
 * @path public/pages/atoms.php
 * @author EazZy Project
 *
 * File ini berisi konten utama untuk halaman "Template Elemen Dasar (Atoms)" EazZy Project.
 * Ini mencakup berbagai komponen UI dasar seperti tombol, input, tipografi, badge, avatar,
 * alert, toggle, dan progress bar.
 * Konten ini akan di-include oleh page/switch.php.
 */
?>
<main class="flex-1 container mx-auto p-6 md:p-10">
<!-- Konten utama halaman Anda akan ditempatkan di sini. -->
<div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-7xl mx-auto">
    <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left relative">
        <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
            <i data-lucide="square" class="w-10 h-10 md:w-12 md:h-12"></i>
        </div>
        <div>
            <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">
                Template Elemen Dasar (Atoms)
            </h1>
            <p class="text-lg md:text-xl text-gray-500 mt-1">Panduan visual untuk komponen dasar Eazzy Project.</p>
        </div>
    </div>
    <!-- Sections Container -->
    <div class="space-y-12">
        <!-- 1. Buttons Section -->
        <section id="buttons" class="pt-20 -mt-20">
            <h2 class="text-2xl font-bold text-gray-800 border-b-2 border-blue-200 pb-3 mb-6">1. Buttons (Tombol)</h2>
            <div class="p-6 bg-white rounded-lg shadow-sm space-y-6">
                <!-- Primary Buttons -->
                <div>
                    <h3 class="text-lg font-semibold mb-3">Primary</h3>
                    <div class="flex flex-wrap items-center gap-4">
                        <button class="bg-blue-600 text-white font-semibold px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors duration-300 shadow-sm">Simpan</button>
                        <button class="bg-blue-600 text-white font-semibold px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors duration-300 shadow-sm flex items-center gap-2">
                            <i data-lucide="plus-circle" class="w-5 h-5"></i>
                            <span>Tambah</span>
                        </button>
                        <button class="bg-blue-600 text-white font-semibold px-4 py-2 rounded-lg shadow-sm opacity-50 cursor-not-allowed" disabled>Disabled</button>
                    </div>
                </div>
                <!-- Secondary Buttons -->
                <div>
                    <h3 class="text-lg font-semibold mb-3">Secondary</h3>
                    <div class="flex flex-wrap items-center gap-4">
                        <button class="bg-white text-gray-700 font-semibold px-4 py-2 rounded-lg border border-gray-300 hover:bg-gray-100 transition-colors duration-300 shadow-sm">Batal</button>
                        <button class="bg-white text-blue-600 font-semibold px-4 py-2 rounded-lg border border-blue-200 hover:bg-blue-50 transition-colors duration-300 shadow-sm">Lihat Detail</button>
                        <button class="bg-white text-gray-700 font-semibold px-4 py-2 rounded-lg border border-gray-300 shadow-sm opacity-50 cursor-not-allowed" disabled>Disabled</button>
                    </div>
                </div>
                <!-- Destructive Buttons -->
                <div>
                    <h3 class="text-lg font-semibold mb-3">Destructive</h3>
                    <div class="flex flex-wrap items-center gap-4">
                        <button class="bg-red-600 text-white font-semibold px-4 py-2 rounded-lg hover:bg-red-700 transition-colors duration-300 shadow-sm">Hapus</button>
                        <button class="bg-red-600 text-white font-semibold px-4 py-2 rounded-lg hover:bg-red-700 transition-colors duration-300 shadow-sm flex items-center gap-2">
                            <i data-lucide="trash-2" class="w-5 h-5"></i>
                            <span>Hapus</span>
                        </button>
                        <button class="bg-red-600 text-white font-semibold px-4 py-2 rounded-lg shadow-sm opacity-50 cursor-not-allowed" disabled>Disabled</button>
                    </div>
                </div>
                <!-- Text/Link & Icon Buttons -->
                <div>
                    <h3 class="text-lg font-semibold mb-3">Text, Link, & Icon</h3>
                    <div class="flex flex-wrap items-center gap-6">
                        <button class="text-blue-600 font-semibold hover:underline">Lupa Password?</button>
                        <button class="p-2 rounded-full hover:bg-gray-200 transition-colors duration-300">
                            <i data-lucide="edit" class="w-5 h-5 text-gray-600"></i>
                        </button>
                        <button class="p-2 rounded-full hover:bg-red-100 transition-colors duration-300">
                            <i data-lucide="trash-2" class="w-5 h-5 text-red-600"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- 2. Input Fields Section -->
        <section id="inputs" class="pt-20 -mt-20">
            <h2 class="text-2xl font-bold text-gray-800 border-b-2 border-blue-200 pb-3 mb-6">2. Input Fields (Formulir)</h2>
            <div class="p-6 bg-white rounded-lg shadow-sm grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Text Input -->
                <div class="space-y-2">
                    <label for="text-input" class="font-medium text-gray-700">Nama Produk</label>
                    <input type="text" id="text-input" name="product_name" placeholder="Contoh: Kopi Susu Gula Aren" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Password Input with Toggle -->
                <div class="space-y-2">
                    <label for="password-input" class="font-medium text-gray-700">Password</label>
                    <div class="relative">
                        <input type="password" id="password-input" name="user_password" placeholder="Masukkan password Anda" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 pr-10">
                        <button type="button" id="password-toggle-btn" class="absolute top-1/2 right-0 -translate-y-1/2 p-2 text-gray-500 hover:text-blue-600">
                            <i data-lucide="eye" class="w-5 h-5"></i>
                        </button>
                    </div>
                </div>

                <!-- Input with Error -->
                <div class="space-y-2">
                    <label for="error-input" class="font-medium text-red-700">Email</label>
                    <input type="email" id="error-input" name="user_email_error" value="bukan-email-valid" class="w-full px-4 py-2 rounded-lg border border-red-500 focus:outline-none focus:ring-2 focus:ring-red-500">
                    <p class="text-sm text-red-600">Format email tidak valid.</p>
                </div>

                <!-- Disabled Input -->
                <div class="space-y-2">
                    <label for="disabled-input" class="font-medium text-gray-700">Kode Unik (Disabled)</label>
                    <input type="text" id="disabled-input" name="unique_code" value="XYZ-12345" class="w-full px-4 py-2 rounded-lg border border-gray-300 bg-gray-100 cursor-not-allowed" disabled>
                </div>

                <!-- Date Picker (Interactive) -->
                <div class="space-y-2">
                    <label for="date-picker" class="font-medium text-gray-700">Tanggal Transaksi</label>
                    <div class="relative">
                        <!-- <input class="flatpickr flatpickr-input" type="text" placeholder="Select Date.." readonly="readonly"> -->
                        <input type="text" id="date-picker" name="transaction_date" placeholder="Pilih rentang tanggal..." class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 pr-10 bg-white cursor-pointer" readonly>
                        <i data-lucide="calendar-days" class="absolute top-1/2 right-3 -translate-y-1/2 w-5 h-5 text-gray-400 pointer-events-none"></i>
                    </div>
                </div>

                <!-- Date Range Picker -->
                <div class="space-y-2">
                    <label for="date-range-picker" class="font-medium text-gray-700">Rentang Tanggal Laporan</label>
                    <div class="relative">
                        <input type="text" id="date-range-picker" name="report_date_range" placeholder="Pilih rentang tanggal..." class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 pr-10 bg-white cursor-pointer" readonly>
                        <i data-lucide="calendar-days" class="absolute top-1/2 right-3 -translate-y-1/2 w-5 h-5 text-gray-400 pointer-events-none"></i>
                    </div>
                </div>

                <!-- Textarea -->
                <div class="space-y-2 md:col-span-2">
                    <span class="font-medium text-gray-700">Deskripsi</span>
                    <textarea id="textarea-input" name="product_description" rows="4" placeholder="Jelaskan detail produk Anda di sini..." class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>
            </div>
        </section>
        
        <!-- 3. Typography Section -->
        <section id="typography" class="pt-20 -mt-20">
            <h2 class="text-2xl font-bold text-gray-800 border-b-2 border-blue-200 pb-3 mb-6">3. Tipografi</h2>
            <div class="p-6 bg-white rounded-lg shadow-sm space-y-4">
                <h1 class="text-5xl font-bold text-gray-900">Heading 1</h1>
                <h2 class="text-4xl font-bold text-gray-900">Heading 2</h2>
                <h3 class="text-3xl font-bold text-gray-900">Heading 3</h3>
                <p class="text-base text-gray-600">Ini adalah contoh teks paragraf (body text). Eazzy Project dirancang untuk membantu para pelaku usaha agar dapat berkembang lebih mudah dan cepat.</p>
            </div>
        </section>

        <!-- 4. Badges / Tags Section -->
        <section id="badges" class="pt-20 -mt-20">
            <h2 class="text-2xl font-bold text-gray-800 border-b-2 border-blue-200 pb-3 mb-6">4. Badges / Tags</h2>
            <div class="p-6 bg-white rounded-lg shadow-sm">
                <div class="flex flex-wrap items-center gap-4">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">Lunas</span>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-yellow-100 text-yellow-800">Menunggu</span>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-red-100 text-red-800">Dibatalkan</span>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">Diproses</span>
                </div>
            </div>
        </section>
        
        <!-- 5. Avatars Section -->
        <section id="avatars" class="pt-20 -mt-20">
            <h2 class="text-2xl font-bold text-gray-800 border-b-2 border-blue-200 pb-3 mb-6">5. Avatars</h2>
            <div class="p-6 bg-white rounded-lg shadow-sm space-y-6">
                <div>
                    <h3 class="text-lg font-semibold mb-3">Bentuk (Shapes)</h3>
                    <div class="flex flex-wrap items-center gap-6">
                        <img class="h-12 w-12 rounded-md object-cover" src="https://placehold.co/64x64/93C5FD/1E40AF?text=S" alt="Avatar Square">
                        <img class="h-12 w-12 rounded-full object-cover" src="https://placehold.co/64x64/A7F3D0/065F46?text=R" alt="Avatar Rounded">
                        <div class="relative inline-block">
                            <img class="h-12 w-12 rounded-full object-cover" src="https://placehold.co/64x64/E2E8F0/4A5568?text=D" alt="Avatar with Status">
                            <span class="absolute bottom-0 right-0 block h-3.5 w-3.5 rounded-full bg-green-500 ring-2 ring-white"></span>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-3">Grup Avatar (Group)</h3>
                    <div class="flex items-center">
                        <div class="flex -space-x-4">
                            <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="https://placehold.co/40x40/fecaca/991b1b?text=A" alt="">
                            <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="https://placehold.co/40x40/fed7aa/9a3412?text=B" alt="">
                            <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="https://placehold.co/40x40/fef08a/854d0e?text=C" alt="">
                            <a class="flex h-10 w-10 items-center justify-center rounded-full border-2 border-white bg-gray-200 text-xs font-medium text-gray-600 hover:bg-gray-300" href="#">+5</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- 6. Alerts Section -->
        <section id="alerts" class="pt-20 -mt-20">
            <h2 class="text-2xl font-bold text-gray-800 border-b-2 border-blue-200 pb-3 mb-6">6. Alerts</h2>
            <div class="p-6 bg-white rounded-lg shadow-sm space-y-4">
                <!-- Success Alert -->
                <div class="flex items-start p-4 rounded-lg bg-green-50 border border-green-200">
                    <i data-lucide="check-circle-2" class="w-6 h-6 text-green-600 mr-3 shrink-0"></i>
                    <div>
                        <h4 class="font-bold text-green-800">Berhasil</h4>
                        <p class="text-sm text-green-700">Data produk telah berhasil disimpan.</p>
                    </div>
                </div>
                <!-- Info Alert -->
                <div class="flex items-start p-4 rounded-lg bg-blue-50 border border-blue-200">
                    <i data-lucide="info" class="w-6 h-6 text-blue-600 mr-3 shrink-0"></i>
                    <div>
                        <h4 class="font-bold text-blue-800">Informasi</h4>
                        <p class="text-sm text-blue-700">Sistem akan melakukan maintenance pada pukul 23:00 WIB.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 7. Toggles / Switches -->
        <section id="toggles" class="pt-20 -mt-20">
            <h2 class="text-2xl font-bold text-gray-800 border-b-2 border-blue-200 pb-3 mb-6">7. Toggles / Switches</h2>
            <div class="p-6 bg-white rounded-lg shadow-sm space-y-4">
                <label for="toggle-1" class="flex items-center cursor-pointer">
                    <span class="mr-3 font-medium text-gray-700">Notifikasi Email</span>
                    <div class="relative">
                        <input type="checkbox" id="toggle-1" name="email_notifications" class="sr-only peer">
                        <div class="block bg-gray-200 w-14 h-8 rounded-full peer-checked:bg-blue-600 transition"></div>
                        <div class="dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition transform peer-checked:translate-x-full"></div>
                    </div>
                </label>
                <label for="toggle-2" class="flex items-center cursor-pointer">
                    <span class="mr-3 font-medium text-gray-700">Mode Gelap</span>
                    <div class="relative">
                        <input type="checkbox" id="toggle-2" name="dark_mode" class="sr-only peer" checked>
                        <div class="block bg-gray-200 w-14 h-8 rounded-full peer-checked:bg-blue-600 transition"></div>
                        <div class="dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition transform peer-checked:translate-x-full"></div>
                    </div>
                </label>
            </div>
        </section>

        <!-- 8. Progress Bars -->
        <section id="progress" class="pt-20 -mt-20">
            <h2 class="text-2xl font-bold text-gray-800 border-b-2 border-blue-200 pb-3 mb-6">8. Bilah Kemajuan (Progress Bars)</h2>
            <div class="p-6 bg-white rounded-lg shadow-sm space-y-6">
                <div>
                    <span class="font-medium text-gray-700">Kelengkapan Profil</span>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 mt-2">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 75%"></div>
                    </div>
                </div>
                <div>
                    <span class="font-medium text-gray-700">Penyimpanan Terpakai</span>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 mt-2">
                        <div class="bg-green-600 h-2.5 rounded-full" style="width: 45%"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php
// Memuat script JavaScript spesifik untuk halaman atoms
?>
<!-- <script src="js/atoms-specific.js"></script> -->
</main>
