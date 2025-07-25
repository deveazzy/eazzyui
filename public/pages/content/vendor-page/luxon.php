<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-7xl mx-auto">

        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
                <i data-lucide="clock" class="w-10 h-10 md:w-12 md:h-12"></i>
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">
                    <a href="https://moment.github.io/luxon/" target="_blank" rel="noopener noreferrer" class="hover:text-blue-600 transition-colors duration-300">Luxon</a>
                </h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">Library JavaScript Modern untuk Penanganan Tanggal dan Waktu.</p>
            </div>
        </div>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Apa itu Luxon?</h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg">
                Luxon adalah library JavaScript yang kuat untuk bekerja dengan tanggal dan waktu. Dibuat oleh tim Moment.js, Luxon dirancang sebagai alternatif modern yang lebih baik, memanfaatkan fitur-fitur ES6 (seperti Intl API) untuk dukungan zona waktu, parsing, pemformatan, dan operasi aritmatika tanggal-waktu yang kompleks dengan cara yang imutabel.
            </p>            
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mt-4">
                Kunjungi situs resmi Luxon untuk melihat semua fitur, demo, dan dokumentasi lengkapnya: 
                <a href="https://moment.github.io/luxon/" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline font-semibold">Luxon</a>.
            </p>
        </section>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Panduan Pemasangan</h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-4">
                Luxon dapat diintegrasikan dengan mudah. File `luxon.min.js` sudah disertakan dalam proyek ini di `/assets/vendor/luxon/`.
            </p>

            <ol class="list-decimal list-inside space-y-6 text-gray-600 text-base md:text-lg">
                <li>
                    <strong>Inklusi melalui Tag Script:</strong>
                    <p class="mt-1">Anda dapat menyertakan library ini langsung di halaman HTML Anda:</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-html">&lt;script src=&quot;/assets/vendor/luxon/luxon.min.js&quot; defer&gt;&lt;/script&gt;</code></pre>
                </li>
                <li>
                    <strong>Penggunaan Dasar dengan JavaScript:</strong>
                    <p class="mt-1">Setelah library dimuat, Anda dapat mengakses objek `luxon` secara global untuk menggunakannya. Contoh:</p>
                    <pre class="bg-gray-800 text-white p-4 rounded-lg mt-2 overflow-x-auto"><code class="language-javascript">
document.addEventListener('DOMContentLoaded', function() {
    const DateTime = luxon.DateTime;

    // Membuat objek DateTime untuk waktu sekarang
    const now = DateTime.now();
    console.log("Waktu sekarang:", now.toFormat("yyyy-MM-dd HH:mm:ss"));

    // Membuat objek DateTime dari string
    const specificDate = DateTime.fromISO("2025-07-25T12:00:00", { zone: "Asia/Jakarta" });
    console.log("Tanggal spesifik:", specificDate.toLocaleString(DateTime.DATETIME_FULL));

    // Menambah durasi
    const futureDate = now.plus({ days: 5, hours: 2 });
    console.log("5 hari 2 jam dari sekarang:", futureDate.toLocaleString(DateTime.DATETIME_SHORT));
});
</code></pre>
                </li>
            </ol>
        </section>

         <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Manfaat Luxon</h2>
            <ul class="space-y-4">
                <li class="flex items-start">
                    <i data-lucide="sparkles" class="w-6 h-6 text-green-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Desain Imutabel</h3>
                        <p class="text-gray-600 text-base md:text-lg">Operasi pada objek DateTime selalu mengembalikan objek baru, menjaga integritas data asli.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="globe" class="w-6 h-6 text-purple-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Dukungan Zona Waktu Penuh</h3>
                        <p class="text-gray-600 text-base md:text-lg">Memanfaatkan Intl API untuk penanganan zona waktu yang akurat dan lokalisasi.</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i data-lucide="lightbulb" class="w-6 h-6 text-red-500 mr-3 mt-1 shrink-0"></i>
                    <div>
                        <h3 class="font-semibold text-lg">Modern & Ramah Developer</h3>
                        <p class="text-gray-600 text-base md:text-lg">API yang intuitif dan ekspresif, dengan fokus pada praktik JavaScript modern.</p>
                    </div>
                </li>
            </ul>
        </section>

    </div>
</main>