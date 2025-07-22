/**
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 * @path      public/js/modules/export/export-pdf.js
 *
 * Modul ini berisi fungsi untuk mengekspor data tabel ke format PDF
 * dengan memuat library jsPDF secara dinamis untuk memastikan urutan yang benar.
 */

// Fungsi helper untuk memuat skrip dan mengembalikan promise
function loadScript(src) {
  return new Promise((resolve, reject) => {
    // Cek jika skrip sudah ada
    if (document.querySelector(`script[src="${src}"]`)) {
      resolve();
      return;
    }
    const script = document.createElement('script');
    script.src = src;
    script.onload = () => resolve();
    script.onerror = () => reject(new Error(`Gagal memuat skrip: ${src}`));
    document.head.appendChild(script);
  });
}

// Fungsi utama untuk mengekspor PDF, sekarang menjadi async
export async function exportToPdf(table) {
  // Validasi awal untuk memastikan instance tabel yang valid
  if (!table || typeof table.getColumns !== 'function' || typeof table.getData !== 'function') {
    console.error("Invalid Tabulator table instance provided for PDF export.");
    alert("Gagal mengekspor PDF: Instansi tabel tidak valid atau tidak lengkap.");
    return;
  }

  try {
    // 1. Muat library utama jsPDF dan tunggu hingga selesai
    await loadScript('/assets/vendor/jspdf/jspdf.umd.min.js');
    
    // 2. SETELAH library utama selesai, muat plugin autoTable
    await loadScript('/assets/vendor/jspdf/jspdf.plugin.autotable.min.js');

    // 3. Setelah dijamin termuat, jalankan logika ekspor
    const { jsPDF } = window.jspdf; // Ambil konstruktor jsPDF
    const doc = new jsPDF(); // Buat instance jsPDF

    // Fungsi rekursif untuk mengumpulkan semua data, termasuk _children
    // dan menambahkan level untuk indentasi visual di PDF
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
    // Abaikan kolom 'Aksi' karena tidak relevan untuk ekspor PDF
    const visibleColumnDefinitions = table.getColumns().filter(column => 
      column.isVisible() && column.getDefinition().title !== 'Aksi'
    ).map(column => column.getDefinition());

    // Buat header PDF dari judul kolom Tabulator
    const head = [visibleColumnDefinitions.map(colDef => colDef.title)];
    
    // Fungsi untuk mendapatkan nilai sel berdasarkan definisi kolom Tabulator
    // Ini akan meniru logika formatter dari Tabulator Anda
    const getCellValueForExport = (rowData, colDef, level) => {
      let value = '';
      const field = colDef.field;
      let indent = '';
      let treeIndicator = '';

      // Tentukan indentasi dan indikator pohon berdasarkan level
      if (level > 0) {
        // Indentasi untuk setiap level
        indent = ' '.repeat((level - 1) * 4); // 4 spasi per level
        // Indikator untuk level anak
        treeIndicator = '|-- '; 
      }

      switch (field) {
        case 'nama_perusahaan':
          // Menggunakan properti yang berbeda berdasarkan level hierarki
          if (rowData.nama_perusahaan) {
            value = rowData.nama_perusahaan;
          } else if (rowData.nama_cabang) {
            value = rowData.nama_cabang;
          } else if (rowData.nama_produk) {
            value = rowData.nama_produk;
          }
          return indent + treeIndicator + value; // Terapkan indentasi dan indikator
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
        // Tambahkan penanganan untuk properti lain yang mungkin ingin Anda tampilkan
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
            return `Rp ${new Intl.NumberFormat("id-ID").format(rowData.harga)}`;
          }
          return '';
        default:
          // Default: ambil nilai langsung dari field jika tidak ada penanganan khusus
          return rowData[field] !== undefined ? rowData[field] : '';
      }
    };

    // Buat body tabel PDF
    const body = allTableData.map(row => {
      return visibleColumnDefinitions.map(colDef => {
        return getCellValueForExport(row, colDef, row._level);
      });
    });

    // Tentukan lebar kolom secara manual untuk menghindari pemotongan
    // Sesuaikan nilai-nilai ini berdasarkan kebutuhan dan jumlah kolom
    const columnWidths = visibleColumnDefinitions.map(colDef => {
      switch (colDef.field) {
        case 'nama_perusahaan': return 70; // Lebih besar untuk nama
        case 'id_perusahaan': return 25;
        case 'bidang_usaha': return 50; // Lebih besar untuk deskripsi
        case 'lokasi_perusahaan': return 45; // Lebih besar untuk lokasi
        default: return 'auto'; // Default untuk kolom lain jika ditambahkan
      }
    });

    // Panggil autoTable langsung pada instance doc
    doc.autoTable({
      head: head,
      body: body,
      // Opsi styling untuk autoTable
      styles: {
        fontSize: 8, // Ukuran font lebih kecil agar lebih banyak teks muat
        cellPadding: 1,
        overflow: 'linebreak', // Pastikan teks memecah baris jika terlalu panjang
        halign: 'left', // Rata kiri untuk semua sel
        valign: 'top', // Rata atas untuk semua sel
      },
      headStyles: {
        fillColor: [220, 220, 220],
        textColor: 50,
        fontStyle: 'bold',
        halign: 'center', // Rata tengah untuk header
      },
      columnStyles: columnWidths.reduce((acc, width, index) => {
        if (width !== 'auto') {
          acc[index] = { cellWidth: width };
        }
        return acc;
      }, {}),
      didDrawPage: function (data) {
        doc.setFontSize(14); // Ukuran font judul halaman
        doc.setTextColor(40);
        doc.text("Data Perusahaan", data.settings.margin.left, 22);
      },
      margin: { top: 30, left: 10, right: 10 }, // Margin halaman
      startY: 30 // Mulai tabel setelah judul halaman
    });

    doc.save("data-perusahaan.pdf");

  } catch (error) {
    console.error("Gagal mengekspor PDF:", error); // Ini akan mencetak objek error lengkap
    let errorMessage = 'Tidak ada pesan error.';
    if (error instanceof Error) {
      errorMessage = error.message;
    } else if (typeof error === 'string') {
      errorMessage = error;
    } else if (error && typeof error.toString === 'function') {
      errorMessage = error.toString();
    }
    // Menggunakan alert() untuk sementara, disarankan mengganti dengan modal kustom di produksi
    alert(`Gagal mengekspor PDF. Lihat console (F12) untuk detail error.\n\nError: ${errorMessage}`);
  }
}
