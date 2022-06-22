<div class="z-50 w-full fixed">
    <nav
        class="w-full px-5 lg:px-2  py-6 bg-white shadow-lg items-center border-b-[6px] border-primary">
        <div class="flex justify-between lg:justify-around">
            <div class="flex items-center">
                <img src="https://i0.wp.com/www.lldikti4.or.id/wp-content/uploads/2021/09/LLDIKTI-LOGOrev1-1.png" width=200>
            </div>
            {{-- left header section  --}}
            <div class="items-center hidden space-x-6 lg:flex">
                {{-- Dropdown --}}
                <div class="group relative">
                    <a href="#" class="hover:text-secondary">Profil</a>
                    {{-- Dropdown List --}}
                    <ul
                        class="hidden bg-white rounded shadow top-6 w-56 absolute group-hover:block  bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-80">
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="#">Profil LLDIKTI 4</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="#">Profil Kepala LLDIKTI 4</a>
                        </li>
                    </ul>
                </div>
                <a href="#" class="hover:text-secondary">Info</a>
                <a href="#" class="hover:text-secondary">Akuntabilitas</a>
                <a href="#" class="hover:text-secondary">Berita</a>
                {{-- Dropdown --}}
                <div class="group relative">
                    <a href="#" class="hover:text-secondary">Layanan</a>
                    {{-- Dropdown List --}}
                    <ul
                        class="hidden bg-white rounded shadow top-6 w-56 absolute group-hover:block  bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-80">
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="#">Layanan Online</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="#">Layanan Kami</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="#">Cara Pengajuan Layanan</a>
                        </li>
                    </ul>
                </div>
                {{-- Dropdown --}}
                <div class="group relative">
                    <a href="#" class="hover:text-secondary">Informasi Publik</a>
                    {{-- Dropdown List --}}
                    <ul
                        class="hidden bg-white rounded shadow top-6 w-56 absolute group-hover:block  bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-80">
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="#">Standar Pelayanan Publik</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="#">Produk Hukum</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="#">PPID</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="#">Prosedur Operasional Standar</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="#">Peta Proses Bisnis LLDIKTI Wilayah IV</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="#">Buku Panduan / Pedoman</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="#">Materi Kegiatan</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="#">Buletin LLDIKTI Wilayah IV</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="#">Buku Direktori PTS LLDIKTI IV</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="#">Buku Statistik Perguruan Tinggi</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="#">Agenda Kegiatan</a>
                        </li>
                        <li class="px-4 py-2 hover:bg-gray-200 hover:bg-opacity-20 hover:font-bold hover:text-secondary">
                            <a href="#">Galeri</a>
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