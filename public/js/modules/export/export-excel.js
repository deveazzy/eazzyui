/**
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]\
 * @license   https://opensource.org/licenses/MIT MIT License
 * @path      public/js/modules/export/export-excel.js
 *
 * Modul ini berisi fungsi untuk mengekspor data tabel ke format CSV dan XLSX.
 */

export function exportToCsv(table) {
  if (!table) {
    console.error("Table instance not provided for CSV export.");
    alert("Gagal mengekspor CSV: Instansi tabel tidak valid.");
    return;
  }

  try {
    // Fungsi rekursif untuk mengumpulkan semua data, termasuk _children
    // dan menambahkan level untuk indentasi visual
    const getAllFlatDataWithLevel = (data, level = 0) => {
      let flatData = [];
      data.forEach(row => {
        flatData.push({ ...row, _level: level }); // Tambahkan properti _level
        if (row._children && row._children.length > 0) {
          flatData = flatData.concat(getAllFlatDataWithLevel(row._children, level + 1));
        }
      });
      return flatData;
    };

    // Dapatkan semua data dari Tabulator, termasuk sub-data, dengan level
    const allTableData = getAllFlatDataWithLevel(table.getData(true));

    // Ambil definisi kolom yang terlihat dari Tabulator
    // Abaikan kolom 'Aksi' karena tidak relevan untuk ekspor
    const visibleColumnDefinitions = table.getColumns().filter(column =>
      column.isVisible() && column.getDefinition().title !== 'Aksi'
    ).map(column => column.getDefinition());

    // Fungsi untuk mendapatkan nilai sel berdasarkan definisi kolom Tabulator
    // Ini akan meniru logika formatter dari Tabulator Anda
    const getCellValueForExport = (rowData, colDef, level) => {
      let value = '';
      const field = colDef.field;
      let indent = '';
      let treeIndicator = '';

      // Tentukan indentasi dan indikator pohon berdasarkan level
      if (level > 0) {
        indent = ' '.repeat((level - 1) * 4); // 4 spasi per level
        treeIndicator = '|-- ';
      }

      switch (field) {
        case 'nama_perusahaan':
          if (rowData.nama_perusahaan) {
            value = rowData.nama_perusahaan;
          } else if (rowData.nama_cabang) {
            value = rowData.nama_cabang;
          } else if (rowData.nama_produk) {
            value = rowData.nama_produk;
          }
          return indent + treeIndicator + value;
        case 'id_perusahaan':
          if (rowData.id_perusahaan) {
            value = rowData.id_perusahaan;
          } else if (rowData.id_cabang) {
            value = rowData.id_cabang;
          } else if (rowData.sku_produk) {
            value = rowData.sku_produk;
          }
          return value;
        case 'bidang_usaha': // Ini adalah kolom "Deskripsi" di Tabulator
          if (rowData.bidang_usaha) {
            value = rowData.bidang_usaha;
          } else if (rowData.tipe_cabang) {
            value = rowData.tipe_cabang;
          } else if (rowData.deskripsi_produk) {
            value = rowData.deskripsi_produk;
          }
          return value;
        case 'lokasi_perusahaan': // Ini adalah kolom "Lokasi" di Tabulator
          if (rowData.lokasi_perusahaan) {
            value = rowData.lokasi_perusahaan;
          } else if (rowData.lokasi_kota) {
            value = rowData.lokasi_kota;
          } else if (rowData.lokasi_produk) {
            value = rowData.lokasi_produk;
          }
          return value;
        case 'status_perusahaan':
          return rowData.status_perusahaan || '';
        case 'status_cabang':
          return rowData.status_cabang || '';
        case 'kepala_cabang':
          return rowData.kepala_cabang || '';
        case 'kategori_produk':
          return rowData.kategori_produk || '';
        case 'harga':
          if (rowData.harga !== undefined && rowData.harga !== null) {
            return `Rp ${new Intl.NumberFormat("id-ID").format(value)}`;
          }
          return '';
        default:
          return rowData[field] !== undefined ? rowData[field] : '';
      }
    };

    // Siapkan data untuk ekspor CSV
    // Baris pertama adalah header
    const csvRows = [];
    csvRows.push(visibleColumnDefinitions.map(colDef => `"${colDef.title}"`).join(',')); // Enclose headers in quotes

    // Tambahkan baris data yang sudah diformat
    allTableData.forEach(row => {
      const rowForExport = visibleColumnDefinitions.map(colDef => {
        let cellValue = getCellValueForExport(row, colDef, row._level);
        // Untuk CSV, pastikan nilai yang mengandung koma atau kutip ganda diapit kutip ganda
        // dan kutip ganda di dalamnya digandakan
        if (typeof cellValue === 'string') {
          cellValue = cellValue.replace(/"/g, '""'); // Escape double quotes
          if (cellValue.includes(',') || cellValue.includes('\n')) { // Check for commas or newlines
            cellValue = `"${cellValue}"`; // Enclose in double quotes
          }
        }
        return cellValue;
      });
      csvRows.push(rowForExport.join(','));
    });

    // Buat Blob dari string CSV
    const csvString = csvRows.join('\n');
    const blob = new Blob([csvString], { type: 'text/csv;charset=utf-8;' });

    // Buat URL objek dan picu unduhan
    const link = document.createElement('a');
    if (link.download !== undefined) { // Cek dukungan atribut download
      const url = URL.createObjectURL(blob);
      link.setAttribute('href', url);
      link.setAttribute('download', 'data-perusahaan.csv');
      link.style.visibility = 'hidden';
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);
      URL.revokeObjectURL(url); // Bersihkan URL objek
    } else {
      // Fallback untuk browser yang tidak mendukung atribut download
      alert("Browser Anda tidak mendukung unduhan otomatis. Silakan salin teks dari konsol.");
      console.log(csvString);
    }

  } catch (error) {
    console.error("Gagal mengekspor CSV:", error);
    alert(`Gagal mengekspor CSV. Lihat console (F12) untuk detail error.\n\nError: ${error ? error.message : 'Tidak ada pesan error.'}`);
  }
}

