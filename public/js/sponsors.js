/*
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 */

import { sponsorData } from "/js/data/sponsor-data.js";

// FUNGSI UNTUK ACCORDION
const initAccordionGroup = (groupName, allowMultipleOpen) => {
  const accordionContainer = document.querySelector(
    `[data-accordion-group="${groupName}"]`
  );
  if (!accordionContainer) return;

  const accordionHeaders =
    accordionContainer.querySelectorAll(".accordion-header");

  accordionHeaders.forEach((header) => {
    header.addEventListener("click", () => {
      const accordionItem = header.closest(".accordion-item");
      const content = accordionItem.querySelector(".accordion-content");
      const chevronIcon = header.querySelector(".lucide-chevron-down");
      const isExpanded = header.getAttribute("aria-expanded") === "true";

      if (!allowMultipleOpen) {
        accordionHeaders.forEach((otherHeader) => {
          if (otherHeader !== header) {
            otherHeader.setAttribute("aria-expanded", "false");
            otherHeader
              .closest(".accordion-item")
              .querySelector(".accordion-content")
              .classList.add("hidden");

            const otherChevronIcon = otherHeader.querySelector(
              ".lucide-chevron-down"
            );
            otherChevronIcon?.classList.remove("rotate-180");
            otherChevronIcon?.classList.add("rotate-0");
          }
        });
      }

      if (isExpanded) {
        header.setAttribute("aria-expanded", "false");
        content.classList.add("hidden");
        chevronIcon?.classList.remove("rotate-180");
        chevronIcon?.classList.add("rotate-0");
      } else {
        header.setAttribute("aria-expanded", "true");
        content.classList.remove("hidden");
        chevronIcon?.classList.remove("rotate-0");
        chevronIcon?.classList.add("rotate-180");
      }
    });
  });

  // Force all accordions to be closed on page load
  accordionHeaders.forEach((header) => {
    header.setAttribute("aria-expanded", "false");
    const content = header
      .closest(".accordion-item")
      .querySelector(".accordion-content");
    const chevronIcon = header.querySelector(".lucide-chevron-down");

    content.classList.add("hidden");
    chevronIcon?.classList.remove("rotate-180");
    chevronIcon?.classList.add("rotate-0");
  });
};

document.addEventListener("DOMContentLoaded", () => {
  // BAGIAN UNTUK SLIDER SPONSOR
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
        img.width = 128;
        img.height = 128;
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
