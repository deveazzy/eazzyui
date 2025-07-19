document.addEventListener('DOMContentLoaded', function () {
var splide = new Splide('#contoh-slider', {
type       : 'loop', // 'slide', 'loop', atau 'fade'
perPage    : 3,      // Tampilkan 3 slide sekaligus
perMove    : 1,      // Pindah 1 slide saat navigasi
gap        : '1rem', // Jarak antar slide
pagination : true,   // Tampilkan pagination dots
arrows     : true,   // Tampilkan panah navigasi
breakpoints: {
    768: { // Untuk layar tablet
    perPage: 2,
    },
    640: { // Untuk layar mobile
    perPage: 1,
    },
},
});
splide.mount();
});