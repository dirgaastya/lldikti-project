<livewire:components.secondary-hero title="produk hukum" />
<div class="max-w-7xl p-6 mx-auto my-4">
    {{-- Mobile --}}
    <div class="lg:hidden space-y-4">
        @foreach ($lists as $list)
        <div class="border-2 border-primary rounded-md p-3">
            <div class="flex space-x-4">
                <img src="http://baa.uad.ac.id/wp-content/uploads/2019/06/pdf-2.png" alt="" class="w-12 h-12">
                <a href="" class="font-semibold text-justify">{{ $list['title'] }}</a>
            </div>
            <div class="w-full flex justify-end space-x-2 py-2">
                <div class="rounded py-1 px-2 bg-secondary">
                    <a class="text-white text-xs" href="#">Keputusan Menteri</a>
                </div>
                <div class="rounded py-1 px-2 bg-secondary">
                    <a class="text-white text-xs" href="#">Produk Hukum</a>
                </div>
            </div>
            <div class="w-full text-right py-3">
                <a href="#" class="py-2 px-4 rounded-lg bg-primary text-white font-semibold"> Download</a>
            </div>
            <div class="border-t boreder-tersier flex justify-between pt-3">
                <p class="flex items-center space-x-2">
                    <img src="https://cdn.icon-icons.com/icons2/1875/PNG/512/download_120262.png" alt="" width="16">
                    <span class="text-xs text-gray-500">{{ $list['count'] }} download</span>
                </p>
                <p class="text-xs text-gray-500">
                    23 Juli 2022
                </p>
            </div>
        </div>
        @endforeach
    </div>
    {{-- Desktop --}}
    <div class="hidden lg:block">
        <table class="w-full divide-y divide-gray-300 ">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-2 text-xs text-gray-500">
                        No
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-500">
                        Judul
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-500">
                        Tanggal
                    </th>
                    <th class="px-6 py-2 text-xs text-gray-500">
                        Download
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-300">
                @foreach($lists as $list)
                <tr class="">
                    <td class="px-6 py-4 text-sm text-gray-500">
                        {{ $no++ }}
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-900">
                            {{ $list['title'] }}
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-gray-500">
                            <p>7 Juli 2022</p>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm text-white">
                            <a href="#" class="py-2 px-4 rounded-lg bg-primary">Download</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
