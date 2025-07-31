<section id="profile-header" class="relative"> 
    <div class="banner h-40 md:h-52 bg-gradient-to-r from-blue-600 to-purple-700 rounded-t-lg"></div>
    <div class="profile-info-container flex flex-col items-center">
        <div class="avatar-wrapper">
            <img src="/assets/images/profile.png" alt="User Avatar" class="avatar-image">
        </div>
        <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mt-2">EazZy Project</h2>
        <p class="text-gray-500 text-sm">@eazzy</p>
        <div class="flex space-x-6 mt-2"> <button class="flex flex-col items-center text-gray-700 hover:text-blue-600" id="followers-btn">
                <span class="font-bold text-lg">1.2K</span>
                <span class="text-sm">Pengikut</span>
            </button>
            <button class="flex flex-col items-center text-gray-700 hover:text-blue-600" id="following-btn">
                <span class="font-bold text-lg">345</span>
                <span class="text-sm">Mengikuti</span>
            </button>
        </div>
    </div>
    <!-- <button id="edit-profile-btn" class="bg-blue-600 text-white font-semibold px-5 py-2 rounded-lg hover:bg-blue-700 transition-colors absolute items-center">
        <i data-lucide="edit" class="w-4 h-4 mr-2"></i>
        Edit Profile
    </button> -->
    <button id="edit-profile-btn" class="absolute top-4 right-4 bg-white/80 backdrop-blur-sm text-blue-600 p-2 rounded-full shadow-md hover:bg-white transition">
        <i data-lucide="edit" class="w-5 h-5"></i>
    </button>
</section>