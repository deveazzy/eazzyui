// @path public/js/example-table.js
// @author    [EazZy Project] Copyright (c) [2025] [EazZy Project] license   https://opensource.org/licenses/MIT MIT License

// --- Mulai: Impor Modul ---
// Mengimpor createIcons dan icons dari Lucide.js sebagai modul
import { createIcons, icons } from "/assets/vendor/lucide/lucide.js";

// Impor Tabulator Core dan SEMUA modul yang digunakan secara eksplisit.
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

// --- Akhir: Impor Modul ---

document.addEventListener("DOMContentLoaded", function () {
  // --- Mulai: Penyesuaian Global Tabulator ---

  // Daftarkan semua modul yang diimpor secara manual.
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

  // Daftarkan Luxon ke Tabulator
  if (typeof luxon !== "undefined") {
    Tabulator.dependencies = {
      luxon: luxon,
      DateTime: luxon.DateTime,
    };
  }

  // --- Akhir: Penyesuaian Global Tabulator ---

  // DIPERBARUI: Data diganti dengan struktur Toko > Barang > Supplier
  var exampleTableData = [
    // --- Toko 1 ---
    {
      id: "TK-001",
      nama: "Toko Elektronik Central",
      detail: "manager@tokocentral.com",
      grup: "Toko Utama",
      keterangan: "Jakarta Pusat",
      status: "Aktif",
      // Level 2: Barang
      _children: [
        {
          id: "BRG-01A",
          nama: "Laptop ProBook 15",
          detail: "Stok: 25 unit",
          grup: "Barang Elektronik",
          keterangan: "Komputer",
          status: "Tersedia",
          // Level 3: Supplier
          _children: [
            {
              id: "SUP-A1",
              nama: "PT. Komputer Jaya",
              detail: "sales@komputerjaya.com",
              grup: "Supplier Utama",
              keterangan: "Distributor Resmi",
              status: "Terverifikasi",
            },
          ],
        },
        {
          id: "BRG-02A",
          nama: "Smartphone Galaxy S25",
          detail: "Stok: 50 unit",
          grup: "Barang Elektronik",
          keterangan: "Handphone",
          status: "Tersedia",
          _children: [
            {
              id: "SUP-B1",
              nama: "CV. Selular Prima",
              detail: "info@selularprima.com",
              grup: "Supplier",
              keterangan: "Agen",
              status: "Terverifikasi",
            },
            {
              id: "SUP-B2",
              nama: "Sinar Jaya Cell",
              detail: "sinarjaya@gmail.com",
              grup: "Supplier",
              keterangan: "Pihak Ketiga",
              status: "Baru",
            },
          ],
        },
      ],
    },
    // --- Toko 2 ---
    {
      id: "TK-002",
      nama: "Gudang Perabotan Bandung",
      detail: "gudang.bdg@perabotan.com",
      grup: "Gudang",
      keterangan: "Bandung",
      status: "Aktif",
      _children: [
        {
          id: "BRG-03B",
          nama: "Meja Makan Set Jati",
          detail: "Stok: 15 set",
          grup: "Barang Furnitur",
          keterangan: "Meja & Kursi",
          status: "Tersedia",
          _children: [
            {
              id: "SUP-C1",
              nama: "PT. Mebel Abadi",
              detail: "order@mebelabadi.id",
              grup: "Supplier Lokal",
              keterangan: "Pengrajin",
              status: "Terverifikasi",
            },
          ],
        },
      ],
    },
  ];

  // Formatter lain tidak berubah
  var actionFormatter = function (cell, formatterParams, onRendered) {
    var id = cell.getRow().getData().id;
    var rowData = cell.getRow().getData();

    onRendered(function () {
      createIcons({
        icons: icons,
        attrs: { class: "w-4 h-4" },
        container: cell.getElement(),
      });

      const dropdownToggle = cell
        .getElement()
        .querySelector(".dropdown-toggle");
      const dropdownMenu = cell.getElement().querySelector(".dropdown-menu");

      if (dropdownToggle && dropdownMenu) {
        dropdownToggle.addEventListener("click", function (e) {
          e.stopPropagation();
          dropdownMenu.classList.toggle("hidden");
        });

        document.addEventListener("click", function (e) {
          if (
            !dropdownToggle.contains(e.target) &&
            !dropdownMenu.contains(e.target)
          ) {
            dropdownMenu.classList.add("hidden");
          }
        });
      }

      const editButton = cell.getElement().querySelector(".action-edit");
      if (editButton) {
        editButton.addEventListener("click", function (e) {
          e.preventDefault();
          alert("Edit data for ID: " + id);
          dropdownMenu.classList.add("hidden");
        });
      }

      const detailButton = cell.getElement().querySelector(".action-detail");
      if (detailButton) {
        detailButton.addEventListener("click", function (e) {
          e.preventDefault();
          alert(
            "Detail data for ID: " +
              id +
              "\n" +
              JSON.stringify(rowData, null, 2)
          );
          dropdownMenu.classList.add("hidden");
        });
      }

      const copyButton = cell.getElement().querySelector(".action-copy");
      if (copyButton) {
        copyButton.addEventListener("click", function (e) {
          e.preventDefault();
          const textToCopy = JSON.stringify(rowData);
          navigator.clipboard
            .writeText(textToCopy)
            .then(() => {
              alert("Data for ID: " + id + " copied to clipboard.");
            })
            .catch((err) => {
              console.error("Failed to copy: ", err);
            });
          dropdownMenu.classList.add("hidden");
        });
      }

      const deleteButton = cell.getElement().querySelector(".action-delete");
      if (deleteButton) {
        deleteButton.addEventListener("click", function (e) {
          e.preventDefault();
          if (
            confirm("Are you sure you want to delete data for ID: " + id + "?")
          ) {
            cell.getRow().delete();
            alert("Data for ID: " + id + " deleted.");
          }
          dropdownMenu.classList.add("hidden");
        });
      }
    });

    return `
      <div class="relative inline-block text-left dropdown-wrapper group">
        <button type="button" class="dropdown-toggle inline-flex w-full justify-center gap-x-1.5 rounded-lg bg-white px-3 py-1.5 text-sm font-semibold text-gray-900 shadow-md border border-gray-200 hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-400 transition-all">
          Aksi <i data-lucide='chevron-down' class='w-4 h-4 -mr-1'></i>
        </button>
        <div class="dropdown-menu hidden absolute left-0 md:right-0 md:left-auto z-20 mt-2 min-w-40 w-56 origin-top-right rounded-xl bg-white shadow-2xl ring-1 ring-blue-200 ring-opacity-60 overflow-hidden border border-blue-100 flex-col">
          <a href="#" class="flex items-center gap-2 px-4 py-2 text-sm text-blue-700 hover:bg-blue-50 transition-colors action-edit"><i data-lucide='edit-3'></i>Edit</a>
          <a href="#" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition-colors action-detail"><i data-lucide='eye'></i>Detail</a>
          <a href="#" class="flex items-center gap-2 px-4 py-2 text-sm text-green-700 hover:bg-green-50 transition-colors action-copy"><i data-lucide='copy-plus'></i>Salin</a>
          <a href="#" class="flex items-center gap-2 px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition-colors action-delete"><i data-lucide='trash-2'></i>Hapus</a>
        </div>
      </div>
    `;
  };

  var statusFormatter = function (cell, formatterParams) {
    var value = cell.getValue();
    var color = "gray";
    if (
      value === "Aktif" ||
      value === "Tersedia" ||
      value === "Terverifikasi"
    ) {
      color = "green";
    } else if (value === "Nonaktif") {
      color = "red";
    } else if (value === "Baru") {
      color = "blue";
    }
    return `<span class='inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-${color}-100 text-${color}-800'>${value}</span>`;
  };

  var customCollapseFormatter = function (data) {
    var list = document.createElement("ul");
    list.classList.add("list-none", "p-0", "m-0");

    data.forEach(function (col) {
      if (col.value !== undefined && col.value !== null && col.value !== "") {
        let item = document.createElement("li");
        item.classList.add(
          "py-1",
          "flex",
          "justify-between",
          "items-center",
          "border-b",
          "border-dashed",
          "border-gray-300"
        );
        item.innerHTML = `
          <strong class="text-gray-700 min-w-[120px] mr-2">${col.title}:</strong>
          <span class="text-gray-700 text-right flex-grow">${col.value}</span>
        `;
        list.appendChild(item);
      }
    });

    return Object.keys(data).length ? list : "";
  };

  // Inisialisasi tabel
  var exampleTable = new Tabulator("#my-example-table", {
    height: "auto",
    data: exampleTableData,
    layout: "fitColumns",
    responsiveLayout: "collapse",
    responsiveLayoutCollapseFormatter: customCollapseFormatter,
    dataTree: true,
    dataTreeStartExpanded: false,
    pagination: "local",
    paginationSize: 10,
    paginationSizeSelector: [5, 10, 25, 50, 100],
    columns: [
      {
        formatter: "responsiveCollapse",
        width: 40,
        minWidth: 40,
        hozAlign: "center",
        resizable: false,
        headerSort: false,
        frozen: true,
      },
      // DIPERBARUI: Judul kolom disesuaikan dengan data baru
      {
        title: "ID",
        field: "id",
        width: 120,
        responsive: 0,
        cssClass: "font-semibold text-blue-600",
        frozen: true,
      },
      {
        title: "Informasi Utama",
        columns: [
          {
            title: "Nama", // Akan menampilkan Nama Toko/Barang/Supplier
            field: "nama",
            minWidth: 250,
            responsive: 0,
            editor: "input",
            cssClass: "font-medium",
          },
          {
            title: "Detail", // Akan menampilkan Email/Stok
            field: "detail",
            minWidth: 200,
            responsive: 1,
            editor: "input",
          },
        ],
      },
      {
        title: "Informasi Tambahan",
        columns: [
          {
            title: "Grup", // Akan menampilkan Toko Utama/Barang Elektronik/Supplier
            field: "grup",
            minWidth: 150,
            responsive: 2,
            editor: "input",
          },
          {
            title: "Keterangan", // Akan menampilkan Lokasi/Kategori/Posisi
            field: "keterangan",
            minWidth: 150,
            responsive: 2,
            editor: "input",
          },
        ],
      },
      {
        title: "Status",
        field: "status",
        width: 150,
        hozAlign: "center",
        formatter: statusFormatter,
        responsive: 0,
        frozen: true,
      },
      {
        title: "Aksi",
        field: "actions",
        width: 120,
        hozAlign: "center",
        formatter: actionFormatter,
        headerSort: false,
        responsive: 0,
      },
    ],
  });

  // Event listener tidak berubah
  document.getElementById("export-csv").addEventListener("click", function () {
    exampleTable.download("csv", "data-toko.csv");
  });

  document.getElementById("export-xlsx").addEventListener("click", function () {
    exampleTable.download("xlsx", "data-toko.xlsx", {
      sheetName: "Data Toko",
    });
  });

  exampleTable.on("renderComplete", function () {
    createIcons({
      icons: icons,
    });
  });

  createIcons({
    icons: icons,
  });
});
