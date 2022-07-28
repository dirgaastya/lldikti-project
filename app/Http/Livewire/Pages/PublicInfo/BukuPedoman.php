<?php

namespace App\Http\Livewire\Pages\PublicInfo;

use Livewire\Component;

class BukuPedoman extends Component
{
    public $lists = 
    [
        'Pedoman Operasional Tentang Penilaian Angka Kredit Kenaikan Jabatan Akademik/Pangkat Dosen',
        'Persyaratan Usulan Dosen (NIDN, NIDK, NUP, Perubahan Nomor Registrasi, Perubahan Data Dosen, Pindah Homebase External-Internal) ',
        'Buku Panduan Pengusulan Program Penelitian Dan Pengabdian Kepada Masyarakat Melalui Simlitabmas Tahun 2018  ',
        'Panduan Penyusunan LKPT APT v1_1 ',
        'Panduan Penyusunan LED APT V1_1 ',
        'Panduan Edisi XII – Skema Penelitian 2018',
        'Persyaratan Perubahan Data Mahasiswa 2018',
        'Panduan Akses E-Resources 2018',
        'Panduan Beasiswa Peningkatan Prestasi Akademik (PPA) Tahun 2018',
        'Tata Cara dihapus PPH / PPN Dana Hibah Penelitian dan Pengabdian bagi Masyarakat',
        'Pedoman Perpajakan Hibah Penelitian Tahun 2018',
        'SINTA – Panduan Untuk Verifikator',
        'SINTA – Panduan Google Scholar',
        'SINTA – Panduan untuk Penulis',
        'Intisari Statistik Pendidikan Tinggi Tahun 2017',
        'Buku Statistik Pendidikan Tinggi Tahun 2017',
        'Panduan Tata Cara Penyelenggaraan Rekognisi Pembelajaran Lampau',
        'Slide Presentasi Rekognisi Pembelajaran Lampau 2017',
        'Pedoman Bantuan Biaya Pendidikan Bidikmisi Tahun 2017',
        'Bahan Menteri Riset, Teknologi, dan Pendidikan Tinggi Republik Indonesia pada Rapat Kerja Nasional Tahun 2017',
        'Persyaratan dan Prosedur Pendirian dan Perubahan PTS serta Pembukaan Program Studi Perguruan Pada Perguruan Tinggi Tahun 2017',
        'Menutupi Pedoman Sistem Penjaminan Mutu Pendidikan Tinggi 2016',
        'Pedoman Sistem Penjaminan Mutu Pendidikan Tinggi 2016',
        'Buku Kurikulum Pendidikan Tinggi Tahun 2014 Direktorat Pembelajaraan dan Kemahasiswaan Direktorat Jenderal Pendidikan Tinggi Kementerian Pendidikan dan Kebudayaan',
        'Buku Kurikulum Pendidikan Tinggi Tahun 2014 Direktorat Pembelajaraan dan Kemahasiswaan Direktorat Jenderal Pendidikan Tinggi Kementerian Pendidikan dan Kebudayaan',
        'Pedoman Program Bantuan Dana Untuk Kegiatan Kemahasiswaan (Ko Dan Ekstra Kurikuler) Tahun 2014',
        'Buku Pedoman Olimpiade Nasional Matematika dan Ilmu Pengetahuan Alam Perguruan Tinggi (ON MIPA-PT) Tahun 2014',
        'Pedoman Program Mahasiswa Wirausaha (PMW) Tahun 2013',
    'Pedoman Bidikmisi Tahun 2012',
    ];

    public function render()
    {
        return view('livewire.pages.public-info.buku-pedoman')->layout('layouts.guest', ['pagetitle'=>'Buku Pedoman']);
    }
}
