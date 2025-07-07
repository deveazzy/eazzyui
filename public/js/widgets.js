/**
 * js/widgets.js
 *
 * Versi ini telah disesuaikan untuk mendukung semua widget interaktif
 * yang ada di halaman widgets.php yang telah diperbarui.
 */

document.addEventListener('DOMContentLoaded', () => {

    /**
     * Inisialisasi Grafik Performa Situs
     * Menganimasikan SVG ring chart saat elemen masuk ke dalam viewport.
     * Target: .performance-ring
     */
    const initPerformanceChart = () => {
        const ringContainer = document.querySelector('.performance-ring');
        if (!ringContainer) return;

        const progressBar = ringContainer.querySelector('.performance-progress-bar');
        const progressText = ringContainer.querySelector('.performance-text');
        
        // Nilai performa bisa diatur di sini (0-100)
        const performanceScore = 92; 
        const radius = progressBar.r.baseVal.value;
        const circumference = 2 * Math.PI * radius;

        progressBar.style.strokeDasharray = `${circumference} ${circumference}`;
        progressBar.style.strokeDashoffset = circumference;

        // Fungsi untuk menganimasikan chart saat terlihat
        const animateChart = () => {
            const offset = circumference - (performanceScore / 100) * circumference;
            progressBar.style.strokeDashoffset = offset;
            
            // Animasi teks angka dari 0 ke nilai target
            let current = 0;
            const stepTime = 1500 / performanceScore; // Total animasi 1.5 detik
            const timer = setInterval(() => {
                current++;
                progressText.textContent = `${current}%`;
                if (current >= performanceScore) {
                    clearInterval(timer);
                }
            }, stepTime);
        };

        // Gunakan Intersection Observer untuk memicu animasi hanya saat terlihat
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateChart();
                    observer.unobserve(entry.target); // Hanya animasikan sekali
                }
            });
        }, { threshold: 0.5 });

        observer.observe(ringContainer);
    };

    /**
     * Inisialisasi Pemutar Musik
     * Menambahkan fungsionalitas play/pause dan animasi progress bar.
     * Target: .music-player
     */
    const initMusicPlayer = () => {
        const musicPlayer = document.querySelector('.music-player');
        if (!musicPlayer) return;

        const playPauseBtn = musicPlayer.querySelector('.play-pause-btn');
        const playIcon = '<i data-lucide="play-circle" class="w-10 h-10"></i>';
        const pauseIcon = '<i data-lucide="pause-circle" class="w-10 h-10"></i>';

        playPauseBtn.addEventListener('click', () => {
            const isPlaying = musicPlayer.classList.toggle('playing');
            playPauseBtn.innerHTML = isPlaying ? pauseIcon : playIcon;
            
            // Render ulang ikon Lucide setelah mengubah innerHTML
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
        });
    };

    /**
     * Inisialisasi Widget Form
     * Memberikan feedback visual saat form disubmit.
     * Target: .form-widget
     */
    const initFormWidgets = () => {
        const formWidgets = document.querySelectorAll('.form-widget');
        formWidgets.forEach(widget => {
            const form = widget.querySelector('form');
            if (!form) return;
            
            const button = form.querySelector('button[type="submit"]');
            const btnText = button.querySelector('.btn-text');

            form.addEventListener('submit', (e) => {
                e.preventDefault();
                if (button.classList.contains('is-sending')) return;

                const originalText = btnText.textContent;
                btnText.textContent = 'Mengirim...';
                button.classList.add('is-sending');
                
                // Simulasi pengiriman
                setTimeout(() => {
                    btnText.textContent = 'Terkirim!';
                    // Kembali ke state normal setelah 2 detik
                    setTimeout(() => {
                        btnText.textContent = originalText;
                        button.classList.remove('is-sending');
                        form.reset();
                    }, 2000);
                }, 1500);
            });
        });
    };

    /**
     * Inisialisasi Intersection Observer untuk semua animasi scroll
     * Memicu kelas 'is-visible' pada elemen saat masuk ke viewport.
     * Target: .animated-on-scroll
     */
    const initScrollAnimations = () => {
        const animatedElements = document.querySelectorAll('.animated-on-scroll');
        if (animatedElements.length === 0) return;

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target); // Hanya animasikan sekali
                }
            });
        }, {
            threshold: 0.1 // Memicu saat 10% elemen terlihat
        });

        animatedElements.forEach(el => observer.observe(el));
    };

    // Panggil semua fungsi inisialisasi untuk mengaktifkan widget
    initPerformanceChart();
    initMusicPlayer();
    initFormWidgets();
    initScrollAnimations();
});
