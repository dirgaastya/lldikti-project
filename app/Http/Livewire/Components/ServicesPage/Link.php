<?php

namespace App\Http\Livewire\Components\ServicesPage;

use Livewire\Component;

class Link extends Component
{
    public $list =
    [
            'Pelayanan Mutasi Mahasiswa',
            'Pelayanan Penilaian Angka Kredit Jabatan Akademik Dosen Asisten Ahli dan Lektor',
            'Pelayanan Rekomendasi Usulan Jabatan Akademik Dosen Lektor Kepala dan Profesor',
            'Pelayanan Pemberian Rekomendasi Beasiswa Dosen',
            'Pelayanan Rekomendasi Alih Kelola Perguruan Tinggi Swasta',
            'Pelayanan Rekomendasi Pendirian Perguruan Tinggi Swasta Baru',
            'Pelayanan Rekomendasi Pembukaan Program Studi Baru PTS',
            'Pelayanan Rekomendasi Perubahan Bentuk Perguruan Tinggi Swasta',
            'Pelayanan Rekomendasi Pembukaan Program Studi Luar Kampus Utama',
            'Pelayanan Rekomendasi Perubahan Lokasi Kampus Utama Perguruan Tinggi',
            'Pelayanan Rekomendasi Penggabungan / Penyatuan PTS',
            'Pelayanan Rekomendasi pencabutan izin Program Studi / PTS',
            'Pelayanan Rekomendasi Perubahan Nama Perguruan Tinggi',
            'Pelayanan Rekomendasi Perubahan Nama Program Studi',
            'Pelayanan Rekomendasi Perubahan Nama Badan Penyelenggara Perguruan Tinggi Swasta',
            'Pelayanan Publikasi Informasi',
            'Pelayanan Pengaduan Pelayanan Publik',
            'Pelayanan Data dan Informasi',
            'Pelayanan Penerbitan Surat Pengantar Migrasi Data PT/Prodi pada PDDIKTI',
            'Pelayanan Penerbitan Surat Pengantar Pendataan PT/Prodi pada PDDIKTI',
            'Pelayanan Penerbitan SK Penyetaraan Pangkat (Inpassing) Dosen Bukan Pegawai Negeri Sipil Untuk Golongan III',
            'Pelayanan Penerbitan SK Penyetaraan Pangkat (Inpassing) Dosen Bukan Pegawai Negeri Sipil Untuk Golongan IV',
            'Pelayanan Alih Jabatan/Tugas Pegawai Negeri Sipil Non Dosen Menjadi Dosen',
            'Pelayanan Mutasi Dosen Pegawai Negeri Sipil Dari PTN atau PTS di Luar LLDIKTI Wilayah IV ke LLDIKTI Wilayah IV',
            'Pelayanan Surat Usulan Penerbitan SK Tugas Belajar Dosen Pegawai Negeri Sipil Dpk',
            'Pelayanan Ijin Belajar Dosen Pegawai Negeri Sipil Dpk.',
            'Pelayanan Pembuatan Surat Usulan SK Kenaikan Pangkat/Golongan Dosen Pegawai Negeri Sipil Dpk',
            'Pelayanan Kenaikan Pangkat/Golongan Dosen Tetap Yayasan III',
            'Pelayanan Kenaikan Pangkat/Golongan Dosen Tetap Yayasan IV',
            'Pelayanan Penerbitan Surat Rekomendasi Perpindahan Dosen Bukan Pegawai Negeri Sipil',
            'Pelayanan Validasi Ijazah Bagi PTS yang Sudah Tidak Beroperasi atau Tutup',
            'Pelayanan Validasi Ijazah bagi PTS',
    ];
    public function render()
    {
        return view('livewire.components.services-page.link');
    }
}
