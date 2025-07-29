<style>
.line-item {
  position: absolute;
  background-color: rgba(255, 255, 255, 0.3); /* Warna garis putih semi-transparan */
  box-shadow: 0 0 5px rgba(255, 255, 255, 0.5); /* Memberi efek sedikit bersinar */
  opacity: 0;
  transition: all 1.5s cubic-bezier(0.25, 1, 0.5, 1); /* Transisi untuk semua properti */
}

.line-item.is-visible {
  opacity: 1;
}
#hero-thumbnails-container {
  position: relative;
  width: 330px; /* Lebar untuk menampung sekitar 3 thumbnail */
  max-width: 90%; /* Responsif di layar kecil */
  margin: -64px auto 0 auto; /* Menarik ke atas dan menengahkan */
  overflow: hidden; /* Menyembunyikan thumbnail di luar viewport */
  padding-top: 15px;
  padding-bottom: 15px;
  margin-left: 0;
  margin-right: 0;
}

/* [BARU] Track yang akan bergeser */
.thumbnail-track {
  display: flex;
  align-items: center;
  /* Transisi untuk efek pergeseran yang mulus */
  transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1);
}

/* [MODIFIKASI] Gaya dasar untuk setiap item thumbnail */
.thumbnail-item {
  width: 80px;
  height: 60px;
  background-color: rgba(255, 255, 255, 0.2);
  border: 2px solid rgba(255, 255, 255, 0.4);
  border-radius: 10px;
  cursor: pointer;
  display: flex;
  justify-content: center;
  align-items: center;
  color: white;
  opacity: 0.6;
  transform: scale(0.8);
  transition: all 0.4s cubic-bezier(0.25, 1, 0.5, 1);
  backdrop-filter: blur(5px);
  -webkit-backdrop-filter: blur(5px);
  flex-shrink: 0; /* Mencegah thumbnail menyusut */
  margin: 0 10px; /* Memberi jarak antar thumbnail */
}

/* Efek hover tidak berubah */
.thumbnail-item:hover {
  opacity: 1;
  transform: scale(0.95) translateY(-5px);
  border-color: white;
}

/* Gaya untuk thumbnail aktif (yang di tengah) tidak berubah */
.thumbnail-item.is-active {
  opacity: 1;
  transform: scale(1.2);
  border: 3px solid white;
  background-color: rgba(255, 255, 255, 0.4);
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
}

/* Ukuran ikon tidak berubah */
.thumbnail-item i {
  width: 32px;
  height: 32px;
}
</style>
<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-full mx-auto">

        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left">
            <div class="bg-teal-100 text-teal-600 p-4 rounded-full mb-4 md:mb-0">
                <i data-lucide="cpu" class="w-10 h-10 md:w-12 md:h-12"></i>
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">
                    Hero Section v3: Tech Circuit
                </h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">
                    Variasi dengan animasi ikon energik dan efek latar sirkuit elektronik.
                </p>
            </div>
        </div>

        <section class="mt-16 pt-10 mb-10 md:mb-12">
            <div class="relative w-full h-[450px] md:h-[550px] lg:h-[650px] overflow-hidden rounded-xl shadow-2xl hero-section-main group">
                <div id="splide-hero-main-v3" class="splide h-full">
                    <div class="splide__track h-full">
                        <ul class="splide__list h-full">
                            <!-- SLIDE 1 -->
                            <li class="splide__slide" style="background-color: #2563EB;">
                                <div class="splide-caption absolute inset-0 flex flex-col justify-center items-start p-8 md:p-12 lg:p-20 text-left">
                                    <div class="circuit-container absolute inset-0 overflow-hidden"></div>
                                    <div class="relative z-10 text-white">
                                        <i data-lucide="lightbulb" class="w-12 h-12 md:w-16 md:h-16 mb-4 hero-icon"></i>
                                        <h2 class="text-4xl md:text-6xl font-extrabold mb-4 drop-shadow-lg hero-heading">EazZy UI: Inovasi Tanpa Batas</h2>
                                        <p class="text-lg md:text-xl max-w-3xl mb-8 drop-shadow-md hero-text">Wujudkan ide-ide terliar Anda.</p>
                                        <a href="#" class="inline-flex items-center gap-2 bg-white text-blue-600 font-bold px-8 py-4 rounded-full text-lg hover:bg-gray-200 transition-colors duration-300 shadow-lg transform hover:scale-105 hero-cta">
                                            Jelajahi Solusi <i data-lucide="arrow-right" class="w-5 h-5"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!-- SLIDE 2 -->
                            <li class="splide__slide" style="background-color: #2563EB;">
                                <div class="splide-caption absolute inset-0 flex flex-col items-center justify-center text-white text-center p-8 md:p-12 lg:p-20">
                                    <div class="circuit-container absolute inset-0 overflow-hidden"></div>
                                    <div class="relative z-10 text-white">
                                        <i data-lucide="layout-grid" class="w-12 h-12 md:w-16 md:h-16 mb-4 hero-icon"></i>
                                        <h2 class="text-4xl md:text-6xl font-extrabold mb-4 drop-shadow-lg hero-heading">Pengalaman Pengguna Prioritas</h2>
                                        <p class="text-lg md:text-xl max-w-3xl mb-8 drop-shadow-md hero-text">Bangun aplikasi yang indah dan mudah digunakan.</p>
                                        <a href="#" class="inline-flex items-center gap-2 bg-white text-blue-600 font-bold px-8 py-4 rounded-full text-lg hover:bg-gray-200 transition-colors duration-300 shadow-lg transform hover:scale-105 hero-cta">
                                            Pelajari Desain <i data-lucide="sparkles" class="w-5 h-5"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!-- SLIDE 3 -->
                            <li class="splide__slide" style="background-color: #2563EB;">
                                <div class="splide-caption absolute inset-0 flex flex-col justify-center items-end text-right p-8 md:p-12 lg:p-20">
                                    <div class="circuit-container absolute inset-0 overflow-hidden"></div>
                                    <div class="relative z-10 text-white">
                                        <i data-lucide="rocket" class="w-12 h-12 md:w-16 md:h-16 mb-4 hero-icon"></i>
                                        <h2 class="text-4xl md:text-6xl font-extrabold mb-4 drop-shadow-lg hero-heading">Akselerasi Proyek Anda</h2>
                                        <p class="text-lg md:text-xl max-w-3xl mb-8 drop-shadow-md hero-text">Hemat waktu dengan aset UI/UX siap pakai.</p>
                                        <a href="#" class="inline-flex items-center gap-2 border-2 border-white text-white font-bold px-8 py-4 rounded-full text-lg hover:bg-white hover:text-blue-600 transition-colors duration-300 shadow-lg transform hover:scale-105 hero-cta">
                                            Mulai Sekarang <i data-lucide="chevron-right" class="w-5 h-5"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="w-full flex justify-center -mt-16">
            <!-- Viewport untuk thumbnail -->
            <div id="hero-thumbnails-container" class="relative z-20">
                <!-- JavaScript akan mengisi track thumbnail di sini -->
            </div>
        </div>
    </div>
</main>

<script src="/assets/vendor/splide/splide.min.js" defer></script>
<script src="/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js" defer></script>