<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-7xl mx-auto">

        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
                <i data-lucide="palette" class="w-10 h-10 md:w-12 md:h-12"></i>
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">
                    <a href="https://simonwep.github.io/pickr/" target="_blank" rel="noopener noreferrer" class="hover:text-blue-600 transition-colors duration-300">Pickr</a>
                </h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">
                    Library JavaScript Ringan untuk Pemilih Warna Interaktif.
                </p>
            </div>
        </div>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">
                Apa itu Pickr?
            </h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg">
                Pickr adalah library JavaScript pemilih warna yang modern, minimalis, dan sangat fleksibel. Dibuat tanpa dependensi (Vanilla JS), Pickr ringan, responsif, dan mendukung berbagai format warna seperti HEX, RGB, HSL, HSVA, dan CMYK. Ini adalah solusi ideal untuk aplikasi yang membutuhkan fitur pemilihan warna yang canggih namun dengan footprint yang kecil.
            </p>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mt-4">
                Pickr menawarkan pengalaman pengguna yang intuitif dengan antarmuka yang bersih, dan menyediakan banyak opsi kustomisasi untuk menyesuaikan tampilannya agar sesuai dengan desain proyek Anda.
            </p>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mt-4">
                Pelajari lebih lanjut dan jelajahi semua fiturnya di: <a href="https://simonwep.github.io/pickr/" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline font-semibold">simonwep.github.io/pickr/</a>.
            </p>
        </section>

        <section class="mb-10 md:mb-12 pt-10 ">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">
                Panduan Pemasangan
            </h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-4">
                Ikuti langkah-langkah berikut untuk mengintegrasikan Pickr ke dalam proyek Anda:
            </p>
            <ol class="list-decimal list-inside space-y-6 text-gray-600 text-base md:text-lg">
                <li>
                    <strong>Instalasi via npm:</strong>
                    <p class="mt-1">Buka terminal di direktori root proyek Anda dan jalankan perintah:</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-bash">
npm install @simonwep/pickr
                    </code></pre>
                </li>
                <li>
                    <strong>Sertakan CSS Pickr:</strong>
                    <p class="mt-1">Salin file CSS tema Pickr yang Anda inginkan (misalnya `classic.min.css`) dari `node_modules/@simonwep/pickr/dist/themes/` ke `public/assets/vendor/pickr/css/` Anda. Kemudian sertakan di bagian `<head>` HTML Anda:</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-html">
&lt;link rel=&quot;stylesheet&quot; href=&quot;/assets/vendor/pickr/css/classic.min.css&quot;&gt;
                    </code></pre>
                </li>
                <li>
                    <strong>Sertakan JavaScript Pickr:</strong>
                    <p class="mt-1">Salin `pickr.min.js` dari `node_modules/@simonwep/pickr/dist/` ke `public/assets/vendor/pickr/js/`. Kemudian sertakan di bagian bawah `&lt;/body&gt;` HTML Anda (sebelum skrip khusus halaman Anda):</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-html">
&lt;script src=&quot;/assets/vendor/pickr/pickr.min.js&quot;&gt;&lt;/script&gt;
                    </code></pre>
                </li>
                <li>
                    <strong>Buat Struktur HTML untuk Color Picker:</strong>
                    <p class="mt-1">Siapkan elemen HTML tempat Pickr akan diikat. Misalnya, sebuah `div` atau `input`:</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-html">
&lt;div class=&quot;color-picker-instance&quot;&gt;&lt;/div&gt;
                    </code></pre>
                </li>
                <li>
                    <strong>Inisialisasi dengan JavaScript Halaman:</strong>
                    <p class="mt-1">Tambahkan logika inisialisasi Pickr di file JavaScript khusus halaman Anda (`public/js/basic/pickr.js`).</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-javascript">
// Contoh Kode JavaScript (akan ada di public/js/basic/pickr.js)
document.addEventListener('DOMContentLoaded', function () {
    // Logika inisialisasi Pickr Anda di sini
});
                    </code></pre>
                </li>
            </ol>
        </section>

        <section class="mb-10 md:mb-12 pt-10 ">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Manfaat Pickr</h2>
            <ul class="space-y-4">
                <li class="flex items-start">
                    <i data-lucide="feather" class="w-6 h-6 text-green-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Sangat Ringan & Tanpa Dependensi</h3>
                        <p class="text-gray-600 text-base md:text-lg">Dibangun dengan Vanilla JS, memastikan ukuran file kecil dan performa cepat tanpa beban tambahan.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="sliders" class="w-6 h-6 text-blue-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Fleksibel & Dapat Dikustomisasi</h3>
                        <p class="text-gray-600 text-base md:text-lg">Menyediakan banyak opsi konfigurasi, tema, dan komponen untuk menyesuaikan tampilan dan fungsionalitas.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="brush" class="w-6 h-6 text-purple-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Dukungan Berbagai Format Warna</h3>
                        <p class="text-gray-600 text-base md:text-lg">Mendukung format warna umum seperti HEX, RGB, HSL, HSVA, dan CMYK.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="smartphone" class="w-6 h-6 text-red-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Responsif & Mobile-Friendly</h3>
                        <p class="text-gray-600 text-base md:text-lg">Antarmuka yang responsif memastikan pengalaman yang baik di berbagai ukuran layar.</p>
                    </div>
                </li>
            </ul>
        </section>

        <section class="mt-16 pt-10 ">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">
                Contoh Penerapan
            </h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-8 max-w-2xl">
                Berikut adalah contoh Pickr Color Picker dengan tema klasik dan beberapa komponen interaksi.
            </p>

            <div class="bg-gray-100 p-8 rounded-lg border border-gray-200 flex justify-center items-center">
                <div class="color-picker-instance"></div>
            </div>

            <p class="mt-8 text-gray-600 leading-relaxed text-base md:text-lg">
                Untuk membuat contoh di atas, gunakan inisialisasi JavaScript yang ada di file `public/js/basic/pickr.js`.
            </p>
            <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-javascript">
// Kode di dalam public/js/basic/pickr.js akan terlihat seperti ini:
document.addEventListener('DOMContentLoaded', function() {
    const el = document.querySelector('.color-picker-instance');

    if (el) {
        const pickr = Pickr.create({
            el: el,
            theme: 'classic', // atau 'monolith', 'nano'
            default: '#42445A', // Warna default
            components: {
                preview: true, opacity: true, hue: true,
                interaction: {
                    hex: true, rgba: true, hsla: true,
                    input: true, clear: true, save: true
                }
            }
        });

        pickr.on('change', (color, source, instance) => {
            console.log('Warna baru:', color.toHEXA().toString());
            // Lakukan sesuatu dengan warna yang dipilih di sini
        });
    }
});
            </code></pre>
        </section>

    </div>
</main>
<script src="/assets/vendor/pickr/pickr.min.js"></script>