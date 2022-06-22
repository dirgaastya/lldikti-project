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
    <div class="flex items-center justify-between space-x-4 py-6">
        <livewire:components.service-card />
        <livewire:components.service-card />
        <livewire:components.service-card />
        <livewire:components.service-card />
    </div>
</div>
