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
    // Menu Level 1
    {
        id: 'home',
        label: 'Beranda',
        icon: 'home',
        page: 'home', 
        layout: '', 
    },
    {
        id: 'components',
        label: 'Komponen',
        icon: 'grid',
        children: [ 
            {
                id: 'atoms',
                label: 'Elemen Dasar',
                icon: 'square',
                // page: 'atoms', 
                layout: '', 
                children: [ // Sub-menu untuk "Elemen Dasar" (untuk Mega Menu & Mobile Accordion)
                    {
                        id: 'ui-elements',
                        label: 'Koleksi Elemen',
                        icon: 'layers',
                        page: 'atoms', 
                        layout: '',
                        group: 'Dasar', 
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
                    { id: 'buttons', label: 'Buttons', icon: 'circle', page: 'buttons', layout: '', group: 'Dasar' },
                    { id: 'widgets', label: 'Widgets', icon: 'layout-grid', page: 'widgets', layout: '', group: 'Komponen Lanjutan' },
                    { id: 'modal-form', label: 'Modal & Form', page: 'modal-form', layout: '', group: 'Form & Utilitas' },
                    { id: 'tabs', label: 'Tabs', icon: 'folder-tabs', page: 'tabs', layout: '', group: 'Form & Utilitas' },
                ]
            },
            // ===================================
            {
                id: 'assets',
                label: 'Aset',
                icon: 'image',
                children: [ // Sub-menu untuk "Aset" dengan pengelompokan horizontal
                    { id: 'icons', label: 'Icons Lucide', icon: 'layers', page: 'icons', layout: '', group: 'Grafis' },
                    { id: 'alerts-notifications', label: 'Alerts & Notifikasi', icon: 'bell-ring', page: 'alerts-and-notifications', layout: '', group: 'Form & Utilitas' },
                    { id: 'flatpickr', label: 'Flatpickr', icon: 'calendar-days', page: 'flatpickr', layout: '', group: 'Form & Utilitas' },
                    { id: 'splide-js', label: 'Splide', icon: 'gallery-horizontal', page: 'splide', layout: '', group: 'Form & Utilitas' },
                    { id: 'tabulator', label: 'Tabulator', icon: 'table', page: 'tabulator', layout: '', group: 'Tabel & Data' },
                    { id: 'apexcharts', label: 'ApexCharts', icon: 'area-chart', page: 'apexcharts', layout: '', group: 'Tabel & Data' },
                    { id: 'tailwind-css', label: 'Tailwind CSS', icon: 'wind', page: 'tailwind-css', layout: '', group: 'Frameworks' },
                    { id: 'animate-style', label: 'Animate.css', icon: 'sparkles', page: 'animate-style', layout: '', group: 'Animasi' },
                    { id: 'nprogress-js', label: 'NProgress.js', icon: 'gauge-circle', page: 'nprogress', layout: '', group: 'Animasi' },
                ]
            },
            {
                id: 'pages',
                label: 'Halaman',
                icon: 'file-text',
                children: [ // Sub-menu untuk "Halaman"
                    { id: 'dashboard', label: 'Dashboard', page: 'dashboard', layout: 'sidebar-left', group: 'Contoh' },
                    { id: 'error-401', label: 'Error 401', page: '401', group: 'Error' },
                    { id: 'error-403', label: 'Error 403', page: '403', group: 'Error' },
                    { id: 'error-404', label: 'Error 404', page: '404', group: 'Error' },
                    { id: 'error-500', label: 'Error 500', page: '500', group: 'Error' },
                    { id: 'error-503', label: 'Error 503', page: '503', group: 'Error' },
                ]
            },
        ]
    },
    {
        id: 'about',
        label: 'Tentang',
        icon: 'info',
        page: 'about',
        layout: '', 
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
    // Menambahkan struktur 'Aset' ke sidebarNavigationData
    {
        id: 'assets-sidebar', // ID unik untuk sidebar agar tidak bentrok dengan globalNav
        label: 'Aset',
        icon: 'image',
        children: [
            { id: 'icons', label: 'Icons Lucide', icon: 'layers', page: 'icons', layout: 'sidebar-left', group: 'Grafis' },
            { id: 'alerts-notifications', label: 'Alerts & Notifikasi', icon: 'bell-ring', page: 'alerts-and-notifications', layout: 'sidebar-left', group: 'Form & Utilitas' },
            { id: 'flatpickr', label: 'Flatpickr', icon: 'calendar-days', page: 'flatpickr', layout: 'sidebar-left', group: 'Form & Utilitas' },
            { id: 'splide-js', label: 'Splide', icon: 'gallery-horizontal', page: 'splide', layout: 'sidebar-left', group: 'Form & Utilitas' },
            { id: 'tabulator', label: 'Tabulator', icon: 'table', page: 'tabulator', layout: 'sidebar-left', group: 'Tabel & Data' },
            { id: 'apexcharts', label: 'ApexCharts', icon: 'area-chart', page: 'apexcharts', layout: 'sidebar-left', group: 'Tabel & Data' },
            { id: 'tailwind-css', label: 'Tailwind CSS', icon: 'wind', page: 'tailwind-css', layout: 'sidebar-left', group: 'Frameworks' },
            { id: 'animate-style', label: 'Animate.css', icon: 'sparkles', page: 'animate-style', layout: 'sidebar-left', group: 'Animasi' },
            { id: 'nprogress-js', label: 'NProgress.js', icon: 'gauge-circle', page: 'nprogress', layout: 'sidebar-left', group: 'Animasi' },
        ]
    },
    { id: 'settings', label: 'Pengaturan', icon: 'settings', page: 'settings', layout: 'sidebar-left' },
    { id: 'help', label: 'Bantuan', icon: 'help-circle', page: 'help', layout: 'sidebar-left' },
];

export { globalNavigationData, sidebarNavigationData };