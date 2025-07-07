<?php
/**
 * page/content/typography.php
 *
 * File ini berisi konten untuk halaman "Typography".
 * Halaman ini akan menampilkan contoh-contoh elemen tipografi
 * seperti paragraf, perataan teks, status teks, drop caps, dan blockquotes.
 * Konten ini akan di-include oleh page/switch.php.
 */
?>

<!-- Kontainer utama untuk konten halaman -->
<main class="flex-1 w-full bg-gray-50">
    <!-- Bagian Atas Halaman (Hero) dengan latar belakang gradien halus -->
    <div class="bg-white">
        <div class="relative isolate">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#a7f3d0] to-[#3b82f6] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <div class="container mx-auto px-6 md:px-10 py-20 text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight">Typography</h1>
                <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600">
                    Contoh dasar dan penataan gaya untuk semua elemen teks guna memastikan konsistensi dan keterbacaan di seluruh proyek.
                </p>
            </div>
        </div>
    </div>

    <!-- Kontainer untuk semua contoh tipografi -->
    <div class="container mx-auto px-6 md:px-10 py-12">
        <div class="space-y-12">

            <!-- ================================================================== -->
            <!-- 1. Bagian Paragraf (Paragraphs) -->
            <!-- ================================================================== -->
            <section id="paragraphs">
                <div class="flex items-center gap-3 mb-6">
                    <i data-lucide="pilcrow" class="w-6 h-6 text-gray-800"></i>
                    <h2 class="text-2xl font-bold text-gray-800">Paragraphs</h2>
                </div>
                <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm space-y-4 text-gray-700 leading-relaxed">
                    <p>
                        Ini adalah contoh paragraf standar. Teknologi terus berkembang dengan pesat, membawa perubahan signifikan dalam berbagai aspek kehidupan manusia. Dari cara kita berkomunikasi hingga bekerja, inovasi digital telah membuka peluang baru yang tak terbayangkan sebelumnya.
                    </p>
                    <p>
                        Paragraf kedua untuk menunjukkan spasi antar paragraf. Adaptasi terhadap kemajuan ini menjadi kunci untuk tetap relevan di era modern. Oleh karena itu, pemahaman mendasar tentang konsep teknologi dan kemampuan untuk belajar secara berkelanjutan sangatlah penting bagi setiap individu.
                    </p>
                </div>
            </section>

            <!-- ================================================================== -->
            <!-- 2. Bagian Perataan Teks (Alignments) -->
            <!-- ================================================================== -->
            <section id="alignments">
                <div class="flex items-center gap-3 mb-6">
                    <i data-lucide="align-left" class="w-6 h-6 text-blue-600"></i>
                    <h2 class="text-2xl font-bold text-gray-800">Alignments</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                        <h3 class="text-lg font-semibold mb-2 text-gray-800">Rata Kiri (Default)</h3>
                        <p class="text-left text-gray-600">
                            Setiap elemen desain harus memiliki tujuan yang jelas dan ditempatkan secara strategis untuk menciptakan pengalaman pengguna yang kohesif dan intuitif.
                        </p>
                    </div>
                    <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                        <h3 class="text-lg font-semibold mb-2 text-gray-800">Rata Tengah</h3>
                        <p class="text-center text-gray-600">
                            Setiap elemen desain harus memiliki tujuan yang jelas dan ditempatkan secara strategis untuk menciptakan pengalaman pengguna yang kohesif dan intuitif.
                        </p>
                    </div>
                    <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                        <h3 class="text-lg font-semibold mb-2 text-gray-800">Rata Kanan</h3>
                        <p class="text-right text-gray-600">
                            Setiap elemen desain harus memiliki tujuan yang jelas dan ditempatkan secara strategis untuk menciptakan pengalaman pengguna yang kohesif dan intuitif.
                        </p>
                    </div>
                    <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                        <h3 class="text-lg font-semibold mb-2 text-gray-800">Rata Kiri-Kanan (Justify)</h3>
                        <p class="text-justify text-gray-600">
                            Setiap elemen desain harus memiliki tujuan yang jelas dan ditempatkan secara strategis untuk menciptakan pengalaman pengguna yang kohesif dan intuitif. Tata letak yang baik akan memandu mata pengguna secara alami.
                        </p>
                    </div>
                </div>
            </section>

            <!-- ================================================================== -->
            <!-- 3. Bagian Status Teks (States) -->
            <!-- ================================================================== -->
            <section id="states">
                <div class="flex items-center gap-3 mb-6">
                    <i data-lucide="highlighter" class="w-6 h-6 text-green-600"></i>
                    <h2 class="text-2xl font-bold text-gray-800">Text States</h2>
                </div>
                <div class="p-8 bg-white rounded-lg border border-gray-200 shadow-sm text-gray-700 leading-relaxed space-y-2">
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

            <!-- ================================================================== -->
            <!-- 4. Bagian Drop Caps (DIREVISI TOTAL) -->
            <!-- ================================================================== -->
            <section id="dropcaps">
                <div class="flex items-center gap-3 mb-6">
                    <i data-lucide="type" class="w-6 h-6 text-gray-800"></i>
                    <h2 class="text-2xl font-bold text-gray-800">Drop Caps</h2>
                </div>
                
                <!-- Sub-bagian untuk gaya berbingkai -->
                <div class="mb-10">
                    <h3 class="text-xl font-semibold mb-4 text-gray-700">Gaya Berbingkai</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Variasi Berbingkai - BIRU -->
                        <div class="bg-white p-8 rounded-lg border border-gray-200 shadow-sm">
                            <p class="text-gray-700 leading-relaxed">
                                <span class="drop-cap-framed blue">G</span>aya ini memberikan sentuhan dekoratif. Perataan yang presisi dicapai dengan mengatur `line-height` dan `margin` secara cermat.
                            </p>
                        </div>

                        <!-- Variasi Berbingkai - HIJAU -->
                        <div class="bg-white p-8 rounded-lg border border-gray-200 shadow-sm">
                            <p class="text-gray-700 leading-relaxed">
                                <span class="drop-cap-framed green">V</span>ariasi warna hijau pada gaya berbingkai menunjukkan konsistensi tema dan memberikan nuansa yang lebih segar dan positif.
                            </p>
                        </div>

                        <!-- Variasi Berbingkai - HITAM/GELAP -->
                        <div class="bg-gray-900 p-8 rounded-lg border border-gray-700 shadow-sm">
                            <p class="text-gray-300 leading-relaxed">
                                <span class="drop-cap-framed dark">D</span>iterapkan pada tema gelap, gaya ini memberikan kesan yang kuat, modern, dan sangat terbaca dengan kontras yang tinggi.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Sub-bagian untuk gaya lainnya -->
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-700">Gaya Lainnya</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Variasi Modern dengan initial-letter -->
                        <div class="bg-white p-8 rounded-lg border border-gray-200 shadow-sm">
                            <h4 class="text-lg font-medium mb-2 text-gray-800">Modern (initial-letter)</h4>
                            <p class="text-gray-700 leading-relaxed">
                                <span class="drop-cap-initial">M</span>enggunakan properti CSS `initial-letter` adalah cara paling modern dan akurat untuk membuat drop cap. Desain yang baik selalu dimulai dari pemahaman mendalam terhadap kebutuhan pengguna.
                            </p>
                        </div>

                        <!-- Variasi Tema Gelap dengan Latar Belakang Bulat -->
                        <div class="bg-gray-900 p-8 rounded-lg border border-gray-700 shadow-sm">
                            <h4 class="text-lg font-medium mb-2 text-white">Elegan (Lingkaran Gelap)</h4>
                            <p class="text-gray-300 leading-relaxed">
                                <span class="drop-cap-circle-dark">E</span>legan dan formal, drop cap dengan latar belakang pada tema gelap memberikan nuansa premium. Tipografi yang dipilih dengan baik adalah fondasi dari semua komunikasi visual yang efektif.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ================================================================== -->
            <!-- 5. Bagian Blockquotes -->
            <!-- ================================================================== -->
            <section id="blockquotes">
                <div class="flex items-center gap-3 mb-6">
                    <i data-lucide="quote" class="w-6 h-6 text-blue-600"></i>
                    <h2 class="text-2xl font-bold text-gray-800">Blockquotes</h2>
                </div>
                <div class="space-y-8">
                    <!-- Blockquote Biru (Primary) -->
                    <div class="relative p-8 bg-blue-50 rounded-lg border-l-4 border-blue-500 shadow-sm">
                        <i data-lucide="quote" class="absolute top-4 right-4 w-12 h-12 text-blue-200 opacity-50"></i>
                        <blockquote class="text-lg italic text-blue-900">
                            <p>"Desain yang bagus adalah membuat produk dapat dipahami dan berguna. Desain yang hebat adalah membuatnya juga menyenangkan untuk digunakan."</p>
                            <cite class="block text-right mt-4 not-italic font-semibold text-blue-700">- Joshua Porter</cite>
                        </blockquote>
                    </div>
                    <!-- Blockquote Hijau (Success) -->
                    <div class="relative p-8 bg-green-50 rounded-lg border-l-4 border-green-500 shadow-sm">
                        <i data-lucide="quote" class="absolute top-4 right-4 w-12 h-12 text-green-200 opacity-50"></i>
                        <blockquote class="text-lg italic text-green-900">
                            <p>"Kesederhanaan adalah sofistikasi tertinggi. Mencapai titik di mana tidak ada lagi yang bisa diambil adalah tujuan dari desain yang baik."</p>
                            <cite class="block text-right mt-4 not-italic font-semibold text-green-700">- Leonardo da Vinci</cite>
                        </blockquote>
                    </div>
                    <!-- Blockquote Hitam/Gelap (Dark) (DIREVISI) -->
                    <div class="relative p-8 bg-gray-200 rounded-lg border-l-4 border-gray-600 shadow-sm">
                        <i data-lucide="quote" class="absolute top-4 right-4 w-12 h-12 text-gray-600 opacity-50"></i>
                        <blockquote class="text-lg italic text-gray-100">
                            <p>"Orang mengabaikan desain yang mengabaikan orang. Fokus pada pengguna dan semua hal lain akan mengikuti."</p>
                            <cite class="block text-right mt-4 not-italic font-semibold text-gray-300">- Frank Chimero</cite>
                        </blockquote>
                    </div>
                </div>
            </section>

        </div>
    </div>
</main>
