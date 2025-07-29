/*
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 */

document.addEventListener("DOMContentLoaded", () => {
  const splideElement = document.getElementById("splide-hero-main-v2");

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

    const createRandomShapes = (container, color) => {
      container.innerHTML = "";
      const shapeCount = 30;
      const isDesktop = window.innerWidth >= 768;

      for (let i = 0; i < shapeCount; i++) {
        const shape = document.createElement("div");
        shape.classList.add("shape-item");

        // --- PERBAIKAN DI SINI ---
        // Menghapus warna isi dan menggantinya dengan garis tepi (border)
        // shape.style.backgroundColor = "transparent";
        // shape.style.border = `3px solid ${color}`;

        let size;
        if (isDesktop) {
          size = Math.random() * 60 + 40;
          shape.style.width = `${size}px`;
          shape.style.height = `${size}px`;
        } else {
          size = Math.random() * 12 + 4;
          shape.style.width = `${size}vw`;
          shape.style.height = `${size}vw`;
        }

        shape.style.top = `${Math.random() * 100}%`;
        shape.style.left = `${Math.random() * 100}%`;

        container.appendChild(shape);

        setTimeout(() => {
          shape.classList.add("is-visible");
        }, Math.random() * 1000);
      }
    };

    const animateHeroSlide = (slideElement, isEntering) => {
      if (!slideElement) return;

      const captionElement = slideElement.querySelector(".splide-caption");
      const shapeContainer = slideElement.querySelector(".shape-container");
      if (!captionElement || !shapeContainer) return;

      const icon = captionElement.querySelector(".hero-icon");
      const textElements = [
        captionElement.querySelector(".hero-heading"),
        captionElement.querySelector(".hero-text"),
        captionElement.querySelector(".hero-cta"),
      ].filter(Boolean);

      const classesToRemove = [
        "animate__animated",
        "animate__flip",
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
      shapeContainer.innerHTML = "";

      if (isEntering) {
        const shapeColor =
          slideElement.dataset.shapeColor || "rgba(0, 0, 0, 0.2)";
        createRandomShapes(shapeContainer, shapeColor);

        setTimeout(() => {
          if (icon) {
            icon.style.opacity = "1";
            icon.classList.add(
              "animate__animated",
              "animate__flip",
              "animate__infinite",
              "animate__slow"
            );
          }
          textElements.forEach((el, index) => {
            el.style.opacity = "1";
            el.classList.add("animate__animated", "animate__fadeInUp");
            el.style.animationDelay = `${0.5 + index * 0.3}s`;
          });
        }, 500);
      }
    };

    // Event Listeners (disederhanakan tanpa imagesLoaded)
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
