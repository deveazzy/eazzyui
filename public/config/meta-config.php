<meta name="google-site-verification" content="89JkTa5uXIjQ84J8qMaZEWHRh53Lqf5vFjuTKwWaYKs" />
<meta name="description" content="Jelajahi EazZy UI: Koleksi aset antarmuka pengguna (UI) modern, intuitif, dan responsif untuk mempercepat pengembangan aplikasi web Anda. Desain siap pakai untuk efisiensi maksimal.">
<meta name="keywords" content="EazZy UI, EazZy, desain ui, aset ui, komponen ui, framework ui, tailwind css, antarmuka pengguna, desain web, pengembangan cepat, open source ui">
<meta name="author" content="EazZy Project">
<?php
$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http");
$host = $_SERVER['HTTP_HOST'];
if ($page === 'home') {
    $canonical_path = '/'; 
} else {
    $canonical_path = "/{$page}";
    if (isset($layout) && $layout !== 'default' && !empty($layout)) {
        $canonical_path .= "/{$layout}";
    }
}
$canonical_url = "{$protocol}://{$host}{$canonical_path}";
?>
<link rel="canonical" href="<?php echo $canonical_url; ?>" />

<meta property="og:type" content="website">
<meta property="og:url" content="https://uiux.eazzy-project.com/">
<meta property="og:title" content="EazZy UI | Koleksi Aset Antarmuka Pengguna Modern">
<meta property="og:description" content="Jelajahi EazZy UI: Koleksi aset antarmuka pengguna (UI) modern, intuitif, dan responsif untuk mempercepat pengembangan aplikasi web Anda. Desain siap pakai untuk efisiensi maksimal.">
<meta property="og:image" content="/assets/images/logo.png">

<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://uiux.eazzy-project.com/">
<meta property="twitter:title" content="EazZy UI | Koleksi Aset Antarmuka Pengguna Modern">
<meta property="twitter:description" content="Jelajahi EazZy UI: Koleksi aset antarmuka pengguna (UI) modern, intuitif, dan responsif untuk mempercepat pengembangan aplikasi web Anda. Desain siap pakai untuk efisiensi maksimal.">
<meta property="twitter:image" content="/assets/images/logo.png">

<meta name="robots" content="index, follow">

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebSite",
    "url": "https://uiux.eazzy-project.com/",
    "name": "EazZy UI",
    "description": "Koleksi aset antarmuka pengguna (UI) modern, intuitif, dan responsif untuk mempercepat pengembangan aplikasi web.",
    "potentialAction": {
        "@type": "SearchAction",
        "target": "https://uiux.eazzy-project.com/?q={search_term_string}",
        "query-input": "required name=search_term_string"
    },
    "publisher": {
        "@type": "Organization",
        "name": "EazZy Project",
        "logo": {
            "@type": "ImageObject",
            "url": "https://uiux.eazzy-project.com/assets/images/logo.png"
        }
    }
}
</script>
