<?php
/**
 * @[EazZy Project] Copyright (c) [2025] [EazZy Project] license
 * @https://opensource.org/licenses/MIT MIT License
 * @path public/pages/buttons.php
 * @author EazZy Project
 *
 * File ini berisi konten utama untuk halaman "Variasi Tombol (Buttons)" EazZy Project.
 * Ini mencakup berbagai komponen UI tombol seperti tombol dasar, ukuran, grup, dropdown,
 * tombol dengan efek hover, tombol animasi, tombol link, tombol ikon saja,
 * tombol media sosial, tombol toggle, tombol status, tombol block, tombol minimalis,
 * tombol lingkaran dengan notifikasi, dan tombol search/slider.
 * Konten ini akan di-include oleh page/switch.php.
 */
?>

<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-7xl mx-auto">

        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
                <i data-lucide="pointer" class="w-10 h-10 md:w-12 md:h-12"></i>
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">Buttons</h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">Koleksi lengkap variasi tombol untuk setiap kebutuhan antarmuka Anda.</p>
            </div>
        </div>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Apa itu Tombol (Buttons)?</h2>
            <p class="text-gray-600 leading-relaxed mb-4">
                Tombol adalah salah satu elemen antarmuka pengguna (UI) yang paling fundamental dan sering digunakan dalam pengembangan web dan aplikasi. Fungsinya adalah untuk memungkinkan pengguna berinteraksi dengan sistem, memicu tindakan, atau menavigasi ke bagian lain dari aplikasi. Tombol dapat memiliki berbagai bentuk, ukuran, warna, dan gaya, namun tujuan utamanya tetap sama: memberikan indikasi visual yang jelas tentang aksi yang akan terjadi saat diklik atau disentuh.
            </p>
            <p class="text-gray-600 leading-relaxed">
                Desain tombol yang efektif sangat penting untuk pengalaman pengguna yang baik. Tombol harus mudah ditemukan, jelas dalam fungsinya, dan memberikan umpan balik visual saat berinteraksi (misalnya, efek hover atau klik). Dalam koleksi ini, Anda akan menemukan berbagai variasi tombol yang dirancang untuk memenuhi kebutuhan desain yang beragam, mulai dari tombol dasar hingga tombol dengan efek interaktif dan fungsionalitas khusus.
            </p>
        </section>

        <div class="space-y-12">

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Tombol Dasar & Modern</h2>
            <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex flex-wrap items-center gap-4">
                <button class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-600 transition-colors">Primer</button>
                <button class="bg-green-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-green-600 transition-colors">Sekunder</button>
                <button class="bg-red-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-red-600 transition-colors">Bahaya</button>
                <button class="bg-indigo-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-indigo-600 transition-colors">Info</button>
                <button class="bg-white text-gray-700 font-semibold py-2 px-4 rounded-lg border border-gray-300 hover:bg-gray-100 transition-colors">Netral</button>
                <button class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-full shadow-md hover:bg-blue-600 transition-colors">Bentuk Pil</button>
                <button class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg shadow-lg hover:bg-blue-600 transition-all">Gradient</button>
                <button class="backdrop-blur-md bg-white/30 border border-white/40 text-blue-700 font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-white/50 transition-all">Glass</button>
                <button class="bg-transparent border-2 border-blue-500 text-blue-500 font-semibold py-2 px-4 rounded-lg hover:bg-blue-50 transition-colors">Outline</button>
                <button class="bg-transparent text-gray-700 font-semibold py-2 px-4 rounded-lg hover:bg-gray-100 border border-transparent transition-colors">Ghost</button>
                <button class="bg-purple-500 text-white font-semibold py-2 px-4 rounded-lg shadow-2xl hover:bg-purple-600 transition-colors">Shadow XL</button>
                <button class="bg-pink-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-pink-600 transition-colors relative overflow-hidden ripple">Ripple</button>
                <button class="bg-gray-300 text-gray-500 font-semibold py-2 px-4 rounded-lg shadow-md cursor-not-allowed opacity-60" disabled>Disabled</button>
                <button class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md flex items-center gap-2 hover:bg-blue-600 transition-colors"><svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path></svg>Loading</button>
                <button class="relative bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-600 transition-colors"><span>Inbox</span><span class="absolute -top-2 -right-2 bg-red-500 text-xs text-white rounded-full px-2 py-0.5">5</span></button>
                <button class="bg-green-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md flex items-center gap-2 hover:bg-green-600 transition-colors"><i data-lucide="arrow-left" class="w-5 h-5"></i>Kembali</button>
                <button class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md flex items-center gap-2 hover:bg-blue-600 transition-colors">Lanjut<i data-lucide="arrow-right" class="w-5 h-5"></i></button>
            </div>
        </section>

        <section class="mb-10 md:mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Ukuran & Grup (Bentuk Kotak)</h2>
                <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex flex-wrap items-center gap-4">
                <button class="font-semibold transition-colors flex items-center justify-center gap-2 bg-transparent text-blue-600 border-2 border-blue-600 rounded-sm py-1 px-2 text-xs">Tombol XS</button>
                <button class="font-semibold transition-colors flex items-center justify-center gap-2 bg-transparent text-blue-600 border-2 border-blue-600 rounded-sm py-1.5 px-3 text-sm">Tombol SM</button>
                <button class="font-semibold transition-colors flex items-center justify-center gap-2 bg-transparent text-blue-600 border-2 border-blue-600 rounded-sm py-2 px-4 text-base">Tombol Base</button>
                <button class="font-semibold transition-colors flex items-center justify-center gap-2 bg-transparent text-blue-600 border-2 border-blue-600 rounded-sm py-2.5 px-5 text-lg">Tombol LG</button>
                <button class="font-semibold transition-colors flex items-center justify-center gap-2 bg-transparent text-blue-600 border-2 border-blue-600 rounded-sm py-3 px-6 text-xl">Tombol XL</button>
                </div>
                <div class="flex flex-wrap items-center gap-4 mt-4">
                <div class="inline-flex shadow-sm"><button class="px-4 py-2 text-sm font-medium text-blue-700 bg-white border border-gray-300 rounded-l-sm hover:bg-gray-100">Satu</button><button class="px-4 py-2 text-sm font-medium text-blue-700 bg-white border-t border-b border-gray-300 hover:bg-gray-100">Dua</button><button class="px-4 py-2 text-sm font-medium text-blue-700 bg-white border border-gray-300 rounded-r-sm hover:bg-gray-100">Tiga</button></div>
                </div>
        </section>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Dropdown & Grup Aksi CRUD</h2>
            <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex flex-wrap items-center gap-6">
                <div class="relative inline-block text-left dropdown-wrapper group">
                    <button type="button" class="dropdown-toggle inline-flex w-full justify-center gap-x-1.5 rounded-lg bg-white px-4 py-2 text-sm font-semibold text-gray-900 shadow-md border border-gray-200 hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-400 transition-all">
                        Opsi
                        <i data-lucide="chevron-down" class="w-5 h-5 -mr-1"></i>
                    </button>
                    <div class="dropdown-menu dropdown-animated absolute left-0 md:right-0 md:left-auto z-20 mt-2 min-w-40 w-56 origin-top-right rounded-xl bg-white shadow-2xl ring-1 ring-blue-200 ring-opacity-60 overflow-hidden border border-blue-100">
                        <a href="#" class="flex items-center gap-2 px-4 py-2 text-sm text-blue-700 hover:bg-blue-50 transition-colors"><i data-lucide="edit-3" class="w-4 h-4"></i>Edit</a>
                        <a href="#" class="flex items-center gap-2 px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition-colors"><i data-lucide="trash-2" class="w-4 h-4"></i>Hapus</a>
                    </div>
                </div>
                <div class="relative inline-block text-left dropdown-wrapper group">
                    <button type="button" class="dropdown-toggle inline-flex items-center gap-2 rounded-lg bg-blue-600 px-4 py-2 text-sm font-semibold text-white shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 transition-all">
                        <i data-lucide="save" class="h-5 w-5"></i>
                        <span>Simpan</span>
                        <i data-lucide="chevron-down" class="h-5 w-5"></i>
                    </button>
                    <div class="dropdown-menu dropdown-animated absolute left-0 md:right-0 md:left-auto z-20 mt-2 min-w-40 w-56 origin-top-right rounded-xl bg-white shadow-2xl ring-1 ring-blue-200 ring-opacity-60 overflow-hidden border border-blue-100">
                        <a href="#" class="flex items-center gap-2 px-4 py-2 text-sm text-blue-700 hover:bg-blue-50 transition-colors"><i data-lucide="check-circle" class="w-4 h-4"></i>Simpan & Publikasi</a>
                    </div>
                </div>
                <div class="relative inline-block text-left dropdown-wrapper group">
                    <button type="button" class="dropdown-toggle p-2 rounded-full bg-white text-gray-500 hover:bg-gray-100 border border-gray-200 shadow-md focus:outline-none focus:ring-2 focus:ring-blue-400 transition-all">
                        <i data-lucide="more-vertical" class="w-5 h-5"></i>
                    </button>
                    <div class="dropdown-menu dropdown-animated absolute left-0 md:right-0 md:left-auto z-20 mt-2 min-w-40 w-56 origin-top-right rounded-xl bg-white shadow-2xl ring-1 ring-blue-200 ring-opacity-60 overflow-hidden border border-blue-100">
                        <a href="#" class="flex items-center gap-2 px-4 py-2 text-sm text-blue-700 hover:bg-blue-50 transition-colors"><i data-lucide="eye" class="w-4 h-4"></i>Lihat Detail</a>
                    </div>
                </div>
        </section>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Tombol dengan Efek Hover</h2>
            <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex flex-wrap items-center gap-4">
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
                <button class="btn-hover-gradient bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg flex items-center justify-center gap-2">Gradient Hover</button>
                <button class="btn-hover-glass bg-white/30 border border-white/40 text-blue-700 backdrop-blur-md font-semibold py-2 px-4 rounded-lg flex items-center justify-center gap-2">Glass Hover</button>
                <button class="btn-hover-pulse bg-red-500 text-white font-semibold py-2 px-4 rounded-lg flex items-center justify-center gap-2">Pulse</button>
                <button class="btn-hover-wobble bg-blue-900 text-white font-semibold py-2 px-4 rounded-lg flex items-center justify-center gap-2">Wobble</button>
                <button class="btn-hover-bounce bg-green-700 text-white font-semibold py-2 px-4 rounded-lg flex items-center justify-center gap-2">Bounce</button>
            </div>
        </section>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Tombol Link</h2>
            <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex flex-wrap items-center gap-4">
                <a href="#" class="inline-block bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-700 transition-colors">Link Primer</a>
                <a href="#" class="inline-block bg-transparent border-2 border-blue-600 text-blue-600 font-semibold py-2 px-4 rounded-lg hover:bg-blue-50 transition-colors">Link Outline</a>
                <a href="#" class="inline-block underline text-blue-600 font-semibold py-2 px-4 hover:text-blue-800 transition-colors">Link Underline</a>
                <a href="#" class="inline-block text-gray-600 font-semibold py-2 px-4 hover:text-blue-600 transition-colors">Link Minimal</a>
            </div>
        </section>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Tombol Icon Only</h2>
            <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex flex-wrap items-center gap-4">
                <button class="p-3 rounded-full bg-blue-600 text-white shadow-md hover:bg-blue-700 transition-colors"><i data-lucide="plus" class="w-5 h-5"></i></button>
                <button class="p-3 rounded-full bg-green-600 text-white shadow-md hover:bg-green-700 transition-colors"><i data-lucide="check" class="w-5 h-5"></i></button>
                <button class="p-3 rounded-full bg-red-600 text-white shadow-md hover:bg-red-700 transition-colors"><i data-lucide="x" class="w-5 h-5"></i></button>
                <button class="p-3 rounded-full bg-gray-200 text-gray-700 shadow-md hover:bg-gray-300 transition-colors"><i data-lucide="search" class="w-5 h-5"></i></button>
            </div>
        </section>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Tombol Social Media</h2>
            <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex flex-wrap items-center gap-4">
                <a href="#" class="flex items-center gap-2 bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-800 transition-colors"><i data-lucide="facebook" class="w-5 h-5"></i>Facebook</a>
                <a href="#" class="flex items-center gap-2 bg-sky-400 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-sky-500 transition-colors"><i data-lucide="twitter" class="w-5 h-5"></i>Twitter</a>
                <a href="#" class="flex items-center gap-2 bg-pink-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-pink-600 transition-colors"><i data-lucide="instagram" class="w-5 h-5"></i>Instagram</a>
                <a href="#" class="flex items-center gap-2 bg-gray-900 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-gray-800 transition-colors"><i data-lucide="github" class="w-6 h-6"></i>GitHub</a>
            </div>
        </section>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Tombol Toggle (Aktif/Nonaktif)</h2>
            <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex flex-wrap items-center gap-4">
                <button class="bg-green-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-green-700 transition-colors">Aktif</button>
                <button class="bg-gray-300 text-gray-500 font-semibold py-2 px-4 rounded-lg shadow-md">Nonaktif</button>
                <button class="bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-700 transition-colors">ON</button>
                <button class="bg-gray-200 text-gray-500 font-semibold py-2 px-4 rounded-lg shadow-md">OFF</button>
            </div>
        </section>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Tombol Status</h2>
            <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex flex-wrap items-center gap-4">
                <button class="bg-green-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-green-600 transition-colors">Success</button>
                <button class="bg-yellow-400 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-yellow-500 transition-colors">Warning</button>
                <button class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-600 transition-colors">Info</button>
                <button class="bg-red-500 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-red-600 transition-colors">Error</button>
            </div>
        </section>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Tombol Block / Full Width</h2>
            <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex flex-col items-stretch gap-4">
                <button class="w-full bg-blue-600 text-white font-semibold py-3 px-4 rounded-lg shadow-md hover:bg-blue-700 transition-colors">Block Button</button>
                <button class="w-full bg-linear-to-r from-green-400 to-blue-500 text-white font-semibold py-3 px-4 rounded-lg shadow-lg hover:from-green-500 hover:to-blue-600 transition-all">Block Gradient</button>
            </div>
        </section>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Tombol Minimalis</h2>
            <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex flex-wrap items-center gap-4">
                <button class="bg-transparent text-blue-600 font-semibold py-2 px-4 rounded hover:bg-blue-50 transition-colors">Minimalis</button>
                <button class="bg-transparent text-gray-600 font-semibold py-2 px-4 rounded hover:bg-gray-100 transition-colors">Minimalis 2</button>
                <button class="bg-transparent text-red-600 font-semibold py-2 px-4 rounded hover:bg-red-50 transition-colors">Minimalis Danger</button>
            </div>
        </section>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Button Link Lingkaran dengan Notifikasi</h2>
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

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Button Icon Media Sosial dengan Tooltip Slider</h2>
            <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex flex-wrap items-center gap-6">
                <div class="relative group">
                    <a href="#" class="flex items-center justify-center p-4 rounded-full bg-blue-700 text-white shadow-md hover:bg-blue-800 transition-colors">
                        <i data-lucide="facebook" class="w-6 h-6"></i>
                    </a>
                    <span class="social-tooltip bg-blue-700 text-white">Facebook</span>
                </div>
                <div class="relative group">
                    <a href="#" class="flex items-center justify-center p-4 rounded-full bg-sky-400 text-white shadow-md hover:bg-sky-500 transition-colors">
                        <i data-lucide="twitter" class="w-6 h-6"></i>
                    </a>
                    <span class="social-tooltip bg-sky-400 text-white">Twitter</span>
                </div>
                <div class="relative group">
                    <a href="#" class="flex items-center justify-center p-4 rounded-full bg-pink-500 text-white shadow-md hover:bg-pink-600 transition-colors">
                        <i data-lucide="instagram" class="w-6 h-6"></i>
                    </a>
                    <span class="social-tooltip bg-pink-500 text-white">Instagram</span>
                </div>
                <div class="relative group">
                    <a href="#" class="flex items-center justify-center p-4 rounded-full bg-gray-900 text-white shadow-md hover:bg-gray-800 transition-colors">
                        <i data-lucide="github" class="w-6 h-6"></i>
                    </a>
                    <span class="social-tooltip bg-gray-900 text-white">GitHub</span>
                </div>
            </div>
        </section>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Search & Slider Buttons</h2>
            <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm flex flex-col gap-6">
                <div class="relative group flex items-center mobile-slider-scroll w-full md:w-auto">
                    <form action="#" class="flex items-center bg-white rounded-full shadow-md border border-gray-300 transition-all duration-300
                        h-[56px] overflow-hidden desktop-expandable-form">
                        <button type="button" tabindex="-1" class="shrink-0 flex items-center justify-center p-4 rounded-full bg-white text-gray-700 transition-all duration-300 focus:outline-none">
                            <i data-lucide="search" class="w-6 h-6"></i>
                        </button>
                        <input type="text" placeholder="Cari..." class="search-expand-input w-0 opacity-0 px-0 py-2 text-gray-700 bg-white border-0 rounded-full transition-all duration-300 focus:outline-none
                            grow" autocomplete="off" />
                    </form>
                </div>

                <div class="relative group flex items-center mobile-slider-scroll w-full justify-end search-form-right">
                    <form action="#" class="flex items-center overflow-hidden bg-white rounded-full shadow-md border border-gray-300 transition-all duration-300
                        h-[56px] desktop-expandable-form">
                        <input type="text" placeholder="Cari..." class="search-expand-input w-0 opacity-0 px-0 py-2 text-gray-700 bg-white border-0 rounded-full transition-all duration-300 focus:outline-none
                            grow" autocomplete="off" />
                        <button type="button" tabindex="-1" class="shrink-0 flex items-center justify-center p-4 rounded-full bg-white text-gray-700 transition-all duration-300 focus:outline-none">
                            <i data-lucide="search" class="w-6 h-6"></i>
                        </button>
                    </form>
                </div>

                <div class="relative group mobile-slider-scroll slider-hover-desktop slider-hover-icononly">
                    <a href="#" class="flex items-center justify-center p-4 rounded-full bg-blue-500 text-white shadow-md transition-all duration-300 overflow-hidden min-w-[56px]">
                        <i data-lucide="zap" class="w-6 h-6 transition-all duration-300"></i>
                        <span class="slider-label-icononly max-w-0 overflow-hidden whitespace-nowrap opacity-0 ml-0 slider-hover-desktop-hover:max-w-xs slider-hover-desktop-hover:opacity-100 slider-hover-desktop-hover:ml-3 transition-all duration-300">Slider Hover</span>
                    </a>
                </div>
            </div>
        </section>
    </div>
</main>