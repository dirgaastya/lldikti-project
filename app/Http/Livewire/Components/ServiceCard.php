<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class ServiceCard extends Component
{
    public $title,$img;

    public function mount($title,$img){
        $this->title = $title;
        $this->img = $img;
    }

    public function render()
    {
        return view('livewire.components.service-card');
    }
}
