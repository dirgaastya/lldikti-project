<?php

namespace App\Http\Livewire\Pages\Services;

use Livewire\Component;

class OnlineServicesPage extends Component
{
    public function render()
    {
        return view('livewire.pages.services.online-services-page')->layout('layouts.guest',['pagetitle'=>'Layanan Online']);
    }
}
