// Import PNotify dari path lokal yang benar.
import PNotify from '../assets/vendor/pnotify/PNotify.js';
import PNotifyButtons from '../assets/vendor/pnotify/PNotifyButtons.js';

// Mengatur default untuk semua notifikasi PNotify
PNotify.defaults.delay = 3000; // Notifikasi akan hilang setelah 3 detik
PNotify.defaults.closerHover = false; // Tombol close selalu terlihat

// Membuat objek konfigurasi untuk stack.
PNotify.defaults.stack = {
    dir1: 'up', // Notifikasi akan muncul dari bawah ke atas
    dir2: 'left',
    firstpos1: 25,
    firstpos2: 25,
    push: 'top'
};

// Menambahkan event listener ke setiap tombol.
document.getElementById('notify-success').addEventListener('click', () => {
    PNotify.success({
        title: 'Success!',
        text: 'This is a success notification.'
    });
});

document.getElementById('notify-info').addEventListener('click', () => {
    PNotify.info({
        title: 'Information',
        text: 'A new update is available for download.'
    });
});

document.getElementById('notify-error').addEventListener('click', () => {
    PNotify.error({
        title: 'Error!',
        text: 'Could not save changes. Please try again.'
    });
});

document.getElementById('notify-notice').addEventListener('click', () => {
    PNotify.notice({
        title: 'Notice',
        text: 'Your subscription is about to expire.'
    });
});
