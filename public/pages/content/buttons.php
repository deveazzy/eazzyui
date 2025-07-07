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

            <!-- 1. Variasi Tombol Dasar -->
            <section>
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Variasi Tombol Dasar</h2>
                <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex flex-wrap items-center gap-4">
                    <button class="bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-700 transition-colors">Primer</button>
                    <button class="bg-green-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-green-700 transition-colors">Sekunder</button>
                    <button class="bg-red-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-red-700 transition-colors">Bahaya</button>
                    <button class="bg-indigo-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-indigo-700 transition-colors">Info</button>
                    <button class="bg-white text-gray-700 font-semibold py-2 px-4 rounded-lg border border-gray-300 hover:bg-gray-100 transition-colors">Netral</button>
                    <button class="bg-blue-600 text-white font-semibold py-2 px-4 rounded-full shadow-md hover:bg-blue-700 transition-colors">Bentuk Pil</button>
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
                    <div class="relative inline-block text-left dropdown-wrapper"><button type="button" class="dropdown-toggle inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Opsi<i data-lucide="chevron-down" class="w-5 h-5 -mr-1"></i></button><div class="dropdown-menu absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5"><a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100">Edit</a><a href="#" class="text-red-600 block px-4 py-2 text-sm hover:bg-gray-100">Hapus</a></div></div>
                    <div class="relative inline-block text-left dropdown-wrapper"><button type="button" class="dropdown-toggle inline-flex items-center gap-2 rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-700"><i data-lucide="save" class="h-5 w-5"></i><span>Simpan</span><i data-lucide="chevron-down" class="h-5 w-5"></i></button><div class="dropdown-menu absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5"><a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100">Simpan & Publikasi</a></div></div>
                    <div class="relative inline-block text-left dropdown-wrapper"><button type="button" class="dropdown-toggle p-2 rounded-full bg-white text-gray-500 hover:bg-gray-100 ring-1 ring-gray-200"><i data-lucide="more-vertical" class="w-5 h-5"></i></button><div class="dropdown-menu absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5"><a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100">Lihat Detail</a></div></div>
                </div>
                <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm mt-6 flex flex-wrap items-center gap-4">
                    <button class="inline-flex items-center gap-2 bg-green-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-green-700 transition-colors"><i data-lucide="plus" class="w-5 h-5"></i><span>Tambah</span></button>
                    <button class="inline-flex items-center gap-2 bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-700 transition-colors"><i data-lucide="eye" class="w-5 h-5"></i><span>Lihat</span></button>
                    <button class="inline-flex items-center gap-2 bg-yellow-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-yellow-600 transition-colors"><i data-lucide="edit" class="w-5 h-5"></i><span>Edit</span></button>
                    <button class="inline-flex items-center gap-2 bg-red-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-red-700 transition-colors"><i data-lucide="trash-2" class="w-5 h-5"></i><span>Hapus</span></button>
                </div>
            </section>
            
            <!-- 4. Tombol dengan Efek Hover -->
            <section>
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Tombol dengan Efek Hover</h2>
                <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex flex-wrap items-center gap-4">
                    <?php 
                        $hover_buttons = [
                            ['label' => 'Pop', 'class' => 'btn-hover-pop bg-blue-600 text-white'],
                            ['label' => 'Glow Biru', 'class' => 'btn-hover-glow-blue bg-blue-600 text-white'],
                            ['label' => 'Isi', 'class' => 'btn-hover-fill-up bg-green-600 text-white relative overflow-hidden'],
                            ['label' => 'Pop Hijau', 'class' => 'btn-hover-pop bg-green-600 text-white'],
                            ['label' => 'Glow Hijau', 'class' => 'btn-hover-glow-green bg-green-600 text-white'],
                            ['label' => 'Glow Merah', 'class' => 'btn-hover-glow-red bg-red-600 text-white'],
                            ['label' => 'Glow Kuning', 'class' => 'btn-hover-glow-yellow bg-yellow-500 text-white'],
                            ['label' => 'Icon Putar', 'class' => 'btn-hover-icon-spin bg-indigo-600 text-white', 'icon' => 'refresh-cw'],
                            ['label' => 'Icon Lompat', 'class' => 'btn-hover-icon-bounce bg-indigo-600 text-white', 'icon' => 'navigation'],
                        ];

                        foreach ($hover_buttons as $btn) {
                            $icon_html = isset($btn['icon']) ? "<i data-lucide='{$btn['icon']}' class='w-5 h-5'></i>" : '';
                            echo "<button class='btn-hover font-semibold py-2 px-4 rounded-lg flex items-center justify-center gap-2 {$btn['class']}'>{$icon_html}<span>{$btn['label']}</span></button>";
                        }
                    ?>
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

        </div>
    </div>
</main>
