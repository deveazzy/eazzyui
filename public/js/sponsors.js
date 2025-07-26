/*
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 */

import { sponsorData } from "/js/tabledata/sponsor-data.js";

// FUNGSI UNTUK ACCORDION
const initAccordionGroup = (groupName, allowMultipleOpen) => {
  const accordionContainer = document.querySelector(
    `[data-accordion-group="${groupName}"]`
  );
  if (!accordionContainer) return;

  const accordionHeaders =
    accordionContainer.querySelectorAll(".accordion-header");

  // Logika klik dikembalikan ke struktur asli Anda, dengan perbaikan pada animasi ikon
  accordionHeaders.forEach((header) => {
    header.addEventListener("click", () => {
      const accordionItem = header.closest(".accordion-item");
      const content = accordionItem.querySelector(".accordion-content");
      const chevronIcon = header.querySelector("i[data-lucide='chevron-down']");
      const isExpanded = header.getAttribute("aria-expanded") === "true";

      if (allowMultipleOpen) {
        // Logika untuk bisa membuka banyak panel
        if (isExpanded) {
          header.setAttribute("aria-expanded", "false");
          content.classList.add("hidden");
          chevronIcon?.classList.remove("rotate-180");
        } else {
          header.setAttribute("aria-expanded", "true");
          content.classList.remove("hidden");
          chevronIcon?.classList.add("rotate-180");
        }
      } else {
        // Logika untuk hanya satu panel terbuka (Struktur Asli Anda)
        // 1. Tutup semua panel lain
        accordionHeaders.forEach((otherHeader) => {
          if (otherHeader !== header) {
            const otherItem = otherHeader.closest(".accordion-item");
            const otherContent = otherItem.querySelector(".accordion-content");
            const otherChevronIcon = otherHeader.querySelector(
              "i[data-lucide='chevron-down']"
            );
            otherHeader.setAttribute("aria-expanded", "false");
            otherContent.classList.add("hidden");
            otherChevronIcon?.classList.remove("rotate-180");
          }
        });

        // 2. Buka atau tutup panel yang diklik
        if (isExpanded) {
          header.setAttribute("aria-expanded", "false");
          content.classList.add("hidden");
          chevronIcon?.classList.remove("rotate-180");
        } else {
          header.setAttribute("aria-expanded", "true");
          content.classList.remove("hidden");
          chevronIcon?.classList.add("rotate-180");
        }
      }
    });
  });

  // PERUBAHAN HANYA DI SINI: Memaksa semua accordion tertutup saat awal
  accordionHeaders.forEach((header) => {
    header.setAttribute("aria-expanded", "false");
    const content = header
      .closest(".accordion-item")
      .querySelector(".accordion-content");
    const chevronIcon = header.querySelector("i[data-lucide='chevron-down']");
    content.classList.add("hidden");
    chevronIcon?.classList.remove("rotate-180");
  });
};

document.addEventListener("DOMContentLoaded", () => {
  // BAGIAN UNTUK SLIDER SPONSOR (TIDAK DIUBAH)
  if (typeof Splide !== "undefined") {
    const sponsorSliderList = document.getElementById("sponsor-slider-list");
    const splideElement = document.getElementById("sponsorSplideContainer");

    if (sponsorSliderList && splideElement) {
      const sponsors = sponsorData;
      sponsorSliderList.innerHTML = "";

      sponsors.forEach((sponsor) => {
        const li = document.createElement("li");
        li.className = "splide__slide flex justify-center items-center p-4";

        const img = document.createElement("img");
        img.src = sponsor.logoUrl;
        img.alt = sponsor.name + " Logo";
        img.className =
          "w-32 h-32 object-contain rounded-lg bg-white shadow-md p-2";

        img.onerror = function () {
          this.onerror = null;
          this.src = `https://placehold.co/96x96/CCCCCC/666666?text=${sponsor.name}`;
        };

        if (sponsor.websiteUrl) {
          const a = document.createElement("a");
          a.href = sponsor.websiteUrl;
          a.target = "_blank";
          a.rel = "noopener noreferrer";
          a.appendChild(img);
          li.appendChild(a);
        } else {
          li.appendChild(img);
        }

        sponsorSliderList.appendChild(li);
      });

      setTimeout(() => {
        new Splide(splideElement, {
          type: "loop",
          perPage: 5,
          perMove: 1,
          autoplay: true,
          interval: 3000,
          pauseOnHover: false,
          arrows: false,
          pagination: false,
          gap: "1rem",
          breakpoints: {
            1200: { perPage: 5 },
            1024: { perPage: 4 },
            768: { perPage: 3 },
            640: { perPage: 1 },
          },
        }).mount();
      }, 100);
    }
  } else {
    console.warn("Splide.js is not loaded or not needed on this page.");
  }

  // INISIALISASI ACCORDION UNTUK HALAMAN SPONSORS
  initAccordionGroup("sponsor-details", false); // Hanya satu panel bisa terbuka
});
