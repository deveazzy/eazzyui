<?php
/**
 * page/content/buttons.php
 *
 * Halaman untuk menampilkan berbagai variasi komponen tombol.
 * Versi ini adalah versi final yang mencakup semua variasi yang diminta.
 */
?>
<!-- Kontainer utama untuk konten halaman -->
<main class="flex-1 w-full bg-gray-50">
    <!-- Bagian Atas Halaman (Hero) -->
    <div class="bg-white">
        <div class="relative isolate">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#93c5fd] to-[#a7f3d0] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <div class="container mx-auto px-6 md:px-10 py-20 text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight">Buttons</h1>
                <p class="mt-4 max-w-3xl mx-auto text-lg text-gray-600">
                    Koleksi lengkap variasi tombol, dari ukuran, grup, hingga interaksi dropdown yang kompleks.
                </p>
            </div>
        </div>
    </div>

    <!-- Kontainer untuk semua contoh tombol -->
    <div class="container mx-auto px-6 md:px-10 py-12">
        <div class="space-y-12">

            <!-- 1. Variasi Tombol Dasar & Modern -->
            <section>
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Variasi Tombol Dasar & Modern</h2>
                <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex flex-wrap items-center gap-4">
                    <!-- Tombol klasik -->
                    <button class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-600 transition-colors">Primer</button>
                    <button class="bg-green-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-green-600 transition-colors">Sekunder</button>
                    <button class="bg-red-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-red-600 transition-colors">Bahaya</button>
                    <button class="bg-indigo-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-indigo-600 transition-colors">Info</button>
                    <button class="bg-white text-gray-700 font-semibold py-2 px-4 rounded-lg border border-gray-300 hover:bg-gray-100 transition-colors">Netral</button>
                    <button class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-full shadow-md hover:bg-blue-600 transition-colors">Bentuk Pil</button>
                    <!-- Tombol gradient (ubah ke solid) -->
                    <button class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg shadow-lg hover:bg-blue-600 transition-all">Gradient</button>
                    <!-- Tombol glassmorphism -->
                    <button class="backdrop-blur-md bg-white/30 border border-white/40 text-blue-700 font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-white/50 transition-all">Glass</button>
                    <!-- Tombol outline -->
                    <button class="bg-transparent border-2 border-blue-500 text-blue-500 font-semibold py-2 px-4 rounded-lg hover:bg-blue-50 transition-colors">Outline</button>
                    <!-- Tombol ghost -->
                    <button class="bg-transparent text-gray-700 font-semibold py-2 px-4 rounded-lg hover:bg-gray-100 border border-transparent transition-colors">Ghost</button>
                    <!-- Tombol shadow tebal -->
                    <button class="bg-purple-500 text-white font-semibold py-2 px-4 rounded-lg shadow-2xl hover:bg-purple-600 transition-colors">Shadow XL</button>
                    <!-- Tombol ripple (butuh JS untuk efek, hanya contoh class) -->
                    <button class="bg-pink-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-pink-600 transition-colors relative overflow-hidden ripple">Ripple</button>
                    <!-- Tombol disabled -->
                    <button class="bg-gray-300 text-gray-500 font-semibold py-2 px-4 rounded-lg shadow-md cursor-not-allowed opacity-60" disabled>Disabled</button>
                    <!-- Tombol loading -->
                    <button class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md flex items-center gap-2 hover:bg-blue-600 transition-colors"><svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path></svg>Loading</button>
                    <!-- Tombol dengan badge -->
                    <button class="relative bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-600 transition-colors"><span>Inbox</span><span class="absolute -top-2 -right-2 bg-red-500 text-xs text-white rounded-full px-2 py-0.5">5</span></button>
                    <!-- Tombol dengan icon kiri/kanan -->
                    <button class="bg-green-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md flex items-center gap-2 hover:bg-green-600 transition-colors"><i data-lucide="arrow-left" class="w-5 h-5"></i>Kembali</button>
                    <button class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md flex items-center gap-2 hover:bg-blue-600 transition-colors">Lanjut<i data-lucide="arrow-right" class="w-5 h-5"></i></button>
                </div>
            </section>

            <!-- 2. Ukuran & Grup Tombol (Bentuk Kotak) -->
            <section>
                 <h2 class="text-2xl font-bold text-gray-800 mb-6">Ukuran & Grup (Bentuk Kotak)</h2>
                 <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm space-y-6">
                    <div class="flex flex-wrap items-center gap-4">
                        <button class="font-semibold transition-colors flex items-center justify-center gap-2 bg-transparent text-blue-600 border-2 border-blue-600 rounded-sm py-1 px-2 text-xs">Tombol XS</button>
                        <button class="font-semibold transition-colors flex items-center justify-center gap-2 bg-transparent text-blue-600 border-2 border-blue-600 rounded-sm py-1.5 px-3 text-sm">Tombol SM</button>
                        <button class="font-semibold transition-colors flex items-center justify-center gap-2 bg-transparent text-blue-600 border-2 border-blue-600 rounded-sm py-2 px-4 text-base">Tombol Base</button>
                        <button class="font-semibold transition-colors flex items-center justify-center gap-2 bg-transparent text-blue-600 border-2 border-blue-600 rounded-sm py-2.5 px-5 text-lg">Tombol LG</button>
                        <button class="font-semibold transition-colors flex items-center justify-center gap-2 bg-transparent text-blue-600 border-2 border-blue-600 rounded-sm py-3 px-6 text-xl">Tombol XL</button>
                    </div>
                    <div class="flex flex-wrap items-center gap-4">
                        <div class="inline-flex shadow-sm"><button class="px-4 py-2 text-sm font-medium text-blue-700 bg-white border border-gray-300 rounded-l-sm hover:bg-gray-100">Satu</button><button class="px-4 py-2 text-sm font-medium text-blue-700 bg-white border-t border-b border-gray-300 hover:bg-gray-100">Dua</button><button class="px-4 py-2 text-sm font-medium text-blue-700 bg-white border border-gray-300 rounded-r-sm hover:bg-gray-100">Tiga</button></div>
                    </div>
                 </div>
            </section>

            <!-- 3. Dropdown & Grup Aksi CRUD -->
            <section>
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Dropdown & Grup Aksi CRUD</h2>
                <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex flex-wrap items-center gap-6">
                    <!-- Dropdown 1: Opsi -->
                    <div class="relative inline-block text-left dropdown-wrapper group">
                        <button type="button" class="dropdown-toggle inline-flex w-full justify-center gap-x-1.5 rounded-lg bg-white px-4 py-2 text-sm font-semibold text-gray-900 shadow-md border border-gray-200 hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-400 transition-all">
                            Opsi
                            <i data-lucide="chevron-down" class="w-5 h-5 -mr-1"></i>
                        </button>
                        <div class="dropdown-menu dropdown-animated absolute left-0 md:right-0 md:left-auto z-20 mt-2 min-w-40 max-w-xs w-56 origin-top-right rounded-xl bg-white shadow-2xl ring-1 ring-blue-200 ring-opacity-60 overflow-hidden border border-blue-100 opacity-0 group-hover:opacity-100 group-hover:translate-y-0 translate-y-2 pointer-events-none group-hover:pointer-events-auto transition-all duration-200">
                            <a href="#" class="flex items-center gap-2 px-4 py-2 text-sm text-blue-700 hover:bg-blue-50 transition-colors"><i data-lucide="edit-3" class="w-4 h-4"></i>Edit</a>
                            <a href="#" class="flex items-center gap-2 px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition-colors"><i data-lucide="trash-2" class="w-4 h-4"></i>Hapus</a>
                        </div>
                    </div>
                    <!-- Dropdown 2: Simpan -->
                    <div class="relative inline-block text-left dropdown-wrapper group">
                        <button type="button" class="dropdown-toggle inline-flex items-center gap-2 rounded-lg bg-blue-600 px-4 py-2 text-sm font-semibold text-white shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 transition-all">
                            <i data-lucide="save" class="h-5 w-5"></i>
                            <span>Simpan</span>
                            <i data-lucide="chevron-down" class="h-5 w-5"></i>
                        </button>
                        <div class="dropdown-menu dropdown-animated absolute left-0 md:right-0 md:left-auto z-20 mt-2 min-w-40 max-w-xs w-56 origin-top-right rounded-xl bg-white shadow-2xl ring-1 ring-blue-200 ring-opacity-60 overflow-hidden border border-blue-100 opacity-0 group-hover:opacity-100 group-hover:translate-y-0 translate-y-2 pointer-events-none group-hover:pointer-events-auto transition-all duration-200">
                            <a href="#" class="flex items-center gap-2 px-4 py-2 text-sm text-blue-700 hover:bg-blue-50 transition-colors"><i data-lucide="check-circle" class="w-4 h-4"></i>Simpan & Publikasi</a>
                        </div>
                    </div>
                    <!-- Dropdown 3: More -->
                    <div class="relative inline-block text-left dropdown-wrapper group">
                        <button type="button" class="dropdown-toggle p-2 rounded-full bg-white text-gray-500 hover:bg-gray-100 border border-gray-200 shadow-md focus:outline-none focus:ring-2 focus:ring-blue-400 transition-all">
                            <i data-lucide="more-vertical" class="w-5 h-5"></i>
                        </button>
                        <div class="dropdown-menu dropdown-animated absolute left-0 md:right-0 md:left-auto z-20 mt-2 min-w-40 max-w-xs w-56 origin-top-right rounded-xl bg-white shadow-2xl ring-1 ring-blue-200 ring-opacity-60 overflow-hidden border border-blue-100 opacity-0 group-hover:opacity-100 group-hover:translate-y-0 translate-y-2 pointer-events-none group-hover:pointer-events-auto transition-all duration-200">
                            <a href="#" class="flex items-center gap-2 px-4 py-2 text-sm text-blue-700 hover:bg-blue-50 transition-colors"><i data-lucide="eye" class="w-4 h-4"></i>Lihat Detail</a>
                        </div>
                    </div>
            </section>
            
            <!-- 4. Tombol dengan Efek Hover -->
            <section>
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Tombol dengan Efek Hover</h2>
                <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex flex-wrap items-center gap-4">
                    <!-- Tombol dengan efek hover, penulisan konsisten dan warna solid 500 -->
                    <button class="btn-hover-pop bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg flex items-center justify-center gap-2">Pop</button>
                    <button class="btn-hover-glow-blue bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg flex items-center justify-center gap-2">Glow Biru</button>
                    <button class="btn-hover-fill-up bg-green-500 text-white font-semibold py-2 px-4 rounded-lg flex items-center justify-center gap-2 relative overflow-hidden">Isi</button>
                    <button class="btn-hover-pop bg-green-500 text-white font-semibold py-2 px-4 rounded-lg flex items-center justify-center gap-2">Pop Hijau</button>
                    <button class="btn-hover-icon-spin bg-indigo-500 text-white font-semibold py-2 px-4 rounded-lg flex items-center justify-center gap-2"><i data-lucide="refresh-cw" class="w-5 h-5"></i><span>Icon Putar</span></button>
                    <button class="btn-hover-icon-bounce bg-indigo-500 text-white font-semibold py-2 px-4 rounded-lg flex items-center justify-center gap-2"><i data-lucide="navigation" class="w-5 h-5"></i><span>Icon Lompat</span></button>
                    <button class="btn-hover-shadow-grow bg-purple-500 text-white font-semibold py-2 px-4 rounded-lg flex items-center justify-center gap-2">Shadow Grow</button>
                    <button class="btn-hover-border-slide bg-white text-blue-500 border-2 border-blue-500 font-semibold py-2 px-4 rounded-lg flex items-center justify-center gap-2">Border Slide</button>
                    <button class="btn-hover-text-slide bg-pink-500 text-white font-semibold py-2 px-4 rounded-lg flex items-center justify-center gap-2 overflow-hidden relative"><span>Text Slide</span></button>
                    <button class="btn-hover-icon-slide bg-yellow-500 text-white font-semibold py-2 px-4 rounded-lg flex items-center justify-center gap-2"><i data-lucide="arrow-right" class="w-5 h-5"></i><span>Icon Slide</span></button>
                    <button class="btn-hover-scale-up bg-teal-500 text-white font-semibold py-2 px-4 rounded-lg flex items-center justify-center gap-2">Scale Up</button>
                    <button class="btn-hover-rotate bg-orange-500 text-white font-semibold py-2 px-4 rounded-lg flex items-center justify-center gap-2">Rotate</button>
                    <button class="btn-hover-flip bg-gray-800 text-white font-semibold py-2 px-4 rounded-lg flex items-center justify-center gap-2"><span>Flip</span></button>
                    <!-- Gradient Hover diubah ke solid -->
                    <button class="btn-hover-gradient bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg flex items-center justify-center gap-2">Gradient Hover</button>
                    <!-- Glass Hover tetap transparan, tapi tanpa gradasi -->
                    <button class="btn-hover-glass bg-white/30 border border-white/40 text-blue-700 backdrop-blur-md font-semibold py-2 px-4 rounded-lg flex items-center justify-center gap-2">Glass Hover</button>
                    <button class="btn-hover-pulse bg-red-500 text-white font-semibold py-2 px-4 rounded-lg flex items-center justify-center gap-2">Pulse</button>
                    <button class="btn-hover-wobble bg-blue-900 text-white font-semibold py-2 px-4 rounded-lg flex items-center justify-center gap-2">Wobble</button>
                    <button class="btn-hover-bounce bg-green-700 text-white font-semibold py-2 px-4 rounded-lg flex items-center justify-center gap-2">Bounce</button>
                </div>
            </section>

            <!-- 5. Koleksi Tombol Animasi (Klik untuk Coba) -->
            <section>
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Koleksi Tombol Animasi (Klik untuk Coba)</h2>
                <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex flex-wrap items-center gap-4">
                    <?php
                        // Daftar animasi dari Animate.css v4
                        $animations = [
                            'pulse' => 'Pulse',
                            'shakeX' => 'Shake',
                            'wobble' => 'Wobble',
                            'jello' => 'Jello',
                            'rubberBand' => 'Rubber Band',
                            'fadeInUp' => 'Fade In Up',
                            'zoomIn' => 'Zoom In',
                            'bounceIn' => 'Bounce In',
                            'flipInX' => 'Flip In X',
                            'rollIn' => 'Roll In'
                        ];
                        $base_class = "clickable-animated-btn font-semibold transition-colors flex items-center justify-center gap-2 bg-transparent text-blue-600 border-2 border-blue-600 rounded-lg py-2 px-4 hover:bg-blue-50";

                        foreach ($animations as $anim_class => $label) {
                            echo "<button class='{$base_class}' data-animation='{$anim_class}'>{$label}</button>";
                        }
                    ?>
                </div>
            </section>

        <!-- 6. Tombol Link -->
        <section>
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Tombol Link</h2>
            <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex flex-wrap items-center gap-4">
                <a href="#" class="inline-block bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-700 transition-colors">Link Primer</a>
                <a href="#" class="inline-block bg-transparent border-2 border-blue-600 text-blue-600 font-semibold py-2 px-4 rounded-lg hover:bg-blue-50 transition-colors">Link Outline</a>
                <a href="#" class="inline-block underline text-blue-600 font-semibold py-2 px-4 hover:text-blue-800 transition-colors">Link Underline</a>
                <a href="#" class="inline-block text-gray-600 font-semibold py-2 px-4 hover:text-blue-600 transition-colors">Link Minimal</a>
            </div>
        </section>

        <!-- 7. Tombol Icon Only -->
        <section>
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Tombol Icon Only</h2>
            <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex flex-wrap items-center gap-4">
                <button class="p-3 rounded-full bg-blue-600 text-white shadow-md hover:bg-blue-700 transition-colors"><i data-lucide="plus" class="w-5 h-5"></i></button>
                <button class="p-3 rounded-full bg-green-600 text-white shadow-md hover:bg-green-700 transition-colors"><i data-lucide="check" class="w-5 h-5"></i></button>
                <button class="p-3 rounded-full bg-red-600 text-white shadow-md hover:bg-red-700 transition-colors"><i data-lucide="x" class="w-5 h-5"></i></button>
                <button class="p-3 rounded-full bg-gray-200 text-gray-700 shadow-md hover:bg-gray-300 transition-colors"><i data-lucide="search" class="w-5 h-5"></i></button>
            </div>
        </section>

        <!-- 8. Tombol Social Media -->
        <section>
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Tombol Social Media</h2>
            <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex flex-wrap items-center gap-4">
                <a href="#" class="flex items-center gap-2 bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-800 transition-colors"><i data-lucide="facebook" class="w-5 h-5"></i>Facebook</a>
                <a href="#" class="flex items-center gap-2 bg-sky-400 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-sky-500 transition-colors"><i data-lucide="twitter" class="w-5 h-5"></i>Twitter</a>
                <a href="#" class="flex items-center gap-2 bg-pink-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-pink-600 transition-colors"><i data-lucide="instagram" class="w-5 h-5"></i>Instagram</a>
                <a href="#" class="flex items-center gap-2 bg-gray-900 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-gray-800 transition-colors"><i data-lucide="github" class="w-5 h-5"></i>GitHub</a>
            </div>
        </section>

        <!-- 9. Tombol Toggle (Aktif/Nonaktif) -->
        <section>
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Tombol Toggle (Aktif/Nonaktif)</h2>
            <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex flex-wrap items-center gap-4">
                <button class="bg-green-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-green-700 transition-colors">Aktif</button>
                <button class="bg-gray-300 text-gray-500 font-semibold py-2 px-4 rounded-lg shadow-md">Nonaktif</button>
                <button class="bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-700 transition-colors">ON</button>
                <button class="bg-gray-200 text-gray-500 font-semibold py-2 px-4 rounded-lg shadow-md">OFF</button>
            </div>
        </section>

        <!-- 10. Tombol Status (Success, Warning, Info, Error) -->
        <section>
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Tombol Status</h2>
            <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex flex-wrap items-center gap-4">
                <button class="bg-green-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-green-600 transition-colors">Success</button>
                <button class="bg-yellow-400 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-yellow-500 transition-colors">Warning</button>
                <button class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-600 transition-colors">Info</button>
                <button class="bg-red-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-red-600 transition-colors">Error</button>
            </div>
        </section>

        <!-- 11. Tombol Block/Full Width -->
        <section>
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Tombol Block / Full Width</h2>
            <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex flex-col items-stretch gap-4">
                <button class="w-full bg-blue-600 text-white font-semibold py-3 px-4 rounded-lg shadow-md hover:bg-blue-700 transition-colors">Block Button</button>
                <button class="w-full bg-gradient-to-r from-green-400 to-blue-500 text-white font-semibold py-3 px-4 rounded-lg shadow-lg hover:from-green-500 hover:to-blue-600 transition-all">Block Gradient</button>
            </div>
        </section>

        <!-- 12. Tombol Minimalis -->
        <section>
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Tombol Minimalis</h2>
            <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex flex-wrap items-center gap-4">
                <button class="bg-transparent text-blue-600 font-semibold py-2 px-4 rounded hover:bg-blue-50 transition-colors">Minimalis</button>
                <button class="bg-transparent text-gray-600 font-semibold py-2 px-4 rounded hover:bg-gray-100 transition-colors">Minimalis 2</button>
                <button class="bg-transparent text-red-600 font-semibold py-2 px-4 rounded hover:bg-red-50 transition-colors">Minimalis Danger</button>
            </div>
        </section>

        <!-- 13. Button Link Lingkaran dengan Notifikasi -->
        <section>
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Button Link Lingkaran dengan Notifikasi</h2>
            <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex gap-6">
                <div class="relative">
                    <a href="#" class="flex items-center justify-center w-14 h-14 rounded-full bg-blue-600 text-white shadow-md hover:bg-blue-700 transition-colors">
                        <i data-lucide="bell" class="w-7 h-7"></i>
                    </a>
                    <span class="absolute top-0 right-0 translate-x-1/3 -translate-y-1/3 bg-red-500 text-xs text-white rounded-full px-2 py-0.5 ring-2 ring-white animate-pulse z-10">3</span>
                </div>
                <div class="relative">
                    <a href="#" class="flex items-center justify-center w-14 h-14 rounded-full bg-green-600 text-white shadow-md hover:bg-green-700 transition-colors">
                        <i data-lucide="mail" class="w-7 h-7"></i>
                    </a>
                    <span class="absolute top-0 right-0 translate-x-1/3 -translate-y-1/3 bg-yellow-400 text-xs text-white rounded-full px-2 py-0.5 ring-2 ring-white z-10">9+</span>
                </div>
            </div>
        </section>

        <!-- 14. Button Icon Media Sosial dengan Tooltip Slider -->
        <section>
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Button Icon Media Sosial dengan Tooltip Slider</h2>
            <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex gap-6">
                <div class="relative group">
                    <a href="#" class="flex items-center justify-center p-4 rounded-full bg-blue-700 text-white shadow-md hover:bg-blue-800 transition-colors">
                        <i data-lucide="facebook" class="w-6 h-6"></i>
                    </a>
                    <span class="social-tooltip absolute left-full top-1/2 -translate-y-1/2 ml-2 opacity-0 group-hover:opacity-100 group-hover:translate-x-0 translate-x-2 transition-all duration-300 pointer-events-none whitespace-nowrap bg-blue-700 text-white px-3 py-1 rounded shadow-lg">Facebook</span>
                </div>
                <div class="relative group">
                    <a href="#" class="flex items-center justify-center p-4 rounded-full bg-sky-400 text-white shadow-md hover:bg-sky-500 transition-colors">
                        <i data-lucide="twitter" class="w-6 h-6"></i>
                    </a>
                    <span class="social-tooltip absolute left-full top-1/2 -translate-y-1/2 ml-2 opacity-0 group-hover:opacity-100 group-hover:translate-x-0 translate-x-2 transition-all duration-300 pointer-events-none whitespace-nowrap bg-sky-400 text-white px-3 py-1 rounded shadow-lg">Twitter</span>
                </div>
                <div class="relative group">
                    <a href="#" class="flex items-center justify-center p-4 rounded-full bg-pink-500 text-white shadow-md hover:bg-pink-600 transition-colors">
                        <i data-lucide="instagram" class="w-6 h-6"></i>
                    </a>
                    <span class="social-tooltip absolute left-full top-1/2 -translate-y-1/2 ml-2 opacity-0 group-hover:opacity-100 group-hover:translate-x-0 translate-x-2 transition-all duration-300 pointer-events-none whitespace-nowrap bg-pink-500 text-white px-3 py-1 rounded shadow-lg">Instagram</span>
                </div>
                <div class="relative group">
                    <a href="#" class="flex items-center justify-center p-4 rounded-full bg-gray-900 text-white shadow-md hover:bg-gray-800 transition-colors">
                        <i data-lucide="github" class="w-6 h-6"></i>
                    </a>
                    <span class="social-tooltip absolute left-full top-1/2 -translate-y-1/2 ml-2 opacity-0 group-hover:opacity-100 group-hover:translate-x-0 translate-x-2 transition-all duration-300 pointer-events-none whitespace-nowrap bg-gray-900 text-white px-3 py-1 rounded shadow-lg">GitHub</span>
                </div>

            </div>
        </section>
        <section>
            <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex flex-col gap-6">
                <!-- Button Search Expand on Hover -->
                <div class="relative group flex items-center mobile-slider-scroll">
                    <form action="#" class="flex items-center overflow-hidden bg-white rounded-full shadow-md border border-gray-300 transition-all duration-300" style="min-width:56px;">
                        <button type="button" tabindex="-1" class="flex items-center justify-center p-4 rounded-full bg-white text-gray-700 transition-all duration-300 focus:outline-none">
                            <i data-lucide="search" class="w-6 h-6"></i>
                        </button>
                        <input type="text" placeholder="Cari..." class="search-expand-input w-0 opacity-0 px-0 py-2 text-gray-700 bg-white border-0 rounded-full transition-all duration-300 focus:outline-none group-hover:w-64 group-hover:opacity-100 group-hover:px-4 group-hover:ml-2" style="min-width:0;" autocomplete="off" />
                    </form>
                </div>

                <!-- Button Search Expand on Hover (Icon Right) -->
                <div class="relative group flex items-center mobile-slider-scroll w-full">
                    <form action="#" class="flex items-center overflow-hidden bg-white rounded-full shadow-md border border-gray-300 transition-all duration-300" style="min-width:56px;">
                        <input type="text" placeholder="Cari..." class="search-expand-input w-0 opacity-0 px-0 py-2 text-gray-700 bg-white border-0 rounded-full transition-all duration-300 focus:outline-none group-hover:w-64 group-hover:opacity-100 group-hover:px-4 group-hover:mr-2" style="min-width:0;" autocomplete="off" />
                        <button type="button" tabindex="-1" class="flex items-center justify-center p-4 rounded-full bg-white text-gray-700 transition-all duration-300 focus:outline-none">
                            <i data-lucide="search" class="w-6 h-6"></i>
                        </button>
                    </form>
                </div>

                <!-- Button Slider Hover: Icon Only, Slide Text on Hover -->
                <div class="relative group mobile-slider-scroll slider-hover-desktop slider-hover-icononly">
                    <a href="#" class="flex items-center justify-center p-4 rounded-full bg-blue-500 text-white shadow-md transition-all duration-300 overflow-hidden" style="width:auto; min-width:56px;">
                        <i data-lucide="zap" class="w-6 h-6 transition-all duration-300"></i>
                        <span class="slider-label-icononly max-w-0 overflow-hidden whitespace-nowrap opacity-0 ml-0 slider-hover-desktop-hover:max-w-xs slider-hover-desktop-hover:opacity-100 slider-hover-desktop-hover:ml-3 transition-all duration-300">Slider Hover</span>
                    </a>
                </div>
            </div>
        </section>

    </div>
    </div>
</main>
