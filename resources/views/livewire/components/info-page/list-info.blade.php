<div class="max-w-7xl p-6 mx-auto my-4">
    {{-- Lastest News --}}
    <div class="py-3">
        <h3 class="text-3xl font-bold text-primary my-3">Info Terbaru</h3>
        <hr class="my-3">
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-x-6">
        <div class="lg:col-span-2 rounded-lg overflow-hidden shadow-md">
            <div class="w-full overflow-hidden">
                <img src="https://source.unsplash.com/random/1600x800" alt="" class="bg-cover" height="400">
            </div>
            <div class="my-6 p-3 flex flex-col justify-between">
                <a class="text-lg text-justify lg:text-3xl">SOSIALISASI PELAPORAN AKADEMIK MELALUI APLIKASI NEO FEEDER</a>
                <div>
                    <a href="#" class="text-secondary text-sm">Baca Selengkapnya</a>
                    <p class="text-sm text-gray-400">12 July 2022</p>
                </div>
            </div>
        </div>
        <div class="lg:col-span-1 flex flex-col justify-between ">
            {{-- Card List --}}
            @foreach ($highlights as $highlight)
            <div class="flex space-x-2 rounded-lg p-2 py-4 shadow-md">
                <div class="w-1/3 flex items-center rounded overflow-hidden">
                    <img src="https://source.unsplash.com/random/800x800" alt="" class="bg-cover">
                </div>
                <div class="w-2/3 flex flex-col justify-around">
                    <a href="#" class="text-justify text-md lg:text-xl">{{ $highlight }}</a>
                    <div>
                        <a href="#" class="text-secondary text-sm">Baca Selengkapnya</a>
                        <p class="text-xs text-gray-400">12 July 2022</p>
                    </div>
                </div>
                
            </div>   
            @endforeach

        </div>
        
    </div>
    
    <div class="py-8">
        <div class="py-3">
            <h3 class="text-3xl font-bold text-primary ">Info Lainnya</h3>
            <hr class="my-3">
        </div>
        <div class="grid grid-cols-2 gap-3 lg:grid-cols-3 lg:gap-6">
            @foreach ($lists as $list)
            <div class="flex flex-col justify-between rounded-lg overflow-hidden shadow-md">
                <div>
                    <div class="w-full overflow-hidden">
                        <img src="https://source.unsplash.com/random/1600x800" alt="" class="bg-cover" height="400">
                    </div>
                    <div class="p-3">
                        <h3 class="text-md lg:text-xl">{{ $list }}</h3>
                    </div>
                </div>
                <div class="p-3">
                    <a href="#" class="text-secondary text-sm">Baca Selengkapnya</a>
                    <p class="text-xs text-gray-400">12 July 2022</p>
                </div>
            </div>
            @endforeach
            

        </div>
    </div>
</div>