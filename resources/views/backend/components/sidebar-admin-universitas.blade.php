<aside id="sidebar" class="w-64 bg-white shadow-sm fixed top-0 left-0 h-full z-30 group">
   {{-- Header Sidebar --}}
    <div class="flex items-center justify-center p-4 h-16 shadow">
        <div class="flex items-center gap-3 justify-center">
            <img src="{{ asset('images/logo-unmul.png') }}" alt="Logo" class="h-10 flex-shrink-0">
            <span class="font-bold text-lg sidebar-text text-center">Admin Informasi Kepegawaian</span>
        </div>
    </div>

    <nav class="py-4">
        <div class="space-y-1">

            {{-- PROFIL --}}
            <div class="px-4 relative">
                <div onclick="toggleSubmenu('profil')" class="flex items-center justify-between px-3 py-2.5 rounded-lg text-gray-700 hover:bg-gray-100 cursor-pointer">
                    <div class="flex items-center">
                        <i data-lucide="user-circle" class="w-5 h-5 mr-3 flex-shrink-0"></i>
                        <span class="font-medium sidebar-text">Profil</span>
                    </div>
                    <i id="profil-icon" data-lucide="chevron-down" class="w-4 h-4 sidebar-chevron transition-transform"></i>
                </div>
                <div id="profil-submenu" class="hidden mt-1 pl-8 space-y-1 sidebar-submenu">
                    <a href="{{ route('profil.visi-misi') }}" class="block text-sm py-2 px-3 rounded-lg hover:bg-gray-100 sidebar-text">Visi dan Misi</a>
                    <a href="{{ route('profil.struktur-organisasi') }}" class="block text-sm py-2 px-3 rounded-lg hover:bg-gray-100 sidebar-text">Struktur Organisasi</a>
                </div>
            </div>

            {{-- LAYANAN --}}
            <div class="px-4 relative">
                <a href="#" class="flex items-center px-3 py-2.5 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i data-lucide="layout-grid" class="w-5 h-5 mr-3 flex-shrink-0"></i>
                    <span class="font-medium sidebar-text">Daftar Aplikasi</span>
                </a>
            </div>

            {{-- JABATAN --}}
            <div class="px-4 relative">
                <a href="#" class="flex items-center px-3 py-2.5 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i data-lucide="file-user" class="w-5 h-5 mr-3 flex-shrink-0"></i>
                    <span class="font-medium sidebar-text">Jabatan</span>
                </a>
            </div>

            {{-- STATISTIK --}}
            <div class="px-4 relative">
                <a href="#" class="flex items-center px-3 py-2.5 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i data-lucide="bar-chart-2" class="w-5 h-5 mr-3 flex-shrink-0"></i>
                    <span class="font-medium sidebar-text">Statistik</span>
                </a>
            </div>

            {{-- BLANGKO SURAT --}}
            <div class="px-4 relative">
                <a href="{{ route('blangko.surat') }}" class="flex items-center px-3 py-2.5 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i data-lucide="file-text" class="w-5 h-5 mr-3 flex-shrink-0"></i>
                    <span class="font-medium sidebar-text">Blangko Surat</span>
                </a>
            </div>

            {{-- DASAR HUKUM --}}
            <div class="px-4 relative">
                <div onclick="toggleSubmenu('hukum')" class="flex items-center justify-between px-3 py-2.5 rounded-lg text-gray-700 hover:bg-gray-100 cursor-pointer">
                    <div class="flex items-center">
                        <i data-lucide="gavel" class="w-5 h-5 mr-3 flex-shrink-0"></i>
                        <span class="font-medium sidebar-text">Dasar Hukum</span>
                    </div>
                    <i id="hukum-icon" data-lucide="chevron-down" class="w-4 h-4 sidebar-chevron transition-transform"></i>
                </div>
                <div id="hukum-submenu" class="hidden mt-1 pl-8 space-y-1 sidebar-submenu">
                    <a href="#" class="block text-sm py-2 px-3 rounded-lg hover:bg-gray-100 sidebar-text">Keputusan</a>
                    <a href="#" class="block text-sm py-2 px-3 rounded-lg hover:bg-gray-100 sidebar-text">Pedoman</a>
                    <a href="#" class="block text-sm py-2 px-3 rounded-lg hover:bg-gray-100 sidebar-text">Peraturan</a>
                    {{-- Tambahkan link lainnya sesuai kebutuhan --}}
                </div>
            </div>

            {{-- INFORMASI --}}
            <div class="px-4 relative">
                <div onclick="toggleSubmenu('informasi')" class="flex items-center justify-between px-3 py-2.5 rounded-lg text-gray-700 hover:bg-gray-100 cursor-pointer">
                    <div class="flex items-center">
                        <i data-lucide="info" class="w-5 h-5 mr-3 flex-shrink-0"></i>
                        <span class="font-medium sidebar-text">Informasi</span>
                    </div>
                    <i id="informasi-icon" data-lucide="chevron-down" class="w-4 h-4 sidebar-chevron transition-transform"></i>
                </div>
                <div id="informasi-submenu" class="hidden mt-1 pl-8 space-y-1 sidebar-submenu">
                    <a href="#" class="block text-sm py-2 px-3 rounded-lg hover:bg-gray-100 sidebar-text">Berita</a>
                    <a href="#" class="block text-sm py-2 px-3 rounded-lg hover:bg-gray-100 sidebar-text">Pengumuman</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="mt-auto border-t border-gray-200 py-4 px-2 group-[.w-20]:py-2 group-[.w-20]:px-0 transition-all duration-300">
        <div class="flex items-center justify-center">
            <img id="profile-image"
                 src="{{ asset('images/logo-unmul.png') }}"
                 alt="Admin"
                 class="rounded-full object-cover transition-all duration-300
                        h-20 w-20
                        group-[.w-20]:h-12 group-[.w-20]:w-12"
            />
        </div>
    </div>

</aside>
