<div class="max-w-7xl mx-auto p-6">
    {{-- Title --}}
    <div class="flex flex-col lg:items-center">
        <h3 class="font-bold text-3xl md:text-4x">Layanan Kami</h3>
        <div class="w-1/3 h-1 rounded bg-secondary/80 mt-3 mb-6"></div>
    </div>
    {{-- List --}}
    <ul class="grid lg:grid-cols-2 gap-y-4 gap-x-2">
        @foreach($services as $service)
        <li class="flex items-center space-x-6 group px-4 py-2 rounded shadow-md">
            <i class="fa-solid fa-book-bookmark text-primary"></i>
            <a href="#" class="font-semibold text-primary text-lg group-hover:text-primary/80 transition">{{ $service }}</a>
        </li>
        @endforeach
    </ul>
    <div class="text-right my-6">
        <a href="#" class="text-sm px-4 py-2 text-white bg-primary rounded-md hover:bg-primary/80 transition ease-linear duration-300">Lihat Selengkapnya</a>
    </div>
</div>
