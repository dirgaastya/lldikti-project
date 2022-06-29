<?php

namespace App\Http\Livewire\Pages\Services;

use Livewire\Component;

class SubmissionPage extends Component
{
    public $accordions = [
        [
        'question' => 'Penggunaan Aplikasi EMPAT (E-Office Manajemen Pelayanan Aplikasi Terpadu)',
        'answer' =>'',
        'id' => 'one',
        ],
        [
        'question' => 'Pengusulan Jabatan Akademik Dosen (JAD)',
        'answer' =>'        ',
        'id' => 'two',
        ],
        [
        'question' => 'Proses Pendataan Perguruan Tinggi dan Prodi pada PDDIKTI',
        'answer' =>'  ',
        'id' => 'three',
        ],
    ];

    public function render()
    {
        return view('livewire.pages.services.submission-page')->layout('layouts.guest',['pagetitle'=>'Cara Pengajuan Layanan']);
    }
}
