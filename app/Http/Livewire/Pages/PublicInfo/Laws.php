<?php

namespace App\Http\Livewire\Pages\PublicInfo;

use Livewire\Component;

class Laws extends Component
{
    public $lists = 
    [
        [
            'title'=> 'Peraturan Menteri Pendidikan dan Kebudayaan Republik Indonesia Nomor 5 Tahun 2020 Tentang Akreditasi Program Studi dan Perguruan Tinggi',
            'count' => '1987',
        ],
        [
            'title'=> 'Peraturan Menteri Riset, Teknologi, dan Pendidikan Tinggi Republik Indonesia Nomor 20 Tahun 2018 Tentang Penelitian',
            'count' => '222',
        ],
        [
            'title'=> 'Peraturan Menteri Riset, Teknologi, dan Pendidikan Tinggi Republik Indonseia Nomor 15 Tahun 2018 Tentang Organisasidan Tata Kerja Lembaga Layanan Pendidikan Layanan Pendidikan Tinggi',
            'count' => '324',
        ],
        [
            'title'=> 'PERMEN Nomor 20 Tahun 2017 Tentang PEMBERIAN TUNJANGAN PROFESI DOSEN DAN TUNJANGAN KEHORMATAN PROFESOR',
            'count' => '231',
        ],
        [
            'title'=> 'PERMEN Nomor 50 Tahun 2017 Tentang RENSTRA Kemenristek Dikti',
            'count' => '6544',
        ],
        [
            'title'=> 'Permen Nomor 51 Tahun 2017 Tentang SERTIFIKASI PENDIDIK UNTUK DOSEN',
            'count' => '6544',
        ],
        [
            'title'=> 'KEPUTUSAN DIRJEN PEMBELAJARAN DAN KEMAHASISWAAN KEMRISTEKDIKTI NOMOR 302BSK2017 TENTANG PDM',
            'count' => '644',
        ],
        [
            'title'=> 'Lampiran SK DIRJEN PEDOMAN TATA CARA PENYELENGAARAAN RPL',
            'count' => '453',
        ],
        [
            'title'=> 'SK DIRJEN PEDOMAN TATA CARA PENYELENGARAAN RPL',
            'count' => '23',
        ],
        [
            'title'=> 'KEPMEN-Diklat-PPG',
            'count' => '4532',
        ],
    ];

    public $no = 1;

    public function render()
    {
        return view('livewire.pages.public-info.laws')->layout('layouts.guest',['pagetitle' => 'Produk Hukum']);
    }
}
