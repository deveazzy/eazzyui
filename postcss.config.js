// postcss.config.js
module.exports = {
  plugins: {
    'postcss-import-ext-glob': {}, // Jalankan ini pertama untuk memproses @import .../**/*.css
    'tailwindcss': {},
    'autoprefixer': {},
  },
}