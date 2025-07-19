// tailwind.config.js
module.exports = {
  content: [
    "./public/index.php",
    "./public/{layout,pages,config}/**/*.php",
    "./app/{Controllers,Biz}/**/*.php",
    "./public/js/**/*.js",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
