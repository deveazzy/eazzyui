<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

$requestUri = $_SERVER['REQUEST_URI'];
$path = strtok($requestUri, '?');
$path = trim($path, '/');
$segments = explode('/', $path);

$page = (!empty($segments[0])) ? htmlspecialchars($segments[0]) : 'home';
$layout = 'default';
if (isset($segments[1])) {
    $layout = htmlspecialchars($segments[1]);
}

if ($page === 'redis-test' && isset($_GET['clear_cache'])) {
    try {
        if (class_exists('Redis')) {
            $redis = new Redis();
            $redis->connect('redis-cache', 6379);
            $redis->del('products:all');
        }
    } catch (Exception $e) {
        
    }
    header('Location: /redis-test');
    exit;
}

$page_css_file = "/css/{$page}.css";

$pages_without_sidebar = [
    '401', '403', '500', '503', '404', 'home', 'about', 'login',
];

$allowed_pages = [
    '401', '403', '500', '503', '404',
    'home', 'about', 'atoms', 'icons',
    'typography', 'tabs', 'dashboard', 'buttons',
    'alerts-and-notifications', 'tailwind-css',
    'flatpickr', 'apexcharts', 'animate-style',
    'tabulator', 'splide', 'redis-test', 'modal-form',
    'blank-content', 'nprogress', 'grid', 'example-table', 
    'advanced-table', 'xlsx', 'luxon', 'jspdf', 'qr-code-styling',
    'pickr', 'login'
];

$pages_using_advanced_js = [
    'advanced-table', 'login'
];

$js_to_load_path = '';
if (in_array($page, $pages_using_advanced_js)) {
    $js_to_load_path = "/js/advanced-js/{$page}.js";
} else {
    $js_to_load_path = "/js/basic-js/{$page}.js";
}
