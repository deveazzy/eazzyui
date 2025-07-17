<main class="container mx-auto p-4 md:p-8 lg:p-10 grow">
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-7xl mx-auto">

        <!-- Judul Halaman -->
        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
                <i data-lucide="area-chart" class="w-10 h-10 md:w-12 md:h-12"></i>
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">
                    <a href="https://apexcharts.com/" target="_blank" rel="noopener noreferrer" class="hover:text-blue-600 transition-colors duration-300">ApexCharts.js</a>
                </h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">Pustaka Grafik Modern & Interaktif untuk Visualisasi Data.</p>
            </div>
        </div>

        <!-- Seksi: Apa itu ApexCharts? -->
        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Apa itu ApexCharts?</h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg">
                ApexCharts adalah pustaka grafik (charting library) modern yang bersifat open-source untuk membuat visualisasi data yang indah dan interaktif. Keunggulan utamanya terletak pada tampilannya yang sangat profesional, animasi yang halus, dan fitur interaktif seperti zoom, pan, dan tooltip yang informatif langsung dari kotaknya.
            </p>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mt-4">
                Pustaka ini sangat cocok untuk dasbor analitik dan laporan data karena kemampuannya untuk menyajikan data kompleks dengan cara yang mudah dipahami dan menarik secara visual.
            </p>
        </section>

        <!-- Seksi: Instalasi & Konfigurasi -->
        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Panduan Pemasangan</h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-4">
                Berikut adalah langkah-langkah untuk memasang dan mengkonfigurasi ApexCharts di dalam proyek ini secara lokal.
            </p>
            
            <ol class="list-decimal list-inside space-y-6 text-gray-600 text-base md:text-lg">
                <li>
                    <strong>Instalasi via npm:</strong>
                    <p class="mt-1">Buka terminal di direktori root proyek dan jalankan perintah berikut. Ini akan mengunduh library ke dalam folder `node_modules`.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-bash">npm install apexcharts</code></pre>
                </li>
                <li>
                    <strong>Salin File ke Folder `public`:</strong>
                    <p class="mt-1">Agar bisa diakses oleh browser, salin file `apexcharts.js` dari `node_modules/apexcharts/dist/` ke folder `public/assets/vendor/apexcharts/`.</p>
                </li>
                <li>
                    <strong>Muat Script di Halaman:</strong>
                    <p class="mt-1">Tambahkan tag script di file PHP Anda (misalnya di `index.php` atau di bagian bawah file ini) untuk memuat library.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-html">&lt;script src="assets/vendor/apexcharts/apexcharts.js"&gt;&lt;/script&gt;</code></pre>
                </li>
                <li>
                    <strong>Siapkan Wadah (Container) HTML:</strong>
                    <p class="mt-1">Buat sebuah elemen `&lt;div&gt;` di HTML Anda dengan sebuah ID unik. Elemen ini akan menjadi tempat di mana grafik akan digambar.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-html">&lt;div id="contohChart"&gt;&lt;/div&gt;</code></pre>
                </li>
                 <li>
                    <strong>Inisialisasi dengan JavaScript:</strong>
                    <p class="mt-1">Buat objek konfigurasi untuk grafik Anda dan render menggunakan `new ApexCharts().render()`.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-javascript">
// Tentukan elemen container
const chartContainer = document.querySelector("#contohChart");

// Definisikan data dan opsi konfigurasi
const options = {
  series: [{
    name: 'Penjualan',
    data: [30, 40, 45, 50, 49, 60, 70, 91]
  }],
  chart: {
    type: 'line',
    height: 350
  },
  xaxis: {
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu']
  }
};

