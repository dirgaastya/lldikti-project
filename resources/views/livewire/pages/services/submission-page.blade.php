<div>
    <livewire:components.secondary-hero title="Cara Pengajuan Layanan" />

    <div class="max-w-7x p-6 mx-auto">
        @foreach ($accordions as $accordion)
                <div class="tab bg-white w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-single-{{ $accordion['id'] }}" type="radio" name="tabs2">
                    <label class="block p-5 leading-normal cursor-pointer" for="tab-single-{{ $accordion['id'] }}">{{ $accordion['question']}}</label>
                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-tersier leading-normal">
                        <p class="p-5">
                            <video id="my-video" class="video-js vjs-default-skin vjs-big-play-centered w-[640px]" controls preload="auto" width="640" height="320" poster="" data-setup="{}">
                                <source src="{{ asset('assets/video/Program-Akselerasi-LLDIKTI-Wilayah-4.mp4') }}" type="video/mp4" />
                            </video>
                        </p>
                    </div>
                </div>
        @endforeach
    </div>
</div>
