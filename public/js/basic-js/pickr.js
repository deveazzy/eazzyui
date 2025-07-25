/*
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 */

document.addEventListener("DOMContentLoaded", function () {
  const el = document.querySelector(".color-picker-instance");

  if (el) {
    const pickr = Pickr.create({
      el: el,
      theme: "classic",
      default: "#42445A",

      components: {
        // Komponen utama (true untuk menampilkan, false untuk menyembunyikan)
        preview: true,
        opacity: true,
        hue: true,

        // Opsi interaksi (input/output)
        interaction: {
          hex: true,
          rgba: true,
          hsla: true,
          hsva: true,
          cmyk: false,
          input: true,
          clear: true,
          save: true,
        },
      },
    });

    pickr.on("save", (color, instance) => {
      console.log("Warna dipilih:", color.toHEXA().toString());
    });

    pickr.on("change", (color, source, instance) => {});

    pickr.on("show", (col, instance) => {});

    pickr.on("hide", (col, instance) => {});

    pickr.on("clear", (instance) => {
      console.log("Pickr dibersihkan");
    });
  }
});
