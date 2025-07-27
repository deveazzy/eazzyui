<style>
    .tox-promotion {
  display: none !important;
}
</style>
<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-7xl mx-auto">

        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
                <i data-lucide="edit-3" class="w-10 h-10 md:w-12 md:h-12"></i>
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">
                    <a href="https://www.tiny.cloud/" target="_blank" rel="noopener noreferrer" class="hover:text-blue-600 transition-colors duration-300">TinyMCE</a>
                </h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">
                    Panduan untuk menambahkan Rich Text Editor WYSIWYG ke dalam proyek.
                </p>
            </div>
        </div>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">
                Apa itu TinyMCE?
            </h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg">
                TinyMCE adalah editor teks kaya (rich text editor) berbasis web yang bersifat WYSIWYG (What You See Is What You Get). Library ini memungkinkan pengguna untuk membuat dan mengedit konten dengan format yang kompleks, mirip seperti menggunakan Microsoft Word, langsung di dalam halaman web.
            </p>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mt-4">
                Pelajari lebih lanjut di: <a href="https://www.tiny.cloud/" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline font-semibold">Situs Resmi TinyMCE</a>.
            </p>
        </section>

        <section class="mb-10 md:mb-12 pt-10 ">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">
                Panduan Pemasangan
            </h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-4">
                Untuk tujuan demonstrasi, kita akan memasang TinyMCE secara manual dengan menyalin file-filenya ke dalam proyek:
            </p>
            <ol class="list-decimal list-inside space-y-6 text-gray-600 text-base md:text-lg">
                <li>
                    <strong>Langkah 1: Buat Folder Tujuan</strong>
                    <p class="mt-1">Buat folder baru di dalam `public/assets/vendor/` bernama `tinymce`.</p>
                </li>
                <li>
                    <strong>Langkah 2: Salin File Inti</strong>
                    <p class="mt-1">Salin file dan folder berikut dari `node_modules/tinymce/` ke folder tujuan:</p>
                    <ul class="list-disc list-inside pl-6 mt-2 text-gray-500">
                        <li>File `tinymce.min.js`</li>
                        <li>Folder `skins`</li>
                        <li>Folder `themes`</li>
                        <li>Folder `plugins`</li>
                        <li>Folder `icons`</li>
                    </ul>
                </li>
                <li>
                    <strong>Langkah 3: Muat Skrip di Halaman</strong>
                    <p class="mt-1">Panggil skrip utama TinyMCE dan file inisialisasi kustom Anda di bagian bawah halaman.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-html">
&lt;!-- Pertama Download TinyMCE --&gt;
npm install tinymce 

&lt;!-- Panggil library utama --&gt;
&lt;script src="/assets/vendor/tinymce/tinymce.min.js"&gt;&lt;/script&gt;

&lt;!-- Panggil file inisialisasi Anda --&gt;
&lt;script src="/js/tinymce.js"&gt;&lt;/script&gt;
                    </code></pre>
                </li>
            </ol>
        </section>

        <section class="mb-10 md:mb-12 pt-10 ">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Manfaat TinyMCE</h2>
            <ul class="space-y-4">
                <li class="flex items-start">
                    <i data-lucide="user-check" class="w-6 h-6 text-green-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Antarmuka Intuitif</h3>
                        <p class="text-gray-600 text-base md:text-lg">Menyediakan pengalaman mengedit yang familiar seperti aplikasi pengolah kata, sehingga mudah digunakan oleh siapa saja.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="settings-2" class="w-6 h-6 text-purple-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Sangat Dapat Disesuaikan</h3>
                        <p class="text-gray-600 text-base md:text-lg">Konfigurasi toolbar, menu, skin, dan fungsionalitas dapat diubah dengan mudah melalui plugin dan opsi inisialisasi.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="puzzle" class="w-6 h-6 text-blue-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Ekosistem Plugin yang Luas</h3>
                        <p class="text-gray-600 text-base md:text-lg">Tersedia banyak plugin (baik gratis maupun premium) untuk memperluas fungsionalitas, seperti manajemen gambar dan tabel.</p>
                    </div>
                </li>
                 <li class="flex items-start">
                    <i data-lucide="shield-check" class="w-6 h-6 text-yellow-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Stabil dan Teruji</h3>
                        <p class="text-gray-600 text-base md:text-lg">Telah dikembangkan selama bertahun-tahun dan digunakan oleh jutaan proyek, menjadikannya pilihan yang andal dan aman.</p>
                    </div>
                </li>
            </ul>
        </section>
        <section class="mt-16 pt-10 ">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">
                Contoh Penerapan
            </h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-8 max-w-2xl">
                Berikut adalah contoh penerapan TinyMCE. Cukup sediakan sebuah elemen `textarea` dengan ID yang sesuai.
            </p>

            <div class="bg-gray-100 p-8 rounded-lg border border-gray-200">
                <textarea id="tinymce-editor" class="w-full"></textarea>
            </div>

            <p class="mt-8 text-gray-600 leading-relaxed text-base md:text-lg">
                File `tinymce.js` akan secara otomatis mencari `textarea` dengan ID `tinymce-editor` dan mengubahnya menjadi editor teks.
            </p>
        </section>

    </div>
</main>

<script src="/assets/vendor/tinymce/tinymce.min.js"></script>