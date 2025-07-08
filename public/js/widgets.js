/**
 * js/widgets.js
 *
 * Versi ini telah disesuaikan untuk mendukung semua widget interaktif
 * yang ada di halaman widgets.php yang telah diperbarui.
 */

// Diasumsikan Lucide diimpor dari path yang benar di proyek Anda.
// Jika path salah, ikon mungkin tidak muncul, tapi tidak akan menyebabkan bug pada chart.
import { createIcons, icons } from '../assets/vendor/lucide/lucide.js';

document.addEventListener('DOMContentLoaded', () => {

    /**
     * Inisialisasi Grafik Performa Situs
     * Menganimasikan SVG ring chart saat elemen masuk ke dalam viewport.
     * Target: .performance-widget (sebagai container)
     */
    const initPerformanceChart = () => {
        // PERBAIKAN: Target diubah ke container pembungkus, .performance-widget
        const performanceWidgets = document.querySelectorAll('.performance-widget');
        if (performanceWidgets.length === 0) return;

        performanceWidgets.forEach((widgetContainer, index) => {
            // PERBAIKAN: Cari elemen-elemen di dalam container widget yang benar
            const progressBar = widgetContainer.querySelector('.performance-progress-bar');
            const progressText = widgetContainer.querySelector('.performance-text');
            
            // Validasi yang lebih kuat untuk memastikan semua elemen ada
            if (!progressBar || !progressText) {
                console.error(`Elemen untuk chart performa #${index + 1} tidak lengkap. Pastikan .performance-widget, .performance-progress-bar, dan .performance-text ada di dalam HTML.`);
                return; // Lanjutkan ke widget berikutnya jika ada yang tidak lengkap
            }
            
            // Ambil nilai performa dari atribut data-score pada widget container
            const performanceScore = parseInt(widgetContainer.dataset.score) || 92; 
            const radius = progressBar.r.baseVal.value;
            const circumference = 2 * Math.PI * radius;

            progressBar.style.strokeDasharray = `${circumference} ${circumference}`;
            progressBar.style.strokeDashoffset = circumference;

            // Fungsi untuk menganimasikan chart saat terlihat
            const animateChart = () => {
                // Hindari animasi ganda jika sudah berjalan
                if (widgetContainer.classList.contains('is-animated')) return;
                widgetContainer.classList.add('is-animated');

                const offset = circumference - (performanceScore / 100) * circumference;
                progressBar.style.strokeDashoffset = offset;
                
                // Animasi teks angka dari 0 ke nilai target
                let current = 0;
                // Pastikan performanceScore tidak 0 untuk menghindari pembagian dengan nol
                const stepTime = performanceScore > 0 ? Math.max(1, 1500 / performanceScore) : 0;
                
                if (stepTime === 0) {
                    progressText.textContent = `${performanceScore}%`;
                    return;
                }

                const timer = setInterval(() => {
                    current++;
                    progressText.textContent = `${current}%`;
                    if (current >= performanceScore) {
                        clearInterval(timer);
                        // Pastikan nilai akhir tepat
                        progressText.textContent = `${performanceScore}%`;
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

            observer.observe(widgetContainer); // Observasi container utamanya
        });
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
            createIcons({ icons });
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

            if (!btnText) {
                console.error("Elemen .btn-text tidak ditemukan di dalam tombol submit.");
                return;
            }

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
