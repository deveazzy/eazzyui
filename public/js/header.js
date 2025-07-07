/**
 * js/header.js
 * PENTING: Pastikan tag <script> untuk file ini di HTML menyertakan type="module"
 * Contoh: <script type="module" src=".../header.js"></script>
 */
import { createIcons } from '../assets/vendor/lucide/lucide.js';
import * as icons from '../assets/vendor/lucide/iconsAndAliases.js';
import { globalNavigationData } from './navigation-data.js';

let componentsTriggerLink = null;

document.addEventListener('DOMContentLoaded', () => {
    // --- Elemen Header ---
    const desktopNavContainer = document.getElementById('desktop-nav-container');
    const megaMenu = document.getElementById('mega-menu');
    const megaMenuCategories = document.getElementById('mega-menu-category-list');
    const megaMenuContentPanel = document.getElementById('mega-menu-content-panel');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileNavContainer = document.getElementById('mobile-nav-container');
    const menuBtn = document.getElementById('menu-btn');

    // --- Fungsi Pembantu untuk Membuat Link Navigasi ---
    const createNavLink = (item, isMobile = false, level = 0) => {
        const link = document.createElement('a');
        let href = '';

        if (item.page === 'home') {
            href = '/';
        } else if (item.page) {
            if (item.layout) {
                href = `/${item.page}/${item.layout}`;
            } else {
                href = `/${item.page}`;
            }
        } else {
            href = '#';
        }

        if (item.hash) {
            href += item.hash;
        }

        link.href = item.disabled ? '#' : href;
        
        let textSizeClass = '';
        if (isMobile) {
            if (level === 0) {
                textSizeClass = 'text-lg text-gray-800';
            } else if (level === 1) {
                textSizeClass = 'text-md text-gray-600';
            } else {
                textSizeClass = 'text-sm text-gray-500';
            }
            link.className = `mobile-link ${textSizeClass} block hover:text-blue-600 w-full p-2 rounded-md ${item.disabled ? 'opacity-50 cursor-not-allowed' : ''}`;
        } else {
            textSizeClass = 'text-gray-600';
            link.className = `${textSizeClass} hover:text-blue-600 w-full p-2 rounded-md ${item.disabled ? 'opacity-50 cursor-not-allowed' : ''}`;
        }

        link.textContent = item.label;

        if (item.disabled) {
            link.addEventListener('click', (e) => e.preventDefault());
        }
        return link;
    };

    // --- Rendering Navigasi Desktop ---
    const renderDesktopNav = () => {
        if (!desktopNavContainer) return;

        desktopNavContainer.innerHTML = '';

        globalNavigationData.forEach(item => {
            if (item.id === 'components') {
                const triggerLink = document.createElement('a');
                triggerLink.href = '#';
                triggerLink.className = 'flex items-center gap-1 text-gray-600 hover:text-blue-600 header-components-menu';
                triggerLink.innerHTML = `<span>${item.label}</span><i data-lucide="chevron-down" class="w-4 h-4 transition-transform duration-300"></i>`; 
                
                desktopNavContainer.appendChild(triggerLink);
                componentsTriggerLink = triggerLink;
            } else {
                desktopNavContainer.appendChild(createNavLink(item));
            }
        });
    };

    // --- Rendering Mega Menu (Desktop) ---
    const renderMegaMenu = () => {
        if (!megaMenuCategories || !megaMenuContentPanel) return;

        megaMenuCategories.innerHTML = '<h3 class="font-bold text-gray-800 mb-4">Kategori</h3><ul id="mega-menu-category-list-ul" class="space-y-2"></ul>';
        megaMenuContentPanel.innerHTML = '';

        const categoryListUl = document.getElementById('mega-menu-category-list-ul');

        const componentsItem = globalNavigationData.find(item => item.id === 'components');
        if (componentsItem && componentsItem.children) {
            componentsItem.children.forEach((category, index) => {
                const li = document.createElement('li');
                const link = document.createElement('a');
                
                let href = '';
                if (category.page === 'home') {
                    href = '/';
                } else if (category.page) {
                    if (category.layout) {
                        href = `/${category.page}/${category.layout}`;
                    } else {
                        href = `/${category.page}`;
                    }
                } else {
                    href = '#';
                }
                if (category.hash) {
                    href += category.hash;
                }

                link.href = category.disabled ? '#' : href;
                link.className = `mega-menu-trigger flex items-center justify-between p-2 rounded-lg text-gray-600 hover:bg-blue-50 font-medium ${category.disabled ? 'opacity-50 cursor-not-allowed' : ''}`;
                link.setAttribute('data-menu-target', category.id);
                link.innerHTML = `${category.label} <i data-lucide="arrow-right" class="w-4 h-4"></i>`;
                
                if (category.disabled) {
                    link.addEventListener('click', (e) => e.preventDefault());
                }

                li.appendChild(link);
                categoryListUl.appendChild(li);

                const contentDiv = document.createElement('div');
                contentDiv.id = `${category.id}-content`;
                contentDiv.className = `mega-menu-content ${index === 0 ? 'grid grid-cols-3 gap-8' : 'hidden'}`; 

                if (category.children) {
                    const groupedItems = {};
                    category.children.forEach(subItem => {
                        const groupName = subItem.group || 'Lain-lain';
                        if (!groupedItems[groupName]) {
                            groupedItems[groupName] = [];
                        }
                        groupedItems[groupName].push(subItem);
                    });

                    for (const groupName in groupedItems) {
                        const colDiv = document.createElement('div');
                        colDiv.innerHTML = `<h4 class="font-semibold text-gray-500 mb-3">${groupName}</h4>`;
                        groupedItems[groupName].forEach(subItem => {
                            const subLink = document.createElement('a');
                            let subHref = '';
                            if (subItem.page === 'home') {
                                subHref = '/';
                            } else if (subItem.page) {
                                if (subItem.layout) {
                                    subHref = `/${subItem.page}/${subItem.layout}`;
                                } else {
                                    subHref = `/${subItem.page}`;
                                }
                            } else {
                                subHref = '#';
                            }
                            if (subItem.hash) {
                                subHref += subItem.hash;
                            }

                            subLink.href = subItem.disabled ? '#' : subHref;
                            subLink.className = `mega-menu-link block p-2 rounded-lg hover:bg-gray-100 ${subItem.disabled ? 'opacity-50 cursor-not-allowed' : ''}`;
                            subLink.textContent = subItem.label;
                            if (subItem.disabled) {
                                subLink.addEventListener('click', (e) => e.preventDefault());
                            }
                            colDiv.appendChild(subLink);
                        });
                        contentDiv.appendChild(colDiv);
                    }
                } else {
                    contentDiv.classList.remove('grid', 'grid-cols-3', 'gap-8');
                    contentDiv.classList.add('flex', 'flex-col', 'space-y-2');
                    const p = document.createElement('p');
                    p.className = 'text-gray-600';
                    p.textContent = `Segera hadir: ${category.label.replace(' (soon)', '')} ...`;
                    contentDiv.appendChild(p);
                }
                megaMenuContentPanel.appendChild(contentDiv);
            });
        }
    };

    // --- Setup Listeners untuk Mega Menu (Desktop) ---
    const setupMegaMenuListeners = () => {
        const mainChevron = componentsTriggerLink ? componentsTriggerLink.querySelector('svg[data-lucide="chevron-down"]') : null;

        if (!componentsTriggerLink || !megaMenu || !mainChevron) return; 

        let menuHideTimeout;

        const showMenu = () => {
            clearTimeout(menuHideTimeout);
            megaMenu.classList.remove('hidden');
            setTimeout(() => {
                megaMenu.classList.remove('opacity-0', '-translate-y-4', 'pointer-events-none');
                componentsTriggerLink.classList.add('is-expanded'); 
            }, 10);
        };

        const hideMenu = () => {
            menuHideTimeout = setTimeout(() => {
                megaMenu.classList.add('opacity-0', '-translate-y-4', 'pointer-events-none');
                setTimeout(() => {
                    megaMenu.classList.add('hidden');
                    componentsTriggerLink.classList.remove('is-expanded'); 
                }, 300);
            }, 300);
        };

        componentsTriggerLink.addEventListener('mouseenter', showMenu);
        megaMenu.addEventListener('mouseenter', () => clearTimeout(menuHideTimeout));
        componentsTriggerLink.addEventListener('mouseleave', hideMenu);
        megaMenu.addEventListener('mouseleave', hideMenu);

        const triggers = document.querySelectorAll('#mega-menu .mega-menu-trigger');
        const contents = document.querySelectorAll('#mega-menu .mega-menu-content');
        const links = document.querySelectorAll('.mega-menu-link');

        triggers.forEach(trigger => {
            trigger.addEventListener('mouseenter', () => {
                triggers.forEach(t => t.classList.remove('bg-blue-50'));
                contents.forEach(c => c.classList.add('hidden'));
                
                trigger.classList.add('bg-blue-50');
                const targetId = trigger.getAttribute('data-menu-target');
                const targetContent = document.getElementById(targetId + '-content');
                if (targetContent) {
                    targetContent.classList.remove('hidden');
                }
            });
        });

        links.forEach(link => {
            link.addEventListener('click', () => {
                megaMenu.classList.add('opacity-0', '-translate-y-4', 'pointer-events-none');
                setTimeout(() => megaMenu.classList.add('hidden'), 300);
            });
        });
    };

    // --- Rendering Menu Mobile (Accordion) ---
    const renderMobileNav = (menuItems, parentElement, level = 0) => {
        if (!parentElement) return;

        menuItems.forEach(item => {
            if (item.children) {
                const wrapperDiv = document.createElement('div');
                wrapperDiv.className = 'w-full';

                const button = document.createElement('button');
                button.id = `mobile-${item.id}-trigger`;
                
                let buttonTextSizeClass = '';
                let buttonTextColorClass = '';
                if (level === 0) {
                    buttonTextSizeClass = 'text-lg text-gray-800';
                } else if (level === 1) {
                    buttonTextSizeClass = 'text-md text-gray-600';
                } else {
                    buttonTextSizeClass = 'text-sm text-gray-500';
                }
                button.className = `flex justify-between items-center w-full p-2 rounded-md transition-colors duration-200 ${buttonTextSizeClass} hover:text-blue-600`;
                
                if (item.page && !item.disabled) {
                    const link = document.createElement('a');
                    let subHref = '';
                    if (item.page === 'home') {
                        subHref = '/';
                    } else if (item.page) {
                        if (item.layout) {
                            subHref = `/${item.page}/${item.layout}`;
                        } else {
                            subHref = `/${item.page}`;
                        }
                    } else {
                        subHref = '#';
                    }
                    if (item.hash) {
                        subHref += item.hash;
                    }
                    link.href = item.disabled ? '#' : subHref;

                    link.className = 'flex-grow text-left';
                    link.textContent = item.label;
                    button.appendChild(link);
                } else {
                    const span = document.createElement('span');
                    span.textContent = item.label;
                    button.appendChild(span);
                }
                
                if (item.disabled) {
                    button.classList.add('opacity-50', 'cursor-not-allowed');
                    button.addEventListener('click', (e) => e.preventDefault());
                }

                const chevronIcon = document.createElement('i');
                chevronIcon.setAttribute('data-lucide', 'chevron-down');
                chevronIcon.className = 'w-5 h-5 transition-transform duration-300'; 
                button.appendChild(chevronIcon);
                
                const panelDiv = document.createElement('div');
                panelDiv.id = `mobile-${item.id}-panel`;
                panelDiv.className = `hidden mt-1 space-y-1 pl-4 border-l-2 border-gray-200`;

                wrapperDiv.appendChild(button);
                wrapperDiv.appendChild(panelDiv);
                parentElement.appendChild(wrapperDiv);

                renderMobileNav(item.children, panelDiv, level + 1);

                button.addEventListener('click', (e) => {
                    if (e.target.closest('a') !== null) return;
                    e.stopPropagation();
                    panelDiv.classList.toggle('hidden');
                    const actualChevron = button.querySelector('svg[data-lucide="chevron-down"]');
                    if (actualChevron) {
                        actualChevron.classList.toggle('rotate-180');
                    } else if (chevronIcon) {
                        chevronIcon.classList.toggle('rotate-180');
                    }
                });

            } else {
                const link = createNavLink(item, true, level);
                parentElement.appendChild(link);
            }
        });
    };

    // --- Script untuk Menu Mobile (Hamburger Toggle) ---
    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.toggle('hidden');
            
            if (isHidden) {
                menuBtn.innerHTML = '<i data-lucide="menu" class="h-6 w-6"></i>';
                createIcons({ icons });
            } else {
                menuBtn.innerHTML = '<i data-lucide="x" class="h-6 w-6"></i>';
                createIcons({ icons });
            }
        });
    }

    const closeMobileMenu = () => {
        if (mobileMenu) {
            mobileMenu.classList.add('hidden');
        }
        if (menuBtn) {
            menuBtn.innerHTML = '<i data-lucide="menu" class="h-6 w-6"></i>';
            createIcons({ icons });
        }
    }

    mobileNavContainer.addEventListener('click', (e) => {
        if (e.target.classList.contains('mobile-link')) {
            closeMobileMenu();
        }
    });

    // --- Inisialisasi Awal ---
    renderDesktopNav();
    renderMegaMenu();
    renderMobileNav(globalNavigationData, mobileNavContainer);

    createIcons({ icons });

    setupMegaMenuListeners();
});