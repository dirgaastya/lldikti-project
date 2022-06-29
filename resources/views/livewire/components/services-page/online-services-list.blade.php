<div class="max-w-7xl mx-auto p-6">
    
    @foreach ($listServices as $listService)
        <div class="flex items-center space-x-3 my-4 py-6 px-4 bg-primary/50 rounded shadow">
            <img src="{{ asset('assets/img/'.$listService['slug'].'.png') }}" alt="{{ $listService['slug'] }}" width="60">
            <h3 class="text-2xl font-semibold">{{ $listService['title'] }}</h3>
        </div>
    @endforeach

</div>
