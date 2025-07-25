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
  const registrationForm = document.getElementById("registrationForm");
  const usernameInput = document.getElementById("username");
  const usernameFeedback = document.getElementById("usernameFeedback");
  const usernameIcon = document.getElementById("usernameIcon");
  const emailInput = document.getElementById("email");
  const emailFeedback = document.getElementById("emailFeedback");
  const emailIcon = document.getElementById("emailIcon");

  // Data yang tidak boleh digunakan (verifikasi otomatis)
  const FORBIDDEN_USERNAME = "eazzy";
  const FORBIDDEN_EMAIL = "eazzy@example.com";
  const EMAIL_PATTERN = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  const ICON_CHECK = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check text-green-500"><path d="M20 6 9 17l-5-5"/></svg>`;
  const ICON_X = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x text-red-500"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>`;

  /**
   * Mengatur status validasi input (border, pesan feedback, dan ikon).
   * @param {HTMLElement} inputElement - Elemen input HTML.
   * @param {HTMLElement} feedbackElement - Elemen paragraf untuk feedback/pesan error.
   * @param {HTMLElement} iconElement - Elemen div untuk ikon.
   * @param {boolean} isValid - True jika valid, false jika tidak valid.
   * @param {string} message - Pesan yang akan ditampilkan.
   */
  const setValidationState = (
    inputElement,
    feedbackElement,
    iconElement,
    isValid,
    message = ""
  ) => {
    // Hapus semua kelas border dan teks feedback sebelumnya
    inputElement.classList.remove("border-red-500", "border-green-500");
    feedbackElement.classList.remove("text-red-600", "text-green-600");
    feedbackElement.textContent = message;
    iconElement.innerHTML = "";

    if (isValid) {
      inputElement.classList.add("border-green-500");
      if (message) {
        feedbackElement.classList.add("text-green-600");
      }
      iconElement.innerHTML = ICON_CHECK;
    } else {
      inputElement.classList.add("border-red-500");
      if (message) {
        feedbackElement.classList.add("text-red-600");
      }
      iconElement.innerHTML = ICON_X;
    }
  };

  // Fungsi bantu untuk mereset tampilan input (misalnya saat mengetik)
  const resetInputState = (inputElement, feedbackElement, iconElement) => {
    inputElement.classList.remove("border-red-500", "border-green-500");
    feedbackElement.textContent = "";
    feedbackElement.classList.remove("text-red-600", "text-green-600");
    iconElement.innerHTML = ""; // Hapus ikon
  };

  /**
   * Memvalidasi input username.
   * @param {string} usernameValue - Nilai username.
   * @param {boolean} showFeedback - Tampilkan feedback langsung atau tidak.
   * @returns {boolean} - True jika username valid, false jika tidak.
   */
  const validateUsername = (usernameValue, showFeedback = true) => {
    let message = "";
    let isValid = true;

    if (usernameValue === "") {
      message = "Username tidak boleh kosong.";
      isValid = false;
    } else if (usernameValue === FORBIDDEN_USERNAME) {
      message = `Username "${FORBIDDEN_USERNAME}" tidak diizinkan.`;
      isValid = false;
    }

    if (showFeedback) {
      setValidationState(
        usernameInput,
        usernameFeedback,
        usernameIcon,
        isValid,
        message
      );
    } else if (usernameValue === "") {
      setValidationState(
        usernameInput,
        usernameFeedback,
        usernameIcon,
        isValid,
        message
      );
    } else {
      resetInputState(usernameInput, usernameFeedback, usernameIcon);
    }
    return isValid;
  };

  /**
   * Memvalidasi input email.
   * @param {string} emailValue - Nilai email.
   * @param {boolean} showFeedback - Tampilkan feedback langsung atau tidak.
   * @returns {boolean} - True jika email valid, false jika tidak.
   */
  const validateEmail = (emailValue, showFeedback = true) => {
    let message = "";
    let isValid = true;

    if (emailValue === "") {
      message = "Email tidak boleh kosong.";
      isValid = false;
    } else if (!EMAIL_PATTERN.test(emailValue)) {
      message = "Format email tidak valid.";
      isValid = false;
    } else if (emailValue === FORBIDDEN_EMAIL) {
      message = `Email "${FORBIDDEN_EMAIL}" tidak diizinkan.`;
      isValid = false;
    }
    if (isValid && showFeedback) {
      message = "Email valid.";
    }

    if (showFeedback) {
      setValidationState(
        emailInput,
        emailFeedback,
        emailIcon,
        isValid,
        message
      );
    } else if (emailValue === "") {
      setValidationState(
        emailInput,
        emailFeedback,
        emailIcon,
        isValid,
        message
      );
    } else {
      resetInputState(emailInput, emailFeedback, emailIcon);
    }
    return isValid;
  };

  // --- Event Listeners untuk Validasi Real-time (on blur) ---
  usernameInput.addEventListener("blur", () => {
    validateUsername(usernameInput.value.trim());
  });

  emailInput.addEventListener("blur", () => {
    validateEmail(emailInput.value.trim());
  });

  // --- Event Listener untuk Hapus Feedback saat mulai mengetik ---
  usernameInput.addEventListener("input", () => {
    resetInputState(usernameInput, usernameFeedback, usernameIcon);
    if (usernameInput.value.trim() !== "") {
      const tempIsValid = usernameInput.value.trim() !== FORBIDDEN_USERNAME;
      usernameInput.classList.add(
        tempIsValid ? "border-green-500" : "border-red-500"
      );
      usernameIcon.innerHTML = tempIsValid ? ICON_CHECK : ICON_X;
    }
  });

  emailInput.addEventListener("input", () => {
    resetInputState(emailInput, emailFeedback, emailIcon);
    const emailValue = emailInput.value.trim();
    if (emailValue !== "") {
      const tempIsValid =
        EMAIL_PATTERN.test(emailValue) && emailValue !== FORBIDDEN_EMAIL;
      emailInput.classList.add(
        tempIsValid ? "border-green-500" : "border-red-500"
      );
      emailIcon.innerHTML = tempIsValid ? ICON_CHECK : ICON_X;
    }
  });

  // --- Event Listener untuk Submit Form ---
  registrationForm.addEventListener("submit", function (event) {
    event.preventDefault();

    const isUsernameValid = validateUsername(usernameInput.value.trim(), true);
    const isEmailValid = validateEmail(emailInput.value.trim(), true);

    if (isUsernameValid && isEmailValid) {
      PNotify.success({
        title: "Sukses!",
        text: "Data Anda berhasil divalidasi dan siap dikirim.",
      });

      setTimeout(() => {
        // alert("Data berhasil dikirim!");
        registrationForm.reset();
        resetInputState(usernameInput, usernameFeedback, usernameIcon);
        resetInputState(emailInput, emailFeedback, emailIcon);
      }, 500);
    } else {
      // Memanggil PNotify.error() seperti di alerts-and-notifications.js
      PNotify.error({
        title: "Error Validasi",
        text: "Mohon periksa kembali input Anda.",
      });
    }
  });
});
