<div class="max-w-7xl mx-auto p-6">
    {{-- title --}}
    <div>
        <h3 class="text-3xl text-primary">Fungsi dan Tugas</h3>
        <p class="text-sm text-gray-400">LLDIKTI WILAYAH IV​</p>
    </div>
    {{-- Main --}}
    <div class="py-4 space-y-6 md:w-3/4">
        
        <div class="grid gap-y-4 gap-x-2">
            <div>
                <h3 class="text-2xl text-secondary">Fungsi</h3>
            </div>
            @foreach($functions as $function)
            <div class="flex items-center space-x-6 group px-4 py-2">
                <span class="text-primary font-bold text-lg">{{ $noF++ }}</span>
                <p class="text-slate-600 text-md ">{{ $function }}</p>
            </div>
            @endforeach
            <div>
                <h3 class="text-2xl text-secondary">Tugas</h3>
            </div>
            @foreach($tasks as $task)
            <div class="flex items-center space-x-6 group px-4 py-2">
                <span class="text-primary font-bold text-lg">{{ $noT++ }}</span>
                <p class="text-slate-600 text-md ">{{ $task }}</p>
            </div>
            @endforeach
        </div>

        
    </div>
</div>
