<?php
include 'biz/core.php'; 
// Definisikan semua halaman yang TIDAK BOLEH menggunakan sidebar
$pages_without_sidebar = ['home', 'about', '401', '403', '404', '500', '503'];
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
<?php 
    include 'config/html-config.php'; 
    include 'config/meta-config.php';
    include 'config/asset-config.php'; 
  // ==================================================================
  // PEMUATAN CSS SPESIFIK 
  // ==================================================================
  // Memuat CSS untuk sidebar jika layout-nya ada dan diizinkan
  // if ($layout === 'sidebar-left' && !in_array($page, $pages_without_sidebar)) {
  //     // echo '<link rel="stylesheet" href="/css/sidebar-left.css"/>';
  // }
  // Secara dinamis mencari file .css yang namanya sama dengan $page
  // if (file_exists($_SERVER['DOCUMENT_ROOT'] . $page_css_file)) { // Periksa keberadaan file dengan jalur fisik
  //     echo "<link rel='stylesheet' href='{$page_css_file}'/>";
  // }
?>
</head>
<body class="bg-gray-50 text-gray-800">

  <?php 
    include 'layout/header.php';
    // var_dump($page, $layout, $requestUri); // Mengomentari atau menghapus ini setelah debugging selesai
  ?>

    <div class="flex flex-1">
        <?php
        // Logika untuk menampilkan sidebar berdasarkan parameter layout
        if ($layout === 'sidebar-left' && !in_array($page, $pages_without_sidebar)) {
            include 'layout/sidebar-left.php';
        }
        // var_dump($page, $page_js_file);
        ?>
        <?php include 'pages/switch.php'; ?>
    </div>
  <?php 
  include 'layout/footer.php'; 
  include 'config/js-config.php'; 
  // Logika untuk memuat JavaScript spesifik untuk sidebar, HANYA jika sidebar digunakan
  if ($layout === 'sidebar-left' && !in_array($page, $pages_without_sidebar)) {
      echo '<script type="module" src="/js/sidebar-left.js"></script>';
  }
  // Secara dinamis mencari file .js yang namanya sama dengan $page
  if (file_exists($_SERVER['DOCUMENT_ROOT'] . $page_js_file)) { // Periksa keberadaan file dengan jalur fisik
      echo "<script type='module' src='{$page_js_file}'></script>";
  }
  ?>
</body>
</html>
