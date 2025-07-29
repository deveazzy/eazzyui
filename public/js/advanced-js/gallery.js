/*
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 */

import { galleryData } from "../data/gallery-data.js";

document.addEventListener("DOMContentLoaded", () => {
  const grid = document.getElementById("gallery-grid");
  const filters = document.getElementById("gallery-filters");
  const modal = document.getElementById("splide-modal");
  const splideList = modal.querySelector(".splide__list");
  const closeModalBtn = document.getElementById("splide-modal-close");
  let splideInstance = null;

  if (!grid || !filters || !modal) return;

  // Render thumbnail items on page load
  galleryData.forEach((item, index) => {
    const gridItem = document.createElement("div");
    gridItem.className = `gallery-item w-full sm:w-1/2 md:w-1/3 lg:w-1/4 p-2 ${item.category}`;
    gridItem.innerHTML = `
      <div class="cursor-pointer" data-index="${index}">
        <img class="w-full h-auto object-cover rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300" 
             src="${item.imageUrl}" alt="${item.title}">
      </div>
    `;
    grid.appendChild(gridItem);
  });

  // Render slide items for the modal slider
  galleryData.forEach((item) => {
    const slideItem = document.createElement("li");
    slideItem.className = "splide__slide flex items-center justify-center";
    slideItem.innerHTML = `<img data-splide-lazy="${item.imageUrl}" alt="${item.title}" class="max-h-full max-w-full w-auto h-auto object-contain">`;
    splideList.appendChild(slideItem);
  });

  // Initialize Masonry
  const msnry = new Masonry(grid, {
    itemSelector: ".gallery-item",
    percentPosition: true,
    gutter: 0,
  });
  imagesLoaded(grid).on("progress", () => msnry.layout());

  // --- FUNGSI BARU UNTUK MENUTUP MODAL ---
  const closeModal = () => {
    // PERBAIKAN BUG: Pastikan pointer-events-none ditambahkan kembali
    modal.classList.add("opacity-0", "invisible", "pointer-events-none");
    if (splideInstance) {
      // PERBAIKAN BUG: Gunakan destroy(true) untuk menghapus instance sepenuhnya
      splideInstance.destroy(true);
      splideInstance = null;
    }
  };

  // Handle click on gallery items to open modal
  grid.addEventListener("click", (event) => {
    const item = event.target.closest("[data-index]");
    if (!item) return;

    const startIndex = parseInt(item.getAttribute("data-index"), 10);

    // Tampilkan modal
    modal.classList.remove("opacity-0", "invisible", "pointer-events-none");

    // Inisialisasi Splide
    splideInstance = new Splide("#splide-main", {
      type: "loop",
      start: startIndex,
      lazyLoad: "nearby",
      heightRatio: 0.7, // Disesuaikan agar lebih pas di area 80%
      pagination: true,
      arrows: true,
    }).mount();
  });

  // Handle filter button clicks
  filters.addEventListener("click", function (event) {
    if (!event.target.matches("button")) return;
    const filterValue = event.target.getAttribute("data-filter");

    const currentChecked = filters.querySelector(".is-checked");
    if (currentChecked) {
      currentChecked.classList.remove(
        "is-checked",
        "bg-blue-600",
        "text-white"
      );
      currentChecked.classList.add("bg-gray-200", "text-gray-700");
    }
    event.target.classList.add("is-checked", "bg-blue-600", "text-white");
    event.target.classList.remove("bg-gray-200", "text-gray-700");

    const items = grid.querySelectorAll(".gallery-item");
    items.forEach((item) => {
      item.style.display =
        filterValue === "*" || item.classList.contains(filterValue.substring(1))
          ? "block"
          : "none";
    });
    msnry.layout();
  });

  // Event listener untuk tombol close dan background modal
  closeModalBtn.addEventListener("click", closeModal);
  modal.addEventListener("click", (event) => {
    // FITUR BARU: Tutup modal jika klik dilakukan pada background (bukan pada slider atau anaknya)
    if (event.target === modal) {
      closeModal();
    }
  });
});
