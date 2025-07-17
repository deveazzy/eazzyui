<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <!-- Kontainer utama halaman, disesuaikan agar seragam dengan halaman lain -->
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-7xl mx-auto">

        <!-- Judul Halaman -->
        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
                <i data-lucide="table" class="w-10 h-10 md:w-12 md:h-12"></i> <!-- Ikon relevan untuk tabel -->
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">
                    <a href="https://tabulator.info/" target="_blank" rel="noopener noreferrer" class="hover:text-blue-600 transition-colors duration-300">Tabulator</a>
                </h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">Pustaka Tabel Interaktif JavaScript yang Ringan.</p>
            </div>
        </div>

        <!-- Bagian: Apa itu Tabulator.info? -->
        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Apa itu Tabulator?</h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg">
                Tabulator adalah pustaka JavaScript yang ringan dan sangat fleksibel untuk membuat tabel data interaktif di halaman web Anda. Berbeda dengan pustaka tabel lain yang mungkin lebih berat, Tabulator fokus pada performa dan kustomisasi yang mendalam, memungkinkan Anda untuk menampilkan, memanipulasi, dan berinteraksi dengan data tabel dengan efisien.
            </p>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mt-4">
                Ini adalah alternatif yang sangat baik untuk pustaka seperti DataTables jika Anda membutuhkan solusi yang lebih ringan namun tetap kaya fitur seperti penyortiran, pemfilteran, pengelompokan, pengeditan sel, dan *pagination*.
            </p>
            <!-- Backlink ke Tabulator.info -->
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mt-4">
                Kunjungi situs resmi Tabulator untuk melihat semua fitur, demo, dan dokumentasi lengkapnya: 
                <a href="https://tabulator.info/" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline font-semibold">tabulator.info</a>.
            </p>
        </section>

        <!-- Bagian: Panduan Pemasangan Tabulator.info -->
        <section class="mb-10 md:mb-12 pt-10 ">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Panduan Pemasangan Tabulator</h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-4">
                Berikut adalah langkah-langkah dasar untuk memasang dan menggunakan Tabulator.info di proyek Anda:
            </p>
            <ol class="list-decimal list-inside space-y-6 text-gray-600 text-base md:text-lg">
                <li>
                    <strong>Instalasi via npm:</strong>
                    <p class="mt-1">Buka terminal di direktori *root* proyek dan instal Tabulator:</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-bash">npm install tabulator-tables</code></pre>
                </li>
                <li>
                    <strong>Muat CSS dan JavaScript di Halaman Anda:</strong>
                    <p class="mt-1">Sertakan file CSS dan JavaScript Tabulator. Anda dapat menyalin file dari `node_modules` ke folder `public/assets/vendor/tabulator/` dan mengimpornya.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-html">
&lt;!-- Tabulator CSS (dari public/css/_tabulator.css yang sudah dikustomisasi) --&gt;
&lt;link href="public/css/_tabulator.css" rel="stylesheet"&gt;

&lt;!-- Tabulator JS (dari public/assets/vendor/tabulator/tabulator_esm.js) --&gt;
&lt;script type="module" src="public/assets/vendor/tabulator/tabulator_esm.js"&gt;&lt;/script&gt;
                    </code></pre>
                    <p class="mt-2 text-sm text-gray-500">
                        *Catatan: Pastikan `public/css/_tabulator.css` sudah Anda kustomisasi dan `tabulator_esm.js` adalah jalur yang benar untuk versi ES Module.*
                    </p>
                </li>
                <li>
                    <strong>Siapkan Wadah HTML:</strong>
                    <p class="mt-1">Buat elemen `div` di HTML Anda dengan ID unik. Ini akan menjadi tempat tabel dirender.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-html">
&lt;div id="my-data-table"&gt;&lt;/div&gt;
                    </code></pre>
                </li>
                 <li>
                    <strong>Inisialisasi Tabel dengan JavaScript:</strong>
                    <p class="mt-1">Gunakan JavaScript untuk menginisialisasi Tabulator pada elemen wadah Anda. Anda bisa menempatkan kode ini di file JS halaman Anda (misalnya `public/js/page/tabulator.js`).</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-javascript">
document.addEventListener('DOMContentLoaded', function() {
    // Contoh data tabel
    var tabledata = [
        {id:1, nama:"Budi Santoso", umur:30, kota:"Jakarta", status:"Aktif"},
        {id:2, nama:"Siti Aminah", umur:24, kota:"Bandung", status:"Nonaktif"},
        {id:3, nama:"Joko Susilo", umur:35, kota:"Surabaya", status:"Aktif"},
        {id:4, nama:"Dewi Lestari", umur:28, kota:"Yogyakarta", status:"Aktif"},
        {id:5, nama:"Rina Wijaya", umur:42, kota:"Medan", status:"Nonaktif"},
    ];

    // Inisialisasi Tabulator
    var table = new Tabulator("#my-data-table", {
        height:"311px", // Tinggi tabel
        data:tabledata, // Muat data
        layout:"fitColumns", // Sesuaikan kolom agar pas dengan lebar tabel
        columns:[ // Definisikan kolom
            {title:"ID", field:"id", width:60},
            {title:"Nama Lengkap", field:"nama", minWidth:150, editor:"input"},
            {title:"Umur", field:"umur", width:80, hozAlign:"center", sorter:"number"},
            {title:"Kota", field:"kota", minWidth:100, editor:"input"},
            {title:"Status", field:"status", width:120, hozAlign:"center", formatter:"tickCross", sorter:"boolean"},
        ],
    });
});
                    </code></pre>
                </li>
            </ol>
        </section>

        <!-- Bagian: Manfaat Tabulator.info -->
        <section class="mb-10 md:mb-12 pt-10 ">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Manfaat Tabulator</h2>
            <ul class="space-y-4">
                <li class="flex items-start">
                    <i data-lucide="zap" class="w-6 h-6 text-yellow-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Performa Tinggi</h3>
                        <p class="text-gray-600 text-base md:text-lg">Dirancang untuk menangani ribuan baris data dengan lancar, menjadikannya pilihan yang lebih ringan dari alternatif lain.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="settings-2" class="w-6 h-6 text-purple-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Sangat Dapat Disesuaikan</h3>
                        <p class="text-gray-600 text-base md:text-lg">Menawarkan berbagai opsi konfigurasi untuk kolom, baris, interaksi, dan tampilan visual.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="mouse-pointer-click" class="w-6 h-6 text-green-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Fitur Interaktif Kaya</h3>
                        <p class="text-gray-600 text-base md:text-lg">Mendukung penyortiran, pemfilteran, pengelompokan, pengeditan langsung, *pagination*, dan banyak lagi.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="file-text" class="w-6 h-6 text-blue-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Dokumentasi Lengkap</h3>
                        <p class="text-gray-600 text-base md:text-lg">Memiliki dokumentasi yang sangat detail dan contoh kode yang membantu proses pengembangan.</p>
                    </div>
                </li>
            </ul>
        </section>

        <!-- Bagian: Contoh Penerapan Tabulator.info -->
        <section class="mt-16 pt-10 ">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Contoh Penerapan</h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-8 max-w-2xl">
                Berikut adalah contoh tabel sederhana yang diinisialisasi menggunakan Tabulator. Anda dapat mengklik header kolom untuk menyortir atau mengklik sel nama/kota untuk mengeditnya.
            </p>

            <div id="my-data-table" class="shadow-lg rounded-lg overflow-hidden">
                <!-- Tabel akan dirender di sini oleh JavaScript -->
            </div>
        </section>

    </div>
</main>