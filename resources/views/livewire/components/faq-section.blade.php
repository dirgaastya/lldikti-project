<div class="max-w-7xl mx-auto p-6">
    <div class="flex bg-primary/50 justify-center py-8 items-center rounded-lg">
        <div class="w-full md:w-3/5 p-8 space-y-4">
            <div>
                <h3 class="text-white text-4xl font-bold drop-shadow">FAQ</h3>
                <p class="text-tersier text-lg font-semibold drop-shadow">Daftar Pertanyaan dan Jawaban yana Sering Ditanyakan</p>
            </div>
            <div class="shadow-md rounded-lg overflow-hidden">
                @foreach ($accordions as $accordion)
                <div class="tab bg-white w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-single-{{ $accordion['id'] }}" type="radio" name="tabs2">
                    <label class="block p-5 leading-normal cursor-pointer" for="tab-single-{{ $accordion['id'] }}">{{ $accordion['question']}}</label>
                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-tersier leading-normal">
                        <p class="p-5">
                            {{ $accordion['answer'] }}
                        </p>
                    </div>
                </div>
                @endforeach
                
                
            </div>
        </div>
        <div class="px-4">
            <img src="{{ asset('assets/img/faq.png') }}" alt="">
        </div>
    </div>
    <script>
        document.addEventListener('livewire:load', function () {
            let myRadios = document.getElementsByName('tabs2');
            let setCheck;
            let x = 0;
            for (x = 0; x < myRadios.length; x++) {
                myRadios[x].onclick = function () {
                    if (setCheck != this) {
                        setCheck = this;
                    } else {
                        this.checked = false;
                        setCheck = null;
                    }
                };
            }
        })

    </script>

    
</div>
