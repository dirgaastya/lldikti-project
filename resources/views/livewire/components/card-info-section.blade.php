<div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 p-6">
    {{-- Title --}}
    <div class="flex flex-col justify-center px-4">
        <h3 class="font-bold text-2xl md:text-4xl">Info Terbaru</h3>
        <div class="w-3/4 h-1 rounded bg-secondary mt-3 mb-6"></div>
        <div class="hidden lg:block mb-4">
            <a href="#" class="text-sm px-4 py-2 text-white bg-primary rounded-md hover:bg-primary/80 transition ease-linear duration-300">Lihat Selengkapnya</a>
        </div>
    </div>

    {{-- Card Container --}}
    <div class="flex flex-col lg:flex-row items-center p-6 lg:space-x-4 space-y-4 lg:space-y-0 justify-around bg-primary/50 rounded-md shadow">
        <livewire:components.card />
        <livewire:components.card />
    </div>
    <div class="block lg:hidden my-4">
        <a href="#" class="text-sm px-4 py-2 text-white bg-primary rounded-md hover:bg-primary/80 transition ease-linear duration-300">Lihat Selengkapnya</a>
    </div>
</div>
