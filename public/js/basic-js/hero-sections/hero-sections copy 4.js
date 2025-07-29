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
      interval: 4000,
      arrows: true,
      pagination: false, // [BARIS INI DIUBAH] Mengganti 'true' menjadi 'false'
      speed: 700,
      pauseOnHover: true,
      keyboard: true,
      easing: "cubic-bezier(0.25, 0.1, 0.25, 1.0)",
    });

    // =================================================================
    // [KODE BARU DITAMBAHKAN DI SINI]
    /**
     * Membuat dan menyinkronkan thumbnail kustom dengan slider utama.
     */
    const setupCustomThumbnails = (splideInstance) => {
      const viewport = document.getElementById("hero-thumbnails-container");
      if (!viewport) return;

      viewport.innerHTML = "";

      const track = document.createElement("div");
      track.className = "thumbnail-track";
      viewport.appendChild(track);

      // [PASTIKAN BARIS INI BENAR]
      // Menambahkan 'false' adalah kunci untuk memperbaiki bug ini.
      const slides = splideInstance.Components.Slides.get(false);

      const thumbnailItems = [];

      slides.forEach((slide, index) => {
        // ... sisa kode di dalam loop ini tidak perlu diubah ...
        const thumbButton = document.createElement("button");
        thumbButton.className = "thumbnail-item";
        const slideIcon = slide.slide.querySelector("[data-lucide]");
        if (slideIcon) {
          thumbButton.innerHTML = `<i data-lucide="${slideIcon.getAttribute(
            "data-lucide"
          )}"></i>`;
        }
        thumbButton.addEventListener("click", () => splideInstance.go(index));
        track.appendChild(thumbButton);
        thumbnailItems.push(thumbButton);
      });

      if (typeof lucide !== "undefined") {
        lucide.createIcons();
      }

      if (thumbnailItems.length === 0) return;

      const updateThumbnailState = (activeIndex) => {
        if (!thumbnailItems[activeIndex]) return;

        const thumb = thumbnailItems[activeIndex];
        const thumbStyle = window.getComputedStyle(thumb);
        const thumbMargin =
          parseFloat(thumbStyle.marginLeft) +
          parseFloat(thumbStyle.marginRight);
        const thumbWidthWithMargin = thumb.offsetWidth + thumbMargin;

        const viewportCenter = viewport.offsetWidth / 2;
        const activeThumbCenter = thumb.offsetWidth / 2;
        const targetOffset = viewportCenter - activeThumbCenter;

        // Hitung posisi dasar
        let newPositionX = targetOffset - activeIndex * thumbWidthWithMargin;

        // [INI PERBAIKANNYA]
        // Kurangi posisi dengan margin kiri untuk kompensasi, agar center sempurna.
        newPositionX -= parseFloat(thumbStyle.marginLeft);

        track.style.transform = `translateX(${newPositionX}px)`;

        thumbnailItems.forEach((item, idx) => {
          item.classList.toggle("is-active", idx === activeIndex);
        });
      };

      splideInstance.on("mounted active", (activeSlide) => {
        updateThumbnailState(activeSlide.index);
      });

      window.addEventListener("resize", () => {
        // Tambahkan jeda singkat agar browser selesai menghitung ulang layout
        setTimeout(() => {
          updateThumbnailState(splideInstance.index);
        }, 100);
      });
    };
    // [AKHIR DARI PENAMBAHAN KODE BARU]
    // =================================================================

    /**
     * Membuat efek latar "jalur elektronik" dengan garis-garis lurus acak.
     * [KODE ASLI ANDA - TIDAK DIUBAH]
     */
    const createCircuitLines = (container) => {
      container.innerHTML = "";
      const lineCount = 40;

      for (let i = 0; i < lineCount; i++) {
        const line = document.createElement("div");
        line.className = "line-item";

        const isHorizontal = Math.random() > 0.5;
        const length = Math.random() * 200 + 50;

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
     * [KODE ASLI ANDA - TIDAK DIUBAH]
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
        createCircuitLines(circuitContainer);

        setTimeout(() => {
          if (icon) {
            icon.style.opacity = "1";
            icon.classList.add(
              "animate__animated",
              "animate__rubberBand",
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

    // --- Event Listeners ---
    splide.on("mounted", () => {
      const initialSlide = splide.Components.Slides.getAt(0)?.slide;
      if (initialSlide) {
        animateHeroSlide(initialSlide, true);
      }
      // [BARIS BARU DITAMBAHKAN DI SINI]
      setupCustomThumbnails(splide);
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
