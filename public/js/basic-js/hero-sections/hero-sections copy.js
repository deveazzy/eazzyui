/*
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 */

document.addEventListener("DOMContentLoaded", () => {
  const splideHeroMainElement = document.getElementById("splide-hero-main");

  if (splideHeroMainElement) {
    const splide = new Splide(splideHeroMainElement, {
      type: "loop",
      autoplay: true,
      interval: 6000,
      lazyLoad: "sequential",
      arrows: true,
      pagination: true,
      speed: 1000,
      pauseOnHover: true,
      keyboard: true,
      easing: "cubic-bezier(0.25, 0.1, 0.25, 1.0)",
    });

    /**
     * Mengelola animasi untuk elemen-elemen di dalam sebuah slide.
     * @param {HTMLElement} slideElement - Elemen <li> dari slide.
     * @param {boolean} isEntering - True jika slide sedang masuk, false jika sedang keluar.
     */
    const animateHeroSlide = (slideElement, isEntering) => {
      if (!slideElement) return;

      const imageElement = slideElement.querySelector(".splide-img");
      const captionElement = slideElement.querySelector(".splide-caption");
      if (!captionElement) return;

      const animatableChildren = [
        captionElement.querySelector(".hero-icon"),
        captionElement.querySelector(".hero-heading"),
        captionElement.querySelector(".hero-text"),
        captionElement.querySelector(".hero-cta"),
      ].filter(Boolean);

      const animationClasses = [
        "animate__animated",
        "animate__zoomIn",
        "animate__fadeInUp",
        "animate__bounceIn",
        "animate__fadeInDown",
        "animate__fadeInRight",
        "animate__delay-0-5s",
        "animate__delay-1s",
        "animate__delay-1-5s",
        "animate__delay-2s",
      ];

      // Selalu reset state sebelum melakukan apapun
      animatableChildren.forEach((el) => {
        el.classList.remove(...animationClasses);
        el.style.opacity = "0";
      });
      if (imageElement) imageElement.classList.remove("scale-105");
      captionElement.classList.add("opacity-0");

      if (isEntering) {
        // Beri jeda yang lebih lama untuk memulai animasi agar terasa lebih lambat dan megah.
        setTimeout(() => {
          // Tampilkan gradasi dengan efek fade-in yang halus
          captionElement.classList.remove("opacity-0");
          if (imageElement) imageElement.classList.add("scale-105");

          // Jalankan animasi untuk elemen teks setelah gradasi mulai muncul
          animatableChildren.forEach((el) => {
            el.style.opacity = "1";
            el.classList.add("animate__animated");
          });

          const [icon, heading, text, cta] = animatableChildren;

          if (captionElement.classList.contains("items-start")) {
            // Rata Kiri
            if (icon)
              icon.classList.add("animate__zoomIn", "animate__delay-0-5s");
            if (heading)
              heading.classList.add("animate__fadeInUp", "animate__delay-1s");
            if (text)
              text.classList.add("animate__fadeInUp", "animate__delay-1-5s");
            if (cta)
              cta.classList.add("animate__bounceIn", "animate__delay-2s");
          } else if (captionElement.classList.contains("items-center")) {
            // Rata Tengah
            if (icon)
              icon.classList.add("animate__fadeInDown", "animate__delay-0-5s");
            if (heading)
              heading.classList.add("animate__zoomIn", "animate__delay-1s");
            if (text)
              text.classList.add("animate__fadeInUp", "animate__delay-1-5s");
            if (cta)
              cta.classList.add("animate__bounceIn", "animate__delay-2s");
          } else if (captionElement.classList.contains("items-end")) {
            // Rata Kanan
            if (icon)
              icon.classList.add("animate__fadeInRight", "animate__delay-0-5s");
            if (heading)
              heading.classList.add(
                "animate__fadeInRight",
                "animate__delay-1s"
              );
            if (text)
              text.classList.add("animate__fadeInRight", "animate__delay-1-5s");
            if (cta)
              cta.classList.add("animate__bounceIn", "animate__delay-2s");
          }
        }, 750); // Jeda diperpanjang menjadi 750ms untuk efek yang lebih lambat.
      }
    };

    // --- LOGIKA EVENT YANG DIPERBAIKI ---

    // 1. Penanganan KHUSUS untuk pemuatan pertama kali.
    splide.on("mounted", () => {
      const initialSlide = splide.Components.Slides.getAt(0)?.slide;
      if (initialSlide) {
        const imageElement = initialSlide.querySelector(
          "img[data-splide-lazy]"
        );
        if (imageElement) {
          imagesLoaded(imageElement, () => {
            animateHeroSlide(initialSlide, true);
          });
        } else {
          animateHeroSlide(initialSlide, true);
        }
      }
    });

    // 2. Penanganan untuk slide yang bergerak.
    splide.on("move", (newIndex, oldIndex) => {
      const oldSlideElement = splide.Components.Slides.getAt(oldIndex)?.slide;
      const newSlideElement = splide.Components.Slides.getAt(newIndex)?.slide;

      if (oldSlideElement) {
        animateHeroSlide(oldSlideElement, false);
      }

      if (newSlideElement) {
        const imageElement = newSlideElement.querySelector(
          "img[data-splide-lazy]"
        );
        if (imageElement) {
          imagesLoaded(imageElement, () => {
            animateHeroSlide(newSlideElement, true);
          });
        } else {
          animateHeroSlide(newSlideElement, true);
        }
      }
    });

    splide.mount();
  }
});
