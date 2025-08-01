<?php
// Mendefinisikan konstanta APP_ROOT yang menunjuk ke direktori root proyek.
// __DIR__ adalah direktori dari file saat ini (misalnya, /var/www/mirror/public/).
// realpath(__DIR__ . '/..') akan naik satu level ke atas, menghasilkan /var/www/mirror/ (root proyek).

define('APP_ROOT', realpath(__DIR__ . '/..'));

// Mendefinisikan path absolut ke file core.php menggunakan APP_ROOT.
include_once APP_ROOT . '/app/Core/core.php';
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <?php 
      include_once 'config/html-config.php'; 
      include_once 'config/meta-config.php';
      include_once 'config/asset-config.php'; 
  ?>
</head>
<body class="text-gray-800 flex flex-col min-h-dynamic-screen">
  <?php 
    include 'layout/header.php';
  ?>
    <?php
    if (isset($layout) && $layout === 'sidebar-left' && !in_array($page, $pages_without_sidebar)) {
        include 'layout/sidebar-left.php';
    }
    include 'pages/switch.php'; 
    ?>
  <?php 
  include 'layout/footer.php'; 
  include 'config/js-config.php';
  ?>
</body>
</html>
