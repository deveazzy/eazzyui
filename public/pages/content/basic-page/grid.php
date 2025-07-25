<?php
/*
*@author  [EazZy Project]
* @copyright Copyright (c) [2025] [EazZy Project]
* @license   https://opensource.org/licenses/MIT MIT License
*/
?>
<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-7xl mx-auto">
        
        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
                <i data-lucide="layout-panel-top" class="w-10 h-10 md:w-12 md:h-12"></i>
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">Grid</h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">
                    Membangun tata letak responsif dengan Grid.
                </p>
            </div>
        </div>
        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Apa Itu Grid?</h2>
            <p class="text-gray-600 leading-relaxed mb-4">
                CSS Grid Layout adalah sistem tata letak dua dimensi yang sangat kuat untuk web. Dengan Grid, Anda dapat mendefinisikan baris dan kolom secara eksplisit, lalu menempatkan item-item ke dalam sel atau area grid yang Anda inginkan. Ini berbeda dengan Flexbox yang lebih berfokus pada satu dimensi (baris atau kolom saja). Grid sangat ideal untuk tata letak halaman secara keseluruhan atau komponen kompleks yang membutuhkan kontrol posisi dan ukuran yang presisi.
            </p>
            <p class="text-gray-600 leading-relaxed">
                Keunggulan utama Grid meliputi kemampuannya untuk membuat tata letak yang responsif dengan mudah, menumpuk item, dan mengatur celah antar item (gap) secara konsisten.
            </p>
        </section>

        <section>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Demo Grid Sederhana</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-blue-500 text-white p-6 rounded-lg flex items-center justify-center h-24 shadow">Item 1</div>
                <div class="bg-green-500 text-white p-6 rounded-lg flex items-center justify-center h-24 shadow">Item 2</div>
                <div class="bg-red-500 text-white p-6 rounded-lg flex items-center justify-center h-24 shadow">Item 3</div>
                <div class="bg-purple-500 text-white p-6 rounded-lg flex items-center justify-center h-24 shadow col-span-1 md:col-span-2">Item 4 (2 kolom)</div>
                <div class="bg-yellow-500 text-white p-6 rounded-lg flex items-center justify-center h-24 shadow">Item 5</div>
            </div>
            <p class="text-gray-600 text-sm mt-4">
                Contoh di atas menggunakan kelas Tailwind CSS seperti `grid`, `grid-cols-3`, `gap-4`, dan `col-span-2` untuk dengan mudah membuat tata letak grid.
            </p>
        </section>

    </div>
</main>