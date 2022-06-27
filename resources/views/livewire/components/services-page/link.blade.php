<div class="max-w-7xl mx-auto px-6">
    <ul class="grid lg:grid-cols-2 gap-y-4 gap-x-2">
        @foreach($list as $text)
        <li class="flex items-center space-x-6 group px-4 py-2 rounded shadow-md">
            <i class="fa-solid fa-book-bookmark text-primary"></i>
            <a href="#" class="font-semibold text-primary text-lg group-hover:text-primary/80 transition">{{ $text }}</a>
        </li>
        @endforeach
    </ul>
</div>
