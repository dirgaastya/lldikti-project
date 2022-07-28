<div>
    <livewire:components.secondary-hero title="Buku Panduan / Pedoman" />
    <div class="max-w-7xl p-3 lg:p-6 mx-auto my-4">
        <h3 class="text-primary font-bold text-2xl lg:text-4xl">Buku Panduan / Pedoman</h3>
        <ul class="list-disc text-primary">
            @foreach ($lists as $list)    
            <li class="flex space-x-3 items-center  text-tersier">
                <i class="fa-solid fa-book-open-reader"></i>
                <p>{{ $list }}</p>
            </li>
            @endforeach
        </ul>
    </div>
</div>
