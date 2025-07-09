    /**
     * Efek slider/expand search di mobile: aktif saat klik/fokus, bukan hover.
     */
    // Versi baru: tanpa .active, hanya manipulasi style langsung pada input/slider-label
    const initMobileSliderExpand = () => {
        if (!window.matchMedia('(max-width: 640px)').matches) return;
        const groups = document.querySelectorAll('.group.mobile-slider-scroll');

        groups.forEach(group => {
            const input = group.querySelector('input');
            const button = group.querySelector('button');
            // Reset style
            if (input) {
                input.style.width = '';
                input.style.opacity = '';
                input.style.paddingLeft = '';
                input.style.paddingRight = '';
                input.style.marginLeft = '';
                input.style.marginRight = '';
            }

            // Expand saat input focus
            if (input) {
                input.addEventListener('focus', () => {
                    input.style.width = '12rem';
                    input.style.opacity = '1';
                    input.style.paddingLeft = '1rem';
                    input.style.paddingRight = '1rem';
                    input.style.marginLeft = '0.5rem';
                });
                input.addEventListener('blur', () => {
                    setTimeout(() => {
                        input.style.width = '';
                        input.style.opacity = '';
                        input.style.paddingLeft = '';
                        input.style.paddingRight = '';
                        input.style.marginLeft = '';
                    }, 100);
                });
            }
            // Expand saat tombol di-klik
            if (button && input) {
                button.addEventListener('click', () => {
                    input.focus();
                });
            }
        });
    };

// /**
//  * css/buttons.js
//  *
//  * @author    [EazZy Project]
//  * @copyright Copyright (c) [2025] [EazZy Project]
//  * @license   https://opensource.org/licenses/MIT MIT License
//  * File ini berisi semua tautan ke aset eksternal (CSS, JavaScript)
//  * dan font yang digunakan di EazZy Project.
//  */


document.addEventListener('DOMContentLoaded', () => {
    /**
     * Inisialisasi semua komponen dropdown di halaman.
     * Sekarang mendukung animasi dan close on ESC.
     */
    const initDropdowns = () => {
        const dropdownWrappers = document.querySelectorAll('.dropdown-wrapper');
        if (dropdownWrappers.length === 0) return;

        dropdownWrappers.forEach(wrapper => {
            const toggleButton = wrapper.querySelector('.dropdown-toggle');
            if (toggleButton) {
                toggleButton.addEventListener('click', (event) => {
                    event.stopPropagation();
                    closeAllDropdowns(wrapper);
                    wrapper.classList.toggle('is-open');
                    // Fokus ke menu pertama jika dibuka
                    if (wrapper.classList.contains('is-open')) {
                        const firstMenu = wrapper.querySelector('.dropdown-menu a:not(.cursor-not-allowed)');
                        if (firstMenu) firstMenu.focus();
                        // Render ulang lucide icons di dalam dropdown
                        if (window.lucide && typeof window.lucide.createIcons === 'function') {
                            window.lucide.createIcons({ icons: window.lucide.icons });
                        }
                    }

        // Render ulang lucide icons untuk button sosial media dan notifikasi (jika ada)
        if (window.lucide && typeof window.lucide.createIcons === 'function') {
            window.lucide.createIcons({ icons: window.lucide.icons });
        }
                });
            }
        });

        // Menutup dropdown saat klik di luar
        window.addEventListener('click', () => {
            closeAllDropdowns();
        });

        // Menutup dropdown saat tekan ESC
        window.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeAllDropdowns();
        });
    };

    /**
     * Fungsi bantuan untuk menutup semua dropdown yang sedang terbuka.
     * @param {HTMLElement} [exceptWrapper=null] - Wrapper dropdown yang tidak akan ditutup.
     */
    const closeAllDropdowns = (exceptWrapper = null) => {
        document.querySelectorAll('.dropdown-wrapper.is-open').forEach(openWrapper => {
            if (openWrapper !== exceptWrapper) {
                openWrapper.classList.remove('is-open');
            }
        });
    };

    /**
     * Inisialisasi tombol dengan efek animasi saat diklik.
     * Logika ini telah disempurnakan untuk memastikan animasi dapat diputar ulang dengan andal.
     */
    const initClickAnimations = () => {
        const animatedButtons = document.querySelectorAll('.clickable-animated-btn');

        animatedButtons.forEach(button => {
            // Hapus event listener lama jika ada untuk mencegah duplikasi
            button.removeEventListener('click', handleAnimationClick);
            // Tambahkan event listener yang baru
            button.addEventListener('click', handleAnimationClick);
        });
    };

    /**
     * Handler untuk event klik pada tombol animasi.
     */
    function handleAnimationClick(event) {
        const button = event.currentTarget;
        const animationName = button.dataset.animation;
        
        // Hentikan jika animasi sedang berjalan
        if (!animationName || button.classList.contains('is-animating')) {
            return;
        }

        // Menambahkan kelas dari Animate.css
        const animationClasses = ['is-animating', 'animate__animated', `animate__${animationName}`];
        button.classList.add(...animationClasses);

        // Menghapus kelas setelah animasi selesai agar bisa diputar ulang
        button.addEventListener('animationend', () => {
            button.classList.remove(...animationClasses);
        }, { once: true });
    }

    // Panggil semua fungsi inisialisasi
    initDropdowns();
    initClickAnimations();
    initMobileSliderExpand();
});
