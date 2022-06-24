<div class="max-w-[98rem] mx-auto p-6 bg-primary/50 mb-8">
    {{-- Title --}}
    <div class="lg:flex items-center justify-around px-8">
        <div class="hidden lg:block w-1/3 h-1 bg-white rounded-full"></div>
        <div class="lg:w-1/3 lg:text-center">
            <h3 class="font-bold text-white text-2xl md:text-4xl">
                Layanan Online    
            </h3> 
        </div>
        <div class="w-3/4 lg:w-1/3 h-1 bg-white rounded-full"></div>
    </div>

    {{-- Card Container --}}
    <div class="flex flex-col lg:flex-row items-center justify-around lg:space-x-4 space-y-4 lg:space-y-0 py-6">
        @foreach ($services as $service)
        <livewire:components.service-card title='{{ $service }}' img='{{ $service }}' />
        @endforeach
    </div>
    <div class="text-right my-6">
        <a href="#" class="text-sm px-4 py-2 text-primary bg-white rounded-md hover:bg-primary hover:text-white transition ease-linear">Lihat Selengkapnya</a>
    </div>
</div>
