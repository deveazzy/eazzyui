<?php
/**
 * @[EazZy Project] Copyright (c) [2025] [EazZy Project] license
 * @https://opensource.org/licenses/MIT MIT License
 * @path public/pages/widgets.php
 * @author EazZy Project
 *
 * Halaman baru untuk menampilkan berbagai komponen widget.
 * Versi ini adalah kreasi ulang total dengan daftar widget yang lebih kaya dan menarik.
 */
?>

<style>
    /* Efek hover yang lebih halus untuk semua kartu widget */
    .widget-card {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        background-color: #fff;
        border: 1px solid #e5e7eb; /* gray-200 */
    }
    .widget-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px -5px rgba(59, 130, 246, 0.1), 0 8px 10px -6px rgba(59, 130, 246, 0.08);
    }

    /* Style untuk progress bar performa situs */
    .performance-ring {
        transform: rotate(-90deg);
    }
    .performance-ring circle {
        transition: stroke-dashoffset 1.5s cubic-bezier(0.25, 1, 0.5, 1);
    }

    /* Style untuk widget musik */
    .music-progress-bar-bg { background-color: rgba(255, 255, 255, 0.3); overflow: hidden; }
    .music-progress-bar-fg { background-color: #fff; height: 100%; width: 0%; transition: width 1s linear; }
    .music-player.playing .music-progress-bar-fg { width: 100%; }

    /* Efek untuk tombol kirim */
    .form-widget button.is-sending {
        cursor: not-allowed;
        background-color: #16a34a; /* green-600 */
    }
</style>

<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-7xl mx-auto">

        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
                <i data-lucide="layout-grid" class="w-10 h-10 md:w-12 md:h-12"></i>
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">Dasbor Widget</h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">Selamat datang kembali! Berikut adalah ringkasan aktivitas Anda.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 pt-10 "> <div class="lg:col-span-3 widget-card p-6 rounded-lg animated-on-scroll animated-fade-in-up">
                <div class="flex items-center justify-between">
                    <h3 class="text-base font-semibold text-gray-500">Pendapatan</h3>
                    <div class="p-2 bg-blue-100 rounded-full"><i data-lucide="dollar-sign" class="w-6 h-6 text-blue-600"></i></div>
                </div>
                <p class="text-3xl font-bold text-gray-900 mt-4">Rp 1.2 M</p>
            </div>

            <div class="lg:col-span-3 widget-card p-6 rounded-lg animated-on-scroll animated-fade-in-up delay-100">
                <div class="flex items-center justify-between">
                    <h3 class="text-base font-semibold text-gray-500">User Baru</h3>
                    <div class="p-2 bg-green-100 rounded-full"><i data-lucide="users" class="w-6 h-6 text-green-600"></i></div>
                </div>
                <p class="text-3xl font-bold text-gray-900 mt-4">3,452</p>
            </div>

            <div class="lg:col-span-6 widget-card p-6 rounded-lg flex items-center animated-on-scroll animated-fade-in-up delay-200 performance-widget" data-score="92">
                <div class="w-2/3">
                    <h3 class="text-lg font-semibold text-gray-900">Performa Situs Web</h3>
                    <p class="text-sm text-gray-500">Rata-rata waktu muat: <span class="font-bold text-gray-700">1.2s</span></p>
                    <p class="text-sm text-gray-500">Uptime: <span class="font-bold text-green-600">99.98%</span></p>
                </div>
                <div class="w-1/3 flex justify-center items-center">
                    <div class="relative w-24 h-24">
                        <svg class="performance-ring w-full h-full" viewBox="0 0 36 36">
                            <circle class="stroke-current text-gray-200" cx="18" cy="18" r="15.915" fill="none" stroke-width="3"></circle>
                            <circle class="performance-progress-bar stroke-current text-blue-600" cx="18" cy="18" r="15.915" fill="none" stroke-width="3" stroke-dasharray="100, 100" stroke-dashoffset="100"></circle>
                        </svg>
                        <div class="absolute inset-0 flex items-center justify-center text-xl font-bold text-blue-600 performance-text">0%</div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-4 widget-card p-6 rounded-lg text-center flex flex-col items-center animated-on-scroll animated-zoom-in delay-300">
                <img class="h-24 w-24 rounded-full mx-auto border-4 border-blue-200" src="https://i.pravatar.cc/150?u=a042581f4e29026704d" alt="User avatar">
                <h3 class="text-xl font-bold mt-4">Andi Wijaya</h3>
                <p class="text-sm text-gray-500">Administrator</p>
                <div class="mt-4  w-full pt-4 flex justify-around">
                    <button class="text-blue-600 hover:text-blue-800"><i data-lucide="user-cog" class="w-6 h-6"></i></button>
                    <button class="text-blue-600 hover:text-blue-800"><i data-lucide="mail" class="w-6 h-6"></i></button>
                    <button class="text-red-500 hover:text-red-700"><i data-lucide="log-out" class="w-6 h-6"></i></button>
                </div>
            </div>

            <div class="lg:col-span-4 widget-card p-6 rounded-lg animated-on-scroll animated-zoom-in delay-400">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Media Sosial</h3>
                <div class="space-y-3">
                    <div class="flex items-center"><i data-lucide="twitter" class="w-6 h-6 text-sky-500 mr-4"></i><span class="font-medium">12.8k</span><span class="ml-1 text-gray-500">Pengikut</span></div>
                    <div class="flex items-center"><i data-lucide="instagram" class="w-6 h-6 text-pink-500 mr-4"></i><span class="font-medium">25.3k</span><span class="ml-1 text-gray-500">Pengikut</span></div>
                    <div class="flex items-center"><i data-lucide="facebook" class="w-6 h-6 text-blue-800 mr-4"></i><span class="font-medium">8.1k</span><span class="ml-1 text-gray-500">Suka</span></div>
                </div>
            </div>

            <div class="lg:col-span-4 widget-card music-player bg-gray-800 text-white p-6 rounded-lg flex items-center space-x-4 animated-on-scroll animated-zoom-in delay-500">
                <img class="h-16 w-16 rounded-md" src="https://placehold.co/80x80/1f2937/ffffff?text=Song" alt="Album Art">
                <div class="flex-1">
                    <h4 class="font-semibold">Melodi Senja</h4>
                    <p class="text-sm text-gray-400">Instrumen Relaksasi</p>
                    <div class="music-progress-bar-bg w-full h-1.5 rounded-full mt-2"><div class="music-progress-bar-fg rounded-full"></div></div>
                </div>
                <button class="play-pause-btn text-gray-300 hover:text-white"><i data-lucide="play-circle" class="w-10 h-10"></i></button>
            </div>

            <div class="lg:col-span-6 widget-card rounded-lg overflow-hidden animated-on-scroll animated-slide-in-left delay-300">
                <div class="relative w-full aspect-[16/9]">
                    <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/a8-yGm49kqk?si=WAogVvmGVM40ZC6C" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>

            <div class="lg:col-span-6 grid grid-cols-2 gap-8">
                <div class="col-span-1 widget-card rounded-lg overflow-hidden relative animated-on-scroll animated-slide-in-right delay-400">
                    <img src="https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?q=80&w=1920&auto=format&fit=crop" class="w-full h-full object-cover" alt="Featured Image">
                    <div class="absolute bottom-0 left-0 bg-gradient-to-t from-black/60 to-transparent w-full p-4">
                        <h4 class="font-bold text-white">Pemandangan Alam</h4>
                        <p class="text-xs text-gray-200">Diambil pada 4 Juli 2025</p>
                    </div>
                </div>
                <div class="col-span-1 widget-card p-6 rounded-lg animated-on-scroll animated-slide-in-right delay-500">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Aksi Cepat</h3>
                    <div class="grid grid-cols-2 gap-4 text-center">
                        <a href="#" class="p-4 bg-blue-50 hover:bg-blue-100 rounded-lg"><i data-lucide="plus-circle" class="w-8 h-8 mx-auto text-blue-600"></i><span class="text-xs mt-2 block font-medium">Tambah Post</span></a>
                        <a href="#" class="p-4 bg-green-50 hover:bg-green-100 rounded-lg"><i data-lucide="bar-chart-2" class="w-8 h-8 mx-auto text-green-600"></i><span class="text-xs mt-2 block font-medium">Lihat Laporan</span></a>
                        <a href="#" class="p-4 bg-gray-100 hover:bg-gray-200 rounded-lg"><i data-lucide="settings" class="w-8 h-8 mx-auto text-gray-600"></i><span class="text-xs mt-2 block font-medium">Pengaturan</span></a>
                        <a href="#" class="p-4 bg-gray-100 hover:bg-gray-200 rounded-lg"><i data-lucide="users" class="w-8 h-8 mx-auto text-gray-600"></i><span class="text-xs mt-2 block font-medium">Manajemen User</span></a>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-6 widget-card p-6 rounded-lg form-widget animated-on-scroll animated-fade-in-up delay-600">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Kirim Pesan Cepat</h3>
                <form class="space-y-4" onsubmit="return false;">
                    <input type="email" placeholder="Email tujuan" class="w-full p-2 border border-gray-300 rounded-md text-sm">
                    <textarea placeholder="Tulis pesan Anda di sini..." rows="4" class="w-full p-2 border border-gray-300 rounded-md text-sm"></textarea>
                    <button type="submit" class="w-full bg-blue-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors duration-200 flex items-center justify-center">
                        <span class="btn-text">Kirim Email</span>
                        <i data-lucide="send" class="w-4 h-4 ml-2"></i>
                    </button>
                </form>
            </div>

            <div class="lg:col-span-6 widget-card p-6 rounded-lg animated-on-scroll animated-fade-in-up delay-700">
                 <h3 class="text-lg font-semibold text-gray-900 mb-4">Tim Support Online</h3>
                 <ul class="space-y-4">
                    <li class="flex items-center space-x-4">
                        <div class="relative">
                            <img class="h-10 w-10 rounded-full" src="https://i.pravatar.cc/80?u=i" alt="Support 1">
                            <span class="absolute bottom-0 right-0 block h-2.5 w-2.5 rounded-full bg-green-500 ring-2 ring-white"></span>
                        </div>
                        <div class="flex-1"><p class="font-medium text-gray-800">Dewi Lestari</p><p class="text-sm text-gray-500">Spesialis Produk</p></div>
                        <button class="text-sm text-blue-600 font-semibold hover:underline">Chat</button>
                    </li>
                    <li class="flex items-center space-x-4">
                        <div class="relative">
                            <img class="h-10 w-10 rounded-full" src="https://i.pravatar.cc/80?u=j" alt="Support 2">
                            <span class="absolute bottom-0 right-0 block h-2.5 w-2.5 rounded-full bg-green-500 ring-2 ring-white"></span>
                        </div>
                        <div class="flex-1"><p class="font-medium text-gray-800">Bambang Susilo</p><p class="text-sm text-gray-500">Dukungan Teknis</p></div>
                        <button class="text-sm text-blue-600 font-semibold hover:underline">Chat</button>
                    </li>
                     <li class="flex items-center space-x-4">
                        <div class="relative">
                            <img class="h-10 w-10 rounded-full" src="https://i.pravatar.cc/80?u=k" alt="Support 3">
                            <span class="absolute bottom-0 right-0 block h-2.5 w-2.5 rounded-full bg-gray-400 ring-2 ring-white"></span>
                        </div>
                        <div class="flex-1"><p class="font-medium text-gray-800">Citra Kirana</p><p class="text-sm text-gray-500">Manajer Akun</p></div>
                        <button class="text-sm text-gray-400 font-semibold cursor-not-allowed">Offline</button>
                    </li>
                 </ul>
            </div>
        </div>
    </div>
</main>