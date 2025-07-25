<aside id="sidebar" class="w-64 bg-white shadow-sm fixed top-0 left-0 h-full z-30 group flex flex-col">
    {{-- Header Sidebar --}}
    <div class="flex items-center justify-center p-4 h-16 shadow flex-shrink-0">
        <div class="flex items-center gap-3 justify-center">
            <img src="{{ asset('images/logo-unmul.png') }}" alt="Logo" class="h-10 flex-shrink-0">
            <span class="font-bold text-lg sidebar-text">Pegawai Unmul</span>
        </div>
    </div>

    {{-- Navigasi Menu --}}
    <nav class="flex-1 overflow-y-auto"> {{-- Menggunakan flex-1 untuk mengisi sisa space --}}
        <div class="space-y-1 py-2">
            <div class="px-4 relative">
                <a href="#" class="flex items-center px-3 py-2.5 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i data-lucide="user-check" class="w-5 h-5 mr-3 flex-shrink-0"></i>
                    <span class="font-medium sidebar-text">Usul NUPTK</span>
                </a>
            </div>
            <div class="px-4 relative">
                <a href="#" class="flex items-center px-3 py-2.5 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i data-lucide="file-bar-chart-2" class="w-5 h-5 mr-3 flex-shrink-0"></i>
                    <span class="font-medium sidebar-text">Usul Laporan LKD</span>
                </a>
            </div>
            <div class="px-4 relative">
                <a href="#" class="flex items-center px-3 py-2.5 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i data-lucide="clipboard-check" class="w-5 h-5 mr-3 flex-shrink-0"></i>
                    <span class="font-medium sidebar-text">Usul Presensi</span>
                </a>
            </div>
            <div class="px-4 relative">
                <a href="#" class="flex items-center px-3 py-2.5 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i data-lucide="clock" class="w-5 h-5 mr-3 flex-shrink-0"></i>
                    <span class="font-medium sidebar-text">Usul Penyesuaian Masa Kerja</span>
                </a>
            </div>
            <div class="px-4 relative">
                <a href="#" class="flex items-center px-3 py-2.5 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i data-lucide="book-marked" class="w-5 h-5 mr-3 flex-shrink-0"></i>
                    <span class="font-medium sidebar-text">Usul Ujian Dinas & Ijazah</span>
                </a>
            </div>
            <div class="px-4 relative">
                <a href="#" class="flex items-center px-3 py-2.5 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i data-lucide="file-user" class="w-5 h-5 mr-3 flex-shrink-0"></i>
                    <span class="font-medium sidebar-text">Usul Jabatan</span>
                </a>
            </div>
            <div class="px-4 relative">
                <a href="#" class="flex items-center px-3 py-2.5 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i data-lucide="file-check-2" class="w-5 h-5 mr-3 flex-shrink-0"></i>
                    <span class="font-medium sidebar-text">Usul Laporan Serdos</span>
                </a>
            </div>
            <div class="px-4 relative">
                <a href="#" class="flex items-center px-3 py-2.5 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i data-lucide="user-minus" class="w-5 h-5 mr-3 flex-shrink-0"></i>
                    <span class="font-medium sidebar-text">Usul Pensiun</span>
                </a>
            </div>
            <div class="px-4 relative">
                <a href="#" class="flex items-center px-3 py-2.5 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i data-lucide="trending-up" class="w-5 h-5 mr-3 flex-shrink-0"></i>
                    <span class="font-medium sidebar-text">Usul Kepangkatan</span>
                </a>
            </div>
            <div class="px-4 relative">
                <a href="#" class="flex items-center px-3 py-2.5 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i data-lucide="graduation-cap" class="w-5 h-5 mr-3 flex-shrink-0"></i>
                    <span class="font-medium sidebar-text">Usul Pencantuman Gelar</span>
                </a>
            </div>
            <div class="px-4 relative">
                <a href="#" class="flex items-center px-3 py-2.5 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i data-lucide="link" class="w-5 h-5 mr-3 flex-shrink-0"></i>
                    <span class="font-medium sidebar-text">Usul ID SINTA ke SISTER</span>
                </a>
            </div>
            <div class="px-4 relative">
                <a href="#" class="flex items-center px-3 py-2.5 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i data-lucide="medal" class="w-5 h-5 mr-3 flex-shrink-0"></i>
                    <span class="font-medium sidebar-text">Usul Satyalancana</span>
                </a>
            </div>
            <div class="px-4 relative">
                <a href="#" class="flex items-center px-3 py-2.5 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i data-lucide="book-open" class="w-5 h-5 mr-3 flex-shrink-0"></i>
                    <span class="font-medium sidebar-text">Usul Tugas Belajar</span>
                </a>
            </div>
            <div class="px-4 relative">
                <a href="#" class="flex items-center px-3 py-2.5 rounded-lg text-gray-700 hover:bg-gray-100">
                    <i data-lucide="user-plus" class="w-5 h-5 mr-3 flex-shrink-0"></i>
                    <span class="font-medium sidebar-text">Usul Pengaktifan Kembali</span>
                </a>
            </div>
        </div>
    </nav>
</aside>
