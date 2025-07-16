/*
* @author  [EazZy Project]
* @copyright Copyright (c) [2025] [EazZy Project]
* @license   https://opensource.org/licenses/MIT MIT License
*/

/**
 * Fungsi untuk menampilkan modal error.
 * @param {string} title - Judul modal.
 * @param {string} message - Pesan yang akan ditampilkan di dalam modal.
 */
function showErrorModal(title, message) {
    // Hapus modal lama jika ada untuk mencegah duplikasi
    const existingModal = document.getElementById('error-modal');
    if (existingModal) {
        existingModal.remove();
    }

    // Buat elemen-elemen modal dengan class Tailwind CSS
    const modalOverlay = document.createElement('div');
    modalOverlay.id = 'error-modal';
    modalOverlay.className = 'fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50';

    const modalContent = document.createElement('div');
    modalContent.className = 'bg-white rounded-lg shadow-xl p-6 w-11/12 max-w-md';

    const modalHeader = document.createElement('div');
    modalHeader.className = 'flex items-center mb-4';
    
    // Ikon Error (SVG)
    const errorIcon = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
    errorIcon.setAttribute('class', 'h-8 w-8 text-red-500 mr-3');
    errorIcon.setAttribute('fill', 'none');
    errorIcon.setAttribute('viewBox', '0 0 24 24');
    errorIcon.setAttribute('stroke', 'currentColor');
    errorIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />';
    
    const modalTitle = document.createElement('h3');
    modalTitle.className = 'text-xl font-bold text-gray-800';
    modalTitle.textContent = title;

    modalHeader.appendChild(errorIcon);
    modalHeader.appendChild(modalTitle);

    const modalBody = document.createElement('p');
    modalBody.className = 'text-gray-600 mb-6';
    modalBody.textContent = message;

    const closeButton = document.createElement('button');
    closeButton.className = 'bg-red-600 text-white font-bold py-2 px-4 rounded-lg w-full hover:bg-red-700 transition-colors';
    closeButton.textContent = 'Tutup';
    closeButton.onclick = () => modalOverlay.remove();

    modalContent.appendChild(modalHeader);
    modalContent.appendChild(modalBody);
    modalContent.appendChild(closeButton);
    modalOverlay.appendChild(modalContent);

    document.body.appendChild(modalOverlay);
}


/**
 * Logika untuk NProgress.js
 * * Skrip ini mengelola progress bar di bagian atas halaman untuk memberikan
 * umpan balik visual selama pemuatan halaman. Ini menggunakan NProgress.inc()
 * untuk mensimulasikan kemajuan pada koneksi yang lambat.
 */
if (typeof NProgress !== 'undefined') {
    // Variabel untuk menyimpan ID dari interval timer kita.
    // Ini diperlukan agar kita bisa menghentikannya nanti.
    let nprogressInterval;

    // 1. Mulai progress bar segera.
    NProgress.start();

    // 2. Buat interval untuk menaikkan progress bar secara berkala.
    // Ini menciptakan ilusi kemajuan yang mulus, bahkan pada koneksi yang lambat.
    nprogressInterval = setInterval(function() { 
        NProgress.inc(); 
    }, 800); // Naikkan bar setiap 800 milidetik.

    // 3. Ketika semua aset halaman (gambar, css, dll) sudah selesai dimuat.
    window.onload = function() {
        // Hentikan interval agar tidak lagi memanggil .inc()
        clearInterval(nprogressInterval);
        
        // Selesaikan dan hilangkan progress bar.
        NProgress.done();
    };

} else {
    // Ganti console.error dengan memanggil fungsi modal yang lebih fokus pada masalah koneksi
    showErrorModal(
        'Masalah Koneksi', 
        'Gagal memuat. Mohon periksa koneksi internet Anda dan coba muat ulang halaman.'
    );
}


/**
 * Wadah untuk fungsi global lainnya.
 * * Anda meminta untuk membiarkan blok ini ada untuk fungsi global di masa depan.
 */
document.addEventListener('DOMContentLoaded', () => {
    // Anda bisa menambahkan fungsi global lainnya di sini.
    // Contoh: console.log('DOM siap untuk fungsi global lainnya.');
});
