<section
    class="w-full flex flex-col items-center justify-center p-8 lg:p-12 bg-white/95 text-gray-800 lg:w-1/2 shadow-lg relative overflow-hidden"
>
    <div class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-b from-[rgb(26,65,103)]/10 to-[rgb(26,65,103)]/20 rounded-full -mr-32 -mt-32 blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-gradient-to-t from-[rgb(26,65,103)]/10 to-[rgb(26,65,103)]/20 rounded-full -ml-32 -mb-32 blur-3xl"></div>
    
    <div class="w-full max-w-md z-10">
        <div class="text-center mb-10">
            <h3 class="font-bold text-2xl text-[rgb(26,65,103)] lg:text-3xl mb-2 tracking-tight">
                Selamat Datang Kembali
            </h3>
            <p class="text-gray-600">
                Silakan masuk untuk melanjutkan
            </p>
        </div>
        
        <form action="{{ route('login') }}" method="POST" class="w-full">
            @csrf
            @if ($errors->any())
                <div class="mb-6 p-4 rounded-lg bg-red-50 border-l-4 border-red-500 text-sm text-red-600 animate-fadeIn">
                    <div class="flex items-center mb-2">
                        <i class="fa-solid fa-circle-exclamation mr-2"></i>
                        <span class="font-semibold">Terdapat kesalahan:</span>
                    </div>
                    <ul class="list-disc list-inside pl-2 space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <div class="space-y-6">
                <div class="relative">
                    <label for="nama_lengkap" class="text-sm font-medium text-gray-700 mb-1 block">Nama Lengkap</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                            <i class="fa-solid fa-id-card"></i>
                        </span>
                        <input 
                            id="nama_lengkap"
                            name="nama_lengkap" 
                            type="text" 
                            class="w-full py-3 pl-10 pr-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[rgb(26,65,103)] focus:border-[rgb(26,65,103)] transition-all duration-200" 
                            placeholder="Masukkan Nama Lengkap Anda"
                            value="{{ old('nama_lengkap') }}" 
                            required 
                            autocomplete="name"
                            autofocus
                        >
                    </div>
                </div>
                
                <div class="relative">
                    <label for="kata_sandi" class="text-sm font-medium text-gray-700 mb-1 block">Kata Sandi</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input 
                            id="kata_sandi"
                            name="kata_sandi" 
                            type="password" 
                            class="w-full py-3 pl-10 pr-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[rgb(26,65,103)] focus:border-[rgb(26,65,103)] transition-all duration-200" 
                            placeholder="Masukkan Kata Sandi Anda"
                            required
                        >
                    </div>
                </div>
                
                <div class="flex items-center justify-between text-sm">
                    <div class="flex items-center">
                        <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-[rgb(26,65,103)] border-gray-300 rounded focus:ring-[rgb(26,65,103)]">
                        <label for="remember" class="ml-2 block text-gray-600">Ingat saya</label>
                    </div>
                    <a href="#" class="text-[rgb(26,65,103)] hover:text-[rgb(36,85,133)] font-medium">Lupa kata sandi?</a>
                </div>
            </div>
            
            <button type="submit" class="mt-8 w-full py-3 px-4 rounded-lg font-semibold bg-gradient-to-r from-[rgb(26,65,103)] to-[rgb(36,85,133)] text-white shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[rgb(26,65,103)] transform transition-all duration-300 hover:-translate-y-1">
                <i class="fa-solid fa-right-to-bracket"></i>
                &nbsp;Masuk
            </button>
            
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">Belum memiliki akun? <a href="#" class="font-medium text-[rgb(26,65,103)] hover:text-[rgb(36,85,133)]">Daftar sekarang</a></p>
            </div>
        </form>
    </div>
    
    <div class="mt-10 text-center text-xs text-gray-500">
        <p>&copy; {{ date('Y') }} Politern</p>
        <p class="mt-1">Jurusan Teknologi Informasi Politeknik Negeri Malang</p>
    </div>
</section>