/*
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 */

document.addEventListener("DOMContentLoaded", () => {
  /**
   * Applies a 'is-visible' class to timeline items when they are scrolled into view.
   */
  const initTimelineAnimation = () => {
    // Select all elements that should have the animation
    const timelineItems = document.querySelectorAll(".timeline-item");
    if (timelineItems.length === 0) return;

    const observer = new IntersectionObserver(
      (entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("is-visible");
            observer.unobserve(entry.target); // Stop observing after animation
          }
        });
      },
      {
        root: null,
        rootMargin: "0px",
        threshold: 0.1, // Trigger when 10% of the item is visible
      }
    );

    timelineItems.forEach((item) => {
      observer.observe(item);
    });
  };

  initTimelineAnimation();
});
