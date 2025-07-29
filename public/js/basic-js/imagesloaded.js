/*
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 */
function initializeImagesLoaded() {
  const gallery = document.querySelector("#my-gallery");

  if (gallery) {
    const imgLoad = imagesLoaded(gallery);

    imgLoad.on("progress", function (instance, image) {
      const item = image.img.parentNode;
      item.classList.add("loaded");
      //   console.log(
      //     "Gambar dimuat: " + image.img.src + " status: " + image.isLoaded
      //   );
    });

    imgLoad.on("always", function () {
      //   console.log("Semua gambar dalam galeri telah dimuat!");
    });
  } else {
    console.warn("Elemen galeri dengan ID #my-gallery tidak ditemukan.");
  }
}

document.addEventListener("DOMContentLoaded", initializeImagesLoaded);
