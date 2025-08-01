/*
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 */

document.addEventListener("DOMContentLoaded", () => {
  /**
   * Initializes Hero Section v1: Dynamic Text & Image Animation.
   */
  const setupHeroV1 = () => {
    const splideElement = document.getElementById("splide-hero-main");
    if (!splideElement) return;

    const splide = new Splide(splideElement, {
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

      animatableChildren.forEach((el) => {
        el.classList.remove(...animationClasses);
        el.style.opacity = "0";
      });
      if (imageElement) imageElement.classList.remove("scale-105");
      captionElement.classList.add("opacity-0");

      if (isEntering) {
        setTimeout(() => {
          captionElement.classList.remove("opacity-0");
          if (imageElement) imageElement.classList.add("scale-105");
          animatableChildren.forEach((el) => {
            el.style.opacity = "1";
            el.classList.add("animate__animated");
          });
          const [icon, heading, text, cta] = animatableChildren;
          if (captionElement.classList.contains("items-start")) {
            if (icon)
              icon.classList.add("animate__zoomIn", "animate__delay-0-5s");
            if (heading)
              heading.classList.add("animate__fadeInUp", "animate__delay-1s");
            if (text)
              text.classList.add("animate__fadeInUp", "animate__delay-1-5s");
            if (cta)
              cta.classList.add("animate__bounceIn", "animate__delay-2s");
          } else if (captionElement.classList.contains("items-center")) {
            if (icon)
              icon.classList.add("animate__fadeInDown", "animate__delay-0-5s");
            if (heading)
              heading.classList.add("animate__zoomIn", "animate__delay-1s");
            if (text)
              text.classList.add("animate__fadeInUp", "animate__delay-1-5s");
            if (cta)
              cta.classList.add("animate__bounceIn", "animate__delay-2s");
          } else if (captionElement.classList.contains("items-end")) {
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
        }, 750);
      }
    };

    splide.on("mounted", () => {
      const initialSlide = splide.Components.Slides.getAt(0)?.slide;
      if (initialSlide) {
        const imageElement = initialSlide.querySelector(
          "img[data-splide-lazy]"
        );
        if (imageElement && typeof imagesLoaded === "function") {
          imagesLoaded(imageElement, () =>
            animateHeroSlide(initialSlide, true)
          );
        } else {
          animateHeroSlide(initialSlide, true);
        }
      }
    });

    splide.on("move", (newIndex, oldIndex) => {
      const oldSlideElement = splide.Components.Slides.getAt(oldIndex)?.slide;
      const newSlideElement = splide.Components.Slides.getAt(newIndex)?.slide;
      if (oldSlideElement) animateHeroSlide(oldSlideElement, false);
      if (newSlideElement) {
        const imageElement = newSlideElement.querySelector(
          "img[data-splide-lazy]"
        );
        if (imageElement && typeof imagesLoaded === "function") {
          imagesLoaded(imageElement, () =>
            animateHeroSlide(newSlideElement, true)
          );
        } else {
          animateHeroSlide(newSlideElement, true);
        }
      }
    });

    splide.mount();
  };

  /**
   * Initializes Hero Section v2: Abstract Shape Background Effect.
   */
  const setupHeroV2 = () => {
    const splideElement = document.getElementById("splide-hero-main-v2");
    if (!splideElement) return;

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

    const createRandomShapes = (container) => {
      container.innerHTML = "";
      const shapeCount = 30;
      const isDesktop = window.innerWidth >= 768;

      for (let i = 0; i < shapeCount; i++) {
        const shape = document.createElement("div");
        shape.classList.add("shape-item");
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
        setTimeout(
          () => shape.classList.add("is-visible"),
          Math.random() * 1000
        );
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
        createRandomShapes(shapeContainer);
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

    splide.on("mounted", () => {
      const initialSlide = splide.Components.Slides.getAt(0)?.slide;
      if (initialSlide) animateHeroSlide(initialSlide, true);
    });

    splide.on("move", (newIndex, oldIndex) => {
      const oldSlide = splide.Components.Slides.getAt(oldIndex)?.slide;
      const newSlide = splide.Components.Slides.getAt(newIndex)?.slide;
      if (oldSlide) animateHeroSlide(oldSlide, false);
      if (newSlide) animateHeroSlide(newSlide, true);
    });

    splide.mount();
  };

  /**
   * Initializes Hero Section v3: Tech Circuit Background Effect.
   */
  const setupHeroV3 = () => {
    const splideElement = document.getElementById("splide-hero-main-v3");
    if (!splideElement) return;

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
          if (isHorizontal) line.style.width = `${length}px`;
          else line.style.height = `${length}px`;
        }, Math.random() * 1500);
      }
    };

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

    splide.on("mounted", () => {
      const initialSlide = splide.Components.Slides.getAt(0)?.slide;
      if (initialSlide) animateHeroSlide(initialSlide, true);
    });
    splide.on("move", (newIndex, oldIndex) => {
      const oldSlide = splide.Components.Slides.getAt(oldIndex)?.slide;
      const newSlide = splide.Components.Slides.getAt(newIndex)?.slide;
      if (oldSlide) animateHeroSlide(oldSlide, false);
      if (newSlide) animateHeroSlide(newSlide, true);
    });
    splide.mount();
  };

  /**
   * Initializes Hero Section v4: Tech Circuit with Thumbnail Navigation.
   */
  const setupHeroV4 = () => {
    // Note: The ID is changed to 'splide-hero-main-v4' to avoid conflicts.
    const splideElement = document.getElementById("splide-hero-main-v4");
    if (!splideElement) return;

    const splide = new Splide(splideElement, {
      type: "loop",
      autoplay: true,
      interval: 4000,
      arrows: true,
      pagination: false, // Pagination is handled by custom thumbnails
      speed: 700,
      pauseOnHover: true,
      keyboard: true,
      easing: "cubic-bezier(0.25, 0.1, 0.25, 1.0)",
    });

    const setupCustomThumbnails = (splideInstance) => {
      // Note: The ID is changed to 'hero-thumbnails-container-v4'.
      const viewport = document.getElementById("hero-thumbnails-container-v4");
      if (!viewport) return;

      viewport.innerHTML = "";
      const track = document.createElement("div");
      track.className = "thumbnail-track";
      viewport.appendChild(track);

      const slides = splideInstance.Components.Slides.get(false);
      const thumbnailItems = [];

      slides.forEach((slide, index) => {
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
        let newPositionX =
          targetOffset -
          activeIndex * thumbWidthWithMargin -
          parseFloat(thumbStyle.marginLeft);
        track.style.transform = `translateX(${newPositionX}px)`;
        thumbnailItems.forEach((item, idx) =>
          item.classList.toggle("is-active", idx === activeIndex)
        );
      };

      splideInstance.on("mounted active", (activeSlide) =>
        updateThumbnailState(activeSlide.index)
      );
      window.addEventListener("resize", () =>
        setTimeout(() => updateThumbnailState(splideInstance.index), 100)
      );
    };

    // Animation functions are the same as v3, just acting on a different slider instance.
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
          if (isHorizontal) line.style.width = `${length}px`;
          else line.style.height = `${length}px`;
        }, Math.random() * 1500);
      }
    };

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

    splide.on("mounted", () => {
      const initialSlide = splide.Components.Slides.getAt(0)?.slide;
      if (initialSlide) animateHeroSlide(initialSlide, true);
      setupCustomThumbnails(splide); // Setup thumbnails on mount.
    });
    splide.on("move", (newIndex, oldIndex) => {
      const oldSlide = splide.Components.Slides.getAt(oldIndex)?.slide;
      const newSlide = splide.Components.Slides.getAt(newIndex)?.slide;
      if (oldSlide) animateHeroSlide(oldSlide, false);
      if (newSlide) animateHeroSlide(newSlide, true);
    });

    splide.mount();
  };

  // Run all setup functions
  setupHeroV1();
  setupHeroV2();
  setupHeroV3();
  setupHeroV4();
  lucide.createIcons();
});
