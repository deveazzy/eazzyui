document.addEventListener("DOMContentLoaded", function () {
  // Inisialisasi Tom Select untuk elemen <select multiple>
  new TomSelect("#product-tags", {
    plugins: ["caret_position", "input_autogrow", "remove_button"],
    plugins: {
      clear_button: {
        title: "Remove all selected options",
      },
    },
    persist: false,
    create: true,
  });
});
