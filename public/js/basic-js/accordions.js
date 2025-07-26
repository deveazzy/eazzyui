/*
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 */

import { createIcons, icons } from "/assets/vendor/lucide/lucide.js";

document.addEventListener("DOMContentLoaded", () => {
  createIcons({ icons }); // Initialize Lucide icons

  /**
   * Initializes accordion functionality for a given group.
   * @param {string} groupName - The value of the data-accordion-group attribute.
   * @param {boolean} allowMultipleOpen - True if multiple panels can be open simultaneously, false otherwise.
   */
  const initAccordionGroup = (groupName, allowMultipleOpen) => {
    const accordionContainer = document.querySelector(
      `[data-accordion-group="${groupName}"]`
    );
    if (!accordionContainer) return;

    const accordionHeaders =
      accordionContainer.querySelectorAll(".accordion-header");

    accordionHeaders.forEach((header) => {
      header.addEventListener("click", () => {
        const accordionItem = header.closest(".accordion-item");
        const content = accordionItem.querySelector(".accordion-content");
        const chevronIcon = header.querySelector(
          "i[data-lucide='chevron-down']"
        );

        const isExpanded = header.getAttribute("aria-expanded") === "true";

        if (allowMultipleOpen) {
          // Toggle the clicked accordion item
          if (isExpanded) {
            header.setAttribute("aria-expanded", "false");
            content.classList.add("hidden");
            chevronIcon?.classList.remove("rotate-180");
            chevronIcon?.classList.add("rotate-0");
          } else {
            header.setAttribute("aria-expanded", "true");
            content.classList.remove("hidden");
            chevronIcon?.classList.remove("rotate-0");
            chevronIcon?.classList.add("rotate-180");
          }
        } else {
          // Close all other accordions in the same group
          accordionHeaders.forEach((otherHeader) => {
            const otherItem = otherHeader.closest(".accordion-item");
            const otherContent = otherItem.querySelector(".accordion-content");
            const otherChevronIcon = otherHeader.querySelector(
              "i[data-lucide='chevron-down']"
            );

            if (
              otherHeader !== header &&
              otherHeader.getAttribute("aria-expanded") === "true"
            ) {
              otherHeader.setAttribute("aria-expanded", "false");
              otherContent.classList.add("hidden");
              otherChevronIcon?.classList.remove("rotate-180");
              otherChevronIcon?.classList.add("rotate-0");
            }
          });

          // Toggle the clicked accordion item
          if (isExpanded) {
            header.setAttribute("aria-expanded", "false");
            content.classList.add("hidden");
            chevronIcon?.classList.remove("rotate-180");
            chevronIcon?.classList.add("rotate-0");
          } else {
            header.setAttribute("aria-expanded", "true");
            content.classList.remove("hidden");
            chevronIcon?.classList.remove("rotate-0");
            chevronIcon?.classList.add("rotate-180");
          }
        }
      });
    });

    // Initial state setup: ensure aria-expanded matches hidden class
    accordionHeaders.forEach((header) => {
      const content = header
        .closest(".accordion-item")
        .querySelector(".accordion-content");
      const chevronIcon = header.querySelector("i[data-lucide='chevron-down']");
      if (content.classList.contains("hidden")) {
        header.setAttribute("aria-expanded", "false");
        chevronIcon?.classList.remove("rotate-180");
        chevronIcon?.classList.add("rotate-0");
      } else {
        header.setAttribute("aria-expanded", "true");
        chevronIcon?.classList.remove("rotate-0");
        chevronIcon?.classList.add("rotate-180");
      }
    });
  };

  // Initialize each accordion group
  initAccordionGroup("basic-accordion", false); // Only one open at a time
  initAccordionGroup("icon-accordion", false); // Only one open at a time
  initAccordionGroup("multiple-accordion", true); // Multiple can be open (FAQ style)
});
