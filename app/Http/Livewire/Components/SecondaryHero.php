<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class SecondaryHero extends Component
{
    public $title;
    public $profil_links  = 
    [
        ['link'=>'Profil LLDIKTI Wilayah IV','slug'=>'lldikti-wilayah-iv'],
        ['link'=>'Profil Ketua LLDIKTI Wilayah IV','slug'=>'kepala-lldikti-wilayah-iv']
    ];
    public $service_links = 
    [
        ['link'=>'Layanan Online','slug'=>'layanan-online'],
        ['link'=>'Layanan Kami','slug'=>'layanan-kami']
    ];

    public function mount($title){
        $this->title = $title;
    }

    public function render()
    {
        return view('livewire.components.secondary-hero');
    }
}
