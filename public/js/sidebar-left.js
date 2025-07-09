//
//  * js/sidebar-left.js// 
//  * css/about.js
//  *
//  * @author    [EazZy Project]
//  * @copyright Copyright (c) [2025] [EazZy Project]
//  * @license   https://opensource.org/licenses/MIT MIT License
//  * File ini berisi semua tautan ke aset eksternal (CSS, JavaScript)
//  * dan font yang digunakan di EazZy Project.
//  */


import { sidebarNavigationData } from './navigation-data.js';
import { createIcons, icons } from '../assets/vendor/lucide/lucide.js';

document.addEventListener('DOMContentLoaded', () => {
    // Elemen Sidebar Desktop
    const sidebarDesktop = document.getElementById('sidebar-left-desktop');
    const desktopSidebarToggleBtn = document.getElementById('desktop-sidebar-toggle-btn');
    const desktopSidebarNav = document.getElementById('desktop-sidebar-nav'); // Elemen untuk merender menu sidebar

    // Elemen FAB Menu Mobile
    const mobileFabMenu = document.getElementById('mobile-fab-menu');
    const mobileFabToggleBtn = document.getElementById('mobile-fab-toggle-btn');
    const mobileFabAvatarFixed = document.getElementById('mobile-avatar-fixed');
    const mobileMenuItemsContainer = document.getElementById('mobile-menu-items-container');
    const mobileFabOverlay = document.getElementById('mobile-fab-overlay');

    // --- Logika Sidebar Collapsed/Expanded (Desktop) ---
    const isDesktop = () => window.innerWidth >= 768; 
    let isSidebarExpanded = isDesktop() ? (localStorage.getItem('sidebarExpanded') === 'true') : false;

    const applySidebarState = () => {
        if (sidebarDesktop) {
            if (isSidebarExpanded) {
                sidebarDesktop.classList.remove('sidebar-collapsed');
                sidebarDesktop.classList.add('expanded'); 
            } else {
                sidebarDesktop.classList.add('sidebar-collapsed');
                sidebarDesktop.classList.remove('expanded'); 
            }
        }
        // Logika rotasi ikon chevron Dihapus dari sini.
        // Rotasi akan ditangani oleh CSS berdasarkan kelas 'expanded' pada #sidebar-left-desktop.
        // createIcons({ icons }) tidak dipanggil di sini lagi karena sudah dipanggil di renderDesktopSidebarNav
    };

    if (isDesktop()) {
        applySidebarState();
    } else {
        if (sidebarDesktop) {
            sidebarDesktop.classList.add('hidden');
        }
    }

    if (desktopSidebarToggleBtn) {
        desktopSidebarToggleBtn.addEventListener('click', () => {
            isSidebarExpanded = !isSidebarExpanded;
            localStorage.setItem('sidebarExpanded', isSidebarExpanded);
            applySidebarState();
        });
    }

    // --- Hover untuk Expand (Desktop Only) ---
    let hoverTimeout;
    if (sidebarDesktop && isDesktop()) {
        sidebarDesktop.addEventListener('mouseenter', () => {
            if (!isSidebarExpanded) {
                clearTimeout(hoverTimeout);
                sidebarDesktop.classList.remove('sidebar-collapsed');
                sidebarDesktop.classList.add('expanded');
                createIcons({ icons });
            }
        });

        sidebarDesktop.addEventListener('mouseleave', () => {
            if (!isSidebarExpanded) {
                hoverTimeout = setTimeout(() => {
                    sidebarDesktop.classList.remove('expanded');
                    sidebarDesktop.classList.add('sidebar-collapsed');
                    createIcons({ icons });
                }, 300);
            }
        });
    }

    // --- Fungsi Pembantu untuk Membuat Link Sidebar ---
    const createSidebarLink = (item, level = 0) => {
        const link = document.createElement('a');
        let href = ''; 

        // Logika untuk membuat URL yang lebih bersih (Pretty URLs)
        if (item.page === 'home') {
            href = '/'; // Untuk halaman home, cukup root URL
        } else if (item.page) {
            // Jika ada page dan layout, gunakan format /nama_halaman/nama_layout
            if (item.layout) {
                href = `/${item.page}/${item.layout}`;
            } else {
                // Jika hanya ada page, gunakan /nama_halaman
                href = `/${item.page}`;
            }
        } else {
            href = '#'; // Fallback jika tidak ada page
        }

        if (item.hash) {
            href += item.hash;
        }

        link.href = item.disabled ? '#' : href;
        
        let textSizeClass = '';
        let textColorClass = '';
        let iconSizeClass = ''; 

        if (level === 0) {
            textSizeClass = 'text-lg';
            textColorClass = 'text-gray-700';
            iconSizeClass = 'w-5 h-5'; 
        } else if (level === 1) {
            textSizeClass = 'text-md';
            textColorClass = 'text-gray-600';
            iconSizeClass = 'w-4 h-4'; 
        } else { 
            textSizeClass = 'text-sm';
            textColorClass = 'text-gray-500';
            iconSizeClass = 'w-4 h-4'; 
        }

        link.className = `flex items-center p-3 rounded-lg ${textColorClass} hover:bg-blue-50 hover:text-blue-600 transition-colors duration-200 group ${item.disabled ? 'opacity-50 cursor-not-allowed' : ''} ${textSizeClass}`;
        
        if (level > 0) {
            link.classList.remove('p-3');
            link.classList.add('p-2');
        }

        link.innerHTML = `<i data-lucide="${item.icon}" class="${iconSizeClass} mr-3 flex-shrink-0"></i><span class="sidebar-text whitespace-nowrap">${item.label}</span>`;
        
        if (item.disabled) {
            link.addEventListener('click', (e) => e.preventDefault());
        }
        return link;
    };

    // --- Rendering Navigasi Sidebar Desktop ---
    const renderDesktopSidebarNav = (menuItems, parentElement, level = 0) => {
        if (!parentElement) return;

        parentElement.innerHTML = ''; 

        const groupedItems = {};
        menuItems.forEach(item => {
            const groupName = item.group || 'Tanpa Grup'; 
            if (!groupedItems[groupName]) {
                groupedItems[groupName] = [];
            }
            groupedItems[groupName].push(item);
        });

        // Render setiap grup
        for (const groupName in groupedItems) {
            const itemsInGroup = groupedItems[groupName];

            // Jika ada lebih dari satu grup atau grup bukan 'Tanpa Grup', tambahkan judul grup
            if (Object.keys(groupedItems).length > 1 || groupName !== 'Tanpa Grup') {
                const groupTitle = document.createElement('h4');
                groupTitle.className = `text-xs font-semibold text-gray-400 uppercase tracking-wider mt-4 mb-2 ${level === 0 ? 'pl-3' : 'pl-0'}`;
                groupTitle.textContent = groupName;
                parentElement.appendChild(groupTitle);
            }

            // Render item-item dalam grup
            itemsInGroup.forEach(item => {
                if (item.children) {
                    // Jika memiliki sub-menu, buat tombol accordion
                    const wrapperDiv = document.createElement('div');
                    wrapperDiv.className = 'w-full';

                    const button = document.createElement('button');
                    button.id = `sidebar-${item.id}-trigger`;
                    
                    let buttonTextSizeClass = '';
                    let buttonTextColorClass = '';
                    let buttonIconSizeClass = ''; 

                    if (level === 0) {
                        buttonTextSizeClass = 'text-lg';
                        buttonTextColorClass = 'text-gray-700';
                        buttonIconSizeClass = 'w-5 h-5'; 
                    } else if (level === 1) {
                        buttonTextSizeClass = 'text-md';
                        buttonTextColorClass = 'text-gray-600';
                        buttonIconSizeClass = 'w-4 h-4'; 
                    } else {
                        buttonTextSizeClass = 'text-sm';
                        buttonTextColorClass = 'text-gray-500';
                        buttonIconSizeClass = 'w-4 h-4'; 
                    }

                    button.className = `flex justify-between items-center w-full p-3 rounded-lg ${buttonTextColorClass} hover:bg-blue-50 hover:text-blue-600 transition-colors duration-200 group ${buttonTextSizeClass}`;
                    
                    // Sesuaikan padding/margin berdasarkan level jika diperlukan
                    if (level > 0) {
                        button.classList.remove('p-3');
                        button.classList.add('p-2');
                    }

                    // Terapkan buttonIconSizeClass pada elemen <i> di dalam tombol
                    button.innerHTML = `
                        <span class="flex items-center overflow-hidden">
                            <i data-lucide="${item.icon}" class="${buttonIconSizeClass} mr-3 flex-shrink-0"></i>
                            <span class="sidebar-text whitespace-nowrap">${item.label}</span>
                        </span>
                        <i data-lucide="chevron-down" class="w-4 h-4 transition-transform duration-300 flex-shrink-0"></i>
                    `;
                    
                    const panelDiv = document.createElement('div');
                    panelDiv.id = `sidebar-${item.id}-panel`;
                    panelDiv.className = `hidden mt-1 space-y-1 pl-4 border-l-2 border-gray-200`;

                    wrapperDiv.appendChild(button);
                    wrapperDiv.appendChild(panelDiv);
                    parentElement.appendChild(wrapperDiv);

                    // Rekursif untuk merender sub-menu
                    renderDesktopSidebarNav(item.children, panelDiv, level + 1);

                    // Tambahkan event listener untuk accordion
                    button.addEventListener('click', (e) => {
                        e.preventDefault();
                        panelDiv.classList.toggle('hidden');
                        const actualChevron = button.querySelector('svg[data-lucide="chevron-down"]');
                        if (actualChevron) {
                            actualChevron.classList.toggle('rotate-180');
                        }
                    });

                } else {
                    const link = createSidebarLink(item, level);
                    parentElement.appendChild(link);
                }
            });
        }
        createIcons({ icons }); 
    };

    // --- Logika Akordeon Sidebar (Desktop) ---
    // Fungsi setupAccordion yang lama diganti dengan renderDesktopSidebarNav
    // --- Logika Floating Action Button (FAB) Menu Mobile ---
    let currentMobileMenuLevel = sidebarNavigationData; 
    let mobileMenuHistory = []; // Untuk tombol kembali

    // Fungsi untuk menghitung posisi item melingkar
    // Mengembalikan {x, y} offsets dari pusat lingkaran
    const calculateCirclePositions = (numItems, radius) => {
        const positions = [];
        // Setengah lingkaran dari 180 derajat (kiri) ke 0 derajat (kanan)
        const angleStep = Math.PI / (numItems + 1); 
        
        for (let i = 0; i < numItems; i++) {
            const angle = Math.PI - (i + 1) * angleStep;
            const x = radius * Math.cos(angle);
            const y = radius * Math.sin(angle); 
            positions.push({ x: x, y: y });
        }
        return positions;
    };

    const renderMobileFabMenuItems = (menuItems) => {
        if (!mobileMenuItemsContainer) return;

        // Fade out item yang ada sebelum menghapus
        Array.from(mobileMenuItemsContainer.children).forEach(child => {
            child.style.opacity = '0';
            // Mempertahankan transform yang ada dan menambahkan scale out
            const currentTransform = child.style.transform.replace(/scale\((.*?)\)/, '').trim(); 
            child.style.transform = `${currentTransform} scale(0.5)`; 
            child.style.transition = 'all 0.2s ease-out';
            child.style.pointerEvents = 'none'; 
        });

        setTimeout(() => { // Beri waktu untuk fade out
            mobileMenuItemsContainer.innerHTML = ''; 

            const isThirdLevel = mobileMenuHistory.length === 2; // Cek apakah ini level 3
            const radius = isThirdLevel ? 140 : 140; // Radius untuk item level 3 dan 2

            const numItems = menuItems.length;
            const hasBackButton = mobileMenuHistory.length > 0;

            // Hitung posisi untuk semua item (termasuk tombol kembali)
            const positions = calculateCirclePositions(numItems + (hasBackButton ? 1 : 0), radius);

            let currentItemIndex = 0;

            // Tambahkan tombol kembali jika bukan level utama
            if (hasBackButton) {
                const backButton = document.createElement('button');
                const backButtonSizeClass = mobileMenuHistory.length === 1 ? 'level-2-item' : 'level-3-item'; 
                backButton.className = `mobile-fab-item mobile-fab-back-btn bg-gray-500 text-white rounded-full shadow-md flex items-center justify-center ${backButtonSizeClass}`; 
                backButton.innerHTML = `<i data-lucide="arrow-left"></i>`; 
                
                const pos = positions[currentItemIndex++];
                backButton.style.transform = `translate(calc(-50% + ${pos.x}px), calc(-50% - ${pos.y}px))`;
                backButton.style.opacity = '1';
                backButton.style.transition = `all 0.3s ease-out`;
                backButton.style.pointerEvents = 'auto';
                
                mobileMenuItemsContainer.appendChild(backButton);

                backButton.addEventListener('click', (e) => {
                    e.stopPropagation();
                    const previousMenuLevel = mobileMenuHistory.pop();
                    currentMobileMenuLevel = previousMenuLevel || sidebarNavigationData;
                    renderMobileFabMenuItems(currentMobileMenuLevel);
                    toggleFabMenu(true);
                });
            }

            menuItems.forEach((item, i) => {
                const fabItem = document.createElement(item.page ? 'a' : 'button');
                fabItem.id = `fab-item-${item.id}`;
                
                // Menambahkan kelas ukuran spesifik berdasarkan level menu
                let sizeClass = '';
                if (mobileMenuHistory.length === 0) { // Level 1 (dari FAB utama)
                    sizeClass = 'level-1-item'; 
                } else if (mobileMenuHistory.length === 1) { // Level 2 (dari Level 1)
                    sizeClass = 'level-2-item'; 
                } else if (mobileMenuHistory.length === 2) { // Level 3 (dari Level 2)
                    sizeClass = 'level-3-item'; 
                }

                fabItem.className = `mobile-fab-item bg-blue-600 text-white rounded-full shadow-md flex items-center justify-center ${sizeClass} ${item.disabled ? 'opacity-50 cursor-not-allowed' : ''}`;
                fabItem.innerHTML = `<i data-lucide="${item.icon}"></i>`;
                
                const pos = positions[currentItemIndex++];
                fabItem.style.transform = `translate(calc(-50% + ${pos.x}px), calc(-50% - ${pos.y}px))`;
                fabItem.style.opacity = '1';
                fabItem.style.transition = `all 0.3s ease-out ${i * 0.05}s`;
                fabItem.style.pointerEvents = 'auto';

                mobileMenuItemsContainer.appendChild(fabItem);

                if (item.page) {
                    let fabHref = '';
                    if (item.page === 'home') {
                        fabHref = '/';
                    } else if (item.page) {
                        if (item.layout) {
                            fabHref = `/${item.page}/${item.layout}`;
                        } else {
                            fabHref = `/${item.page}`;
                        }
                    } else {
                        fabHref = '#';
                    }
                    if (item.hash) {
                        fabHref += item.hash;
                    }
                    fabItem.href = item.disabled ? '#' : fabHref;

                    if (item.disabled) {
                        fabItem.addEventListener('click', (e) => e.preventDefault());
                    } else {
                        fabItem.addEventListener('click', () => {
                            toggleFabMenu(false);
                        });
                    }
                } else if (item.children) {
                    fabItem.addEventListener('click', (e) => {
                        e.stopPropagation();
                        mobileMenuHistory.push(currentMobileMenuLevel);
                        currentMobileMenuLevel = item.children;
                        renderMobileFabMenuItems(currentMobileMenuLevel);
                        toggleFabMenu(true);
                    });
                }
            });
            createIcons({ icons });
            markActiveLink();
        }, 200);
    };

    let isFabMenuExpanded = false;

    const toggleFabMenu = (expand) => {
        isFabMenuExpanded = typeof expand === 'boolean' ? expand : !isFabMenuExpanded;

        if (mobileFabMenu) {
            if (isFabMenuExpanded) {
                mobileFabMenu.classList.add('expanded');
                if (mobileFabOverlay) mobileFabOverlay.classList.remove('hidden');
                if (mobileFabAvatarFixed) {
                    mobileFabAvatarFixed.classList.add('opacity-0', 'scale-0');
                    mobileFabAvatarFixed.classList.remove('opacity-100', 'scale-100');
                }
                renderMobileFabMenuItems(currentMobileMenuLevel);
            } else {
                mobileFabMenu.classList.remove('expanded');
                if (mobileFabOverlay) mobileFabOverlay.classList.add('hidden');
                if (mobileFabAvatarFixed) {
                    mobileFabAvatarFixed.classList.remove('opacity-0', 'scale-0');
                    mobileFabAvatarFixed.classList.add('opacity-100', 'scale-100');
                }
                mobileMenuItemsContainer.innerHTML = '';
                mobileMenuHistory = [];
                currentMobileMenuLevel = sidebarNavigationData; 
            }
        }
        createIcons({ icons });
    };

    if (mobileFabToggleBtn) {
        mobileFabToggleBtn.addEventListener('click', () => toggleFabMenu());
    }

    if (mobileFabOverlay) {
        mobileFabOverlay.addEventListener('click', () => toggleFabMenu(false));
    }

    // --- Menandai Link Aktif (untuk Desktop Sidebar dan Mobile FAB) ---
    const markActiveLink = () => {
        const currentPath = window.location.pathname; 
        const allLinks = document.querySelectorAll('#desktop-sidebar-nav a, .mobile-fab-item[href]');

        allLinks.forEach(link => {
            link.classList.remove('active-link');
            const linkHref = link.getAttribute('href');
            if (linkHref) {
                const normalizedLinkHref = linkHref.startsWith('/') ? linkHref : '/' + linkHref; 
                if (normalizedLinkHref === currentPath) {
                    link.classList.add('active-link');
                } else if (currentPath === '/' && normalizedLinkHref === '/home') {
                    link.classList.add('active-link');
                } else if (currentPath.startsWith(normalizedLinkHref) && normalizedLinkHref !== '/') {
                    link.classList.add('active-link');
                }
            }
        });
    };
    
    // --- Inisialisasi Awal ---
    renderDesktopSidebarNav(sidebarNavigationData, desktopSidebarNav); 
    markActiveLink(); 

    // --- Penyesuaian State saat Resize Jendela ---
    window.addEventListener('resize', () => {
        if (isDesktop()) {
            if (mobileFabMenu) mobileFabMenu.classList.add('hidden');
            if (mobileFabOverlay) mobileFabOverlay.classList.add('hidden');
            if (mobileFabAvatarFixed) mobileFabAvatarFixed.classList.add('hidden');
            if (sidebarDesktop) sidebarDesktop.classList.remove('hidden');
            applySidebarState();
            renderDesktopSidebarNav(sidebarNavigationData, desktopSidebarNav);
            setTimeout(() => {
                markActiveLink();
            }, 100); 
        } else {
            if (sidebarDesktop) sidebarDesktop.classList.add('hidden');
            if (mobileFabMenu) mobileFabMenu.classList.remove('hidden');
            if (mobileFabAvatarFixed) mobileFabAvatarFixed.classList.remove('hidden');
            toggleFabMenu(false);
            markActiveLink(); 
        }
    });
    window.dispatchEvent(new Event('resize'));
});
