/**
 * js/navigation-data.js
 *
 * File ini berisi struktur data menu global untuk seluruh aplikasi EazZy Project.
 * Data ini akan digunakan untuk merender navigasi desktop (header & mega menu),
 * menu mobile (accordion), sidebar desktop, dan Floating Action Button (FAB) mobile
 * secara dinamis.
 *
 * Dengan satu sumber kebenaran ini, perubahan pada struktur menu hanya perlu
 * dilakukan di sini, dan akan tercermin di semua bagian aplikasi.
 */

const globalNavigationData = [
    // Menu Level 1
    {
        id: 'home',
        label: 'Beranda',
        icon: 'home',
        page: 'home', // Parameter 'page' untuk URL
        layout: '', // Layout default (tanpa sidebar)
    },
    {
        id: 'components',
        label: 'Komponen',
        icon: 'grid',
        children: [ // Sub-menu untuk "Komponen"
            {
                id: 'atoms',
                label: 'Elemen Dasar',
                icon: 'square',
                // Halaman induk tidak lagi diperlukan karena anak-anaknya memiliki halaman sendiri
                // page: 'atoms', 
                layout: '', 
                children: [ // Sub-menu untuk "Elemen Dasar" (untuk Mega Menu & Mobile Accordion)
                    // ===== STRUKTUR MENU DIPERBARUI =====
                    {
                        id: 'ui-elements',
                        label: 'Koleksi Elemen',
                        icon: 'layers',
                        page: 'atoms', // Ini mengarah ke halaman utama elemen
                        layout: '',
                        group: 'Dasar', // Grup untuk Mega Menu
                        // Anak-anak ini sekarang hanya untuk navigasi dalam halaman (jika diperlukan)
                        // atau bisa dihapus jika tidak digunakan untuk sub-navigasi
                        children: [
                            { id: 'buttons', label: 'Buttons', page: 'atoms', hash: '#buttons', layout: '' },
                            { id: 'inputs', label: 'Inputs', page: 'atoms', hash: '#inputs', layout: '' },
                            { id: 'toggles', label: 'Toggles', page: 'atoms', hash: '#toggles', layout: '' },
                            { id: 'badges', label: 'Badges', page: 'atoms', hash: '#badges', layout: '' },
                            { id: 'avatars', label: 'Avatars', page: 'atoms', hash: '#avatars', layout: '' },
                            { id: 'alerts', label: 'Alerts', page: 'atoms', hash: '#alerts', layout: '' },
                            { id: 'progress', label: 'Progress Bars', page: 'atoms', hash: '#progress', layout: '' },
                        ]
                    },
                    { id: 'typography', label: 'Typography', icon: 'type', page: 'typography', layout: '', group: 'Dasar' },
                    { id: 'tabs', label: 'Tabs', icon: 'folder-tabs', page: 'tabs', layout: '', group: 'Dasar' },
                    { id: 'buttons', label: 'Buttons', icon: 'circle', page: 'buttons', layout: '', group: 'Dasar' },
                    { id: 'widgets', label: 'Widgets', icon: 'layout-grid', page: 'widgets', layout: '', group: 'Komponen Lanjutan' },
                ]
            },
            // ===================================
            {
                id: 'assets',
                label: 'Aset',
                icon: 'image',
                children: [ // Sub-menu untuk "Aset"
                    // Menambahkan properti 'group' untuk pengelompokan di Mega Menu
                    { id: 'icons', label: 'Icons Lucide', page: 'icons', layout: '', group: 'Grafis' },
                    { id: 'alerts-notifications', label: 'Alerts & Notifikasi', icon: 'bell-ring', page: 'alerts-and-notifications', layout: '', group: 'Grafis' },
                    { id: 'tailwind-css', label: 'Tailwind CSS', icon: 'wind', page: 'tailwind-css', layout: '', group: 'Framework' },
                ]
            },
            {
                id: 'pages',
                label: 'Halaman',
                icon: 'file-text',
                children: [ // Sub-menu untuk "Halaman"
                    // Menambahkan properti 'group' untuk pengelompokan di Mega Menu
                    { id: 'dashboard', label: 'Dashboard', page: 'dashboard', layout: 'sidebar-left', group: 'Utilitas & Error' },
                    { id: 'error-401', label: 'Error 401', page: '401', group: 'Utilitas & Error' },
                    { id: 'error-403', label: 'Error 403', page: '403', group: 'Utilitas & Error' },
                    { id: 'error-404', label: 'Error 404', page: '404', group: 'Utilitas & Error' },
                    { id: 'error-500', label: 'Error 500', page: '500', group: 'Utilitas & Error' },
                    { id: 'error-503', label: 'Error 503', page: '503', group: 'Utilitas & Error' },
                ]
            },
        ]
    },
    {
        id: 'about',
        label: 'Tentang',
        icon: 'info',
        page: 'about',
        layout: '', // Layout default
    },
];

const sidebarNavigationData = [
    { id: 'dashboard', label: 'Dashboard', icon: 'layout-dashboard', page: 'dashboard', layout: 'sidebar-left' },
    {
        id: 'menu-level-1',
        label: 'Menu Level 1',
        icon: 'folder',
        children: [
            {
                id: 'menu-level-2-a',
                label: 'Menu Level 2 A',
                icon: 'folder-open',
                children: [
                    { id: 'item-a-level-3', label: 'Item A Level 3', icon: 'file-text', page: 'menu-level-3-item-a', layout: 'sidebar-left' },
                    { id: 'item-b-level-3', label: 'Item B Level 3', icon: 'file-text', page: 'menu-level-3-item-b', layout: 'sidebar-left' },
                ]
            },
            { id: 'menu-level-2-b', label: 'Menu Level 2 B', icon: 'file', page: 'menu-level-2-item-c', layout: 'sidebar-left' },
        ]
    },
    { id: 'settings', label: 'Pengaturan', icon: 'settings', page: 'settings', layout: 'sidebar-left' },
    { id: 'help', label: 'Bantuan', icon: 'help-circle', page: 'help', layout: 'sidebar-left' },
];


// Ekspor data agar bisa diimpor di file JS lain
export { globalNavigationData, sidebarNavigationData };
