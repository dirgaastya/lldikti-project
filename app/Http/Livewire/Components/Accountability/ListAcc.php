<?php

namespace App\Http\Livewire\Components\Accountability;

use Livewire\Component;

class ListAcc extends Component
{   
    public $lists = 
    [
        [
            'title'=> 'RENSTRA',
            'about'=> 'RENSTRA LLDIKTI Wilayah IV Tahun 2020 - 2024'
        ],
        [
            'title'=> 'Perjanjian Kerja',
            'about'=> 'Perjanjian Kinerja Tahun 2022 Kepala LLDIKTI Wilayah IV Bandung Dengan Sekretaris Jenderal'
        ],
        [
            'title'=> 'Perjanjian Kinerja TAHUN 2022',
            'about'=> 'Perjanjian Kinerja Tahun 2022 Kepala LLDIKTI Wilayah IV Bandung Dengan Kepala Bagian Umum dan Koordinator Fungsi'
        ],
        [ 
            'title'=> 'IKU',
            'about'=> 'Keputusan menteri pendidikan dan kebudayaan republik indonesia nomor 754/p/2o2o tentang indikator kinerja utama perguruan tinggi negeri dan lembaga layanan pendidikan tinggi di lingkungan kementerian pendidikan dan kebudayaan tahun 2020
            '
        ],
        [
            'title'=> 'IKU',
            'about'=> 'KEP-MEN-3 2021'
        ],
        [
            'title'=> 'IKU',
            'about'=> 'SURAT-PENGANTAR-KEPMEN-IKU-PTN-DAN-LLDIKTI'
        ],
        [
            'title'=> 'LAKIP',
            'about'=> 'LAKIN 2021'
        ]
    ];

    public function render()
    {
        return view('livewire.components.accountability.list-acc');
    }
}
