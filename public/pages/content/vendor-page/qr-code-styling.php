<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-7xl mx-auto">

        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
                <i data-lucide="qr-code" class="w-10 h-10 md:w-12 md:h-12"></i>
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">
                    <a href="https://qr-code-styling.com/" target="_blank" rel="noopener noreferrer" class="hover:text-blue-600 transition-colors duration-300">QR Code Styling</a>
                </h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">Library JavaScript untuk QR Code yang Dapat Dikustomisasi Penuh.</p>
            </div>
        </div>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Apa itu QR Code Styling?</h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg">
                QR Code Styling adalah library JavaScript yang memungkinkan Anda tidak hanya menghasilkan QR Code fungsional, tetapi juga mendesainnya dengan gaya kustom yang unik. Anda dapat menambahkan logo di tengah, mengubah bentuk titik dan sudut, serta menggunakan warna gradien, menjadikannya sempurna untuk branding atau tampilan yang menarik.
            </p>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mt-4">
                Library ini ideal untuk aplikasi yang memerlukan QR Code dengan sentuhan visual yang berbeda.
            </p>
            
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mt-4">
                Kunjungi situs resmi QR Code Styling untuk melihat semua fitur, demo, dan dokumentasi lengkapnya: 
                <a href="https://qr-code-styling.com/" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline font-semibold">QR Code Styling</a>.
            </p>
        </section>

        <section class="mb-10 md:mb-12 pt-10 ">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Panduan Pemasangan</h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-4">
                Ikuti langkah-langkah berikut untuk mengintegrasikan QR Code Styling ke dalam proyek Anda:
            </p>
            <ol class="list-decimal list-inside space-y-6 text-gray-600 text-base md:text-lg">
                <li>
                    <strong>Instalasi via npm:</strong>
                    <p class="mt-1">Buka terminal di direktori root proyek Anda dan jalankan perintah:</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-bash">npm install qr-code-styling</code></pre>
                    <p class="mt-1">Atau dengan Yarn:</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-bash">yarn add qr-code-styling</code></pre>
                </li>
                <li>
                    <strong>Inklusi via CDN:</strong>
                    <p class="mt-1">Tambahkan tag script berikut ke dalam HTML Anda, idealnya sebelum tag penutup `&lt;/body&gt;`:</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-html">&lt;script src=&quot;https://cdn.jsdelivr.net/npm/qr-code-styling@latest/lib/qr-code-styling.min.js&quot;&gt;&lt;/script&gt;</code></pre>
                </li>
                <li>
                    <strong>Penggunaan File Lokal (Sudah Tersedia):</strong>
                    <p class="mt-1">Karena file library sudah ada di `public/assets/vendor/qrcode/`, Anda bisa langsung menyertakannya:</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-html">&lt;script src=&quot;/assets/vendor/qrcode/qr-code-styling.js&quot;&gt;&lt;/script&gt;</code></pre>
                    <p class="mt-2 text-sm text-gray-500">
                        *Disarankan untuk menyertakan script ini sebelum tag penutup `&lt;/body&gt;` atau menggunakan atribut `defer`.*
                    </p>
                </li>
                <li>
                    <strong>Buat Struktur HTML untuk QR Code:</strong>
                    <p class="mt-1">Siapkan elemen HTML di mana Anda ingin QR Code ditampilkan. Contohnya, sebuah `div`:</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-html">
&lt;div id=&quot;qr-code-container&quot;&gt;
    &lt;!-- QR Code akan dirender di sini --&gt;
&lt;/div&gt;
                    </code></pre>
                </li>
                <li>
                    <strong>Inisialisasi dengan JavaScript:</strong>
                    <p class="mt-1">Tambahkan skrip berikut setelah elemen HTML tempat QR Code akan dirender. Jika menggunakan file lokal/CDN, Anda akan mengakses `QRCodeStyling` secara global.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-javascript">
document.addEventListener('DOMContentLoaded', () => {
    // Jika menggunakan npm, impor seperti ini:
    // import QRCodeStyling from &quot;qr-code-styling&quot;;

    const qrCode = new QRCodeStyling({
        width: 300,
        height: 300,
        data: "https://uiux.eazzy-project.com/", // Data yang akan di-encode
        image: "/assets/images/logo-example.png", // Opsional: Tambahkan logo
        dotsOptions: {
            color: "#4268FF",
            type: "rounded"
        },
        backgroundOptions: {
            color: "#ffffff",
        },
        imageOptions: {
            crossOrigin: "anonymous",
            margin: 10
        },
        cornersSquareOptions: {
            color: "#000000",
            type: "extra-rounded"
        },
        cornersDotOptions: {
            color: "#000000",
            type: "square"
        }
    });

    const qrCodeContainer = document.getElementById('qr-code-container');
    if (qrCodeContainer) {
        qrCode.append(qrCodeContainer);
    }
});
                    </code></pre>
                </li>
            </ol>
        </section>

        <section class="mt-16 pt-10 ">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Contoh Penerapan</h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-8 max-w-2xl">
                Berikut adalah **contoh kode** untuk membuat QR Code yang dapat dikustomisasi. Ketika Anda mengimplementasikan kode ini di halaman web Anda, QR Code akan muncul secara visual di dalam area yang Anda tentukan.
            </p>

            <div class="bg-gray-100 p-6 rounded-lg shadow-inner mb-6 flex justify-center items-center">
                <div id="qr-code-container-live" class="bg-white rounded shadow-md border border-gray-200" style="width: 300px; height: 300px;">
                    </div>
            </div>
            
            <p class="mt-8 text-gray-600 leading-relaxed text-base md:text-lg">
                Ketika kode di atas diimplementasikan di halaman Anda dan dimuat di browser, Anda akan melihat QR Code yang dihasilkan secara visual di dalam elemen `#qr-code-container-live`.
            </p>
        </section>

        <section class="mb-10 md:mb-12 pt-10 ">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Manfaat QR Code Styling</h2>
            <ul class="space-y-4">
                <li class="flex items-start">
                    <i data-lucide="palette" class="w-6 h-6 text-green-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Kustomisasi Visual Penuh</h3>
                        <p class="text-gray-600 text-base md:text-lg">Desain QR Code Anda dengan logo, warna, dan bentuk unik untuk branding yang kuat.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="brush" class="w-6 h-6 text-purple-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Berbagai Opsi Desain</h3>
                        <p class="text-gray-600 text-base md:text-lg">Pilih dari berbagai jenis titik, sudut, dan warna untuk menciptakan tampilan yang menarik.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="check-circle" class="w-6 h-6 text-red-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Mudah Diimplementasikan</h3>
                        <p class="text-gray-600 text-base md:text-lg">API yang intuitif membuat proses pembuatan dan kustomisasi QR Code menjadi sederhana.</p>
                    </div>
                </li>
            </ul>
        </section>

    </div>
</main>
<script src="/assets/vendor/qrcode/qr-code-styling.js"></script>