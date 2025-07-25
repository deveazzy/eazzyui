<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-7xl mx-auto">

        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
                <i data-lucide="file-text" class="w-10 h-10 md:w-12 md:h-12"></i>
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">
                    <a href="https://github.com/parallax/jsPDF" target="_blank" rel="noopener noreferrer" class="hover:text-blue-600 transition-colors duration-300">jsPDF</a>
                </h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">Library JavaScript untuk Membuat File PDF di Sisi Klien.</p>
            </div>
        </div>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Apa itu jsPDF?</h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg">
                jsPDF adalah library JavaScript sumber terbuka untuk menghasilkan dokumen PDF di sisi klien menggunakan HTML5. Ini sangat berguna untuk aplikasi web yang perlu membuat laporan, faktur, atau dokumen lainnya langsung dari browser pengguna tanpa perlu interaksi server. jsPDF mendukung penambahan teks, gambar, bentuk, dan banyak lagi.
            </p>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mt-4">
                Dalam proyek ini, jsPDF dapat dimanfaatkan untuk ekspor data menjadi format PDF, contoh implementasi dapat dilihat pada halaman <a href="https://uiux.eazzy-project.com/advanced-table" class="text-blue-600 font-semibold hover:underline" target="_blank" rel="noopener noreferrer">Advanced Table</a>.
            </p>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mt-4">
                Kunjungi situs resmi jsPDF untuk melihat semua fitur, demo, dan dokumentasi lengkapnya: 
                <a href="https://github.com/parallax/jsPDF" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline font-semibold">jsPDF</a>.
            </p>
        </section>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Panduan Pemasangan</h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-4">
                jsPDF dapat diintegrasikan dengan mudah. File `jspdf.umd.min.js` sudah disertakan dalam proyek ini di `/assets/vendor/jspdf/`.
            </p>

            <ol class="list-decimal list-inside space-y-6 text-gray-600 text-base md:text-lg">
                <li>
                    <strong>Inklusi melalui Tag Script:</strong>
                    <p class="mt-1">Anda dapat menyertakan library ini langsung di halaman HTML Anda:</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-html">&lt;script src=&quot;/assets/vendor/jspdf/jspdf.umd.min.js&quot;&gt;&lt;/script&gt;</code></pre>
                </li>
                <li>
                    <strong>Penggunaan Dasar dengan JavaScript:</strong>
                    <p class="mt-1">Setelah library dimuat, Anda bisa mulai membuat dokumen PDF. Contoh:</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-javascript">
document.addEventListener('DOMContentLoaded', function() {
    // Fungsi untuk membuat PDF sederhana
    function createSimplePdf() {
        const { jsPDF } = window.jspdf; // Mendapatkan objek jsPDF dari window

        const doc = new jsPDF();
        doc.text("Halo, ini PDF pertama saya dengan jsPDF!", 10, 10);
        doc.save("dokumen_sederhana.pdf");
    }

    // Contoh: Tambahkan tombol untuk memicu pembuatan PDF
    // <button id="generate-pdf-btn">Buat PDF</button>
    const generateBtn = document.getElementById('generate-pdf-btn');
    if (generateBtn) {
        generateBtn.addEventListener('click', createSimplePdf);
    } else {
        // Jika tidak ada tombol, panggil saja langsung untuk demo
        // createSimplePdf(); // Anda bisa mengaktifkan ini untuk demo langsung
    }
});
</code></pre>
                </li>
            </ol>
        </section>

         <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Manfaat jsPDF</h2>
            <ul class="space-y-4">
                <li class="flex items-start">
                    <i data-lucide="file-plus" class="w-6 h-6 text-green-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Pembuatan PDF Sisi Klien</h3>
                        <p class="text-gray-600 text-base md:text-lg">Memungkinkan pembuatan PDF langsung di browser tanpa beban server.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="edit-3" class="w-6 h-6 text-purple-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Fleksibilitas Desain</h3>
                        <p class="text-gray-600 text-base md:text-lg">Mendukung penambahan teks, gambar, bentuk, tabel, dan kustomisasi lainnya untuk output PDF.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="file-type" class="w-6 h-6 text-red-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Mudah Digunakan</h3>
                        <p class="text-gray-600 text-base md:text-lg">API yang intuitif memungkinkan pengembang untuk dengan cepat mulai membuat dokumen PDF.</p>
                    </div>
                </li>
            </ul>
        </section>

    </div>
</main>