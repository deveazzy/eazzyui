<?php
/**
 * page/content/tabs.php
 *
 * File ini berisi konten untuk halaman komponen "Tabs".
 * Konten ini akan di-include oleh page/switch.php.
 */
?>
<!-- Kontainer utama untuk konten halaman -->
<main class="flex-1 w-full bg-gray-50">
    <!-- Bagian Atas Halaman (Hero) -->
    <div class="bg-white">
        <div class="relative isolate">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#6ee7b7] to-[#60a5fa] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <div class="container mx-auto px-6 md:px-10 py-20 text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight">Tabs</h1>
                <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600">
                    Contoh komponen tab yang interaktif untuk mengorganisir konten secara efisien dalam berbagai gaya dan tema.
                </p>
            </div>
        </div>
    </div>

    <!-- Kontainer untuk semua contoh tab -->
    <div class="container mx-auto px-6 md:px-10 py-12">
        <div class="space-y-12">

            <!-- 1. Gaya Tab Standar (Garis Bawah) -->
            <section id="default-tabs">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
                    <i data-lucide="minus" class="w-6 h-6 text-blue-600"></i>
                    Gaya Standar (Garis Bawah)
                </h2>
                <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                    <div class="border-b border-gray-200">
                        <nav class="-mb-px flex space-x-8" aria-label="Tabs" data-tab-group="group1">
                            <button class="tab-button active group inline-flex items-center py-4 px-1 border-b-2 font-medium text-sm text-blue-600 border-blue-500" data-tab-target="#profil">
                                <i data-lucide="user-circle" class="-ml-0.5 mr-2 h-5 w-5"></i>
                                <span>Profil</span>
                            </button>
                            <button class="tab-button group inline-flex items-center py-4 px-1 border-b-2 font-medium text-sm text-gray-500 hover:text-gray-700 hover:border-gray-300 border-transparent" data-tab-target="#pengaturan">
                                <i data-lucide="settings" class="-ml-0.5 mr-2 h-5 w-5"></i>
                                <span>Pengaturan</span>
                            </button>
                            <button class="tab-button group inline-flex items-center py-4 px-1 border-b-2 font-medium text-sm text-gray-500 hover:text-gray-700 hover:border-gray-300 border-transparent" data-tab-target="#notifikasi">
                                <i data-lucide="bell" class="-ml-0.5 mr-2 h-5 w-5"></i>
                                <span>Notifikasi</span>
                            </button>
                        </nav>
                    </div>
                    <div class="pt-6" data-tab-group="group1">
                        <div id="profil" class="tab-panel active"><h3 class="text-lg font-medium text-gray-900">Konten Profil</h3><p class="mt-2 text-gray-600">Ini adalah konten untuk tab profil. Anda dapat menempatkan informasi pengguna, avatar, dan detail lainnya di sini.</p></div>
                        <div id="pengaturan" class="tab-panel"><h3 class="text-lg font-medium text-gray-900">Konten Pengaturan</h3><p class="mt-2 text-gray-600">Ini adalah konten untuk tab pengaturan. Formulir untuk mengubah preferensi, kata sandi, atau tema dapat ditempatkan di sini.</p></div>
                        <div id="notifikasi" class="tab-panel"><h3 class="text-lg font-medium text-gray-900">Konten Notifikasi</h3><p class="mt-2 text-gray-600">Ini adalah konten untuk tab notifikasi. Daftar pemberitahuan terbaru atau pengaturan notifikasi bisa ditampilkan di sini.</p></div>
                    </div>
                </div>
            </section>

            <!-- 2. Gaya Tab Pil dengan Indikator Geser -->
            <section id="pill-tabs">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
                    <i data-lucide="move-horizontal" class="w-6 h-6 text-green-600"></i>
                    Gaya Pil dengan Indikator Geser
                </h2>
                <div class="space-y-8">
                    <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                        <h3 class="text-lg font-semibold mb-4 text-gray-800">Tema Biru</h3>
                        <nav class="pill-nav-container flex space-x-2 bg-blue-100 p-1 rounded-lg" aria-label="Tabs" data-tab-group="group2">
                            <div class="sliding-indicator"></div>
                            <button class="tab-button active flex-1 text-center px-3 py-2 rounded-md text-sm font-medium text-blue-700" data-tab-target="#biru-tab1">Tab 1</button>
                            <button class="tab-button flex-1 text-center px-3 py-2 rounded-md text-sm font-medium text-blue-700" data-tab-target="#biru-tab2">Tab 2</button>
                            <button class="tab-button flex-1 text-center px-3 py-2 rounded-md text-sm font-medium text-blue-700" data-tab-target="#biru-tab3">Tab 3</button>
                        </nav>
                        <div class="mt-4" data-tab-group="group2">
                            <div id="biru-tab1" class="tab-panel active"><p class="text-gray-600">Konten untuk Tab 1 (Biru).</p></div>
                            <div id="biru-tab2" class="tab-panel"><p class="text-gray-600">Konten untuk Tab 2 (Biru).</p></div>
                            <div id="biru-tab3" class="tab-panel"><p class="text-gray-600">Konten untuk Tab 3 (Biru).</p></div>
                        </div>
                    </div>
                     <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                        <h3 class="text-lg font-semibold mb-4 text-gray-800">Tema Hijau</h3>
                        <nav class="pill-nav-container green flex space-x-2 bg-green-100 p-1 rounded-lg" aria-label="Tabs" data-tab-group="group3">
                            <div class="sliding-indicator"></div>
                            <button class="tab-button active flex-1 text-center px-3 py-2 rounded-md text-sm font-medium text-white" data-tab-target="#hijau-tab1">Tab 1</button>
                            <button class="tab-button flex-1 text-center px-3 py-2 rounded-md text-sm font-medium text-green-800" data-tab-target="#hijau-tab2">Tab 2</button>
                            <button class="tab-button flex-1 text-center px-3 py-2 rounded-md text-sm font-medium text-green-800" data-tab-target="#hijau-tab3">Tab 3</button>
                        </nav>
                        <div class="mt-4" data-tab-group="group3">
                            <div id="hijau-tab1" class="tab-panel active"><p class="text-gray-600">Konten untuk Tab 1 (Hijau).</p></div>
                            <div id="hijau-tab2" class="tab-panel"><p class="text-gray-600">Konten untuk Tab 2 (Hijau).</p></div>
                            <div id="hijau-tab3" class="tab-panel"><p class="text-gray-600">Konten untuk Tab 3 (Hijau).</p></div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- 3. Gaya Tab Vertikal dengan Ikon -->
            <section id="vertical-tabs">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
                    <i data-lucide="panel-left" class="w-6 h-6 text-gray-800"></i>
                    Gaya Vertikal dengan Ikon
                </h2>
                <div class="bg-white rounded-lg border border-gray-200 shadow-sm">
                    <div class="flex flex-col md:flex-row">
                        <nav class="flex flex-row md:flex-col md:w-1/4 border-b md:border-b-0 md:border-r border-gray-200 p-2" aria-label="Tabs" data-tab-group="group5">
                            <button class="tab-button active group flex items-center w-full text-left px-3 py-2 rounded-md text-sm font-medium text-blue-700 bg-blue-50" data-tab-target="#vertikal-tab1">
                                <i data-lucide="user" class="mr-3 h-5 w-5"></i><span>Profil</span>
                            </button>
                            <button class="tab-button group flex items-center w-full text-left px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-900" data-tab-target="#vertikal-tab2">
                                <i data-lucide="shield" class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"></i><span>Keamanan</span>
                            </button>
                            <button class="tab-button group flex items-center w-full text-left px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-900" data-tab-target="#vertikal-tab3">
                                <i data-lucide="credit-card" class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"></i><span>Tagihan</span>
                            </button>
                        </nav>
                        <div class="md:w-3/4 p-6" data-tab-group="group5">
                            <div id="vertikal-tab1" class="tab-panel active"><h3 class="text-lg font-medium text-gray-900">Detail Profil</h3><p class="mt-2 text-gray-600">Konten untuk Tab Vertikal 1. Gaya ini cocok untuk navigasi sekunder atau halaman pengaturan yang kompleks.</p></div>
                            <div id="vertikal-tab2" class="tab-panel"><h3 class="text-lg font-medium text-gray-900">Ubah Kata Sandi</h3><p class="mt-2 text-gray-600">Konten untuk Tab Vertikal 2. Memisahkan navigasi dan konten secara horizontal dapat meningkatkan fokus pengguna.</p></div>
                            <div id="vertikal-tab3" class="tab-panel"><h3 class="text-lg font-medium text-gray-900">Riwayat Pembayaran</h3><p class="mt-2 text-gray-600">Konten untuk Tab Vertikal 3. Pastikan lebar navigasi cukup untuk keterbacaan pada semua perangkat.</p></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- 4. Gaya Segmented Control -->
            <section id="segmented-control-tabs">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
                    <i data-lucide="split" class="w-6 h-6 text-gray-800"></i>
                    Gaya Segmented Control
                </h2>
                <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
                    <h3 class="text-lg font-semibold mb-4 text-gray-800">Tema Netral</h3>
                    <div class="max-w-md mx-auto">
                        <nav class="pill-nav-container dark flex space-x-1 bg-gray-200 p-1 rounded-lg" aria-label="Tabs" data-tab-group="group7">
                            <div class="sliding-indicator"></div>
                            <button class="tab-button active flex-1 text-center px-3 py-2 rounded-md text-sm font-medium text-white" data-tab-target="#seg-tab1">Harian</button>
                            <button class="tab-button flex-1 text-center px-3 py-2 rounded-md text-sm font-medium text-gray-600" data-tab-target="#seg-tab2">Mingguan</button>
                            <button class="tab-button flex-1 text-center px-3 py-2 rounded-md text-sm font-medium text-gray-600" data-tab-target="#seg-tab3">Bulanan</button>
                        </nav>
                    </div>
                    <div class="mt-4 text-center" data-tab-group="group7">
                        <div id="seg-tab1" class="tab-panel active"><p class="text-gray-600">Menampilkan data harian.</p></div>
                        <div id="seg-tab2" class="tab-panel"><p class="text-gray-600">Menampilkan data mingguan.</p></div>
                        <div id="seg-tab3" class="tab-panel"><p class="text-gray-600">Menampilkan data bulanan.</p></div>
                    </div>
                </div>
            </section>

            <!-- 5. Gaya Terintegrasi (Dengan Form) -->
            <section id="integrated-tabs">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
                    <i data-lucide="edit-3" class="w-6 h-6 text-blue-600"></i>
                    Gaya Terintegrasi (Dengan Form)
                </h2>
                <div class="bg-white rounded-lg border border-gray-200 shadow-sm">
                    <div class="border-b border-gray-200">
                        <nav class="-mb-px flex space-x-8 px-6" aria-label="Tabs" data-tab-group="group6">
                            <button class="tab-button active group inline-flex items-center py-4 px-1 border-b-2 font-medium text-sm text-blue-600 border-blue-500" data-tab-target="#form-pribadi">
                                <i data-lucide="user" class="-ml-0.5 mr-2 h-5 w-5"></i>
                                <span>Informasi Pribadi</span>
                            </button>
                            <button class="tab-button group inline-flex items-center py-4 px-1 border-b-2 font-medium text-sm text-gray-500 hover:text-gray-700 hover:border-gray-300 border-transparent" data-tab-target="#form-akun">
                                <i data-lucide="key-round" class="-ml-0.5 mr-2 h-5 w-5"></i>
                                <span>Info Akun</span>
                            </button>
                        </nav>
                    </div>
                    <div class="p-6" data-tab-group="group6">
                        <div id="form-pribadi" class="tab-panel active">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="nama-depan" class="block text-sm font-medium text-gray-700">Nama Depan</label>
                                    <input type="text" name="nama-depan" id="nama-depan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" placeholder="John">
                                </div>
                                <div>
                                    <label for="nama-belakang" class="block text-sm font-medium text-gray-700">Nama Belakang</label>
                                    <input type="text" name="nama-belakang" id="nama-belakang" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" placeholder="Doe">
                                </div>
                                <div class="md:col-span-2">
                                    <label for="bio" class="block text-sm font-medium text-gray-700">Bio Singkat</label>
                                    <textarea name="bio" id="bio" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" placeholder="Ceritakan sedikit tentang diri Anda..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div id="form-akun" class="tab-panel">
                            <div class="space-y-6">
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Alamat Email</label>
                                    <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" placeholder="anda@contoh.com">
                                </div>
                                <div>
                                    <label for="bahasa" class="block text-sm font-medium text-gray-700">Bahasa</label>
                                    <select id="bahasa" name="bahasa" class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-blue-500 focus:outline-none focus:ring-blue-500 sm:text-sm">
                                        <option>Bahasa Indonesia</option>
                                        <option selected>English</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ===== 2. PERUBAHAN KELAS UNTUK POSISI TOMBOL ===== -->
                     <div class="bg-gray-50 px-6 py-3 rounded-b-lg footer-actions">
                        <button type="button" class="inline-flex justify-center rounded-md border border-transparent bg-blue-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            Simpan Perubahan
                        </button>
                    </div>
                </div>
            </section>

            <!-- ===== 3. PENAMBAHAN BAGIAN BARU: GAYA TERINTEGRASI VERTIKAL ===== -->
            <section id="integrated-tabs-vertical">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
                    <i data-lucide="layout-list" class="w-6 h-6 text-blue-600"></i>
                    Gaya Terintegrasi (Vertikal)
                </h2>
                <div class="bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden">
                    <div class="flex flex-col md:flex-row">
                        <nav class="flex flex-row md:flex-col md:w-1/4 border-b md:border-b-0 md:border-r border-gray-200 p-2" aria-label="Tabs" data-tab-group="group8">
                            <button class="tab-button active group flex items-center w-full text-left px-3 py-2 rounded-md text-sm font-medium text-blue-700 bg-blue-50" data-tab-target="#vert-form-pribadi">
                                <i data-lucide="user" class="mr-3 h-5 w-5"></i><span>Informasi Pribadi</span>
                            </button>
                            <button class="tab-button group flex items-center w-full text-left px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-900" data-tab-target="#vert-form-akun">
                                <i data-lucide="key-round" class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"></i><span>Info Akun</span>
                            </button>
                        </nav>
                        <!-- Wrapper untuk konten dan footer -->
                        <div class="flex-1 flex flex-col">
                            <!-- Kontainer panel yang bisa di-scroll jika konten panjang -->
                            <div class="p-6 flex-grow" data-tab-group="group8">
                                <div id="vert-form-pribadi" class="tab-panel active">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div>
                                            <label for="vert-nama-depan" class="block text-sm font-medium text-gray-700">Nama Depan</label>
                                            <input type="text" name="vert-nama-depan" id="vert-nama-depan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" placeholder="John">
                                        </div>
                                        <div>
                                            <label for="vert-nama-belakang" class="block text-sm font-medium text-gray-700">Nama Belakang</label>
                                            <input type="text" name="vert-nama-belakang" id="vert-nama-belakang" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" placeholder="Doe">
                                        </div>
                                        <div class="md:col-span-2">
                                            <label for="vert-bio" class="block text-sm font-medium text-gray-700">Bio Singkat</label>
                                            <textarea name="vert-bio" id="vert-bio" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" placeholder="Ceritakan sedikit tentang diri Anda..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div id="vert-form-akun" class="tab-panel">
                                    <div class="space-y-6">
                                        <div>
                                            <label for="vert-email" class="block text-sm font-medium text-gray-700">Alamat Email</label>
                                            <input type="email" name="vert-email" id="vert-email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" placeholder="anda@contoh.com">
                                        </div>
                                        <div>
                                            <label for="vert-bahasa" class="block text-sm font-medium text-gray-700">Bahasa</label>
                                            <select id="vert-bahasa" name="vert-bahasa" class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-blue-500 focus:outline-none focus:ring-blue-500 sm:text-sm">
                                                <option>Bahasa Indonesia</option>
                                                <option selected>English</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Footer dengan tombol -->
                            <div class="bg-gray-50 px-6 py-3 footer-actions">
                                <button type="button" class="inline-flex justify-center rounded-md border border-transparent bg-blue-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                    Simpan Perubahan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>