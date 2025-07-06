List vendor
Css
https://tailwindcss.com/
run bash
npx tailwindcss/cli ./css/input.css -o ./css/output.css --watch

Icon
https://lucide.dev/

Animate
https://animate.style/

notifikasi
https://github.com/sciactive/pnotify

date
https://flatpickr.js.org

lazyload
https://www.jsdelivr.com/package/npm/vanilla-lazyload

caching
OPcache:

Peran: Tetap fundamental dan wajib. Meng-cache kode PHP yang sudah dikompilasi (bytecode) di memori lokal setiap server.

Keunggulan: Ini adalah optimasi performa paling dasar untuk eksekusi kode PHP itu sendiri.

Status: OPcache bersifat lokal untuk setiap server. Jadi, setiap server web Anda akan memiliki OPcache-nya sendiri, yang sangat efisien untuk menghindari kompilasi ulang kode.

Redis / Memcached:

Peran: Ini adalah sistem caching terdistribusi atau terpusat. Artinya, cache disimpan di lokasi sentral (server Redis/Memcached) yang dapat diakses oleh semua server web Anda.

Mengapa Lebih Bagus untuk Multi-Server:

Konsistensi Cache: Ini adalah alasan utama. Jika Server A meng-cache data pengguna, dan Server B (di klaster yang sama) juga melayani permintaan yang sama, mereka berdua bisa mendapatkan data yang sama dari cache terpusat. Jika Anda hanya pakai APCu di multi-server, setiap server akan punya cache datanya sendiri yang bisa tidak konsisten jika data berubah di salah satu server.

Berbagi Cache: Hasil query database yang mahal atau data sesi pengguna dapat di-cache sekali dan dibagikan di antara semua server. Ini mengurangi beban pada database dan memastikan pengalaman pengguna yang mulus (misalnya, sesi tidak hilang jika permintaan dialihkan ke server yang berbeda).

Skalabilitas: Server Redis/Memcached dapat di-scale secara independen.

Kapan Digunakan: Untuk caching data aplikasi (misalnya, hasil query database, konfigurasi yang sering diakses, data sesi pengguna), atau queueing tugas background.