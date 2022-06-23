<div class="max-w-[98rem] mx-auto p-6 bg-primary/50 mb-8">
    {{-- Title --}}
    <div class="flex items-center justify-around px-8">
        <div class="w-1/3 h-1 bg-white rounded-full"></div>
        <div class="w-1/3 text-center">
            <h3 class="font-bold text-white text-3xl md:text-4xl">
                Layanan Online    
            </h3> 
        </div>
        <div class="w-1/3 h-1 bg-white rounded-full"></div>
    </div>

    {{-- Card Container --}}
    <div class="flex items-center justify-around space-x-4 py-6">
        @foreach ($services as $service)
        <livewire:components.service-card title='{{ $service }}' img='{{ $service }}' />
        @endforeach
    </div>
    <div class="text-right my-6">
        <a href="#" class="text-sm px-4 py-2 text-primary bg-white rounded-md hover:bg-primary hover:text-white transition ease-linear">Lihat Selengkapnya</a>
    </div>
</div>
