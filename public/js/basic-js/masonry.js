/*
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 */

function initializeMasonry(container, options = {}) {
  if (!container) {
    console.error("Masonry: Container tidak ditemukan.");
    return;
  }

  const defaultOptions = {
    itemSelector: ".grid-item",
    columnWidth: ".grid-sizer",
    percentPosition: true,
    gutter: 10,
  };

  const masonryOptions = { ...defaultOptions, ...options };

  const msnry = new Masonry(container, masonryOptions);

  window.addEventListener("resize", () => {
    msnry.layout();
  });

  console.log("Masonry diinisialisasi pada:", container);
}

export { initializeMasonry };
