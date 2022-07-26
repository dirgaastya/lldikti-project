<div class="max-w-[98rem] pt-20 pb-6 mx-auto">
    <div class="w-full md:flex py-16 px-4 bg-gradient-to-r from-primary/80 via-blue-300 to-blue-100">
        {{-- Tag Line --}}
        <div class="px-3 py-4 md:px-6 md:py-8 flex flex-col justify-center">
            <h3 class="text-white drop-shadow text-xl lg:text-3xl font-semibold">LEMBAGA LAYANAN PENDIDIKAN TINGGI
                WILAYAH 4
            </h3>
            <p class="text-secondary drop-shadow font-semibold text-lg lg:text-2xl mt-4 uppercase">{{ $title }}</p>
            <ul class="flex space-x-3 mt-8">
                <li>
                    <a href="https://www.instagram.com/lldiktiwilayah4">
                        <i
                            class="fa-brands fa-instagram text-md text-white hover:text-transparent hover:bg-clip-text hover:bg-gradient-to-br hover:from-secondary hover:to-white transition duration-300"></i>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/lldiktiwilayah4?s=09">
                        <i
                            class="fa-brands fa-twitter text-md text-white hover:text-transparent hover:bg-clip-text hover:bg-gradient-to-br hover:from-secondary hover:to-white transition duration-300"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/LLDIKTIWILAYAH4">
                        <i
                            class="fa-brands fa-facebook text-md text-white hover:text-transparent hover:bg-clip-text hover:bg-gradient-to-br hover:from-secondary hover:to-white transition duration-300"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/c/LLDIKTIWILAYAH4">
                        <i
                            class="fa-brands fa-youtube text-md text-white hover:text-transparent hover:bg-clip-text hover:bg-gradient-to-br hover:from-secondary hover:to-white transition duration-300"></i>
                    </a>
                </li>
            </ul>


            @if ($title == 'profil' || $title == 'layanan')
            <div class=" mt-6 space-y-3">
                @if ($title == 'profil')
                {{-- Profil Page --}}
                @foreach($profil_links as $link)
                <a href="{{ '/profil/'.$link['slug'] }}"
                    class="md:w-1/2 flex justify-between py-1 px-3 bg-white rounded-lg group cursor-pointer">
                    <h3 class="font-semibold text-tersier group-hover:text-secondary">{{ $link['link'] }}</h3>
                    <p
                        class="w-6 rounded-full text-center text-white bg-tersier group-hover:bg-secondary transition ease-in duration">
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </p>
                </a>
                @endforeach
                @else
                {{-- Services Page --}}
                @foreach($service_links as $link)
                <a href="{{ '/profil/'.$link['slug'] }}"
                    class="md:w-1/2 flex justify-between py-1 px-3 bg-white rounded-lg group cursor-pointer">
                    <h3 class="font-semibold text-tersier group-hover:text-secondary">{{ $link['link'] }}</h3>
                    <p
                        class="w-6 rounded-full text-center text-white bg-tersier group-hover:bg-secondary transition ease-in duration">
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </p>
                </a>
                @endforeach
                @endif
            </div>
            @endif
        </div>
        {{-- Image --}}
        <div class="hidden md:flex justify-center items-center">
            <img src="{{ asset('assets/img/hero.png') }}" alt="">
        </div>
    </div>

</div>
