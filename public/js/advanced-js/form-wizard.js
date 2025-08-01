/*
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 */

// import { createIcons, icons } from "/assets/vendor/lucide/lucide.js";
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
  //createIcons({ icons });
  lucide.createIcons();

  const formWizard = document.getElementById("formWizard");
  if (!formWizard) return;

  const accordionItems = formWizard.querySelectorAll(".accordion-item");
  let currentStep = 1;

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
      resetValidationState(input);

      if (input.type === "checkbox") {
        if (!input.checked) {
          setValidationState(input, "Anda harus menyetujui ini.");
          isValid = false;
        }
      } else if (input.tagName === "SELECT") {
        if (input.value === "" || input.value === "Pilih Bahasa") {
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
    if (targetButton.dataset.tabTarget === "#step3-tab1") {
      populateSummary();
    }
    updateWizardUI();
  };

  const updateWizardUI = () => {
    accordionItems.forEach((item, index) => {
      const header = item.querySelector(".accordion-header");
      const content = item.querySelector(".accordion-content");
      const chevronIcon = header.querySelector(".lucide-chevron-down");
      const stepNumber = parseInt(item.dataset.step);
      const prevButton = item.querySelector(".btn-previous");
      const nextSummaryButton = item.querySelector(".btn-next-summary");
      const submitFinalButton = item.querySelector(".btn-submit-final");
      const generalNextButton = item.querySelector(".btn-next");

      if (stepNumber === currentStep) {
        header.setAttribute("aria-expanded", "true");
        content.classList.remove("hidden");
        chevronIcon?.classList.remove("rotate-0");
        chevronIcon?.classList.add("rotate-180");
        item.classList.add("active");

        const currentTabNav = content.querySelector("nav[data-tab-group]");
        if (currentTabNav) {
          const tabButtons = currentTabNav.querySelectorAll(".tab-button");
          const tabPanels = content.querySelectorAll(".tab-panel");

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
            prevButton.classList.add("inline-flex");
            if (currentStep === 1 && activeTabIndex === 0) {
              prevButton.setAttribute("disabled", "true");
              prevButton.classList.add("opacity-50", "cursor-not-allowed");
            } else {
              prevButton.removeAttribute("disabled");
              prevButton.classList.remove("opacity-50", "cursor-not-allowed");
            }
          }

          if (stepNumber === accordionItems.length) {
            const isActiveTabPersetujuan =
              activeTabButton.dataset.tabTarget === "#step3-tab2";
            const isActiveTabRingkasan =
              activeTabButton.dataset.tabTarget === "#step3-tab1";

            if (generalNextButton) {
              generalNextButton.classList.add("hidden");
              generalNextButton.classList.remove("inline-flex");
            }

            if (nextSummaryButton && submitFinalButton) {
              if (isActiveTabPersetujuan) {
                nextSummaryButton.classList.add("hidden");
                nextSummaryButton.classList.remove("inline-flex");

                submitFinalButton.classList.remove("hidden");
                submitFinalButton.classList.add("inline-flex");

                submitFinalButton.removeAttribute("disabled");

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
                  submitFinalButton.disabled = true;
                  submitFinalButton.classList.add(
                    "opacity-50",
                    "cursor-not-allowed"
                  );
                }
              } else if (isActiveTabRingkasan) {
                nextSummaryButton.classList.remove("hidden");
                nextSummaryButton.classList.add("inline-flex");

                submitFinalButton.classList.add("hidden");
                submitFinalButton.classList.remove("inline-flex");

                nextSummaryButton.disabled = false;
                nextSummaryButton.classList.remove(
                  "opacity-50",
                  "cursor-not-allowed"
                );
              }
            }
          } else {
            if (generalNextButton) {
              generalNextButton.classList.remove("hidden");
              generalNextButton.classList.add("inline-flex");
              generalNextButton.disabled = false;
              generalNextButton.classList.remove(
                "opacity-50",
                "cursor-not-allowed"
              );
            }
            if (nextSummaryButton) {
              nextSummaryButton.classList.add("hidden");
              nextSummaryButton.classList.remove("inline-flex");
            }
            if (submitFinalButton) {
              submitFinalButton.classList.add("hidden");
              submitFinalButton.classList.remove("inline-flex");
            }
          }
        }
      } else {
        header.setAttribute("aria-expanded", "false");
        content.classList.add("hidden");
        chevronIcon?.classList.remove("rotate-180");
        chevronIcon?.classList.add("rotate-0");
        item.classList.remove("active");
      }
    });
  };

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

  accordionItems.forEach((item) => {
    const header = item.querySelector(".accordion-header");
    header.addEventListener("click", () => {
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

          const isForwardMove = index > activeTabIndex;
          const isTargetSummaryTab = button.dataset.tabTarget === "#step3-tab1";
          const isCurrentSummaryTab =
            currentActiveTabPanel && currentActiveTabPanel.id === "step3-tab1";

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
            return;
          }
          activateTab(accordionItem, index);
        });
      });
    }
  });

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

    const isNextButton = target.classList.contains("btn-next");
    const isNextSummaryButton = target.classList.contains("btn-next-summary");
    const isPreviousButton = target.classList.contains("btn-previous");
    const isSubmitButton = target.classList.contains("btn-submit-final");

    if (isNextButton || isNextSummaryButton) {
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
        activateTab(currentAccordionItem, activeTabIndex + 1);
      } else {
        if (currentStep < accordionItems.length) {
          currentStep++;
          updateWizardUI();
          const newAccordionItem = formWizard.querySelector(
            `.accordion-item[data-step="${currentStep}"]`
          );
          activateTab(newAccordionItem, 0);
        }
      }
    } else if (isPreviousButton) {
      if (activeTabIndex > 0) {
        activateTab(currentAccordionItem, activeTabIndex - 1);
      } else {
        if (currentStep > 1) {
          currentStep--;
          updateWizardUI();
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
      if (!validateFields(currentActiveTabPanel)) {
        PNotify.error({
          title: "Validasi Gagal",
          text: "Mohon lengkapi semua bidang wajib di tab ini.",
        });
        return;
      }

      populateSummary();
      PNotify.success({
        title: "Formulir Selesai!",
        text: "Semua data telah berhasil dikumpulkan dan divalidasi.",
      });
      const finalData = collectFormData();
      console.log("Data Formulir Lengkap:", finalData);

      setTimeout(() => {
        currentStep = 1;
        updateWizardUI();
        accordionItems.forEach((item) => {
          const inputs = item.querySelectorAll("input, select, textarea");
          inputs.forEach((input) => {
            if (input.type === "checkbox" || input.type === "radio") {
              input.checked = false;
            } else if (input.tagName === "SELECT") {
              input.value = "";
            } else {
              input.value = "";
            }
            resetValidationState(input);
          });
        });

        const firstAccordionItem = formWizard.querySelector(
          `.accordion-item[data-step="1"]`
        );
        activateTab(firstAccordionItem, 0);
      }, 1000);
    }
  });

  const agreeTermsCheckbox = document.getElementById("agree-terms");
  if (agreeTermsCheckbox) {
    agreeTermsCheckbox.addEventListener("change", () => {
      const currentAccordionItem = formWizard.querySelector(
        `.accordion-item[data-step="${currentStep}"]`
      );
      const submitButton =
        currentAccordionItem.querySelector(".btn-submit-final");
      if (submitButton) {
        submitButton.disabled = !agreeTermsCheckbox.checked;
        if (submitButton.disabled) {
          submitButton.classList.add("opacity-50", "cursor-not-allowed");
        } else {
          submitButton.classList.remove("opacity-50", "cursor-not-allowed");
        }
      }
    });
  }

  updateWizardUI();
});
