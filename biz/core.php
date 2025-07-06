<?php
// Dapatkan path URL yang diminta oleh pengguna
$requestUri = $_SERVER['REQUEST_URI'];
// Hapus query string jika ada, hanya ambil path-nya
$path = strtok($requestUri, '?');
// Hapus slash di awal dan akhir untuk memudahkan parsing
$path = trim($path, '/');
// Pisahkan path menjadi segmen-segmen
$segments = explode('/', $path);
// Tentukan 'page' dari segmen pertama
$page = (!empty($segments[0])) ? htmlspecialchars($segments[0]) : 'home';
// Tentukan 'layout' dari segmen kedua (jika ada)
$layout = 'default'; // Default value
if (isset($segments[1])) {
    $layout = htmlspecialchars($segments[1]);
}
$page_css_file = "/css/{$page}.css"; // Jalur absolut
$page_js_file = "/js/{$page}.js"; // Jalur absolut
?>