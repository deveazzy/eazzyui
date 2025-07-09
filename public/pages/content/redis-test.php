<?php
/**
 * @path    public/pages/redis-example.php
 * @author  [EazZy Project]
 * @license https://opensource.org/licenses/MIT MIT License
 *
 * [EazZy Project] Copyright (c) 2025 [EazZy Project]
 *
 * Halaman ini mendemonstrasikan contoh penerapan caching dengan Redis.
 * Logika redirect dan clear cache diasumsikan sudah ditangani di
 * file entry point utama (index.php atau core.php).
 */

// --- Konfigurasi ---
$redisHost = 'redis-cache'; // Nama service Redis di docker-compose.yml
$redisPort = 6379;
$cacheKey = 'products:all'; // Kunci unik untuk data ini di Redis
$cacheTTL = 3600; // Masa berlaku cache dalam detik (1 jam)

// --- Logika untuk Menampilkan Halaman ---
$redisConnected = false;
$dataSource = 'DATABASE (Sumber Asli)';
$products = [];
$executionTime = 0;
$errorMessage = null;

// --- Fungsi untuk menyimulasikan query database yang lambat ---
function getProductsFromDatabase() {
    // Simulasi query lambat dengan sleep selama 2 detik
    sleep(2);
    
    // Data dummy seolah-olah dari database
    return [
        ['id' => 1, 'name' => 'Laptop Pro', 'price' => 15000000],
        ['id' => 2, 'name' => 'Mechanical Keyboard', 'price' => 1200000],
        ['id' => 3, 'name' => 'Wireless Mouse', 'price' => 750000],
        ['id' => 4, 'name' => '4K Monitor', 'price' => 4500000],
    ];
}

$startTime = microtime(true);

try {
    // Cek apakah ekstensi Redis ada sebelum mencoba menggunakannya.
    if (!class_exists('Redis')) {
        throw new Exception('Ekstensi Redis PHP tidak terpasang. Silakan aktifkan di php.ini atau Dockerfile.');
    }
    
    $redis = new Redis();
    $redis->connect($redisHost, $redisPort);
    $redisConnected = true;

    // Cek apakah data ada di cache
    $cachedProducts = $redis->get($cacheKey);

    if ($cachedProducts) {
        // --- CACHE HIT ---
        $dataSource = 'REDIS CACHE';
        $products = json_decode($cachedProducts, true);
    } else {
        // --- CACHE MISS ---
        $products = getProductsFromDatabase();
        $redis->set($cacheKey, json_encode($products), $cacheTTL);
    }

} catch (Exception $e) {
    // Tangani semua kemungkinan error (koneksi gagal, ekstensi tidak ada, dll.)
    $redisConnected = false;
    $errorMessage = $e->getMessage();
    $products = getProductsFromDatabase(); // Tetap tampilkan data dari DB sebagai fallback
}

$endTime = microtime(true);
$executionTime = round(($endTime - $startTime) * 1000, 2); // Dalam milidetik

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Redis Cache</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-100">

    <div class="container mx-auto p-4 md:p-8">
        <div class="bg-white p-6 md:p-8 rounded-lg shadow-xl max-w-4xl mx-auto">
            
            <!-- Judul Halaman -->
            <div class="flex items-center space-x-4 mb-8">
                <div class="bg-red-100 text-red-600 p-3 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.5 12.5c0-2.4-1.3-4.5-3.2-5.7"/><path d="M2.5 12.5c0-2.4 1.3-4.5 3.2-5.7"/><path d="M12.5 2.5c-2.4 0-4.5 1.3-5.7 3.2"/><path d="M12.5 21.5c-2.4 0-4.5-1.3-5.7-3.2"/><path d="M6.3 18.7c.9.9 2.2 1.5 3.7 1.5h4c1.5 0 2.8-.6 3.7-1.5"/><path d="M6.3 5.3c.9-.9 2.2-1.5 3.7-1.5h4c1.5 0 2.8.6 3.7 1.5"/></svg>
                </div>
                <div>
                    <h1 class="text-3xl font-extrabold text-gray-800">Contoh Penerapan Redis Cache</h1>
                    <p class="text-lg text-gray-500 mt-1">Mendemonstrasikan perbedaan kecepatan dengan dan tanpa cache.</p>
                </div>
            </div>

            <!-- Tampilkan pesan error jika ada -->
            <?php if ($errorMessage): ?>
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6" role="alert">
                    <p class="font-bold">Error</p>
                    <p><?php echo htmlspecialchars($errorMessage); ?></p>
                </div>
            <?php endif; ?>

            <!-- Status Koneksi dan Sumber Data -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8 text-center">
                <div class="p-4 rounded-lg <?php echo $redisConnected ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'; ?>">
                    <h3 class="font-bold">Koneksi Redis</h3>
                    <p class="text-2xl font-mono"><?php echo $redisConnected ? 'TERHUBUNG' : 'GAGAL'; ?></p>
                </div>
                <div class="p-4 rounded-lg bg-blue-100 text-blue-800">
                    <h3 class="font-bold">Sumber Data</h3>
                    <p class="text-2xl font-mono"><?php echo $dataSource; ?></p>
                </div>
                <div class="p-4 rounded-lg bg-purple-100 text-purple-800">
                    <h3 class="font-bold">Waktu Eksekusi</h3>
                    <p class="text-2xl font-mono"><?php echo $executionTime; ?> ms</p>
                </div>
            </div>
            
            <!-- Daftar Produk -->
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-700 mb-4">Daftar Produk</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Produk</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Harga</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <?php foreach ($products as $product): ?>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><?php echo htmlspecialchars($product['id']); ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?php echo htmlspecialchars($product['name']); ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Rp <?php echo number_format($product['price'], 0, ',', '.'); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Tombol Aksi -->
            <div class="flex items-center justify-center space-x-4">
                <a href="/redis-test" class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition-colors">
                    Muat Ulang Halaman
                </a>
                <a href="?clear_cache=1" class="px-6 py-2 bg-red-600 text-white font-semibold rounded-lg shadow-md hover:bg-red-700 transition-colors">
                    Bersihkan Cache
                </a>
            </div>

        </div>
    </div>

</body>
</html>
