<?php
/**
 * app/Core/core.php
 *
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 * File ini berisi semua tautan ke aset eksternal (CSS, JavaScript)
 * dan font yang digunakan di EazZy Project.
 */

// Path dari app/Core/ ke root adalah naik dua tingkat (../../)
require_once __DIR__ . '/../../vendor/autoload.php';
// Path ke file .env juga berada di root
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load(); 

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
if ($page === 'redis-test' && isset($_GET['clear_cache'])) {
    try {
        if (class_exists('Redis')) {
            $redis = new Redis();
            $redis->connect('redis-cache', 6379);
            $redis->del('products:all'); // Kunci cache yang spesifik
        }
    } catch (Exception $e) {
        // Abaikan error jika Redis tidak bisa dihubungi saat proses clear cache.
    }
    
    // Redirect untuk membersihkan parameter GET dari URL.
    header('Location: /redis-test');
    exit; // Wajib ada setelah header redirect.
}
$page_css_file = "/css/{$page}.css"; // Jalur absolut
$page_js_file = "/js/{$page}.js"; // Jalur absolut
?>