/**
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 * @path      public/js/example-table.js
 *
 * File utama (controller) untuk Example Table. Mengimpor semua modul
 * dan menghubungkan fungsionalitas ke elemen UI.
 */

// --- Impor Modul ---
import { createIcons, icons } from "/assets/vendor/lucide/lucide.js";
import {
  Tabulator,
  FormatModule,
  EditModule,
  PageModule,
  SortModule,
  ResizeTableModule,
  ResizeColumnsModule,
  ResponsiveLayoutModule, // Pastikan ResponsiveLayoutModule diimpor
  FrozenColumnsModule,
  DataTreeModule,
  DownloadModule,
  ExportModule,
  PrintModule,
} from "/assets/vendor/tabulator/tabulator_esm.js";
// PERUBAHAN: Path impor disesuaikan dengan struktur folder baru
import { tableData } from "./tabledata/table-data.js";
import { exportToCsv, exportToXlsx } from "./modules/export/export-excel.js";
import { exportToPdf } from "./modules/export/export-pdf.js";
import { printTable } from "./modules/print/print-table.js";

document.addEventListener("DOMContentLoaded", function () {
  // --- Registrasi Modul Tabulator ---
  Tabulator.registerModule([
    FormatModule,
    EditModule,
    PageModule,
    SortModule,
    ResizeTableModule,
    ResizeColumnsModule,
    ResponsiveLayoutModule, // Daftarkan ResponsiveLayoutModule
    FrozenColumnsModule,
    DataTreeModule,
    DownloadModule,
    ExportModule,
    PrintModule,
  ]);

  // --- Logika Popup (Tidak Berubah) ---
  const popup = document.getElementById("action-popup");
  const popupTitle = document.getElementById("popup-title");
  const popupActions = document.getElementById("popup-actions");
  const closePopupButton = document.getElementById("close-popup-btn");

  const openActionPopup = (rowData) => {
    const name =
      rowData.nama_perusahaan || rowData.nama_cabang || rowData.nama_produk;
    const id = rowData.id_perusahaan || rowData.id_cabang || rowData.sku_produk;
    popupTitle.textContent = `Aksi untuk: ${name}`;
    popupActions.innerHTML = `
        <button data-action="read" class="w-full flex items-center gap-3 px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100 rounded-md">
            <i data-lucide='eye'></i><span>Lihat Detail</span>
        </button>
        <button data-action="update" class="w-full flex items-center gap-3 px-4 py-2 text-sm text-left text-blue-600 hover:bg-blue-50 rounded-md">
            <i data-lucide='edit-3'></i><span>Ubah Data</span>
        </button>
        <button data-action="delete" class="w-full flex items-center gap-3 px-4 py-2 text-sm text-left text-red-600 hover:bg-red-50 rounded-md">
            <i data-lucide='trash-2'></i><span>Hapus Data</span>
        </button>
    `;
    popupActions.querySelectorAll("button").forEach((button) => {
      button.addEventListener("click", () => {
        const action = button.dataset.action;
        alert(`Aksi '${action.toUpperCase()}' untuk ID: ${id}`);
        closeActionPopup();
      });
    });
    createIcons({
      icons,
      attrs: { class: "w-4 h-4" },
      container: popupActions,
    });
    popup.classList.remove("hidden");
  };
  const closeActionPopup = () => popup.classList.add("hidden");
  closePopupButton.addEventListener("click", closeActionPopup);
  popup.addEventListener("click", (e) => {
    if (e.target === popup) closeActionPopup();
  });

  // --- FORMATTER & INISIALISASI TABEL ---
  const currencyFormatter = (value) => {
    if (value === null || value === undefined) return "";
    return `Rp ${new Intl.NumberFormat("id-ID").format(value)}`;
  };
  const statusFormatter = (value) => {
    if (!value) return "";
    let color = value === "Aktif" || value === "Operasional" ? "green" : "red";
    return `<span class="inline-block px-2 py-1 text-xs font-semibold text-${color}-800 bg-${color}-100 rounded-full">${value}</span>`;
  };

  const actionFormatter = (cell, formatterParams, onRendered) => {
    const button = document.createElement("button");
    button.classList.add(
      "p-2",
      "rounded-full",
      "text-gray-500",
      "hover:bg-gray-100"
    );
    button.innerHTML = `<i data-lucide='more-vertical' class='w-5 h-5'></i>`;
    button.addEventListener("click", (e) => {
      e.stopPropagation();
      openActionPopup(cell.getRow().getData());
    });
    onRendered(() =>
      createIcons({ icons, attrs: { class: "w-5 h-5" }, container: button })
    );
    return button;
  };

  const paginationElement = document.getElementById("my-example-table-pagination");

  const table = new Tabulator("#my-example-table", {
    height: "400px",
    data: tableData,
    layout: "fitColumns",
    dataTree: true,
    dataTreeStartExpanded: false,
    pagination: "local",
    paginationSize: 10,
    paginationSizeSelector: [5, 10, 20, 50, 100],
    paginationElement: paginationElement,
    responsiveLayout: "collapse", // Mengaktifkan mode responsif "collapse"
    responsiveLayoutCollapseBtn: function(set, toggle){ // Tombol untuk menampilkan/menyembunyikan detail
        var btn = document.createElement("span");
        btn.classList.add("w-5", "h-5", "inline-flex", "items-center", "justify-center", "rounded-full", "bg-blue-100", "text-blue-600", "cursor-pointer");
        btn.innerHTML = "<i data-lucide='plus'></i>"; // Ikon plus
        btn.onclick = function(){ toggle(); } // Fungsi toggle bawaan Tabulator
        // Pastikan ikon Lucide dibuat setelah elemen ditambahkan ke DOM
        setTimeout(() => createIcons({ icons, attrs: { class: "w-5 h-5" }, container: btn }), 0);
        return btn;
    },
    rowFormatter: function (row) {
      var element = row.getElement();
      if (!element.querySelector(".dynamic-details-container")) {
        var detailsContainer = document.createElement("div");
        detailsContainer.classList.add("dynamic-details-container");
        detailsContainer.style.display = "none";
        element.appendChild(detailsContainer);
      }
    },
    columns: [
      {
        title: "Nama",
        field: "nama_perusahaan",
        width: 300,
        frozen: true,
        responsive: 0, // Prioritas tertinggi, selalu tampil
        formatter: (c) =>
          c.getRow().getData().nama_perusahaan ||
          c.getRow().getData().nama_cabang ||
          c.getRow().getData().nama_produk ||
          "",
      },
      {
        title: "ID",
        field: "id_perusahaan",
        width: 150,
        responsive: 1, // Prioritas lebih rendah, disembunyikan setelah Nama/Aksi
        formatter: (c) =>
          c.getRow().getData().id_perusahaan ||
          c.getRow().getData().id_cabang ||
          c.getRow().getData().sku_produk ||
          "",
      },
      {
        title: "Deskripsi",
        field: "bidang_usaha",
        minWidth: 200,
        responsive: 2, // Disembunyikan setelah ID
        formatter: (c) =>
          c.getRow().getData().bidang_usaha ||
          c.getRow().getData().tipe_cabang ||
          c.getRow().getData().deskripsi_produk ||
          "",
      },
      {
        title: "Lokasi",
        field: "lokasi_perusahaan",
        minWidth: 150,
        responsive: 3, // Disembunyikan paling awal
        formatter: (c) =>
          c.getRow().getData().lokasi_perusahaan ||
          c.getRow().getData().lokasi_kota ||
          c.getRow().getData().lokasi_produk ||
          "",
      },
      {
        title: "Aksi",
        width: 80,
        hozAlign: "center",
        headerSort: false,
        frozen: true,
        responsive: 0, // Prioritas tertinggi, selalu tampil
        formatter: actionFormatter,
      },
    ],
  });

  // --- Logika Detail Dinamis (Tidak Berubah) ---
  // Catatan: Logika ini sekarang akan bekerja bersama dengan responsiveLayout: "collapse"
  // Data yang disembunyikan oleh responsiveLayout akan muncul di sini.
  // Logika currencyFormatter dan statusFormatter sudah ada di atas jika digunakan oleh formatter kolom
  
  table.on("dataTreeRowExpanded", function (row) {
    const rowData = row.getData();
    const detailsContainer = row
      .getElement()
      .querySelector(".dynamic-details-container");
    let detailsHtml =
      '<div class="p-3 bg-gray-50 border-t border-b border-dashed border-gray-200"><ul class="list-none m-0 p-0 space-y-1 text-sm text-gray-700">';
    let hasDetails = false;
    if (rowData.status_perusahaan) {
      detailsHtml += `<li><strong>Status:</strong> ${statusFormatter(
        rowData.status_perusahaan
      )}</li>`;
      hasDetails = true;
    }
    if (rowData.status_cabang) {
      detailsHtml += `<li><strong>Status:</strong> ${statusFormatter(
        rowData.status_cabang
      )}</li>`;
      hasDetails = true;
    }
    if (rowData.kepala_cabang) {
      detailsHtml += `<li><strong>Kepala Cabang:</strong> ${rowData.kepala_cabang}</li>`;
      hasDetails = true;
    }
    if (rowData.kategori_produk) {
      detailsHtml += `<li><strong>Kategori:</strong> ${rowData.kategori_produk}</li>`;
      hasDetails = true;
    }
    if (rowData.harga) {
      detailsHtml += `<li><strong>Harga:</strong> ${currencyFormatter(
        rowData.harga
      )}</li>`;
      hasDetails = true;
    }
    detailsHtml += "</ul></div>";
    if (hasDetails) {
      detailsContainer.innerHTML = detailsHtml;
      detailsContainer.style.display = "block";
    }
  });
  table.on("dataTreeRowCollapsed", function (row) {
    const detailsContainer = row
      .getElement()
      .querySelector(".dynamic-details-container");
    detailsContainer.innerHTML = "";
    detailsContainer.style.display = "none";
  });

  // --- Menghubungkan tombol ke modul (Tidak Berubah) ---
  // document
  //   .getElementById("print-btn")
  //   .addEventListener("click", () => printTable(table));
  document
    .getElementById("export-csv-btn")
    .addEventListener("click", () => exportToCsv(table));
  document
    .getElementById("export-xlsx-btn")
    .addEventListener("click", () => exportToXlsx(table));
  document
    .getElementById("export-pdf-btn")
    .addEventListener("click", () => exportToPdf(table));

  table.on("renderComplete", () => createIcons({ icons }));
});
