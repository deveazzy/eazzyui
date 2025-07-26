<?php
/*
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 */
?>
<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-7xl mx-auto">

        <!-- Bagian Header / Judul Halaman -->
        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
                <!-- Ikon Halaman (ganti sesuai konteks) -->
                <i data-lucide="send" class="w-10 h-10 md:w-12 md:h-12"></i>
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">
                    Formulir Wizard Multi-Langkah
                </h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">
                    Panduan langkah demi langkah untuk mengisi informasi Anda.
                </p>
            </div>
        </div>

        <!-- Wizard Container -->
        <div id="formWizard" class="space-y-6">

            <!-- Langkah 1: Informasi Pribadi -->
            <div class="accordion-item bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden" data-step="1">
                <button class="accordion-header flex justify-between items-center w-full p-4 md:p-6 text-left font-semibold text-lg text-gray-800 bg-gray-50 hover:bg-gray-100 transition-colors duration-200" aria-expanded="true" aria-controls="step1-content">
                    <span>1. Informasi Pribadi</span>
                    <i data-lucide="chevron-down" class="w-6 h-6 transform transition-transform duration-200"></i>
                </button>
                <div id="step1-content" class="accordion-content border-t border-gray-200">
                    <div class="flex flex-col md:flex-row">
                        <nav class="flex flex-row md:flex-col md:w-1/4 border-b md:border-b-0 md:border-r border-gray-200 p-2" aria-label="Tabs" data-tab-group="step1">
                            <button class="tab-button active group flex items-center w-full text-left px-3 py-2 rounded-md text-sm font-medium text-blue-700 bg-blue-50" data-tab-target="#step1-tab1">
                                <i data-lucide="user" class="mr-3 h-5 w-5"></i><span>Data Dasar</span>
                            </button>
                            <button class="tab-button group flex items-center w-full text-left px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-900" data-tab-target="#step1-tab2">
                                <i data-lucide="map-pin" class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"></i><span>Alamat</span>
                            </button>
                        </nav>
                        <div class="flex-1 flex flex-col">
                            <div class="p-6 grow" data-tab-group="step1">
                                <!-- Tab 1 Content: Data Dasar -->
                                <div id="step1-tab1" class="tab-panel active">
                                    <h3 class="text-lg font-medium text-gray-900 mb-4">Detail Data Dasar</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <label for="nama-depan" class="block text-sm font-medium text-gray-700">Nama Depan <span class="text-red-500">*</span></label>
                                            <input type="text" name="nama-depan" id="nama-depan" class="mt-1 w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="John" required>
                                            <p class="text-xs text-red-600 mt-1 hidden" data-validation-feedback="nama-depan"></p>
                                        </div>
                                        <div>
                                            <label for="nama-belakang" class="block text-sm font-medium text-gray-700">Nama Belakang</label>
                                            <input type="text" name="nama-belakang" id="nama-belakang" class="mt-1 w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Doe">
                                        </div>
                                        <div class="md:col-span-2">
                                            <label for="email" class="block text-sm font-medium text-gray-700">Alamat Email <span class="text-red-500">*</span></label>
                                            <input type="email" name="email" id="email" class="mt-1 w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="anda@contoh.com" required>
                                            <p class="text-xs text-red-600 mt-1 hidden" data-validation-feedback="email"></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab 2 Content: Alamat -->
                                <div id="step1-tab2" class="tab-panel">
                                    <h3 class="text-lg font-medium text-gray-900 mb-4">Detail Alamat</h3>
                                    <div class="space-y-6">
                                        <div>
                                            <label for="alamat-jalan" class="block text-sm font-medium text-gray-700">Alamat Jalan <span class="text-red-500">*</span></label>
                                            <input type="text" name="alamat-jalan" id="alamat-jalan" class="mt-1 w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Jl. Contoh No. 123" required>
                                            <p class="text-xs text-red-600 mt-1 hidden" data-validation-feedback="alamat-jalan"></p>
                                        </div>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                            <div>
                                                <label for="kota" class="block text-sm font-medium text-gray-700">Kota <span class="text-red-500">*</span></label>
                                                <input type="text" name="kota" id="kota" class="mt-1 w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Bandung" required>
                                                <p class="text-xs text-red-600 mt-1 hidden" data-validation-feedback="kota"></p>
                                            </div>
                                            <div>
                                                <label for="kode-pos" class="block text-sm font-medium text-gray-700">Kode Pos</label>
                                                <input type="text" name="kode-pos" id="kode-pos" class="mt-1 w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="40xxx">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-6 py-3 flex justify-end space-x-3 footer-actions">
                                <button type="button" class="btn-previous inline-flex justify-center rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" disabled>
                                    <i data-lucide="chevron-left" class="w-5 h-5 mr-2"></i> Sebelumnya
                                </button>
                                <button type="button" class="btn-next inline-flex justify-center rounded-md border border-transparent bg-blue-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                    Selanjutnya <i data-lucide="chevron-right" class="w-5 h-5 ml-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Langkah 2: Preferensi Akun -->
            <div class="accordion-item bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden" data-step="2">
                <button class="accordion-header flex justify-between items-center w-full p-4 md:p-6 text-left font-semibold text-lg text-gray-800 bg-gray-50 hover:bg-gray-100 transition-colors duration-200" aria-expanded="false" aria-controls="step2-content">
                    <span>2. Preferensi Akun</span>
                    <i data-lucide="chevron-down" class="w-6 h-6 transform transition-transform duration-200"></i>
                </button>
                <div id="step2-content" class="accordion-content border-t border-gray-200 hidden">
                    <div class="flex flex-col md:flex-row">
                        <nav class="flex flex-row md:flex-col md:w-1/4 border-b md:border-b-0 md:border-r border-gray-200 p-2" aria-label="Tabs" data-tab-group="step2">
                            <button class="tab-button active group flex items-center w-full text-left px-3 py-2 rounded-md text-sm font-medium text-blue-700 bg-blue-50" data-tab-target="#step2-tab1">
                                <i data-lucide="settings" class="mr-3 h-5 w-5"></i><span>Pengaturan Umum</span>
                            </button>
                            <button class="tab-button group flex items-center w-full text-left px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-900" data-tab-target="#step2-tab2">
                                <i data-lucide="bell" class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"></i><span>Notifikasi</span>
                            </button>
                        </nav>
                        <div class="flex-1 flex flex-col">
                            <div class="p-6 grow" data-tab-group="step2">
                                <!-- Tab 1 Content: Pengaturan Umum -->
                                <div id="step2-tab1" class="tab-panel active">
                                    <h3 class="text-lg font-medium text-gray-900 mb-4">Pengaturan Akun Umum</h3>
                                    <div class="space-y-6">
                                        <div>
                                            <label for="bahasa-preferensi" class="block text-sm font-medium text-gray-700">Bahasa Preferensi <span class="text-red-500">*</span></label>
                                            <select id="bahasa-preferensi" name="bahasa-preferensi" class="mt-1 w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                                                <option value="">Pilih Bahasa</option>
                                                <option value="id">Bahasa Indonesia</option>
                                                <option value="en">English</option>
                                            </select>
                                            <p class="text-xs text-red-600 mt-1 hidden" data-validation-feedback="bahasa-preferensi"></p>
                                        </div>
                                        <div>
                                            <label for="zona-waktu" class="block text-sm font-medium text-gray-700">Zona Waktu</label>
                                            <input type="text" name="zona-waktu" id="zona-waktu" class="mt-1 w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Asia/Jakarta">
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab 2 Content: Notifikasi -->
                                <div id="step2-tab2" class="tab-panel">
                                    <h3 class="text-lg font-medium text-gray-900 mb-4">Pengaturan Notifikasi</h3>
                                    <div class="space-y-4">
                                        <label for="toggle-email-notif" class="flex items-center cursor-pointer">
                                            <span class="mr-3 font-medium text-gray-700">Notifikasi Email</span>
                                            <div class="relative">
                                                <input type="checkbox" id="toggle-email-notif" name="email_notifications" class="sr-only peer" checked>
                                                <div class="block bg-gray-200 w-14 h-8 rounded-full peer-checked:bg-blue-600 transition"></div>
                                                <div class="dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition transform peer-checked:translate-x-full"></div>
                                            </div>
                                        </label>
                                        <label for="toggle-sms-notif" class="flex items-center cursor-pointer">
                                            <span class="mr-3 font-medium text-gray-700">Notifikasi SMS</span>
                                            <div class="relative">
                                                <input type="checkbox" id="toggle-sms-notif" name="sms_notifications" class="sr-only peer">
                                                <div class="block bg-gray-200 w-14 h-8 rounded-full peer-checked:bg-blue-600 transition"></div>
                                                <div class="dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition transform peer-checked:translate-x-full"></div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-6 py-3 flex justify-end space-x-3 footer-actions">
                                <button type="button" class="btn-previous inline-flex justify-center rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" disabled>
                                    <i data-lucide="chevron-left" class="w-5 h-5 mr-2"></i> Sebelumnya
                                </button>
                                <button type="button" class="btn-next inline-flex justify-center rounded-md border border-transparent bg-blue-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                    Selanjutnya <i data-lucide="chevron-right" class="w-5 h-5 ml-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Langkah 3: Konfirmasi & Selesai -->
            <div class="accordion-item bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden" data-step="3">
                <button class="accordion-header flex justify-between items-center w-full p-4 md:p-6 text-left font-semibold text-lg text-gray-800 bg-gray-50 hover:bg-gray-100 transition-colors duration-200" aria-expanded="false" aria-controls="step3-content">
                    <span>3. Konfirmasi & Selesai</span>
                    <i data-lucide="chevron-down" class="w-6 h-6 transform transition-transform duration-200"></i>
                </button>
                <div id="step3-content" class="accordion-content border-t border-gray-200 hidden">
                    <div class="flex flex-col md:flex-row">
                        <nav class="flex flex-row md:flex-col md:w-1/4 border-b md:border-b-0 md:border-r border-gray-200 p-2" aria-label="Tabs" data-tab-group="step3">
                            <button class="tab-button active group flex items-center w-full text-left px-3 py-2 rounded-md text-sm font-medium text-blue-700 bg-blue-50" data-tab-target="#step3-tab1">
                                <i data-lucide="clipboard-check" class="mr-3 h-5 w-5"></i><span>Ringkasan</span>
                            </button>
                            <button class="tab-button group flex items-center w-full text-left px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-900" data-tab-target="#step3-tab2">
                                <i data-lucide="check-circle" class="mr-3 h-5 w-5"></i><span>Persetujuan</span>
                            </button>
                        </nav>
                        <div class="flex-1 flex flex-col">
                            <div class="p-6 grow" data-tab-group="step3">
                                <!-- Tab 1 Content: Ringkasan -->
                                <div id="step3-tab1" class="tab-panel active">
                                    <h3 class="text-lg font-medium text-gray-900 mb-4">Ringkasan Informasi Anda</h3>
                                    <div class="space-y-3 text-gray-700">
                                        <p><strong>Nama Lengkap:</strong> <span id="summary-nama-lengkap"></span></p>
                                        <p><strong>Email:</strong> <span id="summary-email"></span></p>
                                        <p><strong>Alamat:</strong> <span id="summary-alamat"></span></p>
                                        <p><strong>Kota:</strong> <span id="summary-kota"></span></p>
                                        <p><strong>Bahasa Preferensi:</strong> <span id="summary-bahasa"></span></p>
                                        <p><strong>Notifikasi Email:</strong> <span id="summary-email-notif"></span></p>
                                        <p><strong>Notifikasi SMS:</strong> <span id="summary-sms-notif"></span></p>
                                    </div>
                                </div>
                                <!-- Tab 2 Content: Persetujuan -->
                                <div id="step3-tab2" class="tab-panel">
                                    <h3 class="text-lg font-medium text-gray-900 mb-4">Persetujuan Syarat & Ketentuan</h3>
                                    <div class="space-y-4">
                                        <p class="text-gray-600 text-sm">
                                            Dengan menekan tombol "Selesai", Anda menyetujui semua Syarat dan Ketentuan serta Kebijakan Privasi kami. Pastikan semua informasi yang Anda berikan adalah benar dan akurat.
                                        </p>
                                        <label for="agree-terms" class="flex items-center cursor-pointer">
                                            <input type="checkbox" id="agree-terms" name="agree-terms" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500" required>
                                            <span class="ml-2 text-sm font-medium text-gray-700">Saya menyetujui Syarat & Ketentuan <span class="text-red-500">*</span></span>
                                        </label>
                                        <p class="text-xs text-red-600 mt-1 hidden" data-validation-feedback="agree-terms"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-6 py-3 flex justify-end space-x-3 footer-actions">
                                <button type="button" class="btn-previous inline-flex justify-center rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    <i data-lucide="chevron-left" class="w-5 h-5 mr-2"></i> Sebelumnya
                                </button>
                                <!-- Tombol "Selanjutnya" untuk tab Ringkasan -->
                                <button type="button" class="btn-next-summary inline-flex justify-center rounded-md border border-transparent bg-blue-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                    Selanjutnya <i data-lucide="chevron-right" class="w-5 h-5 ml-2"></i>
                                </button>
                                <!-- Tombol "Selesai" untuk tab Persetujuan -->
                                <button type="submit" class="btn-submit-final justify-center rounded-md border border-transparent bg-green-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 hidden">
                                    Selesai <i data-lucide="check" class="w-5 h-5 ml-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
