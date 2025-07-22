<?php
/**
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 * @path public/pages/example-table.php
 */
?>

<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-full mx-auto">

        <!-- Header Halaman -->
        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
                <i data-lucide="table-2" class="w-10 h-10 md:w-12 md:h-12"></i>
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">
                    Advanced Example Table
                </h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">Implementasi Tabel dengan Aksi Popup</p>
            </div>
        </div>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Fitur yang Didemonstrasikan</h2>
            <ul class="list-disc list-inside space-y-2 text-gray-600 leading-relaxed text-base md:text-lg">
                <li><strong>Responsive Layout:</strong> Tabel akan menyesuaikan kolomnya berdasarkan lebar layar.</li>
                <li><strong>Responsive Layout Collapse:</strong> Kolom yang tersembunyi akan ditampilkan dalam daftar yang dapat diperluas di bawah setiap baris.</li>
                <li><strong>Column Groups:</strong> Kolom dikelompokkan dalam header yang dapat diperluas.</li>
                <li><strong>Frozen Columns:</strong> Beberapa kolom akan tetap terlihat saat tabel digulir secara horizontal.</li>
                <li><strong>Nested Data Trees (Hierarki 3 Level):</strong> Data ditampilkan dalam struktur pohon yang dapat diperluas/dilipat.</li>
                <li><strong>Custom Formatters:</strong> Contoh pemformatan sel kustom.</li>
                <li><strong>Aksi Baris:</strong> Menu dropdown CRUD pada setiap baris.</li>
                <li><strong>Ekspor Data:</strong> Opsi untuk mengekspor data ke CSV dan XLSX.</li>
            </ul>
        </section>

        <!-- Tabel -->
        <section class="mt-16 pt-10">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Tabel Data Perusahaan</h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-4 max-w-4xl">
                Klik ikon panah untuk membuka data anak. Klik tombol aksi (&#8942;) untuk menampilkan popup dengan pilihan CRUD.
            </p>

            <!-- Tombol Ekspor -->
            <div class="mb-4 flex flex-wrap gap-2">
                <button id="export-csv-btn" class="bg-green-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-green-600 transition-colors flex items-center gap-2">
                    <i data-lucide="file-text" class="w-5 h-5"></i> Export CSV
                </button>
                <button id="export-xlsx-btn" class="bg-purple-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-purple-600 transition-colors flex items-center gap-2">
                    <i data-lucide="file-spreadsheet" class="w-5 h-5"></i> Export XLSX
                </button>
            </div>

            <!-- Kontainer untuk Tabel Tabulator -->
            <div id="my-example-table" class="shadow-lg rounded-lg overflow-hidden border border-gray-200"></div>
        </section>

    </div>
</main>

<!-- PERUBAHAN: Latar belakang popup (backdrop) dibuat transparan -->
<div id="action-popup" class="hidden fixed inset-0 z-50">
    <!-- Kontainer untuk memusatkan konten popup -->
    <div class="flex h-full w-full items-center justify-center p-4">
        <div id="popup-content" class="bg-white rounded-xl shadow-2xl p-6 w-full max-w-sm">
            <!-- Popup Header -->
            <div class="flex justify-between items-center border-b border-gray-200 pb-3 mb-5">
                <h3 class="text-lg font-semibold text-gray-900" id="popup-title">Aksi untuk Item</h3>
                <button id="close-popup-btn" class="text-gray-400 hover:text-gray-700 rounded-full p-1 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>
            <!-- Popup Body (Tombol CRUD) -->
            <div class="space-y-3" id="popup-actions">
                <!-- Tombol CRUD akan disisipkan oleh JavaScript di sini -->
            </div>
        </div>
    </div>
</div>


<!-- Dependensi Eksternal -->
<script src="/assets/vendor/xlxs/xlsx.min.js" defer></script>
<script src="/assets/vendor/luxon/luxon.min.js" defer></script>