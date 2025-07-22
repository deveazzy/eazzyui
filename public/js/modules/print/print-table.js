/**
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 * @path      public/js/modules/print/print-table.js
 *
 * Modul ini berisi fungsi untuk memicu fungsionalitas cetak pada tabel.
 */

export function printTable(table) {
  if (!table) {
    console.error("Table instance not provided for printing.");
    return;
  }
  // Menggunakan modul Print bawaan Tabulator
  table.print(false, true);
}
