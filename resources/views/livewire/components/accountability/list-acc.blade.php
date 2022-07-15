<div class="max-w-7xl flex flex-wrap justify-around p-6 mx-auto">
    @foreach ($lists as $list)
        <div class="w-96 mb-4  overflow-hidden rounded shadow-md border">
            <div class="flex flex-col justify-between">
                <div class=" bg-primary/50  py-4 px-6  ">
                    <h3 class="text-2xl text-tersier font-bold">{{ $list['title'] }}</h3>
                    <div class="w-2/3 h-1 bg-secondary rounded-lg"></div>
                    <p class="text-md font-semibold">{{ $list['about'] }}</p>
                </div>
                <div class=" py-2 px-2">
                    <button class="py-2 px-1 rounded-md bg-secondary border">
                        <span class=" text-white">Download</span>
                    </button>
                </div>
            </div>
            
        </div>
    @endforeach
</div>