<?php
/**
 * config/js-config.php
 *
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 * File ini berisi semua tautan ke aset eksternal (CSS, JavaScript)
 * dan font yang digunakan di EazZy Project.
 */
?>
<script type="module" src="/js/global.js"></script> 
<script type="module" src="/js/header.js"></script>
<!-- Vendor -->
 <!-- Path diubah menjadi absolut dari root web (folder public) -->
 <script src="/assets/vendor/flatpickr/flatpickr.js"></script>
 <!-- <script type="module" src="/js/vendor/lucide/lucide.js"></script> -->

<!-- Memuat library Chart.js dari CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- Memuat library ApexCharts dari lokal -->
<script src="assets/vendor/apexcharts/apexcharts.js"></script>
<!-- Memuat library untuk aspect-ratio plugin (opsional, tapi baik untuk video) -->
<!-- <script src="https://cdn.tailwindcss.com/3.4.1?plugins=aspect-ratio"></script> -->
<!-- Memuat library Tabulator dari lokal -->
<script src="assets\vendor\tabulator\tabulator.js"></script>