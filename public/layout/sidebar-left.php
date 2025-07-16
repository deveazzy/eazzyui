<?php
/**
 * layout/sidebar-left.php
 *
 * File ini berisi struktur HTML untuk sidebar navigasi kiri (desktop)
 * dan Floating Action Button (FAB) menu (mobile).
 * Konten menu akan diisi secara dinamis oleh js/sidebar-left-specific.js
 * berdasarkan data dari js/navigation-data.js.
 */
?>

<!-- Sidebar Kiri (Desktop Only) -->
<!-- Default: md:w-20 (collapsed) | Expanded: md:w-64 -->
<aside id="sidebar-left-desktop" class="fixed inset-y-0 left-0 z-40 bg-white shadow-lg transform -translate-x-full md:translate-x-0 transition-all duration-300 ease-in-out md:flex md:flex-col md:shadow-none md:border-r md:border-gray-200 md:w-20 hidden">
    <!-- Header Sidebar (Avatar, Nama, Info Online) -->
    <div class="p-4 border-b border-gray-200 flex items-center justify-between sidebar-header">
        <div class="flex items-center space-x-3 overflow-hidden">
            <div class="relative flex-shrink-0">
                <img src="https://placehold.co/40x40/2563EB/ffffff?text=EZ" alt="EazZy Project Logo" class="w-10 h-10 rounded-full object-cover">
                <span class="absolute bottom-0 right-0 block h-2.5 w-2.5 rounded-full bg-green-500 ring-1 ring-white"></span>
            </div>
            <div class="sidebar-text whitespace-nowrap">
                <h3 class="font-semibold text-gray-800">EazZy Project</h3>
                <p class="text-xs text-gray-500">Online</p>
            </div>
        </div>
        <!-- Tombol Tutup Sidebar (Hanya terlihat di mobile saat sidebar dibuka oleh tombol mobile utama) -->
        <button id="sidebar-close-btn" class="md:hidden p-1 rounded-full hover:bg-gray-100 text-gray-600 flex-shrink-0">
            <i data-lucide="x" class="w-5 h-5"></i>
        </button>
    </div>

    <!-- Navigasi Sidebar Desktop. Akan diisi oleh JavaScript. -->
    <!-- ID 'desktop-sidebar-nav' akan digunakan oleh sidebar-left-specific.js untuk merender menu. -->
    <nav id="desktop-sidebar-nav" class="flex-1 p-2 space-y-1 overflow-y-auto">
        <!-- Menu sidebar desktop akan dirender di sini oleh js/sidebar-left-specific.js -->
    </nav>

    <!-- Tombol Toggle Sidebar Desktop (dipindahkan ke bawah) -->
    <div class="mt-auto p-4 border-t border-gray-200">
        <button id="desktop-sidebar-toggle-btn" class="w-full flex items-center justify-center p-2 rounded-lg bg-blue-900 text-white hover:bg-blue-800 transition-colors duration-300 shadow-md">
            <i data-lucide="chevron-left" class="w-5 h-5 transition-transform duration-300"></i>
        </button>
    </div>
</aside>

<!-- Floating Action Button (FAB) Menu Mobile Only -->
<!-- Posisi di tengah bawah layar -->
<div id="mobile-fab-menu" class="fixed bottom-6 z-50 hidden md:hidden">
    <!-- Container untuk Ikon Menu yang Sedang Aktif -->
    <!-- Ini akan berisi item-item menu level 1, atau level 2, atau level 3 -->
    <div id="mobile-menu-items-container" class="mobile-menu-items-container absolute bottom-0">
        <!-- Item menu akan di-generate di sini oleh JavaScript -->
    </div>

    <!-- Tombol Utama FAB (Windows Icon) -->
    <!-- Ukuran w-20 h-20 untuk 80px -->
    <button id="mobile-fab-toggle-btn" class="relative w-20 h-20 rounded-full bg-blue-600 text-white flex items-center justify-center shadow-lg transition-all duration-300 ease-in-out flex-shrink-0">
        <i data-lucide="app-window" class="w-10 h-10"></i> <!-- Ukuran ikon w-10 h-10 untuk 40px -->
    </button>
</div>

<!-- Avatar Tetap di Pojok Kanan Bawah (Mobile Only) -->
<!-- Ukuran w-14 h-14 untuk 56px -->
<div id="mobile-avatar-fixed" class="fixed bottom-6 right-6 z-50 hidden md:hidden transition-all duration-300 opacity-100 translate-x-0">
    <div class="relative">
        <img src="https://placehold.co/56x56/2563EB/ffffff?text=EZ" alt="EazZy Project Logo" class="w-14 h-14 rounded-full object-cover shadow-md">
        <span class="absolute bottom-0 right-0 block h-3 w-3 rounded-full bg-green-500 ring-1 ring-white"></span>
    </div>
</div>

<!-- Overlay untuk Mobile FAB Menu -->
<div id="mobile-fab-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden md:hidden"></div>