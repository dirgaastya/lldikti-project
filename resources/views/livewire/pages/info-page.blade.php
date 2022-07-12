<x-guest-layout :pagetitle="$pagetitle" >
    <livewire:components.secondary-hero title="info" />
    <div class="max-w-7xl p-6 mx-auto my-4">
        {{-- Lastest News --}}
        <div class="py-3">
            <h3 class="text-3xl font-bold">Info Terbaru</h3>
        </div>
        <div class="grid grid-cols-3 gap-x-6">
            <div class="col-span-2 rounded-lg overflow-hidden shadow-md">
                <div class="w-full overflow-hidden">
                    <img src="https://source.unsplash.com/random/1600x800" alt="" class="bg-cover" height="400">
                </div>
                <div class="p-3">
                    <h3 class="text-2xl">Berita berita beritaa</h3>
                    <p class="text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos odio sed corporis in ex quia exercitationem quae non voluptatem aliquid? Culpa asperiores, qui, facere, cupiditate laborum quaerat dolor incidunt minus ea blanditiis rem quae ut. Debitis delectus illo dolores, quis optio neque sint voluptate tenetur corporis. Quas suscipit sapiente quibusdam.</p>
                    <a href="#" class="text-secondary text-sm">Baca Selengkapnya</a>
                </div>
            </div>
            <div class="col-span-1 flex flex-col justify-between ">
                {{-- Card List --}}
                @for ($i = 0; $i < 4; $i++)
                <div class="flex space-x-2 rounded-lg p-2 shadow-md">
                    <div class="w-1/3 rounded overflow-hidden">
                        <img src="https://source.unsplash.com/random/800x800" alt="" class="bg-cover">
                    </div>
                    <div>
                        <h3 class="text-xl">Berita berita beritaa</h3>
                        <p class="text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, sint.</p>
                        <a href="#" class="text-secondary text-sm">Baca Selengkapnya</a>
                    </div>
                </div>   
                @endfor

            </div>
            
        </div>
        
        <div class="py-8">
            <div class="py-3">
                <h3 class="text-3xl font-bold">Info Lainnya</h3>
            </div>
            <div class="grid grid-cols-3 gap-6">
                @for ($i = 0; $i < 9; $i++)
                <div class="rounded-lg overflow-hidden shadow-md">
                    <div class="w-full overflow-hidden">
                        <img src="https://source.unsplash.com/random/1600x800" alt="" class="bg-cover" height="400">
                    </div>
                    <div class="p-3">
                        <h3 class="text-2xl">Berita berita beritaa</h3>
                        <p class="text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, suscipit!</p>
                        <a href="#" class="text-secondary text-sm">Baca Selengkapnya</a>
                    </div>
                </div>
                @endfor
                
    
            </div>
        </div>
        
    </div>
</x-guest-layout>