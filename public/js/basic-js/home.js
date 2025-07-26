/*
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 */

// Fungsi untuk mengelola tabindex pada link di dalam slide
function manageLinkTabindex(slideElement, disableFocus) {
  slideElement.querySelectorAll("a[href]").forEach((link) => {
    if (disableFocus) {
      link.setAttribute("tabindex", "-1");
    } else {
      link.removeAttribute("tabindex");
    }
  });
}

document.addEventListener("DOMContentLoaded", function () {
  // Hanya inisialisasi untuk Vendor Support Slider
  if (document.querySelector("#vendorSupportSlider")) {
    const splide = new Splide("#vendorSupportSlider", {
      type: "loop",
      perPage: 3,
      perMove: 1,
      autoplay: true,
      interval: 3000,
      pauseOnHover: false,
      arrows: true,
      pagination: false,
      gap: "1rem",
      breakpoints: {
        1024: {
          perPage: 3,
        },
        768: {
          perPage: 3,
        },
        640: {
          perPage: 1,
        },
        480: {
          perPage: 1,
        },
      },
    });

    splide.on("mounted", function () {
      setTimeout(() => {
        if (
          splide.Components &&
          splide.Components.Elements &&
          splide.Components.Elements.slides
        ) {
          splide.Components.Elements.slides.forEach((slideElement) => {
            const isCurrentSlide = slideElement.classList.contains("is-active");
            if (!isCurrentSlide) {
              manageLinkTabindex(slideElement, true);
            } else {
              manageLinkTabindex(slideElement, false);
            }
          });
        } else {
          console.error(
            "Splide Components.Elements.slides array is undefined after mounted event."
          );
        }
      }, 0);
    });

    splide.on("active", function (slide) {
      manageLinkTabindex(slide.slide, false);
    });

    splide.on("inactive", function (slide) {
      manageLinkTabindex(slide.slide, true);
    });

    splide.mount();
  }
});
