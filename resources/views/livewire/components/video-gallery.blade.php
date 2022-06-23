<div class="max-w-7xl mx-auto p-6">
    <div class="flex flex-col items-center">
        <h3 class="font-bold text-3xl md:text-4x">Video Kami</h3>
        <div class="w-1/4 h-1 rounded bg-secondary/80 mt-3 mb-6"></div>
    </div>
    <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0">
        <div class="flex justify-center">
                <video id="my-video" class="video-js vjs-default-skin vjs-big-play-centered w-[640px]" controls preload="auto" width="640" height="320" poster="{{ asset('assets/img/info-2.png') }}" data-setup="{}">
                    <source src="{{ asset('assets/video/Program-Akselerasi-LLDIKTI-Wilayah-4.mp4') }}" type="video/mp4" />
                    <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a
                        web browser that
                        <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                    </p>
                </video>
        </div>
        <div class="w-full h-80 px-6 overflow-y-scroll">
            <div class="flex items-center justify-between py-2 border-b border-gray-300">
                <h4 class="text-2xl font-bold">Daftar Putar</h4>
                <p class="text-md text-gray-600">7 Video</p>
            </div>
            @for ($i = 1; $i < 7; $i++)
            <div class="p-2 flex items-center space-x-4">
                <div class="w-16 h-16 flex items-center rounded-xl bg-primary">
                    <img src="{{ asset('assets/img/info-2.png') }}" alt="">
                    <video src="{{ asset('assets/video/Program-Akselerasi-LLDIKTI-Wilayah-4.mp4') }}" class="hidden"></video>
                </div>
                <div class="px-2">
                    <h4 class="text-md font-semibold">Program LLDIKTI</h4>
                </div>
            </div> 
            @endfor
            

        </div>
    </div>
</div>
