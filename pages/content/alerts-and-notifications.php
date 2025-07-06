<?php
/**
 * page/content/alerts-and-notifications.php
 *
 * Halaman ini berfungsi sebagai showcase untuk berbagai komponen alert
 * dan notifikasi yang digunakan dalam EazZy Project.
 * Menggunakan: Tailwind CSS, Lucide Icons, dan PNotify.
 */
?>

<main class="flex-1 container mx-auto p-6 md:p-10">
    <section class="py-12 md:py-16 bg-white">
        <div class="container mx-auto px-6">

            <!-- Judul Halaman -->
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Alerts & Notifications</h1>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Koleksi komponen pesan dan notifikasi untuk berbagai keperluan.
                </p>
            </div>

            <!-- Bagian 1: Alert Statis (Tailwind CSS) -->
            <div class="mt-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Static Alerts</h2>
                <p class="text-gray-600 mb-8 max-w-2xl">
                    Alert ini dibuat murni dengan Tailwind CSS dan Lucide. Cocok untuk pesan yang perlu tetap terlihat di dalam konten halaman, seperti di atas formulir atau dalam sebuah panel.
                </p>

                <div class="space-y-6">
                    <!-- Alert: Success -->
                    <div class="p-4 rounded-lg bg-green-50 border border-green-200 flex items-start gap-4">
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

                    <!-- Alert: Info -->
                    <div class="p-4 rounded-lg bg-blue-50 border border-blue-200 flex items-start gap-4">
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

                    <!-- Alert: Warning -->
                    <div class="p-4 rounded-lg bg-yellow-50 border border-yellow-200 flex items-start gap-4">
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

                    <!-- Alert: Error -->
                    <div class="p-4 rounded-lg bg-red-50 border border-red-200 flex items-start gap-4">
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
            </div>

            <!-- Bagian 2: Notifikasi Dinamis (PNotify) -->
            <div class="mt-16 pt-10 border-t">
                 <h2 class="text-3xl font-bold text-gray-800 mb-6">Dynamic Notifications</h2>
                 <p class="text-gray-600 mb-8 max-w-2xl">
                    Ideal untuk memberikan feedback instan setelah aksi pengguna, seperti menekan tombol. Notifikasi ini ditenagai oleh <a href="http://sciactive.com/pnotify/" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline font-semibold">PNotify</a>, sebuah library notifikasi JavaScript yang serbaguna.
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
            </div>

        </div>
    </section>
</main>
