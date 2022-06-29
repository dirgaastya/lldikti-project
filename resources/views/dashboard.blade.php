<x-app-layout :pagetitle="$pagetitle">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="grid grid-cols-1 md:grid-cols-2">
            {{-- Tag Line --}}
            <div class="px-6 py-8 flex flex-col justify-center">
                <h3 class="text-4xl lg:text-5xl font-bold">Selemat Datang di 
                    <span class="text-primary">
                        Lembaga Layanan Pendidikan Tinggi Wilayah <span class="text-secondary">4</span>
                    </span>
                </h3>
                <h4 class="text-2xl my-4 font-semibold">Jawa Barat dan Banten</h4>
                <p class="text-md text-gray-500">
                    LLDIKTI mempunyai tugas membantu peningkatan mutu penyelenggaraan pendidikan tinggi baik perguruan tinggi negeri maupun perguruan tinggi swasta di wilayah kerjanya.
                </p>
                <div class="flex justify-between mt-8">
                    <ul class="flex space-x-2">
                        <li>
                            <a href="https://www.instagram.com/lldiktiwilayah4">
                                <i class="fa-brands fa-instagram text-3xl text-primary hover:text-transparent hover:bg-clip-text hover:bg-gradient-to-r hover:from-primary hover:to-primary/50 transition duration-300"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/lldiktiwilayah4?s=09">
                                <i class="fa-brands fa-twitter text-3xl text-primary hover:text-transparent hover:bg-clip-text hover:bg-gradient-to-r hover:from-primary hover:to-primary/50 transition duration-300"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/LLDIKTIWILAYAH4">
                                <i class="fa-brands fa-facebook text-3xl text-primary hover:text-transparent hover:bg-clip-text hover:bg-gradient-to-r hover:from-primary hover:to-primary/50 transition duration-300"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/c/LLDIKTIWILAYAH4">
                                <i class="fa-brands fa-youtube text-3xl text-primary hover:text-transparent hover:bg-clip-text hover:bg-gradient-to-r hover:from-primary hover:to-primary/50 transition duration-300"></i>
                            </a>
                        </li>
                    </ul>
                    <div>
                        <a href="#" class="text-sm px-4 py-2 text-white bg-primary rounded-md hover:bg-primary/80 transition ease-linear duration-300">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="px-6 py-8">
              <div class="rounded max-w-3xl overflow-hidden">
                <img src="https://i1.wp.com/www.lldikti4.or.id/wp-content/uploads/2021/10/maskottfixxx.png" alt="maskot">
            </div>
            </div>
        </div>
        </div>
    </div>
</x-app-layout>
