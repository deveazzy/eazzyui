<?php
/*
 * @[EazZy Project] Copyright (c) [2025] [EazZy Project] license
 * @https://opensource.org/licenses/MIT MIT License
 * @path public/css/modal-form.css
 * @author EazZy Project
 */
?>

<main class="flex-1 container mx-auto p-4 md:p-8 lg:p-10">
    <div class="bg-white p-6 md:p-8 lg:p-10 rounded-lg shadow-xl max-w-7xl mx-auto">

        <div class="flex flex-col md:flex-row items-center md:space-x-4 mb-8 md:mb-12 text-center md:text-left relative">
            <div class="bg-blue-100 text-blue-600 p-4 rounded-full mb-4 md:mb-0">
                <i data-lucide="layout-template" class="w-10 h-10 md:w-12 md:h-12"></i>
            </div>
            <div>
                <h1 class="text-3xl md:text-4xl font-extrabold text-gray-800 leading-tight">
                    Modal & Form Styles
                </h1>
                <p class="text-lg md:text-xl text-gray-500 mt-1">Berbagai jenis popup modal dengan contoh formulir.</p>
            </div>
        </div>

        <section class="mb-10 md:mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-700 border-b-2 border-blue-200 pb-3 mb-6">Contoh Modal</h2>
            <p class="text-gray-600 leading-relaxed text-base md:text-lg mb-6">
                Berikut adalah beberapa contoh implementasi modal dengan berbagai tujuan:
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="p-5 border border-gray-200 rounded-lg shadow-sm bg-gray-50 flex flex-col items-center justify-center text-center">
                    <i data-lucide="info" class="w-12 h-12 text-blue-500 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Modal Informasi</h3>
                    <p class="text-gray-600 mb-4">Modal pop-up dasar untuk menampilkan pesan atau pengumuman penting.</p>
                    <button id="openInfoModal" class="btn btn-blue px-6 py-3 rounded-lg shadow-md hover:shadow-lg transition-all duration-200 ease-in-out">Buka Modal Info</button>
                </div>

                <div class="p-5 border border-gray-200 rounded-lg shadow-sm bg-gray-50 flex flex-col items-center justify-center text-center">
                    <i data-lucide="check-circle-2" class="w-12 h-12 text-green-500 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Modal Konfirmasi</h3>
                    <p class="text-gray-600 mb-4">Digunakan untuk meminta konfirmasi pengguna sebelum melanjutkan aksi.</p>
                    <button id="openConfirmModal" class="btn btn-green px-6 py-3 rounded-lg shadow-md hover:shadow-lg transition-all duration-200 ease-in-out">Buka Modal Konfirmasi</button>
                </div>

                <div class="p-5 border border-gray-200 rounded-lg shadow-sm bg-gray-50 flex flex-col items-center justify-center text-center">
                    <i data-lucide="form-input" class="w-12 h-12 text-orange-500 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Modal Formulir</h3>
                    <p class="text-gray-600 mb-4">Contoh modal yang berisi formulir pendaftaran atau input data.</p>
                    <button id="openFormModal" class="btn btn-orange px-6 py-3 rounded-lg shadow-md hover:shadow-lg transition-all duration-200 ease-in-out">Buka Modal Formulir</button>
                </div>
            </div>
        </section>

        <div id="infoModal" class="modal-container hidden">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-xl font-semibold text-gray-800">Informasi Penting!</h3>
                    <button class="close-modal text-gray-500 hover:text-gray-800">
                        <i data-lucide="x" class="w-6 h-6"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-gray-700">Ini adalah modal informasi sederhana. Anda bisa menempatkan pesan atau pengumuman penting di sini.</p>
                    <p class="mt-2 text-gray-600">Pastikan informasi yang disampaikan jelas dan ringkas.</p>
                </div>
                <div class="modal-footer">
                    <button class="close-modal btn btn-blue px-5 py-2 rounded-full shadow-md hover:shadow-lg transition-all duration-200 ease-in-out">Tutup</button>
                </div>
            </div>
        </div>

        <div id="confirmModal" class="modal-container hidden">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-xl font-semibold text-gray-800">Konfirmasi Tindakan</h3>
                    <button class="close-modal text-gray-500 hover:text-gray-800">
                        <i data-lucide="x" class="w-6 h-6"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-gray-700">Apakah Anda yakin ingin melanjutkan tindakan ini? Data mungkin tidak dapat dikembalikan.</p>
                </div>
                <div class="modal-footer flex justify-end space-x-3">
                    <button class="btn btn-gray close-modal px-5 py-2 rounded-full shadow-md hover:shadow-lg transition-all duration-200 ease-in-out">Batal</button>
                    <button id="confirmActionButton" class="btn btn-red px-5 py-2 rounded-full shadow-md hover:shadow-lg transition-all duration-200 ease-in-out">Konfirmasi</button>
                </div>
            </div>
        </div>

        <div id="formModal" class="modal-container hidden">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="text-xl font-semibold text-gray-800">Formulir Pendaftaran</h3>
                    <button class="close-modal text-gray-500 hover:text-gray-800">
                        <i data-lucide="x" class="w-6 h-6"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="registrationForm" class="space-y-4">
                        <div>
                            <label for="fullName" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                            <input type="text" id="fullName" name="fullName" class="form-input" placeholder="Masukkan nama lengkap Anda" required>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" id="email" name="email" class="form-input" placeholder="contoh@domain.com" required>
                        </div>
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Kata Sandi</label>
                            <input type="password" id="password" name="password" class="form-input" placeholder="Min. 8 karakter" required>
                        </div>
                        <div>
                            <label for="confirmPassword" class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi Kata Sandi</label>
                            <input type="password" id="confirmPassword" name="confirmPassword" class="form-input" placeholder="Ulangi kata sandi" required>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="agreeTerms" name="agreeTerms" class="form-checkbox" required>
                            <label for="agreeTerms" class="ml-2 text-sm text-gray-600">Saya menyetujui <a href="#" class="text-blue-600 hover:underline">Syarat & Ketentuan</a></label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer flex justify-end">
                    <button type="submit" form="registrationForm" class="btn btn-blue px-5 py-2 rounded-full shadow-md hover:shadow-lg transition-all duration-200 ease-in-out">Daftar</button>
                </div>
            </div>
        </div>

    </div>
</main>
