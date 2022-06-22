<div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 p-6">
    {{-- Title --}}
    <div class="flex flex-col justify-center px-4">
        <h3 class="font-bold text-3xl md:text-4xl">Info <span class="text-primary">Terbaru</span></h3>
        <div class="w-3/4 h-1 rounded bg-black/80 mt-3 mb-6"></div>
        <div>
            <a href="#" class="text-sm px-4 py-2 text-white bg-gradient-to-r from-primary via-primary/80 to-primary/40 rounded-md hover:bg-primary transition ease-linear duration-300">Lihat Selengkapnya</a>
        </div>
    </div>

    {{-- Card Container --}}
    <div class="flex p-6 space-x-4 justify-around bg-primary/50 rounded-md shadow">
        <livewire:components.card />
        <livewire:components.card />
    </div>
</div>
