<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('beranda') }}" class="flex items-center space-x-2">
                    <img src="{{ asset('img/shared/polinema.png') }}" alt="Politern" class="h-8 w-auto">
                    <span class="text-[#1a4167] font-bold text-lg">Politern</span>
                </a>
            </div>

            <div class="hidden sm:flex sm:items-center sm:space-x-8">
                <a href="{{ route('beranda') }}" class="{{ request()->routeIs('beranda', 'mahasiswa', 'admin') ? 'text-[#1a4167] border-b-2 border-[#1a4167]' : 'text-gray-600 hover:text-[#1a4167] hover:border-b-2 hover:border-[#1a4167]' }} px-1 pt-1 transition-all duration-150 font-medium">
                    Dashboard
                </a>
                @if(auth()->user()->tipe === 'mahasiswa')
                <a href="#" class="text-gray-600 hover:text-[#1a4167] hover:border-b-2 hover:border-[#1a4167] px-1 pt-1 transition-all duration-150 font-medium">
                    Materi
                </a>
                <a href="#" class="text-gray-600 hover:text-[#1a4167] hover:border-b-2 hover:border-[#1a4167] px-1 pt-1 transition-all duration-150 font-medium">
                    Tugas
                </a>
                @endif
                @if(auth()->user()->tipe === 'admin')
                <a href="#" class="text-gray-600 hover:text-[#1a4167] hover:border-b-2 hover:border-[#1a4167] px-1 pt-1 transition-all duration-150 font-medium">
                    Pengguna
                </a>
                <a href="#" class="text-gray-600 hover:text-[#1a4167] hover:border-b-2 hover:border-[#1a4167] px-1 pt-1 transition-all duration-150 font-medium">
                    Pengaturan
                </a>
                @endif
            </div>

            <div class="hidden sm:ml-6 sm:flex sm:items-center">
                <div class="relative" x-data="{ open: false }" @click.away="open = false">
                    <button @click="open = !open" class="flex items-center space-x-2 text-sm font-medium text-gray-700 hover:text-[#1a4167] transition-all duration-150">
                        <div class="bg-[#1a4167] rounded-full h-8 w-8 flex items-center justify-center text-white">
                            <span>{{ substr(auth()->user()->nama_lengkap, 0, 1) }}</span>
                        </div>
                        <span>{{ auth()->user()->nama_lengkap }}</span>
                        <i class="fa-solid fa-chevron-down text-xs"></i>
                    </button>
                    
                    <div x-show="open" 
                         x-transition:enter="transition ease-out duration-100"
                         x-transition:enter-start="transform opacity-0 scale-95"
                         x-transition:enter-end="transform opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-75"
                         x-transition:leave-start="transform opacity-100 scale-100"
                         x-transition:leave-end="transform opacity-0 scale-95"
                         class="absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100">
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fa-solid fa-user mr-2"></i> Profil
                            </a>
                            @if(auth()->user()->tipe === 'admin')
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fa-solid fa-gear mr-2"></i> Pengaturan
                            </a>
                            @endif
                        </div>
                        <div class="py-1">
                            <a href="{{ route('keluar') }}" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                                <i class="fa-solid fa-right-from-bracket mr-2"></i> Keluar
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex sm:hidden">
                <button type="button" class="hamburger-menu inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:text-[#1a4167] hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-[#1a4167]" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <i class="fa-solid fa-bars text-lg"></i>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="sm:hidden hidden">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{ route('beranda') }}" class="{{ request()->routeIs('beranda', 'mahasiswa', 'admin') ? 'bg-[#1a4167]/10 text-[#1a4167]' : 'text-gray-600 hover:bg-[#1a4167]/5 hover:text-[#1a4167]' }} block px-3 py-2 rounded-md text-base font-medium">
                Dashboard
            </a>
            @if(auth()->user()->tipe === 'mahasiswa')
            <a href="#" class="text-gray-600 hover:bg-[#1a4167]/5 hover:text-[#1a4167] block px-3 py-2 rounded-md text-base font-medium">
                Materi
            </a>
            <a href="#" class="text-gray-600 hover:bg-[#1a4167]/5 hover:text-[#1a4167] block px-3 py-2 rounded-md text-base font-medium">
                Tugas
            </a>
            @endif
            @if(auth()->user()->tipe === 'admin')
            <a href="#" class="text-gray-600 hover:bg-[#1a4167]/5 hover:text-[#1a4167] block px-3 py-2 rounded-md text-base font-medium">
                Pengguna
            </a>
            <a href="#" class="text-gray-600 hover:bg-[#1a4167]/5 hover:text-[#1a4167] block px-3 py-2 rounded-md text-base font-medium">
                Pengaturan
            </a>
            @endif
        </div>
        <div class="pt-4 pb-3 border-t border-gray-200">
            <div class="flex items-center px-4">
                <div class="bg-[#1a4167] rounded-full h-10 w-10 flex items-center justify-center text-white">
                    <span>{{ substr(auth()->user()->nama_lengkap, 0, 1) }}</span>
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium text-gray-800">{{ auth()->user()->nama_lengkap }}</div>
                    <div class="text-sm font-medium text-gray-500">{{ auth()->user()->email }}</div>
                </div>
            </div>
            <div class="mt-3 px-2 space-y-1">
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-[#1a4167]/5 hover:text-[#1a4167]">
                    <i class="fa-solid fa-user mr-2"></i> Profil
                </a>
                @if(auth()->user()->tipe === 'admin')
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-[#1a4167]/5 hover:text-[#1a4167]">
                    <i class="fa-solid fa-gear mr-2"></i> Pengaturan
                </a>
                @endif
                <a href="{{ route('keluar') }}" class="block px-3 py-2 rounded-md text-base font-medium text-red-600 hover:bg-[#1a4167]/5">
                    <i class="fa-solid fa-right-from-bracket mr-2"></i> Keluar
                </a>
            </div>
        </div>
    </div>
</header>

@push('skrip')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof Alpine === 'undefined') {
            const script = document.createElement('script');
            script.src = 'https://unpkg.com/alpinejs@3.13.5/dist/cdn.min.js';
            script.defer = true;
            document.head.appendChild(script);
        }
        
        const mobileMenuButton = document.querySelector('.hamburger-menu');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        }
    });
</script>
@endpush