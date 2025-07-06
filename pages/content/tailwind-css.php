<main class="container mx-auto p-6 md:p-10 flex-grow">
    <div class="bg-white p-8 rounded-lg shadow-lg">

        <!-- Judul Halaman -->
        <div class="flex items-center space-x-4 mb-8">
            <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
                <i data-lucide="wind" class="w-8 h-8"></i>
            </div>
            <div>
                <h1 class="text-4xl font-bold text-gray-800">
                    <a href="https://tailwindcss.com/" target="_blank" rel="noopener noreferrer" class="hover:text-blue-600 transition-colors duration-300">Tailwind CSS</a>
                </h1>
                <p class="text-lg text-gray-500">Framework CSS Utility-First untuk Pengembangan Cepat.</p>
            </div>
        </div>

        <!-- Seksi: Apa itu Tailwind CSS? -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold text-gray-700 border-b-2 border-blue-200 pb-2 mb-4">Apa itu Tailwind CSS?</h2>
            <p class="text-gray-600 leading-relaxed">
                Tailwind CSS adalah sebuah framework CSS yang sangat berbeda dari framework lain seperti Bootstrap atau Foundation. Alih-alih menyediakan komponen UI yang sudah jadi (seperti tombol atau kartu), Tailwind menyediakan kelas-kelas utilitas tingkat rendah yang memungkinkan Anda membangun desain kustom langsung di dalam HTML Anda.
            </p>
            <p class="text-gray-600 leading-relaxed mt-4">
                Pendekatan "utility-first" ini mempercepat proses pengembangan tanpa membatasi kreativitas Anda pada desain yang sudah ditentukan.
            </p>
        </section>

        <!-- Seksi: Instalasi -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold text-gray-700 border-b-2 border-blue-200 pb-2 mb-4">Instalasi</h2>
            <p class="text-gray-600 leading-relaxed mb-4">
                Proyek ini menggunakan Tailwind CSS CLI untuk meng-compile kelas utilitas menjadi file CSS statis. Berikut adalah langkah-langkah dasar untuk mengaturnya dalam sebuah proyek baru:
            </p>
            
            <ol class="list-decimal list-inside space-y-4 text-gray-600">
                <li>
                    <strong>Instalasi via npm:</strong>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-bash">npm install -D tailwindcss</code></pre>
                </li>
                <li>
                    <strong>Buat file konfigurasi:</strong>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-bash">npx tailwindcss init</code></pre>
                    <p class="mt-2 text-sm">Ini akan membuat file `tailwind.config.js` di root proyek Anda.</p>
                </li>
                <li>
                    <strong>Konfigurasi path konten:</strong>
                    <p class="mt-2">Buka `tailwind.config.js` dan pastikan semua file yang menggunakan kelas Tailwind terdaftar di properti `content`.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-javascript">module.exports = {
  content: [
    "./**/*.{php,html,js}", // Sesuaikan dengan struktur proyek Anda
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}</code></pre>
                </li>
                <li>
                    <strong>Buat file CSS input:</strong>
                    <p class="mt-2">Buat file seperti `css/input.css` dan tambahkan direktif Tailwind:</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-css">@tailwind base;
@tailwind components;
@tailwind utilities;</code></pre>
                </li>
                 <li>
                    <strong>Jalankan proses build:</strong>
                    <p class="mt-2">Gunakan CLI untuk memantau perubahan dan membuat `output.css`. Skrip ini sudah ada di `package.json` proyek ini.</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-bash">npm run build</code></pre>
                </li>
            </ol>
        </section>

        <!-- Seksi: Manfaat Tailwind CSS -->
        <section>
            <h2 class="text-2xl font-semibold text-gray-700 border-b-2 border-blue-200 pb-2 mb-4">Manfaat Tailwind CSS</h2>
            <ul class="space-y-4">
                <li class="flex items-start">
                    <i data-lucide="zap" class="w-6 h-6 text-green-500 mr-3 mt-1 flex-shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Pengembangan Cepat</h3>
                        <p class="text-gray-600">Membangun antarmuka yang kompleks dengan cepat tanpa meninggalkan HTML.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="settings-2" class="w-6 h-6 text-purple-500 mr-3 mt-1 flex-shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Sangat Kustomisasi</h3>
                        <p class="text-gray-600">Mudah untuk mengkonfigurasi dan memperluas palet warna, ukuran, spasi, dan lainnya melalui file `tailwind.config.js`.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="file-box" class="w-6 h-6 text-red-500 mr-3 mt-1 flex-shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Ukuran File Produksi Kecil</h3>
                        <p class="text-gray-600">Dengan PurgeCSS (sekarang terintegrasi), Tailwind secara otomatis menghapus semua CSS yang tidak digunakan saat proses build, menghasilkan file yang sangat kecil.</p>
                    </div>
                </li>
            </ul>
        </section>
    </div>
</main>