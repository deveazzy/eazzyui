/*
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 */

import { createIcons, icons } from "/assets/vendor/lucide/lucide.js";
import PNotify from "/assets/vendor/pnotify/PNotify.js";

// Konfigurasi PNotify (jika belum dikonfigurasi secara global di global.js)
PNotify.defaults.delay = 2000;
PNotify.defaults.closerHover = false;
PNotify.defaults.stack = {
  dir1: "up",
  dir2: "left",
  firstpos1: 25,
  firstpos2: 25,
  push: "top",
};

document.addEventListener("DOMContentLoaded", function () {
  const loginForm = document.getElementById("login-form");
  const emailInput = document.getElementById("email");
  const passwordInput = document.getElementById("password");
  const passwordToggleBtn = document.getElementById("password-toggle-btn");
  const emailFeedback = document.getElementById("emailFeedback");
  const passwordFeedback = document.getElementById("passwordFeedback");

  // DEKLARASI ELEMEN IKON UNTUK EMAIL
  const emailIcon = document.getElementById("emailIcon");
  const passwordIcon = document.getElementById("passwordIcon");

  const ICON_CHECK = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check text-green-500"><path d="M20 6 9 17l-5-5"/></svg>`;
  const ICON_X = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x text-red-500"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>`;

  // Pastikan ikon Lucide di-render setelah DOMContentLoaded
  createIcons({
    icons: icons,
  });

  /**
   * Mengatur status validasi input (border, pesan feedback, dan ikon).
   * @param {HTMLElement} inputElement - Elemen input HTML.
   * @param {HTMLElement} feedbackElement - Elemen paragraf untuk feedback/pesan error.
   * @param {HTMLElement} iconElement - Elemen div untuk ikon (opsional).
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
    inputElement.classList.remove("border-red-500", "border-green-500");
    feedbackElement.classList.remove("text-red-600", "text-green-600");
    feedbackElement.textContent = message;
    if (iconElement) {
      iconElement.innerHTML = ""; // Hapus ikon sebelumnya
    }

    if (isValid) {
      inputElement.classList.add("border-green-500");
      if (message) {
        feedbackElement.classList.add("text-green-600");
      }
      if (iconElement) {
        iconElement.innerHTML = ICON_CHECK;
      }
    } else {
      inputElement.classList.add("border-red-500");
      if (message) {
        feedbackElement.classList.add("text-red-600");
      }
      if (iconElement) {
        iconElement.innerHTML = ICON_X;
      }
    }
  };

  /**
   * Fungsi bantu untuk mereset tampilan input (misalnya saat mulai mengetik).
   * @param {HTMLElement} inputElement - Elemen input HTML.
   * @param {HTMLElement} feedbackElement - Elemen paragraf untuk feedback/pesan error.
   * @param {HTMLElement} iconElement - Elemen div untuk ikon (opsional).
   */
  const resetInputState = (inputElement, feedbackElement, iconElement) => {
    inputElement.classList.remove("border-red-500", "border-green-500");
    feedbackElement.textContent = "";
    feedbackElement.classList.remove("text-red-600", "text-green-600");
    if (iconElement) {
      iconElement.innerHTML = ""; // Hapus ikon
    }
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
    const EMAIL_PATTERN = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (emailValue === "") {
      message = "Email tidak boleh kosong.";
      isValid = false;
    } else if (!EMAIL_PATTERN.test(emailValue)) {
      message = "Format email tidak valid.";
      isValid = false;
    }

    if (showFeedback) {
      setValidationState(
        emailInput,
        emailFeedback,
        emailIcon,
        isValid,
        message
      ); // emailIcon DITERUSKAN
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

  /**
   * Memvalidasi input password.
   * @param {string} passwordValue - Nilai password.
   * @param {boolean} showFeedback - Tampilkan feedback langsung atau tidak.
   * @returns {boolean} - True jika password valid, false jika tidak.
   */
  const validatePassword = (passwordValue, showFeedback = true) => {
    let message = "";
    let isValid = true;
    const MIN_PASSWORD_LENGTH = 6;

    if (passwordValue === "") {
      message = "Password tidak boleh kosong.";
      isValid = false;
    } else if (passwordValue.length < MIN_PASSWORD_LENGTH) {
      message = `Password minimal ${MIN_PASSWORD_LENGTH} karakter.`;
      isValid = false;
    }

    if (showFeedback) {
      setValidationState(
        passwordInput,
        passwordFeedback,
        passwordIcon,
        isValid,
        message
      );
    } else if (passwordValue === "") {
      setValidationState(
        passwordInput,
        passwordFeedback,
        passwordIcon,
        isValid,
        message
      );
    } else {
      resetInputState(passwordInput, passwordFeedback, passwordIcon);
    }
    return isValid;
  };

  // --- Event Listeners untuk Validasi Real-time (on blur) ---
  emailInput.addEventListener("blur", () => {
    validateEmail(emailInput.value.trim());
  });

  passwordInput.addEventListener("blur", () => {
    validatePassword(passwordInput.value.trim());
  });

  // --- Event Listener untuk Hapus Feedback saat mulai mengetik ---
  emailInput.addEventListener("input", () => {
    resetInputState(emailInput, emailFeedback, emailIcon);
    const emailValue = emailInput.value.trim();
    if (emailValue !== "") {
      const tempIsValid = EMAIL_PATTERN.test(emailValue);
      if (tempIsValid) {
        emailInput.classList.add("border-green-500");
        emailIcon.innerHTML = ICON_CHECK;
      } else {
        emailInput.classList.add("border-red-500");
        emailIcon.innerHTML = ICON_X;
      }
    }
  });

  // Definisi EMAIL_PATTERN di scope yang benar (misalnya global atau di luar DOMContentLoaded jika diperlukan di fungsi lain)
  const EMAIL_PATTERN = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  passwordInput.addEventListener("input", () => {
    resetInputState(passwordInput, passwordFeedback, passwordIcon);
    if (passwordInput.value.trim().length >= MIN_PASSWORD_LENGTH) {
      passwordIcon.innerHTML = ICON_CHECK;
    } else if (passwordInput.value.trim().length > 0) {
      passwordIcon.innerHTML = ICON_X;
    }
  });

  // --- Toggle Password Visibility ---
  passwordToggleBtn.addEventListener("click", () => {
    const type =
      passwordInput.getAttribute("type") === "password" ? "text" : "password";
    passwordInput.setAttribute("type", type);
    passwordToggleBtn.innerHTML =
      type === "password"
        ? `<i data-lucide="eye" class="w-5 h-5"></i>`
        : `<i data-lucide="eye-off" class="w-5 h-5"></i>`;
    createIcons({
      icons: icons,
    });
  });

  // --- Event Listener untuk Submit Form ---
  if (loginForm) {
    loginForm.addEventListener("submit", function (event) {
      event.preventDefault();

      const isEmailValid = validateEmail(emailInput.value.trim(), true);
      const isPasswordValid = validatePassword(
        passwordInput.value.trim(),
        true
      );

      if (isEmailValid && isPasswordValid) {
        PNotify.success({
          title: "Login Berhasil!",
          text: "Anda berhasil masuk.",
        });

        // Contoh: Kirim data login ke server setelah validasi berhasil
        // const email = emailInput.value.trim();
        // const password = passwordInput.value.trim();
        // const rememberMe = document.getElementById('remember-me').checked;
        // fetch('/api/login', { /* ... */ });

        setTimeout(() => {
          // Arahkan ke dashboard atau halaman lain
          window.location.href = "/dashboard";
        }, 1500);
      } else {
        PNotify.error({
          title: "Login Gagal",
          text: "Mohon periksa kembali Email dan Password Anda.",
        });
      }
    });
  }
});
