/*
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 */

document.addEventListener("DOMContentLoaded", () => {
  const splideElement = document.getElementById("splide-hero-main-v3");

  if (splideElement) {
    const splide = new Splide(splideElement, {
      type: "loop",
      autoplay: true,
      interval: 8000,
      arrows: true,
      pagination: true,
      speed: 1000,
      pauseOnHover: true,
      keyboard: true,
      easing: "cubic-bezier(0.25, 0.1, 0.25, 1.0)",
    });

    /**
     * Membuat efek latar "jalur elektronik" dengan garis-garis lurus acak.
     */
    const createCircuitLines = (container) => {
      container.innerHTML = "";
      const lineCount = 40; // Jumlah garis

      for (let i = 0; i < lineCount; i++) {
        const line = document.createElement("div");
        line.className = "line-item";

        const isHorizontal = Math.random() > 0.5;
        const length = Math.random() * 200 + 50; // Panjang acak

        if (isHorizontal) {
          line.style.width = "0px";
          line.style.height = "2px";
        } else {
          line.style.width = "2px";
          line.style.height = "0px";
        }

        line.style.top = `${Math.random() * 100}%`;
        line.style.left = `${Math.random() * 100}%`;

        container.appendChild(line);

        // Munculkan setiap garis dengan jeda dan animasi 'menggambar'
        setTimeout(() => {
          line.classList.add("is-visible");
          if (isHorizontal) {
            line.style.width = `${length}px`;
          } else {
            line.style.height = `${length}px`;
          }
        }, Math.random() * 1500);
      }
    };

    /**
     * Mengelola animasi untuk elemen-elemen di dalam sebuah slide.
     */
    const animateHeroSlide = (slideElement, isEntering) => {
      if (!slideElement) return;

      const captionElement = slideElement.querySelector(".splide-caption");
      const circuitContainer = slideElement.querySelector(".circuit-container");
      if (!captionElement || !circuitContainer) return;

      const icon = captionElement.querySelector(".hero-icon");
      const textElements = [
        captionElement.querySelector(".hero-heading"),
        captionElement.querySelector(".hero-text"),
        captionElement.querySelector(".hero-cta"),
      ].filter(Boolean);

      // Reset state menggunakan metode classList yang aman untuk semua elemen
      const classesToRemove = [
        "animate__animated",
        "animate__rubberBand",
        "animate__infinite",
        "animate__slow",
        "animate__fadeInUp",
      ];
      [icon, ...textElements].forEach((el) => {
        if (el) {
          el.classList.remove(...classesToRemove);
          el.style.animationDelay = "";
          el.style.opacity = "0";
        }
      });
      circuitContainer.innerHTML = "";

      if (isEntering) {
        // 1. Jalankan efek jalur elektronik yang baru (garis lurus)
        createCircuitLines(circuitContainer);

        // 2. Animasikan teks dan ikon setelah jeda
        setTimeout(() => {
          // Animasikan ikon dengan efek rubberBand berulang
          if (icon) {
            icon.style.opacity = "1";
            icon.classList.add(
              "animate__animated",
              "animate__rubberBand",
              "animate__infinite",
              "animate__slow"
            );
          }
          // Animasikan elemen teks lainnya
          textElements.forEach((el, index) => {
            el.style.opacity = "1";
            el.classList.add("animate__animated", "animate__fadeInUp");
            el.style.animationDelay = `${0.5 + index * 0.3}s`;
          });
        }, 500);
      }
    };

    // --- Event Listeners disederhanakan tanpa imagesLoaded ---
    splide.on("mounted", () => {
      const initialSlide = splide.Components.Slides.getAt(0)?.slide;
      if (initialSlide) {
        animateHeroSlide(initialSlide, true);
      }
    });

    splide.on("move", (newIndex, oldIndex) => {
      const oldSlide = splide.Components.Slides.getAt(oldIndex)?.slide;
      const newSlide = splide.Components.Slides.getAt(newIndex)?.slide;
      if (oldSlide) {
        animateHeroSlide(oldSlide, false);
      }
      if (newSlide) {
        animateHeroSlide(newSlide, true);
      }
    });

    splide.mount();
  }
});
