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
     */
    const initDropdowns = () => {
        const dropdownWrappers = document.querySelectorAll('.dropdown-wrapper');

        if (dropdownWrappers.length === 0) return;

        dropdownWrappers.forEach(wrapper => {
            const toggleButton = wrapper.querySelector('.dropdown-toggle');
            
            if (toggleButton) {
                toggleButton.addEventListener('click', (event) => {
                    // Menghentikan event agar tidak langsung ditangkap oleh listener window
                    event.stopPropagation();
                    
                    // Tutup semua dropdown lain sebelum membuka yang ini
                    closeAllDropdowns(wrapper);

                    // Buka/tutup dropdown yang diklik
                    wrapper.classList.toggle('is-open');
                });
            }
        });

        // Menambahkan listener di window untuk menutup dropdown saat klik di luar
        window.addEventListener('click', () => {
            closeAllDropdowns();
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
});
