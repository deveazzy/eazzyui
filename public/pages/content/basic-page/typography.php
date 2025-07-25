<?php
/**
 * @[EazZy Project] Copyright (c) [2025] [EazZy Project] license
 * @https://opensource.org/licenses/MIT MIT License
 * @path public/pages/typography.php
 * @author EazZy Project
 *
 * File ini berisi konten untuk halaman "Typography".
 * Halaman ini akan menampilkan contoh-contoh elemen tipografi
 * seperti paragraf, perataan teks, status teks, drop caps, dan blockquotes.
 * Konten ini akan di-include oleh page/switch.php.
 */
?>

<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-7xl mx-auto">

        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
                <i data-lucide="type" class="w-10 h-10 md:w-12 md:h-12"></i>
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">Typography</h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">
                    Contoh dasar dan penataan gaya untuk semua elemen teks guna memastikan konsistensi dan keterbacaan di seluruh proyek.
                </p>
            </div>
        </div>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Apa itu Tipografi?</h2>
            <p class="text-gray-600 leading-relaxed mb-4">
                Tipografi adalah seni dan teknik mengatur jenis huruf untuk membuat bahasa tertulis terbaca, mudah dibaca, dan menarik secara visual. Ini melibatkan pemilihan jenis huruf, ukuran font, spasi baris (line-height), spasi huruf (letter-spacing), dan penempatan teks pada halaman. Dalam desain web, tipografi yang baik sangat penting untuk pengalaman pengguna, karena sebagian besar informasi disampaikan melalui teks.
            </p>
            <p class="text-gray-600 leading-relaxed">
                Tujuan utama tipografi adalah untuk mengoptimalkan keterbacaan dan daya tarik visual teks, sehingga pesan dapat disampaikan secara efektif kepada pembaca. Dengan mengelola elemen-elemen tipografi, kita dapat menciptakan hierarki visual, menyorot informasi penting, dan membangun identitas merek yang kuat.
            </p>
        </section>
        <div class="space-y-12">

            <section id="paragraphs" class="mb-10 md:mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Paragraphs</h2>
                <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm space-y-4 text-gray-700 leading-relaxed text-base md:text-lg">
                    <p>
                        Ini adalah contoh paragraf standar. Teknologi terus berkembang dengan pesat, membawa perubahan signifikan dalam berbagai aspek kehidupan manusia. Dari cara kita berkomunikasi hingga bekerja, inovasi digital telah membuka peluang baru yang tak terbayangkan sebelumnya.
                    </p>
                    <p>
                        Paragraf kedua untuk menunjukkan spasi antar paragraf. Adaptasi terhadap kemajuan ini menjadi kunci untuk tetap relevan di era modern. Oleh karena itu, pemahaman mendasar tentang konsep teknologi dan kemampuan untuk belajar secara berkelanjutan sangatlah penting bagi setiap individu.
                    </p>
                </div>
            </section>

            <section id="alignments" class="mb-10 md:mb-12">
                <h2 class="text-2xl md::text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Alignments</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                        <h3 class="text-lg font-semibold mb-2 text-gray-800">Rata Kiri (Default)</h3>
                        <p class="text-left text-gray-600 text-base md:text-lg">
                            Setiap elemen desain harus memiliki tujuan yang jelas dan ditempatkan secara strategis untuk menciptakan pengalaman pengguna yang kohesif dan intuitif.
                        </p>
                    </div>
                    <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                        <h3 class="text-lg font-semibold mb-2 text-gray-800">Rata Tengah</h3>
                        <p class="text-center text-gray-600 text-base md:text-lg">
                            Setiap elemen desain harus memiliki tujuan yang jelas dan ditempatkan secara strategis untuk menciptakan pengalaman pengguna yang kohesif dan intuitif.
                        </p>
                    </div>
                    <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                        <h3 class="text-lg font-semibold mb-2 text-gray-800">Rata Kanan</h3>
                        <p class="text-right text-gray-600 text-base md::text-lg">
                            Setiap elemen desain harus memiliki tujuan yang jelas dan ditempatkan secara strategis untuk menciptakan pengalaman pengguna yang kohesif dan intuitif.
                        </p>
                    </div>
                    <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                        <h3 class="text-lg font-semibold mb-2 text-gray-800">Rata Kiri-Kanan (Justify)</h3>
                        <p class="text-justify text-gray-600 text-base md:text-lg">
                            Setiap elemen desain harus memiliki tujuan yang jelas dan ditempatkan secara strategis untuk menciptakan pengalaman pengguna yang kohesif dan intuitif. Tata letak yang baik akan memandu mata pengguna secara alami.
                        </p>
                    </div>
                </div>
            </section>

            <section id="states" class="mb-10 md:mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Text States</h2>
                <div class="p-8 bg-white rounded-lg border border-gray-200 shadow-sm text-gray-700 leading-relaxed space-y-2 text-base md:text-lg">
                    <p>
                        Anda dapat menekankan teks dengan berbagai cara. Ini adalah contoh <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 hover:underline">sebuah link (biru)</a>.
                    </p>
                     <p>
                        Gunakan warna untuk status, seperti <span class="text-green-700 font-semibold">teks sukses (hijau)</span> atau <span class="text-red-700 font-semibold">teks error (merah)</span>.
                    </p>
                    <p>
                        Anda juga bisa <mark class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md">menyorot teks</mark> untuk menarik perhatian, atau <mark class="bg-green-100 text-green-800 px-2 py-1 rounded-md">dengan warna lain</mark>.
                    </p>
                    <p>
                        Gaya standar seperti <strong>tebal (bold)</strong>, <em>miring (italic)</em>, <s>dicoret</s>, dan <u>garis bawah</u> juga tersedia.
                    </p>
                </div>
            </section>

            <section id="dropcaps" class="mb-10 md:mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Drop Caps</h2>

                <div class="mb-10">
                    <h3 class="text-xl font-semibold mb-4 text-gray-700">Gaya Berbingkai</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="bg-white p-8 rounded-lg border border-gray-200 shadow-sm">
                            <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                                <span class="drop-cap-framed blue">G</span>aya ini memberikan sentuhan dekoratif. Perataan yang presisi dicapai dengan mengatur `line-height` dan `margin` secara cermat.
                            </p>
                        </div>

                        <div class="bg-white p-8 rounded-lg border border-gray-200 shadow-sm">
                            <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                                <span class="drop-cap-framed green">V</span>ariasi warna hijau pada gaya berbingkai menunjukkan konsistensi tema dan memberikan nuansa yang lebih segar dan positif.
                            </p>
                        </div>

                        <div class="bg-gray-900 p-8 rounded-lg border border-gray-700 shadow-sm">
                            <p class="text-gray-300 leading-relaxed text-base md:text-lg">
                                <span class="drop-cap-framed dark">D</span>iterapkan pada tema gelap, gaya ini memberikan kesan yang kuat, modern, dan sangat terbaca dengan kontras yang tinggi.
                            </p>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-700">Gaya Lainnya</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="bg-white p-8 rounded-lg border border-gray-200 shadow-sm">
                            <h4 class="text-lg font-medium mb-2 text-gray-800">Modern (initial-letter)</h4>
                            <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                                <span class="drop-cap-initial">M</span>enggunakan properti CSS `initial-letter` adalah cara paling modern dan akurat untuk membuat drop cap. Desain yang baik selalu dimulai dari pemahaman mendalam terhadap kebutuhan pengguna.
                            </p>
                        </div>

                        <div class="bg-gray-900 p-8 rounded-lg border border-gray-700 shadow-sm">
                            <h4 class="text-lg font-medium mb-2 text-white">Elegan (Lingkaran Gelap)</h4>
                            <p class="text-gray-300 leading-relaxed text-base md:text-lg">
                                <span class="drop-cap-circle-dark">E</span>legan dan formal, drop cap dengan latar belakang pada tema gelap memberikan nuansa premium. Tipografi yang dipilih dengan baik adalah fondasi dari semua komunikasi visual yang efektif.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="blockquotes" class="mb-10 md:mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Blockquotes</h2>
                <div class="space-y-8">
                    <div class="relative p-8 bg-blue-50 rounded-lg border-l-4 border-blue-500 shadow-sm">
                        <i data-lucide="quote" class="absolute top-4 right-4 w-12 h-12 text-blue-200 opacity-50"></i>
                        <blockquote class="text-lg italic text-blue-900">
                            <p>"Desain yang bagus adalah membuat produk dapat dipahami dan berguna. Desain yang hebat adalah membuatnya juga menyenangkan untuk digunakan."</p>
                            <cite class="block text-right mt-4 not-italic font-semibold text-blue-700">- Joshua Porter</cite>
                        </blockquote>
                    </div>
                    <div class="relative p-8 bg-green-50 rounded-lg border-l-4 border-green-500 shadow-sm">
                        <i data-lucide="quote" class="absolute top-4 right-4 w-12 h-12 text-green-200 opacity-50"></i>
                        <blockquote class="text-lg italic text-green-900">
                            <p>"Kesederhanaan adalah sofistikasi tertinggi. Mencapai titik di mana tidak ada lagi yang bisa diambil adalah tujuan dari desain yang baik."</p>
                            <cite class="block text-right mt-4 not-italic font-semibold text-green-700">- Leonardo da Vinci</cite>
                        </blockquote>
                    </div>
                    <div class="relative p-8 bg-gray-200 rounded-lg border-l-4 border-gray-600 shadow-sm">
                        <i data-lucide="quote" class="absolute top-4 right-4 w-12 h-12 text-gray-600 opacity-50"></i>
                        <blockquote class="text-lg italic text-gray-900">
                            <p>"Orang mengabaikan desain yang mengabaikan orang. Fokus pada pengguna dan semua hal lain akan mengikuti."</p>
                            <cite class="block text-right mt-4 not-italic font-semibold text-gray-400">- Frank Chimero</cite>
                        </blockquote>
                    </div>
                </div>
            </section>

        </div>
    </div>
</main>