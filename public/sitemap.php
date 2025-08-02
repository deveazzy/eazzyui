<?php
// Set header untuk memberitahu browser/crawler bahwa ini adalah XML
header('Content-Type: application/xml');

// Mulai output XML
echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

// Array halaman yang akan dimasukkan ke sitemap
// Dalam implementasi nyata, data ini bisa diambil dari database,
// atau daftar file yang discan otomatis.
$pages = [
    
    // ===========================================================================================================================================
    // Proyek Utama
    ['loc' => 'https://eazzy-project.com/', 'lastmod' => date('Y-m-d'), 'changefreq' => 'weekly', 'priority' => '1.0'],
    ['loc' => 'https://apps.eazzy-project.com/', 'lastmod' => date('Y-m-d'), 'changefreq' => 'weekly', 'priority' => '1.0'],

    
    // ===========================================================================================================================================
    // UI/UX Project (uiux.eazzy-project.com)
    ['loc' => 'https://uiux.eazzy-project.com/', 'lastmod' => date('Y-m-d'), 'changefreq' => 'weekly', 'priority' => '1.0'],
    ['loc' => 'https://uiux.eazzy-project.com/about', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.8'],
    ['loc' => 'https://uiux.eazzy-project.com/atoms', 'lastmod' => date('Y-m-d'), 'changefreq' => 'weekly', 'priority' => '0.9'],
    ['loc' => 'https://uiux.eazzy-project.com/typography', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.7'],
    ['loc' => 'https://uiux.eazzy-project.com/buttons', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.7'],
    ['loc' => 'https://uiux.eazzy-project.com/grid', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.7'],
    ['loc' => 'https://uiux.eazzy-project.com/widgets', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.7'],
    ['loc' => 'https://uiux.eazzy-project.com/modal-form', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.8'],
    ['loc' => 'https://uiux.eazzy-project.com/tabs', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.7'],
    ['loc' => 'https://uiux.eazzy-project.com/icons', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.8'],
    ['loc' => 'https://uiux.eazzy-project.com/alerts-and-notifications', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.8'],
    ['loc' => 'https://uiux.eazzy-project.com/flatpickr', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.7'],
    ['loc' => 'https://uiux.eazzy-project.com/splide', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.7'],
    ['loc' => 'https://uiux.eazzy-project.com/tabulator', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.8'],
    ['loc' => 'https://uiux.eazzy-project.com/apexcharts', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.8'],
    ['loc' => 'https://uiux.eazzy-project.com/tailwind-css', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.6'],
    ['loc' => 'https://uiux.eazzy-project.com/animate-style', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.6'],
    ['loc' => 'https://uiux.eazzy-project.com/nprogress', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.6'],
    ['loc' => 'https://uiux.eazzy-project.com/xlsx', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.7'],
    ['loc' => 'https://uiux.eazzy-project.com/luxon', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.7'],
    ['loc' => 'https://uiux.eazzy-project.com/jspdf', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.7'],
    ['loc' => 'https://uiux.eazzy-project.com/tom-select', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.8'],
    ['loc' => 'https://uiux.eazzy-project.com/dashboard/sidebar-left', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.9'],
    ['loc' => 'https://uiux.eazzy-project.com/qr-code-styling', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.7'],
    ['loc' => 'https://uiux.eazzy-project.com/form-wizard', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.8'],
    ['loc' => 'https://uiux.eazzy-project.com/tinymce', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.8'],
    ['loc' => 'https://uiux.eazzy-project.com/accordions', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.7'],
    ['loc' => 'https://uiux.eazzy-project.com/pickr', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.7'],
    ['loc' => 'https://uiux.eazzy-project.com/masonry', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.7'],
    ['loc' => 'https://uiux.eazzy-project.com/imagesloaded', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.7'],
    ['loc' => 'https://uiux.eazzy-project.com/advanced-table', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.7'],
    ['loc' => 'https://uiux.eazzy-project.com/login', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.7'],
    ['loc' => 'https://uiux.eazzy-project.com/timeline', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.7'],
    ['loc' => 'https://uiux.eazzy-project.com/gallery', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.7'],
    ['loc' => 'https://uiux.eazzy-project.com/hero-sections', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.7'],
    ['loc' => 'https://uiux.eazzy-project.com/sponsors', 'lastmod' => date('Y-m-d'), 'changefreq' => 'daily', 'priority' => '0.7'],
    ['loc' => 'https://uiux.eazzy-project.com/profile/sidebar-left', 'lastmod' => date('Y-m-d'), 'changefreq' => 'monthly', 'priority' => '0.7'],
    
    
    // ===========================================================================================================================================
    // error page posisi paling bawah
    ['loc' => 'https://uiux.eazzy-project.com/401', 'lastmod' => date('Y-m-d'), 'changefreq' => 'yearly', 'priority' => '0.5'],
    ['loc' => 'https://uiux.eazzy-project.com/403', 'lastmod' => date('Y-m-d'), 'changefreq' => 'yearly', 'priority' => '0.5'],
    ['loc' => 'https://uiux.eazzy-project.com/404', 'lastmod' => date('Y-m-d'), 'changefreq' => 'yearly', 'priority' => '0.5'],
    ['loc' => 'https://uiux.eazzy-project.com/500', 'lastmod' => date('Y-m-d'), 'changefreq' => 'yearly', 'priority' => '0.5'],
    ['loc' => 'https://uiux.eazzy-project.com/503', 'lastmod' => date('Y-m-d'), 'changefreq' => 'yearly', 'priority' => '0.5'],
];

// Loop melalui setiap halaman dan tambahkan ke XML
foreach ($pages as $page) {
    echo '  <url>' . PHP_EOL;
    echo '    <loc>' . htmlspecialchars($page['loc']) . '</loc>' . PHP_EOL;
    echo '    <lastmod>' . htmlspecialchars($page['lastmod']) . '</lastmod>' . PHP_EOL;
    echo '    <changefreq>' . htmlspecialchars($page['changefreq']) . '</changefreq>' . PHP_EOL;
    echo '    <priority>' . htmlspecialchars($page['priority']) . '</priority>' . PHP_EOL;
    echo '  </url>' . PHP_EOL;
}

// Tutup tag urlset
echo '</urlset>' . PHP_EOL;
?>
