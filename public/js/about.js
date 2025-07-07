/**
 * js/about-specific.js
 *
 * File ini berisi JavaScript yang spesifik hanya untuk halaman about,
 * seperti animasi fade-in saat scroll.
 */

document.addEventListener('DOMContentLoaded', () => {
    // --- Script Global untuk Animasi On-Scroll ---
    // Skrip ini akan mencari semua elemen dengan kelas .animated-on-scroll
    // dan menambahkan kelas .is-visible saat elemen tersebut masuk ke layar.
    const animatedElements = document.querySelectorAll('.animated-on-scroll');
    
    if (animatedElements.length > 0) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Tambahkan kelas .is-visible untuk memicu animasi dari CSS
                    entry.target.classList.add('is-visible');
                    // Hentikan pengamatan setelah animasi berjalan sekali
                    observer.unobserve(entry.target);
                }
            });
        }, { 
            threshold: 0.1 // Pemicu saat 10% elemen terlihat
        });

        animatedElements.forEach(element => {
            observer.observe(element);
        });
    }

    // Kode global lainnya bisa ditambahkan di sini di masa depan.
});
