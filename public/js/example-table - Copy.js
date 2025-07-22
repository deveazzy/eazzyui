/**
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 * @path      public/js/example-table.js
 *
 * Logika JavaScript untuk Example Table dengan implementasi popup
 * untuk aksi CRUD yang berfungsi dengan benar.
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
  ResponsiveLayoutModule,
  FrozenColumnsModule,
  DataTreeModule,
  DownloadModule,
  ExportModule,
} from "/assets/vendor/tabulator/tabulator_esm.js";

// PERUBAHAN: Mengimpor data dari file terpisah
import { tableData } from "./tabledata/table-data.js";

document.addEventListener("DOMContentLoaded", function () {
  // --- Registrasi Modul Tabulator ---
  Tabulator.registerModule([
    FormatModule,
    EditModule,
    PageModule,
    SortModule,
    ResizeTableModule,
    ResizeColumnsModule,
    ResponsiveLayoutModule,
    FrozenColumnsModule,
    DataTreeModule,
    DownloadModule,
    ExportModule,
  ]);

  // --- FUNGSI-FUNGSI UNTUK MENGELOLA POPUP ---
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
        <button data-action="read" class="w-full flex items-center gap-3 px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100 hover:text-gray-900 rounded-md">
            <i data-lucide='eye'></i><span>Lihat Detail (Read)</span>
        </button>
        <button data-action="update" class="w-full flex items-center gap-3 px-4 py-2 text-sm text-left text-blue-600 hover:bg-blue-50 hover:text-blue-700 rounded-md">
            <i data-lucide='edit-3'></i><span>Ubah Data (Update)</span>
        </button>
        <button data-action="delete" class="w-full flex items-center gap-3 px-4 py-2 text-sm text-left text-red-600 hover:bg-red-50 hover:text-red-700 rounded-md">
            <i data-lucide='trash-2'></i><span>Hapus Data (Delete)</span>
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

  const closeActionPopup = () => {
    popup.classList.add("hidden");
  };

  closePopupButton.addEventListener("click", closeActionPopup);
  popup.addEventListener("click", (e) => {
    if (e.target === popup) {
      closeActionPopup();
    }
  });

  // --- FORMATTER & INISIALISASI TABEL ---
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

  const table = new Tabulator("#my-example-table", {
    height: "auto",
    data: tableData, // Menggunakan data yang diimpor
    layout: "fitColumns",
    dataTree: true,
    dataTreeStartExpanded: false,
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
        formatter: actionFormatter,
      },
    ],
  });

  // (Sisa kode untuk detail dinamis dan ekspor tetap sama)
  const currencyFormatter = (value) => {
    if (value === null || value === undefined) return "";
    return `Rp ${new Intl.NumberFormat("id-ID").format(value)}`;
  };
  const statusFormatter = (value) => {
    if (!value) return "";
    let color = value === "Aktif" || value === "Operasional" ? "green" : "red";
    return `<span class="inline-block px-2 py-1 text-xs font-semibold text-${color}-800 bg-${color}-100 rounded-full">${value}</span>`;
  };
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
  const exportCsvBtn = document.getElementById("export-csv-btn");
  if (exportCsvBtn) {
    exportCsvBtn.addEventListener("click", () =>
      table.download("csv", "data-perusahaan.csv")
    );
  }
  const exportXlsxBtn = document.getElementById("export-xlsx-btn");
  if (exportXlsxBtn) {
    exportXlsxBtn.addEventListener("click", () =>
      table.download("xlsx", "data-perusahaan.xlsx", {
        sheetName: "Data Perusahaan",
      })
    );
  }
  table.on("renderComplete", () => createIcons({ icons }));
});