export function exportToXlsx(table) {
  if (!table) {
    console.error("Table instance not provided for XLSX export.");
    return;
  }

  try {
    // Pastikan library XLSX dimuat
    if (typeof XLSX === 'undefined') {
      console.error("XLSX library not loaded. Please ensure /assets/vendor/xlxs/xlsx.min.js is loaded before calling exportToXlsx.");
      alert("Gagal mengekspor XLSX: Library XLSX tidak dimuat.");
      return;
    }

    // Fungsi rekursif untuk mengumpulkan semua data, termasuk _children
    // dan menambahkan level untuk indentasi visual
    const getAllFlatDataWithLevel = (data, level = 0) => {
      let flatData = [];
      data.forEach(row => {
        flatData.push({ ...row, _level: level }); // Tambahkan properti _level
        if (row._children && row._children.length > 0) {
          flatData = flatData.concat(getAllFlatDataWithLevel(row._children, level + 1));
        }
      });
      return flatData;
    };

    // Dapatkan semua data dari Tabulator, termasuk sub-data, dengan level
    const allTableData = getAllFlatDataWithLevel(table.getData(true));

    // Ambil definisi kolom yang terlihat dari Tabulator
    // Abaikan kolom 'Aksi' karena tidak relevan untuk ekspor
    const visibleColumnDefinitions = table.getColumns().filter(column =>
      column.isVisible() && column.getDefinition().title !== 'Aksi'
    ).map(column => column.getDefinition());

    // Fungsi untuk mendapatkan nilai sel berdasarkan definisi kolom Tabulator
    // Ini akan meniru logika formatter dari Tabulator Anda
    const getCellValueForExport = (rowData, colDef, level) => {
      let value = '';
      const field = colDef.field;
      let indent = '';
      let treeIndicator = '';

      // Tentukan indentasi dan indikator pohon berdasarkan level
      if (level > 0) {
        indent = ' '.repeat((level - 1) * 4); // 4 spasi per level
        treeIndicator = '|-- ';
      }

      switch (field) {
        case 'nama_perusahaan':
          if (rowData.nama_perusahaan) {
            value = rowData.nama_perusahaan;
          } else if (rowData.nama_cabang) {
            value = rowData.nama_cabang;
          } else if (rowData.nama_produk) {
            value = rowData.nama_produk;
          }
          return indent + treeIndicator + value;
        case 'id_perusahaan':
          if (rowData.id_perusahaan) {
            value = rowData.id_perusahaan;
          } else if (rowData.id_cabang) {
            value = rowData.id_cabang;
          } else if (rowData.sku_produk) {
            value = rowData.sku_produk;
          }
          return value;
        case 'bidang_usaha': // Ini adalah kolom "Deskripsi" di Tabulator
          if (rowData.bidang_usaha) {
            value = rowData.bidang_usaha;
          } else if (rowData.tipe_cabang) {
            value = rowData.tipe_cabang;
          } else if (rowData.deskripsi_produk) {
            value = rowData.deskripsi_produk;
          }
          return value;
        case 'lokasi_perusahaan': // Ini adalah kolom "Lokasi" di Tabulator
          if (rowData.lokasi_perusahaan) {
            value = rowData.lokasi_perusahaan;
          } else if (rowData.lokasi_kota) {
            value = rowData.lokasi_kota;
          } else if (rowData.lokasi_produk) {
            value = rowData.lokasi_produk;
          }
          return value;
        case 'status_perusahaan':
          return rowData.status_perusahaan || '';
        case 'status_cabang':
          return rowData.status_cabang || '';
        case 'kepala_cabang':
          return rowData.kepala_cabang || '';
        case 'kategori_produk':
          return rowData.kategori_produk || '';
        case 'harga':
          if (rowData.harga !== undefined && rowData.harga !== null) {
            return `Rp ${new Intl.NumberFormat("id-ID").format(value)}`;
          }
          return '';
        default:
          return rowData[field] !== undefined ? rowData[field] : '';
      }
    };

    // Siapkan data untuk ekspor XLSX
    // Baris pertama adalah header
    const exportData = [
      visibleColumnDefinitions.map(colDef => colDef.title)
    ];

    // Tambahkan baris data yang sudah diformat
    allTableData.forEach(row => {
      const rowForExport = visibleColumnDefinitions.map(colDef => {
        return getCellValueForExport(row, colDef, row._level);
      });
      exportData.push(rowForExport);
    });

    // Buat workbook dan worksheet menggunakan SheetJS secara langsung
    const ws = XLSX.utils.aoa_to_sheet(exportData); // array of arrays to sheet
    const wb = XLSX.utils.book_new();
    XLSX.utils.book_append_sheet(wb, ws, "Data Perusahaan");

    // Tulis dan unduh file XLSX
    XLSX.writeFile(wb, "data-perusahaan.xlsx");

  } catch (error) {
    console.error("Gagal mengekspor XLSX:", error);
    alert(`Gagal mengekspor XLSX. Lihat console (F12) untuk detail error.\n\nError: ${error ? error.message : 'Tidak ada pesan error.'}`);
  }
}
