<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class CardServiceSection extends Component
{
    public $services = ['SPTJM','Digilibrary','Jurnal LLDIKTI','Buletin LLDIKTI'];

    public function render()
    {
        return view('livewire.components.card-service-section');
    }
}
