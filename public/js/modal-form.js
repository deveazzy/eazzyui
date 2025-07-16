/**
 * @[EazZy Project] Copyright (c) [2025] [EazZy Project] license
 * @https://opensource.org/licenses/MIT MIT License
 * @path public/js/modal-form.js
 * @author EazZy Project
 */

document.addEventListener('DOMContentLoaded', function() {
    // --- Elemen Modal ---
    const infoModal = document.getElementById('infoModal');
    const confirmModal = document.getElementById('confirmModal');
    const formModal = document.getElementById('formModal');

    // --- Tombol Pemicu Modal ---
    const openInfoModalBtn = document.getElementById('openInfoModal');
    const openConfirmModalBtn = document.getElementById('openConfirmModal');
    const openFormModalBtn = document.getElementById('openFormModal');

    // --- Tombol Tutup Modal (untuk semua modal) ---
    // Menggunakan querySelectorAll untuk mendapatkan semua tombol tutup
    const closeButtons = document.querySelectorAll('.close-modal');

    // --- Fungsi untuk membuka modal ---
    function openModal(modalElement) {
        if (modalElement) {
            modalElement.classList.add('show');
            // Menambahkan event listener untuk menutup modal saat klik di luar konten
            modalElement.addEventListener('click', closeModalOutside);
            // Menonaktifkan scroll di body saat modal terbuka
            document.body.style.overflow = 'hidden';
        }
    }

    // --- Fungsi untuk menutup modal ---
    function closeModal(modalElement) {
        if (modalElement) {
            modalElement.classList.remove('show');
            modalElement.removeEventListener('click', closeModalOutside);
            document.body.style.overflow = ''; // Mengaktifkan kembali scroll body
        }
    }

    // --- Fungsi untuk menutup modal jika klik di luar konten modal ---
    function closeModalOutside(event) {
        // Jika event.target adalah modal-container itu sendiri (bukan child-nya)
        if (event.target.classList.contains('modal-container')) {
            closeModal(event.target);
        }
    }

    // --- Event Listener untuk Tombol Pemicu ---
    if (openInfoModalBtn) {
        openInfoModalBtn.addEventListener('click', function() {
            openModal(infoModal);
        });
    }

    if (openConfirmModalBtn) {
        openConfirmModalBtn.addEventListener('click', function() {
            openModal(confirmModal);
        });
    }

    if (openFormModalBtn) {
        openFormModalBtn.addEventListener('click', function() {
            openModal(formModal);
        });
    }

    // --- Event Listener untuk Tombol Tutup (Semua Modal) ---
    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Temukan modal terdekat yang memiliki class 'modal-container'
            const modalToClose = button.closest('.modal-container');
            closeModal(modalToClose);
        });
    });

    // --- Logika untuk Modal Konfirmasi (Contoh) ---
    const confirmActionButton = document.getElementById('confirmActionButton');
    if (confirmActionButton) {
        confirmActionButton.addEventListener('click', function() {
            customAlert('Tindakan dikonfirmasi! (Ini hanya contoh)'); // Menggunakan customAlert
            closeModal(confirmModal);
        });
    }

    // --- Logika untuk Formulir Pendaftaran (Contoh Sederhana) ---
    const registrationForm = document.getElementById('registrationForm');
    if (registrationForm) {
        registrationForm.addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah submit form default
            
            const fullName = document.getElementById('fullName').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const agreeTerms = document.getElementById('agreeTerms').checked;

            if (password !== confirmPassword) {
                customAlert('Kata sandi dan konfirmasi kata sandi tidak cocok!'); // Menggunakan customAlert
                return;
            }
            if (!agreeTerms) {
                customAlert('Anda harus menyetujui Syarat & Ketentuan!'); // Menggunakan customAlert
                return;
            }

            console.log('Form Submitted:', { fullName, email, password, agreeTerms });
            customAlert('Formulir berhasil disubmit! (Cek console log)'); // Menggunakan customAlert
            closeModal(formModal);
            registrationForm.reset(); // Reset form setelah submit
        });
    }

    // Inisialisasi ikon Lucide
    if (typeof lucide !== 'undefined' && lucide.createIcons) {
        lucide.createIcons();
    }
});

// Fungsi alert kustom sebagai pengganti window.alert()
function customAlert(message) {
    const alertBox = document.createElement('div');
    alertBox.className = 'fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-[9999]';
    alertBox.innerHTML = `
        <div class="bg-white p-6 rounded-lg shadow-xl max-w-sm w-full text-center">
            <p class="text-lg font-semibold mb-4">${message}</p>
            <button id="alertCloseButton" class="px-5 py-2 bg-blue-500 text-white rounded-full hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50 transition-all duration-200 ease-in-out">
                Oke
            </button>
        </div>
    `;
    document.body.appendChild(alertBox);

    document.getElementById('alertCloseButton').addEventListener('click', () => {
        document.body.removeChild(alertBox);
    });
}
