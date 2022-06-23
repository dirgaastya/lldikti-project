<div class="w-72 max-w-xs shadow rounded-lg overflow-hidden bg-white pt-8">
    <div class="flex justify-center">
    <img src="{{ asset('assets/img/'.$img.'.png') }}" alt="" width="120">
    </div>
    {{-- Info Title --}}
    <div class="px-2 py-4 bg-white space-y-4">
        <h3 class="text-lg font-semibold text-primary ">{{ $title }}</h3>
        <div class="flex border-t py-1 space-x-3 justify-end items-center">
            <i class="fa-solid fa-book text-primary"></i>
            <a href="#" class="text-sm text-secondary hover:font-bold transition ease-in-out duration-300">Baca Selengkapnya</a>
        </div>
    </div>
</div>