// Buat instance baru dan render grafik
const chart = new ApexCharts(chartContainer, options);
chart.render();
                    </code></pre>
                </li>
            </ol>
        </section>

        <!-- Seksi: Manfaat ApexCharts -->
        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Manfaat ApexCharts</h2>
            <ul class="space-y-4">
                <li class="flex items-start">
                    <i data-lucide="sparkles" class="w-6 h-6 text-yellow-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Tampilan Modern & Estetis</h3>
                        <p class="text-gray-600 text-base md:text-lg">Menghasilkan grafik yang terlihat profesional dan indah secara default, dengan animasi yang halus saat data dimuat.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="mouse-pointer-click" class="w-6 h-6 text-green-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Sangat Interaktif</h3>
                        <p class="text-gray-600 text-base md:text-lg">Mendukung fitur zoom, pan, dan tooltips yang kaya tanpa konfigurasi tambahan, meningkatkan pengalaman pengguna.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="settings-2" class="w-6 h-6 text-purple-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Kaya Opsi Kustomisasi</h3>
                        <p class="text-gray-600 text-base md:text-lg">Menyediakan API yang luas untuk mengubah hampir setiap aspek visual dari grafik, mulai dari warna hingga format label.</p>
                    </div>
                </li>
                 <li class="flex items-start">
                    <i data-lucide="file-check-2" class="w-6 h-6 text-red-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Dokumentasi Lengkap</h3>
                        <p class="text-gray-600 text-base md:text-lg">Memiliki dokumentasi yang sangat baik dengan puluhan contoh untuk setiap jenis grafik, memudahkan proses pengembangan.</p>
                    </div>
                </li>
            </ul>
        </section>

        <!-- Seksi: Contoh Penerapan -->
        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Contoh Penerapan</h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-6">
                Berikut adalah contoh grafik garis (line chart) yang menampilkan data pendapatan bulanan. Arahkan kursor ke titik data untuk melihat detailnya.
            </p>
            
            <!-- Ini adalah wadah untuk grafik yang akan dibuat oleh JavaScript -->
            <div id="chart-pendapatan-bulanan" class="bg-gray-50 p-4 rounded-lg shadow-sm mb-8"></div>
        </section>

        <!-- Seksi: Contoh Anda -->
        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Contoh Anda</h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-4">
                Anda bisa menyisipkan contoh grafik Anda di bawah ini. Buat sebuah `div` dengan ID unik dan inisialisasikan di file `public/js/apexcharts.js`.
            </p>
            <!-- Sisipkan contoh Anda di sini -->
            <div id="chart-contoh-anda" class="bg-gray-50 p-4 rounded-lg border-2 border-dashed border-gray-300 h-64 flex items-center justify-center mb-8">
                <p class="text-gray-400">Wadah untuk contoh Anda (ID: #chart-contoh-anda)</p>
            </div>
        </section>

        <!-- NEW CHARTS START HERE -->
        <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Berbagai Jenis Grafik Lainnya</h2>

        <section class="mb-10 md:mb-12">
            <h3 class="text-xl md:text-2xl font-semibold text-gray-700 mb-4">Line Chart (Suhu Rata-rata)</h3>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-6">
                Menampilkan tren suhu rata-rata bulanan. Cocok untuk data deret waktu.
            </p>
            <div class="chart-container">
                <div id="lineChartNew" class="chart-wrapper"></div>
            </div>
        </section>

        <section class="mb-10 md:mb-12">
            <h3 class="text-xl md:text-2xl font-semibold text-gray-700 mb-4">Column Chart (Penjualan Produk)</h3>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-6">
                Membandingkan volume penjualan produk antar bulan. Ideal untuk perbandingan kategori.
            </p>
            <div class="chart-container">
                <div id="columnChart" class="chart-wrapper"></div>
            </div>
        </section>

        <section class="mb-10 md:mb-12">
            <h3 class="text-xl md:text-2xl font-semibold text-gray-700 mb-4">Bar Chart (Survei Kepuasan)</h3>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-6">
                Menyajikan hasil survei kepuasan pelanggan secara horizontal. Bagus untuk peringkat atau perbandingan panjang.
            </p>
            <div class="chart-container">
                <div id="barChartNew" class="chart-wrapper"></div>
            </div>
        </section>

        <section class="mb-10 md:mb-12">
            <h3 class="text-xl md:text-2xl font-semibold text-gray-700 mb-4">Mixed Chart (Penjualan & Laba)</h3>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-6">
                Menggabungkan berbagai tipe grafik (misalnya kolom dan garis) untuk menunjukkan hubungan antara penjualan dan laba.
            </p>
            <div class="chart-container">
                <div id="mixedChart" class="chart-wrapper"></div>
            </div>
        </section>

        <section class="mb-10 md:mb-12">
            <h3 class="text-xl md:text-2xl font-semibold text-gray-700 mb-4">Range Area Chart (Rentang Harga Saham)</h3>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-6">
                Menampilkan rentang (minimum dan maksimum) harga saham harian. Ideal untuk visualisasi variabilitas.
            </p>
            <div class="chart-container">
                <div id="rangeAreaChart" class="chart-wrapper"></div>
            </div>
        </section>

        <section class="mb-10 md:mb-12">
            <h3 class="text-xl md:text-2xl font-semibold text-gray-700 mb-4">Box Plot Chart (Distribusi Nilai)</h3>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-6">
                Menunjukkan distribusi data melalui kuartil, median, dan outlier. Berguna untuk analisis statistik.
            </p>
            <div class="chart-container">
                <div id="boxPlotChartNew" class="chart-wrapper"></div>
            </div>
        </section>

        <section class="mb-10 md:mb-12">
            <h3 class="text-xl md:text-2xl font-semibold text-gray-700 mb-4">Bubble Chart (Kinerja Karyawan)</h3>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-6">
                Memvisualisasikan tiga dimensi data (X, Y, dan ukuran gelembung) untuk analisis kinerja karyawan.
            </p>
            <div class="chart-container">
                <div id="bubbleChartNew" class="chart-wrapper"></div>
            </div>
        </section>

        <section class="mb-10 md:mb-12">
            <h3 class="text-xl md:text-2xl font-semibold text-gray-700 mb-4">Scatter Chart (Korelasi Data)</h3>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-6">
                Mengidentifikasi hubungan atau korelasi antara dua set data numerik.
            </p>
            <div class="chart-container">
                <div id="scatterChartNew" class="chart-wrapper"></div>
            </div>
        </section>

        <section class="mb-10 md:mb-12">
            <h3 class="text-xl md:text-2xl font-semibold text-gray-700 mb-4">Heatmap Chart (Aktivitas Pengguna)</h3>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-6">
                Menampilkan intensitas data menggunakan gradasi warna, ideal untuk pola aktivitas pengguna berdasarkan waktu.
            </p>
            <div class="chart-container">
                <div id="heatmapChartNew" class="chart-wrapper"></div>
            </div>
        </section>

        <section class="mb-10 md:mb-12">
            <h3 class="text-xl md:text-2xl font-semibold text-gray-700 mb-4">Treemap Chart (Struktur File)</h3>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-6">
                Merepresentasikan data hierarkis dalam bentuk persegi panjang yang ukurannya proporsional dengan nilainya.
            </p>
            <div class="chart-container">
                <div id="treemapChartNew" class="chart-wrapper"></div>
            </div>
        </section>

        <section class="mb-10 md:mb-12">
            <h3 class="text-xl md:text-2xl font-semibold text-gray-700 mb-4">Slope Chart (Perubahan Peringkat)</h3>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-6">
                Memvisualisasikan perubahan peringkat atau nilai antara dua titik waktu untuk beberapa kategori.
            </p>
            <div class="chart-container">
                <div id="slopeChart" class="chart-wrapper"></div>
            </div>
        </section>

        <section class="mb-10 md:mb-12">
            <h3 class="text-xl md:text-2xl font-semibold text-gray-700 mb-4">Radial Bar Chart (Kemajuan Proyek)</h3>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-6">
                Menunjukkan kemajuan dalam bentuk persentase melingkar, ideal untuk indikator kemajuan proyek atau tugas.
            </p>
            <div class="chart-container">
                <div id="radialBarChartNew" class="chart-wrapper"></div>
            </div>
        </section>

        <section class="mb-10 md:mb-12">
            <h3 class="text-xl md:text-2xl font-semibold text-gray-700 mb-4">Radar Chart (Statistik Pemain)</h3>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-6">
                Membandingkan beberapa variabel kuantitatif untuk satu atau lebih grup, seperti statistik pemain.
            </p>
            <div class="chart-container">
                <div id="radarChartNew" class="chart-wrapper"></div>
            </div>
        </section>

        <section class="mb-10 md:mb-12">
            <h3 class="text-xl md:text-2xl font-semibold text-gray-700 mb-4">Polar Area Chart (Preferensi Kategori)</h3>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-6">
                Menampilkan data kategori dalam bentuk irisan lingkaran, di mana ukuran irisan menunjukkan proporsi.
            </p>
            <div class="chart-container">
                <div id="polarAreaChartNew" class="chart-wrapper"></div>
            </div>
        </section>
        <!-- NEW CHARTS END HERE -->

    </div>
</main>