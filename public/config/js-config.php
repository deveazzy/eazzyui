<script type="module" src="/js/global.js"></script>
<script type="module" src="/js/header.js"></script>
<?php
    // Logika untuk memuat JavaScript spesifik untuk sidebar.
    if (isset($layout) && $layout === 'sidebar-left' && !in_array($page, $pages_without_sidebar)) {
        echo '<script type="module" src="/js/advanced-js/sidebar-left.js" defer></script>';
    }
    // Logika untuk memuat sponsors.js hanya pada halaman yang membutuhkan.
    if (in_array($page, $pages_requiring_sponsors_js)) {
        echo '<script type="module" src="/js/sponsors.js" defer></script>';
    }
    // Secara dinamis mencari file .js yang namanya sama dengan $page.
    if (isset($js_to_load_path) && file_exists($_SERVER['DOCUMENT_ROOT'] . $js_to_load_path)) {
        echo "<script type='module' src='{$js_to_load_path}' defer></script>";
    }
?>
