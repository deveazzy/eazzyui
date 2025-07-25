/*
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 */

document.addEventListener("DOMContentLoaded", function () {
  // Inisialisasi untuk contoh penggunaan utama di awal halaman
  const qrCodeContainer = document.getElementById("qr-code-container");
  if (qrCodeContainer) {
    const qrCode = new QRCodeStyling({
      width: 300,
      height: 300,
      data: "https://uiux.eazzy-project.com/",
      image: "/assets/images/logo.png",
      dotsOptions: {
        color: "#4268FF",
        type: "rounded",
      },
      backgroundOptions: {
        color: "#ffffff",
      },
      imageOptions: {
        crossOrigin: "anonymous",
        margin: 10,
      },
      cornersSquareOptions: {
        color: "#000000",
        type: "extra-rounded",
      },
      cornersDotOptions: {
        color: "#000000",
        type: "square",
      },
    });
    qrCode.append(qrCodeContainer);
  }

  // Inisialisasi untuk contoh penerapan di bagian bawah halaman
  const liveContainer = document.getElementById("qr-code-container-live");
  if (liveContainer) {
    const qrCodeLive = new QRCodeStyling({
      width: 300,
      height: 300,
      data: "https://eazzy-project.com/",
      image: "/assets/images/logo.png",
      dotsOptions: {
        gradient: {
          type: "linear",
          rotation: 0,
          colorStops: [
            { offset: 0, color: "#1A73E8" },
            { offset: 1, color: "#8A2BE2" },
          ],
        },
        type: "dots",
      },
      backgroundOptions: {
        color: "#FFFFFF",
      },
      imageOptions: {
        crossOrigin: "anonymous",
        margin: 15,
      },
      cornersSquareOptions: {
        gradient: {
          type: "linear",
          rotation: 0,
          colorStops: [
            { offset: 0, color: "#1A73E8" },
            { offset: 1, color: "#8A2BE2" },
          ],
        },
        type: "extra-rounded",
      },
      cornersDotOptions: {
        gradient: {
          type: "linear",
          rotation: 0,
          colorStops: [
            { offset: 0, color: "#1A73E8" },
            { offset: 1, color: "#8A2BE2" },
          ],
        },
        type: "dot",
      },
    });
    qrCodeLive.append(liveContainer);
  }
});
