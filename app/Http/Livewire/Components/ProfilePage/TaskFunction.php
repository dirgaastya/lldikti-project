<?php

namespace App\Http\Livewire\Components\ProfilePage;

use Livewire\Component;

class TaskFunction extends Component
{
    public $noF = 1;
    public $noT = 1;
    public $functions =
    [
        'merumuskan kebijakan pengawasan, pengendalian, dan pembinaan perguruan tinggi swasta di wilayah kerjanya berdasarkan kebijakan Direktur Jenderal;',
        'melaksanakan koordinasi dalam rangka pengawasan, pengendalian, dan pembinaan perguruan tinggi swasta di wilayah kerjanya;',
        'melaksanakan koordinasi pelaksanaan pemantauan dan evaluasi penyelenggaraan. pendidikan, penelitian, dan pengabdian kepada masyarakat pada perguruan tinggi swasta di wilayah kerjanya dan wilayah pengembangannya;',
        'melaksanakan koordinasi dalam rangka pembinaan ketenagaan perguruan tinggi swasta.',
        'melaksanakan kerja sama dalam rangka pengawasan, pengendalian, dan pembinaan perguruan tinggi swasta di wilayah kerjanya;',
        'melaksanakan dan koordinasi pengernbangan perguruan tinggi swasta di wilayah kerjanya.'
    ];
    public $tasks =
    [
        'pelaksanaan pemetaan mutu pendidikan tinggi di wilayah kerjanya;',
        'pelaksanaan fasilitasi peningkatan mutu penyelenggaraan pendidikan tinggi di wilayah kerjanya;',
        'pelaksanaan fasilitasi peningkatan mutu pengelolaan perguruan tinggi di wilayah kerjanya;',
        'pelaksanaan fasilitasi kesiapan perguruan tinggi dalam penjaminan mutu eksternal di wilayah kerjanya;',
        'pelaksanaan evaluasi dan pelaporan pelaksanaan fasilitasi peningkatan mutu perguruan tinggi di wilayah kerjanya;',
        'pengelolaan data dan informasi di bidang mutu pendidikan tinggi di wilayah kerjanya; dan',
        'pelaksanaan administrasi LLDIKTI.'
    ];

    public function render()
    {
        return view('livewire.components.profile-page.task-function');
    }
}
