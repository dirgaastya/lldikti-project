<div class="max-w-7xl mx-auto p-6">
    {{-- title --}}
    <div>
        <h3 class="text-3xl text-primary">Sambutan</h3>
        <p class="text-sm text-gray-400">Kepala Lembaga Layanan Pendidikan Tinggi (LLDIKTI) Wilayah IV, Jawa Barat dan Banten​</p>
    </div>
    {{-- Main --}}
    <div class="py-4 space-y-6 md:w-3/4">
        @foreach ($texts as $text)
        <p class="text-md text-justify text-slate-600">
            {{ $text }}
        </p>
        @endforeach
    </div>
</div>
