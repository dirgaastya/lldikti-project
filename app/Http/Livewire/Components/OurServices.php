<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class OurServices extends Component
{
    
    public $services = [
        'Pelayanan Validasi Ijazah Bagi PTS yang Sudah Tidak Beroperasi atau Tutup',
        'Pelayanan Rekomendasi Perubahan Nama Badan Penyelenggara Perguruan Tinggi Swasta',
        'Standar Pelayanan Mutasi Mahasiswa',
        'Pelayanan Penilaian Angka Kredit Jabatan Akademik Dosen Asisten Ahli dan Lektor',
        'Pelayanan Rekomendasi Usulan Jabatan Akademik Dosen Lektor Kepala dan Profesor',
        'Pelayanan Rekomendasi Alih Kelola Perguruan Tinggi Swasta',
        'Pelayanan Rekomendasi Pendirian Perguruan Tinggi Swasta Baru',
        'Rekomendasi Pembukaan Program Studi Baru PTS'
    ];

    public function render()
    {
        return view('livewire.components.our-services');
    }
}
