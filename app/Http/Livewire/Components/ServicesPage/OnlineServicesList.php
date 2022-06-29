<?php

namespace App\Http\Livewire\Components\ServicesPage;

use Livewire\Component;

class OnlineServicesList extends Component
{
    public $listServices = 
    [
        [
            'title'=>'JAD Online',
            'slug'=>'jad-online'
        ],
        [
            'title'=>'Jurnal LLDIKTI',
            'slug'=>'jurnal-lldikti'
        ],
        [
            'title'=>'Buletin LLDIKTI',
            'slug'=>'buletin-llditki'
        ],
        [
            'title'=>'Simonev',
            'slug'=>'simonev'
        ],
        [
            'title'=>'Sisisfo.lldikti4',
            'slug'=>'sisfo-lldikti'
        ],
        [
            'title'=>'Simantu',
            'slug'=>'simantu'
        ],
        [
            'title'=>'BKD Online',
            'slug'=>'bkd-online'
        ],
        [
            'title'=>'Pindah Homebase',
            'slug'=>'homebase'
        ],
        [
            'title'=>'SKP Online',
            'slug'=>'skp-online'
        ],
        [
            'title'=>'Digilibrary',
            'slug'=>'digilibrary'
        ],
        [
            'title'=>'Aplikasi Empat',
            'slug'=>'app-empat'
            ]
    ];


    public function render()
    {
        return view('livewire.components.services-page.online-services-list');
    }
}
