// /**
//  * css/atoms.js
//  *
//  * @author    [EazZy Project]
//  * @copyright Copyright (c) [2025] [EazZy Project]
//  * @license   https://opensource.org/licenses/MIT MIT License
//  * File ini berisi semua tautan ke aset eksternal (CSS, JavaScript)
//  * dan font yang digunakan di EazZy Project.
//  */

// import flatpickr from '/js/vendor/flatpickr/flatpickr.js';
// Import createIcons dari Lucide untuk merender ulang ikon

import { createIcons, icons } from "/assets/vendor/lucide/lucide.js";

document.addEventListener("DOMContentLoaded", () => {
  // --- Script untuk Show/Hide Password ---
  const passwordInput = document.getElementById("password-input");
  const passwordToggleBtn = document.getElementById("password-toggle-btn");
  if (passwordInput && passwordToggleBtn) {
    passwordToggleBtn.addEventListener("click", () => {
      const isPassword = passwordInput.type === "password";
      passwordInput.type = isPassword ? "text" : "password";
      // Mengganti ikon mata (eye/eye-off)
      passwordToggleBtn.innerHTML = isPassword
        ? '<i data-lucide="eye-off" class="w-5 h-5 text-gray-500"></i>'
        : '<i data-lucide="eye" class="w-5 h-5 text-gray-500"></i>';
      // Penting: Panggil createIcons() lagi setelah mengubah innerHTML
      createIcons({ icons });
    });
  }

  // --- Inisialisasi Flatpickr ---
  // Memastikan elemen ada sebelum menginisialisasi Flatpickr
  if (document.getElementById("date-picker")) {
    flatpickr("#date-picker", {
      altInput: true,
      altFormat: "j F Y",
      dateFormat: "Y-m-d",
      disableMobile: true, // Memaksa Flatpickr UI di mobile
    });
  }

  if (document.getElementById("date-range-picker")) {
    flatpickr("#date-range-picker", {
      mode: "range",
      altInput: true,
      altFormat: "j F Y",
      dateFormat: "Y-m-d",
      disableMobile: true, // Memaksa Flatpickr UI di mobile
    });
  }
});
