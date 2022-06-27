<div class="max-w-7xl mx-auto p-6">
    {{-- title --}}
    <div>
        <h3 class="text-3xl text-primary">Sejarah</h3>
        <p class="text-sm text-gray-400">LLDIKTI WILAYAH IV​</p>
    </div>
    {{-- Main --}}
    <div class="py-4 space-y-6 md:w-3/4">
        <div class="flex justify-between space-x-4 mx-auto">
            <div class="rounded-lg overflow-hidden">
                <img src="{{ url('https://i0.wp.com/www.lldikti4.or.id/wp-content/uploads/2021/09/WhatsApp-Image-2019-11-29-at-10.38.37-AM1.jpeg?ssl=1') }}" alt="" width="400" class="rounded-lg">
            </div>
            <div class="rounded-lg overflow-hidden">
                <img src="{{ url('https://i2.wp.com/www.lldikti4.or.id/wp-content/uploads/2021/09/4X4A5967-scaled.jpg?ssl=1') }}" alt="" width="400" class="rounded-lg">
            </div>
            <div class="rounded-lg overflow-hidden">
                <img src="{{ url('https://i0.wp.com/www.lldikti4.or.id/wp-content/uploads/2021/09/WhatsApp-Image-2019-12-02-at-7.34.30-PM.jpeg?ssl=1') }}" alt="" width="400" class="rounded-lg">
            </div>
        </div>
        @foreach ($texts as $text)
        <p class="text-md text-justify text-slate-600">
            {{ $text}}
        </p>
        @endforeach
    </div>
</div>
