/*
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 */

document.addEventListener("DOMContentLoaded", () => {
  const splideHeroMainElement = document.getElementById("splide-hero-main");

  if (splideHeroMainElement) {
    const splideHeroMain = new Splide(splideHeroMainElement, {
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
    }).mount();

    /**
     * Menghapus kelas animasi Animate.css yang spesifik dan kelas delay dari elemen.
     * Kelas 'animate__animated' harus tetap ada.
     * @param {HTMLElement} el - Elemen DOM.
     */
    const removeSpecificAnimationClasses = (el) => {
      if (!el) return;
      el.classList.remove(
        "animate__fadeInDown",
        "animate__fadeInUp",
        "animate__zoomIn",
        "animate__bounceIn",
        "animate__fadeInLeft",
        "animate__fadeInRight",
        "animate__delay-0-5s",
        "animate__delay-1s",
        "animate__delay-1-5s",
        "animate__delay-2s"
      );
    };

    /**
     * Mengelola animasi seluruh slide hero, termasuk gambar dan caption.
     * @param {HTMLElement} slideElement - Elemen slide HTML (yaitu <li class="splide__slide">).
     * @param {boolean} isEntering - True jika slide sedang masuk, false jika sedang keluar.
     */
    const animateHeroSlide = (slideElement, isEntering) => {
      const imageElement = slideElement.querySelector(".splide-img");
      const captionElement = slideElement.querySelector(".splide-caption");
      if (!captionElement) return;

      const icon = captionElement.querySelector(".hero-icon");
      const heading = captionElement.querySelector(".hero-heading");
      const text = captionElement.querySelector(".hero-text");
      const ctaButton = captionElement.querySelector(".hero-cta");

      // Get all animatable child elements of the caption
      const animatableChildren = [icon, heading, text, ctaButton].filter(
        Boolean
      );

      // --- Reset State untuk semua elemen ---
      animatableChildren.forEach((el) => {
        removeSpecificAnimationClasses(el); // Hapus kelas animasi spesifik
        el.style.opacity = "0"; // Pastikan setiap elemen anak tersembunyi
      });
      if (imageElement) imageElement.classList.remove("scale-105");

      if (isEntering) {
        // Tampilkan caption container
        captionElement.classList.remove("opacity-0");

        // Animasi gambar latar belakang (zoom in halus)
        if (imageElement) {
          imageElement.classList.add("scale-105");
        }

        // Picu animasi elemen-elemen teks dengan efek dan staggered delay
        animatableChildren.forEach((el) => {
          // Force reflow after ensuring it's hidden (opacity:0)
          void el.offsetWidth;
        });

        // Apply new animations
        if (icon) icon.classList.add("animate__zoomIn", "animate__delay-0-5s");
        if (heading)
          heading.classList.add("animate__fadeInUp", "animate__delay-1s");
        if (text)
          text.classList.add("animate__fadeInUp", "animate__delay-1-5s");
        if (ctaButton)
          ctaButton.classList.add("animate__bounceIn", "animate__delay-2s");
      } else {
        // Slide sedang keluar: sembunyikan caption block segera
        captionElement.classList.add("opacity-0");
        // Individual elements already set to opacity: 0 at the start of the function.
        if (imageElement) {
          imageElement.classList.remove("scale-105");
        }
      }
    };

    // Event saat Splide di-mount (inisialisasi awal slider)
    splideHeroMain.on("mounted", function () {
      // Pastikan semua elemen teks yang akan dianimasikan memiliki kelas dasar 'animate__animated'
      // dan opacity awal 0 agar animasi masuk terlihat pertama kali.
      const allAnimatableElements = splideHeroMainElement.querySelectorAll(
        ".splide-caption .hero-icon, .splide-caption .hero-heading, .splide-caption .hero-text, .splide-caption .hero-cta"
      );
      allAnimatableElements.forEach((el) => {
        el.classList.add("animate__animated"); // Kelas dasar Animate.css
        el.style.opacity = "0"; // Pastikan opacity awal 0
      });

      // Pastikan semua caption blocks di awal tersembunyi
      splideHeroMainElement
        .querySelectorAll(".splide-caption")
        .forEach((caption) => {
          caption.classList.add("opacity-0");
        });

      // Picu animasi untuk slide pertama yang aktif setelah mounted dan gambarnya dimuat
      const initialSlide = splideHeroMainElement.querySelector(
        ".splide__slide.is-active"
      );
      if (initialSlide) {
        const initialImage = initialSlide.querySelector(
          "img[data-splide-lazy]"
        );
        if (initialImage) {
          imagesLoaded(initialImage, function () {
            animateHeroSlide(initialSlide, true);
          });
        } else {
          animateHeroSlide(initialSlide, true);
        }
      }
    });

    // Event saat slide menjadi aktif (berubah dari slide lain)
    splideHeroMain.on("active", function (slide) {
      const slideElement = slide.slide;
      const imageElement = slideElement.querySelector("img[data-splide-lazy]");

      if (imageElement) {
        imagesLoaded(imageElement, function () {
          animateHeroSlide(slideElement, true);
        });
      } else {
        animateHeroSlide(slideElement, true);
      }
    });

    // Event saat slide meninggalkan status aktif (beralih ke slide lain)
    splideHeroMain.on("inactive", function (slide) {
      animateHeroSlide(slide.slide, false);
    });
  }
});
