<section class="flex flex-col md:flex-row">
    <nav id="profile-tabs" class="flex flex-row md:flex-col md:w-1/4 border-b md:border-b-0 md:border-r border-gray-200 p-2" data-tab-group="profile-group">
        <button class="tab-button active group flex items-center w-full text-left px-3 py-2 rounded-md text-sm font-medium text-blue-700 bg-blue-50" data-tab-target="#posts-panel">
            <i data-lucide="message-square" class="mr-3 h-5 w-5"></i><span>Postingan</span>
        </button>
        <button class="tab-button group flex items-center w-full text-left px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-900" data-tab-target="#gallery-panel">
            <i data-lucide="image" class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"></i><span>Galeri</span>
        </button>
        <button class="tab-button group flex items-center w-full text-left px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-900" data-tab-target="#products-panel">
            <i data-lucide="package" class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"></i><span>Produk</span>
        </button>
    </nav>

    <div class="md:w-3/4 p-4 md:p-6 lg:p-8">
        <div id="posts-panel" class="tab-panel active">
            <div class="bg-gray-50 p-4 rounded-lg shadow-sm mb-8">
                <h3 class="text-lg font-semibold text-gray-800 mb-3">Buat Postingan Baru</h3>
                <textarea id="tinymce-editor" placeholder="Ketik sesuatu untuk mencobanya?"></textarea>
                <div class="flex justify-end mt-3">
                    <button id="create-post-btn" class="bg-blue-600 text-white font-semibold px-5 py-2 rounded-lg hover:bg-blue-700 transition-colors flex items-center">
                        <i data-lucide="send" class="w-4 h-4 mr-2"></i> Kirim
                    </button>
                </div>
            </div>
            <div id="post-timeline-container" class="space-y-8">
                </div>
        </div>

        <div id="gallery-panel" class="tab-panel hidden">
                <div id="gallery-filters" class="mb-8 flex flex-wrap justify-center gap-2">
                <button data-filter="*" class="filter-btn is-checked">Semua</button>
                <button data-filter=".ui-ux" class="filter-btn">UI/UX</button>
                <button data-filter=".web-dev" class="filter-btn">Web Dev</button>
                <button data-filter=".apps" class="filter-btn">Apl</button>
            </div>
            <div id="gallery-grid" class="masonry-grid" data-filters="#gallery-filters">
                </div>
        </div>

        <div id="products-panel" class="tab-panel hidden">
                <div id="product-filters" class="mb-8 flex flex-wrap justify-center gap-2">
                <button data-filter="*" class="filter-btn is-checked">Semua</button>
                <button data-filter=".digital" class="filter-btn">Digital</button>
                <button data-filter=".fisik" class="filter-btn">Fisik</button>
            </div>
            <div id="product-grid" class="masonry-grid" data-filters="#product-filters">
                </div>
        </div>
    </div>
</section>

<div id="splide-modal" class="splide-modal fixed inset-0 z-[9999] flex items-center justify-center transition-opacity duration-300 opacity-0 invisible pointer-events-none p-4">
    <div class="splide-modal-container relative w-full max-w-5xl max-h-[90vh] overflow-hidden flex flex-col">
        <div id="splide-main" class="splide flex-1 min-h-0"><div class="splide__track h-full"><ul class="splide__list h-full"></ul></div></div>
        <button id="splide-modal-close" class="absolute top-2 right-2 text-white hover:text-blue-200 z-50 p-1 bg-blue-600 bg-opacity-50 rounded-full hover:bg-opacity-75 transition-all duration-200"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
    </div>
</div>