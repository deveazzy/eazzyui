<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>    
    <?php 
        include 'head/html-config.php'; 
        include 'head/meta-config.php';
        include 'head/asset-config.php'; 
    ?>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Header / Navbar dengan Mega Menu -->
    <?php 
        include 'layout/header.php'; 
    ?>

    <!-- Main Container Kosong -->
    <main class="container mx-auto p-6 md:p-10">
        <!-- 
            Konten utama halaman Anda akan ditempatkan di sini.
            <?php include 'page/switch.php' ?>
            Area ini sengaja dikosongkan untuk menjadi template.
        -->
    </main>

    <!-- Footer -->
<?php 
include 'layout/footer.php'; 
include 'config/js-config.php'; 

// Logika untuk memuat JavaScript spesifik untuk sidebar.
if (isset($layout) && $layout === 'sidebar-left' && !in_array($page, $pages_without_sidebar)) {
    echo '<script type="module" src="/js/sidebar-left.js"></script>';
}
// Secara dinamis mencari file .js yang namanya sama dengan $page.
if (isset($page_js_file) && file_exists($_SERVER['DOCUMENT_ROOT'] . $page_js_file)) {
    echo "<script type='module' src='{$page_js_file}'></script>";
}
?>
</body>
</html>
