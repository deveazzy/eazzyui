# Dockerfile untuk layanan "mirror" (PHP-FPM)

# Gunakan base image resmi PHP 8.2-FPM yang ringan
FROM php:8.2-fpm-alpine

# Tetapkan direktori kerja di dalam kontainer
WORKDIR /var/www/mirror

RUN apk add --no-cache git zip unzip

# Install Composer secara global di dalam image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Salin file composer terlebih dahulu untuk optimasi cache Docker
COPY composer.json composer.lock ./

# Jalankan composer install untuk mengunduh semua dependensi
# Ini akan membuat folder /vendor di dalam image
RUN composer install --no-dev --optimize-autoloader
# 2. Install fcgi untuk healthcheck
RUN apk add --no-cache fcgi

# Salin semua file dari /mnt/c/www/mirror ke direktori kerja kontainer
COPY . .

# (Opsional) Jika aplikasi Anda butuh ekstensi PHP, aktifkan baris di bawah ini
# Contoh:
# RUN docker-php-ext-install pdo pdo_mysql

# 4. UBAH PATH 'chown' agar cocok dengan WORKDIR baru
RUN chown -R www-data:www-data /var/www/mirror

# Port standar untuk PHP-FPM
EXPOSE 9000

# Perintah untuk menjalankan PHP-FPM saat kontainer dimulai
CMD ["php-fpm"]
