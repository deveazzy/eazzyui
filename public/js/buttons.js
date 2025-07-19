// /**
//  * js/buttons.js
//  *
//  * @author    [EazZy Project]
//  * @copyright Copyright (c) [2025] [EazZy Project]
//  * @license   https://opensource.org/licenses/MIT MIT License
//  * File ini berisi semua tautan ke aset eksternal (CSS, JavaScript)
//  * dan font yang digunakan di EazZy Project.
//  */
import { createIcons, icons } from "/assets/vendor/lucide/lucide.js";

document.addEventListener("DOMContentLoaded", () => {
  // Pastikan lucide sudah tersedia sebelum mencoba memanggil createIcons
  if (typeof createIcons !== "function") {
    console.error("Lucide icons library not loaded correctly.");
    return; // Hentikan eksekusi jika Lucide tidak ada
  }

  const initMobileSliderExpand = () => {
    if (!window.matchMedia("(max-width: 640px)").matches) return;

    const groups = document.querySelectorAll(".group.mobile-slider-scroll");

    groups.forEach((group) => {
      const form = group.querySelector("form");

      if (!form) {
        return;
      }

      const input = form.querySelector("input");
      const button = form.querySelector("button");

      if (!input || !button) return;

      form.classList.add("mobile-expandable-form");

      const expandForm = () => {
        form.classList.add("is-expanded-mobile");
      };

      const collapseForm = () => {
        form.classList.remove("is-expanded-mobile");
      };

      button.addEventListener("click", (event) => {
        event.stopPropagation();
        if (form.classList.contains("is-expanded-mobile")) {
          collapseForm();
          input.blur();
        } else {
          expandForm();
          input.focus();
        }
      });

      input.addEventListener("focus", () => {
        expandForm();
      });

      input.addEventListener("blur", () => {
        setTimeout(() => {
          if (!form.contains(document.activeElement)) {
            collapseForm();
          }
        }, 100);
      });

      document.addEventListener("click", (event) => {
        if (
          !form.contains(event.target) &&
          form.classList.contains("is-expanded-mobile")
        ) {
          collapseForm();
          input.blur();
        }
      });
    });
  };

  const initDropdowns = () => {
    const dropdownWrappers = document.querySelectorAll(".dropdown-wrapper");
    if (dropdownWrappers.length === 0) return;

    dropdownWrappers.forEach((wrapper) => {
      const toggleButton = wrapper.querySelector(".dropdown-toggle");
      if (toggleButton) {
        toggleButton.addEventListener("click", (event) => {
          event.stopPropagation();
          closeAllDropdowns(wrapper);
          wrapper.classList.toggle("is-open");

          if (wrapper.classList.contains("is-open")) {
            const firstMenu = wrapper.querySelector(
              ".dropdown-menu a:not(.cursor-not-allowed)"
            );
            if (firstMenu) firstMenu.focus();
            // Panggilan createIcons di sini sudah OK, tapi pastikan juga dipanggil di luar scope ini
            // agar semua ikon awal dirender.
            // if (window.lucide && typeof createIcons === 'function') {
            //     createIcons({ icons }); // Ini hanya untuk ikon di dalam dropdown setelah dibuka
            // }
          }
        });
      }
    });

    window.addEventListener("click", (event) => {
      if (
        !event.target.closest(".dropdown-wrapper") &&
        !event.target.closest(".mobile-slider-scroll")
      ) {
        closeAllDropdowns();
      }
    });
    window.addEventListener("keydown", (e) => {
      if (e.key === "Escape") closeAllDropdowns();
    });
  };

  const closeAllDropdowns = (exceptWrapper = null) => {
    document
      .querySelectorAll(".dropdown-wrapper.is-open")
      .forEach((openWrapper) => {
        if (openWrapper !== exceptWrapper) {
          openWrapper.classList.remove("is-open");
        }
      });
  };

  const initClickAnimations = () => {
    const animatedButtons = document.querySelectorAll(
      ".clickable-animated-btn"
    );

    animatedButtons.forEach((button) => {
      button.removeEventListener("click", handleAnimationClick);
      button.addEventListener("click", handleAnimationClick);
    });
  };

  function handleAnimationClick(event) {
    const button = event.currentTarget;
    const animationName = button.dataset.animation;

    if (!animationName || button.classList.contains("is-animating")) {
      return;
    }

    const animationClasses = [
      "is-animating",
      "animate__animated",
      `animate__${animationName}`,
    ];
    button.classList.add(...animationClasses);

    button.addEventListener(
      "animationend",
      () => {
        button.classList.remove(...animationClasses);
      },
      { once: true }
    );
  }

  // Initialize all functionalities
  initDropdowns();
  initClickAnimations();
  initMobileSliderExpand();

  // Pastikan createIcons dipanggil setelah semua elemen HTML dimuat dan diinisialisasi
  // Ini adalah tempat terbaik untuk memastikan semua ikon dirender di halaman.
  if (window.lucide && typeof createIcons === "function") {
    createIcons({ icons });
  } else {
    // Ini akan membantu debugging jika lucide tidak termuat
    console.warn(
      "Lucide or createIcons function is not available on window object. Icons might not render."
    );
  }
});
