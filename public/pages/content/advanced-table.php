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
                    Nested Data Trees (Hierarki 3 Level)
                </h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">Implementasi Tabel dengan Aksi Popup</p>
            </div>
        </div>
        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Fitur yang Didemonstrasikan</h2>
            <ul class="list-disc list-inside space-y-2 text-gray-600 leading-relaxed text-base md:text-lg">
                <li><strong>Frozen Columns:</strong> Beberapa kolom akan tetap terlihat saat tabel digulir secara horizontal.</li>
                <li><strong>Nested Data Trees (Hierarki 3 Level):</strong> Data ditampilkan dalam struktur pohon yang dapat diperluas/dilipat.</li>
                <li><strong>Custom Formatters:</strong> Contoh pemformatan sel kustom.</li>
                <li><strong>Aksi Baris:</strong> Menu popups CRUD pada setiap baris.</li>
                <li><strong>Ekspor Data:</strong> Opsi untuk mengekspor data ke CSV, XLSX dan PDF.</li>
                <li><strong>Paginasi Lokal:</strong> Menampilkan data dalam halaman-halaman.</li>
            </ul>
        </section>
        <!-- Tabel -->
        <section class="mt-16 pt-10">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Tabel Data Perusahaan</h2>
            
            <!-- Tombol Aksi -->
            <div class="mb-4 flex flex-wrap gap-2 items-center">
                <!-- Tombol Print dikomentari sesuai permintaan -->
                <?php /* ?>
                <button id="print-btn" class="bg-gray-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-gray-600 transition-colors flex items-center gap-2">
                    <i data-lucide="printer" class="w-5 h-5"></i> Print
                </button>
                <?php */ ?>

                <!-- Grup Tombol Export dengan Ikon dan Tooltip -->
                <div class="inline-flex shadow-sm rounded-lg border border-gray-300 overflow-hidden">
                    <button id="export-csv-btn" class="px-4 py-2 text-sm font-medium text-green-700 bg-white hover:bg-gray-100 transition-colors relative group" title="Export CSV">
                        <i data-lucide="file-text" class="w-5 h-5"></i>
                        <span class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 bg-gray-800 text-white text-xs rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">Export CSV</span>
                    </button>
                    <button id="export-xlsx-btn" class="px-4 py-2 text-sm font-medium text-purple-700 bg-white border-l border-r border-gray-300 hover:bg-gray-100 transition-colors relative group" title="Export XLSX">
                        <i data-lucide="file-spreadsheet" class="w-5 h-5"></i>
                        <span class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 bg-gray-800 text-white text-xs rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">Export XLSX</span>
                    </button>
                    <button id="export-pdf-btn" class="px-4 py-2 text-sm font-medium text-red-700 bg-white hover:bg-gray-100 transition-colors relative group" title="Export PDF">
                        <i data-lucide="file-type" class="w-5 h-5"></i>
                        <span class="absolute bottom-full left-1/2 -translate-x-1/2 mb-2 px-2 py-1 bg-gray-800 text-white text-xs rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">Export PDF</span>
                    </button>
                </div>
            </div>

            <!-- Kontainer untuk Tabel Tabulator -->
            <div id="my-example-table" class="shadow-lg rounded-lg overflow-hidden border border-gray-200"></div>
            
            <!-- Kontainer untuk Paginasi Tabulator -->
            <div id="my-example-table-pagination" class="mt-4 p-2 flex flex-wrap justify-center items-center gap-2 bg-gray-50 rounded-lg shadow-sm text-sm text-gray-700"></div>
        </section>

    </div>
</main>

<!-- Popup Modal (Tidak Berubah) -->
<div id="action-popup" class="hidden fixed inset-0 z-50">
    <div class="flex h-full w-full items-center justify-center p-4">
        <div id="popup-content" class="bg-white rounded-xl shadow-2xl p-6 w-full max-w-sm">
            <div class="flex justify-between items-center border-b border-gray-200 pb-3 mb-5">
                <h3 class="text-lg font-semibold text-gray-900" id="popup-title">Aksi untuk Item</h3>
                <button id="close-popup-btn" class="text-gray-400 hover:text-gray-700 rounded-full p-1 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>
            <div class="space-y-3" id="popup-actions"></div>
        </div>
    </div>
</div>

<!-- Dependensi Eksternal -->
<script src="/assets/vendor/xlxs/xlsx.min.js" defer></script>
<script src="/assets/vendor/luxon/luxon.min.js" defer></script>
<script src="/assets/vendor/jspdf/jspdf.umd.min.js"></script>
<script src="/assets/vendor/jspdf/jspdf.plugin.autotable.min.js"></script>
<!-- PERUBAHAN: Tambahkan type="module" -->
<script src="/js/buttons.js" type="module" defer></script>
