<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-7xl mx-auto">

        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
                <i data-lucide="table-properties" class="w-10 h-10 md:w-12 md:h-12"></i>
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">
                    <a href="https://sheetjs.com/" target="_blank" rel="noopener noreferrer" class="hover:text-blue-600 transition-colors duration-300">SheetJS (XLSX)</a>
                </h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">Library JavaScript untuk Membaca dan Menulis File Spreadsheet.</p>
            </div>
        </div>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Apa itu SheetJS (XLSX)?</h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mt-4">
                Dalam proyek ini, SheetJS digunakan untuk memproses data spreadsheet, contoh implementasi dapat dilihat pada halaman <a href="https://uiux.eazzy-project.com/advanced-table" class="text-blue-600 font-semibold hover:underline" target="_blank" rel="noopener noreferrer">Advanced Table</a>.
            </p>
        </section>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Panduan Pemasangan</h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-4">
                SheetJS dapat diintegrasikan ke dalam proyek Anda dengan mudah. File `xlsx.min.js` sudah disertakan dalam proyek ini di `/assets/vendor/xlxs/`.
            </p>

            <ol class="list-decimal list-inside space-y-6 text-gray-600 text-base md:text-lg">
                <li>
                    <strong>Inklusi melalui Tag Script:</strong>
                    <p class="mt-1">Anda dapat menyertakan library ini langsung di halaman HTML Anda:</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-html">&lt;script src=&quot;/assets/vendor/xlxs/xlsx.min.js&quot; defer&gt;&lt;/script&gt;</code></pre>
                </li>
                <li>
                    <strong>Penggunaan Dasar dengan JavaScript:</strong>
                    <p class="mt-1">Setelah library dimuat, Anda bisa mulai menggunakannya untuk membaca atau menulis data. Contoh membaca file:</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-javascript">
// Asumsikan ada input file dengan ID 'file-input'
document.getElementById('file-input').addEventListener('change', function(e) {
    const file = e.target.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
        const data = new Uint8Array(e.target.result);
        const workbook = XLSX.read(data, { type: 'array' });

        // Contoh: Ambil nama sheet pertama
        const sheetName = workbook.SheetNames[0];
        const worksheet = workbook.Sheets[sheetName];

        // Konversi sheet ke JSON
        const json = XLSX.utils.sheet_to_json(worksheet);
        console.log(json);
    };

    reader.readAsArrayBuffer(file);
});
</code></pre>
                </li>
            </ol>
        </section>

         <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Manfaat SheetJS</h2>
            <ul class="space-y-4">
                <li class="flex items-start">
                    <i data-lucide="upload-cloud" class="w-6 h-6 text-green-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Dukungan Format Luas</h3>
                        <p class="text-gray-600 text-base md:text-lg">Mendukung berbagai format spreadsheet populer termasuk XLSX, XLS, CSV, dan lainnya.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="tool-case" class="w-6 h-6 text-purple-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Fungsionalitas Kaya</h3>
                        <p class="text-gray-600 text-base md:text-lg">Menyediakan utilitas untuk konversi data yang mudah antara spreadsheet, array, dan JSON.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="monitor" class="w-6 h-6 text-red-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Kompatibilitas Lintas Platform</h3>
                        <p class="text-gray-600 text-base md:text-lg">Dapat digunakan di browser web modern dan lingkungan server Node.js.</p>
                    </div>
                </li>
            </ul>
        </section>

    </div>
</main>