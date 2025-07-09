// /**
//  * css/home.js
//  *
//  * @author    [EazZy Project]
//  * @copyright Copyright (c) [2025] [EazZy Project]
//  * @license   https://opensource.org/licenses/MIT MIT License
//  * File ini berisi semua tautan ke aset eksternal (CSS, JavaScript)
//  * dan font yang digunakan di EazZy Project.
//  */
document.addEventListener('DOMContentLoaded', () => {
    // --- Animasi Timeline saat Scroll ---
    const timelineItems = document.querySelectorAll('.timeline-item');
    
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        root: null,
        rootMargin: '0px',
        threshold: 0.1 
    });

    timelineItems.forEach(item => {
        observer.observe(item);
    });
    
    // --- Countdown Timer Script ---
    const launchDate = new Date("September 01, 2025 00:00:00").getTime();
    const countdownElement = document.getElementById("countdown");

    function updateCountdown() {
        const now = new Date().getTime();
        const distance = launchDate - now;

        if (distance < 0) {
            if (countdownElement) {
                countdownElement.innerHTML = `<div class="text-2xl text-green-600 font-bold">Sudah diluncurkan!</div>`;
            }
            clearInterval(interval);
            return;
        }

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        if (countdownElement) {
            countdownElement.innerHTML = `
                <div class="text-center">
                    <span class="text-4xl md:text-5xl font-bold text-blue-600">${String(days).padStart(2, '0')}</span>
                    <span class="block text-xs text-gray-500 uppercase">hari</span>
                </div>
                <div class="text-center">
                    <span class="text-4xl md:text-5xl font-bold text-blue-600">${String(hours).padStart(2, '0')}</span>
                    <span class="block text-xs text-gray-500 uppercase">jam</span>
                </div>
                <div class="text-center">
                    <span class="text-4xl md:text-5xl font-bold text-blue-600">${String(minutes).padStart(2, '0')}</span>
                    <span class="block text-xs text-gray-500 uppercase">menit</span>
                </div>
                <div class="text-center">
                    <span class="text-4xl md:text-5xl font-bold text-blue-600">${String(seconds).padStart(2, '0')}</span>
                    <span class="block text-xs text-gray-500 uppercase">detik</span>
                </div>
            `;
        }
    }

    const interval = setInterval(updateCountdown, 1000);
    updateCountdown();
});