<div class="z-50 w-full fixed">
    <nav
        class="w-full px-5 lg:px-2  py-6 bg-white shadow-lg items-center">
        <div class="flex justify-between lg:justify-around">
            <a href="{{ '/' }}" class="flex items-center">
                <img src="https://i0.wp.com/www.lldikti4.or.id/wp-content/uploads/2021/09/LLDIKTI-LOGOrev1-1.png" width=200>
            </a>
            {{-- left header section  --}}
            <div class="items-center hidden space-x-6 lg:flex">
                {{-- Dropdown --}}
                <div class="group relative">
                    <a href="{{ '/profil' }}" class="hover:text-secondary">Profil</a>
                    {{-- Dropdown List --}}
                    <ul
                        class="hidden bg-white rounded shadow top-6 w-56 absolute group-hover:block  bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-80">
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="{{ '/profil/lldikti-wilayah-iv' }}" class="text-sm">Profil LLDIKTI 4</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="{{ '/profil/kepala-lldikti-wilayah-iv' }}" class="text-sm">Profil Kepala LLDIKTI 4</a>
                        </li>
                    </ul>
                </div>
                <a href="{{ '/info-lldikti-iv' }}" class="hover:text-secondary">Info</a>
                <a href="{{ '/akuntabilitas-lldikti-iv' }}" class="hover:text-secondary">Akuntabilitas</a>
                <a href="{{ '/berita' }}" class="hover:text-secondary">Berita</a>
                {{-- Dropdown --}}
                <div class="group relative">
                    <a href="{{ '/layanan' }}" class="hover:text-secondary">Layanan</a>
                    {{-- Dropdown List --}}
                    <ul
                        class="hidden bg-white rounded shadow top-6 w-56 absolute group-hover:block  bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-80">
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="{{ '/layanan-online' }}" class="text-sm">Layanan Online</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="{{ '/layanan-kami' }}" class="text-sm">Layanan Kami</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="{{ '/cara-pengajuan-layanan' }}" class="text-sm">Cara Pengajuan Layanan</a>
                        </li>
                    </ul>
                </div>
                {{-- Dropdown --}}
                <div class="group relative">
                    <a href="{{ '/informasi' }}" class="hover:text-secondary">Informasi Publik</a>
                    {{-- Dropdown List --}}
                    <ul
                        class="hidden bg-white rounded shadow top-6 w-56 absolute group-hover:block  bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-80">
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="#" class="text-sm">Standar Pelayanan Publik</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="#" class="text-sm">Produk Hukum</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="#" class="text-sm">PPID</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="#" class="text-sm">Prosedur Operasional Standar</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="#" class="text-sm">Peta Proses Bisnis LLDIKTI Wilayah IV</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="#" class="text-sm">Buku Panduan / Pedoman</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="#" class="text-sm">Materi Kegiatan</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="#" class="text-sm">Buletin LLDIKTI Wilayah IV</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="#" class="text-sm">Buku Direktori PTS LLDIKTI IV</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="#" class="text-sm">Buku Statistik Perguruan Tinggi</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="#" class="text-sm">Agenda Kegiatan</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="#" class="text-sm">Galeri</a>
                        </li>
                    </ul>
                </div>
                <livewire:components.search-btn/>
            </div>
            <!-- right header section -->
            <div class="flex items-center space-x-2">
                <a href="#" class="hidden lg:block text-sm px-4 py-2 text-white bg-primary rounded-md hover:bg-primary/50 transition duration-150">
                    Kontak & Pengaduan
                </a>
                <div class="relative flex lg:hidden">
                    <div id='mobile-btn'>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </div>
                    <livewire:components.search-btn/>
                </div>
            </div>
        </div>
        <livewire:components.mobile-nav />
    </nav>
    <script>
        
        document.addEventListener('livewire:load', function () {
            const mobileBtn = document.querySelector('#mobile-btn');
            const menu = document.querySelector('#menu-mobile');

            mobileBtn.addEventListener('click',function(){
                menu.classList.toggle('hidden');
            })
        })
    </script>
</div>
