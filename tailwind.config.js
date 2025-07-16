/** @type {import('tailwindcss').Config} */
module.exports = {
  // Konfigurasi ini memberitahu Tailwind file mana saja yang harus dipindai
  // untuk kelas-kelas Tailwind yang Anda gunakan.
  content: [
    "./index.php", // Untuk file index.php di root proyek
    "./{layout,page,config,biz}/**/*.php", // Pindai semua file PHP di folder ini dan subfolder
    "./js/**/*.js", // Pindai semua file JavaScript
    // Tambahkan path lain jika Anda memiliki file HTML atau template di lokasi lain
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
  ],
}
