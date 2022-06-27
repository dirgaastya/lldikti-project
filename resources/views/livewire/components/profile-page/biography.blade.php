<div class="p-2 md:p-6">
    {{-- Name --}}
    <div class="space-y-2">
        <h3 class="text-3xl text-primary">Dr. M. Samsuri, S.Pd., M.T.</h3>
        <p class="text-lg text-gray-400">Kepala LLDIKTI Wilayah IV Jawa Barat dan Banten​</p>
    </div>
    {{-- Biography --}}
    <div class="mt-4 space-y-2">
        @foreach ($texts as $text)
        <p class="text-md text-slate-600 text-justify">{{ $text }}​</p>
        @endforeach
    </div>
    {{-- Education --}}
    <div class="mt-4 space-y-2 ">
        <h3 class="text-xl text-secondary">Pendidikan</h3>
        <ul class="list-disc px-2 text-md text-slate-600">
            <li>2009 S3 – Teknik Kimia, Universitas Indonesia (by research at Kyto University)</li>
            <li>2006 S2 – Teknik Kimia, Universitas Indonesia (by research at Kyto University)</li>
            <li>2001 S1 – Pendidikan Kimia, Universitas Lampung</li>
        </ul>
    </div>
    {{-- Experience --}}
    <div class="mt-4 space-y-2 ">
        <h3 class="text-xl text-secondary">Pendidikan</h3>
        <ul class="list-disc px-2 text-md text-slate-600">
            <li>2022 – sekarang   Kepala LLDIKTI Wilayah IV Jawa Barat dan Banten, Kemendikbudristek</li>
            <li>2020 – 2021  Ketua Dewas PTN BLU Univ Bengkulu</li>
            <li>2020 – 2021  Kepala Biro Perencanaan, Kemendikbudristek</li>
            <li>2019 – 2020  Plt. Kepala LLDIKTI Wilayah III Jakarta, Kemendikbud</li>
            <li>2018 – 2020  Sekretaris LLDIKTI Wilayah III Jakarta, Kemenristekdikti</li>
            <li>2015 – 2018  Kepala Bagian Monev Program dan Anggaran, Kemenristek</li>
            <li>2013 – 2015  Kepala Bagian Program dan Anggaran, Kemenristek</li>
            <li>2013  Kepala Bidang Transfer IPTEK Masyarakat, Kemenristek</li>
            <li>2012 – 2013  Kasubid Analisis IPTEK Industri Material</li>
            <li>2010 – 2011  Visiting Researcher KISTEP, Korea</li>
        </ul>
    </div>
</div>
