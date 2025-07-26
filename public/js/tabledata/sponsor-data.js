/*
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 */

/**
 * Data sponsor global untuk EazZy Project.
 * Data ini akan digunakan untuk menampilkan logo dan informasi sponsor
 * di berbagai bagian situs (footer, slider beranda, halaman sponsor).
 *
 * @type {Array<Object>}
 * @property {string} name - Nama merek/perusahaan sponsor.
 * @property {string} logoUrl - URL logo sponsor.
 * @property {string} websiteUrl - URL situs web sponsor (untuk backlink).
 * @property {string} description - Deskripsi singkat tentang sponsor (opsional, untuk halaman sponsor).
 * @property {number} contributionRank - Peringkat kontribusi sponsor (1-5 untuk footer, 1-20 untuk slider, dll.).
 * Angka yang lebih kecil berarti kontribusi lebih besar.
 * Jika tidak ada peringkat spesifik, bisa diisi 999 atau sejenisnya.
 */
const sponsorData = [
  {
    name: "EazZy Project",
    logoUrl: "/assets/images/logo.png", // Ganti dengan URL logo asli
    websiteUrl: "https://eazzy-project.com/",
    description: "Merancang dan membangun solusi digital yang powerful,",
    contributionRank: 1, // Contoh: Top 5
  },
];

export { sponsorData };
