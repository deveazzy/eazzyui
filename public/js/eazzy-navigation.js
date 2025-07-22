/**
 * @path    public/js/navigation-data.js
 * @author  [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 *
 * File ini berisi semua data untuk struktur navigasi
 * yang digunakan di EazZy Project.
 */


const globalNavigationData = [
    // Menu Level 1: Beranda
    {
        id: 'home',
        label: 'Beranda',
        icon: 'home',
        page: 'home',
        layout: '',
    },
    // Menu Level 1: Solusi
    {
        id: 'solutions',
        label: 'Solusi',
        icon: 'package', // Ikon untuk 'Solusi'
        children: [ // Ini akan menjadi panel mega menu untuk 'Solusi'
            {
                id: 'solution-products', // Sub-menu: Produk
                label: 'Produk',
                icon: 'box', // Ikon untuk 'Produk'
                children: [ // Kolom-kolom di bawah 'Produk'
                    {
                        id: 'product-ui', // Sub-kategori: UI
                        label: 'UI & Desain',
                        icon: 'layout', // Ikon untuk 'UI & Desain'
                        group: 'UI & Komponen', // Grup di dalam kolom
                        children: [
                            // Mengosongkan children sesuai permintaan
                            // Jika nanti ada item UI, bisa ditambahkan di sini
                        ]
                    },
                    {
                        id: 'product-apps', // Sub-kategori: Apps
                        label: 'Aplikasi & Alat',
                        icon: 'app-window', // Ikon untuk 'Aplikasi & Alat'
                        group: 'Aplikasi & Tools', // Grup di dalam kolom
                        children: [
                            { id: 'eazzy-app', label: 'EazZy App', icon: 'rocket', page: 'eazzy-app-page', layout: '' },
                            // Menghapus 'Aplikasi Lain' sesuai permintaan
                        ]
                    },
                ]
            },
            {
                id: 'solution-support', // Sub-menu: Dukungan (setingkat dengan Produk)
                label: 'Dukungan',
                icon: 'life-buoy', // Ikon untuk 'Dukungan'
                group: 'Bantuan & Informasi', // Grup di dalam kolom
                children: [
                    { id: 'faq', label: 'FAQ', page: 'faq-page', layout: '' }, // Contoh halaman FAQ
                    { id: 'contact', label: 'Kontak Kami', page: 'contact-page', layout: '' }, // Contoh halaman Kontak
                    // Anda bisa menambahkan item dukungan lain di sini
                ]
            },
        ]
    },
    // Menu Level 1: Tentang
    {
        id: 'about',
        label: 'Tentang',
        icon: 'info',
        page: 'about',
        layout: '',
    },
];

const sidebarNavigationData = [
    // Menu Level 1: Beranda
    { id: 'home-sidebar', label: 'Beranda', icon: 'home', page: 'home', layout: 'sidebar-left' },
    // Menu Level 1: Solusi (untuk sidebar)
    {
        id: 'solutions-sidebar',
        label: 'Solusi',
        icon: 'package',
        children: [
            {
                id: 'solution-products-sidebar', // Sub-menu: Produk
                label: 'Produk',
                icon: 'box',
                children: [
                    {
                        id: 'product-ui-sidebar', // Sub-kategori: UI
                        label: 'UI & Desain',
                        icon: 'layout',
                        children: [
                            // Mengosongkan children sesuai permintaan
                        ]
                    },
                    {
                        id: 'product-apps-sidebar', // Sub-kategori: Apps
                        label: 'Aplikasi & Alat',
                        icon: 'app-window',
                        children: [
                            { id: 'eazzy-app-sidebar', label: 'EazZy App', icon: 'rocket', page: 'eazzy-app-page', layout: 'sidebar-left' },
                            // Menghapus 'Aplikasi Lain' sesuai permintaan
                        ]
                    },
                ]
            },
            {
                id: 'solution-support-sidebar', // Sub-menu: Dukungan
                label: 'Dukungan',
                icon: 'life-buoy',
                children: [
                    { id: 'faq-sidebar', label: 'FAQ', page: 'faq-page', layout: 'sidebar-left' },
                    { id: 'contact-sidebar', label: 'Kontak Kami', page: 'contact-page', layout: 'sidebar-left' },
                ]
            },
        ]
    },
    // Menu Level 1: Tentang
    { id: 'about-sidebar', label: 'Tentang', icon: 'info', page: 'about', layout: 'sidebar-left' },
    // Item lain yang mungkin ada di sidebar tetapi tidak di bawah 'Solusi'
    // Jika ada item settings/help yang bukan bagian dari 'Solusi', bisa ditambahkan di sini
    // { id: 'settings', label: 'Pengaturan', icon: 'settings', page: 'settings', layout: 'sidebar-left' },
    // { id: 'help', label: 'Bantuan', icon: 'help-circle', page: 'help', layout: 'sidebar-left' },
];

export { globalNavigationData, sidebarNavigationData };
