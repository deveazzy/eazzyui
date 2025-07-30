document.addEventListener("DOMContentLoaded", function () {
  // Inisialisasi Tom Select untuk elemen <select multiple>
  new TomSelect("#product-tags", {
    plugins: ["caret_position", "input_autogrow", "remove_button"],
    persist: false,
    create: true,
  });
});
