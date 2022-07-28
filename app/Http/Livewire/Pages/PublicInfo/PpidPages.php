<?php

namespace App\Http\Livewire\Pages\PublicInfo;

use Livewire\Component;

class PpidPages extends Component
{
    public function render()
    {
        return view('livewire.pages.public-info.ppid-pages')->layout('layouts.guest',['pagetitle' => 'PPID']);
    }
}
