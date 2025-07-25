<?php
// Tentukan urutan kategori yang akan dicari
// Gunakan 'advanced-page' sesuai dengan nama folder Anda
$content_categories = ['basic-page', 'advanced-page', 'vendor-page']; 

$found_content = false;
$content_file = '';

if (in_array($page, $allowed_pages)) {
    foreach ($content_categories as $category) {
        $potential_file = __DIR__ . '/content/' . $category . '/' . $page . '.php'; 
        if (file_exists($potential_file)) {
            $content_file = $potential_file;
            $found_content = true;
            break; 
        }
    }

    if (!$found_content) {
        $potential_file_in_root = __DIR__ . '/content/' . $page . '.php'; 
        if (file_exists($potential_file_in_root)) {
            $content_file = $potential_file_in_root;
            $found_content = true;
        }
    }

    if ($found_content) {
        include $content_file;
    } else {
        include __DIR__ . '/content/404.php'; 
    }
} else {
    include __DIR__ . '/content/404.php'; 
}

?>