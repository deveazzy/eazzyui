<div id="edit-profile-modal" class="fixed inset-0 z-[999] flex items-center justify-center transition-all duration-300 opacity-0 invisible pointer-events-none p-4">
    <div class="modal-overlay absolute inset-0"></div>

    <div class="modal-content relative bg-white rounded-xl shadow-2xl w-full max-w-2xl max-h-[90vh] flex flex-col transform scale-95 transition-transform duration-300">
        <div class="flex items-center justify-between p-5 border-b border-gray-200">
            <div class="flex items-center gap-3">
                <i data-lucide="user-cog" class="w-6 h-6 text-blue-600"></i>
                <h3 class="text-xl font-bold text-gray-800">Edit Profil</h3>
            </div>
            <button class="modal-close-btn text-gray-400 hover:text-red-500 rounded-full p-1 hover:bg-gray-100">
                <i data-lucide="x" class="w-6 h-6"></i>
            </button>
        </div>

        <div class="p-6 flex-grow overflow-y-auto">
            <form class="space-y-6">
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Sampul & Foto Profil</label>
                    <div class="relative h-40 bg-gray-200 rounded-lg flex items-center justify-center">
                        <img id="banner-preview" src="/assets/images/header.png" class="w-full h-full object-cover rounded-lg">
                        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex items-center justify-center w-28 h-28 rounded-full bg-white shadow-lg overflow-hidden border-4 border-white">
                            <img id="avatar-preview" src="/assets/images/profile.png" class="w-full h-full object-cover">
                        </div>
                    </div>
                     <div class="flex justify-center gap-4 pt-10">
                         <input type="file" id="avatar-upload" class="hidden">
                         <label for="avatar-upload" class="cursor-pointer text-xs font-semibold text-blue-600 hover:underline">Ubah Foto</label>
                         <input type="file" id="banner-upload" class="hidden">
                         <label for="banner-upload" class="cursor-pointer text-xs font-semibold text-blue-600 hover:underline">Ubah Sampul</label>
                     </div>
                </div>

                <div>
                    <label for="full-name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input type="text" id="full-name" value="EazZy Project" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                </div>

                <div>
                    <label for="bio" class="block text-sm font-medium text-gray-700">Bio</label>
                    <textarea id="bio" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" placeholder="Ceritakan tentang diri Anda...">Smart App Free for Everyone</textarea>
                </div>

                 <div>
                    <label for="location" class="block text-sm font-medium text-gray-700">Lokasi</label>
                    <input type="text" id="location" value="Bandung, Indonesia" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                </div>
            </form>
        </div>

        <div class="flex justify-end items-center p-5 border-t border-gray-200 bg-gray-50 rounded-b-xl">
            <button class="modal-close-btn bg-gray-200 text-gray-700 font-semibold px-5 py-2 rounded-lg hover:bg-gray-300 transition-colors mr-3">
                Batal
            </button>
            <button class="bg-blue-600 text-white font-semibold px-5 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                Simpan Perubahan
            </button>
        </div>
    </div>
</div>