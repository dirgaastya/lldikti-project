<?php

namespace App\Http\Livewire\Components\NewsPage;

use Livewire\Component;

class ListNews extends Component
{
    public $lists =
    [
        
        "Penyerahan SK Kelembagaan ke 3 Perguruan Tinggi/Badan Penyelenggara",
        "Pengumuman pelaksanaan Pemilihan Mahasiswa Berprestasi Tingkat Nasional Tahun 2022",
        "Tawaran Wirausaha Merdeka Mahasiswa Tahun 2022",
        "Pendampingan JAD untuk Penilai JAD Internal dan Operator JAD Perguruan Tinggi",
        "Bimbingan Teknis Internalisasi Merdeka Belajar Ke Dalam Standar Nasional Pendidikan Tinggi di Lingkungan LLDIKTI Wilayah IV",
        "Peluang dan Potensi Implementasi MBKM Melalui Kerja Sama dengan ICE Institute",
        "Penandatanganan Nota Kesepahaman antara LLDIKTI Wilayah IV dengan BPJS Ketenagakerjaan",
        "Upacara Peringatan Hari Kebangkitan Nasional ke-114 “Ayo Bangkit Bersama”",
        "LLDIKTI 4 Membuka Klinik Pengusulan JAD",
        "LLDIKTI 4 Membuka Klinik Pengusulan JAD",
        "LLDIKTI 4 Membuka Klinik Pengusulan JAD",
        "LLDIKTI 4 Membuka Klinik Pengusulan JAD",
    ];

    public $highlights = 
    [
        "Pendampingan JAD Untuk Penilai JAD Internal dan Operator JAD Perguruan Tinggi",
        "Sosialisasi Jaminan Sosial Ketenagakerjaan Sesi 1",
        "SK Kemendikbudristek",
    ];

    public function render()
    {
        return view('livewire.components.news-page.list-news');
    }
}
