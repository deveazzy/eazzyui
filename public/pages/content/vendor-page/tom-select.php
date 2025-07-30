<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-7xl mx-auto">

        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
                <i data-lucide="tags" class="w-10 h-10 md:w-12 md:h-12"></i>
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">
                    <a href="https://tom-select.js.org/" target="_blank" rel="noopener noreferrer" class="hover:text-blue-600 transition-colors duration-300">Tom Select</a>
                </h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">
                    Panduan untuk menerapkan fungsionalitas Multi-Select dan Tagging.
                </p>
            </div>
        </div>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">
                Apa itu Tom Select?
            </h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg">
                Tom Select adalah library JavaScript ringan dan modular untuk membuat input select box yang canggih dengan fitur pencarian, multi-select, dan tagging. Ini adalah pengganti modern untuk elemen <code>&lt;select&gt;</code> HTML standar, sangat cocok untuk form yang membutuhkan pilihan dinamis.
            </p>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mt-4">
                Pelajari lebih lanjut di: <a href="https://tom-select.js.org/" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline font-semibold">Situs Resmi Tom Select</a>.
            </p>
        </section>

        <section class="mb-10 md:mb-12 pt-10 ">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">
                Panduan Pemasangan
            </h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-4">
                Untuk menggunakan Tom Select, Anda dapat menginstalnya melalui npm dan memuatnya sebagai modul:
            </p>
            <ol class="list-decimal list-inside space-y-6 text-gray-600 text-base md:text-lg">
                <li>
                    <strong>Langkah 1: Instalasi dengan npm</strong>
                    <p class="mt-1">Buka terminal di direktori proyek Anda dan jalankan:</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-bash">
npm install tom-select
                    </code></pre>
                </li>
                <li>
                    <strong>Langkah 2: Muat CSS Tom Select</strong>
                    <p class="mt-1">Pastikan CSS Tom Select dimuat di halaman Anda. Jika Anda menggunakan bundler, impor di JS. Jika tidak, tambahkan di HTML:</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-html">
&lt;link href="/public/css/tom-select-custom.css" rel="stylesheet"&gt;
                    </code></pre>
                    <p class="mt-1 text-sm text-gray-500">
                        (Asumsi Anda sudah menyesuaikan <code>tom-select.css</code> ke <code>tom-select-custom.css</code> dan memuatnya secara global.)
                    </p>
                </li>
                <li>
                    <strong>Langkah 3: Muat Skrip Inisialisasi</strong>
                    <p class="mt-1">Panggil skrip inisialisasi kustom Anda di bagian bawah halaman, sebagai modul:</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-html">
&lt;!-- Pastikan tom-select.js inti juga dimuat sebelum ini --&gt;
&lt;script src="/public/assets/vendor/tom/dist/js/tom-select.complete.min.js"&gt;&lt;/script&gt;
&lt;script src="/public/js/modules/tom-select-init.js"&gt;&lt;/script&gt;
                    </code></pre>
                </li>
            </ol>
        </section>

        <section class="mb-10 md:mb-12 pt-10 ">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Manfaat Tom Select</h2>
            <ul class="space-y-4">
                <li class="flex items-start">
                    <i data-lucide="check-circle" class="w-6 h-6 text-green-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Ringan dan Cepat</h3>
                        <p class="text-gray-600 text-base md:text-lg">Didesain untuk performa tinggi, menjaga aplikasi Anda tetap responsif.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="settings-2" class="w-6 h-6 text-purple-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Sangat Dapat Disesuaikan</h3>
                        <p class="text-gray-600 text-base md:text-lg">Mudah di-styling agar cocok dengan tema Tailwind CSS Anda, serta mendukung plugin untuk fungsionalitas tambahan.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="puzzle" class="w-6 h-6 text-blue-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Dukungan Fitur Lengkap</h3>
                        <p class="text-gray-600 text-base md:text-lg">Mendukung multi-select, pencarian/filter, pembuatan tag baru, dan pengelompokan opsi.</p>
                    </div>
                </li>
                 <li class="flex items-start">
                    <i data-lucide="shield-check" class="w-6 h-6 text-yellow-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Kompatibilitas Modern</h3>
                        <p class="text-gray-600 text-base md:text-lg">Dirancang untuk browser modern dan alur kerja pengembangan saat ini (ESM).</p>
                    </div>
                </li>
            </ul>
        </section>
        
        <section class="mt-16 pt-10 ">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">
                Contoh Penerapan
            </h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-8 max-w-2xl">
                Berikut adalah contoh penerapan Tom Select. Anda dapat menggunakan elemen <code>&lt;select multiple&gt;</code> atau <code>&lt;input type="text"&gt;</code>.
            </p>

            <div class="bg-gray-100 p-8 rounded-lg border border-gray-200">
                <!-- Product Tags Select -->
                <div class="space-y-2">
                    <select id="product-tags" name="product_tags[]" multiple placeholder="Ketik atau pilih tag produk...">
                        <!-- Contoh opsi, ini bisa dimuat dari database -->
                        <option value="kopi">Kopi</option>
                        <option value="susu">Susu</option>
                        <option value="gula-aren">Gula Aren</option>
                        <option value="minuman-dingin">Minuman Dingin</option>
                        <option value="makanan-ringan">Makanan Ringan</option>
                        <option value="sarapan">Sarapan</option>
                    </select>
                </div>
            </div>

            <p class="mt-8 text-gray-600 leading-relaxed text-base md:text-lg">
                File <code>tom-select-init.js</code> akan secara otomatis mencari elemen dengan ID <code>product-tags</code> dan <code>user-skills</code> dan mengubahnya menjadi input Tom Select.
            </p>
        </section>

    </div>
</main>

<script src="/assets/vendor/tom/js/tom-select.complete.min.js" defer></script>