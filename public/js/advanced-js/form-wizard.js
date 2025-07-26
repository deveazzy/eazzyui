/*
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 */

import { createIcons, icons } from "/assets/vendor/lucide/lucide.js";
import PNotify from "/assets/vendor/pnotify/PNotify.js";

PNotify.defaults.delay = 2000;
PNotify.defaults.closerHover = false;
PNotify.defaults.stack = {
  dir1: "up",
  dir2: "left",
  firstpos1: 25,
  firstpos2: 25,
  push: "top",
};

document.addEventListener("DOMContentLoaded", () => {
  createIcons({ icons }); // Initialize Lucide icons

  const formWizard = document.getElementById("formWizard");
  if (!formWizard) return; // Exit if wizard container not found

  const accordionItems = formWizard.querySelectorAll(".accordion-item");
  let currentStep = 1; // Start at the first step

  /**
   * Resets the validation state for an input field.
   * Removes error classes and hides feedback messages.
   * @param {HTMLElement} inputElement - The input element.
   */
  const resetValidationState = (inputElement) => {
    inputElement.classList.remove("border-red-500");
    const feedbackElement = inputElement.nextElementSibling;
    if (feedbackElement && feedbackElement.dataset.validationFeedback) {
      feedbackElement.textContent = "";
      feedbackElement.classList.add("hidden");
    }
  };

  /**
   * Sets the validation state for an input field.
   * Adds error classes and displays feedback messages.
   * @param {HTMLElement} inputElement - The input element.
   * @param {string} message - The validation error message.
   */
  const setValidationState = (inputElement, message) => {
    inputElement.classList.add("border-red-500");
    const feedbackElement = inputElement.nextElementSibling;
    if (feedbackElement && feedbackElement.dataset.validationFeedback) {
      feedbackElement.textContent = message;
      feedbackElement.classList.remove("hidden");
    }
  };

  /**
   * Validates all required fields within a given container (tab or accordion content).
   * @param {HTMLElement} container - The DOM element containing the fields to validate.
   * @returns {boolean} - True if all fields are valid, false otherwise.
   */
  const validateFields = (container) => {
    let isValid = true;
    const requiredInputs = container.querySelectorAll("[required]");

    requiredInputs.forEach((input) => {
      resetValidationState(input); // Reset before re-validating

      if (input.type === "checkbox") {
        if (!input.checked) {
          setValidationState(input, "Anda harus menyetujui ini.");
          isValid = false;
        }
      } else if (input.tagName === "SELECT") {
        if (input.value === "" || input.value === "Pilih Bahasa") {
          // Specific for placeholder option
          setValidationState(input, "Pilihan ini wajib diisi.");
          isValid = false;
        }
      } else if (input.value.trim() === "") {
        setValidationState(input, "Bidang ini wajib diisi.");
        isValid = false;
      } else if (
        input.type === "email" &&
        !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(input.value.trim())
      ) {
        setValidationState(input, "Format email tidak valid.");
        isValid = false;
      }
    });
    return isValid;
  };

  /**
   * Helper function to activate a specific tab within an accordion step.
   * This function now ONLY handles UI activation, no validation.
   * @param {HTMLElement} accordionItem - The current accordion item.
   * @param {number} tabIndexToActivate - The index of the tab button to activate.
   */
  const activateTab = (accordionItem, tabIndexToActivate) => {
    const tabNav = accordionItem.querySelector("nav[data-tab-group]");
    if (!tabNav) return;

    const tabButtons = tabNav.querySelectorAll(".tab-button");
    const targetButton = tabButtons[tabIndexToActivate];
    if (!targetButton) return;

    tabButtons.forEach((btn) => btn.classList.remove("active"));
    accordionItem
      .querySelectorAll(".tab-panel")
      .forEach((panel) => panel.classList.remove("active"));

    targetButton.classList.add("active");
    const targetPanel = document.querySelector(targetButton.dataset.tabTarget);
    if (targetPanel) {
      targetPanel.classList.add("active");
    }

    // If moving to summary tab, populate it
    if (targetButton.dataset.tabTarget === "#step3-tab1") {
      populateSummary();
    }
    updateWizardUI(); // Update button states based on new active tab
  };

  /**
   * Updates the UI for the current active step (accordion and tabs).
   */
  const updateWizardUI = () => {
    accordionItems.forEach((item, index) => {
      const header = item.querySelector(".accordion-header");
      const content = item.querySelector(".accordion-content");
      const chevronIcon = header.querySelector("i[data-lucide='chevron-down']");
      const stepNumber = parseInt(item.dataset.step);

      // Get buttons specific to this accordion item's footer
      const prevButton = item.querySelector(".btn-previous");
      const nextSummaryButton = item.querySelector(".btn-next-summary"); // For step 3, tab 1
      const submitFinalButton = item.querySelector(".btn-submit-final"); // For step 3, tab 2
      const generalNextButton = item.querySelector(".btn-next"); // For steps 1 & 2

      if (stepNumber === currentStep) {
        // Open current step
        header.setAttribute("aria-expanded", "true");
        content.classList.remove("hidden");
        chevronIcon?.classList.remove("rotate-0");
        chevronIcon?.classList.add("rotate-180");
        item.classList.add("active"); // Add active class for styling if needed

        // Initialize tabs for the current active accordion
        const currentTabNav = content.querySelector("nav[data-tab-group]");
        if (currentTabNav) {
          const tabButtons = currentTabNav.querySelectorAll(".tab-button");
          const tabPanels = content.querySelectorAll(".tab-panel");

          // Ensure the first tab is active by default if none are
          let activeTabButton =
            currentTabNav.querySelector(".tab-button.active");
          if (!activeTabButton) {
            activeTabButton = tabButtons[0];
            activeTabButton.classList.add("active");
            const targetPanel = document.querySelector(
              activeTabButton.dataset.tabTarget
            );
            if (targetPanel) {
              targetPanel.classList.add("active");
            }
          }

          // Update tab button styles for vertical tabs
          tabButtons.forEach((btn) => {
            btn.classList.remove(
              "text-blue-700",
              "bg-blue-50",
              "text-gray-600",
              "hover:bg-gray-100",
              "hover:text-gray-900"
            );
            btn
              .querySelector("i")
              ?.classList.remove(
                "text-blue-700",
                "text-gray-400",
                "group-hover:text-gray-500"
              );

            if (btn === activeTabButton) {
              btn.classList.add("text-blue-700", "bg-blue-50");
              btn.querySelector("i")?.classList.add("text-blue-700");
            } else {
              btn.classList.add(
                "text-gray-600",
                "hover:bg-gray-100",
                "hover:text-gray-900"
              );
              btn
                .querySelector("i")
                ?.classList.add("text-gray-400", "group-hover:text-gray-500");
            }
          });

          const activeTabIndex =
            Array.from(tabButtons).indexOf(activeTabButton);

          if (prevButton) {
            // Ensure prevButton has inline-flex when visible
            prevButton.classList.add("inline-flex");
            // Disable "Previous" if on the first tab of the first step
            if (currentStep === 1 && activeTabIndex === 0) {
              prevButton.setAttribute("disabled", "true");
              prevButton.classList.add("opacity-50", "cursor-not-allowed");
            } else {
              prevButton.removeAttribute("disabled");
              prevButton.classList.remove("opacity-50", "cursor-not-allowed");
            }
          }

          // --- LOGIKA UTAMA UNTUK TOMBOL DI LANGKAH 3 ---
          if (stepNumber === accordionItems.length) {
            // Ini adalah Langkah 3 (terakhir)
            const isActiveTabPersetujuan =
              activeTabButton.dataset.tabTarget === "#step3-tab2";
            const isActiveTabRingkasan =
              activeTabButton.dataset.tabTarget === "#step3-tab1";

            // Sembunyikan tombol umum 'btn-next' jika ada di langkah ini
            if (generalNextButton) {
              generalNextButton.classList.add("hidden");
              generalNextButton.classList.remove("inline-flex"); // Hapus inline-flex
            }

            if (nextSummaryButton && submitFinalButton) {
              // Pastikan tombol-tombol ini ada di HTML Langkah 3
              if (isActiveTabPersetujuan) {
                // Di tab "Persetujuan": Tampilkan "Selesai", sembunyikan "Selanjutnya"
                nextSummaryButton.classList.add("hidden");
                nextSummaryButton.classList.remove("inline-flex"); // Hapus inline-flex

                submitFinalButton.classList.remove("hidden");
                submitFinalButton.classList.add("inline-flex"); // Tambahkan inline-flex saat ditampilkan

                // Hapus atribut disabled terlebih dahulu untuk memastikan status bersih
                submitFinalButton.removeAttribute("disabled"); // <--- Perbaikan di sini

                // Atur status disabled untuk tombol "Selesai" berdasarkan checkbox
                const agreeTermsCheckbox =
                  document.getElementById("agree-terms");
                if (agreeTermsCheckbox) {
                  submitFinalButton.disabled = !agreeTermsCheckbox.checked;
                  if (submitFinalButton.disabled) {
                    submitFinalButton.classList.add(
                      "opacity-50",
                      "cursor-not-allowed"
                    );
                  } else {
                    submitFinalButton.classList.remove(
                      "opacity-50",
                      "cursor-not-allowed"
                    );
                  }
                } else {
                  // Jika checkbox tidak ditemukan (fallback), nonaktifkan tombol
                  submitFinalButton.disabled = true;
                  submitFinalButton.classList.add(
                    "opacity-50",
                    "cursor-not-allowed"
                  );
                }
              } else if (isActiveTabRingkasan) {
                // Di tab "Ringkasan": Tampilkan "Selanjutnya", sembunyikan "Selesai"
                nextSummaryButton.classList.remove("hidden");
                nextSummaryButton.classList.add("inline-flex"); // Tambahkan inline-flex saat ditampilkan

                submitFinalButton.classList.add("hidden");
                submitFinalButton.classList.remove("inline-flex"); // Hapus inline-flex saat disembunyikan

                nextSummaryButton.disabled = false; // Pastikan aktif
                nextSummaryButton.classList.remove(
                  "opacity-50",
                  "cursor-not-allowed"
                );
              }
            }
          } else {
            // Ini adalah Langkah 1 atau 2
            // Tampilkan tombol umum 'btn-next'
            if (generalNextButton) {
              generalNextButton.classList.remove("hidden");
              generalNextButton.classList.add("inline-flex"); // Tambahkan inline-flex
              generalNextButton.disabled = false;
              generalNextButton.classList.remove(
                "opacity-50",
                "cursor-not-allowed"
              );
            }
            // Pastikan tombol khusus Langkah 3 disembunyikan
            if (nextSummaryButton) {
              nextSummaryButton.classList.add("hidden");
              nextSummaryButton.classList.remove("inline-flex"); // Hapus inline-flex
            }
            if (submitFinalButton) {
              submitFinalButton.classList.add("hidden");
              submitFinalButton.classList.remove("inline-flex"); // Hapus inline-flex
            }
          }
        }
      } else {
        // Tutup langkah-langkah lain
        header.setAttribute("aria-expanded", "false");
        content.classList.add("hidden");
        chevronIcon?.classList.remove("rotate-180");
        chevronIcon?.classList.add("rotate-0");
        item.classList.remove("active");
      }
    });
  };

  /**
   * Collects data from all form fields in the wizard.
   * @returns {Object} - An object containing all collected form data.
   */
  const collectFormData = () => {
    const formData = {};
    accordionItems.forEach((item) => {
      const inputs = item.querySelectorAll("input, select, textarea");
      inputs.forEach((input) => {
        if (input.type === "checkbox") {
          formData[input.name] = input.checked;
        } else if (input.name) {
          formData[input.name] = input.value.trim();
        }
      });
    });
    return formData;
  };

  /**
   * Populates the summary section in the final step with collected data.
   */
  const populateSummary = () => {
    const data = collectFormData();
    document.getElementById("summary-nama-lengkap").textContent = `${
      data["nama-depan"] || ""
    } ${data["nama-belakang"] || ""}`;
    document.getElementById("summary-email").textContent = data["email"] || "";
    document.getElementById("summary-alamat").textContent =
      data["alamat-jalan"] || "";
    document.getElementById("summary-kota").textContent = data["kota"] || "";
    document.getElementById("summary-bahasa").textContent =
      data["bahasa-preferensi"] === "id"
        ? "Bahasa Indonesia"
        : data["bahasa-preferensi"] === "en"
        ? "English"
        : "";
    document.getElementById("summary-email-notif").textContent = data[
      "email_notifications"
    ]
      ? "Ya"
      : "Tidak";
    document.getElementById("summary-sms-notif").textContent = data[
      "sms_notifications"
    ]
      ? "Ya"
      : "Tidak";
  };

  // --- Event Listeners ---

  // Accordion Header Click (for opening/closing, but mainly controlled by buttons)
  accordionItems.forEach((item) => {
    const header = item.querySelector(".accordion-header");
    header.addEventListener("click", () => {
      // Allow opening only if it's the current step or a previously completed step
      const clickedStep = parseInt(item.dataset.step);
      if (clickedStep <= currentStep) {
        currentStep = clickedStep;
        updateWizardUI();
      } else {
        PNotify.error({
          title: "Langkah Belum Selesai",
          text: "Mohon selesaikan langkah sebelumnya terlebih dahulu.",
        });
      }
    });
  });

  // Tab Button Click
  accordionItems.forEach((accordionItem) => {
    const tabNav = accordionItem.querySelector("nav[data-tab-group]");
    if (tabNav) {
      const tabButtons = tabNav.querySelectorAll(".tab-button");
      tabButtons.forEach((button, index) => {
        button.addEventListener("click", () => {
          const currentActiveTabPanel =
            accordionItem.querySelector(".tab-panel.active");
          const activeTabIndex = Array.from(tabButtons).indexOf(
            accordionItem.querySelector(".tab-button.active")
          );

          // Determine if this is a forward movement (and not to summary tab)
          const isForwardMove = index > activeTabIndex;
          const isTargetSummaryTab = button.dataset.tabTarget === "#step3-tab1";
          const isCurrentSummaryTab =
            currentActiveTabPanel && currentActiveTabPanel.id === "step3-tab1";

          // Only validate if moving forward AND not to/from the summary tab
          if (
            isForwardMove &&
            !isTargetSummaryTab &&
            !isCurrentSummaryTab &&
            currentActiveTabPanel &&
            !validateFields(currentActiveTabPanel)
          ) {
            PNotify.error({
              title: "Validasi Gagal",
              text: "Mohon lengkapi semua bidang wajib di tab ini.",
            });
            return; // Prevent tab switch
          }
          activateTab(accordionItem, index); // Call activateTab without validation logic inside it
        });
      });
    }
  });

  // Previous/Next Buttons Click
  formWizard.addEventListener("click", (event) => {
    const target = event.target.closest("button");
    if (!target) return;

    const currentAccordionItem = formWizard.querySelector(
      `.accordion-item[data-step="${currentStep}"]`
    );
    const currentTabNav = currentAccordionItem.querySelector(
      "nav[data-tab-group]"
    );
    const tabButtons = currentTabNav.querySelectorAll(".tab-button");
    const activeTabButton = currentTabNav.querySelector(".tab-button.active");
    const activeTabIndex = Array.from(tabButtons).indexOf(activeTabButton);
    const currentActiveTabPanel =
      currentAccordionItem.querySelector(".tab-panel.active");

    // Determine which button was clicked
    const isNextButton = target.classList.contains("btn-next"); // This is the general next button for steps 1 and 2
    const isNextSummaryButton = target.classList.contains("btn-next-summary"); // This is the "Selanjutnya" button for step 3 tab 1
    const isPreviousButton = target.classList.contains("btn-previous");
    const isSubmitButton = target.classList.contains("btn-submit-final"); // This is the "Selesai" button for step 3 tab 2

    if (isNextButton || isNextSummaryButton) {
      // Validate current tab's fields before moving, skip for summary tab
      if (
        currentActiveTabPanel.id !== "step3-tab1" &&
        !validateFields(currentActiveTabPanel)
      ) {
        PNotify.error({
          title: "Validasi Gagal",
          text: "Mohon lengkapi semua bidang wajib di tab ini.",
        });
        return;
      }

      if (activeTabIndex < tabButtons.length - 1) {
        // Move to next tab within the same accordion
        activateTab(currentAccordionItem, activeTabIndex + 1);
      } else {
        // All tabs in current accordion completed, move to next accordion step
        if (currentStep < accordionItems.length) {
          currentStep++;
          updateWizardUI();
          // Activate first tab of the new step
          const newAccordionItem = formWizard.querySelector(
            `.accordion-item[data-step="${currentStep}"]`
          );
          activateTab(newAccordionItem, 0); // Activate first tab of new step
        }
      }
    } else if (isPreviousButton) {
      if (activeTabIndex > 0) {
        // Move to previous tab within the same accordion, always skip validation for previous
        activateTab(currentAccordionItem, activeTabIndex - 1);
      } else {
        // Move to previous accordion step
        if (currentStep > 1) {
          currentStep--;
          updateWizardUI();
          // Activate last tab of the previous step for better UX, always skip validation for previous
          const prevAccordionItem = formWizard.querySelector(
            `.accordion-item[data-step="${currentStep}"]`
          );
          const prevTabNav = prevAccordionItem.querySelector(
            "nav[data-tab-group]"
          );
          const prevTabButtons = prevTabNav.querySelectorAll(".tab-button");
          activateTab(prevAccordionItem, prevTabButtons.length - 1);
        }
      }
    } else if (isSubmitButton) {
      // Changed from btn-submit to btn-submit-final
      // Final validation for the last step (Persetujuan tab)
      if (!validateFields(currentActiveTabPanel)) {
        PNotify.error({
          title: "Validasi Gagal",
          text: "Mohon lengkapi semua bidang wajib di tab ini.",
        });
        return;
      }

      populateSummary(); // Populate summary before final submission
      PNotify.success({
        title: "Formulir Selesai!",
        text: "Semua data telah berhasil dikumpulkan dan divalidasi.",
      });
      // Here you would typically send the data to your backend
      const finalData = collectFormData();
      console.log("Data Formulir Lengkap:", finalData);

      // Optional: Disable form or show success message and reset
      setTimeout(() => {
        // For demonstration, reset to step 1
        currentStep = 1;
        updateWizardUI();
        accordionItems.forEach((item) => {
          const inputs = item.querySelectorAll("input, select, textarea");
          inputs.forEach((input) => {
            if (input.type === "checkbox" || input.type === "radio") {
              input.checked = false;
            } else if (input.tagName === "SELECT") {
              input.value = ""; // Reset select to default/first option
            } else {
              input.value = "";
            }
            resetValidationState(input);
          });
        });
        // Ensure first tab of first step is active after reset
        const firstAccordionItem = formWizard.querySelector(
          `.accordion-item[data-step="1"]`
        );
        activateTab(firstAccordionItem, 0); // Activate first tab of first step
      }, 1000);
    }
  });

  // Event listener for the "agree-terms" checkbox to enable/disable the submit button
  const agreeTermsCheckbox = document.getElementById("agree-terms");
  if (agreeTermsCheckbox) {
    agreeTermsCheckbox.addEventListener("change", () => {
      const currentAccordionItem = formWizard.querySelector(
        `.accordion-item[data-step="${currentStep}"]`
      );
      const submitButton =
        currentAccordionItem.querySelector(".btn-submit-final"); // Changed from btn-next to btn-submit-final
      if (submitButton) {
        // Check if submitButton exists (only on last step, last tab)
        submitButton.disabled = !agreeTermsCheckbox.checked;
        if (submitButton.disabled) {
          submitButton.classList.add("opacity-50", "cursor-not-allowed");
        } else {
          submitButton.classList.remove("opacity-50", "cursor-not-allowed");
        }
      }
    });
  }

  // Initial UI update when the page loads
  updateWizardUI();
});
